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
								<h5>Kullanıcı Grubu Tanımlama</h5>
							</div>
							<div class="card-body">
								<form class="theme-form" action="islem.php" method="POST">
									<div class="mb-3">
										<label class="col-form-label pt-0" for="kullaniciGrupKodu">Grup Kodu*</label>
										<input class="form-control" id="kullaniciGrupKodu" type="text" required maxlength="6" name="kullaniciGrupKodu" aria-describedby="kullaniciGrupKodu" placeholder="Grup Kodunu Giriniz" />
										<small class="form-text text-muted" id="emailHelp">Bu alana daha önceden belirlenmiş kurala göre grup kodunu oluşturup girebilirsiniz.</small>
									</div>
									<div class="mb-3">
										<label class="col-form-label pt-0" for="kullaniciGrupAdi">Grup Adı*</label>
										<input class="form-control" id="kullaniciGrupAdi" maxlength="15"  required type="text" name="kullaniciGrupAdi" placeholder="Grup Adını Giriniz" />
									</div>
							
								
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" type="submit">Kaydet</button>
								<button class="btn btn-secondary">İptal Et</button>
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