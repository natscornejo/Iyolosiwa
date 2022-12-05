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

    <!-- Formulario -->
    <div class="row">
        <div class="col-12">
            <div class="card p-2">
                <div class="card-body">
                    <div class="">
                        <h4 class="header-title">Nuevo rol</h4>
                        <p class="sub-header">
                            Hola, en este espacio se crearan los roles que estan vinculados con los permisos
                        </p>
                    </div>
                    <form method="POST" action="{{ route('roles.store')}}">
                        {{ csrf_field()}}
                        <div class="row"> <!-- Aqui empieza el row -->
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <label for="floatingInput">Nombre del rol</label>
                                    <input type="text" class="form-control" id="floatingInput" name="name" required="" autofocus>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <label for="floatingInput">Permisos</label>
                                	<div class="col-6">
                                		<div class="form-group">
                                			<table class="table">
                                				<tbody>
                                					@foreach ($permissions as $id => $permission)
                                					<tr>
                                						<td>
                                							<div class="form-check">
                                								<label class="form-check-label">
                                									<input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $id }}">
                                									<span class="form-check-sign">
                                										<span class="check"></span>
                                									</span>
                                								</label>
                                							</div>
                                						</td>

                                						<td>
                                							{{ $permission}}
                                						</td>
                                					</tr>
                                					@endforeach
                                				</tbody>
                                			</table>
                                		</div>
                                	</div>
                                </div>
                            </div>
                        </div> <!-- Aqui termina el row -->

                        <div class="row"> <!-- Aqui empieza el row -->
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <a href="{{ route('roles.index') }}" class="btn btn-info btn-xs waves-effect mb-2 waves-light">
                                        <i class="fas fa-window-close"></i> Cancelar
                                    </a>
                                    <button class="btn btn-outline-warning btn-xs waves-effect mb-2 waves-light" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar">
                                        <i class="fas fa-check"></i>Crear permiso
                                    </button>
                                </div>

                                <div class="form-group card-footer">
                                    <h7>
                                        Esta noticia sera publicada en la pagina principal de Iyolosiwa
                                    </h7>
                                </div>
                            </div>
                        </div> <!-- Aqui termina el row -->


                    </form>
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