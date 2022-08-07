

<?php $__env->startSection('title'); ?>Kategori Listeleme
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
                            <th scope="col">ID</th>
                            <th scope="col">Kategoriler</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($item->id); ?></th>
                            <td><?php echo e($item->yemek_kategori_ad); ?></td>
                            <td>
                                <a href="<?php echo e(route('duzenle', $item->id)); ?>" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                    <span class="fa fa-pencil"></span>
                                </a>
                                <a href="<?php echo e(route('sil', $item->id)); ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </td>
                            
                        </tr>    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/kategoriler/kategori-listele.blade.php ENDPATH**/ ?>