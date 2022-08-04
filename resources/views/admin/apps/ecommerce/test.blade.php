@extends('layouts.admin.master')

@section('title')Test Sayfası
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
			<h3>Test Sayfası</h3>
		@endslot
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Test</li>
	@endcomponent

    <div class="card-body dropdown-basic">
        <div class="dropdown">
            <div class="btn-group mb-0">
                <button class="dropbtn btn-primary" type="button">
                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                </button>
                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
            </div>
        </div>
    </div>

@endsection