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
                                    <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('noticias.index') }}">Noticias</a></li>
                                    <li class="breadcrumb-item active">Crear noticia</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Crear noticia</h4>
                        </div>
                    </div>
                </div>
            </div> <!-- Header & Breadcrumbs -->
            @include('utilities.dashboard.maincontentFooter')
        </div>
    </div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection
