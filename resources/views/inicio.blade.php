<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Incio</title>

            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

             <!-- Bootstrap Icons-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

            <!-- Swiper -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

            <!-- Stylesheet -->
            <link rel="stylesheet" type="text/css" href="style.css">

        </head>
    <body>

    <!-- Cotainer genral -->
    <div class="container-fluid">

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
                            <a class="nav-link h5" href="" target="blank">
                                <h5 class="bn">
                                    INICIAR SESION <i class=""></i><ion-icon name="person"></ion-icon>
                                </h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?fruit)">Slide 1</div>
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?dog)">Slide 2</div>
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?plants)">Slide 3</div>
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?kids)">Slide 4</div>
                <div class="swiper-slide" ><img src="{{ asset('img/manos.jpg') }}"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Nosotros -->
        <div class="primera-seccion">
            <div class="row align-items-start">
                <div class="col-sm-4 bgcolor">
                    <h1>Nosotros</h1>
                </div>
                <div class="col-sm-8 bgcolor2">
                    <h3>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Corrupti a tenetur quas perspiciatis error alias, in sit ipsum est deleniti iusto dicta non earum! Voluptas, unde pariatur laboriosam voluptates dolorem?
                    Non at labore libero dignissimos, sit ad eos natus repellendus officia vel repudiandae accusantium! Error perspiciatis non ipsa corrupti maiores mollitia eum, magni repudiandae blanditiis repellendus tempore quaerat deleniti ea!</h3>
                </div>
            </div>
        </div>

        <!-- Noticias -->
        <div class="secciones">
            <div class="row align-items-start">
                <div class="col-sm-4 bgcolor">
                    <h1>Noticias</h1>
                </div>
                <div class="col-sm-8 bgcolor2">
                    <h3>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Corrupti a tenetur quas perspiciatis error alias, in sit ipsum est deleniti iusto dicta non earum! Voluptas, unde pariatur laboriosam voluptates dolorem?
                    Non at labore libero dignissimos, sit ad eos natus repellendus officia vel repudiandae accusantium! Error perspiciatis non ipsa corrupti maiores mollitia eum, magni repudiandae blanditiis repellendus tempore quaerat deleniti ea!</h3>
                </div>
            </div>
        </div>


        <!-- NuestroTrabajo -->
        <div class="secciones">
            <div class="row align-items-start">
                <div class="col-sm-4 bgcolor">
                    <h1>Nuestro Trabajo</h1>
                </div>
                <div class="col-sm-8 bgcolor2">
                    <h3>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Corrupti a tenetur quas perspiciatis error alias, in sit ipsum est deleniti iusto dicta non earum! Voluptas, unde pariatur laboriosam voluptates dolorem?
                    Non at labore libero dignissimos, sit ad eos natus repellendus officia vel repudiandae accusantium! Error perspiciatis non ipsa corrupti maiores mollitia eum, magni repudiandae blanditiis repellendus tempore quaerat deleniti ea!</h3>
                </div>
            </div>
        </div>

        <!-- Seccion donar con imagen -->
        <div class="container">
            <div class="content">
                
            </div>
        </div>


    <!-- Footer -->
    <footer class="footer">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn socialMediaLinks" href="#!" role="button">
                    <i class="bi bi-facebook"></i>
                </a>

                <!-- YouTube -->
                <a class="btn socialMediaLinks" href="#!" role="button">
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
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Inicio</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Noticias</a>
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

        <!-- Ionicos -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- Fontawesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <script>
            // Swiper
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                },

                loop: true,

                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
            });
        </script>
        </div>
    </body>
</html>
