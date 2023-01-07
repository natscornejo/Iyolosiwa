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

    <!-- Background image -->
    <div class="hola text-center bg-image" style="background-image: url('img/donaciones/pd5.jpg');">
        <div class="mascara col-sm-6">
            <div class="  ">
                <div class=" text-white">
                    <h1 class="mb-8">"Ayúdanos a que este proyecto crezca"</h1>
                    <a class="btn btn-warning btn-lg" href="https://www.paypal.com/donate/?hosted_button_id=7LGGT2ZKAJAPU"
                        role="button">Donar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Background image -->
    <div class="container-fluid pt-5">
        <section class="section" id="feature">
            <div class="container  espacio1">
                <h1 style="text-align: center;">Trasparencia</h1>
                <br>
                <div class="row justy-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class=" text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12;">+90</h1>
                            </div>
                            <h4 class="mb-2">niños</h4>
                            <p style="text-align: center;">asisten a nuestras instalaciones diariamente</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class=" text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12;">+50</h1>
                            </div>
                            <h4 class="mb-2">Familias</h4>
                            <p style="text-align: center;">apoyadas a lo largo del año</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class=" text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12;">18</h1>
                            </div>
                            <h4 class="mb-2">Talleres</h4>
                            <p style="text-align: center;">diferentes implementados en nuestras instalaciones</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class=" text-center feature-block">
                            <div class="block mb-4">
                                <h1 style="color: #FF8B12;">3,264</h1>
                            </div>
                            <h4 class="mb-2">Clases y talleres</h4>
                            <p style="text-align: center;">impartidos al año</p>
                        </div>
                    </div>
                </div>
            </div> <!-- / .container -->
        </section>
    </div>
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection
