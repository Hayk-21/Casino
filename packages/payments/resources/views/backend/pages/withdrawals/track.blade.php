@extends('backend.layouts.main')

@section('title')
    {{ __('Widthdrawal') }} {{ $withdrawal->id }} :: {{ __('TX details') }}
@endsection

@section('content')
    <table class="table table-hover table-stackable">
        <tbody>
            <tr>
                <td>{{ __('ID') }}</td>
                <td class="text-right">{{ $withdrawal->external_id }}</td>
            </tr>
            <tr>
                <td>{{ __('Status') }}</td>
                <td class="text-right">{{ $info->get('status') }} - {{ $info->get('status_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('Amount') }}</td>
                <td class="text-right">{{ $info->get('amountf') }} {{ $info->get('coin') }}</td>
            </tr>
            <tr>
                <td>{{ __('Sent to') }}</td>
                <td class="text-right">{{ $info->get('send_address') }}</td>
            </tr>
            <tr>
                <td>{{ __('Transaction ID') }}</td>
                <td class="text-right">{{ $info->get('send_txid') }}</td>
            </tr>
        </tbody>
    </table>
    @if($withdrawal->is_in_progress && $info->get('status') <= -1)
        <form method="POST" action="{{ route('backend.withdrawals.cancel', $withdrawal) }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-times"></i>
                {{ __('Mark withdrawal as cancelled') }}
            </button>
        </form>
        <div class="mt-3">
            <small class="form-text text-muted">
                {{ __('Normally withdrawals should be automatically completed or cancelled based on an IPN message from the API.') }}
                {{ __('If it did not happen you can udpate the withdrawal status manually.') }}
            </small>
        </div>
    @elseif($withdrawal->is_in_progress && ($info->get('status') == 2 || $info->get('status') >= 100))
        <form method="POST" action="{{ route('backend.withdrawals.complete', $withdrawal) }}">
            @csrf
            <button type="submit" class="btn btn-success">
                <i class="fas fa-check-double"></i>
                {{ __('Mark withdrawal as completed') }}
            </button>
        </form>
        <div class="mt-3">
            <small class="form-text text-muted">
                {{ __('Normally withdrawals should be automatically completed or cancelled based on an IPN message sent by the payment gateway.') }}
                {{ __('If it did not happen you can udpate the withdrawal status manually.') }}
            </small>
        </div>
    @endif
    <div class="mt-3">
        <a href="{{ route('backend.withdrawals.index', request()->query()) }}"><i class="fas fa-long-arrow-alt-left"></i> {{ __('Back to all withdrawals') }}</a>
    </div>
@endsection
