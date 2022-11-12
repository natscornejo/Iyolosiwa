@extends('layouts.app')

@section('contentNavBar')
    @include('posts.utilities.navbar')
@endsection

@section('content')
    <div class="container">
        <!-- Content here -->
        <div class="row justify-content-center">
            <div class="col-md-12">

                    @if(Session::has('exito'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h3>Exito!</h3> <p>{{Session::get('exito')}}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(Session::has('Borrado'))
                        <div class="alert alert-danger alert-dismissible fade show out" role="alert">
                            <h3>Eliminado!</h3> <p>{{Session::get('Borrado')}}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

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
                                Crear noticia
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
                                @foreach($posts as $post)
                                <tr>
                                    <td scope="row">{{ $post->id }}</td>
                                    <td scope="row">Imgen1.jpg</td>
                                    <td scope="row">{{ $post->title }}</td>
                                    <td scope="row">{{ $post->body }}</td>
                                    <td scope="row">{{ $post->date }}</td>
                                    <td scope="row">{{ $post->author }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('noticias.destroy', $post->id) }}" style="display: inline-block;">
                                            {{ csrf_field()}}
                                            {{ method_field('DELETE')}}

                                            <button class="btn btn-danger btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar"><i class="bi bi-x-circle-fill"></i></button>
                                        </form>
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-title="Ver" href="{{ route('noticias.show', $post->id) }}"> <i class="bi bi-eye-fill"></i></a>

                                            <a class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-title="Editar" href="{{ route('noticias.edit', $post->id) }}"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection


