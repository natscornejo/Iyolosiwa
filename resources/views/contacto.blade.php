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

    <!-- Historia -->
    <div class="container espacio1" id="Historia">
        <div class="row align-items-start">
            <div class="col-sm-5 ">
                <h1>Historia</h1>
                <p class="parramarg">En Iyolosiwa nos interesa tu opinión. Llena los campos y nos pondremos en contacto contigo lo antes posible </p>
                <br>

                <h2>Teléfono </h2>
                <ul class="list-unstyled pl-md-5 mb-5">        
                    <li class="d-flex text-black mb-2">
                        <h4><i class="bi bi-telephone-fill mr-3"></i></h4>
                        <p class="textos">+1 (222) 345 6789</p>
                    </li>       
                </ul>
                <br>

                 <h2>Correo </h2>
                 <ul class="list-unstyled pl-md-5 mb-5">        
                    <li class="d-flex text-black mb-2">
                        <h4><i class="bi bi-envelope-fill mr-3"></i></h4>
                        <p class="textos">cciyolosiwaleón@gmail.com</p>
                    </li>       
                </ul>
                <br>
                 <h2>Dirección </h2>
                 <ul class="list-unstyled pl-md-5 mb-5">        
                    <li class="d-flex text-black mb-2">
                        <h4><i class="bi bi-geo-alt-fill mr-3"></i></h4>
                        <p class="textos">Calle Apodaca Los Herrera &, Nuevo Leon, 37208 León, Gto.</p>
                    </li>       
                </ul>
            </div>

            <div class="col-sm-7 ">
                <main class="main">
                    <section class="galeriahis">
                        <figure class="galeria_h galeria_h--g1">
                            <img src="{{ asset('img/nosotros/1.jpg') }}" class="galeria_historia">
                        </figure>
                    </section>
                </main>
            </div>
        </div>
    </div>
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection