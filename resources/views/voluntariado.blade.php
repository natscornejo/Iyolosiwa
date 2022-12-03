@extends('layouts.app')

@include('utilities.navbar')


@section('content')
     <!-- Boton arriba -->
    <div class="go-top-container">
        <div class="go-top-button">
            <i class="bi bi-chevron-up"></i>
        </div>
    </div>
       
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper">
           <div class="swiper-slide" >
                <img src="img/testimonios/pt3.jpg">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Videos -->
    <section id="peli1">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo1();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/45BD4u-6TkI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>  
    </section>

    <section id="peli2">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo2();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/oRR9gMFl99c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section id="peli3">
        <div class="mov">
          <div class="disenoBtn">
                <button onclick="cerrarvideo3();"><img src="img/cancelar.png"></button>
            </div>
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/OQIrKh5NjBo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section id="peli4">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo4();"><img src="img/cancelar.png"></button>
            </div>
           <iframe width="100%" height="500"src="https://www.youtube.com/embed/NB4QlDosCjU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section id="peli5">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo5();"><img src="img/cancelar.png"></button>
            </div>
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/BPD3XjejN3k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section id="peli6">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo6();"><img src="img/cancelar.png"></button>
            </div>
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/68OSy6qSnmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <!-- Videos -->

    <!-- Galeria -->
    <div class="container espacio1 col-lg-12">
        <main class="main">
            <div class="espaciota">
                <h1>Testimonios</h1>
            </div>

            <section class="gallery">
                <figure onclick="abrirvideo1()" class="gallery__picture gallery__picture--g1">
                    <img src="{{ asset('img/testimonios/e5.jpg') }}" class="gallery__img">
                </figure>

                <figure onclick="abrirvideo2()" class="gallery__picture2 gallery__picture--g2">
                    <img src="{{ asset('img/testimonios/e1.jpg') }}" class="gallery__img">
                </figure>

                <figure onclick="abrirvideo3()" class="gallery__picture3 gallery__picture--g3">
                    <img src="{{ asset('img/testimonios/e3.jpg') }}" class="gallery__img">
                </figure>

                <figure  onclick="abrirvideo4()" class="gallery__picture4 gallery__picture--g4">
                    <img src="{{ asset('img/testimonios/e4.jpg') }}" class="gallery__img">
                </figure>

                <figure  onclick="abrirvideo5()" class="gallery__picture5 gallery__picture--g5">
                    <img src="{{ asset('img/testimonios/e2.jpg') }}" class="gallery__img">
                </figure>

                <figure  onclick="abrirvideo6()" class="gallery__picture6 gallery__picture--g6">
                    <img src="{{ asset('img/testimonios/e6.jpg') }}" class="gallery__img">
                </figure>
            </section>
        </main>
    </div>
    <!-- Galeria -->

    <!-- Transparencia -->
    <div class="container-fluid pt-5">
        <section class="section" id="feature">
            <div class="container">
                <div class="row justy-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-hand-thumbs-up"></i>
                            </div>
                            <h4 class="mb-2">The right advice</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <h4 class="mb-2">Recognised for excellence</h4>
                            <p>We've been awarded for our high rate of customer satisfaction.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <h4 class="mb-2">Compare the best</h4>
                            <p>We only compare market leaders with a reputation for service quality.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-award"></i>
                            </div>
                            <h4 class="mb-2">Premium Services</h4>
                            <p>We only compare market leaders with a reputation for service quality.</p>
                        </div>
                    </div>
                </div>
            </div> <!--container -->
        </section>  
    </div>

    <!-- Background image -->
    <div class=" text-center bg-image" style="background-image: url('img/servicios/82.jpg');height: 500px;">
        <div class="mask2 col-sm-6" >
            <div class="  ">
                <div class=" text-white">
                    <h1 class="mb-6">Has tu voluntariado con nosotros</h1>
                    <a class="btn btn-outline-light btn-lg"  href="{{ route('Donaciones') }}" role="button"
                  >Donar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection