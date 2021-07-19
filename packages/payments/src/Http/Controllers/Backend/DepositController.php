<?php

namespace Packages\Payments\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Packages\Payments\Models\Deposit;
use Packages\Payments\Models\Sort\Backend\DepositSort;
use Illuminate\Http\Request;
use Packages\Payments\Services\CoinpaymentsPaymentService;

class DepositController extends Controller
{
    /**
     * Deposits listing
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sort = new DepositSort($request);
        $search = $request->query('search');

        $deposits = Deposit::with('account.user')
            // when status filter is provided
            ->when($request->has('status'), function($query) use ($request) {
                $query->where('status', $request->query('status'));
            })
            // when search filter is provided
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

        return view('payments::backend.pages.deposits.index', [
            'deposits'      => $deposits,
            'search'        => $search,
            'sort'          => $sort->getSort(),
            'order'         => $sort->getOrder(),
        ]);
    }

    /**
     * Track given deposit
     *
     * @param Deposit $deposit
     * @param CoinpaymentsPaymentService $coinpaymentsPaymentService
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function track(Deposit $deposit, CoinpaymentsPaymentService $coinpaymentsPaymentService)
    {
        if (!$deposit->external_id)
            return back()->withErrors(__('There is no external transaction for this deposit.'));

        return view('payments::backend.pages.deposits.track', [
            'deposit' => $deposit,
            'info'    => $coinpaymentsPaymentService->getPaymentInfo($deposit->external_id)
        ]);
    }
}
