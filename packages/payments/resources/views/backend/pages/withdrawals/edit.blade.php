@extends('backend.layouts.main')

@section('title')
    {{ __('Withdrawal') }} {{ $withdrawal->id }} :: {{ __('Edit') }}
@endsection

@section('content')
    <form method="POST" action="{{ route('backend.withdrawals.update', $withdrawal) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>{{ __('Comment') }}</label>
            <textarea name="comment" class="form-control" rows="3">{{ $withdrawal->comment }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('Created at') }}</label>
            <input class="form-control text-muted" value="{{ $withdrawal->created_at }} ({{ $withdrawal->created_at->diffForHumans() }})" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('Updated at') }}</label>
            <input class="form-control text-muted" value="{{ $withdrawal->updated_at }} ({{ $withdrawal->updated_at->diffForHumans() }})" readonly>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>
            {{ __('Save') }}
        </button>
    </form>
    <div class="mt-3">
        <a href="{{ route('backend.withdrawals.index', request()->query()) }}"><i class="fas fa-long-arrow-alt-left"></i> {{ __('Back to all withdrawals') }}</a>
    </div>
@endsection
