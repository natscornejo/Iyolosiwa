<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Iyolosiwa</title>

    <!-- App favicon ----------------------------------------------------------------->
    <!-- WEB-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
    <!-- Apple-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon-180x180.png') }}">
    <!-- Android, Chrome -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="194x194" href="{{ asset('assets/images/favicons/favicon-194x194.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicons/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
    <!-- Safari -->
    <link rel="mask-icon" href="{{ asset('assets/images/favicons/safari-pinned-tab.svg') }}" color="#2a7560">
    <meta name="msapplication-TileColor" content="#2a7560">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#2a7560">
    <!-- App favicon ----------------------------------------------------------------->
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- AdminLTE -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"> -->


</head>
<body>
    <div class="container-fluid" id="app">
        
        @yield('contentNavBar')

        <main class="">
            @yield('content')
        </main>
    </div>


    <div class="container-fluid">
        @yield('contentFooter')
    </div>

    <!-- Ionicos -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>

        // Boton hacia arriba

        window.onscroll = function(){
            if(document.documentElement.scrollTop > 500) {
                document.querySelector('.go-top-container')
                .classList.add('showup');
            }
            else{
                document.querySelector('.go-top-container')
                .classList.remove('showup');
            }
        }

        $(".go-top-container").click(function(){
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        });

        // Galeria de video
        function cerrarvideo1(){
            $("#peli1").hide();
        }

        function abrirvideo1(){
            $("#peli1").show();
        }

        function cerrarvideo2(){
            $("#peli2").hide();
        }

        function abrirvideo2(){
            $("#peli2").show();
        }

           function cerrarvideo3(){
            $("#peli3").hide();
        }

        function abrirvideo3(){
            $("#peli3").show();
        }

            function cerrarvideo4(){
            $("#peli4").hide();
        }

        function abrirvideo4(){
            $("#peli4").show();
        }

            function cerrarvideo5(){
            $("#peli5").hide();
        }

        function abrirvideo5(){
            $("#peli5").show();
        }

            function cerrarvideo6(){
            $("#peli6").hide();
        }

        function abrirvideo6(){
            $("#peli6").show();
        }

        // Galeria
         $('.galeria_n').click(function(){

            $('html,body').animate({
                scrollTop: $("#Historia").offset().top
            },50);
         });

         $('.galeria_n2').click(function(){

            $('html,body').animate({
                scrollTop: $("#Mision").offset().top -100
            },50);
         });

         $('.galeria_n3').click(function(){

            $('html,body').animate({
                scrollTop: $("#Valores").offset().top -100
            },50);
         });

          $('.salto1').click(function(){

            $('html,body').animate({
                scrollTop: $("#horario").offset().top -100
            },50);
         });

        //Animacion Logo
        $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {  
            $('.logotamano').addClass('shrink');
          } else {
            $('.logotamano').removeClass('shrink');
          }
        });

        //Close alerts automatically
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);

        // Tooltips
        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
            )
        const tooltipList = [...tooltipTriggerList].map(
            tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl
                )
            )

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
</body>
</html>
