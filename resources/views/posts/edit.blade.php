@extends('layouts.appDashboard')

@section('contentTopBar')
    @include('utilities.dashboard.topbar')
@endsection

@section('contentSideBar')
    @include('utilities.dashboard.sidebar')
@endsection

@section('mainContent')
<div class="content-page">
    <div class="content">

        <!-- Header & Breadcrumbs -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Iyolosiwa</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('noticias.index')}}">Noticias</a></li>
                                <li class="breadcrumb-item active">Editar noticia</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Editando la noticia</h4>
                    </div>
                </div>
            </div>     
        </div>

        <!-- Formulario -->
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-body">
                        <div class="">
                            <h4 class="header-title">Nuva noticia</h4>
                            <p class="sub-header">
                                Hola, estas editando la noticia creada el {{ $post->date }} por {{ $post->author }}
                            </p>
                        </div>
                        <form method="POST" action="{{ route('noticias.update', $post->id)}}">
                            {{ csrf_field()}}
                            {{ method_field('PUT')}}

                            <div class="row"> <!-- Aqui empieza el row -->
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <label for="floatingInput">Titulo</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Titulo" name="title" value="{{ $post->title }}" required="">
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="floatingInput">Fecha de publicacion</label>
                                        <input type="date" class="form-control" id="floatingInput" placeholder="Fecha" name="date" value="{{ $post->date }}" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <label for="floatingInput">Autor</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Autor" name="author" value="{{ $post->author }}">
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="floatingInputValue" data-bs-toggle="tooltip" data-bs-title="Poner los Hashtags se parados por comas">Hashtags</label>
                                        <input type="text" class="form-control" id="floatingInputValue" placeholder="Hashtags" value="{{ $post->keyboards }}" name="keywords">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <label for="floatingTextarea">Contenido de la noticia</label>
                                        <textarea type="text" class="form-control" id="floatingTextarea" placeholder="Contenido" style="height: 250px;" name="body" id="" value="{{ $post->body }}" required=""></textarea>
                                    </div>

                                    <div class="form-floating">
                                        <button class="mb-3 btn btn-warning" type="submit">Publicar noticia</button>
                                        <a href="{{ route('noticias.index') }}" class="mb-3 btn btn-outline-danger">
                                            Cancelar
                                        </a>
                                    </div>

                                    <div class="form-group card-footer">
                                        <h7>
                                            Esta noticia sera publicada en la pagina principal de Iyolosiwa
                                        </h7>
                                    </div>
                                </div>
                            </div> <!-- Aqui termina el row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('utilities.dashboard.maincontentFooter')
</div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection