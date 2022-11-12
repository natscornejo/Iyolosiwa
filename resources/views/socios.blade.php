@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')

<div class="container col-lg-12 pt-lg-5 pb-lg-5">
	<div class="row">
		<h1>Socios</h1>
		<div class="col-sm-4 pb-3">
			<div class="card">
			<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="..." href="https://ceaal.org/v3/">
				<div class="card-body">
					<h5 class="card-title">CEAL.ORG</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
			</div>
		</div>

		<div class="col-sm-4 pb-3">
			<div class="card">
			<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="..." href="https://desarrollo049.wixsite.com/comcrece">
				<div class="card-body">
					<h5 class="card-title">DESARROLLO049</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				</div>
			</div>		
		</div>

		<div class="col-sm-4 pb-3">
			<div class="card">
			<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="..." href="https://crefal.org/">
				<div class="card-body">
					<h5 class="card-title">CREFAL.ORG</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 pb-3">
			<div class="card">
			<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="..." href="https://www.redlaedupopular.org/">
				<div class="card-body">
					<h5 class="card-title">REDLAEDUPOPULAR.ORG</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 pb-3">
			<div class="card">
			<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="..." href="http://www.imdec.net/">
				<div class="card-body">
					<h5 class="card-title">IMDEC.NET</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection