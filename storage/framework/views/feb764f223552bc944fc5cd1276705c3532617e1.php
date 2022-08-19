

<?php $__env->startSection('title'); ?>Yemekler
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Yemekler</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Yemekler</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid product-wrapper">
	    <div class="product-grid">
	        <div class="feature-products">
	            <div class="row m-b-10">
	                <div class="col-md-3 col-sm-2 products-total">
	                    <div class="square-product-setting d-inline-block">
	                        <a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a>
	                    </div>
	                    <div class="square-product-setting d-inline-block">
	                        <a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a>
	                    </div>
	                    <div class="d-none-productlist filter-toggle">
	                        <h6 class="mb-0">
	                            Filtrele<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span>
	                        </h6>
	                    </div>
						<!-- yemeklerin gösteriş şeklini değiştiren kısım -->
	                    <div class="grid-options d-inline-block">
	                        <ul>
	                            <li>
	                                <a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a>
	                            </li>
	                            <li>
	                                <a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title="">
	                                    <span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span>
	                                </a>
	                            </li>
	                            <li>
	                                <a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title="">
	                                    <span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span>
	                                    <span class="line-grid line-grid-9 bg-primary"></span>
	                                </a>
	                            </li>
	                            <li>
	                                <a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title="">
	                                    <span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span>
	                                    <span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <div class="col-md-9 col-sm-10 text-end">
	                    <span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
	                    <div class="select2-drpdwn-product select-options d-inline-block">
	                        <select class="form-control btn-square" name="select">
	                            <option value="opt1">Featured</option>
	                            <option value="opt2">Lowest Prices</option>
	                            <option value="opt3">Highest Prices</option>
	                        </select>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-3">
						<div class="card">
							<div class="card-header">
								<select id="filter_product_id" name="yemekKategoriId" class="form-select">
								
									<?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option <?php echo e($item->id==request('yemekKategoriId') ? 'selected':''); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->yemek_kategori_ad); ?></option>    
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
	                </div>
					<div class="col-md-3">
						<div class="card">
							<div class="card-header">
								<div class="input-group">
									<input class="datepicker-here form-control digits" type="text" placeholder="Tarih seçin" data-language="en" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								
									<form action="" method="POST">
										<div class="form-group m-0"><input class="form-control" name="aranan" type="search" placeholder="Hızlı Ara.."  value="<?php echo e(old('aranan')); ?>" data-original-title="" title="" /><i class="fa fa-search"></i></div>
										<?php echo e(csrf_field()); ?>

									</form>
								
							</div>
						</div>
					</div>
	                
	            </div>
	        </div>
	        <div class="product-wrapper-grid">
				
	            <div class="row">
					<!-- Yemekleri burada listelemeye başlıyor -->
					<?php if(count($yemekler)==0): ?>
						<div class="col-xl-3 col-sm-6 xl-4">
							<h1>Aradığınız sonuç bulunamadı</h1>
						</div>
					<?php endif; ?>
					
					<?php $__currentLoopData = $yemekler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<div class="col-xl-3 col-sm-6 xl-4">
	                    <div class="card">
	                        <div class="product-box">
	                            <div class="product-img">
	                                <img class="img-fluid" src="<?php echo e(asset('uploads/images/yemek_resimleri/'.$item->yemek_resmi)); ?>" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
												
												
												
												<a href="#" id="<?php echo e($item->id); ?>" class="cartLink"><i class="icon-shopping-cart"></i></a>
												
	                                        </li>
	                                        <li>
	                                            <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                          
	                            <div class="product-details">
	                                <a href="product-page"> <h4><?php echo e($item->yemek_ad); ?></h4></a>
	                                <p><?php echo e($item->slug); ?></p>
	                                <div class="product-price">
	                                    <?php echo e($item->yemek_fiyat); ?>

	                                    <del><?php echo e($item->yemek_fiyat); ?></del>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	               
	               
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/range-slider/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/range-slider/rangeslider-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-tab.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.tr.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
	</script>
	<script>
		$(document).ready(function(){
			$('.cartLink').click(function(){
				id=this.id;
				$.ajax({
					url:"<?php echo e(route('sepeteEkle')); ?>",
					headers:{'X-CSRF-TOKEN':'<?php echo e(csrf_token()); ?>'},
					method:"GET",
					data:{yemekID:id},
					success:function(result){
						alert("Sepete Eklendi")
					}
				});

			});
			
		});
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/ecommerce/yemek.blade.php ENDPATH**/ ?>