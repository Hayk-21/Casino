<?php

namespace Packages\Payments\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Packages\Payments\Http\Requests\Backend\ApproveRejectWithdrawal;
use Packages\Payments\Http\Requests\Backend\UpdateWithdrawal;
use Packages\Payments\Models\Sort\Backend\WithdrawalSort;
use Packages\Payments\Models\Withdrawal;
use Packages\Payments\Services\CoinpaymentsPaymentService;
use Packages\Payments\Services\WithdrawalService;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    /**
     * Deposits listing
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sort = new WithdrawalSort($request);
        $search = $request->query('search');

        $withdrawals = Withdrawal::with('account.user')
            // when status filter is provided
            ->when($request->has('status'), function($query) use ($request) {
                $query->where('status', $request->query('status'));
            })
            // when search is provided
            ->when($search, function($query, $search) {
                // query related user model
                $query->whereHas('account.user', function($query) use($search) {
                    $query
                        ->whereRaw('LOWER(name) LIKE ?', ['%'. strtolower($search) . '%'])
                        ->orWhereRaw('LOWER(email) LIKE ?', ['%'. strtolower($search) . '%']);
                });
            })
            ->orderBy($sort->getSortColumn(), $sort->getOrder())
            ->paginate($this->rowsPerPage);

        return view('payments::backend.pages.withdrawals.index', [
            'withdrawals'   => $withdrawals,
            'search'        => $search,
            'sort'          => $sort->getSort(),
            'order'         => $sort->getOrder(),
        ]);
    }

    public function show(Withdrawal $withdrawal)
    {
        return view('payments::backend.pages.withdrawals.show', [
            'withdrawal' => $withdrawal
        ]);
    }
    public function edit(Request $request, Withdrawal $withdrawal)
    {
        if (!$withdrawal->is_created && !$withdrawal->is_in_progress)
            return redirect()->route('backend.withdrawals.index')->withErrors(__('This withdrawal can not be edited.'));

        return view('payments::backend.pages.withdrawals.edit', [
            'withdrawal'    => $withdrawal
        ]);
    }

    public function update(UpdateWithdrawal $request, Withdrawal $withdrawal)
    {
        $withdrawal->comment = $request->comment;
        $withdrawal->save();

        return redirect()
            ->route('backend.withdrawals.index')
            ->with('success', __('Withdrawal is successfully saved.'));
    }

    public function cancel(ApproveRejectWithdrawal $request, Withdrawal $withdrawal)
    {
        $withdrawalService = WithdrawalService::fromModelInstance($withdrawal);
        $withdrawalService->cancel();

        return redirect()
            ->route('backend.withdrawals.index')
            ->with('success', __('Withdrawal is rejected.'));
    }

    public function approve(ApproveRejectWithdrawal $request, Withdrawal $withdrawal, CoinpaymentsPaymentService $coinpaymentsPaymentService)
    {
        $user = $request->user();
        $rate = config('payments.rate');
        $currency = config('payments.currency');
        $amount = $rate != 0 ? $withdrawal->amount / $rate : 0;

        // init withdrawal
        try {
            $coinpaymentsPaymentService->initializeWithdrawal(
                $amount,
                $currency,
                $withdrawal->payment_currency,
                $withdrawal->wallet,
                __('Withdrawal for user :name (:email)', ['name' => $user->name, 'email' => $user->email])
            );
        // catch any exceptions
        } catch (\Exception $exception) {
            return back()->withInput()->withErrors($exception->getMessage());
        }

        // process withdrawal
        $withdrawalService = WithdrawalService::fromModelInstance($withdrawal);
        $withdrawalService->process($coinpaymentsPaymentService->getWithdrawalId());

        return redirect()
            ->route('backend.withdrawals.index')
            ->with('success', __('Withdrawal transaction is approved and being processed. External transaction ID: :id', ['id' => $coinpaymentsPaymentService->getWithdrawalId()]));
    }

    public function complete(ApproveRejectWithdrawal $request, Withdrawal $withdrawal)
    {
        $withdrawalService = WithdrawalService::fromModelInstance($withdrawal);
        $withdrawalService->complete();

        return redirect()
            ->route('backend.withdrawals.index')
            ->with('success', __('Withdrawal is completed.'));
    }

    public function track(Withdrawal $withdrawal, CoinpaymentsPaymentService $coinpaymentsPaymentService)
    {
        if (!$withdrawal->external_id)
            return back()->withErrors(__('There is no external transaction for this withdrawal.'));

        return view('payments::backend.pages.withdrawals.track', [
            'withdrawal'    => $withdrawal,
            'info'          => $coinpaymentsPaymentService->getWithdrawalInfo($withdrawal->external_id)
        ]);
    }
}
