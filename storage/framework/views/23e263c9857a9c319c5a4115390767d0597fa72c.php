<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/topwins.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="content" style="align-items: unset;" id="desktop_table">
	<h1 class="account_heading">Top Wins</h1>
	<?php if(!$games): ?>
	<h1 class="account_heading">No wins</h1>

	<?php elseif($games): ?>
	<table class="top_wins_table_data">
		<thead>
			<tr>
				<th colspan="6">
					<div style="display: flex; justify-content: space-around; align-items: center;">
						<span style="width: 10%;">Name</span>
						<span style="width: 22%;">Game</span>
						<span style="width: 12%;">Bet</span>
						<span style="width: 12%;">
							Win
							<img src="assets/img/topwins/Sort_arrow.png" alt="" style="margin: 0 12px ">
						</span>
						<span style="width: 14%;">Result</span>
						<span style="width: 27%;">Played</span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($game->account->user->name); ?></td>
				<td><?php echo e($game->title); ?></td>
				<td><?php echo e($game->_bet); ?></td>
				<td><?php echo e($game->_win); ?></td>
				<td><?php echo e($game->gameable->result); ?></td>
				<td>
					<span style="margin: 0 0 0 14px"><?php echo e($game->updated_at->diffForHumans()); ?></span>
					<img src="assets/img/topwins/green_oval (2).png" alt="" style="margin: 0 0 0 5vw">
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<?php endif; ?>
</div>


<!-- table for mobile  -->
<!-- table mobile -->
<div class="content" style="align-items: unset;" id="mobile_table">
	<h1 class="account_heading">Top wins</h1>

	<!-- table mobile -->
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>Name</div>
				<div>Game</div>
				<div>Bet</div>
				<div>Win</div>
				<div>Result</div>
				<div>Played</div>
			</div>
			<?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div style="color: #FFD400;"><?php echo e($game->account->user->name); ?></div>
				<div><?php echo e($game->title); ?></div>
				<div><?php echo e($game->_bet); ?></div>
				<div><?php echo e($game->_win); ?></div>
				<div><?php echo e($game->gameable->result); ?></div>
				<div style="display: flex; justify-content: right;"><span><?php echo e($game->updated_at->diffForHumans()); ?></span>
					<img src="assets/img/account/green_oval (2).png" alt="" style="margin: 0 0 0 2vw">
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>