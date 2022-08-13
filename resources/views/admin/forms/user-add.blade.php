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
								@if ($message=session('message'))
							<div class="alert alert-success">{{$message}}</div>
							@endif
								<form class="theme-form mega-form" action="{{route('user-registration')}}" method="POST">
									{{ csrf_field() }}
									<h6>Kullanıcı Bilgileri</h6>
									<div class="mb-3">
										<label class="col-form-label">Kullanıcı Adı</label>
										<input class="form-control" type="text" name="userName" placeholder="Kullanıcı Adı Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Eposta Adresi</label>
										<input class="form-control" type="email" name="userEmail" placeholder="Eposta Adresi Giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre</label>
										<input class="form-control" type="password" name="userPass" placeholder="Kullanıcı şifresini giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Şifre Tekrar</label>
										<input class="form-control" type="password" name="userPass2" placeholder="Kullanıcı şifresini tekrar giriniz" />
									</div>
									<div class="mb-3">
										<label class="col-form-label">Kullanıcı Grubu:</label>
										<select class="form-control" name="userGroupId" id="userGroupId">
											@foreach ($userGroups as $user_role_id=>$user_role_name)
											<option value="{{$user_role_id}}">{{$user_role_name}}
											</option>	
											@endforeach
											</select>
									</div>
								
								
							</div>
							<div class="card-footer">
								<button class="btn btn-primary">Kaydet</button>
								<button class="btn btn-secondary">İptal</button>
							</div>
						</form>
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