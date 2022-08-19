

<?php $__env->startSection('title'); ?>Test Sayfası
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Test Sayfası</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Test</li>
	<?php echo $__env->renderComponent(); ?>
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<h5>Date Picker</h5>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="date-picker">
							<form class="theme-form">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label text-end">Default</label>
									<div class="col-xl-5 col-sm-9">
										<div class="input-group">
											<input class="datepicker-here form-control digits" type="text" data-language="en" />
										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>
   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/ecommerce/test.blade.php ENDPATH**/ ?>