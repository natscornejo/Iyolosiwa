@extends('layouts.appDashboard')

@section('contentTopBar')
    @include('utilities.dashboard.topbar')
@endsection

@section('contentSideBar')
    @include('utilities.dashboard.sidebar')
@endsection

@section('mainContent')
<div class="content-page">
    <div class="content">
        <!-- Header & Breadcrumbs -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Iyolosiwa</a></li>
                                <li class="breadcrumb-item active">Dashboard</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>     
        </div>


        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/maintenance.svg')}}" width="200" alt="error-image"/>
                            <h3 class="mt-4">Estamos en construcción</h3>
                            <p class="text-muted">Estamos mejorando el sitio, para que se vea mejor! No debe de tomarnos mucho tiempo</p>

                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <div class="avatar-md rounded-circle bg-soft-info mx-auto">
                                            <i class="fe-anchor font-22 avatar-title text-info"></i>
                                        </div>
                                        <h5 class="text-uppercase mt-3">¿Por que se ve esto?</h5>
                                        <p class="text-muted">Porque estamos trabajando para mejorar el sitio, no te desesperes, pronto estara listo</p>
                                    </div>
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <div class="avatar-md rounded-circle bg-soft-info mx-auto">
                                            <i class="fe-clock font-22 avatar-title text-info"></i>
                                        </div>
                                        <h5 class="text-uppercase mt-3">¿Cuanto tiempo nos tardaremos?</h5>
                                        <p class="text-muted">Debe de estar listo antes del 5 de Diciembre</p>
                                    </div>
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <div class="avatar-md rounded-circle bg-soft-info mx-auto">
                                            <i class="fe-help-circle font-22 avatar-title text-info"></i>
                                        </div>
                                        <h5 class="text-uppercase mt-3">¿Ocupas ayuda?</h5>
                                        <p class="text-muted">Nosotros tambien, as+i que no te desesperes :) te comprendemos<a href="mailto:#" class="text-muted font-weight-bold">help@iyolosiwaleon.org</a></p>
                                    </div>
                                </div> <!-- end col-->
                                
                            </div> <!-- end row-->
                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

    </div>
    @include('utilities.dashboard.maincontentFooter')
</div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection