@extends('layouts.admin.master')

@section('title')Test Sayfası
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/range-slider.css')}}">
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Test Sayfası</h3>
		@endslot
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Test</li>
	@endcomponent
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<h5>Date Picker</h5>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="date-picker">
							<form class="theme-form">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label text-end">Default</label>
									<div class="col-xl-5 col-sm-9">
										<div class="input-group">
											<input class="datepicker-here form-control digits" type="text" data-language="en" />
										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
	@endpush
   

@endsection