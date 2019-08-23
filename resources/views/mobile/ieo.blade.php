@extends('layouts.mobile-layout')
@section('meta-title')
<meta name="title" content="BuyAnyLight | IEO">
<meta property="og:title" content=" BuyAnyLight | IEO">
@endsection

@section('meta-description')
<meta name="description" content="BuyAnyLight (BAL) IEO is a crowdfunding campaign aimed at raising funds for the development of a decentralized,  marketplace for lighting products." />
<meta property="og:description" content="BuyAnyLight (BAL) IEO is a crowdfunding campaign aimed at raising funds for the development of a decentralized,  marketplace for lighting products.">
@endsection

@section('css')
	<link rel="stylesheet" href="css/ieo-mobile.css?v=1">
@endsection


@section('body-end-javascript')
	<script>

	
		$('.roadmap').slick({
            centerMode: true,
		    adaptiveHeight: true,
            centerPadding: '0px',
            slidesToShow: 1,
            initialSlide:0,
            infinite: false,
            arrows: true,
		    prevArrow: '<button type="button" class="slick-prev d-inline-block">Previous</button>',
		    nextArrow: '<button type="button" class="slick-next d-inline-block">Next</button>',            
		});
		
	</script>
@endsection


@section('content')
<section class="section-1 mb-3">
	<div class="section-1-bg pt-5">
		<div class="container text-center h-100 d-flex align-items-end justify-content-center">
			<div class="row">
				<div class="col-12">
					<h3 class="text-white">
						<b>BAL Initial Exchange <br> Offering (IEO)</b>
					</h3>

					<div class="pt-2">
						<p class="small-desc text-white">
							BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowd funding campaign aimed at raising funds for the development of a decentralized.
						</p>
					</div>
				</div>
				<div class="col-12">
					<div class="btn-group" role="group" aria-label="Basic example">
						<button type="button"class="btn btn-ieo-left">
							<a href="{{ asset('one-pagers/BuyAnyLight-IEO.pdf') }}?v={{ env('VERSION','20190819') }}" 
							target="_blank">
								One Pager								
							</a>
						</button>
						
						<button 
						type="button" 
						target="_blank" 
						class="btn btn-ieo-middle">
							<a href="{{ route('coming_soon') }}" 
							target="_blank">
								White Paper
							</a>
						</button>

						<button 
						type="button" 
						class="btn btn-ieo-right">
							<a href="{{ route('coming_soon') }}" 
							target="_blank">						
								Yellow Paper
							</a>
						</button>

					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- <div class="bg-ieo countdown rounded-circle">
		<div class="d-flex align-items-center h-100" style="padding: 20px; padding-bottom: 5rem;">
			<div class="w-100">	
				<h4 class="text-center text-white"><b>IEO PRE SALE</b></h4>
				<div class="w-100 pt-2">
					<p class="text-white text-center mb-0"><b>Private Sale starts in:</b></p>
					<div id="timer" class="pt-2 pb-2 bg-white text-center d-flex justify-content-center">
						<div class="row" style="width: 90%">
							<div class="col p-0 text-center">
		  						<div id="days" class="d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		  						<div id="hours" class=" d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		  						<div id="minutes" class=" d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		  						<div id="seconds" class=" d-inline-block"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-100">
					<p class="text-white text-center pt-3 mb-0"><b>Public Sale starts in:</b></p>
					<div id="timer" class=" pt-2 pb-2 bg-white text-center d-flex justify-content-center">
						<div class="row" style="width: 90%">
							<div class="col p-0 text-center">
		 						<div id="days1" class="d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		 						<div id="hours1" class=" d-inline-block"></div>
							</div>
							<div class="col  p-0 text-center">
		 						<div id="minutes1" class=" d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		 						<div id="seconds1" class=" d-inline-block"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<div class="countdown-ring-cont">
	<div class="countdown-ring-1">
	<div class="countdown-ring-2">
	<div class="countdown">
		<div class="d-flex align-items-center h-100" style="padding: 10px;">
			<div class="w-100" style="margin-top: -20px;">	
				{{-- <h4 class="text-center text-white pb-0 mb-0" style="font-size: 1.2em;">
					<b>IEO PRE SALE</b>
				</h4> --}}
				<div class="w-100 pt-2">
					<p class="text-white text-center mb-0" style="font-size: 0.9em;">
						<b>Private Sale starts in:</b>
					</p>
					<div id="timer" class="pt-2 pb-0 text-center d-flex justify-content-center">
						<div class="row justify-content-center" style="width: 90%">
							<div id="days" class="timer-item d-inline-block"></div>
							<div id="hours" class="timer-item d-inline-block"></div>
							<div id="minutes" class="timer-item d-inline-block"></div>
							<div id="seconds" class="timer-item d-inline-block"></div>
						</div>
					</div>
				</div>
				<div class="w-100">
					<p class="text-white text-center pt-2 mb-0" style="font-size: 0.9em;">
						<b>IEO Sale starts in:</b>
					</p>
					<div id="timer" class=" pt-2 pb-2 text-center d-flex justify-content-center">
						<div class="row justify-content-center" style="width: 90%">
							<div id="days1" class="timer-item d-inline-block"></div>
							<div id="hours1" class="timer-item d-inline-block"></div>
							<div id="minutes1" class="timer-item d-inline-block"></div>
							<div id="seconds1" class="timer-item d-inline-block"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row justify-content-center">
					<div class="btn-group" role="group" aria-label="Basic example">
						<button 
						type="button" 
						class="btn btn-ieo-left video-btn">
							<a data-fancybox 
							href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0" 
							class="mx-3">
								<span>IEO</span>
								<i class="far fa-play-circle ml-1"></i>
								{{-- <img class="video" src="{{ asset('/images/ieo/bal-ieo.png') }}" alt=""> --}}
							</a>
						</button>
						
						<button 
						type="button" 
						class="btn btn-ieo-right video-btn">
							<a data-fancybox 
							href="https://www.youtube-nocookie.com/embed/5nMkricvzfc?rel=0" 
							class="">
								<span>IEO vs ICO</span>
								<i class="far fa-play-circle ml-1"></i>
								{{-- <img class="video" src="{{ asset('/images/ieo/bal-ieo-vs-ico.png') }}" alt=""> --}}
							</a>								
						</button>

					</div>				
				</div>
			</div>
		</div>
	</div>

</section>




<section class="section-2">
	<div class="container pb-3">
		<h3 class="text-center pb-3">
			<b>
				<span class="header-text">BAL Initial Exchange</span>
				<br>
				<span>Offering (IEO)</span>
			</b>
		</h3>
		<div class="text-justify">
				<p>
					The BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowd funding campaign aimed at raising funds for the development of a blockchain deployed, decentralized marketplace for lighting products and expansion of the existing BAL Network. It is a framework for addressing the unique challenges faced by lighting contractors, manufacturers and buyers, as it combines revolutionary technologies such as blockchain and cryptography, smart contracts, fintech and tokenization.
				</p>
				<p>
					We understand and embrace the new blockchain-powered technologies that can optimize sourcing within the lighting industry and strive to lay the digital infrastructure for smarter light sourcing in a seamless, cost-effective way.				
				</p>


 

		</div>
	</div>
	<div class="container pt-3">
		<h3 class="text-center pb-3">
			<b>
				<span class="header-text">What is BAL</span> Token?
			</b>
		</h3>
		<div>
			<p class="text-justify">
				BAL is an ERC-20 compliant digital token deployed on the Ethereum blockchain which allows peer to peer mode of payment, store and exchange of value seamlessly and securely. The BAL Token is specifically designed for supporting larger volumes of transactions happening within the BAL ecosystem. It offers quick, secure and efficient transfer of value with high confirmation speed.
			</p>
		</div>
	</div>
	{{-- <div class="container pt-3 pb-5">
		<img src="{{ asset('images/mobile_bg/ieo/2.png')}}" width="100%">
	</div> --}}
</section>
<section class="section-3 bg-black">
	<div class="container pt-5 pb-5">
		<div class="text-justify">
			<h3 class="text-center">
				<b>
					<span class="header-text">Our</span>
					<span class="text-white">Vision</span>
				</b>
			</h3>
			<p class="pt-2 text-white">
				Our vision is to become the leading global platform of choice for buyers and sellers dealing in LED lighting. Through BAL marketplace, we aim to democratize the access to sourcing of lighting products without the influence of a centralized authority or intermediary.
			</p>
			<div class="text-center pt-3 vision-mission mb-5">
				{{-- <a  data-fancybox href="https://www.youtube.com/embed/o8CAwwz6tIM">
					<img src="{{asset('images/mv-img.png')}}" alt="..." class="rounded-circle mv-img" width="35%">
					<div class="text-dark yt">
						<i class="fab fa-youtube"></i>
					</div>	
				</a> --}}

				<a data-fancybox 
				href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0" 
				class="">
					<img class="video" src="{{ asset('/images/ieo/bal-ieo.png') }}" alt="">
				</a>

			</div>
		</div>
		<div class=" text-justify pt-3">
			<h3 class="text-center">
				<b>
					<span class="header-text">Our</span>
					<span class="text-white">Mission</span>
				</b>
			</h3>
			<p class="pt-2 text-white">
				Creation of a modern-age lighting products marketplace by fully harnessing the blockchain, smart contracts and cryptographic technology. Principled, honest and focused, we leverage the world’s best suppliers and deliver the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time.
			</p>
			<div class="text-center pt-3 vision-mission">
				{{-- <a data-fancybox href="https://www.youtube.com/embed/5nMkricvzfc" >
					<img src="{{asset('images/mv-img.png')}}" alt="..." class="rounded-circle mv-img" width="35%">
					<div class="text-dark yt">
						<i class="fab fa-youtube "></i>
					</div>
				</a> --}}

				<a data-fancybox 
				href="https://www.youtube-nocookie.com/embed/5nMkricvzfc?rel=0" 
				class="">
					<img class="video" src="{{ asset('/images/ieo/bal-ieo-vs-ico.png') }}" alt="">
				</a>				
			</div>
		</div>
	</div>
</section>
<section class="section-4">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">Why Choose</span> BAL Token?
			</b>
		</h3>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ asset('images/ieo/6-1.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Decentralization</b></h5>
			<div class="text-justify pt-2">
				<p>
					Unlike traditional marketplaces and payment networks, there is no single point of failure. All transactional activities happening within the BAL ecosystem are open and transparent to the whole community.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ asset('images/ieo/6-2.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Security</b></h5>
			<div class="text-justify pt-2">
				<p>
					BAL Token uses Ethereum blockchain based proof of work consensus for confirming transactions, which makes it completely decentralized and one of the most secure digital assets. All your transactional data is encrypted, and your digital assets reserved in a wallet only you can access.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ asset('images/ieo/6-3.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Utility</b></h5>
			<div class="text-justify pt-2">
				<p>
					BAL Token has inherent utility within the BAL marketplace, a leading marketplace based in Dubai, UAE, allowing it to be accepted as a mode of payment for lighting products.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ asset('images/ieo/6-4.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Liquidity and Easy Transactions</b></h5>
			<div class="text-justify pt-2">
				<p>
					Easily liquidate or transfer your BAL Token to anyone, anywhere in the world through a secure, encrypted digital wallet.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ asset('images/ieo/6-5.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Nominal Transactional Fee</b></h5>
			<div class="text-justify pt-2">
				<p>
					BAL marketplace deducts significantly lower fee than any other major online payment system: enabling users to send, receive or perform any transactional activity at minimal costs.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ asset('images/ieo/6-6.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Transparency</b></h5>
			<div class="text-justify pt-2">
				<p>
					Deployment of all transactional records on a transparent blockchain ensures visibility and eliminates fraud.
				</p>
			</div>
		</div>
	</div>	
</section>
<section class="section-5 bg-black">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">Road</span>
				<span class="text-white">map</span>
			</b>
		</h3>

		<div>
			<p class="text-white text-justify">
				The BAL Platform has an established business with a ready platform. 
				To expand our operations across the globe and to decentralize our existing 
				business model by implementing this on blockchain, 
				we have devised a concrete plan and an ambitious roadmap, 
				with the right team and expertise, all set to expand globally. 
				Our ability to rapidly deploy a solution once the technology has been 
				developed makes the realization of our financial business case more tangible.
			</p>
		</div>
		
		<div class="container text-center text-white">
			{{-- <ul class="roadmap">
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2014</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class=" p-0 map-list">
      										<li>
      											Establishment of Almani Lighting in Germany
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2015</span>
     					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="pl-0 map-list">
      										<li>
      											Establishment of the Almani Lighting Dubai, UAE Branch		
      										</li>
      									</ul> 
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class=" map-list pl-0">
      										<li>
      											Cooperation with Asas Holdings, UAE
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2017</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											Establishment of a state-of-the-art showroom
      										</li>
      									</ul>	 
      								</div>	
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2018</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Idea inception of the BAL Platform
      												</li>
      												<li>
      													Initial Research
      												</li>
      												<li>
      													Team Building
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Platform Development Initiated
      												</li>
      												<li>
      													BAL Website development
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2019</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													White Paper Drafting for the BAL Platform
      												</li>
      												<li>
      													Centralized Platform completed and ready for user review
      												</li>
      												<li>
      													Token Development
      												</li>
      												<li>
      													IEO planning and launching
      												</li>
      												<li>
      													Marketing Campaign Kick-off
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Exchange listing and IEO
      												</li>
      												<li>
      													Hybrid Blockchain work initialized
      												</li>
      												<li>
      													Participation in Roadshows
      												</li>
      												<li>
      													Smart Contracts implementation
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2020</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Wallet Launch with the functionality of Crosschain Swapping
      												</li>
      												<li>
      													Blockchain testing and improvement
      												</li>
      												<li>
      													Team expansion
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Mobile application launch
      												</li>
      												<li>
      													Mobile wallet launch
      												</li>
      												<li>
      													Business expansion into Indian markets
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete mr-3">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2021</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Migration from Ethereum to Patented Blockchain
      												</li>
      												<li>
      													Cloud Staking Functionality Implemented
      												</li>
      												<li>
      													On-chain logistic, freight tracking functionality implemented
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Business expansion to American markets
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
			</ul>   --}}

			

				

				

				{{-- roadmap --}}
				{{-- ////////////////////////////////////////////////////////////////// --}}
				<ul class="roadmap">
  					<li class="li complete">

	  					<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2014</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
	      							<div class="card mb-2"><div class="card-body">Establishment of Almani Lighting GmbH, Germany</div></div>
	      							<div class="card mb-2"><div class="card-body">In depth analysis and visits to the world’s best LED manufacturer</div></div>
	      						</div>
	    					</div>
	  					</div>
					</li>

  					<li class="li complete">
	  					<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2015</span>
	     					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
	      							<div class="card mb-2"><div class="card-body">Establishment of the Almani Lighting LLC, Dubai, UAE Branch</div></div>
	      							<div class="card mb-2"><div class="card-body">Cooperation with ASAS Holdings, Dubai, UAE</div></div>      							
	      							<div class="card mb-2"><div class="card-body">Product range covering 50 products in architectural and residential lighting</div></div>      							
	      						</div>
	    					</div>
	  					</div>

					</li>
					
  					<li class="li complete">

    					<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2017</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
	      							<div class="card mb-2"><div class="card-body">ASAS Holdings invests in Almani Lighting LLC and acquires 51% ownership</div></div>
	      							<div class="card mb-2"><div class="card-body">Establishment of a state-of-the-art Dubai showroom</div></div>
	      							<div class="card mb-2"><div class="card-body">Warehouse expansion</div></div>
	      							<div class="card mb-2"><div class="card-body">Several prestigious projects in UAE completed</div></div>
	      							<div class="card mb-2"><div class="card-body">Product range covering 250 products in architectural, residential, commercial and decorative lighting</div></div>
	      						</div>
	    					</div>
    					</div>

					</li>
					
  					<li class="li complete">

    					<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2018</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
	      							<div class="card mb-2"><div class="card-body">New two storey office in Dubai Investment Park</div></div>
	      							<div class="card mb-2"><div class="card-body">Product range covering 600 products in architectural, residential, commercial, decorative, industrial and outdoor lighting</div></div>
	      							<div class="card mb-2"><div class="card-body">Completion of two Sheikh palaces for the ruler of Sharjah emirate</div></div>

	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Q1 - Q2</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Idea inception of the BAL Platform</li>
	      												<li>Initial Research</li>
	      												<li>Team Building</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Q3 - Q4</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Platform development initiated</li>
	      												<li>BAL website development</li>
	      												<li>BAL software development LightFinder</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      						</div>
	    					</div>
    					</div>

  					</li>




  					<li class="li complete">

						<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2019</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Jan - Mar</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Biggest LED lighting portfolio within the LED industry for a single brand (Almani)</li>
	      												<li>Cooperation with 100+ high quality LED lighting manufacturer</li>
	      												<li>BAL backend development phase 2</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>

	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>April - June</b>
	      											<ul class="pl-3 pt-2">
	      												<li>White Paper drafting for the BAL Platform</li>
	      												<li>Centralized platform development completed and ready for community and manufacturers review</li>
	      												<li>Token generation event</li>
	      												<li>Seed Round Sale</li>
	      												<li>Seed Round successfully completed and raised USD 2 Million</li>
	      												<li>IEO planning and meetings with the most reputable crypto exchanges</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      							
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>July - Sept</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Marketing Campaign Kick-off</li>
	      												<li>My Home, My Tower, LightFinder brochure development</li>
	      												<li>Private funding initiatives</li>
	      												<li>Release of yellow paper (Technical Paper)</li>
	      												<li>Exchange listing and Public Sale i.e. Initial Exchange Offering (IEO)</li>
	      												<li>BAL nominated at Light Middle East for the most exciting startup and their founders for “Personality of the Year”</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      							
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Oct - Dec</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Hiring blockchain developers and corporate restructuring</li>
	      												<li>Smart Contracts research and implementation</li>
	      												<li>Smart Contracts and Blockchain Architecture development started.</li>
	      												<li>Participation in Roadshows</li>
	      												<li>Sponsorship of German embassy for Dubai Roadshow</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>

	      						</div>
	    					</div>
    					</div>
					</li>
					
  					<li class="li complete">

						<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2020</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 

	      							
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Jan - Mar</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Desktop wallet development started with Crosschain asset transfer functionality</li>
	      												<li>Marketing expands</li>
	      												<li>Blockchain testing and improvement</li>
	      												<li>Participation in EXPO2020 projects</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      							
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Apr - Jun</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Team expansion for hiring AI and Machine Learning specialists</li>
	      												<li>Artificial Intelligence Research. Research about Artificial Intelligence, Machine Learning, Big Data, and Predictive Analytics and their application within the BAL platform</li>
	      												<li>Mobile wallet application development started</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      							
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>July - Sept</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Business expansion into Scandinavian and Indian markets</li>
	      												<li>Blockchain Integration on Testnet</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>
	      							
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Oct - Dec</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Participation in roadshows and world business summits</li>
	      												<li>Desktop wallet beta version release, a non-custodial multi-currency light wallet allowing users to send, receive, and the eventual exchange of funds over Lightning Network; without needing to download full blockchains.</li>
	      												<li>Mobile wallet beta version release: Mobile version of the BAL wallet. This application will be compatible on all devices and allow users to access our wallet and its features directly from their mobile device.</li>
	      												<li>On-chain logistic, freight tracking functionality development initiated: This will enable blockchain based traceability of logistics and freight activities happening within our ecosystem.</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>


	      						</div>
	    					</div>
    					</div>
  					</li>

  					<li class="li complete">
  						<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2021</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 

	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Q1 - Q2</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Develop first reference implementation of the BAL network using the blockchain framework Substrate and provide a public testnet. The network will be reviewable by the community.</li>
	      												<li>Desktop wallet alpha version launched with the functionality of Crosschain Swapping: This will allow users to transact multiple currencies directly, without converting via third-party exchange</li>
	      												<li>Mobile wallet alpha version release</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>

	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Q3 - Q4</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Mainnet release</li>
	      												<li>Migration from Ethereum to patented blockchain</li>
	      												<li>Optional API development to enable better decision-making and more efficient energy usage.</li>
	      												<li>Business expansion to American markets</li>
	      											</ul>
	      										</li>
	      									</ul>
	      								</div>
	      							</div>


	      						</div>
	    					</div>
    					</div>

					</li>
					
  					<li class="li complete">

						<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2022</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
	      							<div class="card mb-2"><div class="card-body">On-chain logistic, freight tracking functionality implemented</div></div>
	      							<div class="card mb-2"><div class="card-body">AI based Smart Contracts implementation</div></div>
	      						</div>
	    					</div>
    					</div>
  					</li>
  					
 				</ul>  
				{{-- ////////////////////////////////////////////////////////////////// --}}
				{{-- roadmap --}}



				<div class="arrows pt-3"></div> 

		</div>
	</div>
</section>
<section class="section-6">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">Custom Token</span>
				<span >Information</span>
			</b>
		</h3>
		<div>
			<table class="text-left w-100" cellpadding="10" id="token-info">
				<tr>
					<td>Token name:</td>
					<td>BAL Token</td>
				</tr>
				<tr>
					<td>Ticker:</td>
					<td>BAL</td>
				</tr>
				<tr>
					<td>Token type:</td>
					<td>ERC-20</td>
				</tr>
				<tr>
					<td>Blockchain deployed:</td>
					<td>Ethereum</td>
				</tr>
				<tr>
					<td>Total supply:</td>
					<td>55 Million (100%)</td>
				</tr>
				<tr>
					<td>Supply reserved for Seed Round:</td>
					<td>11 Million (20% of the total supply)</td>
				</tr>
				<tr>
					<td>Supply reserved for Private Round:</td>
					<td>5.5 Million (10% of the total supply)</td>
				</tr>
				<tr>
					<td>Supply reserved for IEO:</td>
					<td>16.5 Million (30% of the total supply)</td>
				</tr>								
				<tr>
					<td>Soft Cap:</td>
					<td>4 Million USD</td>
				</tr>
				<tr>
					<td>Hard Cap:</td>
					<td>8 Million USD</td>
				</tr>
				<tr>
					<td>Accepts:</td>
					<td>ETH, BTC, USD</td>
				</tr>
				<tr>
					<td>Know Your Customer (KYC):</td>
					<td>Yes</td>
				</tr>
				<tr>
					<td>IEO token price:</td>
					<td>1BAL = USD 0.30303</td>
				</tr>
				<tr>
					<td>Seed Round date:</td>
					<td>Febuary 1<sup>st</sup>, 2019 (Sold out)</td>
				</tr>
				<tr>
					<td>Private Round date:</td>
					<td>October 1<sup>st</sup>, 2019</td>
				</tr>
				<tr>
					<td>IEO Round token sale date:</td>
					<td>December 1<sup>st</sup>, 2019</td>
				</tr>
			</table>
		</div>
		<div class="pt-5">
			<h3 class="text-center">
				<b>
					<span class="header-text">Funds Distribution</span>
					<span >Plan</span>
				</b>
			</h3>
			<div class="text-justify pt-3">
				<p class="text-justify">
					We are aiming to make BAL Platform as the leading marketplace for sourcing light products across the globe and have devised a proper plan that would give our dream a practical implementation. The proceeds from the token sale will fund the decentralized platform launch, continued platform development, user acquisition and marketing:
				</p>
				<div class="pt-3">
					<div>
						<p class="mb-0"><b>DEVELOPMENT AND GROWTH</b></p>
						<div class="progress">
  							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								40%
  							</p>
						</div>
					</div>
					<div class="pt-3">
						<p class="mb-0"><b>MARKETING EXPENSE</b></p>
						<div class="progress ">
  							<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								20%
  							</p>
						</div>
						
					</div>
					<div class="pt-3">
						<p class="mb-0"><b>HIRING SPECIALISTS AND BUILDING TEAM</b></p>
						<div class="progress">
  							<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
						
					</div>
					<div class="pt-3">
						<p class="mb-0"><b>PROMOTER EXPENSE</b></p>
						<div class="progress">
  							<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
						
					</div>
					<div class="pt-3">
						<p class="mb-0"><b>ADMINISTRATIVE CHARGES AND LEGAL ISSUES</b></p>
						<div class="progress">
  							<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
						
					</div>
					<div class="pt-3">
						<p class="mb-0"><b>FOUNDING TEAM</b></p>
						<div class="progress">
  							<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-5">
				<h3 class="text-center">
					<b>
						<span class="header-text">Token</span>
						<span>Distribution</span>
					</b>
				</h3>
				<div class="text-center pt-3"> 
					<img src="{{ asset('images/ieo/graph1.png') }}" width="60%">
				</div>
				<div class="row pt-4">
					{{-- <div class=" col-6">
						<ul class="token-list">
							<li>
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-1">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											20%
										</span>
										<br>	 
										<span>
											Seed Investor Allocation
										</span>	
									</div>
								</div>
							</li>
							<li class="mt-3">
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-2">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											10%
										</span>
										<br>	 
										<span>
											Private Round, Angel Investor
										</span>	
									</div>
								</div>
							</li>
							<li class="mt-3">
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-3">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											30%
										</span>
										<br>	 
										<span>
											Main Sale Event
										</span>	
									</div>
								</div>
							</li>
							<li class="mt-3">
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-4">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											10%
										</span>
										<br>	 
										<span>
											Team and Management
										</span>	
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-6">
						<ul class="token-list">
							<li>
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-5">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											5%
										</span>
										<br>	 
										<span>
											Bounty and Airdrop
										</span>	
									</div>
								</div>
							</li>
							<li class="mt-3">
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-6">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											10%
										</span>
										<br>	 
										<span>
											Advisory Board Allocation
										</span>	
									</div>
								</div>
							</li>
							<li class="mt-3">
								<div class="d-flex align-items-start">
									<div class="d-inline-block text-7">
										<i class="fas fa-square"></i>
									</div>
									<div class="d-inline-block pl-2">
										<span> 
											15%
										</span>
										<br>	 
										<span>
											Reserve
										</span>	
									</div>
								</div>
							</li>
						</ul>
					</div> --}}

					<div class=" col-6">
							<ul class="token-list">
								<li>
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #754973;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												20%
											</span>
											<br>	 
											<span>
												Seed Investor Allocation
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #8f44ac;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												10%
											</span>
											<br>	 
											<span>
												Private Round, Angel Investor
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #ec0a83;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												30%
											</span>
											<br>	 
											<span>
												Main Sale Event
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #ff4056;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												10%
											</span>
											<br>	 
											<span>
												Advisory Board Allocation
											</span>	
										</div>
									</div>
								</li>								
							</ul>						
					</div>
					<div class=" col-6">
							<ul class="token-list">
								<li >
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #e74a3b;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												5%
											</span>
											<br>	 
											<span>
												Bounty and Airdrop
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #ff9249;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												10%
											</span>
											<br>	 
											<span>
												Team and Management
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block">
											<i style="color: #fdd31e;" class="fas fa-circle"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												15%
											</span>
											<br>	 
											<span>
												Reserve
											</span>	
										</div>
									</div>
								</li>
							</ul>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-7 bg-black">
	<div class="container pt-5 pb-5">
		<h3 class="text-center">
			<b>
				<span class="header-text">Our</span>
				<span  class="text-white">Team</span>
			</b>
		</h3>

				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Johannes Eidens', 'title'=>'CEO & Founder', 'linkedin'=>'https://www.linkedin.com/in/dotcomv', 'image'=>'images/ieo/team/joh.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Martin Heyen', 'title'=>'Co-Founder & CFO', 'linkedin'=>'', 'image'=>'images/ieo/team/martin.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Leo Vicente', 'title'=>'Chief Technical Officer', 'linkedin'=>'https://www.linkedin.com/in/ljvicente', 'image'=>'images/ieo/team/leo.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Rene Rowell dela Rama', 'title'=>'Director of Blockchain Integration', 'linkedin'=>'https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148', 'image'=>'images/ieo/team/rene.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Zain Ul Abdin', 'title'=>'Senior Architect', 'linkedin'=>'https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a', 'image'=>'images/ieo/team/zain.jpg', 'text'=>'', ];
					
					$coreTeam[] = [	'name'=>'Shajudeen Yousf', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/shajudeen-yousf-783452146/', 'image'=>'images/ieo/team/shajudeen.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Ammar Mohamed', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/ammar-mohamed-231379103/', 'image'=>'images/ieo/team/ammar.jpg', 'text'=>'', ];

					$coreTeam[] = [	'name'=>'Rizvi Iqbal', 'title'=>'Senior Blockchain Engineer', 'linkedin'=>'https://www.linkedin.com/in/rizviqbal', 'image'=>'images/ieo/team/rizvi.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Ryan Quines', 'title'=>'UI/UX Visuals', 'linkedin'=>'https://www.linkedin.com/in/ryan-matthew-quines-551a85152', 'image'=>'images/ieo/team/ryan.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Maria Carron Igloso', 'title'=>'Community Manager', 'linkedin'=>'https://www.linkedin.com/in/maria-carron-igloso-1324b5105', 'image'=>'images/ieo/team/maria.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Tiffany Anggot', 'title'=>'Cryptography Researcher', 'linkedin'=>'https://www.linkedin.com/in/tiffany-jel-a-367548147', 'image'=>'images/ieo/team/tiffany.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Nantha Kumar', 'title'=>'Sales Director', 'linkedin'=>'https://www.linkedin.com/in/nantha-kumar-36b92685', 'image'=>'images/ieo/team/nantha.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Marc Vazquez', 'title'=>'Sourcing, Production & Investors Relations', 'linkedin'=>'https://www.linkedin.com/in/marc-vazquez-6b01a794', 'image'=>'images/ieo/team/marc.jpg', 'text'=>'', ];					
				
				?>
				<div class="row justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col-6 mt-5 text-center">						
						<div class="rounded-circle team-img" style="background-image: url({{ asset($tm['image'])}})">
							@if($tm['linkedin'])
							<a href="{{ $tm['linkedin'] }}" class="text-white linkedin" style="font-size: 20px;" target="_blank">
								<i class="fab fa-linkedin"></i>
							</a>
							@endif							
						</div>
						<p class="header-text pt-3 mb-0">
							<b>
								{{ $tm['name'] }}
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							{{ $tm['title'] }}							
						</p>						
					</div>
				@endforeach
				</div>

	</div>



	<div class="container pt-5 pb-5">
		<h3 class="text-center">
			<b>
				<span class="header-text">Our</span>
				<span  class="text-white">Advisors</span>
			</b>
		</h3>

				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Dr. Moritz Eidens', 'title'=>'CEO PharmGenomics GmbH', 'linkedin'=>'https://www.linkedin.com/in/dr-moritz-eidens-80550910/', 'image'=>'images/ieo/advisors/moritz.jpg', 'text'=>'Founder PharmGenomics. Investor and Blockchain Enthusiast since 2014.', ];
					$coreTeam[] = [	'name'=>'Ralph Kattan ', 'title'=>'Team leader Accounting & Regulatory Information Santander Consumer Bank AG, Deutschland', 'linkedin'=>'https://www.linkedin.com/in/ralph-kattan-709103191/', 'image'=>'images/ieo/advisors/ralph.jpg', 'text'=>'Early BAL Investor. Fintech, Blockchain researcher & Digital Assets expert.', ];
					$coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'Strategy & Business Development EMEA/LATA', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'', ];
					//$coreTeam[] = [	'name'=>'Dr. Stefan Freh', 'title'=>'Specialist Solicitor Industrial Law', 'linkedin'=>'', 'image'=>'images/ieo/advisors/stefan.jpg', 'text'=>'The best time to plant a tree was 20 years ago. The second best time is now.', ];
					$coreTeam[] = [	'name'=>'Khalid Almutawa', 'title'=>'Partner and Chairman ASAS Holding Group', 'linkedin'=>'', 'image'=>'images/ieo/advisors/khalid.jpg', 'text'=>'Investor. Serial Entrepreneur. Early Investor in Almani Lighting, Amazon and Nvidia.', ];
					$coreTeam[] = [	'name'=>'Mohsin Irshad', 'title'=>'Sr. UI/UX Designer at EXCEED IT Services', 'linkedin'=>'https://www.linkedin.com/in/mohsin-irshad-8b982532', 'image'=>'images/ieo/advisors/mohsin.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Muhammad Younas', 'title'=>'Content Advisor at Cryptobuyer', 'linkedin'=>'https://www.linkedin.com/in/muhammad-younas2023', 'image'=>'images/ieo/advisors/muhammad.jpg', 'text'=>'', ];					

				?>
				<div class="row justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col-6 mt-5 text-center">						
						<div class="rounded-circle team-img" style="background-image: url({{ asset($tm['image'])}})">
							@if($tm['linkedin'])
							<a href="{{ $tm['linkedin'] }}" class="text-white linkedin" style="font-size: 20px;" target="_blank">
								<i class="fab fa-linkedin"></i>
							</a>
							@endif							
						</div>
						<p class="header-text pt-3 mb-0">
							<b>
								{{ $tm['name'] }}
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							{{ $tm['title'] }}							
						</p>						
					</div>
				@endforeach
				</div>

	</div>
</section>

<section class="section-9">
	<div class=" h-100 d-flex align-items-center my-4">
		<div class="container">
			<div class="card newsletter-card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h4 class="mb-4 text-center">
								<b>
									<span class="header-text">Sign up for our</span>
									<span>IEO newsletter</span>
								</b>

							</h4>
							<p></p>
							<div>
								<form  
								action="https://buyanylight.us3.list-manage.com/subscribe/post?u=22d8456f8db4bacaef7a16d53&amp;id=7b85cd9f3f" 
								method="post" 
								class="input-group my-3" 
								name="mc-embedded-subscribe-form" 
								novalidate 
								target="_blank">
								<input type="email" name="EMAIL" class="form-control" placeholder="Your Email Address">
									<div class="input-group-append">
										<button type="submit" class="btn btn-ieo">
											Subscribe now
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/ieo/7.png')}}" style="width: 50%; height: auto;">
						</div>
					</div>
				</div>
			</div>
			<div class="pt-0">
				<h4 class="text-center">
					<b>
						Want to know more about our Private Round? 
						<a href="/contact" class="header-text">
							<span >
								Contact Us!		
							</span>
						</a>

						
					</b>
				</h4>
			</div>
		</div>
	</div>
</section>
@endsection