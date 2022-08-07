@extends('layouts.admin.master')

@section('title')Kategori Listeleme
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
                            <th scope="col">ID</th>
                            <th scope="col">Kategoriler</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->yemek_kategori_ad}}</td>
                            <td>
                                <a href="{{route('duzenle', $item->id)}}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                    <span class="fa fa-pencil"></span>
                                </a>
                                <a href="{{route('sil', $item->id)}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </td>
                            
                        </tr>    
                        @endforeach
                                                                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection