@extends('layouts.admin.master')

@section('title')Yemek Düzenle Sil
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/range-slider.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Yemekler</h3>
		@endslot
		<li class="breadcrumb-item">Yönetim</li>
		<li class="breadcrumb-item active">Yemekler</li>
	@endcomponent

    <div class="col-sm-12 col-xl-6">
		<div class="row">
		
					
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Yemek Ekleme ve Güncelleme Sayfası</h5>		
									
					</div>
					<div class="card-body">
						<form class="theme-form" method="POST" action="{{route('yemekKaydet',$entry->id)}}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Slug</label>
								<div class="col-sm-8">
									<input class="form-control" id="slug" name="slug" type="text" placeholder="Slug" value="{{request('id')!=null ? $entry->slug:''}}"/>
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Yemek Adı</label>
								<div class="col-sm-8">
									<input class="form-control" id="yemekAd" name="yemek_ad" type="text" placeholder="Yemek Adı" value="{{request('id')!=null ? $entry->yemek_ad:''}}"/>
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Fiyat</label>
								<div class="col-sm-8">
									<input class="form-control" id="fiyat" name="yemek_fiyat" type="text" placeholder="Yemek Fiyatı" value="{{request('id')!=null ? $entry->yemek_fiyat:''}}"/>
								</div>
							</div>	
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Stok</label>
								<div class="col-sm-8">
									<input class="form-control" id="stok" name="stok" type="text" placeholder="Stok" value="{{request('id')!=null ? $entry->stok:''}}"/>
								</div>
							</div>				
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Kategori</label>
								<div class="col-sm-8">
									<select class="form-control btn-square" id="yemekKategori" name="yemek_kategori_id">
									
										@foreach ($yemek_kategorileri as $item)
											<option {{$item->id==$entry->yemek_kategori_id ? 'selected':''}} value="{{$item->id}}">{{$item->yemek_kategori_ad ?? null}}</option>    
              							@endforeach
																													
									</select>			
								</div>	
								<div class="mb-3 row">
									<label class="col-sm-4 col-form-label">Resim</label>
									<div class="col-sm-8">
										<input class="form-control" id="yemek_resmi" name="yemek_resmi" type="file"  value=""/>
									</div>
									@if ($entry->yemek_resmi!=null)
									<img src="\uploads\images\yemek_resimleri\{{$entry->yemek_resmi}}" style="height:70%; width:70%;  margin-right: 20px;" class="thumbnail pull-left">
										
									@endif
								</div>				
							</div>
							
							
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" type="submit">{{request('id')==null?'Kaydet':'Güncelle'}}</button>
								<a href="{{route('yemekListesi')}}" class="btn btn-secondary" >İptal</a>
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
		</div>
</div>
		
@endsection