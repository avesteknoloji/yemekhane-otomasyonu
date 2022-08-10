@extends('layouts.admin.master')

@section('title')
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
    <div class="row">
        <div class="col-sm-6">
            <div class="product-search">
                <form action="" method="POST">
                    <div class="form-group m-0"><input class="form-control" name="aranan" type="search" placeholder="Hızlı Ara.."  value="{{old('aranan')}}" data-original-title="" title="" /><i class="fa fa-search"></i></div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        <div class="col-sm-6">  
            <a href="{{route('yeni')}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top">Yeni Ekle </a>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Yemek Kategorileri</h5>
               
            </div>
            <div class="mb-3 row">
                @if ($message=session('message'))
                    <div class="alert alert-success">{{$message}}</div>
                @endif
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
                                <th scope="col">Katagori</th>
                                <th scope="col">Düzenle</th>
                                <th scope="col">Sil</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <div style="display: none">{{$sira=1}}</div>
                            @foreach ($yemekler as $item)
                            <tr>
                                <th scope="row">{{$sira++}}</th>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->yemek_ad}}</td>
                                <td>{{$item->yemek_fiyat}}</td>
                                <td>{{$item->stok}}</td>
                                <td>{{$item->kategori->yemek_kategori_ad ?? 'None'}}</td>
                                <td>
                                    <a href="{{route('duzenle', $item->id)}}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    
                                </td>
                                <td>
                                   
                                    <form action="{{route('sil', $item->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }} 
                                    <button type="submit" class="btn btn-sm btn-danger"  onclick="return confirm('Emin misiniz?')">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </form>
                                </td>
                            </tr>    
                            @endforeach
                                                                        
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>

@endsection