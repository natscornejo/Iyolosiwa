@extends('layouts.appDashboard')

@section('contentTopBar')
    @include('utilities.dashboard.topbar')
@endsection

@section('contentSideBar')
    @include('utilities.dashboard.sidebar')
@endsection

@section('mainContent')
    @include('utilities.dashboard.maincontent')
@endsection

@section('contentRightBar')
    @include('utilities.dashboard.rightbar')
@endsection