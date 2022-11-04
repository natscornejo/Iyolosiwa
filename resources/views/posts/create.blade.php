@if(Session::has('exito'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<h3>Exito!</h3> <p>{{Session::get('exito')}}</p>
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif

@if(Session::has('Borrado'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		<h3>Eliminado!</h3> <p>{{Session::get('Borrado')}}</p>
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif

@extends('layouts.app')

@section('contentNavBar')
    @include('posts.utilities.navbar')
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<!-- Content here -->
    <div class="col-sm-8">
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
			<div class="card-body">
				<form method="POST" action="{{ route('noticias.store')}}">
					<!-- Token unico para enviar la informacion -->
					{{ csrf_field()}}

					<div class="form-group">
						<label for="">Titulo</label>
						<input class="form-control" type="text" name="title" required="">
					</div>

					<div class="form-group">
						<label for="">Cuerpo</label>
						<textarea class="form-control" name="body" id="" required="" cols="30" rows="10"></textarea>
					</div>

					<div class="form-group">
						<label for="">Autor</label>
						<input class="form-control" type="text" name="author">
					</div>

					<div class="form-group">
						<h5>
							<label for="">Fecha</label>
						</h5>
						<input class="form-control" type="date" name="date" required="">
					</div>

					<div class="form-group">
						<h5>
							<label for="">Hashtags</label>
						</h5>
					<input class="form-control" type="text" name="keywords">
					</div>
					

					<button class="btn btn-warning" type="submit">Publicar noticia</button>

					<div class="form-group card-footer">
						Esta noticia sera publicada en la pagina principal de Iyolosiwa
					</div>
				</form>
			</div>
		</div>
    </div>
	</div> 
</div>
@endsection


