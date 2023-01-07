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
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/Inicio/112.jpg">
            </div>
            <div class="swiper-slide">
                <img src="img/Inicio/p2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="img/Inicio/p3.jpg">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div> <!-- Swiper -->
    <!-- Nosotros -->
    <div class="container espacio1">
        <div class="row align-items-start">
            <div class="col-sm-4 ">
                <hr>
                <h1>Nosotros</h1>
            </div>
            <div class="col-sm-8 ">
                <p class="textos">Iyolosiwa está conformado por facilitadoras: Hilda, Mary, Julia; actores de aprendizaje:
                    niñas, niños,
                    adolescentes y madres de familia; y Servicio Social por parte de la Ibero León y La Universidad De La
                    Salle, además de alumnos de preparatoria del Instituto Jassá.</p>
                <p class="textos">El trabajo realizado dentro de la institución consiste en acompañamiento psicológico
                    individual y
                    familiar, regularizaciones en actividades escolares, talleres disciplinarios y psicoeducativos, juegos
                    cooperativos y el espacio de ludoteca que ayuda en la motricidad y desarrollo cognitivo de los niños y
                    niñas. </p>
            </div>
        </div>
    </div> <!-- Nosotros -->

    <!-- Noticias -->
    <div class="container espacio1">
        <div class="row align-items-start">
            <!-- Titulo  -->
            <div class="container">
                <div class="col-sm-4 ">
                    <hr>
                    <h1>Noticias</h1>
                </div>
                <div class="col-sm-8 ">
                </div>
            </div> <!-- Titulo  -->
        </div>
        <!-- Noticias: card group -->
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/noticia1.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Reinauguración</strong></h5>
                        <p class="textos line-clamp">Reinauguración del Centro Comunitario Iyolosiwa León A.C, en Los
                            Herrera #201,
                            col. Nuevo león, en el mes de febrero.</p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/pt3.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Consultorio medico interdisciplinario</strong></h5>
                        <p class="textos line-clamp">Proyecto interdisciplinario de salud, en donde doctores,
                            nutriólogos, psicólogos y fisioterapeutas trabajaran para mejorar la salud de familias de la
                            colonia Nuevo León. Inicio en febrero. </p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/noticias3.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Nueva sala de computación</strong></h5>
                        <p class="textos line-clamp">Construcción de la sala de computación Iyolosiwa para
                            implementar cursos de herramientas básicas digitales para el año 2023.</p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/e1.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Pastorela 2022</strong></h5>
                        <p class="textos line-clamp">Pastorela de los niños el día 9 de Diciembre a las 6:00 pm.</p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/e2.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>¡Se festeja el Dia de Reyes Magos en Iyolosiwaº!</strong>
                        </h5>
                        <p class="textos line-clamp">Partida de rosca de reyes, 6 de enero de 2023.</p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/noticia1.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Reinauguración</strong></h5>
                        <p class="textos line-clamp">Reinauguración del Centro Comunitario Iyolosiwa León A.C, en Los
                            Herrera #201,
                            col. Nuevo león, en el mes de febrero.</p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/pt3.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Consultorio medico interdisciplinario</strong></h5>
                        <p class="textos line-clamp">Proyecto interdisciplinario de salud, en donde doctores,
                            nutriólogos, psicólogos y fisioterapeutas trabajaran para mejorar la salud de familias de la
                            colonia Nuevo León. Inicio en febrero. </p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
            <!-- Tarjeta -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/inicio/noticias3.jpg" style="height: 200px;" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title truncate"><strong>Nueva sala de computación</strong></h5>
                        <p class="textos line-clamp">Construcción de la sala de computación Iyolosiwa para
                            implementar cursos de herramientas básicas digitales para el año 2023.</p>
                    </div>
                    <div class="card-body text-end">
                        <a href="#" class="btn btn-warning btn-sm">Leer noticia</a>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Publicado el: Fecha</small>
                    </div>
                </div>
            </div> <!-- Tarjeta -->
        </div> <!-- Noticias: card group -->
    </div> <!-- Noticias -->

    <!-- NuestroTrabajo -->
    <div class="container espacio1">
        <div class="row align-items-start">
            <div class="col-sm-4 ">
                <hr>
                <h2>Nuestro trabajo</h2>
                <br>
                <p class="textos">El trabajo realizado dentro de la institución consiste en acompañamiento psicológico
                    individual y
                    familiar, regularizaciones en actividades escolares, talleres disciplinarios y psicoeducativos, juegos
                    cooperativos y el espacio de ludoteca que ayuda en la motricidad y desarrollo cognitivo de los niños y
                    niñas. </p>
                <p class="textos">Aunado a lo anterior, la labor de la institución se basa en la formación de una red de
                    apoyo que genera
                    una comunidad en la que las personas se concientizan en el cuidado de sí mismos, el medio ambiente y los
                    otros, ayudando a disminuir las problemáticas de la colonia. </p>
            </div>
            <div class="col-sm-8 ">
                <main class="main">
                    <section class="galeriainicio">
                        <figure class="galeria_inicio galeria_inicio--g1">
                            <img src="{{ asset('img/inicio/i2.jpg') }}" class="galeria_in">
                        </figure>
                        <figure class="galeria_inicio galeria_inicio--g2">
                            <img src="{{ asset('img/inicio/i4.jpg') }}" class="galeria_in">
                        </figure>
                        <figure class="galeria_inicio galeria_inicio--g3">
                            <img src="{{ asset('img/inicio/2.jpg') }}" class="galeria_in">
                        </figure>
                        <figure class="galeria_inicio galeria_inicio--g4">
                            <img src="{{ asset('img/inicio/pd5.jpg') }}" class="galeria_in">
                        </figure>
                    </section>
                </main>
            </div>
            <!-- Galeria -->
        </div>
    </div> <!-- NuestroTrabajo -->
    <!-- Background image -->
    <div class=" text-center bg-image" style="background-image: url('img/wola4.jpg'); height: 500px;">
        <div class="mask col-sm-6">
            <div class="  ">
                <div class=" text-white">
                    <h1 class="mb-6">"Tus acciones hoy, mueven a un millón"</h1>
                    <a class="btn btn-warning btn-lg" href="{{ route('Donaciones') }}" role="button">Donar</a>
                </div>
            </div>
        </div>
    </div> <!-- Background image -->
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection
