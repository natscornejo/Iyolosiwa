@extends('layouts.app')

@section('contentNavBar')
    @include('utilities.navbar')
@endsection

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?fruit)">Slide 1</div>
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?dog)">Slide 2</div>
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?plants)">Slide 3</div>
                <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random/1920x500/?kids)">Slide 4</div>
                <div class="swiper-slide" ><img src="{{ asset('img/manos.jpg') }}"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Nosotros -->
        <div class="primera-seccion">
            <div class="row align-items-start">
                <div class="col-sm-4 bgcolor">
                    <h1>Nosotros</h1>
                </div>
                <div class="col-sm-8 bgcolor2">
                    <h3>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Corrupti a tenetur quas perspiciatis error alias, in sit ipsum est deleniti iusto dicta non earum! Voluptas, unde pariatur laboriosam voluptates dolorem?
                    Non at labore libero dignissimos, sit ad eos natus repellendus officia vel repudiandae accusantium! Error perspiciatis non ipsa corrupti maiores mollitia eum, magni repudiandae blanditiis repellendus tempore quaerat deleniti ea!</h3>
                </div>
            </div>
        </div>

        <!-- Noticias -->
        <div class="secciones">
            <div class="row align-items-start">
                <div class="col-sm-4 bgcolor">
                    <h1>Noticias</h1>
                </div>
                <div class="col-sm-8 bgcolor2">
                    <h3>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Corrupti a tenetur quas perspiciatis error alias, in sit ipsum est deleniti iusto dicta non earum! Voluptas, unde pariatur laboriosam voluptates dolorem?
                    Non at labore libero dignissimos, sit ad eos natus repellendus officia vel repudiandae accusantium! Error perspiciatis non ipsa corrupti maiores mollitia eum, magni repudiandae blanditiis repellendus tempore quaerat deleniti ea!</h3>
                </div>
            </div>
        </div>


        <!-- NuestroTrabajo -->
        <div class="secciones">
            <div class="row align-items-start">
                <div class="col-sm-4 bgcolor">
                    <h1>Nuestro Trabajo</h1>
                </div>
                <div class="col-sm-8 bgcolor2">
                    <h3>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Corrupti a tenetur quas perspiciatis error alias, in sit ipsum est deleniti iusto dicta non earum! Voluptas, unde pariatur laboriosam voluptates dolorem?
                    Non at labore libero dignissimos, sit ad eos natus repellendus officia vel repudiandae accusantium! Error perspiciatis non ipsa corrupti maiores mollitia eum, magni repudiandae blanditiis repellendus tempore quaerat deleniti ea!</h3>
                </div>
            </div>
        </div>

        <!-- Seccion donar con imagen -->
        <div class="container">
            <div class="content">
                
            </div>
        </div>

@section('contentFooter')
    @include('utilities.footer')
@endsection