@extends('layouts.admin.master')

@section('title')Kategori Düzenle Sil
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
			<h3>Kategoriler</h3>
		@endslot
		<li class="breadcrumb-item">Kategori İşlemleri</li>
		<li class="breadcrumb-item active">Kategoriler</li>
	@endcomponent

    <div class="col-sm-12 col-xl-6">
		<div class="row">
		
					
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Kategori Ekleme ve Güncelleme Sayfası</h5>		
									
					</div>
					<div class="card-body">
						<form class="theme-form" method="POST" action="{{route('kaydet', @$entry->id)}}">
							{{ csrf_field() }}
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Kategori Adı</label>
								<div class="col-sm-8">
									<input class="form-control" id="yemekKategoriAd" name="yemek_kategori_ad" type="text" placeholder="Kategori Adı" value="{{request('id')!=null ? $entry->yemek_kategori_ad:''}}"/>
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Kategori Sırası</label>
								<div class="col-sm-8">
									<input class="form-control" id="yemekKategoriSira" name="yemek_kategori_sira" type="text" placeholder="Kategori Sırası" value="{{request('id')!=null ? $entry->yemek_kategori_sira:''}}"/>
								</div>
							</div>					
							<div class="mb-3 row">
								<label class="col-sm-4 col-form-label">Ebeveyn Kategori</label>
								<div class="col-sm-8">
									<select class="form-control btn-square" id="yemekKategoriUst" name="yemek_kategori_ust">
									
										@foreach ($list as $item)
											<option {{$item->id==$ust_kategori->id ? 'selected':''}} value="{{$item->id}}">{{$item->yemek_kategori_ad}}</option>    
              							@endforeach
																													
									</select>			
								</div>					
							</div>
							
							
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" type="submit">{{request('id')==null?'Kaydet':'Güncelle'}}</button>
								<a href="{{route('kategori')}}" class="btn btn-secondary" >İptal</a>
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
		</div>
</div>
		
@endsection