@extends('layouts.mobile-layout')

@section('content')
<div class="all-contents">
	<div class="section8 pt-5 ">
		<div class="container intro-seller d-flex align-items-center text-white ">
			<h3>
				<b>
				Start Selling on BAL
				</b>
			</h3>
		</div>
	</div>
	<div class="section9">
		<div class="container">
			<p class="pt-4">
				Our innovative sourcing platform connects seller and buyers directly, without the need for an intermediary. BAL delivers huge and unique advantages to both sellers and buyers and a win-win edge for every BAL platform user.
			</p>
			<p><b> Registration is completely FREE and allows you to:</b></p>
			<div class="row pt-3 ">
				<div class="col text-left">
					<img src="{{ asset('images/1.png') }}" width="25%">
					<p class="pt-3 ">Recieve enquiries from us or buyers</p>
				</div>
				<div class="col text-left">
					<img src="{{ asset('images/2.png') }}" width="25%">
					<p class="pt-3 ">Bid only when you have availability</p>
				</div>
			</div>
			<div class="row pt-3 ">
				<div class="col text-left">
					<img src="{{ asset('images/5.png') }}" width="25%">
					<p class="pt-3 ">Provide buyers with flexible rates depending on order size</p>
				</div>
				<div class="col text-left">
					<img src="{{ asset('images/4.png') }}" width="25%">
					<p class="pt-3 ">Enjoy secure, instant money transfer to your personal BAL Wallet</p>
				</div>
			</div>
			<div class="row pt-3 ">
				<div class="col text-left">
					<img src="{{ asset('images/3.png') }}" width="25%">
					<p class="pt-3 ">Make fast and easy bids</p>
				</div>
				<div class="col text-left">
				</div>
			</div>
		</div>
	</div>
	<div class="section10" id="video-section">
		<div class="container pt-4 pb-4">
			<p class=" text-left text-white"><b> To understand further <br> how BAL works and what we offer</b></p>
			<p class="text-left text-white">Watch our Manufacturer Video <br> and sign up FREE today!</p>
			<ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
  				<li class="nav-item border border-white">
    				<a class="nav-link active text-white rounded-0" id="pills-english-tab" data-toggle="pill" href="#pills-english" role="tab" aria-controls="pills-english" aria-selected="true">English</a>
  				</li>
  				<li class="nav-item border border-white rounded-0">
  					<a class="nav-link text-white rounded-0" id="pills-chinese-tab" data-toggle="pill" href="#pills-chinese" role="tab" aria-controls="pills-chinese" aria-selected="false">Chinese</a>
  				</li>
			</ul>
			<div class="tab-content pt-3" id="pills-tabContent">
  				<div class="tab-pane fade show active" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">
  					<div class="embed-responsive embed-responsive-16by9">
	             		<iframe width="640" height="360" src="https://www.youtube.com/embed/7N3FqFyASC0?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
	        		</div>
  				</div>
  				<div class="tab-pane fade" id="pills-chinese" role="tabpanel" aria-labelledby="pills-chinese-tab">
  					<div class="embed-responsive embed-responsive-16by9">
	             		<iframe width="640" height="360" src="https://www.youtube.com/embed/YR-FYxOz3ps?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
	        		</div>
  				</div>
			</div>
		</div>
	</div>
	<div class="section11">
		<div class="container pt-4 pb-4">
			<p class="text-left"><b>QUICK AND SIMPLE REGISTRATION</b></p>
			<p class="text-left">Registration for BAL is easy and should take just 2-3 minutes to complete.</p>
			<div class="step-1 text-left pt-3">
				<img src=" {{ asset('images/screen.png') }} " width="80%">
				<p class="pt-3">Step 1: Simply log in to your account </p>
			</div>
			<div class="step-2 text-left pt-3">
				<img src=" {{ asset('images/screen.png') }} " width="80%">
				<p class="pt-3">Step 2: Receive quote requests </p>
			</div>
			<div class="step-3 text-left pt-3">
				<img src=" {{ asset('images/screen.png') }} " width="80%">
				<p class="pt-3">Step 3: Quote your item online (no need to upload PDFs) </p>
			</div>
			<p class="pt-3 text-left"><b> Save time and make your online registration now!</b>
			</p>
			<div class="text-left">
				<a href="https://lightfinder.buyanylight.com/supplier/register" class="btn btn-sm btn-dark">Register Now</a>
			</div>
		</div>
	</div>
</div>
	@endsection