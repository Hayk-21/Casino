<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/registration.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


<div class="content" style="align-items: unset;" id="reg_form_and_social">
	<div>
		<h1>Sign Up. It's free!</h1>
		<form action="<?php echo e(route('register')); ?>" method="post" class="registration" autocomplete="off">
			<?php echo csrf_field(); ?>
			<label for="name">Name
				<input type="text" name="name" id="name" placeholder="Michael" required>
				<?php if($errors->has('name')): ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($errors->first('name')); ?></strong>
				</span>
				<?php endif; ?>
			</label>
			<label for="email">E-mail Address
				<input type="email" name="email" id="email" placeholder="example@email.com" required>
				<?php if($errors->has('email')): ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($errors->first('email')); ?></strong>
				</span>
				<?php endif; ?>
			</label>
			<label for="pass">Password
				<input type="password" name="password" id="pass" required>
				<?php if($errors->has('password')): ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($errors->first('password')); ?></strong>
				</span>
				<?php endif; ?>
			</label>
			<label for="confirmpass">Confirm Password
				<input type="password" name="password_confirmation" id="confirmpass" required>
			</label>
			<div style="margin-bottom: 30px;" class="check_webmaster">
				<input type="checkbox" id="todo" name="is_webmaster" value="1" value="todo">
				<label for="todo" class="webmaster">Webmaster</label>
			</div>
			<button type="submit">
				Create account
			</button>
		</form>
	</div>
	<div class="empty_div_border"></div>
	<div class="social_network">
		<a href="https:\\facebook.com"><img src="assets/img/registration/Group_8.png" alt="" class="fb"> Sign up using Facebook</a>
		<a href="https:\\google.com"><img src="assets/img/registration/Group_6795.png" alt=""> Sign up using Google</a>
		<a href="https:\\yahoo.com"><img src="assets/img/registration/yahoo_275201722848341.png" alt=""> Sign up using
			Yahoo!</a>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>