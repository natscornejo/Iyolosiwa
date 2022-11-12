@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')

<div class="container-fluid">
	<div class="card-group">
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Historia</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Mision</h5>
				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Vision</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
		<img src="{{ asset('img/manos.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Valores</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
	</div>

	<!-- Historia -->
    <div class="primera-seccion">
        <div class="row align-items-start">
            <div class="col-sm-5 bgcolor">
                <h1>Historia</h1>
				<p>El Centro Comunitario Iyolosiwa León comenzó como una experiencia de Educación Popular en la que se crearon salas de lectura para niños y niñas, acompañadas por las RSCJ, en el año 2000. Después de 8 años, y a partir de las necesidades de la comunidad en donde sobresale la problemática del bajo nivel académico, falta de comunicación y valores, surge entonces en el año 2008 la Biblioteca, donde se comienza a trabajar buscando diferentes formas de dar solución a los problemas resaltados. 

				En el 2010 se implementa la Ludoteca quedando como Biblioteca Ludoteca <strong>“Tejiendo la Esperanza”</strong>  Con este proyecto se buscaba apoyar en tareas, regularización escolar, brindar un espacio seguro, de contención y respeto, donde los padres de familia brindan la confianza al personal para educar a sus hijos/as. Estas actividades fueron acompañadas poco a poco con la promoción de la lectura, diversas actividades recreativas y de convivencia familiar que eran organizadas por las animadoras del espacio.

				Al pasar de los años y las necesidades de la comunidad se diversificaron los servicios y la atención a las personas, fue entonces que se amplió el trabajo con mujeres, jóvenes, padres y madres de familia, apoyado por jóvenes de Servicio Social que pertenecen a diferentes instituciones educativas. 

				En el año 2019 y hasta la fecha está consolidado como Centro Comunitario Iyolosiwa León A.C., Donde se siguen desarrollando las actividades que han sido la esencia de este espacio educativo y aumentado nuevos servicios y talleres que siguen surgiendo debido a las necesidades de nuestros usuarios.</p>	
            </div>
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
        </div>
    </div>

    <!-- Mision -->
    <div class="secciones">
        <div class="row align-items-start">
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
            <div class="col-sm-5 bgcolor">
                <h1>Mision</h1>
                <p>Somos una asociación civil, que desde la concepción y práctica de la Educación Popular, fortalece e impulsa procesos educativos comunitarios, que inciden en la transformación de la realidad y posibilitan vida digna en sectores de mediana y alta marginalidad.</p>
            </div>
        </div>
    </div>

    <!-- Vision -->
    <div class="secciones">
        <div class="row align-items-start">
            <div class="col-sm-5 bgcolor">
                <h1>Vision</h1>
                <p>Iyolosiwa A.C. es un referente institucional especializado en educación popular que es reconocida por la calidad de su servicio educativo y su compromiso solidario con las mayorías empobrecidas; cuenta con personal capacitado, quienes desarrollan proyectos y asesoran a grupos, organizaciones y redes; interviene de manera estratégica a nivel local y regional en México; colabora y se articula con otras organizaciones en redes locales, nacionales e internacionales; cuenta con una estructura organizativa clara y funcional, así como con una administración y finanzas sólidas.</p>
            </div>
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
        </div>
    </div>

    <!-- Mision -->
    <div class="secciones">
        <div class="row align-items-start">
            <div class="col-sm-7 bgcolor2">
                <img src="{{ asset('img/manos.jpg') }}" class="imgCNosotros" alt="...">
            </div>
            <div class="col-sm-5 bgcolor">
                <h1>Valores</h1>
                <ol class="list-group list-group-numbered">
                	<li class="list-group-item">Confianza</li>
                	<li class="list-group-item">Apertura</li>
                	<li class="list-group-item">Discernimiento</li>
                	<li class="list-group-item">Coherencia</li>
                	<li class="list-group-item">Sentido de comunidad</li>
                	<li class="list-group-item">Justicia</li>
                	<li class="list-group-item">Equidad</li>
                	<li class="list-group-item">Esperanza</li>
                </ol>
            </div>
        </div>
    </div>

</div>
@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection
