@extends('layouts.main-layout')

@section('content')
<div class="section16">
	<div class="section16-container">
		<div class="section16-banner text-white d-flex align-items-center">
			<div class="container">
				<h3>
					<b>
						Start Selling on BAL
					</b>
				</h3>
				<p class="pt-3">
					At BuyAnyLight (BAL), we deliver huge and unique advantages to both sellers and buyers and a win-win edge for every BAL platform user. We’re an innovative sourcing platform which connects seller and buyers directly, without the need for an intermediary. 
				</p>
				<p>
					With BAL, you’ll experience unlimited global business opportunities, along with our dedicated support to make sure you benefit to the max.
				</p>
				<a href="#video-section" class="btn btn-outline-light">Watch video</a>
			</div>
		</div>
		<div class="section16-mid-section pt-4">
			<div class="container">
				<h5 class="text-center">
					<b>
						Registration is completely FREE and allows you to:
					</b>
				</h5>
				<div class="row pt-4">
					<div class="col text-center">
						<img src="{{ asset('images/1.png')}}" width="50%">
						<div class="p-3">
							<p>receive enquiries from us and or/ buyers</p>
						</div>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/2.png')}}" width="50%">
						<div class="pt-3">
							<p>bid only when you have availability</p>
						</div>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/3.png')}}" width="50%">
						<div class="pt-3">
							<p>make fast and easy bids</p>
							
						</div>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/4.png')}}" width="50%">
						<div class="pt-3">
							<p>provide buyers with flexible rates depending on order size</p>
							
						</div>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/5.png')}}" width="50%">
						<div  class="pt-3" >
							<p>enjoy secure, instant money transfer to your personal BAL Wallet.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section16-section" id="video-section">
			<div class="container pt-5 pb-5">
				<p class=" text-center text-white"><b> To find out more about how BAL works and what we offer</b></p>
				<p class="text-center text-white">watch our Supplier video now!</p>
				<ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
  					<li class="nav-item">
    					<a class="nav-link active" id="pills-english-tab" data-toggle="pill" href="#pills-english" role="tab" aria-controls="pills-english" aria-selected="true">English</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" id="pills-chinese-tab" data-toggle="pill" href="#pills-chinese" role="tab" aria-controls="pills-chinese" aria-selected="false">Chinese</a>
  					</li>
				</ul>
				<div class="tab-content pt-3" id="pills-tabContent">
  					<div class="tab-pane fade show active" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">
  						<div class="embed-responsive embed-responsive-16by9 video">
	             			<iframe width="640" height="360" src="https://www.youtube.com/embed/7N3FqFyASC0?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
	        			</div>
  					</div>
  					<div class="tab-pane fade" id="pills-chinese" role="tabpanel" aria-labelledby="pills-chinese-tab">
  						<div class="embed-responsive embed-responsive-16by9 video">
	             			<iframe width="640" height="360" src="https://www.youtube.com/embed/YR-FYxOz3ps?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
	        			</div>
  					</div>
				</div>
			</div>
		</div>
		<div class="section16-last-section">
			<div class="container pt-5 pb-5">
				<p class="text-center"><b>QUICK AND SIMPLE REGISTRATION</b></p>
				<p class="text-center">Registration for BAL is easy and should take just 2-3 minutes to complete.</p>
				<div class="row">
					<div class="col-md-4">
						<div class="step-1 text-center pt-3">
							<img src=" {{ asset('images/screen.png') }} " width="50%">
							<p class="pt-3">Step 1: Simply log in to your account </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="step-2 text-center pt-3">
							<img src=" {{ asset('images/screen.png') }} " width="50%">
							<p class="pt-3">Step 2: Receive quote requests </p>
						</div>		
					</div>
					<div class="col-md-4">
						<div class="step-3 text-center pt-3">
							<img src=" {{ asset('images/screen.png') }} " width="50%">
							<p class="pt-3">Step 3: Quote your item online (no need to upload PDFs) </p>
						</div>
					</div>
				</div>
				<p class="pt-5 text-center"><b>Save time and make your online registration now!</b>
				</p>
				<div class="text-center">
					<a href="" class="btn btn-dark">REGISTER NOW</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection