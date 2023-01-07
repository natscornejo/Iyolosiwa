<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/images/users/Avatar-Lg-BWBLK-1.jpg') }}" alt="user-image"
                    class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0 text-white">
                        ¡Bienvenido!
                    </h5>
                </div>
                <!-- item-->

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Mi cuenta</span>
                </a>
                <!-- item-->

                <!-- item-->
                <a href="{{ route('Inicio') }}" class="dropdown-item notify-item">
                    <i class="fe-home"></i>
                    <span>Pagina principal</span>
                </a>
                <!-- item-->

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Configuración</span>
                </a>
                <!-- item-->

                <div class="dropdown-divider"></div>
                <!-- item-->
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fe-log-out"></i>
                    {{ __('Cerrar sesión') }}
                </a>
                <!-- item-->

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>

        <!-- CONFIG -->
        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>
        <!-- CONFIG -->
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ route('Dashboard') }}" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="40">
                <!-- <span class="logo-lg-text-light">Iyolosiwa</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">Y</span> -->
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="25">
            </span>
        </a>
    </div>
    <!-- LOGO -->

    <!-- Hamburger menu -->
    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </li>
    </ul>
    <!-- Hamburger menu -->
</div>
<!-- Topbar Start -->
