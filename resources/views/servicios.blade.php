@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')

<div class="container col-lg-12">
	<!-- Galeria -->
		<main class="main">
			<h1>Talleres</h1>
			<section class="gallery">
				<figure class="gallery__picture gallery__picture--g1">
					<img src="{{ asset('img/img1.jpg') }}" class="gallery__img">
				</figure>
				<figure class="gallery__picture2 gallery__picture--g2">
					<img src="{{ asset('img/img2.jpg') }}" class="gallery__img">
				</figure>
				<figure class="gallery__picture3 gallery__picture--g3">
					<img src="{{ asset('img/img3.jpg') }}" class="gallery__img">
				</figure>
				<figure class="gallery__picture4 gallery__picture--g4">
					<img src="{{ asset('img/img4.jpg') }}" class="gallery__img">
				</figure>
				<figure class="gallery__picture5 gallery__picture--g5">
					<img src="{{ asset('img/img5.jpg') }}" class="gallery__img">
				</figure>
				<figure class="gallery__picture6 gallery__picture--g6">
					<img src="{{ asset('img/img6.jpg') }}" class="gallery__img">
				</figure>
			</section>
		</main>
	<!-- Galeria -->
</div>

<div class="container col-lg-12">
	<table class="table table-sm table-hover table-borderless">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Actividad</th>
			<th scope="col">Día</th>
			<th scope="col" colspan="2" >Horarios</th>
		</tr>
	</thead>
		<tbody >
			<tr>
				<th scope="row">1</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Apoyo en tareas</td>
				<td>Lunes a jueves</td>
				<td>9:00 am - 10:00 pm</td>
				<td>4:00 pm - 5:00 pm</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Apoyo en tareas</td>
				<td>Lunes a jueves</td>
				<td>9:00 am - 10:00 pm</td>
				<td>4:00 pm - 5:00 pm</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Apoyo en tareas</td>
				<td>Lunes a jueves</td>
				<td>9:00 am - 10:00 pm</td>
				<td>4:00 pm - 5:00 pm</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Apoyo en tareas</td>
				<td>Lunes a jueves</td>
				<td>9:00 am - 10:00 pm</td>
				<td>4:00 pm - 5:00 pm</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Apoyo en tareas</td>
				<td>Lunes a jueves</td>
				<td>9:00 am - 10:00 pm</td>
				<td>4:00 pm - 5:00 pm</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Ludoteca–Biblioteca con los niños</td>
				<td>Lunes a viernes</td>
				<td>9:00 am - 12:00 pm</td>
				<td>4:00 pm - 6:30 pm</td>
			</tr>
		</tbody>
	</table>
</div>

@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection