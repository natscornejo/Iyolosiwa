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

    <div class="container mb-sm-4">
        <div class="col-sm-10">
            <a href="{{ route('Dashboard')}}" class="btn btn-warning" type="button">
                <h4>
                    Dashboard
                </h4>
            </a>

            <a href="{{ route('noticias.index')}}" class="btn btn-warning" type="button">
                <h4>
                    Usuarios
                </h4>
            </a>

            <a href="{{ route('noticias.create')}}" class="btn btn-success" type="button">
                <h4>
                    Crear notticia
                </h4>
            </a>
        </div> 
    </div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($posts as $post)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-title"><h2>{{ $post->title }}</h2></div>
                        <div class="card-text"><h4>{{ $post->body }}</h4></div>
                        <a href="#" class="card-link">Leer noticia completa</a>
                    </div>
                    <div class="card-footer text-muted">
                        <h8>{{ $post->date }}</h8>
                        <form method="POST" action="{{ route('noticias.destroy', $post->id) }}">
                            <button type="submit">Borrar</button>
                            {{ csrf_field()}}
                            {{ method_field('DELETE')}}
                        </form>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection


