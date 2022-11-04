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
    <!-- Content here -->
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><h1>Noticias</h1></div>


                <div class="card-body">
                    <a href="{{ route('Dashboard')}}" class="btn btn-warning mb-sm-4" type="button">
                        <h4 >
                            Dashboard
                        </h4>
                    </a>

                    <a href="{{ route('noticias.index')}}" class="btn btn-warning mb-sm-4" type="button">
                        <h4>
                            Usuarios
                        </h4>
                    </a>

                    <a href="{{ route('noticias.create')}}" class="btn btn-success mb-sm-4" type="button">
                        <h4>
                            Crear notticia
                        </h4>
                    </a>


                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha de publicacion</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">Imgen1.jpg</td>
                                <td scope="row">Aqui va el titulo</td>
                                <td scope="row">Aqui va la descripcion</td>
                                <td scope="row">19/10/2019</td>
                                <td scope="row">Aqui va el autor de la noticia</td>
                                <td><a class="btn btn-outline-warning" href="">Ver</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                            <a class="btn btn-danger" type="submit">Borrar noticia</a>
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


@section('contentFooter')
    @include('utilities.footer')
@endsection


