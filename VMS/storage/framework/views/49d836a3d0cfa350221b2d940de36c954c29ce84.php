<?php $__env->startSection('title'); ?>
	Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                  
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                      
                        </div>
                        <div class="content">
                            <div class="text">Number Of Customer</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">

                        </div>
                        <div class="content">
                            <div class="text">Number Of Drivers </div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">

                        </div>
                        <div class="content">
                            <div class="text">Prophit Per Day</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                      
                        </div>
                        <div class="content">
                            <div class="text">Prophit Per Mounth</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
        <?php echo e(Html::script('bsbmd/plugins/jquery-countto/jquery.countTo.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/raphael/raphael.min.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/morrisjs/morris.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/chartjs/Chart.bundle.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/flot-charts/jquery.flot.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/flot-charts/jquery.flot.resize.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/flot-charts/jquery.flot.pie.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/flot-charts/jquery.flot.categories.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/flot-charts/jquery.flot.time.js')); ?>

        <?php echo e(Html::script('bsbmd/plugins/jquery-sparkline/jquery.sparkline.js')); ?>

        <?php echo e(Html::script('bsbmd/js/pages/index.js')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>