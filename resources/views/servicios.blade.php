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
                <img src="img/nosotros/pn2.jpg">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div> <!-- Swiper -->
    <!-- Servicios -->
    <div class="container espacio1 col-lg-12">
        <div class="container espacio2">
            <div class="row align-items-start">
                <div class="col-sm-4 ">
                    <hr>
                    <h1>Servicios</h1>
                </div>
                <div class="col-sm-8 ">
                    <p class="textos"> Iyolosiwa León ofrecemos una amplia variedad de servicios, cuyos objetivos se centran
                        en
                        fortalecer el tejido social ayudando a niños, jóvenes, mujeres y familias a mejorar sus condiciones
                        de vida.</p>
                </div>
            </div>
        </div> <!-- Servicios -->
        <!-- Galeria -->
        <a class="test" href="#horario"></a>
        <main class="main">
            <section class="salto1  galeria2">
                <figure class="galeria_servicios galeria_servicios--g1">
                    <img src="{{ asset('img/servicios/s1.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios2 galeria_servicios--g2">
                    <img src="{{ asset('img/servicios/s2.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios3 galeria_servicios--g3">
                    <img src="{{ asset('img/servicios/12.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios4 galeria_servicios--g4">
                    <img src="{{ asset('img/servicios/s4.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios5 galeria_servicios--g5">
                    <img src="{{ asset('img/servicios/s5.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios6 galeria_servicios--g6">
                    <img src="{{ asset('img/servicios/s6.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios7 galeria_servicios--g7">
                    <img src="{{ asset('img/servicios/s7.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios8 galeria_servicios--g8">
                    <img src="{{ asset('img/servicios/s8.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios9 galeria_servicios--g9">
                    <img src="{{ asset('img/servicios/s9.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios10 galeria_servicios--g10">
                    <img src="{{ asset('img/servicios/s10.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios11 galeria_servicios--g11">
                    <img src="{{ asset('img/servicios/s11.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios12 galeria_servicios--g12">
                    <img src="{{ asset('img/servicios/s12.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios13 galeria_servicios--g13">
                    <img src="{{ asset('img/servicios/s13.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios14 galeria_servicios--g14">
                    <img src="{{ asset('img/servicios/s14.jpg') }}" class="galeria_img">
                </figure>
                <figure class="galeria_servicios15 galeria_servicios--g15">
                    <img src="{{ asset('img/servicios/s15.jpg') }}" class="galeria_img">
                </figure>
            </section>
        </main> <!-- Galeria -->
        <!-- Horarios -->
        <div class="container  col-lg-12" id="horario">
            <h2>Horarios</h2>
            <table class="table table-sm table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Actividad</th>
                        <th scope="col">Día</th>
                        <th scope="col">Horario matutino</th>
                        <th scope="col">Horario vespertino</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ludoteca–Biblioteca para niños</td>
                        <td>Lunes a viernes</td>
                        <td>9:00 am - 12:00 am</td>
                        <td>4:00 pm - 6:30 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Apoyo en tareas</td>
                        <td>Lunes a jueves</td>
                        <td>9:00 am - 10:00 am</td>
                        <td>4:00 pm - 5:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lectura y escritura</td>
                        <td>Lunes a viernes</td>
                        <td>10:00 am - 11:00 am</td>
                        <td>4:00 pm - 5:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Taller de coro para niños</td>
                        <td>Lunes y jueves</td>
                        <td></td>
                        <td>4:00 pm - 6:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Juegos de mesa</td>
                        <td>Lunes a viernes</td>
                        <td>10:00 am - 11:00 am</td>
                        <td>5:00 pm - 6:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Taller de guitarra para niños</td>
                        <td>Jueves</td>
                        <td></td>
                        <td>2:00 pm - 4:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Taller de escritura</td>
                        <td>Lunes a jueves</td>
                        <td>9:00 am - 10:00 am</td>
                        <td>4:00 pm - 5:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Formacion a mujer "Amor propio"</td>
                        <td>Lunes</td>
                        <td></td>
                        <td>5:00 pm - 6:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Formación a jóvenes del servicio social</td>
                        <td>Lunes</td>
                        <td>9:00 am 10:00 am</td>
                        <td>4:00 pm - 5:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Ludoteca–Biblioteca con los niños</td>
                        <td>Lunes a viernes</td>
                        <td>9:00 am - 12:00 pm</td>
                        <td>4:00 pm - 6:30 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Inglés</td>
                        <td>Lunes, jueves y viernes</td>
                        <td>10:30 am - 12:00 pm</td>
                        <td>4:00 pm - 6:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Formación a niños sobre finazas</td>
                        <td>Martes y jueves</td>
                        <td>9:30 am - 10:30 am</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>Taller de maualidades para niños</td>
                        <td>Viernes</td>
                        <td></td>
                        <td>5:00 pm - 6:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Acompañamiento psicoterapéutico a niños, jovenes y adultos</td>
                        <td>Lunes a jueves</td>
                        <td></td>
                        <td>9:00 am - 12:00 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Danza folklórica para niñas</td>
                        <td>Martes</td>
                        <td></td>
                        <td>4:00 pm - 6:00 pm</td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- Horarios -->
    </div> <!-- Servicios -->
    <!-- Background image -->
    <div class=" text-center bg-image" style="background-image: url('img/wola4.jpg');">
        <div class="mask col-sm-6">
            <form action="{{ 'resources/views/enviar.blade.php' }}" method="post">
                <div class="form-control">
                    <div class="mb-6">
                        <label class="form-label text-md-end tituloDD">Agendar cita psicoterapéutica </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="naime" name="nombre" class="form-control" id="floatingInput"
                            placeholder="Nombre completo">
                        <label for="floatingInput">Nombre completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="correo" class="form-control" id="floatingPassword"
                            placeholder="Correo">
                        <label for="floatingPassword">Correo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="phone" name="telefono" class="form-control" id="floatingPassword"
                            placeholder="Teléfono">
                        <label for="floatingPassword">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="fecha" class="form-control" id="floatingInput"
                            placeholder="Fecha">
                        <label for="floatingInput">Fecha</label>
                    </div>
                    <select class="form-select mb-3" name="hora" aria-label="Selecciona un hora">
                        <option selected>Selecciona un hora</option>
                        <option value="9:00 a.m.">9:00 a.m.</option>
                        <option value="10:00 a.m.">10:00 a.m.</option>
                        <option value="11:00 a.m.">11:00 a.m.</option>
                        <option value="12:00 p.m.">12:00 p.m.</option>
                    </select>
                    <button style="text-align: center;" type="button"
                        class="btn btn-warning container-fluid mb-3">Enviar</button>
            </form>
        </div>
    </div> <!-- Background image -->
@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection
