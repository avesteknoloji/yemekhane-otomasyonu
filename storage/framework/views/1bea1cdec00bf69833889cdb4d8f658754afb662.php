

<?php $__env->startSection('title'); ?>
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
    <div class="row">
        <div class="col-sm-6">
            <div class="product-search">
                <form action="" method="POST">
                    <div class="form-group m-0"><input class="form-control" name="aranan" type="search" placeholder="Hızlı Ara.."  value="<?php echo e(old('aranan')); ?>" data-original-title="" title="" /><i class="fa fa-search"></i></div>
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </div>
        <div class="col-sm-6">  
            <a href="<?php echo e(route('yeni')); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top">Yeni Ekle </a>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Yemek Kategorileri</h5>
               
            </div>
            <div class="mb-3 row">
                <?php if($message=session('message')): ?>
                    <div class="alert alert-success"><?php echo e($message); ?></div>
                <?php endif; ?>
            </div>
            <div class="table-responsive">
                

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Sıra</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Adı</th>
                                <th scope="col">Fiyatı</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Ebeveyn Katagori</th>
                                <th scope="col">Düzenle</th>
                                <th scope="col">Sil</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <div style="display: none"><?php echo e($sira=1); ?></div>
                            <?php $__currentLoopData = $yemekler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($sira++); ?></th>
                                <td><?php echo e($item->slug); ?></td>
                                <td><?php echo e($item->yemek_ad); ?></td>
                                <td><?php echo e($item->yemek_fiyat); ?></td>
                                <td><?php echo e($item->stok); ?></td>
                                <td><?php echo e($item->detay->yemek_kategori_ad); ?></td>
                                <td>
                                    <a href="<?php echo e(route('duzenle', $item->id)); ?>" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    
                                </td>
                                <td>
                                   
                                    <form action="<?php echo e(route('sil', $item->id)); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?> 
                                    <button type="submit" class="btn btn-sm btn-danger"  onclick="return confirm('Emin misiniz?')">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </form>
                                </td>
                            </tr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/yonetim/yemek-listele.blade.php ENDPATH**/ ?>