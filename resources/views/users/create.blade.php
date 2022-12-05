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
                                <li class="breadcrumb-item active">Crear usuarios</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Crear usuario</h4>
                    </div>
                </div>
            </div>     
        </div>

        <!-- Formulario -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h4 class="header-title">Nuevo usuario</h4>
                            <p class="sub-header">
                                Hola, en este espacio se crearan los usuarios nuevos, sin la necesidad de cerrar sesión.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('usuarios.store') }}">
                            <!-- Token unico para enviar la informacion -->
                            {{ csrf_field()}}

                            <div class="form-floating mb-3">
                            	<label for="floatingInput">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre y Apellido">
            						@error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="font-20">
                                <span class="badge badge-light-success badge-pill">Role</span>
                            </div>

                            <div class="form-floating mb-3">
                            	<label for="floatingTextarea">Correo</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@correo.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>

                            <div class="form-floating mb-3">
                                <label for="floatingInput">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Debe de contener 8 digitos">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-floating mb-3">
                                    <label for="floatingInput">Roles</label>
                                    <div class="form-group">
                                        <table class="table">
                                            <tbody>
                                                @foreach ($roles as $id => $role)
                                                <tr>
                                                    <td>
                                                        <div class="from-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $id }}">
                                                                <span class="form-check-sign">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    {{ $role }}
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-floating">
                                <a href="{{ route('usuarios.index') }}" class="mb-3 btn btn-outline-danger">
                                    Cancelar
                                </a>
                                <button class="mb-3 btn btn-warning" type="submit">Crear usuario</button>
                            </div>

                            <div class="form-group card-footer">
                                <h7>
                                    Esta noticia sera publicada en la pagina principal de Iyolosiwa
                                </h7>
                            </div>
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