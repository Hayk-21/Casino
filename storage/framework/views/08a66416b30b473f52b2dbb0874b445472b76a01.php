<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/account.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="content" style="align-items: unset;" id="desktop_table">
	<h1 class="account_heading">Account</h1>
	<table class="account_table_head">
		<thead>
			<tr>
				<th colspan="4">
					<div style="display: flex; justify-content: space-around; align-items: center;">
						<span style="width: 25%;">Balance</span>
						<span style="width: 25%;">Created</span>
						<span style="width: 25%;">Updated</span>
						<span style="width: 25%;">Actions</span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr class="tr">
				<td>
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<span style="color: #6BA939; margin: 0 0 0 6vw;"><?php echo e($account->_balance); ?></span><img
							src="<?php echo e(asset("assets/img/account/green_oval (1).png")); ?>" alt="" style="margin: 0 0.5vw 0 3vw">
					</div>
				</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<span style="margin: 0 0 0 6vw;"><?php echo e($account->created_at->diffForHumans()); ?></span>
						<img src="<?php echo e(asset("assets/img/account/green_oval (2).png")); ?>" alt="" style="margin: 0 0.5vw 0 2vw">
					</div>
				</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<span style="margin: 0 0 0 6vw;"><?php echo e($account->updated_at->diffForHumans()); ?></span><img
							src="<?php echo e(asset("assets/img/account/green_oval (2).png")); ?>" alt="" style="margin: 0 0.5vw 0 2vw">
					</div>
				</td>
				<td>
					<a href="<?php echo e(url("page/payments")); ?>"><button type="button" class="depostit_button">Deposit</button></a>
					<a href=""><button type="button" class="withdraw_button">Withdraw</button></a>
				</td>

			</tr>
		</tbody>
	</table>
	<?php if(!$transactions->isEmpty()): ?>
	<div>
		<h1 class="transactions">Transactions</h1>
		<table class="account_table_data">
			<thead>
				<tr>
					<th colspan="5">
						<div style="display: flex; justify-content: space-around; align-items: center;">
							<span style="width: 10%;">ID</span>
							<span style="width: 22.5%;">Type</span>
							<span style="width: 22.5%;">Amount</span>
							<span style="width: 22.5%;">Running balance</span>
							<span style="width: 22.5%;">Created</span>
						</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($transaction->transactionable->id); ?></td>
					<td><?php echo e($transaction->transactionable->title); ?></td>
					<td class="amount_negative_number_check"><?php echo e($transaction->_amount); ?></td>
					<td><span><?php echo e($transaction->_balance); ?></span>
						<img src="<?php echo e(asset("assets/img/account/Red-arrow.png")); ?>" alt="" style="margin: 5px 14px 0 32px">
					</td>
					<td>
						<div style="display: flex; justify-content: space-between; align-items: cneter;">
							<span style="margin: 0 0 0 4vw;"><?php echo e($transaction->created_at->diffForHumans()); ?></span>
							<img src="<?php echo e(asset("assets/img/raffle/green_oval (2).png")); ?>" alt="">
						</div>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	<div class="container_pagination">
		<ul class="pagination">
			<li><a href="#">
					<</li> <li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">></a></li>
		</ul>
	</div>
	<?php endif; ?>
</div>



<!-- table for mobile  -->
<div class="content" style="align-items: unset;" id="mobile_table">
	<h1 class="account_heading">Account</h1>
	<div class="cube_for_mobile">
		<div class="cube_first_side"
			style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>Balance</div>
				<div>Created</div>
				<div>Updated</div>
				<div>Actions</div>
			</div>
			<div class="contents" style="display: flex; justify-content: end; flex-direction: column; text-align: right;">
				<div style="display: flex; justify-content: end; text-align: end;">
					<span style="color: #6BA939; margin: 0 0 0 4.5vw;">958,1255.76</span><img
						src="assets/img/account/green_oval (1).png" alt="" style="margin: 0 0 0 2vw">
				</div>
				<div style="display: flex; justify-content: end; text-align: end; ">
					<span style=" margin: 0 0 0 1vw;">3 weeks ago </span>
					<img src="assets/img/account/green_oval (2).png" alt="" style="margin: 0 0 0 2vw">
				</div>
				<div style="display: flex; justify-content: right; text-align: end;">
					<span style=" margin: 0 0 0 5.5vw;">2 days ago</span><img src="assets/img/account/green_oval (2).png" alt=""
						style="margin: 0 0 0 2vw">
				</div>
				<div style="width: 10px; height: 35px;"></div>
			</div>
		</div>
		<div class="cube_second_side"
			style="display: flex; justify-content: center; align-items: center; flex-direction: row;">
			<div>
				<a href=""><button type="button" class="depostit_button">Deposit</button></a>
				<a href=""><button type="button" class="withdraw_button">Withdraw</button></a>
			</div>
		</div>
	</div>
	<h5 style="font-size: 14px; color: #959595; margin: 2px auto;">Total net win</h5>

	<!-- table mobile -->
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>ID</div>
				<div>Type</div>
				<div>Amount</div>
				<div>Running balance</div>
				<div>Created</div>
			</div>
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div style="color: #6BA939;">1786</div>
				<div>Bacarat</div>
				<div class="amount_negative_number_check">-1.00</div>
				<div><span>1152.36</span>
					<img src="assets/img/account/Red-arrow.png" alt="" style="margin: 5px 0 0 2vw">
				</div>
				<div style="display: flex; justify-content: right;"><span>2 days ago</span>
					<img src="assets/img/account/green_oval2.png" alt="" style="margin: 0 0 0 2vw">
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>