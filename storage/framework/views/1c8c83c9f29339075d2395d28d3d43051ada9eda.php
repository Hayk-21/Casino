<?php $__env->startSection('title'); ?>
<?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="content" style="align-items: unset;" id="reg_form_and_social">
	<div class="for_border_right">
		<h1>Welcome back!</h1>
		<form action="<?php echo e(route('login')); ?>" method="post" class="registration">
			<?php echo csrf_field(); ?>
			<label for="email">E-mail Address
				<input type="email" id="email" name="email" placeholder="example@email.com" required>
				<?php if($errors->has('email')): ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($errors->first('email')); ?></strong>
				</span>
				<?php endif; ?>
			</label>
			<label for="pass">Password
				<input type="password" id="pass" name="password" required>
				<?php if($errors->has('password')): ?>
				<span class="invalid-feedback" role="alert">
					<strong><?php echo e($errors->first('password')); ?></strong>
				</span>
				<?php endif; ?>
			</label>

			<div style="margin-bottom: 30px;" class="check_captcha">
				<div class="g-recaptcha" data-theme="dark" data-sitekey="6Lf5fYYaAAAAAL80tVXTsaApq-1ENXWGmXBlx5MK">
				</div>
			</div>

			<button type="submit">Login</button>
			<?php if(Route::has('password.request')): ?>
			<div class="password_settings"><a href="<?php echo e(route('password.request')); ?>">Forgot your password?</a></div>
			<?php endif; ?>

			<div class="password_settings"><a href="<?php echo e(route('register')); ?>">Don't have an account ? Sign
					up!</a></div>
		</form>
	</div>
	<div class="empty_div_border"></div>
	<div class="social_network">
		<a href="https:\\facebook.com"><img src="assets/img/registration/fb.png" alt=""> Sign up using Facebook</a>
		<a href="https:\\google.com"><img src="assets/img/registration/google.png" alt=""> Sign up using Google</a>
		<a href="https:\\yahoo.com"><img src="assets/img/registration/yahoo.png" alt=""> Sign up using
			Yahoo!</a>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php if(config('settings.recaptcha.public_key')): ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>