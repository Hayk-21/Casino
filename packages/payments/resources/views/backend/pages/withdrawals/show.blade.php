@extends('backend.layouts.main')

@section('title')
    {{ __('Widthdrawal') }} {{ $withdrawal->id }} :: {{ __('Info') }}
@endsection

@section('content')
    <table class="table table-hover">
        <tbody>
            <tr>
                <td>{{ __('ID') }}</td>
                <td class="text-right">{{ $withdrawal->id }}</td>
            </tr>
            <tr>
                <td>{{ __('Status') }}</td>
                <td class="text-right">{{ \Packages\Payments\Models\Withdrawal::statuses()[$withdrawal->status] }}</td>
            </tr>
            <tr>
                <td>{{ __('Amount') }}</td>
                <td class="text-right">{{ $withdrawal->amount }}</td>
            </tr>
            <tr>
                <td>{{ __('Payment currency') }}</td>
                <td class="text-right">{{ $withdrawal->payment_currency }}</td>
            </tr>
            <tr>
                <td>{{ __('Transaction ID') }}</td>
                <td class="text-right">
                    <a href="{{ route('backend.withdrawals.track', array_merge(['withdrawals' => $withdrawal], request()->query())) }}">
                        {{ $withdrawal->external_id }}
                    </a>
                </td>
            </tr>
            <tr>
                <td>{{ __('Wallet') }}</td>
                <td class="text-right">{{ $withdrawal->wallet }}</td>
            </tr>
            <tr>
                <td>{{ __('Comment') }}</td>
                <td class="text-right">{{ $withdrawal->comment }}</td>
            </tr>
            <tr>
                <td>{{ __('Created') }}</td>
                <td class="text-right">{{ $withdrawal->created_at }}</td>
            </tr>
            <tr>
                <td>{{ __('Updated') }}</td>
                <td class="text-right">{{ $withdrawal->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    @if($withdrawal->is_created)
        <h4 class="my-3">{{ __('Workflow actions') }}</h4>
        <form class="float-left mr-2" method="POST" action="{{ route('backend.withdrawals.approve', $withdrawal) }}">
            @csrf
            <button type="submit" class="btn btn-outline-success">
                <i class="fas fa-check"></i>
                {{ __('Approve') }}
            </button>
        </form>
        <form class="float-left mr-2" method="POST" action="{{ route('backend.withdrawals.complete', $withdrawal) }}">
            @csrf
            <button type="submit" class="btn btn-success">
                <i class="fas fa-check-double"></i>
                {{ __('Complete') }}
            </button>
        </form>
        <form method="POST" action="{{ route('backend.withdrawals.cancel', $withdrawal) }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-times"></i>
                {{ __('Cancel') }}
            </button>
        </form>
        <div class="mt-3">
            <small class="form-text text-muted">
                {{ __('Approve - set withdrawal status to "In progress" and initiate an automatic coins transfer transaction. Withdrawal request will be automatically marked as "Completed" upon receiving a confirmation from the API.') }}
            </small>
            <small class="form-text text-muted">
                {{ __('Complete - set withdrawal status to "Completed". Coins are supposed to be sent manually.') }}
            </small>
            <small class="form-text text-muted">
                {{ __('Cancel - set withdrawal status to "Rejected". Withdrawal amount will be returned back to the user account.') }}
            </small>
        </div>
    @endif
    <div class="mt-3">
        <a href="{{ route('backend.withdrawals.index', request()->query()) }}"><i class="fas fa-long-arrow-alt-left"></i> {{ __('Back to all withdrawals') }}</a>
    </div>
@endsection
