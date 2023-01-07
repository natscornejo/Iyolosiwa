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
            <!-- Tabla de permisos -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <h4 class="card-title">Permisos</h4>
                                            <p class="card-category">Permisos registrados</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    @can('permission_create')
                                                        <a href="{{ route('permisos.create') }}"
                                                            class="btn btn-sm btn-outline-primary">Añadir permiso</a>
                                                    @endcan
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="text-primary">
                                                        <th>ID</th>
                                                        <th>Nombre</th>
                                                        <th>Guard</th>
                                                        <th>Created_at</th>
                                                        <th class="text-right">Acciones</th>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($permissions as $permission)
                                                            <tr>
                                                                <td>{{ $permission->id }}</td>
                                                                <td>{{ $permission->name }}</td>
                                                                <td>{{ $permission->guard_name }}</td>
                                                                <td>{{ $permission->created_at }}</td>
                                                                <!-- Formulario Details, Edit & Delete -->
                                                                <td class="td-actions btn-group-sm">
                                                                    @can('permission_show')
                                                                        <a class="btn btn-primary" data-bs-toggle="tooltip"
                                                                            data-bs-title="Ver"
                                                                            href="{{ route('permisos.show', $permission->id) }}">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    @endcan
                                                                    @can('permission_edit')
                                                                        <a class="btn btn-warning" data-bs-toggle="tooltip"
                                                                            data-bs-title="Editar"
                                                                            href="{{ route('permisos.edit', $permission->id) }}">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>
                                                                    @endcan
                                                                    @can('permission_destroy')
                                                                        <form method="POST"
                                                                            action="{{ route('permisos.destroy', $permission->id) }}"
                                                                            style="display: inline-block;">
                                                                            {{ csrf_field() }}
                                                                            {{ method_field('DELETE') }}
                                                                            <button class="btn btn-sm btn-outline-danger"
                                                                                type="submit" data-bs-toggle="tooltip"
                                                                                data-bs-title="Borrar">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                        </form>
                                                                    @endcan
                                                                </td> <!-- Formulario Details, Edit & Delete -->
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
                                                {{ $permissios->links() }}
                                            </div>
                                        </div>
                                    </div> <!-- Card--->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Tabla de permisos -->
        </div>
        @include('utilities.dashboard.maincontentFooter')
    </div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection
