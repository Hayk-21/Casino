
<?php
$a = json_encode($locale->locales());
$a = json_decode($a);

?>
<header>
	<div class="header__upper">
		<?php if(auth()->guard()->guest()): ?>
		<a href="<?php echo e(route("login")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/star.svg")); ?>" alt="">
			Get bonus
		</a>
		<a href="http://" class="light">
			<img src="<?php echo e(asset("assets/img/icons/star.svg")); ?>" alt="">
			Affiliate?
		</a>
		<a href="<?php echo e(url("page/provably-fair")); ?>">Provably fair</a>
		<a href="<?php echo e(url("page/privacy-policy")); ?>">Policy</a>
		<?php endif; ?>
		<?php if(auth()->guard()->check()): ?>
		<a class="light" style="cursor: pointer">
			<img src="<?php echo e(asset("assets/img/icons/Game.svg")); ?>" alt="">
			<span style="z-index: 9999">Games</span>
			<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
			<div class="dropdown">
				<object data="" type="">
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-slots')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.slots.show')); ?>"><?php echo e(__('Slots')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-multi-slots')): ?>
					<?php $__currentLoopData = config('game-multi-slots.titles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($title): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('games.multi-slots.show', ['index' => config('game-multi-slots.slugs')[$index] ?? $index])); ?>"><?php echo e(__($title)); ?></a>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-lucky-wheel')): ?>
					<?php $__currentLoopData = config('game-lucky-wheel.variations'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($game->title): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('games.lucky-wheel.show', ['index' => $game->slug])); ?>"><?php echo e(__($game->title)); ?></a>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-dice')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.dice.show')); ?>"><?php echo e(__('Dice')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-blackjack')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.blackjack.show')); ?>"><?php echo e(__('Blackjack')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-baccarat')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.baccarat.show')); ?>"><?php echo e(__('Baccarat')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-video-poker')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.video-poker.show')); ?>"><?php echo e(__('Video Poker')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-roulette')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.american-roulette.show')); ?>"><?php echo e(__('American Roulette')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-roulette')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.roulette.show')); ?>"><?php echo e(__('European Roulette')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-bingo')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.american-bingo.show')); ?>"><?php echo e(__('75 Ball Bingo')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-keno')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.keno.show')); ?>"><?php echo e(__('Keno')); ?></a>
					<?php endif; ?>
				</object>
			</div>
		</a>
		<a class="light" style="cursor: pointer">
			<img src="<?php echo e(asset("assets/img/icons/history.svg")); ?>" alt="">
			<span style="z-index: 9999">History</span>
			<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
			<div class="dropdown">
				<object data="" type="">
					<a href="<?php echo e(route('frontend.history.top-wins')); ?>">Top wins</a>
					<a href="<?php echo e(route('frontend.history.my')); ?>">My Games</a>
				</object>
			</div>
		</a>
		<a href="<?php echo e(route("frontend.raffle.index")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/raffle.svg")); ?>" alt="">
			Raffle
		</a>
		<a href="<?php echo e(route("frontend.leaderboard")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/leaderboard.svg")); ?>" alt="">
			Leaderboard
		</a>
		<?php endif; ?>

	</div>
	<div class="header__content">
		<img src="<?php echo e(asset("assets/img/icons/hamburger.svg")); ?>" alt="" class="hamburger">
		<img src="<?php echo e(asset("assets/img/icons/close.svg")); ?>" alt="" class="close">
		<div>
			<a href="/" class="logo">
				<img src="<?php echo e(asset("assets/img/icons/yellowlogo.svg")); ?>" alt="">
				<span>CRYPTO CASINO</span>
			</a>
			<button class="language">
				<div class="language__bar">
					<?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="/locale/<?php echo e($lang->flag); ?>/remember">
						<img src="<?php echo e(asset("assets/img/country/$lang->flag.svg")); ?>" alt="">
						<span><?php echo e(strtoupper($lang->flag)); ?></span>
					</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div>
					<img src="<?php echo e(asset("assets/img/country/".json_decode(json_encode($locale->locale()))->flag.".svg")); ?>" alt="">
					<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
				</div>
			</button>
			<div class="jackpot">
				<img src="<?php echo e(asset("assets/img/jackpot.png")); ?>" alt="">
				<span class="first">Jackpot</span>
				<span>
					<span class="amount">69990</span>
					<span class="btc">BTC</span>
				</span>
			</div>

		</div>
		<button class="language language__mobile">

			<div>
				<img src="<?php echo e(asset("assets/img/country/".json_decode(json_encode($locale->locale()))->flag.".svg")); ?>" alt="">
				<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
			</div>
			<div class="language__bar">
				<?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a href="/locale/<?php echo e($lang->flag); ?>/remember">
					<img src="assets/img/country/<?php echo e($lang->flag); ?>.svg" alt="">
					<span><?php echo e(strtoupper($lang->flag)); ?></span>
				</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</button>
		<?php if(auth()->guard()->guest()): ?>
		<div class="accdep">
			<a href="<?php echo e(route('login')); ?>" class="account">Account</a>
			<a href="<?php echo e(route('frontend.payments.deposit')); ?>" class="deposit">Deposit</a>
		</div>
		<?php endif; ?>
		<?php if(auth()->guard()->check()): ?>
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
				<a href="<?php echo e(route('frontend.payments.deposit')); ?>" class="deposit">Deposit</a>
			</div>
			<div class="account acc-dropdown">
				<a onclick="return false" id="usernamedrop" class="light"><?php echo e(auth()->user()->name); ?></a>
				<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
				<div class="dropdown">
					<a href="<?php echo e(route("frontend.account.show")); ?>">Account</a>
					<a href="<?php echo e(route("frontend.bonuses.index")); ?>">Bonuses</a>
					<a href="<?php echo e(url('page/payments')); ?>">Deposits</a>
					<a href="http://" onclick="document.getElementById('logout').submit();return false;">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

</header>


<div class="header__mobile">
	<?php if(auth()->guard()->check()): ?>
	<div class="menu special-menu" style="padding:10px 16px">
		<a class="light" style="margin: 0">
			<div style="color:#959595">
				<?php echo e(__("beginner")); ?>

			</div>
			<div style="color: #538C31;font-weight: 600">100%</div>
		</a>
		<a class="light" style="margin: 0;font-size:18px">
			<div style="color:white">
				<?php echo e(auth()->user()->name); ?>

			</div>
			<div><?php echo e(__("to the bonus")); ?></div>
		</a>
	</div>
	<div class="menu special-menu" style="background-color: #1E1E1E">
		<a class="light">
			<div>
				<img src="<?php echo e(asset("assets/img/icons/walletgreen.svg")); ?>" alt="">
				<?php echo e(__("Amount")); ?>

			</div>
			<div class="yellow">0 BTC</div>
		</a>
		<a style="font-size: 16px;color:#707070;margin-top:-20px;margin-bottom:10px">
			<div>
				<img src="<?php echo e(asset("assets/img/icons/walletgreen.svg")); ?>" alt="">
				<?php echo e(__("Real balance")); ?>

			</div>
			<div class="yellow" style="opacity: .5">0 BTC</div>
		</a>
		<a style="font-size: 16px;color:#707070">
			<div>
				<img src="<?php echo e(asset("assets/img/icons/walletgreen.svg")); ?>" alt="">
				<?php echo e(__("Bonus balance")); ?>

			</div>
			<div class="yellow" style="opacity: .5">0 BTC</div>
		</a>
		<a class="light">
			<div>
				<img src="<?php echo e(asset("assets/img/icons/coins.svg")); ?>" alt="">
				<?php echo e(__("Bals")); ?>

			</div>
			<div class="yellow">0</div>
		</a>
		<a class="light">
			<div>
				<img src="<?php echo e(asset("assets/img/icons/pig.svg")); ?>" alt="">
				<?php echo e(__("Cashback")); ?>

			</div>
			<div class="yellow">0 BTC</div>
		</a>
		<a href="<?php echo e(url('page/payments')); ?>" class="deposit"><?php echo e(__("Deposit")); ?></a>
	</div>
	<?php endif; ?>
	<div class="menu">
		<?php if(auth()->guard()->guest()): ?>
		<a href="<?php echo e(route("frontend.bonuses.index")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/star.svg")); ?>" alt="">
			<?php echo e(__("Get bonus")); ?>

		</a>
		<a href="http://" class="light">
			<img src="<?php echo e(asset("assets/img/icons/star.svg")); ?>" alt="">
			<?php echo e(__("Affiliate?")); ?>

		</a>
		<a href="<?php echo e(("pages/provably-fair")); ?>">
			<img src="<?php echo e(asset("assets/img/icons/star.svg")); ?>" alt="">
			<?php echo e(__("Provably fair")); ?>

		</a>
		<a href="<?php echo e(("pages/privacy-policy")); ?>">
			<img src="<?php echo e(asset("assets/img/icons/star")); ?>.svg" alt="">
			<?php echo e(__("Policy")); ?>

		</a>
		<?php endif; ?>
		<?php if(auth()->guard()->check()): ?>
		<a style="cursor: pointer" class="light anchordropdown">
			<img src="<?php echo e(asset("assets/img/icons/Game.svg")); ?>" alt="">
			<?php echo e(__("Games")); ?>

			<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
		</a>
		<div class="dropdown">
			<object data="" type="">
				<object data="" type="">
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-slots')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.slots.show')); ?>"><?php echo e(__('Slots')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-multi-slots')): ?>
					<?php $__currentLoopData = config('game-multi-slots.titles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($title): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('games.multi-slots.show', ['index' => config('game-multi-slots.slugs')[$index] ?? $index])); ?>"><?php echo e(__($title)); ?></a>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-lucky-wheel')): ?>
					<?php $__currentLoopData = config('game-lucky-wheel.variations'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($game->title): ?>
					<a class="dropdown-item"
						href="<?php echo e(route('games.lucky-wheel.show', ['index' => $game->slug])); ?>"><?php echo e(__($game->title)); ?></a>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-dice')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.dice.show')); ?>"><?php echo e(__('Dice')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-blackjack')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.blackjack.show')); ?>"><?php echo e(__('Blackjack')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-baccarat')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.baccarat.show')); ?>"><?php echo e(__('Baccarat')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-video-poker')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.video-poker.show')); ?>"><?php echo e(__('Video Poker')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-roulette')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.american-roulette.show')); ?>"><?php echo e(__('American Roulette')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-roulette')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.roulette.show')); ?>"><?php echo e(__('European Roulette')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-bingo')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.american-bingo.show')); ?>"><?php echo e(__('75 Ball Bingo')); ?></a>
					<?php endif; ?>
					<?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-keno')): ?>
					<a class="dropdown-item" href="<?php echo e(route('games.keno.show')); ?>"><?php echo e(__('Keno')); ?></a>
					<?php endif; ?>
				</object>
			</object>
		</div>
		<a style="cursor: pointer" class="light anchordropdown">
			<img src="<?php echo e(asset("assets/img/icons/history.svg")); ?>" alt="">
			<?php echo e(__("History")); ?>

			<img src="<?php echo e(asset("assets/img/icons/dropdown.svg")); ?>" alt="" class="arrow">
		</a>
		<div class="dropdown">
			<object data="" type="">
				<a href="<?php echo e(route('frontend.history.top-wins')); ?>"><?php echo e(__("Top wins")); ?></a>
				<a href="<?php echo e(route('frontend.history.my')); ?>"><?php echo e(__("My Games")); ?></a>
			</object>
		</div>
		<a href="<?php echo e(route("frontend.raffle.index")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/raffle.svg")); ?>" alt="">
			<?php echo e(__("Raffle")); ?>

		</a>
		<a href="<?php echo e(route("frontend.leaderboard")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/leaderboard.svg")); ?>" alt="">
			<?php echo e(__("Leaderboard")); ?>

		</a>
	</div>
	<div class="border"></div>
	<div class="menu">
		<a href="<?php echo e(route('frontend.index')); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/home.svg")); ?>" alt="">
			<?php echo e(__("HOME PAGE")); ?>

		</a>
		<a href="" class="light">
			<img src="<?php echo e(asset("assets/img/icons/profile.svg")); ?>" alt="">
			<?php echo e(__("PROFILE")); ?>

		</a>
		<a href="<?php echo e(route("frontend.account.show")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/wallet.svg")); ?>" alt="">
			<?php echo e(__("ACCOUNT")); ?>

		</a>
		<a href="<?php echo e(route('password.request')); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/security.svg")); ?>" alt="">
			<?php echo e(__("CHANGE PASSWORD")); ?>

		</a>
	</div>
	<div class="border"></div>
	<div class="menu">
		<a href="<?php echo e(route('frontend.payments.deposit')); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/deposit.svg")); ?>" alt="">
			<?php echo e(__("DEPOSITS")); ?>

		</a>
		<a href="" class="light">
			<img src="<?php echo e(asset("assets/img/icons/withdraw.svg")); ?>" alt="">
			<?php echo e(__("WITHDRAW")); ?>

		</a>
		<a href="<?php echo e(route("frontend.bonuses.index")); ?>" class="light">
			<img src="<?php echo e(asset("assets/img/icons/bonus.svg")); ?>" alt="">
			<?php echo e(__("BONUSES")); ?>

		</a>
	</div>
	<div class="border"></div>
	<div class="menu">
		<a href="" class="light">
			<img src="<?php echo e(asset("assets/img/icons/security.svg")); ?>" alt="">
			<?php echo e(__("SECURITY")); ?>

		</a>
	</div>
	<div class="menu" style="background: #1E1E1E">
		<form method="post" id='logout' action="<?php echo e(route('logout')); ?>">
			<?php echo csrf_field(); ?>
			<a class="light" style="cursor: pointer" onclick="document.getElementById('logout').submit()">
				<img src="<?php echo e(asset("assets/img/icons/logout.svg")); ?>" alt="">
				<?php echo e(__("LOG OUT")); ?>

			</a>
		</form>
	</div>
	<?php endif; ?>
	<?php if(auth()->guard()->guest()): ?>
	<a class="account" href="<?php echo e(route('login')); ?>"><?php echo e(__("Account")); ?></a>
	<?php endif; ?>

</div>
</div>