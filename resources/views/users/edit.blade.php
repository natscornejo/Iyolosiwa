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
                        <form method="POST" action="{{ route('usuarios.update') }}">
                            <!-- Token unico para enviar la informacion -->
                            {{ csrf_field()}}
                            {{ method_field('PUT')}}

                            <div class="form-floating mb-3">
                            	<label for="floatingInput">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('email', $user->name) }}" required autocomplete="name" autofocus>
            						@error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->firts('name') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="font-20">
                                <span class="badge badge-light-success badge-pill">Role</span>
                            </div>

                            <div class="form-floating mb-3">
                            	<label for="floatingTextarea">Correo</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert" >
                                        <strong>{{ $errors->firts('email') }}</strong>
                                    </span>
                                @enderror   
                            </div>

                            <div class="form-floating mb-3">
                                <label for="floatingInput">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Ingresar nueva contraseña en caso de modificarlar" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->firts('password') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="row">
                                <label for="" class="col-sm2 col-form-label">
                                    <span class="form-group">
                                        <table class="table">
                                            <tbody>
                                                @foreach ($roles as $id => $role)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="role[]" value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : ''}}>
                                                                <span class="form-check-sign">
                                                                    <span class="check" value= ""></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $role }}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </span>                                    
                                </label>
                            </div>

                            <div class="form-floating">
                                <a href="{{ route('usuarios.index') }}" class="mb-3 btn btn-outline-danger">
                                    Cancelar
                                </a>
                                <button class="mb-3 btn btn-warning" type="submit">Actualizar información</button>
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