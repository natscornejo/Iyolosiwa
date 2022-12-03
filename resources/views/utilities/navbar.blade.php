<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success p-3 fixed-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('Inicio') }}">
            <div class="logotamano" id="logoAni">
                <img src="img/logomini.png">
            </div>
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
                    <a class="nav-link mx-2 dropdown espacio">
                        <h5 class="bn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            ACCESO <i class=""></i><ion-icon name="person"></ion-icon>
                        </h5>

                        <div class="dropdown-menu p-4">

                            <div class="mb-3">
                                <label for="email" class="form-label text-md-end tituloDD">Iniciar sesión</label>
                            </div>

                            <div class="mb-3 mismalinea">
                                <label for="email" class="form-label preguntaDD">¿Todavía no tienes cuenta? </label>
                                <button class="btn linkDD" href="{{ route('register') }}">Crear aqui</button>
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

                                <button type="submit" class="btn btn-warning btnLog"><h4>Iniciar sesión</h4></button>
                            </form>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>