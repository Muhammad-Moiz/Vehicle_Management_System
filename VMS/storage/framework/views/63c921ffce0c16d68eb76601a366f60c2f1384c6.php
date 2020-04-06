<?php $__env->startSection('content'); ?>
<form id="sign_in" role="form" method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="msg">Register</div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">person</i>
        </span>
        <div class="form-line <?php echo e($errors->has('name') ? ' error' : ''); ?>">
            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Username" required autofocus>
        </div>
        <?php if($errors->has('email')): ?>
            <label id="name-error" class="error" for="name"><?php echo e($errors->first('name')); ?></label>
        <?php endif; ?>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
        <i class="material-icons">email</i>
        </span>
        <div class="form-line <?php echo e($errors->has('email') ? ' error' : ''); ?>">
            <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address" required autofocus>
        </div>
        <?php if($errors->has('email')): ?>
            <label id="email-error" class="error" for="email"><?php echo e($errors->first('email')); ?></label>
        <?php endif; ?>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
        <i class="material-icons">lock</i>
        </span>
        <div class="form-line <?php echo e($errors->has('password') ? ' error' : ''); ?>">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <?php if($errors->has('password')): ?>
            <label id="password-error" class="error" for="name"><?php echo e($errors->first('password')); ?></label>
        <?php endif; ?>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
        <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
        </div>
    </div>
    <div class="form-group">
        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Register</button>
        </div>
    </div>
    <div class="m-t-25 m-b--5 align-center">
        <a href="<?php echo e(route('login')); ?>">You already have a membership?</a>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>