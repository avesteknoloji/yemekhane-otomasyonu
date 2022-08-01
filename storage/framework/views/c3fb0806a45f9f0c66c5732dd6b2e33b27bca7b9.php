<?php $__env->startSection('title'); ?>Default Forms
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Default Forms</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Layout</li>
		<li class="breadcrumb-item active">Default Forms</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-6">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header pb-0">
								<h5>Kullanıcı Ekleme Formu</h5>
							</div>
							<div class="card-body">
								<form class="theme-form mega-form">
									<h6>Kullanıcı Bilgileri</h6>
									<div class="mb-3">
										<label class="col-form-label">Kullanıcı Adı</label>
										<input class="form-control" type="text" placeholder="Kullanıcı Adı Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Eposta Adresi</label>
										<input class="form-control" type="email" placeholder="Eposta Adresi Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre</label>
										<input class="form-control" type="email" placeholder="Kullanıcı şifresini giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre Tekrar</label>
										<input class="form-control" type="email" placeholder="Kullanıcı şifresini tekrar giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">İletişim No:</label>
										<input class="form-control" type="Number" placeholder="İletişim Numarası Giriniz..." />
									</div>
								</form>
								
							</div>
							<div class="card-footer">
								<button class="btn btn-primary">Submit</button>
								<button class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\yemekhane_otomasyon\yemekhane-otomasyonu\resources\views/admin/forms/user-add.blade.php ENDPATH**/ ?>