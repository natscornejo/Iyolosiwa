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
    </div>

    <!-- Background image -->
    <div class=" text-center bg-image" style="background-image: url('img/donaciones/pd5.jpg'); height: 715px;">
        <div class="mask2 col-sm-6" >
            <div class="  ">
                <div class=" text-white">
                    <h1 class="mb-6">"Tus acciones hoy, mueven a un millón"</h1>
                    <a class="btn btn-outline-light btn-lg"  href="{{ route('Donaciones') }}" role="button"
              >Donar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Galeria -->
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
                            <p class="textos">Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <h4 class="mb-2">Recognised for excellence</h4>
                            <p class="textos">We've been awarded for our high rate of customer satisfaction.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <h4 class="mb-2">Compare the best</h4>
                            <p class="textos">We only compare market leaders with a reputation for service quality.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="bi bi-award"></i>
                            </div>
                            <h4 class="mb-2">Premium Services</h4>
                            <p class="textos">We only compare market leaders with a reputation for service quality.</p>
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