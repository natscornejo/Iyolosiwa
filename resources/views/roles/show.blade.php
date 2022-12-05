edit.blade.php@extends('layouts.appDashboard')

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
                                <li class="breadcrumb-item"><a href="{{ route('permisos.index') }}">Permisos</a></li>
                                <li class="breadcrumb-item active">Detalle de: {{ $role->name }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Detalle del rol</h4>
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
                        <h4 class="header-title">Role: {{ $role->name }}</h4>
                        <p class="sub-header">
                            Hola, en este espacio se muestra el detalle del rol
                        </p>
                    </div>

                    <div class="">
                        <h4 class="header-title font-16 text-center text-uppercase mt-3">Detalles</h4>
                    </div>

                    <div class="text-left mt-3">
                        <p class="text-muted mb-2 font-13"><strong>ID :</strong><span class="ml-2">{{ $role->id }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>Nombre :</strong><span class="badge badge-light-success badge-pill">{{ $role->name }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>Guard :</strong><span class="ml-2 ">{{ $role->guard_name }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>Fecha de creación :</strong><span class="ml-2 ">{{ $role->created_at }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>Ultima actualización :</strong><span class="ml-2 ">{{ $role->updated_at }}</span></p>
                    </div>

                    <div class="">
                        <h4 class="header-title card-subtitle font-16 text-center text-uppercase mt-3">Permisos</h4>
                    </div>

                    <div class="text-left mt-3">
                    	@forelse ($role->permissions as $permission)
	                        <p class="text-muted mb-2 font-13"><strong>Nombre :</strong><span class="badge badge-light-primary badge-pill">{{ $permission->name }}</span></p>
	                      @empty
	                          <span class="badge badge-light-secondary badge-pill">Sin permisos</span>
	                      @endforelse
                    </div>

                    <div class="p-2">
                        <a href="{{ route('roles.index') }}" class="btn btn-info btn-xs waves-effect mb-2 waves-light">
                            <i class="fas fa-window-close"></i> Cancelar
                        </a>
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-xs waves-effect mb-2 waves-light">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display: inline-block;">
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

    @include('utilities.dashboard.maincontentFooter')
</div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection