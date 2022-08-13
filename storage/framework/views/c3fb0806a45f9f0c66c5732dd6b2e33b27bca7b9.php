

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
								<?php if($message=session('message')): ?>
							<div class="alert alert-success"><?php echo e($message); ?></div>
							<?php endif; ?>
								<form class="theme-form mega-form" action="<?php echo e(route('user-registration')); ?>" method="POST">
									<?php echo e(csrf_field()); ?>

									<h6>Kullanıcı Bilgileri</h6>
									<div class="mb-3">
										<label class="col-form-label">Kullanıcı Adı</label>
										<input class="form-control" type="text" name="userName" placeholder="Kullanıcı Adı Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Eposta Adresi</label>
										<input class="form-control" type="email" name="userEmail" placeholder="Eposta Adresi Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre</label>
										<input class="form-control" type="password" name="userPass" placeholder="Kullanıcı şifresini giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre Tekrar</label>
										<input class="form-control" type="password" name="userPass2" placeholder="Kullanıcı şifresini tekrar giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Kullanıcı Grubu:</label>
										<select class="form-control" name="userGroupId" id="userGroupId">
											<?php $__currentLoopData = $userGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_role_id=>$user_role_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($user_role_id); ?>"><?php echo e($user_role_name); ?>

											</option>	
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
									</div>
								
								
							</div>
							<div class="card-footer">
								<button class="btn btn-primary">Kaydet</button>
								<button class="btn btn-secondary">İptal</button>
							</div>
						</form>
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