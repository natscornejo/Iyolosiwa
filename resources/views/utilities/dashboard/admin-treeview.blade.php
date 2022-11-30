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


        <div class="row">
            <div class="col-xl-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Basic Tree</h4>

                    <div id="basicTree">
                        <ul>
                            <li><b>XERIA</b>
                                <ul>
                                    <li data-jstree='{"opened":true}'>Assets
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Css</li>
                                            <li data-jstree='{"opened":true}'>Plugins
                                                <ul>
                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"opened":true}'>Email Template
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-font"}'>Typography</li>
                                    <li data-jstree='{"opened":true}'>User Interface
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-texture"}'>Forms</li>
                                    <li data-jstree='{"icon":"mdi mdi-view-list"}'>Tables</li>
                                </ul>
                            </li>
                            <li data-jstree='{"type":"file"}'>Frontend</li>
                        </ul>
                    </div>

                </div> <!-- end card-box -->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Checkbox Tree</h4>

                    <div id="checkTree">
                        <ul>
                            <li><b>XERIA</b>
                                <ul>
                                    <li data-jstree='{"opened":true}'>Assets
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Css</li>
                                            <li data-jstree='{"opened":true}'>Plugins
                                                <ul>
                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"opened":true}'>Email Template
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-font"}'>Typography</li>
                                    <li data-jstree='{"opened":true}'>User Interface
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-texture"}'>Forms</li>
                                    <li data-jstree='{"icon":"mdi mdi-view-list"}'>Tables</li>
                                </ul>
                            </li>
                            <li data-jstree='{"type":"file"}'>Frontend</li>
                        </ul>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        
    </div>
    @include('utilities.dashboard.maincontentFooter')
</div>
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection