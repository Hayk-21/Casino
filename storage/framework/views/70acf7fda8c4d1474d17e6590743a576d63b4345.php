<?php $__env->startSection('content'); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/index.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/dataTables.js')); ?>"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>
<?php if(auth()->guard()->check()): ?>
<div class="depwith">
	<a href="<?php echo e(route('frontend.payments.deposit')); ?>" class="deposit">Deposit</a>
	<a class="with">Withdraw</a>
</div>
<?php endif; ?>

<div class="main__wrapper">
	<div class="owl-carousel owl-theme" id="banner">
		<div class="item" style="background-image: url(<?php echo e(asset('assets/img/Slider1.png')); ?>)">
			<div class="item__info">
				<div>
					<span class="free_trial">Free trial</span>
					<span><?php echo e(__("Sign up and get")); ?></span>
				</div>
				<div>
					<span class="credits">
						<?php echo e(__("1000 free credits")); ?>

					</span>
					<div class="box" style="text-align: center">
						<?php echo e(__("to play and try our casino")); ?>

					</div>
				</div>
				<div>
					<a href="<?php echo e(route("login")); ?>" class="viewmore">
						<?php echo e(__("View more")); ?>

					</a>
				</div>
			</div>
			<?php echo $__env->make('frontend.includes.wins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<div class="item" style="background-image: url(assets/img/Slider3.png);">
			<div class="item__info">
				<div>
					<span><?php echo e(__("Crypto deposits")); ?></span>
				</div>
				<div>
					<span class="credits">
						<?php echo e(__("Get 5% back")); ?>

					</span>
					<div class="box">
						<?php echo e(__("when you deposit more than 5000 credits at once.")); ?>

					</div>
				</div>
				<div>
					<a href="<?php echo e(route('frontend.payments.deposit')); ?>" class="viewmore">
						<?php echo e(__("View more")); ?>

					</a>
				</div>
			</div>
			<?php echo $__env->make('frontend.includes.wins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<div class="item" style="background-image: url(assets/img/Slider2.png);">
			<div class="item__info">
				<div>
					<span><?php echo e(__("Referral program")); ?></span>
				</div>
				<div>
					<span class="credits">
						<?php echo e(__("Get Bonuses")); ?>

					</span>
					<div class="box" style="width: 350px">
						<?php echo e(__("Refer other people to our casino and get bonuses when they sign up, play games or make deposits.")); ?>

					</div>
				</div>
				<div>
					<a href="<?php echo e(route("frontend.bonuses.index")); ?>" class="viewmore">
						<?php echo e(__("View more")); ?>

					</a>
				</div>
			</div>
			<?php echo $__env->make('frontend.includes.wins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
	<div class="jackpot">
		<img src="<?php echo e(asset("assets/img/jackpot.png")); ?>" alt="">
		<span class="first">Jackpot</span>
		<span>
			<span class="amount">69990</span>
			<span class="btc">BTC</span>
		</span>
	</div>

	<div class="probabilitytext">
		<div class="firstline"><?php echo e(__("Check probability theory by yourself!")); ?> <span class="yellow">And win!</span></div>
		<div class="secondline"><?php echo e(__("What number will be, how you think?")); ?></div>
	</div>
	<div class="border"></div>
	<div class="biggestwin__mobile">
		<span class="rank"><?php echo e(__("Biggest win")); ?></span>
		<div class="yellow"><?php echo e(__("Win now")); ?></div>
		<span class="btc yellow">8 BTC</span>
	</div>
	<div class="owl-carousel owl-theme" id="wins__mobile">
		<div class="item">
			<div class="wins">
				<img src="assets/img/slot.png" alt="">
				<img class="winner" src="assets/img/winner.png" alt="">
				<div>
					<span class="gamename"><?php echo e(__("slot")); ?></span>
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
			<span><?php echo e(__("Bet amount")); ?></span>
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
					<label for="payout"><?php echo e(__("Payout")); ?></label>
					<input type="text" id="payout">
				</div>
			</div>
			<div class="payout__tablet__mobile">
				<div class="payout">
					<label for="payout"><?php echo e(__("Payout")); ?></label>
					<input type="text" id="payout">
				</div>
				<button class="balance">128373.30</button>
			</div>

		</div>
		<div class="buttons">
			<button><?php echo e(__("Low")); ?>: 4579</button>
			<button><?php echo e(__("High")); ?>: 9171</button>
		</div>
	</div>
</div>


<div class="content">
	<?php if($top_game): ?>
	<div class="biggestwin-ad" style="background-image: url('assets/img/slots.png');">
		<div class="leftwrapper">
			<img src="assets/img/icons/BiggestWin.svg" alt="">
			<div>
				<span class="big">
					<?php echo e(__("Biggest win")); ?>

				</span>
				<span class="event">
					<?php echo e(__($top_game->title)); ?>, <?php echo e($top_game->created_at->diffForHumans()); ?>

				</span>
			</div>
		</div>
		<div class="centerwrapper">
			<div class="username">
				<span><?php echo e($top_game->account->user->name); ?></span>
				<img src="assets/img/icons/man-user.svg" alt="">
			</div>
			<div class="win"><?php echo e(__("Won")); ?>: &#10;&#13; <?php echo e($top_game->_win); ?> <?php echo e(__("credits")); ?></div>
		</div>
		<a href="<?php echo e(route('frontend.leaderboard')); ?>"><?php echo e(__("View leaderboard")); ?></a>
	</div>
	<?php endif; ?>
	<span class="lucky"><span class="yellow">Top 10</span> <?php echo e(__("lucky games")); ?></span>
	<div class="luckygames">
		<a href="<?php echo e(route('games.slots.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("SLOTS")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/1.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/slots.png')); ?>" alt="" loading="lazy">
		</a>
		<a href="<?php echo e(route('games.american-roulette.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("AMERICAN ROULETTE")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/2.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/americanroulette.png')); ?>" alt="">
		</a>
		<a href="<?php echo e(route('games.blackjack.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("BLACKJACK")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/3.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/blackjack.png')); ?>" alt="">
		</a>
		<a href="<?php echo e(route('games.video-poker.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("VIDEO POKER")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/4.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/videopoker.png')); ?>" alt="">
		</a>
		<a href="<?php echo e(route('games.dice.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("DICE")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/5.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/dicee.png')); ?>" alt="">
		</a>
		<a class="luckygames__card">
			<span><?php echo e(__("CRIPTO SLOTS")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/6.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/cripto.png')); ?>" alt="">
		</a>
		<a class="luckygames__card">
			<span><?php echo e(__("LUCKY WHEEL")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/7.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/wheel.png')); ?>" alt="">
		</a>
		<a href="<?php echo e(route('games.baccarat.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("BACCARAT")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/8.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/baccarat.png')); ?>" alt="">
		</a>
		<a class="luckygames__card">
			<span><?php echo e(__("75 BALL BINGO")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/9.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/75.png')); ?>" alt="">
		</a>
		<a href="<?php echo e(route('games.keno.show')); ?>" class="luckygames__card">
			<span><?php echo e(__("KENO")); ?></span>
			<img class="luckygames__card--number" data-src="<?php echo e(asset('assets/img/icons/10.svg')); ?>" alt="">
			<img data-src="<?php echo e(asset('assets/img/games/keno.png')); ?>" alt="">
		</a>
	</div>
	<div class="fairraffle">
		<div class="raffle" style="background-image: url('/assets/img/raffle.png')">
			<img data-src="<?php echo e(asset("assets/img/icons/rafflebig.svg")); ?>" alt="" class="raffle__logo">
			<h2><?php echo e(__("Raffle")); ?></h2>
			<p><?php echo e(__("The draw is completed")); ?></p>
			<span>The next draw will begin in 38 minutes</span>
			<h3>Lucas Balisroni</h3>
			<span class="win">won 39.00 credits</span>
			<div class="participants">
				<div class="participants__wrapper" style="position: relative">
					<span><?php echo e(__("Participants")); ?>:</span>
					<div class="vertical"></div>
					<div class="participants__info">
						<p>Gabery Miroco</p>
						<p>Vlad Faminov</p>

						<p>Grek Mokin</p>
						<p>Veno Moracona</p>
						<p>
							<img data-src="<?php echo e(asset("assets/img/icons/raffle big.svg")); ?>" alt="">
							Lucas Balisroni
						</p>
					</div>
				</div>

			</div>
			<a href="<?php echo e(route("frontend.raffle.index")); ?>"><?php echo e(__("View past raffles")); ?></a>

		</div>
		<div class="fair">
			<img data-src="<?php echo e(asset("assets/img/icons/shield.svg")); ?>" alt="">
			<h2><?php echo e(__("Provably fair")); ?></h2>
			<span><?php echo e(__("Our casino uses provably fair technology, which allows you to verify that each roll or card draw is
				completely random and you are not being cheated!")); ?></span>
		</div>
	</div>
	<table id="leaderboard">
		<caption>
			<?php echo e(__("Leaderboard")); ?>

			<div class="center">
				<div class="no-flex">
					<?php
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
					?>
					<button><?php echo e($game); ?> <img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt=""></button>
					<div class="dropdown">
						<?php if(Request::has('game')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => NULL, 'index' => NULL]))); ?>"><?php echo e(__('All games')); ?></a>
						<div class="dropdown-divider"></div>
						<?php endif; ?>

						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-slots')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Slots']))); ?>">
							<?php echo e(__('Slots')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-multi-slots')): ?>
						<?php $__currentLoopData = config('game-multi-slots.titles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($title): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'MultiSlots', 'index' => $index]))); ?>">
							<?php echo e(__($title)); ?>

						</a>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-lucky-wheel')): ?>
						<?php $__currentLoopData = config('game-lucky-wheel.variations'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($game->title): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'LuckyWheel', 'index' => $index]))); ?>">
							<?php echo e(__($game->title)); ?>

						</a>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-dice')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Dice']))); ?>">
							<?php echo e(__('Dice')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-blackjack')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Blackjack']))); ?>">
							<?php echo e(__('Blackjack')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-baccarat')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Baccarat']))); ?>">
							<?php echo e(__('Baccarat')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-video-poker')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'VideoPoker']))); ?>">
							<?php echo e(__('Video Poker')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-roulette')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanRoulette']))); ?>">
							<?php echo e(__('American Roulette')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-roulette')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Roulette']))); ?>">
							<?php echo e(__('European Roulette')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-bingo')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanBingo']))); ?>">
							<?php echo e(__('75 Ball Bingo')); ?>

						</a>
						<?php endif; ?>
						<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-keno')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Keno']))); ?>">
							<?php echo e(__('Keno')); ?>

						</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="no-flex">
					<button><?php echo e($period); ?><img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt=""></button>
					<div class="dropdown">
						<?php if(Request::has('period')): ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => NULL]))); ?>"><?php echo e(__('All time')); ?></a>
						<div class="dropdown-divider"></div>
						<?php endif; ?>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentWeek']))); ?>"><?php echo e(__('Current week')); ?></a>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentMonth']))); ?>"><?php echo e(__('Current month')); ?></a>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'PreviousMonth']))); ?>"><?php echo e(__('Previous month')); ?></a>
						<a class="dropdown-item"
							href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentYear']))); ?>"><?php echo e(__('Current year')); ?></a>
					</div>
				</div>
			</div>
		</caption>
		<thead>
			<tr>
				<th><?php echo e(__("Rank")); ?></th>
				<th style="text-align: left"><?php echo e(__("Name")); ?></th>
				<th><?php echo e(__("Games Played")); ?></th>
				<th><?php echo e(__("Max win")); ?></th>
				<th class="esim"><?php echo e(__("Total win")); ?> <img src="<?php echo e(asset("assets/img/icons/bottom.svg")); ?>" alt=""></th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=> $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td class="rank"><?php echo e(++$i + 10 * (max(1, intval(request()->query('page'))) - 1)); ?></td>
				<td class="name"><?php echo e($user->name); ?></td>
				<td><?php echo e($user->_total_games); ?></td>
				<td><?php echo e($user->_max_win); ?></td>
				<td><?php echo e($user->_total_win); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div class="mobile__leaderboard">
		<h3><?php echo e(__("Leaderboard")); ?> </h3>
		<div class="center">
			<div class="no-flex">
				<?php
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
				?>
				<button><?php echo e($game); ?> <img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt=""></button>
				<div class="dropdown">
					<?php if(Request::has('game')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => NULL, 'index' => NULL]))); ?>"><?php echo e(__('All games')); ?></a>
					<div class="dropdown-divider"></div>
					<?php endif; ?>

					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-slots')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Slots']))); ?>">
						<?php echo e(__('Slots')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-multi-slots')): ?>
					<?php $__currentLoopData = config('game-multi-slots.titles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($title): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'MultiSlots', 'index' => $index]))); ?>">
						<?php echo e(__($title)); ?>

					</a>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-lucky-wheel')): ?>
					<?php $__currentLoopData = config('game-lucky-wheel.variations'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($game->title): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'LuckyWheel', 'index' => $index]))); ?>">
						<?php echo e(__($game->title)); ?>

					</a>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-dice')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Dice']))); ?>">
						<?php echo e(__('Dice')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-blackjack')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Blackjack']))); ?>">
						<?php echo e(__('Blackjack')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-baccarat')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Baccarat']))); ?>">
						<?php echo e(__('Baccarat')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-video-poker')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'VideoPoker']))); ?>">
						<?php echo e(__('Video Poker')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-roulette')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanRoulette']))); ?>">
						<?php echo e(__('American Roulette')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-roulette')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Roulette']))); ?>">
						<?php echo e(__('European Roulette')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-bingo')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanBingo']))); ?>">
						<?php echo e(__('75 Ball Bingo')); ?>

					</a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-keno')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Keno']))); ?>">
						<?php echo e(__('Keno')); ?>

					</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="no-flex">
				<button><?php echo e($period); ?><img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt=""></button>
				<div class="dropdown">
					<?php if(Request::has('period')): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => NULL]))); ?>"><?php echo e(__('All time')); ?></a>
					<div class="dropdown-divider"></div>
					<?php endif; ?>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentWeek']))); ?>"><?php echo e(__('Current week')); ?></a>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentMonth']))); ?>"><?php echo e(__('Current month')); ?></a>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'PreviousMonth']))); ?>"><?php echo e(__('Previous month')); ?></a>
					<a class="dropdown-item"
						href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentYear']))); ?>"><?php echo e(__('Current year')); ?></a>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>