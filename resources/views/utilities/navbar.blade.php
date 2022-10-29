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
                    <a class="nav-link mx-2" href="{{ route('login') }}">
                        <h5 class="bn">
                            INICIAR SESION <i class=""></i><ion-icon name="person"></ion-icon>
                        </h5>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>