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
                                <li class="breadcrumb-item active">Roles</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Roles</h4>
                    </div>
                </div>
            </div>     
        </div>

        <!-- TAbla de permisos -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Roles</h4>
                                        <p class="card-category">Roles registrados</p>
                                    </div>

                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-12 text-right">
                                                @can('permission_create')
                                                    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-outline-primary">Añadir rol</a>
                                                @endcan
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Guard</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Permisos</th>
                                                    <th class="text-right">Acciones</th>
                                                </thead>

                                                <tbody>
                                                    @forelse ($roles as $role)
                                                        <tr>
                                                            <td>{{ $role->id }}</td>
                                                            <td>{{ $role->name }}</td>
                                                            <td>{{ $role->guard_name }}</td>
                                                            <td class="text-primary">{{ $role->created_at->toFormattedDateString() }}</td>
                                                            <td>
                                                            	@forelse ($role->permissions as $permission)
                    		                                    	<span class="badge badge-light-success badge-pill">{{ $permission->name }}</span>

                		                                    	@empty
																	<span class="badge badge-light-danger badge-pill">Sin permisos</span>
																@endforelse

                                                            </td>

                                                            <td class="td-actions btn-group-sm">
                                                                @can('role_show')
                                                                    <a class="btn btn-primary" data-bs-toggle="tooltip" data-bs-title="Ver" href="{{ route('roles.show', $role->id) }}">
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                @endcan

                                                                @can('role_edit')
                                                                    <a class="btn btn-warning" data-bs-toggle="tooltip" data-bs-title="Editar" href="{{ route('roles.edit', $role->id) }}">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                @endcan

                                                                @can('role_destroy')
                                                                    <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display: inline-block;">
                                                                        {{ csrf_field()}}
                                                                        {{ method_field('DELETE')}}

                                                                        <button class="btn btn-sm btn-outline-danger" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                @endcan
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="2">Sin registros.</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-footer mr-auto">
                                            {{ $roles->links() }}
                                        </div>
                                    </div>
                                </div>
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