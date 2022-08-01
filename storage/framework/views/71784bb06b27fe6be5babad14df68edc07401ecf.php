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
								<h5>Kullanıcı Grubu Tanımlama</h5>
							</div>
							<div class="card-body">
								<form class="theme-form" action="islem.php" method="POST">
									<div class="mb-3">
										<label class="col-form-label pt-0" for="kullaniciGrupKodu">Grup Kodu*</label>
										<input class="form-control" id="kullaniciGrupKodu" type="text" required maxlength="6" name="kullaniciGrupKodu" aria-describedby="kullaniciGrupKodu" placeholder="Grup Kodunu Giriniz" />
										<small class="form-text text-muted" id="emailHelp">Bu alana daha önceden belirlenmiş kurala göre grup kodunu oluşturup girebilirsiniz.</small>
									</div>
									<div class="mb-3">
										<label class="col-form-label pt-0" for="kullaniciGrupAdi">Grup Adı*</label>
										<input class="form-control" id="kullaniciGrupAdi" maxlength="15"  required type="text" name="kullaniciGrupAdi" placeholder="Grup Adını Giriniz" />
									</div>
							
								
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" type="submit">Kaydet</button>
								<button class="btn btn-secondary">İptal Et</button>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\yemekhane_otomasyon\yemekhane-otomasyonu\resources\views/admin/forms/user-group-add.blade.php ENDPATH**/ ?>