<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Vehicle Management System</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <?php $__env->startSection('css'); ?>
        <?php echo e(Html::style('bsbmd/plugins/bootstrap/css/bootstrap.css')); ?>

        <?php echo e(Html::style('bsbmd/plugins/node-waves/waves.css')); ?>

        <?php echo e(Html::style('bsbmd/plugins/animate-css/animate.css')); ?>

        <?php echo e(Html::style('bsbmd/plugins/morrisjs/morris.css')); ?>

        <?php echo e(Html::style('bsbmd/css/style.css')); ?>

        <?php echo e(Html::style('bsbmd/css/themes/all-themes.css')); ?>


         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <?php echo $__env->yieldSection(); ?>

    <?php echo $__env->yieldContent('extra-css'); ?>
</head>

<body class="theme-red">
    <?php echo $__env->make('layouts.partials.loader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="overlay"></div>
    <?php echo $__env->make('layouts.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layouts.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <section class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </section>

    <?php $__env->startSection('script'); ?>
        <?php echo e(Html::script('bsbmd/plugins/jquery/jquery.min.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/bootstrap/js/bootstrap.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/bootstrap-select/js/bootstrap-select.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/node-waves/waves.js')); ?>


    <?php echo $__env->yieldSection(); ?>    
    <?php echo $__env->yieldContent('extra-script'); ?>
    <?php $__env->startSection('script-bottom'); ?>
        <?php echo e(Html::script('bsbmd/js/admin.js')); ?>

        <?php echo e(Html::script('bsbmd/js/demo.js')); ?>

    <?php echo $__env->yieldSection(); ?>
</body>

</html>