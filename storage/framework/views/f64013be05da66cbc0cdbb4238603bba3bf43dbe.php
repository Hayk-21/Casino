<?php $__env->startPush("styles"); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="content" style="align-items: unset;" id="reg_form_and_social">
    <div class="for_border_right">
        <h1><?php echo e(__('Reset Password')); ?></h1>
        <form action="<?php echo e(route('password.email')); ?>" method="post" class="registration" style="border: 0;margin:0;">
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

            <button type="submit"><?php echo e(__('Send Password Reset Link')); ?></button>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>