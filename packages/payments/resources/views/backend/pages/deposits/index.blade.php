@extends('backend.layouts.main')

@section('title')
    {{ __('Deposits') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="btn-group" role="group" aria-label="{{ __('All statuses') }}">
                @if(Request::has('status'))
                    @foreach(\Packages\Payments\Models\Deposit::statuses() as $status => $title)
                        @if(Request::get('status') == $status)
                            <a href="{{ route('backend.deposits.index', array_merge(request()->query(), ['status' => $status])) }}" class="btn btn-primary">{{ $title }}</a>
                        @endif
                    @endforeach
                @else
                    <a href="{{ route('backend.deposits.index', request()->query()) }}" class="btn btn-primary">{{ __('All statuses') }}</a>
                @endif
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('backend.deposits.index', array_merge(request()->query(), ['status' => NULL])) }}">{{ __('All statuses') }}</a>
                    <div class="dropdown-divider"></div>
                    @foreach(\Packages\Payments\Models\Deposit::statuses() as $status => $title)
                        <a href="{{ route('backend.deposits.index', array_merge(request()->query(), ['status' => $status])) }}" class="dropdown-item">{{ $title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-3 offset-lg-3 mb-3">
            @search(['route' => 'backend.deposits.index', 'search' => $search])
            @endsearch
        </div>
    </div>
    @if($deposits->isEmpty())
        <div class="alert alert-info" role="alert">
            {{ __('No deposits found.') }}
        </div>
    @else
        <table class="table table-hover table-stackable">
            <thead>
            <tr>
                @component('components.tables.sortable-column', ['id' => 'id', 'sort' => $sort, 'order' => $order])
                    {{ __('ID') }}
                @endcomponent
                <th>
                    <a href="#">{{ __('User') }}</a>
                </th>
                @component('components.tables.sortable-column', ['id' => 'status', 'sort' => $sort, 'order' => $order])
                    {{ __('Status') }}
                @endcomponent
                @component('components.tables.sortable-column', ['id' => 'amount', 'sort' => $sort, 'order' => $order, 'class' => 'text-right'])
                    {{ __('Amount') }}
                @endcomponent
                @component('components.tables.sortable-column', ['id' => 'payment_amount', 'sort' => $sort, 'order' => $order, 'class' => 'text-right'])
                    {{ __('Payment amount') }}
                @endcomponent
                @component('components.tables.sortable-column', ['id' => 'created', 'sort' => $sort, 'order' => $order, 'class' => 'text-right'])
                    {{ __('Created') }}
                @endcomponent
                @component('components.tables.sortable-column', ['id' => 'updated', 'sort' => $sort, 'order' => $order, 'class' => 'text-right'])
                    {{ __('Updated') }}
                @endcomponent
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($deposits as $deposit)
                <tr>
                    <td data-title="{{ __('ID') }}">{{ $deposit->id }}</td>
                    <td data-title="{{ __('User') }}">
                        <a href="{{ route('backend.users.edit', $deposit->account->user) }}">
                            {{ $deposit->account->user->name }}
                        </a>
                        @if($deposit->account->user->role == App\Models\User::ROLE_ADMIN)
                            <span class="badge badge-danger">{{ __('app.user_role_'.$deposit->account->user->role) }}</span>
                        @endif
                    </td>
                    <td data-title="{{ __('Status') }}" class="{{ $deposit->is_completed ? 'text-success' : ($deposit->is_cancelled ? 'text-danger' : '') }}">
                        {{ __('app.deposit_status_' . $deposit->status) }}
                    </td>
                    <td data-title="{{ __('Amount') }}" class="text-right">
                        {{ $deposit->_amount }}
                    </td>
                    <td data-title="{{ __('Payment amount') }}" class="text-right">
                        {{ $deposit->_payment_amount }} {{ $deposit->payment_currency }}
                    </td>
                    <td data-title="{{ __('Created') }}" class="text-right">
                        {{ $deposit->created_at->diffForHumans() }}
                        <span data-balloon="{{ $deposit->created_at }}" data-balloon-pos="up">
                            <i class="far fa-clock" ></i>
                        </span>
                    </td>
                    <td data-title="{{ __('Updated') }}" class="text-right">
                        {{ $deposit->updated_at->diffForHumans() }}
                        <span data-balloon="{{ $deposit->updated_at }}" data-balloon-pos="up">
                            <i class="far fa-clock" ></i>
                        </span>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('backend.deposits.track', array_merge(['deposit' => $deposit], request()->query())) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-exchange-alt"></i>
                            {{ __('TX details') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $deposits->appends(request()->query())->links() }}
        </div>
    @endif
@endsection
