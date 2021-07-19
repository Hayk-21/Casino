{{-- @extends('frontend.layouts.main')

@section('title')
    {{ __('Reset password') }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header bg-primary">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        @if(config('settings.recaptcha.public_key'))
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="g-recaptcha" data-sitekey="{{ config('settings.recaptcha.public_key') }}"
                                    data-theme="{{ config('settings.theme')=='light-blue' ? 'light' : 'dark' }}"></div>
                            </div>
                        </div>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@if(config('settings.recaptcha.public_key'))
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
@endif --}}

@extends('frontend.layouts.home')

@push("styles")
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')
<div class="content" style="align-items: unset;" id="reg_form_and_social">
    <div class="for_border_right">
        <h1>{{ __('Reset Password') }}</h1>
        <form action="{{ route('password.email') }}" method="post" class="registration" style="border: 0;margin:0;">
            @csrf
            <label for="email">E-mail Address
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </label>
            <button type="submit">{{ __('Send Password Reset Link') }}</button>
        </form>
    </div>
</div>
@endsection