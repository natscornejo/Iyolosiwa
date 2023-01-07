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
                <img src="img/testimonios/pt3.jpg">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <section id="peli1">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo1();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/TK6coWj_oIo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>

    <section id="peli2">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo2();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/ypGhjVI4vYE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

    </section>

    <section id="peli3">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo3();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/HkLoqDCX3Zo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

    </section>

    <section id="peli4">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo4();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500"src="https://www.youtube.com/embed/DJ8vCUm1NSA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>

    <section id="peli5">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo5();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/DyxFoBCRWJM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

    </section>

    <section id="peli6">
        <div class="mov">
            <div class="disenoBtn">
                <button onclick="cerrarvideo6();"><img src="img/cancelar.png"></button>
            </div>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/6vmxVOpS2rE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>

    <div class="container espacio1 col-lg-12">
        <!-- Galeria -->
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
                <figure onclick="abrirvideo4()" class="gallery__picture4 gallery__picture--g4">
                    <img src="{{ asset('img/testimonios/e4.jpg') }}" class="gallery__img">
                </figure>
                <figure onclick="abrirvideo5()" class="gallery__picture5 gallery__picture--g5">
                    <img src="{{ asset('img/testimonios/e2.jpg') }}" class="gallery__img">
                </figure>
                <figure onclick="abrirvideo6()" class="gallery__picture6 gallery__picture--g6">
                    <img src="{{ asset('img/testimonios/e6.jpg') }}" class="gallery__img">
                </figure>
            </section>
        </main>
        <!-- Galeria -->
    </div>


    <div class="container espacio2 ">
        <div class="row align-items-start">
            <div class="container  col-sm-5">
                <h2>Voluntariado</h2>
                <p>En Iyolosiwa, A.C. creemos y queremos que la juventud tenga cauces y construya experiencias concretas de
                    servicio para vivir su compromiso en la transformación de la realidad de los menos favorecidos.
                </p>
                <p>
                    En Educación Popular Iyolosiwa A.C. las y los voluntarios, se comprometen a colaborar en reciprocidad y
                    corresponsabilidad en los programas educativos de la organización aportando sus conocimientos y
                    especialidades al equipo y a la gente del lugar.
                </p>
                <p>Esta oportunidad les posibilita fortalecer, encauzar y promover el compromiso solidario con las personas
                    menos favoricidas para colaborar con ellos en la construcción de alternativas de vida digna y fraterna.
                    La experiencia de voluntariado puede ser de un año, 6 meses o un mes durante el verano.</p>
            </div>

            <div class="col-sm-7 ">
                <main class="main">
                    <section class="galeriav">
                        <figure class="galeria_v galeria_v--g1">
                            <img src="{{ asset('img/testimonios/v1.jpg') }}" class="galeria_voluntariado">
                    </section>
                </main>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5  espacio2">
        <section class="section" id="feature">
            <div class="container  ">
                <h1 style="text-align: center;">Requisitos para ser voluntario</h1>
                <br>
                <div class="row justy-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class=" text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12">1.</h1>
                            </div>
                            <p style="text-align: center;">Contar con mayoría de edad o tener carta de autorización de
                                padre o tutor.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12;">2.</h1>
                            </div>
                            <p style="text-align: center;">Entregar a la coordinación del voluntariado la ficha de
                                solicitud con foto y carta de motivaciones y expectativas de la experiencia voluntariado.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12">3.</h1>
                            </div>
                            <p style="text-align: center;">Contar con al menos dos cartas de recomendación.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12">4.</h1>
                            </div>
                            <p style="text-align: center;">Presentar certificado médico.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- / .container -->
        </section>
    </div>

    <!-- Background image -->
    <div class=" text-center bg-image" style="background-image:  url('img/servicios/82.jpg');  height: 720px;">
        <div class="mask2 col-sm-6">
            <div class="form-control">
                <div class="mb-6">
                    <label class="form-label text-md-end tituloDD">Se voluntario</label>
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
    <!-- Background image -->
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection
