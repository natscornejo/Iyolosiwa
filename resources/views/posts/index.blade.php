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
                                    <li class="breadcrumb-item active">Noticias</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Noticias</h4>
                        </div>
                    </div>
                </div>
            </div><!-- Header & Breadcrumbs -->
            <!-- Tabla de noticias -->
            <div class="row">
                <!-- Col -->
                <div class="col-12">
                    <!-- Card-box -->
                    <div class="card-box">
                        <!-- Responsive-table-plugin-->
                        <div class="responsive-table-plugin">
                            <!-- Table-rep-plugin-->
                            <div class="table-rep-plugin">
                                <div class="row">
                                    <div class="col-12 pt-2 mr-2">
                                        @include('posts.utilities.alerts')
                                        <a href="{{ route('noticias.create') }}" class="btn btn-sm btn-outline-primary">
                                            Crear nueva noticia
                                        </a>
                                    </div>
                                </div>
                                <!-- Tabla Responsiva -->
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="basic-datatable" class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th data-priority="1">ID</th>
                                                <th data-priority="3">Titulo</th>
                                                <th data-priority="1">Descripcion</th>
                                                <th data-priority="3">Fecha</th>
                                                <th data-priority="3">Autor</th>
                                                <th data-priority="3">Hashtags</th>
                                                <th data-priority="6" colspan="2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td scope="row">{{ $post->id }}</td>
                                                    <td scope="row">{{ $post->title }}</td>
                                                    <td scope="row">{{ $post->body }}</td>
                                                    <td scope="row">{{ $post->date }}</td>
                                                    <td scope="row">{{ $post->author }}</td>
                                                    <td scope="row">{{ $post->keywords }}</td>
                                                    <!-- Formulario Details, Edit & Delete -->
                                                    <td class="td-actions btn-group-sm">
                                                        <a class="btn btn-primary" data-bs-toggle="tooltip"
                                                            data-bs-title="Ver"
                                                            href="{{ route('noticias.show', $post->id) }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-warning" data-bs-toggle="tooltip"
                                                            data-bs-title="Editar"
                                                            href="{{ route('noticias.edit', $post->id) }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('noticias.destroy', $post->id) }}"
                                                            style="display: inline-block;">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                                data-bs-toggle="tooltip" data-bs-title="Borrar"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
                                                    </td> <!-- Formulario Details, Edit & Delete -->
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive -->
                                <div class="card-footer mr-auto">
                                    {{ $posts->links() }}
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
