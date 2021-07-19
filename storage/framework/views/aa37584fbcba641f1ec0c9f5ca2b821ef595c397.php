<?php $__env->startSection('content'); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset("css/leaderboard.css")); ?>">
<script src="<?php echo e(asset('js/dataTables.js')); ?>"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>
<div class="content">
	<table id="leaderboard">
		<caption style="text-align: left;">
			<?php echo e(__("Leaderboard")); ?>

			<div>
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
					<button><?php echo e($game); ?> <img src="assets/img/icons/dropdown.svg" alt=""></button>
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
					<button><?php echo e($period); ?><img src="assets/img/icons/dropdown.svg" alt=""></button>
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
				<th>Rank</th>
				<th style="text-align: left">Name</th>
				<th>Games Played</th>
				<th>Max win</th>
				<th class="esim">Total win <img src="assets/img/icons/bottom.svg" alt=""></th>
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>