<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/bonuses.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="content" style="align-items: unset;">
	<h1 class="bonuses_heading">Bonuses</h1>
	<div class="container_bonuses_block">
		<div class="left_bonus_block">
			<h3 class="referral_program">Referral program</h3>
			<p class="referral_frineds">Refer your friends to our casino and get bonus credits.
				Please copy the link below and share with your friends</p>
			<div style="display: flex; justify-content: center; align-items: center;">
				<input type="text" value="http://212.129.24.231:40812/" class="input_site_link" id="myInput">
				<a href="" onclick="myFunction()"><img src="<?php echo e(asset("assets/img/bonuses/Group 11 Copy.png")); ?>" alt=""
						class="copy_button"></a>
			</div>
			<div class="social_block">
				<a href="mailto:name@mail.ru"><img src="<?php echo e(asset("assets/img/bonuses/Mail.png")); ?>" alt=""></a>
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
				You referred <?php echo e($referred_users_count); ?> users and
				earned <?php echo e($referral_total_bonus); ?> credits so far
			</div>
		</div>
		<div class="right_bonus_block">
			<div>
				<img src="assets/img/bonuses/right_bonus.png" alt="">
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>