@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/img/background/bg-login.jpg');">
            <div class="card">
                <div class="menu p-4">
                    <div class="mb-3">
                        <label for="email" class="form-label text-md-end tituloDD">Iniciar sesión</label>
                    </div>
                    <div class="mb-3 mismalinea">
                        <label for="email" class="form-label preguntaDD">¿Todavía no tienes cuenta? </label>
                        <a class="btn linkDD" href="{{ route('register') }}">Crear aqui</a>
                    </div>
                    <form class="" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3 ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                for="floatingInput" name="email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus placeholder="ejemplo@correo.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email" class="form-label" id="floatingInputGrid">
                                <h5>Correo</h5>
                            </label>
                        </div>
                        <div class="form-floating mb-3">

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" for="floatingInput"
                                name="password" required autocomplete="current-password" placeholder="Contraseña">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password" class="form-label" id="floatingInputGrid">
                                <h5>Contraseña</h5>
                            </label>
                        </div>
                        <!-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember"><h6>Recordar información de acceso</h6></label>
                                </div>
                            </div> -->
                        <button type="submit" class="btn btn-warning btnLog">
                            <h4>Iniciar sesión</h4>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
