@extends('frontend.layouts.home')

{{-- @section('title')
    {{ __('Bonuses') }}
@endsection

@section('content')
<h2>{{ __('Referral program') }}</h2>
<p>
	{{ __('Refer your friends to our casino and get bonus credits.') }}
	{{ __('Please copy the link below and share with your friends.') }}
</p>
<div class="input-group mb-3">
	<input id="referral-link-input" type="text" class="form-control text-muted" value="{{ $referral_url }}" readonly>
	<div class="input-group-append">
		<button type="button" class="btn btn-primary"
			onclick="copyToClipboard(document.getElementById('referral-link-input'))"><i class="far fa-copy"></i>
			{{ __('Copy') }}</button>
		<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false"></button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="mailto:?subject={{ urlencode($share_subject) }}&body={{ urlencode($share_body) }}">
				{{ __('Send by email') }}
			</a>
			<a class="dropdown-item"
				href="https://web.whatsapp.com/send?text={{ urlencode($share_subject) . ':' . urlencode($referral_url) }}">
				{{ __('Send by WhatsApp') }}
			</a>
			<a class="dropdown-item" href="https://www.facebook.com/sharer.php?u={{ urlencode($referral_url) }}">
				{{ __('Share on Facebook') }}
			</a>
			<a class="dropdown-item"
				href="https://twitter.com/intent/tweet?url={{ urlencode($referral_url) }}&text={{ urlencode($share_subject) }}">
				{{ __('Share on Twitter') }}
			</a>
		</div>
	</div>
</div>
<p>
	{{ __('You will get the following bonuses for referred users.') }}
</p>
<ul>
	@if($referral_bonuses['referrer_sign_up_credits'])
	<li>
		{{ __('User signs up - :n credits', ['n' => $referral_bonuses['referrer_sign_up_credits']]) }}
		@if(config('settings.bonuses.referral.referee_sign_up_credits'))
		({{ __('referred user will also get :n bonus credits', ['n' => $referral_bonuses['referee_sign_up_credits']]) }})
		@endif
	</li>
	@endif
	@if($referral_bonuses['referrer_game_loss_pct'])
	<li>
		{{ __('User loses a game - :n% of net loss in credits', ['n' => $referral_bonuses['referrer_game_loss_pct']]) }}
	</li>
	@endif
	@if($referral_bonuses['referrer_game_win_pct'])
	<li>
		{{ __('User wins a game - :n% of net win in credits', ['n' => $referral_bonuses['referrer_game_win_pct']]) }}
	</li>
	@endif
	@if($referral_bonuses['referrer_raffle_ticket_pct'])
	<li>
		{{ __('User purchases a raffle ticket - :n% of ticket price in credits', ['n' => $referral_bonuses['referrer_raffle_ticket_pct']]) }}
	</li>
	@endif
	@if($referral_bonuses['referrer_deposit_pct'])
	<li>
		{{ __('User completes a deposit - :n% of deposit amount in credits', ['n' => $referral_bonuses['referrer_deposit_pct']]) }}
	</li>
	@endif
</ul>
<p>
	{{ __('You referred :n users and earned :total credits so far.', ['n' => $referred_users_count, 'total' => $referral_total_bonus]) }}
</p>
<h2 class="mt-4">{{ __('Other bonuses') }}</h2>
<ul>
	@if(config('settings.bonuses.game.loss_amount_pct') > 0)
	<li>
		{{ __('Get :pct% of the net loss back when you lose more than :amount credits in a single game.', [
                        'amount' => config('settings.bonuses.game.loss_amount_min'),
                        'pct' => config('settings.bonuses.game.loss_amount_pct'),
                    ])
                }}
	</li>
	@endif
	@if(config('settings.bonuses.game.win_amount_pct') > 0)
	<li>
		{{ __('Get :pct% of the net win back when you win more than :amount credits in a single game.', [
                        'amount' => config('settings.bonuses.game.win_amount_min'),
                        'pct' => config('settings.bonuses.game.win_amount_pct'),
                    ])
                }}
	</li>
	@endif
	@installed('payments')
	@if(config('settings.bonuses.deposit.amount_pct') > 0)
	<li>
		{{ __('Get :pct% back when you deposit more than :amount credits at once.', [
                            'amount' => config('settings.bonuses.deposit.amount_min'),
                            'pct' => config('settings.bonuses.deposit.amount_pct'),
                        ])
                    }}
	</li>
	@endif
	@endinstalled
</ul>
@endsection

--}}
@push("styles")
<link rel="stylesheet" href="{{asset('css/bonuses.css')}}">
@endpush
@section('content')

<div class="content" style="align-items: unset;">
	<h1 class="bonuses_heading">Bonuses</h1>
	<div class="container_bonuses_block">
		<div class="left_bonus_block">
			<h3 class="referral_program">Referral program</h3>
			<p class="referral_frineds">Refer your friends to our casino and get bonus credits.
				Please copy the link below and share with your friends</p>
			<div style="display: flex; justify-content: center; align-items: center;">
				<input type="text" value="http://212.129.24.231:40812/" class="input_site_link" id="myInput">
				<a href="" onclick="myFunction()"><img src="{{asset("assets/img/bonuses/Group 11 Copy.png")}}" alt=""
						class="copy_button"></a>
			</div>
			<div class="social_block">
				<a href="mailto:name@mail.ru"><img src="{{asset("assets/img/bonuses/Mail.png")}}" alt=""></a>
				<a href="https:\\facebook.com"><img src="assets/img/bonuses/Facebook.png" alt=""></a>
				<a href="https:\\twitter.com"><img src="assets/img/bonuses/Twitter.png" alt=""></a>
				<a href="https://wa.me/95456218922"><img src="assets/img/bonuses/whatsapp.png" alt=""></a>
			</div>
			<h4 class="bonuses_for_users">You will get the following bonuses for referred users</h4>
			<div style="display: flex; justify-content: center;  align-items: center;">
				<div class="left_img">
					<img src="assets/img/bonuses/Group.png" alt="">
				</div>
				<div class="text_container">
					<img src="assets/img/bonuses/Group 14.png" alt="">
					<img src="assets/img/bonuses/Group 14-1.png" alt="">
					<img src="assets/img/bonuses/Group 14-2.png" alt="">
					<img src="assets/img/bonuses/Group 14-3.png" alt="">
				</div>
			</div>
			<div class="last_paragraph" style="color: #ffffff; font-size: 16px; opacity: 0.5;">
				You referred {{$referred_users_count}} users and
				earned {{$referral_total_bonus}} credits so far
			</div>
		</div>
		<div class="right_bonus_block">
			<div>
				<img src="assets/img/bonuses/right_bonus.png" alt="">
			</div>
		</div>
	</div>
</div>
@endsection