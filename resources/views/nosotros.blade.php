@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')

<div class="container-fluid">
	<div class="card-group">
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Historia</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Mision</h5>
				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Vision</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Valores</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
	</div>

	<!-- Historia -->
    <div class="primera-seccion">
        <div class="row align-items-start">
            <div class="col-sm-5 bgcolor">
                <h1>Historia</h1>
            </div>
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
        </div>
    </div>

    <!-- Mision -->
    <div class="secciones">
        <div class="row align-items-start">
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
            <div class="col-sm-5 bgcolor">
                <h1>Mision</h1>
            </div>
        </div>
    </div>

    <!-- Vision -->
    <div class="secciones">
        <div class="row align-items-start">
            <div class="col-sm-5 bgcolor">
                <h1>Vision</h1>
            </div>
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
        </div>
    </div>

    <!-- Mision -->
    <div class="secciones">
        <div class="row align-items-start">
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
            <div class="col-sm-5 bgcolor">
                <h1>Valores</h1>
            </div>
        </div>
    </div>

</div>
@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection
