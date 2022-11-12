<!-- Footer -->
    <footer class="footer">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn socialMediaLinks" href="https://www.facebook.com/IyoloLeon/" role="button">
                    <i class="bi bi-facebook"></i>
                </a>

                <!-- YouTube -->
                <a class="btn socialMediaLinks" href="https://www.youtube.com/channel/UCeppMtHNDUjAcjl5Riq3-kA/videos?app=desktop&view=0&sort=dd&shelf_id=0" role="button">
                    <i class="bi bi-youtube"></i>
                </a>
            </section>

            <!-- Section: Text -->
            <section class="mb-4">
                <h5>
                    Iyolosiwa León
                </h5>
            </section>

            <!-- Section: Links -->
            <section class="p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3">
                        <h5 class="text-uppercase">Inicio</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('noticias.index')}}" class="text-white">Noticias</a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-3">
                        <h5 class="text-uppercase">Compañia</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('Nosotros') }}" class="text-white">Sobre nosotros</a>
                            </li>
                            <li>
                                <a href="{{ route('Socios') }}" class="text-white">Socios</a>
                            </li>
                            <li>
                                <a href="{{ route('Tycondiciones') }}" class="text-white">Terminos y condiciones</a>
                            </li>
                            <li>
                                <a href="{{ route('Nosotros') }}" class="text-white">Politicas de privacidad</a>
                            </li>
                            <li>
                                <a href="{{ route('Contacto') }}" class="text-white">Contactanos</a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-3">
                        <h5 class="text-uppercase">Aqui va algo</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Otro link</a>
                            </li>
                        </ul>
                    </div>


                    <!--Grid column-->
                    <div class="col-lg-3">
                        <h5 class="text-uppercase">Cuenta</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('register') }}" class="text-white">Registrarse</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="text-white">Iniciar sesión</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
        </div>

        <!-- Copyright -->
        <div class="container2">
            <p class="copyright">
                Iyolosiwaleon.org © 2022 Copyright
            </p>
        </div>
    </footer>
<!-- Footer -->