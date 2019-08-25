@extends('layouts.main-layout')

@section('meta-title')
<meta name="title" content="BuyAnyLight | Seller - Apply ">
<meta property="og:title" content=" BuyAnyLight | Seller - Apply">
@endsection

@section('meta-description')
<meta name="description" content="With BAL, you’ll experience unlimited global business opportunities, along with our dedicated support to make sure you benefit to the max." />
<meta property="og:description" content="With BAL, you’ll experience unlimited global business opportunities, along with our dedicated support to make sure you benefit to the max.">
@endsection

@section('content')

<div class="seller pt-5">
	<div class="intro-seller d-flex align-items-center">
		<div class="container">
			<h3 class="text-white">
				<b>Start Selling on BAL</b>
			</h3>
		</div>
	</div>
</div>
<div class="container pt-5">
	<p class="">
		At BuyAnyLight (BAL), we deliver huge and unique advantages to both sellers and buyers and a win-win edge for every BAL platform user. We’re an innovative sourcing platform which connects seller and buyers directly, without the need for an intermediary. 
	</p>
	<p>
		With BAL, you’ll experience unlimited global business opportunities, along with our dedicated support to make sure you benefit to the max.
	</p>
	<p class="text-left pt-3">
		<b>
			Registration is completely FREE and allows you to:
		</b>
	</p>
	<div class="row pt-3">
		<div class="col text-center">
			<img src="{{ asset('images/1.png')}}" width="30%">
			<div class="p-3">
				<p>receive enquiries from us and or/ buyers</p>
			</div>
		</div>
		<div class="col text-center">
			<img src="{{ asset('images/2.png')}}" width="30%">
			<div class="pt-3">
				<p>bid only when you have availability</p>
			</div>
		</div>
		<div class="col text-center">
			<img src="{{ asset('images/3.png')}}" width="30%">
			<div class="pt-3">
				<p>make fast and easy bids</p>
				
			</div>
		</div>
		<div class="col text-center">
			<img src="{{ asset('images/4.png')}}" width="30%">
			<div class="pt-3">
				<p>provide buyers with flexible rates depending on order size</p>
				
			</div>
		</div>
		<div class="col text-center">
			<img src="{{ asset('images/5.png')}}" width="30%">
			<div  class="pt-3" >
				<p>enjoy secure, instant money transfer to your personal BAL Wallet</p>
			</div>
		</div>
	</div>
</div>
<div class="videos pt-5 pb-5">
	<div class="container">
		<div class="" id="video-section">
			<p class="text-left text-black">To find out more about how BAL works and what we offer, watch our Supplier video now!</p>
			<div class="row">
				<div class="col-md-6">
					<div class="w-100 english pb-3 pl-3">
						<div>
							<h4 class="text-white">
								<b>
									English
								</b>
							</h4>
							<a  data-fancybox href="https://www.youtube.com/embed/7N3FqFyASC0?version=3&enablejsapi=1" class="text-white"><i class="fab fa-youtube"></i> Play video</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="w-100 chinese pb-3 pl-3">
						<div>
							<h4 class="text-white">
								<b>
									Chinese
								</b>
							</h4>
							<a  data-fancybox href="https://www.youtube.com/embed/7N3FqFyASC0?version=3&enablejsapi=1" class="text-white"><i class="fab fa-youtube"></i> Play video</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="pt-5 pb-5">
	<div class="container">
		<p class="text-left"><b>QUICK AND SIMPLE REGISTRATION</b></p>
		<p class="text-left">Registration for BAL is easy and should take just 2-3 minutes to complete.</p>
		<div class="row h-100">
			<div class="col-md-6 text-center">
				<img src=" {{ asset('images/screen.png') }} " width="80%">	
			</div>
			<div class="col-md-6">
					<p class="pt-3"><b>Step 1</b><br>Fill out the information required </p>
					<p class="pt-5"><b>Step 2:</b><br>Verify your e-mail ID</p>
					<p class="pt-5"><b>Step 3:</b><br>Start receiving enquiries, get awarded and start selling on BAL.</p>
			</div>
		</div>
		<p class="pt-3 text-left"><b>Save time and make your online registration today!</b>
		</p>
		<div class="text-left">
			<a href="https://lightfinder.buyanylight.com/seller/register" class=" pl-0 btn">
                <div class="link-text">
                    Register Now
                </div>&nbsp;
                <div class="link-icon text-dark">
                	<i class="fas fa-arrow-right"></i> 
               	</div>
            </a>
			<!-- <a href="" class="btn btn-dark">REGISTER NOW</a> -->
		</div>
	</div>
</div>

@endsection