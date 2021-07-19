@extends('backend.layouts.main')

@section('title')
    {{ __('Deposit') }} {{ $deposit->id }} :: {{ __('Info') }}
@endsection

@section('content')
    <table class="table table-hover">
        <tbody>
            <tr>
                <td>{{ __('ID') }}</td>
                <td class="text-right">{{ $deposit->external_id }}</td>
            </tr>
            <tr>
                <td>{{ __('Status') }}</td>
                <td class="text-right">{{ $info->get('status') }} - {{ $info->get('status_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('Amount required') }}</td>
                <td class="text-right">{{ $info->get('amountf') }} {{ $info->get('coin') }}</td>
            </tr>
            <tr>
                <td>{{ __('Amount received') }}</td>
                <td class="text-right">{{ $info->get('receivedf') }} {{ $info->get('coin') }}</td>
            </tr>
            <tr>
                <td>{{ __('Confirmations') }}</td>
                <td class="text-right">{{ $info->get('recv_confirms') }}</td>
            </tr>
            <tr>
                <td>{{ __('Payment address') }}</td>
                <td class="text-right">{{ $info->get('payment_address') }}</td>
            </tr>
            <tr>
                <td>{{ __('Completed') }}</td>
                <td class="text-right">{{ $info->get('time_completed') ? \Illuminate\Support\Carbon::createFromTimestamp($info->get('time_completed'))->diffForHumans() : __('Never') }}</td>
            </tr>
        </tbody>
    </table>
    <div class="mt-3">
        <a href="{{ route('backend.deposits.index', request()->query()) }}"><i class="fas fa-long-arrow-alt-left"></i> {{ __('Back to all deposits') }}</a>
    </div>
@endsection
