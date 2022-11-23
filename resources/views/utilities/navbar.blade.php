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

            <!-- Dropdown -->
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item mx-2">
                    <div class="nav-link mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            @guest
                            <h5>
                                ACCESO <i class=""></i><ion-icon name="person"></ion-icon>
                            </h5>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h5>{{ Auth::user()->name }}</h5>
                                    </a>

                                    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">

                                        <div class="mb-3">
                                            <label for="email" class="form-label text-md-end tituloDD">¡Hola!</label>
                                        </div>

                                        <a class="dropdown-item" href="{{ route('Dashboard') }}">
                                            <h5 class="bn">
                                                Dashboard
                                            </h5>
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </a>

                        <div class="dropdown-menu p-4">

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" for="floatingInput" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ejemplo@correo.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email" class="form-label" id="floatingInputGrid"><h5>Correo</h5></label>
                            </div>

                            <div class="form-floating mb-3">
                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" for="floatingInput" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password" class="form-label" id="floatingInputGrid"><h5>Contraseña</h5></label>
                            </div>

                            <!-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember"><h6>Recordar información de acceso</h6></label>
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-warning btnLog"><h4>Iniciar sesión</h4></button>

                        </form>
                        </div>
                        
                    </div>
                </li>
            </ul>
            <!-- Dropdown -->
        </div>
    </div>
</nav>