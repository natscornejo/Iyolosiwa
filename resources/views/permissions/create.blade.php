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
                                    <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Users</a></li>
                                    <li class="breadcrumb-item active">Permisos</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Permisos</h4>
                        </div>
                    </div>
                </div>
            </div> <!-- Header & Breadcrumbs -->
            <!-- Card -->
            <div class="row">
                <div class="col-12">
                    <div class="card p-2">
                        <!-- Card  body-->
                        <div class="card-body">
                            <!-- Card  title-->
                            <div class="">
                                <h4 class="header-title">Nuevo permiso</h4>
                                <p class="sub-header">
                                    Hola, en este espacio se crearan los permisos que perteneceran a un role
                                </p>
                            </div> <!-- Card  title-->
                            <!-- Formulario -->
                            <form method="POST" action="{{ route('permisos.store') }}">
                                {{ csrf_field() }}
                                <!-- Aqui empieza el row -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <label for="floatingInput">Nombre del permiso</label>
                                            <input type="text" class="form-control" id="floatingInput" name="name"
                                                required="" autofocus>
                                        </div>
                                    </div>
                                    <!-- Botones Cancel & Create -->
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <a href="{{ route('permisos.index') }}"
                                                class="btn btn-info btn-xs waves-effect mb-2 waves-light">
                                                <i class="fas fa-window-close"></i> Cancelar
                                            </a>
                                            <button class="btn btn-outline-warning btn-xs waves-effect mb-2 waves-light"
                                                type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar">
                                                <i class="fas fa-check"></i>Crear permiso
                                            </button>
                                        </div>
                                        <div class="form-group card-footer">
                                            <h7>
                                                Esta noticia sera publicada en la pagina principal de Iyolosiwa
                                            </h7>
                                        </div>
                                    </div> <!-- Botones Cancel & Create -->
                                </div> <!-- Aqui termina el row -->
                            </form> <!-- Formulario -->
                        </div> <!-- Card  body-->
                    </div>
                </div>
            </div> <!-- Card -->
            @include('utilities.dashboard.maincontentFooter')
        </div>
    </div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection
