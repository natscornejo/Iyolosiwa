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

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
               <div class="swiper-slide" >
                    <img src="img/Inicio/112.jpg">
                </div>
                <div class="swiper-slide" >
                    <img src="img/Inicio/p2.jpg">
                </div>
                <div class="swiper-slide" >
                    <img src="img/Inicio/p3.jpg">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Nosotros -->
        <div class="container espacio1">
             <hr>
            <div class="row align-items-start">
                <div class="col-sm-4 ">
                    <h1>Nosotros</h1>

                </div>
                <div class="col-sm-8 ">
                    <p class="textos">Iyolosiwa está conformado por facilitadoras: Hilda, Mary, Julia; actores de aprendizaje: niñas, niños, adolescentes y madres de familia; y Servicio Social por parte de la Ibero León y La Universidad De La Salle, además de alumnos de preparatoria del Instituto Jassá.  </p>
              
                    <p class="textos">El trabajo realizado dentro de la institución consiste en acompañamiento psicológico individual y familiar, regularizaciones en actividades escolares, talleres disciplinarios y psicoeducativos, juegos cooperativos y el espacio de ludoteca que ayuda en la motricidad y desarrollo cognitivo de los niños y niñas. </p>
                </div>
            </div>
        </div>

        <!-- Noticias -->
        <div class="container espacio2">
            <div class="row">
                <div class="card col-4">
                    <img src="img/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                            <p class="card-text textos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card col-4">
                    <img src="img/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title textos">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card col-4">
                    <img src="img/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                            <p class="card-text textos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
           </div>
        </div>

        <!-- NuestroTrabajo -->
        <div class="container espacio2">
            <div class="row align-items-start">
                <div class="col-sm-4 ">
                    <h1>Nuestro trabajo</h1>
                    <br>
                      <p class="textos">El trabajo realizado dentro de la institución consiste en acompañamiento psicológico individual y familiar, regularizaciones en actividades escolares, talleres disciplinarios y psicoeducativos, juegos cooperativos y el espacio de ludoteca que ayuda en la motricidad y desarrollo cognitivo de los niños y niñas. </p>

                      <p class="textos">Aunado a lo anterior, la labor de la institución se basa en la formación de una red de apoyo que genera una comunidad en la que las personas se concientizan en el cuidado de sí mismos, el medio ambiente y los otros, ayudando a disminuir las problemáticas de la colonia.  </p>
                </div>
                <div class="col-sm-8 ">        
                    <main class="main">
                        <section class="galeriainicio">
                            <figure class="galeria_inicio galeria_inicio--g1">
                                <img src="{{ asset('img/inicio/i2.jpg') }}" class="galeria_in" >
                            </figure>
                            <figure class="galeria_inicio galeria_inicio--g2">
                                <img src="{{ asset('img/inicio/i4.jpg') }}" class="galeria_in">
                            </figure>
                            <figure class="galeria_inicio galeria_inicio--g3">
                                <img src="{{ asset('img/inicio/i1.jpg') }}" class="galeria_in">
                            </figure>
                            <figure class="galeria_inicio galeria_inicio--g4">
                                <img src="{{ asset('img/inicio/i3.jpg') }}" class="galeria_in">
                            </figure>
                        </section>
                    </main>
                </div>
            </div>
        </div>

        <!-- Background image -->
          <div
            class=" text-center bg-image"
            style="
              background-image: url('img/inicio/5.jpg');
              height: 500px;

            "
          >
            <div class="mask col-sm-6" >
              <div class="  ">
                <div class=" text-white">
                  <h1 class="mb-6">"Tus acciones hoy, mueven a un millón"</h1>
                  <a class="btn btn-outline-light btn-lg"  href="{{ route('Donaciones') }}" role="button"
                  >Donar</a
                  >
                </div>
              </div>
            </div>
          </div>
        <!-- Background image -->

@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection