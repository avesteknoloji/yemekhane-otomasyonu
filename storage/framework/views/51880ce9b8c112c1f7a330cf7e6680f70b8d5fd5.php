

<?php $__env->startSection('title'); ?>Test Sayfası
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Test Sayfası</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Test</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="card-body dropdown-basic">
        <div class="dropdown">
            <div class="btn-group mb-0">
                <button class="dropbtn btn-primary" type="button">
                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                </button>
                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/ecommerce/test.blade.php ENDPATH**/ ?>