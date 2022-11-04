@extends('layouts.app')

@section('contentNavBar')
    @include('posts.utilities.navbar')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-sm-8">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>
                        Dashboard
                    </h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Hola!</h2>
                    <h4>Bienvenido {{ Auth::user()->name}}</h4> 
                </div>


                <div class="card-body">
                    <a href="{{ route('noticias.index')}}" class="btn btn-warning" type="button">
                        <h4>
                            Noticias
                        </h4>
                    </a>

                    <a href="{{ route('noticias.index')}}" class="btn btn-warning" type="button">
                        <h4>
                            Usuarios
                        </h4>
                    </a>

                    <a href="{{ route('noticias.index')}}" class="btn btn-warning disabled" type="button">
                        <h4>
                            Aqui no se que poner
                        </h4>
                    </a>
                </div>

                    <div class="card-body">
        <h4>Iyolosiwa</h4>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>
                        Inicio
                    </h4>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Carusel
                            </h5>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Nuestro trabajo
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle disabled" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>
                        Nosotros
                    </h4>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Historia
                            </h5>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Misión
                            </h5>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Visión
                            </h5>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Valores
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>
                        Servicios
                    </h4>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Horarios e imagens de los talleres
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>
                        Voluntariado
                    </h4>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Testimonios
                            </h5>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Requisitos
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>
                        Donaciones
                    </h4>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Transparencia
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>
                        Contacto
                    </h4>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <h5>
                                Info de contacto
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>
    </div>


            </div>
        </div>
    </div>

    </div>

</div>
@endsection
