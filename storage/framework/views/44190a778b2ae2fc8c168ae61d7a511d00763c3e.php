

<?php $__env->startSection('title'); ?>Sepet
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Sepet</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Siparişler</li>
		<li class="breadcrumb-item active">Sepet</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Sipariş Oluştur</h5>
	                </div>
	                <div class="card-body">
	                    <div class="row">
	                        <div class="order-history table-responsive wishlist">
								<?php if(count(Cart::content())>0): ?>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Resim</th>
												<th>Yemek Adı</th>
												<th>Ücreti</th>
												<th>Miktarı</th>
												<th></th>
												<th>Toplam</th>
											</tr>
										</thead>
										<tbody>
											<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><img class="img-fluid img-40" src="<?php echo e(asset('uploads/images/yemek_resimleri/'.$item->options->yemek_resmi)); ?>" alt="" /></td>
												<td>
													<div class="product-name">
														<a href="#"> <h6><?php echo e($item->name); ?></h6></a>
													</div>
												</td>
												<td><?php echo e($item->price); ?>  ₺</td>
												<td>
													<fieldset class="qty-box">
														<div class="input-group" data-id="<?php echo e($item->rowId); ?>">
															<input class="touchspin text-center" id="rowname<?php echo e($item->rowId); ?>" type="text" value="<?php echo e($item->qty); ?>" />
														</div>
													</fieldset>
												</td>
												<td>
													<form action="<?php echo e(route('sepettenKaldir', $item->rowId)); ?>" method="POST">
														<?php echo e(csrf_field()); ?>

														<?php echo e(method_field('DELETE')); ?> 
														<button type="submit" class="btn btn-sm btn-danger">
                                        				<span class="fa fa-trash"></span>
                                        				</button>
													</form>
													
												</td>
												<td><?php echo e($item->subtotal); ?>  ₺</td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td colspan="4">
													
												</td>
												<td class="total-amount">
													<h6 class="m-0 text-end"><span class="f-w-600">Toplam:</span></h6>
												</td>
												<td><span><?php echo e(Cart::subtotal()); ?>  ₺</span></td>
											</tr>
											<tr>
												
												<td class="text-end" colspan="4">
													<form action="<?php echo e(route('sepetGuncelle')); ?>" method="POST">
														<?php echo e(csrf_field()); ?>	
														<button class="btn btn-secondary cart-btn-transform">Siparişi Güncelle</button>
													</form>
												</td>
												<td class="text-end"><a class="btn btn-secondary cart-btn-transform" href="#">Siparişe Devam Et</a></td>
												<td><a class="btn btn-success cart-btn-transform" href="#">Ödemeye Geç</a></td>
											</tr>
										</tbody>
									</table>
								<?php else: ?>
								
								<div class="alert alert-success">Sepetinizde Ürün Yok</div>
							
								<?php endif; ?>
	                            
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
	</script>
	<script>
		$(document).ready(function(){
			$('.input-group').click(function(){
				id = $(this).attr('data-id');
				qty = $('#rowname'+id).val();
				$.ajax({
					url:"<?php echo e(route('sepetGuncelle')); ?>",
					headers:{'X-CSRF-TOKEN':'<?php echo e(csrf_token()); ?>'},
					method:"GET",
					data:{yemekQty:qty, rowId:id},
					success:function(result){
						//alert("Sepete Eklendi")
					}


				});
				
			});
			
		}); 
	</script>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/apps/ecommerce/cart.blade.php ENDPATH**/ ?>