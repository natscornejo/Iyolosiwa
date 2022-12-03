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
                                <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                                <li class="breadcrumb-item active">{{ $user->name }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Información del usuario</h4>
                    </div>
                </div>
            </div>     
        </div>

        <div class="row">
            <div class="col-12">
                <div class="col-5 p2">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-box text-center">
                                <img src="{{ asset('assets/images/users/Avatar-Lg-BWBLK-1.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                                    alt="profile-image">

                                <h4 class="font-24 mb-0">{{ $user->name }}</h4>
                                <div class="font-20">
                                    <span class="badge badge-light-success badge-pill">Role</span>
                                </div>
                            </div> <!-- end card-box -->

                            <div class="">
                                <h4 class="header-title font-16 text-center text-uppercase mt-3">Información del usuario</h4>
                            </div>

                            <div class="text-left mt-3">
                                <p class="text-muted mb-2 font-13"><strong>ID :</strong><span class="ml-2">{{ $user->id }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Nombre :</strong><span class="ml-2">{{ $user->name }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Correo :</strong><span class="ml-2 ">{{ $user->email }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Correo verificado :</strong><span class="ml-2 ">{{ $user->email_verified_at }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Contraseña :</strong><span class="ml-2 ">{{ $user->password }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Fecha de creación :</strong><span class="ml-2 ">{{ $user->created_at }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>Ultima actualización :</strong><span class="ml-2 ">{{ $user->updated_at }}</span></p>
                            </div>


                            <div class="p-2">
                                <a href="{{ route('usuarios.index') }}" class="btn btn-info btn-xs waves-effect mb-2 waves-light">
                                    <i class="fas fa-window-close"></i> Cancelar
                                </a>
                                <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-warning btn-xs waves-effect mb-2 waves-light">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form method="POST" action="{{ route('usuarios.destroy', $user->id) }}" style="display: inline-block;">
                                    {{ csrf_field()}}
                                    {{ method_field('DELETE')}}

                                    <button class="btn btn-outline-danger btn-xs waves-effect mb-2 waves-light" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>


                        </div>
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

