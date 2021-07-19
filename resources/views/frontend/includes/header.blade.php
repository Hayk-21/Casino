{{-- <div class="container">
	<nav class="navbar navbar-expand-md navbar-dark">
		<a class="navbar-brand text-body" href="{{ route('frontend.index') }}">
<img
	src="{{ File::exists(base_path('public/images/logo-udf.png')) ? asset('images/logo-udf.png') : asset('images/logo.png') }}"
	class="d-inline-block align-top" alt="{{ __('Crypto Casino') }}">
{{ __('Crypto Casino') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbar">
	<div class="navbar-nav flex-grow-1">
		<div class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				{{ __('Games') }}
			</a>
			<div id="menu-dropdown-games" class="dropdown-menu">
				@installed('game-slots')
				<a class="dropdown-item" href="{{ route('games.slots.show') }}">{{ __('Slots') }}</a>
				@endinstalled
				@installed('game-multi-slots')
				@foreach(config('game-multi-slots.titles') as $index => $title)
				@if($title)
				<a class="dropdown-item"
					href="{{ route('games.multi-slots.show', ['index' => config('game-multi-slots.slugs')[$index] ?? $index]) }}">{{ __($title) }}</a>
				@endif
				@endforeach
				@endinstalled
				@installed('game-lucky-wheel')
				@foreach(config('game-lucky-wheel.variations') as $index => $game)
				@if($game->title)
				<a class="dropdown-item"
					href="{{ route('games.lucky-wheel.show', ['index' => $game->slug]) }}">{{ __($game->title) }}</a>
				@endif
				@endforeach
				@endinstalled
				@installed('game-dice')
				<a class="dropdown-item" href="{{ route('games.dice.show') }}">{{ __('Dice') }}</a>
				@endinstalled
				@installed('game-blackjack')
				<a class="dropdown-item" href="{{ route('games.blackjack.show') }}">{{ __('Blackjack') }}</a>
				@endinstalled
				@installed('game-baccarat')
				<a class="dropdown-item" href="{{ route('games.baccarat.show') }}">{{ __('Baccarat') }}</a>
				@endinstalled
				@installed('game-video-poker')
				<a class="dropdown-item" href="{{ route('games.video-poker.show') }}">{{ __('Video Poker') }}</a>
				@endinstalled
				@installed('game-american-roulette')
				<a class="dropdown-item" href="{{ route('games.american-roulette.show') }}">{{ __('American Roulette') }}</a>
				@endinstalled
				@installed('game-roulette')
				<a class="dropdown-item" href="{{ route('games.roulette.show') }}">{{ __('European Roulette') }}</a>
				@endinstalled
				@installed('game-american-bingo')
				<a class="dropdown-item" href="{{ route('games.american-bingo.show') }}">{{ __('75 Ball Bingo') }}</a>
				@endinstalled
				@installed('game-keno')
				<a class="dropdown-item" href="{{ route('games.keno.show') }}">{{ __('Keno') }}</a>
				@endinstalled
			</div>
		</div>
		<div class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				{{ __('History') }}
			</a>
			<div id="menu-dropdown-history" class="dropdown-menu">
				<a class="dropdown-item" href="{{ route('frontend.history.recent') }}">{{ __('Recent games') }}</a>
				<a class="dropdown-item" href="{{ route('frontend.history.top-wins') }}">{{ __('Top wins') }}</a>
				<a class="dropdown-item" href="{{ route('frontend.history.top-losses') }}">{{ __('Top losses') }}</a>
				@auth
				<a class="dropdown-item" href="{{ route('frontend.history.my') }}">{{ __('My games') }}</a>
				@endauth
			</div>
		</div>
		@installed('raffle')
		<a class="nav-item nav-link" href="{{ route('frontend.raffle.index') }}">{{ __('Raffle') }}</a>
		@endinstalled
		<a class="nav-item nav-link" href="{{ route('frontend.leaderboard') }}">{{ __('Leaderboard') }}</a>
		@if(config('broadcasting.connections.pusher.key'))
		<a class="nav-item nav-link" href="{{ route('frontend.chat.index') }}">{{ __('Chat') }}</a>
		@endif
	</div>
	@guest
	<div class="navbar-nav">
		<a href="{{ route('login') }}" class="btn text-white-50 mr-2">{{ __('Log in') }}</a>
		<a href="{{ route('register') }}" class="btn btn-outline-info text-white">{{ __('Sign up') }}</a>
	</div>
	@endguest
	@auth
	<locale-select :locales="{{ json_encode($locale->locales()) }}" :locale="{{ json_encode($locale->locale()) }}">
	</locale-select>
	<div class="navbar-nav dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false">
			{{ auth()->user()->name }}
		</a>
		<div class="dropdown-menu">
			@auth
			<a class="dropdown-item" href="{{ route('backend.dashboard.index') }}">
				<i class="fas fa-cogs"></i>
				{{ __('Backend') }}
			</a>
			<div class="dropdown-divider"></div>
			@endauth

			@webmaster
			<a class="dropdown-item" href="{{ route('frontend.referals.show') }}">
				<i class="fas fa-user"></i>
				{{ __('Referal programm') }}
			</a>
			@endwebmaster

			<a class="dropdown-item" href="{{ route('frontend.users.show', auth()->user()) }}">
				<i class="far fa-user"></i>
				{{ __('Profile') }}
			</a>
			<a class="dropdown-item" href="{{ route('frontend.account.show') }}">
				<i class="fas fa-wallet"></i>
				{{ __('Account') }}
			</a>

			@packageview('frontend.includes.menu')

			<a class="dropdown-item" href="{{ route('frontend.bonuses.index') }}">
				<i class="fas fa-money-bill-alt"></i>
				{{ __('Bonuses') }}
			</a>
			<a class="dropdown-item" href="{{ route('frontend.security.index') }}">
				<i class="fas fa-shield-alt"></i>
				{{ __('Security') }}
			</a>
			<a class="dropdown-item" href="{{ route('frontend.users.password.edit') }}">
				<i class="fas fa-key"></i>
				{{ __('Change password') }}
			</a>
			<div class="dropdown-divider"></div>
			<form method="post" action="{{ route('logout') }}">
				@csrf
				<button type="submit" class="btn dropdown-item">
					<i class="fas fa-sign-out-alt"></i>
					{{ __('Log out') }}
				</button>
			</form>
		</div>
	</div>
	@endauth
</div>
</nav>
</div> --}}
@php
$a = json_encode($locale->locales());
$a = json_decode($a);

@endphp
<header>
	<div class="header__upper">
		@guest
		<a href="{{route("login")}}" class="light">
			<img src="{{asset("assets/img/icons/star.svg")}}" alt="">
			Get bonus
		</a>
		<a href="http://" class="light">
			<img src="{{asset("assets/img/icons/star.svg")}}" alt="">
			Affiliate?
		</a>
		<a href="{{url("page/provably-fair")}}">Provably fair</a>
		<a href="{{url("page/privacy-policy")}}">Policy</a>
		@endguest
		@auth
		<a class="light" style="cursor: pointer">
			<img src="{{asset("assets/img/icons/Game.svg")}}" alt="">
			<span style="z-index: 9999">Games</span>
			<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
			<div class="dropdown">
				<object data="" type="">
					@installed('game-slots')
					<a class="dropdown-item" href="{{ route('games.slots.show') }}">{{ __('Slots') }}</a>
					@endinstalled
					@installed('game-multi-slots')
					@foreach(config('game-multi-slots.titles') as $index => $title)
					@if($title)
					<a class="dropdown-item"
						href="{{ route('games.multi-slots.show', ['index' => config('game-multi-slots.slugs')[$index] ?? $index]) }}">{{ __($title) }}</a>
					@endif
					@endforeach
					@endinstalled
					@installed('game-lucky-wheel')
					@foreach(config('game-lucky-wheel.variations') as $index => $game)
					@if($game->title)
					<a class="dropdown-item"
						href="{{ route('games.lucky-wheel.show', ['index' => $game->slug]) }}">{{ __($game->title) }}</a>
					@endif
					@endforeach
					@endinstalled
					@installed('game-dice')
					<a class="dropdown-item" href="{{ route('games.dice.show') }}">{{ __('Dice') }}</a>
					@endinstalled
					@installed('game-blackjack')
					<a class="dropdown-item" href="{{ route('games.blackjack.show') }}">{{ __('Blackjack') }}</a>
					@endinstalled
					@installed('game-baccarat')
					<a class="dropdown-item" href="{{ route('games.baccarat.show') }}">{{ __('Baccarat') }}</a>
					@endinstalled
					@installed('game-video-poker')
					<a class="dropdown-item" href="{{ route('games.video-poker.show') }}">{{ __('Video Poker') }}</a>
					@endinstalled
					@installed('game-american-roulette')
					<a class="dropdown-item" href="{{ route('games.american-roulette.show') }}">{{ __('American Roulette') }}</a>
					@endinstalled
					@installed('game-roulette')
					<a class="dropdown-item" href="{{ route('games.roulette.show') }}">{{ __('European Roulette') }}</a>
					@endinstalled
					@installed('game-american-bingo')
					<a class="dropdown-item" href="{{ route('games.american-bingo.show') }}">{{ __('75 Ball Bingo') }}</a>
					@endinstalled
					@installed('game-keno')
					<a class="dropdown-item" href="{{ route('games.keno.show') }}">{{ __('Keno') }}</a>
					@endinstalled
				</object>
			</div>
		</a>
		<a class="light" style="cursor: pointer">
			<img src="{{asset("assets/img/icons/history.svg")}}" alt="">
			<span style="z-index: 9999">History</span>
			<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
			<div class="dropdown">
				<object data="" type="">
					<a href="{{ route('frontend.history.top-wins') }}">Top wins</a>
					<a href="{{ route('frontend.history.my') }}">My Games</a>
				</object>
			</div>
		</a>
		<a href="{{route("frontend.raffle.index")}}" class="light">
			<img src="{{asset("assets/img/icons/raffle.svg")}}" alt="">
			Raffle
		</a>
		<a href="{{route("frontend.leaderboard")}}" class="light">
			<img src="{{asset("assets/img/icons/leaderboard.svg")}}" alt="">
			Leaderboard
		</a>
		@endauth

	</div>
	<div class="header__content">
		<img src="{{asset("assets/img/icons/hamburger.svg")}}" alt="" class="hamburger">
		<img src="{{asset("assets/img/icons/close.svg")}}" alt="" class="close">
		<div>
			<a href="/" class="logo">
				<img src="{{asset("assets/img/icons/yellowlogo.svg")}}" alt="">
				<span>CRYPTO CASINO</span>
			</a>
			<button class="language">
				<div class="language__bar">
					@foreach ($a as $lang)
					<a href="/locale/{{$lang->flag}}/remember">
						<img src="{{asset("assets/img/country/$lang->flag.svg")}}" alt="">
						<span>{{strtoupper($lang->flag)}}</span>
					</a>
					@endforeach
				</div>
				<div>
					<img src="{{asset("assets/img/country/".json_decode(json_encode($locale->locale()))->flag.".svg")}}" alt="">
					<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
				</div>
			</button>
			<div class="jackpot">
				<img src="{{asset("assets/img/jackpot.png")}}" alt="">
				<span class="first">Jackpot</span>
				<span>
					<span class="amount">69990</span>
					<span class="btc">BTC</span>
				</span>
			</div>

		</div>
		<button class="language language__mobile">

			<div>
				<img src="{{asset("assets/img/country/".json_decode(json_encode($locale->locale()))->flag.".svg")}}" alt="">
				<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
			</div>
			<div class="language__bar">
				@foreach ($a as $lang)
				<a href="/locale/{{$lang->flag}}/remember">
					<img src="assets/img/country/{{$lang->flag}}.svg" alt="">
					<span>{{strtoupper($lang->flag)}}</span>
				</a>
				@endforeach
			</div>
		</button>
		@guest
		<div class="accdep">
			<a href="{{route('login')}}" class="account">Account</a>
			<a href="{{ route('frontend.payments.deposit') }}" class="deposit">Deposit</a>
		</div>
		@endguest
		@auth
		<div class="reg-menu">
			<div class="balance">
				<div>
					<span>Amount:</span>
					<div>0.1912767 BTC</div>
				</div>
				<div>
					<span>Amount:</span>
					<div>0.1912767 BTC</div>
				</div>
				<a href="{{route('frontend.payments.deposit')}}" class="deposit">Deposit</a>
			</div>
			<div class="account acc-dropdown">
				<a onclick="return false" id="usernamedrop" class="light">{{auth()->user()->name}}</a>
				<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
				<div class="dropdown">
					<a href="{{route("frontend.account.show")}}">Account</a>
					<a href="{{route("frontend.bonuses.index")}}">Bonuses</a>
					<a href="{{ url('page/payments') }}">Deposits</a>
					<a href="http://" onclick="document.getElementById('logout').submit();return false;">Logout</a>
				</div>
			</div>
		</div>
	</div>
	@endauth

</header>


<div class="header__mobile">
	@auth
	<div class="menu special-menu" style="padding:10px 16px">
		<a class="light" style="margin: 0">
			<div style="color:#959595">
				{{__("beginner")}}
			</div>
			<div style="color: #538C31;font-weight: 600">100%</div>
		</a>
		<a class="light" style="margin: 0;font-size:18px">
			<div style="color:white">
				{{auth()->user()->name}}
			</div>
			<div>{{__("to the bonus")}}</div>
		</a>
	</div>
	<div class="menu special-menu" style="background-color: #1E1E1E">
		<a class="light">
			<div>
				<img src="{{asset("assets/img/icons/walletgreen.svg")}}" alt="">
				{{__("Amount")}}
			</div>
			<div class="yellow">0 BTC</div>
		</a>
		<a style="font-size: 16px;color:#707070;margin-top:-20px;margin-bottom:10px">
			<div>
				<img src="{{asset("assets/img/icons/walletgreen.svg")}}" alt="">
				{{__("Real balance")}}
			</div>
			<div class="yellow" style="opacity: .5">0 BTC</div>
		</a>
		<a style="font-size: 16px;color:#707070">
			<div>
				<img src="{{asset("assets/img/icons/walletgreen.svg")}}" alt="">
				{{__("Bonus balance")}}
			</div>
			<div class="yellow" style="opacity: .5">0 BTC</div>
		</a>
		<a class="light">
			<div>
				<img src="{{asset("assets/img/icons/coins.svg")}}" alt="">
				{{__("Bals")}}
			</div>
			<div class="yellow">0</div>
		</a>
		<a class="light">
			<div>
				<img src="{{asset("assets/img/icons/pig.svg")}}" alt="">
				{{__("Cashback")}}
			</div>
			<div class="yellow">0 BTC</div>
		</a>
		<a href="{{url('page/payments')}}" class="deposit">{{__("Deposit")}}</a>
	</div>
	@endauth
	<div class="menu">
		@guest
		<a href="{{route("frontend.bonuses.index")}}" class="light">
			<img src="{{asset("assets/img/icons/star.svg")}}" alt="">
			{{__("Get bonus")}}
		</a>
		<a href="http://" class="light">
			<img src="{{asset("assets/img/icons/star.svg")}}" alt="">
			{{__("Affiliate?")}}
		</a>
		<a href="{{("pages/provably-fair")}}">
			<img src="{{asset("assets/img/icons/star.svg")}}" alt="">
			{{__("Provably fair")}}
		</a>
		<a href="{{("pages/privacy-policy")}}">
			<img src="{{asset("assets/img/icons/star")}}.svg" alt="">
			{{__("Policy")}}
		</a>
		@endguest
		@auth
		<a style="cursor: pointer" class="light anchordropdown">
			<img src="{{asset("assets/img/icons/Game.svg")}}" alt="">
			{{__("Games")}}
			<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
		</a>
		<div class="dropdown">
			<object data="" type="">
				<object data="" type="">
					@installed('game-slots')
					<a class="dropdown-item" href="{{ route('games.slots.show') }}">{{ __('Slots') }}</a>
					@endinstalled
					@installed('game-multi-slots')
					@foreach(config('game-multi-slots.titles') as $index => $title)
					@if($title)
					<a class="dropdown-item"
						href="{{ route('games.multi-slots.show', ['index' => config('game-multi-slots.slugs')[$index] ?? $index]) }}">{{ __($title) }}</a>
					@endif
					@endforeach
					@endinstalled
					@installed('game-lucky-wheel')
					@foreach(config('game-lucky-wheel.variations') as $index => $game)
					@if($game->title)
					<a class="dropdown-item"
						href="{{ route('games.lucky-wheel.show', ['index' => $game->slug]) }}">{{ __($game->title) }}</a>
					@endif
					@endforeach
					@endinstalled
					@installed('game-dice')
					<a class="dropdown-item" href="{{ route('games.dice.show') }}">{{ __('Dice') }}</a>
					@endinstalled
					@installed('game-blackjack')
					<a class="dropdown-item" href="{{ route('games.blackjack.show') }}">{{ __('Blackjack') }}</a>
					@endinstalled
					@installed('game-baccarat')
					<a class="dropdown-item" href="{{ route('games.baccarat.show') }}">{{ __('Baccarat') }}</a>
					@endinstalled
					@installed('game-video-poker')
					<a class="dropdown-item" href="{{ route('games.video-poker.show') }}">{{ __('Video Poker') }}</a>
					@endinstalled
					@installed('game-american-roulette')
					<a class="dropdown-item" href="{{ route('games.american-roulette.show') }}">{{ __('American Roulette') }}</a>
					@endinstalled
					@installed('game-roulette')
					<a class="dropdown-item" href="{{ route('games.roulette.show') }}">{{ __('European Roulette') }}</a>
					@endinstalled
					@installed('game-american-bingo')
					<a class="dropdown-item" href="{{ route('games.american-bingo.show') }}">{{ __('75 Ball Bingo') }}</a>
					@endinstalled
					@installed('game-keno')
					<a class="dropdown-item" href="{{ route('games.keno.show') }}">{{ __('Keno') }}</a>
					@endinstalled
				</object>
			</object>
		</div>
		<a style="cursor: pointer" class="light anchordropdown">
			<img src="{{asset("assets/img/icons/history.svg")}}" alt="">
			{{__("History")}}
			<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt="" class="arrow">
		</a>
		<div class="dropdown">
			<object data="" type="">
				<a href="{{ route('frontend.history.top-wins') }}">{{__("Top wins")}}</a>
				<a href="{{ route('frontend.history.my') }}">{{__("My Games")}}</a>
			</object>
		</div>
		<a href="{{route("frontend.raffle.index")}}" class="light">
			<img src="{{asset("assets/img/icons/raffle.svg")}}" alt="">
			{{__("Raffle")}}
		</a>
		<a href="{{route("frontend.leaderboard")}}" class="light">
			<img src="{{asset("assets/img/icons/leaderboard.svg")}}" alt="">
			{{__("Leaderboard")}}
		</a>
	</div>
	<div class="border"></div>
	<div class="menu">
		<a href="{{route('frontend.index')}}" class="light">
			<img src="{{asset("assets/img/icons/home.svg")}}" alt="">
			{{__("HOME PAGE")}}
		</a>
		<a href="" class="light">
			<img src="{{asset("assets/img/icons/profile.svg")}}" alt="">
			{{__("PROFILE")}}
		</a>
		<a href="{{route("frontend.account.show")}}" class="light">
			<img src="{{asset("assets/img/icons/wallet.svg")}}" alt="">
			{{__("ACCOUNT")}}
		</a>
		<a href="{{ route('password.request') }}" class="light">
			<img src="{{asset("assets/img/icons/security.svg")}}" alt="">
			{{__("CHANGE PASSWORD")}}
		</a>
	</div>
	<div class="border"></div>
	<div class="menu">
		<a href="{{route('frontend.payments.deposit')}}" class="light">
			<img src="{{asset("assets/img/icons/deposit.svg")}}" alt="">
			{{__("DEPOSITS")}}
		</a>
		<a href="" class="light">
			<img src="{{asset("assets/img/icons/withdraw.svg")}}" alt="">
			{{__("WITHDRAW")}}
		</a>
		<a href="{{route("frontend.bonuses.index")}}" class="light">
			<img src="{{asset("assets/img/icons/bonus.svg")}}" alt="">
			{{__("BONUSES")}}
		</a>
	</div>
	<div class="border"></div>
	<div class="menu">
		<a href="" class="light">
			<img src="{{asset("assets/img/icons/security.svg")}}" alt="">
			{{__("SECURITY")}}
		</a>
	</div>
	<div class="menu" style="background: #1E1E1E">
		<form method="post" id='logout' action="{{ route('logout') }}">
			@csrf
			<a class="light" style="cursor: pointer" onclick="document.getElementById('logout').submit()">
				<img src="{{asset("assets/img/icons/logout.svg")}}" alt="">
				{{__("LOG OUT")}}
			</a>
		</form>
	</div>
	@endauth
	@guest
	<a class="account" href="{{route('login')}}">{{__("Account")}}</a>
	@endguest

</div>
</div>