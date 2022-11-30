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
                                <li class="breadcrumb-item active">Editar noticia</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>     
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
    @include('utilities.dashboard.maincontentFooter')
</div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection