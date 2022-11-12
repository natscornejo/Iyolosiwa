@extends('layouts.app')

@section('contentNavBar')
    @include('posts.utilities.navbar')
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<!-- Content here -->
    <div class="col-sm-8">

    	@if(Session::has('exito'))
			<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
		  		<h3>Exito!</h3> <p>{{Session::get('exito')}}</p>
		  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif

		@if(Session::has('Borrado'))
			<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
		  		<h3>Eliminado!</h3> <p>{{Session::get('Borrado')}}</p>
		  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif

		<div class="display-4 mb-4">
	        <a href="{{ route('Dashboard')}}" class="btn btn-warning" type="button">
	            <h4>
	                Dashboard
	            </h4>
	        </a>

	        <a href="{{ route('noticias.index')}}" class="btn btn-warning" type="button">
	            <h4>
	                Noticias
	            </h4>
	        </a>
		</div>

		<div class="card">
			<div class="card-header">
	            <h1>
	                Crear noticia
	            </h1>
			</div>

			<!-- Formulario -->
			<div class="card-body p-4">
				<form method="POST" action="{{ route('noticias.store')}}">
					<!-- Token unico para enviar la informacion -->
					{{ csrf_field()}}

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="Titulo" name="title" required="">
						<label for="floatingInput">Titulo</label>
					</div>

					<div class="form-floating mb-3">
						<textarea type="text" class="form-control" id="floatingTextarea" placeholder="Contenido" style="height: 250px;" name="body" id="" required=""></textarea>
						<label for="floatingTextarea">Contenido de la noticia</label>
					</div>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="Autor" name="author">
						<label for="floatingInput">Autor</label>
					</div>

					<div class="form-floating mb-3">
						<input type="date" class="form-control" id="floatingInput" placeholder="Fecha" name="date" required="">
						<label for="floatingInput">Fecha de publicacion</label>
					</div>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInputValue" placeholder="Hashtags" value="Iyolosiwa, "name="keywords">
						<label for="floatingInputValue" data-bs-toggle="tooltip" data-bs-title="Poner los Hashtags se parados por comas">Hashtags</label>
					</div>
					

					<button class="mb-3 btn btn-warning" type="submit">Publicar noticia</button>

					<div class="form-group card-footer">
						<h7>
							Esta noticia sera publicada en la pagina principal de Iyolosiwa
						</h7>
					</div>
				</form>
			</div>
		</div>
    </div>
	</div> 
</div>
@endsection


@section('contentFooter')
    @include('utilities.footer')
@endsection