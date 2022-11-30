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
                                <li class="breadcrumb-item active">Crear noticia</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Crear noticia</h4>
                    </div>
                </div>
            </div>     
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

    @include('utilities.dashboard.maincontentFooter')
</div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection