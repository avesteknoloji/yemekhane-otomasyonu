@extends('layouts.admin.master')

@section('title')Default Forms
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Default Forms</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Layout</li>
		<li class="breadcrumb-item active">Default Forms</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-6">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header pb-0">
								<h5>Kullanıcı Ekleme Formu</h5>
							</div>
							<div class="card-body">
								<form class="theme-form mega-form">
									<h6>Kullanıcı Bilgileri</h6>
									<div class="mb-3">
										<label class="col-form-label">Kullanıcı Adı</label>
										<input class="form-control" type="text" placeholder="Kullanıcı Adı Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Eposta Adresi</label>
										<input class="form-control" type="email" placeholder="Eposta Adresi Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre</label>
										<input class="form-control" type="email" placeholder="Kullanıcı şifresini giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre Tekrar</label>
										<input class="form-control" type="email" placeholder="Kullanıcı şifresini tekrar giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">İletişim No:</label>
										<input class="form-control" type="Number" placeholder="İletişim Numarası Giriniz..." />
									</div>
								</form>
								
							</div>
							<div class="card-footer">
								<button class="btn btn-primary">Submit</button>
								<button class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection