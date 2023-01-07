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
                                    <li class="breadcrumb-item active">Usuarios</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Usuarios</h4>
                        </div>
                    </div>
                </div>
            </div> <!-- Header & Breadcrumbs -->
            <!-- Tabla de noticias -->
            <div class="row">
                <!-- Col -->
                <div class="col-12">
                    <!-- Card-box -->
                    <div class="card-box">
                        <div class="responsive-table-plugin">
                            <!-- Table-rep-plugin-->
                            <div class="table-rep-plugin">
                                <div class="col-12 pt-2 mr-2">
                                    @include('posts.utilities.alerts')
                                    <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-outline-primary">
                                        Crear nuevo usuario
                                    </a>
                                </div>
                                <!-- Table-responsive -->
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="basic-datatable" class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th data-priority="1">ID</th>
                                                <th data-priority="3">Nombre</th>
                                                <th data-priority="1">Email</th>
                                                <th data-priority="3">Roles</th>
                                                <th data-priority="6" colspan="2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td scope="row">{{ $user->id }}</td>
                                                    <td scope="row">{{ $user->name }}</td>
                                                    <td scope="row">{{ $user->email }}</td>
                                                    <td>
                                                        @forelse ($user->roles as $role)
                                                            <span
                                                                class="badge badge-light-success badge-pill">{{ $role->name }}</span>
                                                        @empty
                                                            <span class="badge badge-light-danger badge-pill">sin
                                                                roles</span>
                                                        @endforelse
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-info btn-xs waves-effect mb-2 waves-light"
                                                            data-toggle="tooltip" data-placement="bottom" title="Ver"
                                                            href="{{ route('usuarios.show', $user->id) }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-warning btn-xs waves-effect mb-2 waves-light"
                                                            data-toggle="tooltip" data-placement="bottom" title="Editar"
                                                            href="{{ route('usuarios.edit', $user->id) }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <!-- Formulario Cancel, Edit & Delete -->
                                                        <form method="POST"
                                                            action="{{ route('usuarios.destroy', $user->id) }}"
                                                            style="display: inline-block;">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button
                                                                class="btn btn-outline-danger btn-xs waves-effect mb-2 waves-light"
                                                                type="submit" data-toggle="tooltip" data-placement="bottom"
                                                                title="Borrar"
                                                                onsubmit="return confirm('Esta acción eliminara definitivamente el usuario, ¿Estas seguro?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form> <!-- Formulario Cancel, Edit & Delete -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive -->
                                <div class="card-footer mr-auto">
                                    {{ $users->links() }}
                                </div>
                            </div> <!-- end .table-rep-plugin-->
                        </div> <!-- end .responsive-table-plugin-->
                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div> <!-- Tabla de noticias -->
        </div>
        @include('utilities.dashboard.maincontentFooter')
    </div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection
