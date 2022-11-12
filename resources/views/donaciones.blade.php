@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')

<!-- Donativo PayPal -->
<div class="dj-banner">
    <div class="dj-bg">
        <img src="{{ asset('img/manos.jpg') }}" alt="" height="400px">
        <div class="dj-text">
            <h1><b>Donaciones por PayPal</b></h1>
            <p>de una manera sencilla</p>
            <p><a href="#"><label style="border-radius: 5px; background: #FFB413; border-color:#ce2032;  height:44px; color: BLACK; width: 152px; text-align: center; font-size: 16px; padding: 10px 0;">Donar $50</label> 
            </a></p>
        </div>
    </div>            
</div>




<div class="container-fluid pt-5">
	<section class="section" id="feature">
        <div class="container">
            <div class="row justy-content-center">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <h4 class="mb-2">The right advice</h4>
                        <p>Our team are experts in matching you with the right provider.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <h4 class="mb-2">Recognised for excellence</h4>
                        <p>We've been awarded for our high rate of customer satisfaction.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="bi bi-person-heart"></i>
                        </div>
                        <h4 class="mb-2">Compare the best</h4>
                        <p>We only compare market leaders with a reputation for service quality.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="mb-2">Premium Services</h4>
                        <p>We only compare market leaders with a reputation for service quality.</p>
                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </section>	
</div>
@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection