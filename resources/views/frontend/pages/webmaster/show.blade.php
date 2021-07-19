@extends('frontend.layouts.main')

@section('title')
    {{ __('Stats') }}
@endsection

@section('content')
    <div class="row">
        @if ($referrees->count())
            <table class="table table-hover table-stackable">
                <thead>
                    <tr>
                        <th>
                            {{ __('User') }}
                        </th>
                        <th class="text-right">{{ __('Created') }}</th>
                        <th class="text-right">{{ __('Updated') }}</th>
                        <th class="text-right">{{ __('Bonus') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($referrees as $referree)
                        <tr>
                            <td data-title="{{ __('user') }}">{{ $referree->name }}</td>
                            <td data-title="{{ __('Created') }}" class="text-right">
                                {{ $referree->created_at->diffForHumans() }}
                            </td>
                            <td data-title="{{ __('Updated') }}" class="text-right">
                                {{ $referree->updated_at->diffForHumans() }}
                            </td>
                            <td data-title="{{ __('Bonus') }}" class="text-right">
                                <i class="fas fa-long-arrow-alt-up text-success">
                                    {{ $referree->account->transactionsByReferres()->sum('amount') }}
                                </i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $referrees->links() }}
            </div>
        @else
            <span class="alert alert-danger w-100">Информация не доступна</span>
        @endif 
    </div>
@endsection