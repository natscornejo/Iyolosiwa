<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title mt-2">Panel administrativo</li>

                <li>
                    <a href="{{ route('Dashboard') }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-users"></i>
                        <span> Usuarios </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-newspaper-o"></i>
                        <span> Noticias </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                    <li>
                            <a href="{{ route('noticias.create')}}">Crear</a>
                        </li>
                        <li>
                            <a href="{{ route('noticias.index')}}">Ver todas</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-title">Pagina principal</li>
                <li>
                    <a href="">
                        <i class="la la-home"></i>
                        <span> Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="la la-users"></i>
                        <span> Nosotros</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="la la-info-circle"></i>
                        <span> Servicios</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="la la-heart"></i>
                        <span> Voluntariado</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="la la-usd"></i>
                        <span> Donaciones</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="la la-phone"></i>
                        <span> Contacto</span>
                    </a>
                </li>

                <li class="menu-title">Extras</li>

                <li>
                    <a href="{{ route('mapa')}}">
                        <i class="la la-home"></i>
                        <span>Mapa del sitio</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->