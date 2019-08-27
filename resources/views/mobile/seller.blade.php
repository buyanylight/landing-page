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
			<ul class="works-list text-white text-left">
               <li class="mt-1 bg-black rounded">
                   <div class="d-flex align-items-center list-content">
                       <div class="step-icon d-inline-flex align-items-center justify-content-center">
                           	<!-- <i class="fas fa-cloud-upload-alt"></i> -->
							<img src="{{ Util::assetUrl('images/1.png') }}" width="100%">
                       </div>
                       <div class="step d-inline-block">
                           Recieve enquiries from us or buyers
                       </div>
                   </div>
               </li>
               <li class="mt-1 bg-black rounded">
                   <div class="d-flex align-items-center list-content">
                       <div class="step-icon d-inline-flex align-items-center justify-content-center">
                           <!-- <i class="fas fa-search"></i> -->
							<img src="{{ Util::assetUrl('images/2.png') }}" width="100%">
                       </div>
                       <div class=" step d-inline-block">
                           Bid only when you have availability
                           
                       </div>
                   </div>
               </li>
               <li class="mt-1 bg-black rounded">
                   <div class="d-flex align-items-center list-content">
                       <div class="step-icon d-inline-flex align-items-center justify-content-center">
                           <!-- <i class="fas fa-paper-plane"></i> -->
							<img src="{{ Util::assetUrl('images/5.png') }}" width="100%">
                       </div>
                       <div class=" step d-inline-block">
                           Provide buyers with flexible rates depending on order size
                       </div>
                   </div>
               </li>
               <li class="mt-1 bg-black rounded">
                   <div class="d-flex align-items-center list-content">
                       <div class="step-icon d-inline-flex align-items-center justify-content-center">
                           <!-- <i class="fas fa-eye"></i> -->
							<img src="{{ Util::assetUrl('images/4.png') }}" width="100%">
                       </div>
                       <div class=" step d-inline-block">
                           Enjoy secure, instant money transfer to your personal BAL Wallet
                       </div>
                   </div>
               </li>
               <li class="mt-1 bg-black rounded">
                   <div class="d-flex align-items-center list-content">
                       <div class="step-icon d-inline-flex align-items-center justify-content-center">
                           <!-- <i class="fas fa-eye"></i> -->
							<img src="{{ Util::assetUrl('images/3.png') }}" width="100%">
                       </div>
                       <div class=" step d-inline-block">
                           Make fast and easy bids
                       </div>
                   </div>
               </li>
            </ul>
		</div>
	</div>
	<div class="pt-3 pb-3 video-section" >
		<div class="container">
			<p><b>Understand further how BAL works and what we offer</b></p>
			<p>Watch our Supplier Video and sign up FREE today!</p>
		</div>
		<div class="container">
			<div class="w-100 english d-flex align-items-end bg-white pb-3 pl-3">
				<div class="text-white">
				<b>English</b> <br>
				<a data-fancybox href="https://www.youtube.com/embed/7N3FqFyASC0?rel=0&enablejsapi=1" class="text-white"><i class="fab fa-youtube"></i> Play video</a>
				</div>

			</div>
			<div class="w-100 chinese d-flex align-items-end bg-white mt-3 pb-3 pl-3">
				<div class="text-white">
				<b>Chinese</b><br>
				<a data-fancybox href="https://www.youtube.com/embed/YR-FYxOz3ps?rel=0&enablejsapi=1" class="text-white"><i class="fab fa-youtube"></i> Play video</a>
					
				</div>
			</div>
		</div>
	
	</div>
	<div class="section11">
		<div class="container pt-4 pb-4">
			<p class="text-left"><b>QUICK AND SIMPLE REGISTRATION</b></p>
			<p class="text-left">Registration for BAL is easy and should take just 2-3 minutes to complete.</p>
			<img src=" {{ Util::assetUrl('images/screen.png') }} " width="100%">
			<div class="step-1 text-left pt-3">
				<p class=""><b>Step 1:</b>
					<br> Fill out the information required
				</p>
			</div>
			<div class="step-2 text-left pt-3">
				<p class=""><b>Step 2:</b> 
					<br> Verify your e-mail ID
				</p>
			</div>
			<div class="step-3 text-left pt-3">
				<p class=""><b>Step 3:</b>
					<br> Start receiving enquiries, get awarded and start selling on BAL.
				</p>
			</div>
			<p class="pt-3 text-left"><b>Save time and make your online registration today!</b>
			</p>
			<div class="text-left">
                <a href="https://lightfinder.buyanylight.com/supplier/register" class="btn pl-0">
                    <div class="link-text">
                        Register now
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
		</div>
	</div>
</div>
	@endsection