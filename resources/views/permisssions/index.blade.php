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
                                <li class="breadcrumb-item"><a href="{{ route('Users') }}">Users</a></li>
                                <li class="breadcrumb-item active">Permisos</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Permisos</h4>
                    </div>
                </div>
            </div>     
        </div>


        <!-- Tabla de noticias -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
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
                                        @foreach($posts as $post)
                                        <tr>
                                            <td scope="row">{{ $post->id }}</td>
                                            <td scope="row">{{ $post->title }}</td>
                                            <td scope="row">{{ $post->body }}</td>
                                            <td scope="row">{{ $post->date }}</td>
                                            <td scope="row">{{ $post->author }}</td>
                                            <td scope="row">{{ $post->keywords }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('noticias.destroy', $post->id) }}" style="display: inline-block;">
                                                    {{ csrf_field()}}
                                                    {{ method_field('DELETE')}}

                                                    <button class="btn btn-danger" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar"><i class="fas fa-trash"></i></button>
                                                </form>
                                                    <a class="btn btn-warning" data-bs-toggle="tooltip" data-bs-title="Ver" href="{{ route('noticias.show', $post->id) }}"><i class="fas fa-eye"></i></a>

                                                    <a class="btn btn-primary" data-bs-toggle="tooltip" data-bs-title="Editar" href="{{ route('noticias.edit', $post->id) }}"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive -->

                        </div> <!-- end .table-rep-plugin-->
                    </div> <!-- end .responsive-table-plugin-->
                </div> <!-- end card-box -->
            </div> <!-- end col -->
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
                  <h4 class="card-title">Permisos</h4>
                  <p class="card-category">Permisos registrados</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                    @can('permission_create')
                      <a href="{{ route('permisos.create') }}" class="btn btn-sm btn-facebook">Añadir permiso</a>
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
                          <td class="td-actions text-right">
                            @can('permission_show')
                            <a href="{{ route('permisos.show', $permission->id) }}" class="btn btn-info"><i
                                class="material-icons">person</i></a>
                            @endcan
                            @can('permission_edit')
                            <a href="{{ route('permisos.edit', $permission->id) }}" class="btn btn-warning"><i
                                class="material-icons">edit</i></a>
                            @endcan
                            @can('permission_destroy')
                            <form action="{{ route('permisos.destroy', $permission->id) }}" method="POST"
                              style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                                <i class="material-icons">close</i>
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