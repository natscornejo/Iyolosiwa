@extends('layouts.app')

@section('contentNavBar')
    @include('utilities.navbar')
@endsection

@section('content')
    <!-- Boton arriba -->
    <div class="go-top-container">
        <div class="go-top-button">
            <i class="bi bi-chevron-up"></i>
        </div>
    </div> <!-- Boton arriba -->
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper">
            <div class="swiper-slide">
                <img src="img/contacto/c1.jpg">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div> <!-- Swiper -->
    <!-- Historia -->
    <div class="container espacio1">
        <div class="row align-items-start">
            <div class="col-sm-5 ">
                <h1>Contacto</h1>
                <p class="textos">En Iyolosiwa nos interesa tu opinión. Llena los campos y nos pondremos en contacto
                    contigo lo antes posible </p>
                <br>
                <h2>Teléfono </h2>
                <ul class="list-unstyled pl-md-5 mb-5">
                    <li class="d-flex text-black mb-2">
                        <h2><i class="bi bi-telephone-fill mr-3"></i></h2>
                        <p>+1 (222) 345 6789</p>
                    </li>
                </ul>
                <br>
                <h2>Correo </h2>
                <ul class="list-unstyled pl-md-5 mb-5">
                    <li class="d-flex text-black mb-2">
                        <h2><i class="bi bi-envelope-fill mr-3"></i></h2>
                        <p>cciyolosiwaleón@gmail.com</p>
                    </li>
                </ul>
                <br>
                <h2>Dirección </h2>
                <ul class="list-unstyled pl-md-5 mb-5">
                    <li class="d-flex text-black mb-2">
                        <h2><i class="bi bi-geo-alt-fill mr-3"></i></h2>
                        <p>Calle Apodaca Los Herrera &, Nuevo Leon, 37208 León, Gto.</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-sm-5 ">
                <div class="form-control">
                    <div class="mb-6">
                        <label class="form-label text-md-end tituloDD">Dudas o comentarios</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="naime" class="form-control" id="floatingInput" placeholder="Nombre completo">
                        <label for="floatingInput">Nombre completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingPassword" placeholder="Correo">
                        <label for="floatingPassword">Correo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="phone" class="form-control" id="floatingPassword" placeholder="Teléfono">
                        <label for="floatingPassword">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comentario</label>
                    </div>
                    <button style="text-align: center;" type="button"
                        class="btn btn-warning container-fluid mb-3">Enviar</button>
                </div>
            </div>
        </div>
    </div> <!-- Historia -->
    <!-- Mapa -->
    <div class="map-responsive">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14880.390959060383!2d-101.6611756!3d21.1882759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdec14c4988b3c0f5!2sCentro%20Comunitario%20Iyolosiwa%20Le%C3%B3n%20AC!5e0!3m2!1ses!2smx!4v1670096209796!5m2!1ses!2smx"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> <!-- Mapa -->
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection
