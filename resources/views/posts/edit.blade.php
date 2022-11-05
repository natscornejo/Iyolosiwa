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
	            <h1>Editar noticia: {{ $post->title }}</h1>
			</div>

			<!-- Formulario -->
			<div class="card-body p-4">
				<form method="POST" action="{{ route('noticias.update', $post->id)}}">
					<!-- Token unico para enviar la informacion -->
					{{ csrf_field()}}
					{{ method_field('PUT')}}

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="Titulo" value="{{ $post->title }}" name="title" required="">
						<label for="floatingInput">Titulo</label>
					</div>

					<div class="form-floating mb-3">
						<textarea class="form-control" id="floatingTextarea" placeholder="Contenido" style="height: 250px;" value="{{ $post->body }}" name="body" required="">{{ $post->body }}</textarea>
						<label for="floatingTextarea">Contenido de la noticia</label>
					</div>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="Autor" value="{{ $post->author }}" name="author">
						<label for="floatingInput">Autor</label>
					</div>

					<div class="form-floating mb-3">
						<input type="date" class="form-control" id="floatingInput" placeholder="Fecha" value="{{ $post->date }}" name="date" required="">
						<label for="floatingInput">Fecha de publicacion</label>
					</div>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInputValue" placeholder="Hashtags" value="{{ $post->keyboards }}" name="keywords">
						<label for="floatingInputValue" data-bs-toggle="tooltip" data-bs-title="Poner los Hashtags se parados por comas">Hashtags</label>
					</div>
					
					<button class="mb-3 btn btn-success" type="submit"><i class="bi bi-check-lg"></i> Actualizar noticia</button>
					<a class="mb-3 btn btn-outline-danger" href="{{ route('noticias.index')}}"><i class="bi bi-x-circle-fill"></i> Cancelar edicion</a>

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