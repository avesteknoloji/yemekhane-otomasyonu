

<?php $__env->startSection('title'); ?>Yemek Düzenle Sil
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
			<h3>Yemekler</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Yönetim</li>
		<li class="breadcrumb-item active">Yemekler</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="col-sm-12 col-xl-6">
		<div class="row">
		
					
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Yemek Ekleme ve Güncelleme Sayfası</h5>		
									
					</div>
					<div class="card-body">
						<form class="theme-form" method="POST" action="<?php echo e(route('yemekKaydet',$entry->id)); ?>" enctype="multipart/form-data">
							<?php echo e(csrf_field()); ?>

							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Slug</label>
								<div class="col-sm-8">
									<input class="form-control" id="slug" name="slug" type="text" placeholder="Slug" value="<?php echo e(request('id')!=null ? $entry->slug:''); ?>"/>
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Yemek Adı</label>
								<div class="col-sm-8">
									<input class="form-control" id="yemekAd" name="yemek_ad" type="text" placeholder="Yemek Adı" value="<?php echo e(request('id')!=null ? $entry->yemek_ad:''); ?>"/>
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Fiyat</label>
								<div class="col-sm-8">
									<input class="form-control" id="fiyat" name="yemek_fiyat" type="text" placeholder="Yemek Fiyatı" value="<?php echo e(request('id')!=null ? $entry->yemek_fiyat:''); ?>"/>
								</div>
							</div>	
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Stok</label>
								<div class="col-sm-8">
									<input class="form-control" id="stok" name="stok" type="text" placeholder="Stok" value="<?php echo e(request('id')!=null ? $entry->stok:''); ?>"/>
								</div>
							</div>				
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Kategori</label>
								<div class="col-sm-8">
									<select class="form-control btn-square" id="yemekKategori" name="yemek_kategori_id">
									
										<?php $__currentLoopData = $yemek_kategorileri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option <?php echo e($item->id==$entry->yemek_kategori_id ? 'selected':''); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->yemek_kategori_ad ?? null); ?></option>    
              							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																													
									</select>			
								</div>	
								<div class="mb-3 row">
									<label class="col-sm-4 col-form-label">Resim</label>
									<div class="col-sm-8">
										<input class="form-control" id="yemek_resmi" name="yemek_resmi" type="file"  value=""/>
									</div>
									<?php if($entry->yemek_resmi!=null): ?>
									<img src="\uploads\images\yemek_resimleri\<?php echo e($entry->yemek_resmi); ?>" style="height:70%; width:70%;  margin-right: 20px;" class="thumbnail pull-left">
										
									<?php endif; ?>
								</div>				
							</div>
							
							
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" type="submit"><?php echo e(request('id')==null?'Kaydet':'Güncelle'); ?></button>
								<a href="<?php echo e(route('yemekListesi')); ?>" class="btn btn-secondary" >İptal</a>
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
		</div>
</div>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/yonetim/yemek-form.blade.php ENDPATH**/ ?>