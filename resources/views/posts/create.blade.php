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

@section('content')
	<div class="container">
	    <div class="container mb-sm-4">
        <div class="col-sm-10">
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
    </div>
	<!-- Formulario -->
	<div class="primera-seccion">
		<form method="POST" action="{{ route('noticias.store')}}">
			<!-- Token unico para enviar la informacion -->
			{{ csrf_field()}}
			<h2>
				<label for="">Titulo</label>
			</h2>
			<input type="text" name="title" required="">

			<h2>
				<label for="">Cuerpo</label>
			</h2>
			<textarea name="body" id="" required="" cols="30" rows="10"></textarea>

			<h2>
				<label for="">Autor</label>
			</h2>
			<input type="text" name="author">

			<h2>
				<label for="">Fecha</label>
			</h2>
			<input type="date" name="date" required="">

			<h2>
				<label for="">Hashtags</label>
			</h2>
			<input type="text" name="keywords">

			<div>
				<button type="submit">Publicar noticia</button>
			</div>
		</form>
	</div>

@endsection