@extends('frontend.layouts.home')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{asset("css/index.css")}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/dataTables.js')}}"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endpush
@auth
<div class="depwith">
	<a href="{{route('frontend.payments.deposit')}}" class="deposit">Deposit</a>
	<a class="with">Withdraw</a>
</div>
@endauth

<div class="main__wrapper">
	<div class="owl-carousel owl-theme" id="banner">
		<div class="item" style="background-image: url({{asset('assets/img/Slider1.png')}})">
			<div class="item__info">
				<div>
					<span class="free_trial">Free trial</span>
					<span>{{__("Sign up and get")}}</span>
				</div>
				<div>
					<span class="credits">
						{{__("1000 free credits")}}
					</span>
					<div class="box" style="text-align: center">
						{{__("to play and try our casino")}}
					</div>
				</div>
				<div>
					<a href="{{route("login")}}" class="viewmore">
						{{__("View more")}}
					</a>
				</div>
			</div>
			@include('frontend.includes.wins')
		</div>
		<div class="item" style="background-image: url(assets/img/Slider3.png);">
			<div class="item__info">
				<div>
					<span>{{__("Crypto deposits")}}</span>
				</div>
				<div>
					<span class="credits">
						{{__("Get 5% back")}}
					</span>
					<div class="box">
						{{__("when you deposit more than 5000 credits at once.")}}
					</div>
				</div>
				<div>
					<a href="{{route('frontend.payments.deposit')}}" class="viewmore">
						{{__("View more")}}
					</a>
				</div>
			</div>
			@include('frontend.includes.wins')
		</div>
		<div class="item" style="background-image: url(assets/img/Slider2.png);">
			<div class="item__info">
				<div>
					<span>{{__("Referral program")}}</span>
				</div>
				<div>
					<span class="credits">
						{{__("Get Bonuses")}}
					</span>
					<div class="box" style="width: 350px">
						{{__("Refer other people to our casino and get bonuses when they sign up, play games or make deposits.")}}
					</div>
				</div>
				<div>
					<a href="{{route("frontend.bonuses.index")}}" class="viewmore">
						{{__("View more")}}
					</a>
				</div>
			</div>
			@include('frontend.includes.wins')
		</div>
	</div>
	<div class="jackpot">
		<img src="{{asset("assets/img/jackpot.png")}}" alt="">
		<span class="first">Jackpot</span>
		<span>
			<span class="amount">69990</span>
			<span class="btc">BTC</span>
		</span>
	</div>

	<div class="probabilitytext">
		<div class="firstline">{{__("Check probability theory by yourself!")}} <span class="yellow">And win!</span></div>
		<div class="secondline">{{__("What number will be, how you think?")}}</div>
	</div>
	<div class="border"></div>
	<div class="biggestwin__mobile">
		<span class="rank">{{__("Biggest win")}}</span>
		<div class="yellow">{{__("Win now")}}</div>
		<span class="btc yellow">8 BTC</span>
	</div>
	<div class="owl-carousel owl-theme" id="wins__mobile">
		<div class="item">
			<div class="wins">
				<img src="assets/img/slot.png" alt="">
				<img class="winner" src="assets/img/winner.png" alt="">
				<div>
					<span class="gamename">{{__("slot")}}</span>
					<span class="username">testuser</span>
					<span class="win">Win 2 BTC</span>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="wins">
				<img src="assets/img/slot.png" alt="">
				<img class="winner" src="assets/img/winner.png" alt="">
				<div>
					<span class="gamename">slot</span>
					<span class="username">testuser</span>
					<span class="win">Win 2 BTC</span>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="wins">
				<img src="assets/img/slot.png" alt="">
				<img class="winner" src="assets/img/winner.png" alt="">
				<div>
					<span class="gamename">slot</span>
					<span class="username">testuser</span>
					<span class="win">Win 2 BTC</span>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="wins">
				<img src="assets/img/slot.png" alt="">
				<img class="winner" src="assets/img/winner.png" alt="">
				<div>
					<span class="gamename">slot</span>
					<span class="username">testuser</span>
					<span class="win">Win 2 BTC</span>
				</div>
			</div>
		</div>
	</div>
	<div class="dice">
		<span class="winning">You won 1.8</span>
		<div class="dice__wrapper">
			<img src="assets/img/games/dice.png" alt="">
			<input type="range" name="" id="range" value="1" min="1" max="9999">
		</div>
		<div class="dice__game">
			<span>{{__("Bet amount")}}</span>
			<div class="dice__game--selections">
				<input type="text" name="" id="">
				<button>min</button>
				<button>-1</button>
				<button>+1</button>
				<button>max</button>
			</div>
			<span>Select lines</span>
			<div class="dice__game--selections">
				<button>%</button>
				<input type="text" name="" id="">
				<button>min</button>
				<button>-1</button>
				<button>+1</button>
				<button>max</button>
				<div class="payout">
					<label for="payout">{{__("Payout")}}</label>
					<input type="text" id="payout">
				</div>
			</div>
			<div class="payout__tablet__mobile">
				<div class="payout">
					<label for="payout">{{__("Payout")}}</label>
					<input type="text" id="payout">
				</div>
				<button class="balance">128373.30</button>
			</div>

		</div>
		<div class="buttons">
			<button>{{__("Low")}}: 4579</button>
			<button>{{__("High")}}: 9171</button>
		</div>
	</div>
</div>


<div class="content">
	@if($top_game)
	<div class="biggestwin-ad" style="background-image: url('assets/img/slots.png');">
		<div class="leftwrapper">
			<img src="assets/img/icons/BiggestWin.svg" alt="">
			<div>
				<span class="big">
					{{__("Biggest win")}}
				</span>
				<span class="event">
					{{ __($top_game->title) }}, {{ $top_game->created_at->diffForHumans() }}
				</span>
			</div>
		</div>
		<div class="centerwrapper">
			<div class="username">
				<span>{{ $top_game->account->user->name }}</span>
				<img src="assets/img/icons/man-user.svg" alt="">
			</div>
			<div class="win">{{__("Won")}}: &#10;&#13; {{$top_game->_win}} {{__("credits")}}</div>
		</div>
		<a href="{{route('frontend.leaderboard')}}">{{__("View leaderboard")}}</a>
	</div>
	@endif
	<span class="lucky"><span class="yellow">Top 10</span> {{__("lucky games")}}</span>
	<div class="luckygames">
		<a href="{{ route('games.slots.show') }}" class="luckygames__card">
			<span>{{__("SLOTS")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/1.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/slots.png')}}" alt="" loading="lazy">
		</a>
		<a href="{{ route('games.american-roulette.show') }}" class="luckygames__card">
			<span>{{__("AMERICAN ROULETTE")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/2.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/americanroulette.png')}}" alt="">
		</a>
		<a href="{{ route('games.blackjack.show') }}" class="luckygames__card">
			<span>{{__("BLACKJACK")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/3.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/blackjack.png')}}" alt="">
		</a>
		<a href="{{ route('games.video-poker.show') }}" class="luckygames__card">
			<span>{{__("VIDEO POKER")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/4.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/videopoker.png')}}" alt="">
		</a>
		<a href="{{ route('games.dice.show') }}" class="luckygames__card">
			<span>{{__("DICE")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/5.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/dicee.png')}}" alt="">
		</a>
		<a class="luckygames__card">
			<span>{{__("CRIPTO SLOTS")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/6.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/cripto.png')}}" alt="">
		</a>
		<a class="luckygames__card">
			<span>{{__("LUCKY WHEEL")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/7.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/wheel.png')}}" alt="">
		</a>
		<a href="{{ route('games.baccarat.show') }}" class="luckygames__card">
			<span>{{__("BACCARAT")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/8.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/baccarat.png')}}" alt="">
		</a>
		<a class="luckygames__card">
			<span>{{__("75 BALL BINGO")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/9.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/75.png')}}" alt="">
		</a>
		<a href="{{ route('games.keno.show') }}" class="luckygames__card">
			<span>{{__("KENO")}}</span>
			<img class="luckygames__card--number" data-src="{{asset('assets/img/icons/10.svg')}}" alt="">
			<img data-src="{{asset('assets/img/games/keno.png')}}" alt="">
		</a>
	</div>
	<div class="fairraffle">
		<div class="raffle" style="background-image: url('/assets/img/raffle.png')">
			<img data-src="{{asset("assets/img/icons/rafflebig.svg")}}" alt="" class="raffle__logo">
			<h2>{{__("Raffle")}}</h2>
			<p>{{__("The draw is completed")}}</p>
			<span>The next draw will begin in 38 minutes</span>
			<h3>Lucas Balisroni</h3>
			<span class="win">won 39.00 credits</span>
			<div class="participants">
				<div class="participants__wrapper" style="position: relative">
					<span>{{__("Participants")}}:</span>
					<div class="vertical"></div>
					<div class="participants__info">
						<p>Gabery Miroco</p>
						<p>Vlad Faminov</p>

						<p>Grek Mokin</p>
						<p>Veno Moracona</p>
						<p>
							<img data-src="{{asset("assets/img/icons/raffle big.svg")}}" alt="">
							Lucas Balisroni
						</p>
					</div>
				</div>

			</div>
			<a href="{{route("frontend.raffle.index")}}">{{__("View past raffles")}}</a>

		</div>
		<div class="fair">
			<img data-src="{{asset("assets/img/icons/shield.svg")}}" alt="">
			<h2>{{__("Provably fair")}}</h2>
			<span>{{__("Our casino uses provably fair technology, which allows you to verify that each roll or card draw is
				completely random and you are not being cheated!")}}</span>
		</div>
	</div>
	<table id="leaderboard">
		<caption>
			{{__("Leaderboard")}}
			<div class="center">
				<div class="no-flex">
					@php
					if(Request::has('game')){
					$game = __(Request::get('game'));
					}
					else{
					$game = __('All Games');
					}
					if(Request::has('period')){
					$period = __(Request::get('period'));
					}
					else{
					$period = __('All Time');
					}
					@endphp
					<button>{{$game}} <img src="{{asset("assets/img/icons/dropdown.svg")}}" alt=""></button>
					<div class="dropdown">
						@if (Request::has('game'))
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => NULL, 'index' => NULL])) }}">{{ __('All games') }}</a>
						<div class="dropdown-divider"></div>
						@endif

						@installed('game-slots')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Slots'])) }}">
							{{ __('Slots') }}
						</a>
						@endinstalled
						@installed('game-multi-slots')
						@foreach(config('game-multi-slots.titles') as $index => $title)
						@if($title)
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'MultiSlots', 'index' => $index])) }}">
							{{ __($title) }}
						</a>
						@endif
						@endforeach
						@endinstalled
						@installed('game-lucky-wheel')
						@foreach(config('game-lucky-wheel.variations') as $index => $game)
						@if($game->title)
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'LuckyWheel', 'index' => $index])) }}">
							{{ __($game->title) }}
						</a>
						@endif
						@endforeach
						@endinstalled
						@installed('game-dice')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Dice'])) }}">
							{{ __('Dice') }}
						</a>
						@endinstalled
						@installed('game-blackjack')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Blackjack'])) }}">
							{{ __('Blackjack') }}
						</a>
						@endinstalled
						@installed('game-baccarat')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Baccarat'])) }}">
							{{ __('Baccarat') }}
						</a>
						@endinstalled
						@installed('game-video-poker')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'VideoPoker'])) }}">
							{{ __('Video Poker') }}
						</a>
						@endinstalled
						@installed('game-american-roulette')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanRoulette'])) }}">
							{{ __('American Roulette') }}
						</a>
						@endinstalled
						@installed('game-roulette')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Roulette'])) }}">
							{{ __('European Roulette') }}
						</a>
						@endinstalled
						@installed('game-american-bingo')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanBingo'])) }}">
							{{ __('75 Ball Bingo') }}
						</a>
						@endinstalled
						@installed('game-keno')
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Keno'])) }}">
							{{ __('Keno') }}
						</a>
						@endinstalled
					</div>
				</div>
				<div class="no-flex">
					<button>{{$period}}<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt=""></button>
					<div class="dropdown">
						@if (Request::has('period'))
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => NULL])) }}">{{ __('All time') }}</a>
						<div class="dropdown-divider"></div>
						@endif
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentWeek'])) }}">{{ __('Current week') }}</a>
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentMonth'])) }}">{{ __('Current month') }}</a>
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'PreviousMonth'])) }}">{{ __('Previous month') }}</a>
						<a class="dropdown-item"
							href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentYear'])) }}">{{ __('Current year') }}</a>
					</div>
				</div>
			</div>
		</caption>
		<thead>
			<tr>
				<th>{{__("Rank")}}</th>
				<th style="text-align: left">{{__("Name")}}</th>
				<th>{{__("Games Played")}}</th>
				<th>{{__("Max win")}}</th>
				<th class="esim">{{__("Total win")}} <img src="{{asset("assets/img/icons/bottom.svg")}}" alt=""></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $i=> $user)
			<tr>
				<td class="rank">{{ ++$i + 10 * (max(1, intval(request()->query('page'))) - 1) }}</td>
				<td class="name">{{ $user->name }}</td>
				<td>{{ $user->_total_games }}</td>
				<td>{{ $user->_max_win }}</td>
				<td>{{ $user->_total_win }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="mobile__leaderboard">
		<h3>{{__("Leaderboard")}} </h3>
		<div class="center">
			<div class="no-flex">
				@php
				if(Request::has('game')){
				$game = __(Request::get('game'));
				}
				else{
				$game = __('All Games');
				}
				if(Request::has('period')){
				$period = __(Request::get('period'));
				}
				else{
				$period = __('All Time');
				}
				@endphp
				<button>{{$game}} <img src="{{asset("assets/img/icons/dropdown.svg")}}" alt=""></button>
				<div class="dropdown">
					@if (Request::has('game'))
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => NULL, 'index' => NULL])) }}">{{ __('All games') }}</a>
					<div class="dropdown-divider"></div>
					@endif

					@installed('game-slots')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Slots'])) }}">
						{{ __('Slots') }}
					</a>
					@endinstalled
					@installed('game-multi-slots')
					@foreach(config('game-multi-slots.titles') as $index => $title)
					@if($title)
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'MultiSlots', 'index' => $index])) }}">
						{{ __($title) }}
					</a>
					@endif
					@endforeach
					@endinstalled
					@installed('game-lucky-wheel')
					@foreach(config('game-lucky-wheel.variations') as $index => $game)
					@if($game->title)
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'LuckyWheel', 'index' => $index])) }}">
						{{ __($game->title) }}
					</a>
					@endif
					@endforeach
					@endinstalled
					@installed('game-dice')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Dice'])) }}">
						{{ __('Dice') }}
					</a>
					@endinstalled
					@installed('game-blackjack')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Blackjack'])) }}">
						{{ __('Blackjack') }}
					</a>
					@endinstalled
					@installed('game-baccarat')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Baccarat'])) }}">
						{{ __('Baccarat') }}
					</a>
					@endinstalled
					@installed('game-video-poker')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'VideoPoker'])) }}">
						{{ __('Video Poker') }}
					</a>
					@endinstalled
					@installed('game-american-roulette')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanRoulette'])) }}">
						{{ __('American Roulette') }}
					</a>
					@endinstalled
					@installed('game-roulette')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Roulette'])) }}">
						{{ __('European Roulette') }}
					</a>
					@endinstalled
					@installed('game-american-bingo')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanBingo'])) }}">
						{{ __('75 Ball Bingo') }}
					</a>
					@endinstalled
					@installed('game-keno')
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Keno'])) }}">
						{{ __('Keno') }}
					</a>
					@endinstalled
				</div>
			</div>
			<div class="no-flex">
				<button>{{$period}}<img src="{{asset("assets/img/icons/dropdown.svg")}}" alt=""></button>
				<div class="dropdown">
					@if (Request::has('period'))
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => NULL])) }}">{{ __('All time') }}</a>
					<div class="dropdown-divider"></div>
					@endif
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentWeek'])) }}">{{ __('Current week') }}</a>
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentMonth'])) }}">{{ __('Current month') }}</a>
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'PreviousMonth'])) }}">{{ __('Previous month') }}</a>
					<a class="dropdown-item"
						href="{{ route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentYear'])) }}">{{ __('Current year') }}</a>
				</div>
			</div>
		</div>

	</div>

	<div class="owl-carousel owl-theme" id="leaderboard__mobile">
		<div class="item">
			<div>
				<span>Rank</span>
				<span>21</span>
			</div>
			<div>
				<span>Name</span>
				<span class="yellow">Username</span>
			</div>
			<div>
				<span>Games played</span>
				<span>10.87</span>
			</div>
			<div>
				<span>Max win</span>
				<span>123445</span>
			</div>
			<div>
				<span>Total win</span>
				<span>1234346</span>
			</div>
		</div>
		<div class="item">
			<div>
				<span>Rank</span>
				<span>21</span>
			</div>
			<div>
				<span>Name</span>
				<span>21</span>
			</div>
			<div>
				<span>Games played</span>
				<span>10.87</span>
			</div>
			<div>
				<span>Max win</span>
				<span>123445</span>
			</div>
			<div>
				<span>Total win</span>
				<span>1234346</span>
			</div>
		</div>
		<div class="item">
			<div>
				<span>Rank</span>
				<span>21</span>
			</div>
			<div>
				<span>Name</span>
				<span>21</span>
			</div>
			<div>
				<span>Games played</span>
				<span>10.87</span>
			</div>
			<div>
				<span>Max win</span>
				<span>123445</span>
			</div>
			<div>
				<span>Total win</span>
				<span>1234346</span>
			</div>
		</div>
	</div>
</div>

@endsection