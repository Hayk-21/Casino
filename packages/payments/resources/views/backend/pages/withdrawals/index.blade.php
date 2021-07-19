@extends('backend.layouts.main')

@section('title')
    {{ __('Withdrawals') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="btn-group" role="group" aria-label="{{ __('All statuses') }}">
                @if(Request::has('status'))
                    @foreach(\Packages\Payments\Models\Withdrawal::statuses() as $status => $title)
                        @if(Request::get('status') == $status)
                            <a href="{{ route('backend.withdrawals.index', array_merge(request()->query(), ['status' => $status])) }}" class="btn btn-primary">{{ $title }}</a>
                        @endif
                    @endforeach
                @else
                    <a href="{{ route('backend.withdrawals.index', request()->query()) }}" class="btn btn-primary">{{ __('All statuses') }}</a>
                @endif
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('backend.withdrawals.index', array_merge(request()->query(), ['status' => NULL])) }}">{{ __('All statuses') }}</a>
                    <div class="dropdown-divider"></div>
                    @foreach(\Packages\Payments\Models\Withdrawal::statuses() as $status => $title)
                        <a href="{{ route('backend.withdrawals.index', array_merge(request()->query(), ['status' => $status])) }}" class="dropdown-item">{{ $title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-3 offset-lg-3 mb-3">
            @search(['route' => 'backend.withdrawals.index', 'search' => $search])
            @endsearch
        </div>
    </div>
    @if($withdrawals->isEmpty())
        <div class="alert alert-info" role="alert">
            {{ __('No withdrawals found.') }}
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
                @component('components.tables.sortable-column', ['id' => 'amount', 'sort' => $sort, 'order' => $order, 'class' => 'text-right'])
                    {{ __('Amount') }}
                @endcomponent
                @component('components.tables.sortable-column', ['id' => 'payment_currency', 'sort' => $sort, 'order' => $order, 'class' => 'text-right'])
                    {{ __('Payment currency') }}
                @endcomponent
                @component('components.tables.sortable-column', ['id' => 'status', 'sort' => $sort, 'order' => $order])
                    {{ __('Status') }}
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
            @foreach ($withdrawals as $withdrawal)
                <tr>
                    <td data-title="{{ __('ID') }}">{{ $withdrawal->id }}</td>
                    <td data-title="{{ __('User') }}">
                        <a href="{{ route('backend.users.edit', $withdrawal->account->user) }}">
                            {{ $withdrawal->account->user->name }}
                        </a>
                        @if($withdrawal->account->user->role == App\Models\User::ROLE_ADMIN)
                            <span class="badge badge-danger">{{ __('app.user_role_'.$withdrawal->account->user->role) }}</span>
                        @endif
                    </td>
                    <td data-title="{{ __('Amount') }}" class="text-right">
                        {{ $withdrawal->_amount }}
                    </td>
                    <td data-title="{{ __('Payment currency') }}" class="text-right">
                        {{ $withdrawal->_payment_currency }}
                    </td>
                    <td data-title="{{ __('Status') }}" class="{{ $withdrawal->is_completed ? 'text-success' : ($withdrawal->is_cancelled ? 'text-danger' : '') }}">
                        {{ __('app.withdrawal_status_' . $withdrawal->status) }}
                    </td>
                    <td data-title="{{ __('Created') }}" class="text-right">
                        {{ $withdrawal->created_at->diffForHumans() }}
                        <span data-balloon="{{ $withdrawal->created_at }}" data-balloon-pos="up">
                            <i class="far fa-clock" ></i>
                        </span>
                    </td>
                    <td data-title="{{ __('Updated') }}" class="text-right">
                        {{ $withdrawal->updated_at->diffForHumans() }}
                        <span data-balloon="{{ $withdrawal->updated_at }}" data-balloon-pos="up">
                            <i class="far fa-clock" ></i>
                        </span>
                    </td>
                    <td class="text-right">
                        <div class="btn-group" role="group" aria-label="{{ __('Edit') }}">
                            <a href="{{ route('backend.withdrawals.show', array_merge(['withdrawal' => $withdrawal], request()->query())) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye fa-sm"></i>
                                {{ __('View') }}
                            </a>
                            <div class="btn-group" role="group">
                                <button id="users-action-button" type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="users-action-button">
                                    <a class="dropdown-item" href="{{ route('backend.withdrawals.show', array_merge(['withdrawal' => $withdrawal], request()->query())) }}">
                                        <i class="fas fa-eye fa-sm"></i>
                                        {{ __('View') }}
                                    </a>
                                    @if($withdrawal->is_created || $withdrawal->is_in_progress)
                                        <a class="dropdown-item" href="{{ route('backend.withdrawals.edit', array_merge(['withdrawals' => $withdrawal], request()->query())) }}">
                                            <i class="fas fa-pen fa-sm"></i>
                                            {{ __('Edit') }}
                                        </a>
                                    @endif
                                    @if($withdrawal->is_created)
                                        <div class="dropdown-divider"></div>
                                        <form method="POST" action="{{ route('backend.withdrawals.approve', $withdrawal) }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="fas fa-check"></i>
                                                {{ __('Approve') }}
                                            </button>
                                        </form>
                                        <form method="POST" action="{{ route('backend.withdrawals.complete', $withdrawal) }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="fas fa-check-double"></i>
                                                {{ __('Complete') }}
                                            </button>
                                        </form>
                                        <form method="POST" action="{{ route('backend.withdrawals.cancel', $withdrawal) }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="fas fa-times"></i>
                                                {{ __('Cancel') }}
                                            </button>
                                        </form>
                                    @endif
                                    @if($withdrawal->external_id)
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('backend.withdrawals.track', array_merge(['withdrawals' => $withdrawal], request()->query())) }}">
                                            <i class="fa fa-exchange-alt"></i>
                                            {{ __('TX details') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $withdrawals->appends(request()->query())->links() }}
        </div>
    @endif
@endsection
