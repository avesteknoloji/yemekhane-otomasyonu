

<?php $__env->startSection('title'); ?>Kategori Düzenle Sil
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
			<h3>Kategoriler</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Kategori İşlemleri</li>
		<li class="breadcrumb-item active">Kategoriler</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="col-sm-12 col-xl-6">
		<div class="row">
		
					
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Kategori Ekleme ve Güncelleme Sayfası</h5>		
									
					</div>
					<div class="card-body">
						<form class="theme-form" method="POST" action="<?php echo e(route('kaydet', @$entry->id)); ?>">
							<?php echo e(csrf_field()); ?>

							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Kategori Adı</label>
								<div class="col-sm-8">
									<input class="form-control" id="yemekKategoriAd" name="yemek_kategori_ad" type="text" placeholder="Kategori Adı" value="<?php echo e(request('id')!=null ? $entry->yemek_kategori_ad:''); ?>"/>
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Kategori Sırası</label>
								<div class="col-sm-8">
									<input class="form-control" id="yemekKategoriSira" name="yemek_kategori_sira" type="text" placeholder="Kategori Sırası" value="<?php echo e(request('id')!=null ? $entry->yemek_kategori_sira:''); ?>"/>
								</div>
							</div>					
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Ebeveyn Kategori</label>
								<div class="col-sm-8">
									<select class="form-control btn-square" id="yemekKategoriUst" name="yemek_kategori_ust">
									
										<option value="0">Ana Kategori</option>
										<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option <?php echo e($item->id==$ust_kategori->id ? 'selected':''); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->yemek_kategori_ad); ?></option>    
              							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																													
									</select>			
								</div>					
							</div>
							
							
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" type="submit"><?php echo e(request('id')==null?'Kaydet':'Güncelle'); ?></button>
								<a href="<?php echo e(route('kategori')); ?>" class="btn btn-secondary" >İptal</a>
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
		</div>
</div>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/yonetim/form.blade.php ENDPATH**/ ?>