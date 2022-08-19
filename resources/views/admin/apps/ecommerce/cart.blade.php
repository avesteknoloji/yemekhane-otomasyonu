@extends('layouts.admin.master')

@section('title')Sepet
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Sepet</h3>
		@endslot
		<li class="breadcrumb-item">Siparişler</li>
		<li class="breadcrumb-item active">Sepet</li>
	@endcomponent
	
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
								@if (count(Cart::content())>0)
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
											@foreach (Cart::content() as $item)
											<tr>
												<td><img class="img-fluid img-40" src="{{asset('uploads/images/yemek_resimleri/'.$item->options->yemek_resmi)}}" alt="" /></td>
												<td>
													<div class="product-name">
														<a href="#"> <h6>{{$item->name}}</h6></a>
													</div>
												</td>
												<td>{{$item->price}}  ₺</td>
												<td>
													<fieldset class="qty-box">
														<div class="input-group" data-id="{{$item->rowId}}">
															<input class="touchspin text-center" id="rowname{{$item->rowId}}" type="text" value="{{$item->qty}}" />
														</div>
													</fieldset>
												</td>
												<td>
													<form action="{{route('sepettenKaldir', $item->rowId)}}" method="POST">
														{{ csrf_field() }}
														{{ method_field('DELETE') }} 
														<button type="submit" class="btn btn-sm btn-danger">
                                        				<span class="fa fa-trash"></span>
                                        				</button>
													</form>
													
												</td>
												<td>{{$item->subtotal}}  ₺</td>
											</tr>
											@endforeach
											<tr>
												<td colspan="4">
													
												</td>
												<td class="total-amount">
													<h6 class="m-0 text-end"><span class="f-w-600">Toplam:</span></h6>
												</td>
												<td><span>{{Cart::subtotal()}}  ₺</span></td>
											</tr>
											<tr>
												
												<td class="text-end" colspan="4">
													<form action="{{route('sepetGuncelle')}}" method="POST">
														{{csrf_field()}}	
														<button class="btn btn-secondary cart-btn-transform">Siparişi Güncelle</button>
													</form>
												</td>
												<td class="text-end"><a class="btn btn-secondary cart-btn-transform" href="#">Siparişe Devam Et</a></td>
												<td><a class="btn btn-success cart-btn-transform" href="#">Ödemeye Geç</a></td>
											</tr>
										</tbody>
									</table>
								@else
								
								<div class="alert alert-success">Sepetinizde Ürün Yok</div>
							
								@endif
	                            
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>
	@endpush

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
					url:"{{route('sepetGuncelle')}}",
					headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
					method:"GET",
					data:{yemekQty:qty, rowId:id},
					success:function(result){
						//alert("Sepete Eklendi")
					}


				});
				
			});
			
		}); 
	</script>
	

@endsection