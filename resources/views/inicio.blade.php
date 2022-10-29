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

        @include('utilities.navbar')

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

        @include('utilities.footer')

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
