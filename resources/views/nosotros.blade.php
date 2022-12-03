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

    <!-- Galeria -->
    <main class="main">
        <section class="galeria">
            <figure class=" galeria_n galeria_n--g1">
                <img src="{{ asset('img/nosotros/n1.jpg') }}" class="nosotros__img">
            </figure>

            <figure class="galeria_n2 galeria_n--g2">
                <img src="{{ asset('img/nosotros/n2.jpg') }}" class="nosotros__img">
            </figure>

            <figure class="galeria_n3 galeria_n--g3">
                <img src="{{ asset('img/nosotros/n3.jpg') }}" class="nosotros__img">
            </figure>
        </section>
    </main>
    <!-- Galeria -->

    <!-- Historia -->
    <div class="container espacio1" id="Historia">
        <div class="row align-items-start">
           <div class="col-sm-7 ">
                <main class="main">
                    <section class="galeriahis">
                        <figure class="galeria_h galeria_h--g1">
                            <img src="{{ asset('img/nosotros/1.jpg') }}" class="galeria_historia">
                        </figure>
                    </section>
                </main>
            </div>

            <div class="col-sm-5 ">
                <h1>Historia</h1>

                <p class="textos">El Centro Comunitario Iyolosiwa León comenzó como una experiencia de Educación Popular en la que se crearon salas de lectura para niños y niñas, acompañadas por las RSCJ, en el año 2000. Después de 8 años, y a partir de las necesidades de la comunidad en donde sobresale la problemática del bajo nivel académico, falta de comunicación y valores, surge entonces en el año 2008 la Biblioteca, donde se comienza a trabajar buscando diferentes formas de dar solución a los problemas resaltados. </p>

                <p class="textos">En el 2010 se implementa la Ludoteca quedando como Biblioteca Ludoteca <strong>“Tejiendo la Esperanza”</strong>  Con este proyecto se buscaba apoyar en tareas, regularización escolar, brindar un espacio seguro, de contención y respeto, donde los padres de familia brindan la confianza al personal para educar a sus hijos/as. Estas actividades fueron acompañadas poco a poco con la promoción de la lectura, diversas actividades recreativas y de convivencia familiar que eran organizadas por las animadoras del espacio.</p>

                <p class="textos">Al pasar de los años y las necesidades de la comunidad se diversificaron los servicios y la atención a las personas, fue entonces que se amplió el trabajo con mujeres, jóvenes, padres y madres de familia, apoyado por jóvenes de Servicio Social que pertenecen a diferentes instituciones educativas. </p>

                <p class="textos">En el año 2019 y hasta la fecha está consolidado como Centro Comunitario Iyolosiwa León A.C., Donde se siguen desarrollando las actividades que han sido la esencia de este espacio educativo y aumentado nuevos servicios y talleres que siguen surgiendo debido a las necesidades de nuestros usuarios.</p>
            </div>
        </div>
    </div>

    <!-- Mision -->
    <div class="container espacio2" id="Mision">
        <div class="row align-items-start">
            <div class="col-sm-5 ">
                <h1>Mision</h1>
                <p class="textos">Somos una asociación civil, que desde la concepción y práctica de la Educación Popular, fortalece e impulsa procesos educativos comunitarios, que inciden en la transformación de la realidad y posibilitan vida digna en sectores de mediana y alta marginalidad.</p>
                <br><br>
                <h1>Vision</h1>
                <p class="textos">Iyolosiwa A.C. es un referente institucional especializado en educación popular que es reconocida por la calidad de su servicio educativo y su compromiso solidario con las mayorías empobrecidas; cuenta con personal capacitado, quienes desarrollan proyectos y asesoran a grupos, organizaciones y redes; interviene de manera estratégica a nivel local y regional en México; colabora y se articula con otras organizaciones en redes locales, nacionales e internacionales; cuenta con una estructura organizativa clara y funcional, así como con una administración y finanzas sólidas.</p>
            </div>
            <div class="col-sm-7  ">
                <main class="main">
                    <section class="galeriams">
                        <figure class="galeria_ms galeria_ms--g1">
                            <img src="{{ asset('img/nosotros/2.jpg') }}" class="galeria_mision">
                        </figure>          
                    </section>
                </main>
            </div>
        </div>
    </div>

    <!-- Valores -->
    <div class="container espacio2" id="Valores">
        <div class="row align-items-start">
            <div class="col-sm-7 ">
                 <main class="main">
                    <section class="galeriams">
                        <figure class="galeria_ms galeria_ms--g1">
                            <img src="{{ asset('img/nosotros/3.jpg') }}" class="galeria_mision">
                        </figure>
                    </section>
                </main>             
            </div>

            <div class="col-sm-5 ">
                <h1>Valores</h1>
                <ol class="list-group list-group-numbered list-unstyled">
                  <li class="list-item">Confianza</li>
                  <li class="list-item">Apertura</li>
                  <li class="list-item">Discernimiento</li>
                  <li class="list-item">Coherencia</li>
                  <li class="list-item">Sentido de comunidad</li>
                  <li class="list-item">Justicia</li>
                  <li class="list-item">Equidad</li>
                  <li class="list-item">Esperanza</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection
