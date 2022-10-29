<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success p-3 fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('Inicio') }}">
            <h5 class="bn">
                IYOLOSIWA
            </h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="{{ route('Inicio') }}">
                        <h5 class="bn">INICIO</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('Nosotros') }}">
                        <h5 class="bn">
                            NOSOTROS
                        </h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('Servicios') }}">
                        <h5 class="bn">
                            SERVICIO
                        </h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('Voluntariado') }}">
                        <h5 class="bn">
                            VOLUNTARIADO
                        </h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('Donaciones') }}">
                        <h5 class="bn">
                            DONACIONES
                        </h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('Contacto') }}">
                        <h5 class="bn">
                            CONTACTO
                        </h5>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item mx-2">
                    <a class="nav-link mx-2 dropdown">
                        <h5 class="bn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            INICIAR SESION <i class=""></i><ion-icon name="person"></ion-icon>
                        </h5>
                        <form class="dropdown-menu p-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label text-md-end"><h5>Correo electronico</h5></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ejemplo@correo.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="password" class="form-label text-md-end"><h5>Contraseña</h5></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember"><h6>Recordar información de acceso</h6></label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning"><h4>Iniciar sesión</h4></button>

                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>