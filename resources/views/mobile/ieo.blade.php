@extends('layouts.mobile-layout')
@section('meta-title')
<meta name="title" content="BuyAnyLight | IEO">
<meta property="og:title" content=" BuyAnyLight | IEO">
@endsection

@section('meta-description')
<meta name="description" content="BuyAnyLight (BAL) IEO is a crowdfunding campaign aimed at raising funds for the development of a decentralized, marketplace for lighting products." />
<meta property="og:description" content="BuyAnyLight (BAL) IEO is a crowdfunding campaign aimed at raising funds for the development of a decentralized, marketplace for lighting products.">
@endsection

@section('css')
	{{-- <link rel="stylesheet" href="css/ieo-mobile.css?v=1"> --}}
	<link rel="stylesheet" href="{{ Util::assetUrl('css/ieo-mobile.css') }}">
@endsection


@section('body-end-javascript')
	<script>

	
		$('.roadmap').slick({
            centerMode: true,
		    adaptiveHeight: true,
            centerPadding: '0px',
            slidesToShow: 1,
            initialSlide: 0,
            infinite: false,
            arrows: true,
		    prevArrow: '<button type="button" class="slick-prev d-inline-block">Previous</button>',
		    nextArrow: '<button type="button" class="slick-next d-inline-block">Next</button>',            
		});

			$('#token-form').on('keyup keypress', function(e) {
  				var keyCode = e.keyCode || e.which;
  				if (keyCode === 13) { 
    				e.preventDefault();
    				return false;
  				}
			});

			
			const minBAL = 200;
			// const minBAL = 25000;

			
			$('.bal-token-input').keyup(function() {
			if (numeral($('.bal-token-input').val()).value() < minBAL) {
				$('.bal-alert').show()
				$('#token-btn').attr('disabled', 'disabled')
			

			} else {
				$('.bal-alert').hide()
				$('#token-btn').removeAttr('disabled')
				
			}	
		})

		$('.bal-token-input').keyup(function() {

			$(this).val(function(index, value) {
    			var amount = numeral(value).format('0,0');
    			
    			return amount
  			});

			 $('.token-price').show();



			Currencyconvert()

			$(".BAL_value").text(numeral($(this).val()).format('0,0'));
			var originalvalue = numeral($('.bal-token-input').val()).value();

			var USDIEO_value = numeral(originalvalue * 0.30303).format('0,0.00000');

			var USDvalue = parseFloat(originalvalue * $('.USD_value').data('value'))
			var USDIEO = parseFloat(originalvalue * 0.30303);

			$(".USDIEO_value").text(USDIEO_value);


			var USD_return = (USDIEO - USDvalue).toFixed(5);

			 $(".USD_return").text(USD_return);



		})


		$( window ).on('load', function() {
  				$('.bal-token-input').val('');
			});



		function Currencyconvert(){
			var originalvalue = numeral($('.bal-token-input').val()).value();

			var USDvalue = parseFloat(originalvalue) * $('.USD_value').data('value')
			var USD_input = parseFloat(USDvalue).toFixed(2);
			var USD  = numeral(parseFloat(USDvalue)).format('0,0.00');


			var BTCvalue = parseFloat(originalvalue) * $('.BTC_value').data('value')

			var ETHvalue = parseFloat(originalvalue) * $('.ETH_value').data('value')

			var EURvalue = parseFloat(originalvalue) * $('.EUR_value').data('value')
			var EUR  = numeral(parseFloat(EURvalue)).format('0,0.00');
			var EUR_input = parseFloat(EURvalue).toFixed(2);

			

			if (USD == 'NaN') {

			$('.USD_value').text(0);
			$('.EUR_value').text(0);
			$('.ETH_value').text(0);
			$('.BTC_value').text(0);


			$('option.USD_value').val(USD_input + ' USD').text('USD');
			$('option.EUR_value').val(EUR_input + ' EUR').text('EUR');
			$('option.BTC_value').val(BTCvalue + ' BTC').text('BTC');
			$('option.ETH_value').val(ETHvalue + ' ETH').text('ETH');



			} else {

			$('.USD_value').text(USD);
			$('.EUR_value').text(EUR);
			$('.ETH_value').text(ETHvalue);
			$('.BTC_value').text(BTCvalue);


			$('option.USD_value').val(USD_input + ' USD').text('USD');
			$('option.EUR_value').val(EUR_input + ' EUR').text('EUR');
			$('option.BTC_value').val(BTCvalue + ' BTC').text('BTC');
			$('option.ETH_value').val(ETHvalue + ' ETH').text('ETH');
			}

		}


		$('#pills-advisory-tab').click(function(){
			$(this).closest('.section14').find('.advisor-text').fadeIn();
			$(this).closest('.section14').find('.team-text').hide();
		})

		$('#pills-team-tab').click(function(){
			$(this).closest('.section14').find('.advisor-text').hide();
			$(this).closest('.section14').find('.team-text').fadeIn();
		})




		
	</script>
@endsection


@section('content')
<!-- <div style="position: relative; z-index: 5">
   Position toasts
	<div style="position: absolute; top: 70px; right: 55px; min-width: 300px;">
	<div class="toast" data-autohide="false">
    	<div class="toast-header">
        	<strong class="mr-auto">
            	<img src="{{ Util::assetUrl('images/logo-black-icon.png') }}" width="25">
            	BuyAnyLight
        	</strong>
        	<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    	</div>
    	@if(session('success'))
   		<div class="toast-body">
        	<b>Thanks for being awesome!</b>
        	{!! session('success') !!}
    	</div>
   		@else
    	<div class="toast-body">
        	{!! session('danger') !!}
    	</div>
    	@endif
	</div>
	</div>    
</div> -->


<section class="section1" style="">
	<div class="container h-100 d-flex align-items-center justify-content-center flex-column" style="">
		<div class="row">
			<div class="col-12">
				<h1>
					<b>
						Light Sourcing, <br>Revolutionized! 
					</b>
				</h1>
				<div>
					Do you need lighting products for your villa, building, tower, or real-estate project? <br>
					Do you worry about paying sky-high prices and have trust issues with suppliers? <br>
					Do you hate delayed deliveries and want secured payments? 
				</div>
			</div>
			<div class="col-12 text-center pt-4">
				<div class="row">
					<div class="col-12">
						<a href="#meet-bal" 
							class="btn btn-BAL w-100 mt-3 ">
							<i class="fas fa-link"></i>
							&nbsp;
							Meet BuyAnyLight								
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							White Paper								
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							Yellow Paper								
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							One Pager								
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('BuyAnyLight_Pitch_Deck.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							Pitch Deck								
						</a>
					</div>
				</div>
			</div>
			<div class="pt-4">
				<img src="{{ Util::assetUrl('images/ieo/ieo-bg(1).png') }}" alt="" width="100%">
			</div>
		</div>
	</div>
</section>
<?php
			// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
		$datas = [];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICORATING", 'link'=>"https://icoholder.com/en/buyanylight-31234", 'src'=>Util::assetUrl("images/ieo/partners/icoholder.png"), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight COINCODEX", 'link'=>"https://coincodex.com/ieo/buyanylight/", 'src'=>Util::assetUrl("images/ieo/partners/coincodex.png"), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOHOLDER", 'link'=>"https://icobench.com/ico/buyanylight-bal", 'src'=>Util::assetUrl('images/ieo/partners/icobench.png'), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOMARKS", 'link'=>"https://icomarks.com/ico/buyanylight", 'src'=>Util::assetUrl("images/ieo/partners/icomarks.svg"), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOSBULL", 'link'=>"https://icosbull.com/eng/ico/buyanylightbal", 'src'=>"images/ieo/partners/icosbull.png", ];
	?>

<section class="section2">
	<div class="w-100 container">
		<div class="row pt-3 pb-3">
			<div class="col-12 text-center">
				<h5 class="text-white">
					<b>Ratings by ICO Experts</b>
				</h5>
			</div>
			<div class="col-12 mt-3 text-center">
				@foreach($datas as $data)
				<div class="d-inline-block mr-3">
					<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" class="mt-2">
						<img class="icon" src="{{ $data['src'] }}" style="height: 60px;">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<section class="section3" id="token-sale">
	<div class="container h-100">
		<div class="row">
			<div class="mt-3 col-12">
				<div class="card card-body text-center" style="border-radius:25px;">
					<div class="container">
						<h5 class="">
							<b>IEO - BAL TOKEN</b> 
						</h5> 
						<p class="">The IEO of BAL Token Starts in:</p>
						<div>
							<div id="timer" class=" pt-1">
								<div class="" style="">
									<div id="days1" class="timer-item d-inline-block mr-3 text-center"></div>
									<div id="hours1" class="timer-item d-inline-block mr-3 text-center"></div>
									<div id="minutes1" class="timer-item d-inline-block mr-3 text-center"></div>
									<div id="seconds1" class="timer-item d-inline-block text-center"></div>
								</div>
							</div>
						</div>
						<div class="pt-3">
							<a href="#section-bal-token" class="btn btn-light rounded" style="color:#3D75F1; font-size:11.892px">
								<b>BUY TOKENS NOW!</b>	
							</a>
							<p class="m-0 mt-2 ">
								<b>Soon on Leading IEO Launchpads</b>	
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 mt-3">
				<div class="card card-body text-center" style="border-radius:25px;">
					<div class="container">
						<h5 class="">
							<b>Token Sale</b>
						</h5>
						<div class="pt-3">
							<div class="row " style="font-size:12px;">
								<p class="col-2 m-0 d-flex align-items-center"><b>Start</b></p>
								<p class="col-4 text-center m-0"><b>Soft Cap</b></p>
								<p class="col-6 text-right m-0 d-flex align-items-center justify-content-end"><b>Hard Cap</b></p>
							</div>
							<div class="pt-1">
								<div class="progress">
									  <div class="progress-bar" role="progressbar" style="width: 38%" aria-valuenow="35" aria-valuemin="0" aria-valuemax	="100">	
									  </div>
								</div>
							</div>
							<div class="row pt-1 " style="font-size:12px;">
								<p class="col-2 mb-0"><b>$0</b></p>
								<p class="col-4 text-center mb-0"><b>$2 Mil</b></p>
								<p class="col-6 text-right mb-0"><b>$8 Mil</b></p>
							</div>
						</div>
						<div class="pt-4 text-left">
							<div class="row">
								<div class="col-12">
									<a data-fancybox href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0">
										<div class="row">
											<div class="col-2">
												<span style="font-size:30px;" class="text-white">
													<i class="far fa-play-circle"></i>
												</span>
											</div>
											<div class="col-10 text-white pt-2">
												<p class="mb-0">BUYANYLIGHT IEO</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12">
									<a data-fancybox href="https://www.youtube-nocookie.com/embed/5nMkricvzfc?rel=0">
										<div class="row">
											<div class="col-2">
												<span style="font-size:30px;" class="text-white">
													<i class="far fa-play-circle"></i>
												</span>
											</div>
											<div class="col-10 text-white pt-2">
												<p class="mb-0">IEO vs ICO</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-0 pb-4 container">
		<div class="row" style="padding-top: 10px;">
			<div class="col-12">
				<div class="card card-body" style="border-radius:25px;">
					<div class="container">
						<h5 class=" text-center">
							<b>PRIVATE SALE</b>	
						</h5>
						<div class="card card-body mt-3" style="
						background-color:#3249B5; 
						background-image:none; 
						color:white;
						padding:0.7rem;">
							<p class="m-0 text-center">0.2 USD</p>
						</div>
						<div class="mt-3  text-center">
							<p class="m-0">1st Oct 2019 to 31st Oct 2019</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body" style="border-radius:25px;">
					<div class="container">
						<h5 class=" text-center">
							<b>PRE-IEO</b>	
						</h5>
						<div class="card card-body mt-3" style="
						background-color:#3249B5; 
						background-image:none; 
						color:white;
						padding:0.7rem;">
							<p class="m-0 text-center">0.25 USD</p>
						</div>
						<div class="mt-3  text-center">
							<p class="m-0">1st Nov 2019 to 6th April 2020</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body" style="border-radius:25px;">
					<div class="container">
						<h5 class=" text-center">
							<b>IEO</b>	
						</h5>
						<div class="card card-body mt-3" style="
						background-color:#3249B5; 
						background-image:none; 
						color:white;
						padding:0.7rem;">
							<p class="m-0 text-center">0.30303 USD</p>
						</div>
						<div class="mt-3  text-center">
							<p class="m-0">7th April 2020 to 30th April 2020</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section4 pt-5" id="meet-bal">
	<div class="container pb-3">
		<h3 class="text-center">
			<strong>
				Meet BuyAnyLight
			</strong> 
		</h3>
		<div class="row pt-4">
			<div class="col-12 text-center">
				<img src="{{ Util::assetUrl('images/ieo/meetbal(1).png')}}" width="80%">		
			</div>
			<div class="col-12 d-flex justify-content-center flex-column">
				<div class="pt-3">
					<p class="">
						BuyAnyLight helps you source quality LED products for all of your lighting needs. Using blockchain, AI, big data and smart contracts, it gets your inquiries before the right manufacturers and ensures that you receive the products you ordered.
					</p>
				</div>
				<div class="all-videos mt-4">
					<a data-fancybox href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="">
						<div class="h-100" style="">
		                    <div>
		                        <button class="rounded-circle btn btn-BAL">
									<i class="fas fa-play"></i>
								</button>
								&nbsp;
								<span class="text-white">
									Introducing BAL
								</span>
		                    </div>
		                </div>
					</a>
					<a data-fancybox href="https://www.youtube-nocookie.com/embed/k-zrKcgJf0Q?rel=0" class="">
						<div class="h-100" style="">
		                    <div>
								<button class="rounded-circle btn btn-BAL">
									<i class="fas fa-play"></i>
								</button>
								&nbsp;
								<span class="text-white">
									LightFinder 
								</span> 
		                    </div>
		                </div>
					</a>
				</div>
			</div>
		</div>	
	</div>
</section>

<section class="section5 pt-5" id="benefits">
	<div class="container">
		<h2 class="text-center">
			<b>Benefits of using BuyAnyLight</b>	
		</h2>
		<p class="text-center pt-2">
			BuyAnyLight revolutionizes LED Light sourcing by deploying the entire procurement process on blockchain. <br>By adopting its innovative model, it offers the following benefits:
		</p>
		<div class="row pt-3">
			<div class="col-12 pt-3">
				<div class="card card-body d-flex justify-content-center flex-column">
					<div class="row">
						<div class="col-2 d-flex align-items-center justify-content-center">
							<h2 class="text-dark">
								<i class="fas fa-stopwatch"></i>
							</h2>
						</div>
						<div class="col-10">
							<h5>
								SEAMLESS ORDERS
							</h5>
							<div class="benefit-text">
								Submit your lighting requirements as easy as sharing an image, then receive the best quotations. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body d-flex justify-content-center flex-column">
					<div class="row">
						<div class="col-2 d-flex align-items-center justify-content-center">
							<h2 class="text-dark">
								<i class="fas fa-wallet"></i>
							</h2>
						</div>
						<div class="col-10">
							<h5>
								TRUSTLESS PAYMENTS
							</h5>
							<div class="benefit-text">
								With blockchain deployed self-enforceable smart contracts, your payments are trustless and 100% secured. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body d-flex justify-content-center flex-column">
					<div class="row">
						<div class="col-2 d-flex align-items-center justify-content-center">
							<h2 class="text-dark">
								<i class="fas fa-globe-asia"></i>
							</h2>
						</div>
						<div class="col-10">
							<h5>
								TRACEABLE LOGISTICS
							</h5>
							<div class="benefit-text">
								All your order details from the manufacturer to the shipper and then to you are added to a traceable blockchain network. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body d-flex justify-content-center flex-column">
					<div class="row">
						<div class="col-2 d-flex align-items-center justify-content-center">
							<h2 class="text-dark">
								<i class="fas fa-thumbs-up"></i>
							</h2>
						</div>
						<div class="col-10">
							<h5>
								EXPERT CONSULTATION
							</h5>
							<div class="benefit-text">
								Get free consultation from experts, who support you 24/7. 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body d-flex justify-content-center flex-column">
					<div class="row">
						<div class="col-2 d-flex align-items-center justify-content-center">
							<h2 class="text-dark">
								<i class="fas fa-dollar-sign"></i>
							</h2>
						</div>
						<div class="col-10">
							<h5>
								NOMINAL PRICES
							</h5>
							<div class="benefit-text">
								Choose from products of similar quality and design to the big brands, for up to 90% lower prices.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body d-flex justify-content-center flex-column">
					<div class="row">
						<div class="col-2 d-flex align-items-center justify-content-center">
							<h2 class="text-dark">
								<i class="fas fa-boxes"></i>
							</h2>
						</div>
						<div class="col-10">
							<h5>
								NO MORE MIDDLEMAN
							</h5>
							<div class="benefit-text">
								Avoid hectic order processing and higher costs when you buy from retailers. Get direct access to manufacturers. 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$newsdatas = [];
	$newsdatas[] = [ 'style'=>"", 'title'=>"CCN", 'link'=>"https://lnkd.in/evx2GWH", 'src'=>"images/ieo/partners/ccn.png", ];
	$newsdatas[] = [ 'style'=>"", 'title'=>"Yahoo Finance", 'link'=>"https://au.finance.yahoo.com/news/blockpass-buyanylight-announce-partnership-bring-110000232.html", 'src'=>"images/ieo/partners/yfinance.png", ];
	// $newsdatas[] = [ 'style'=>"", 'title'=>"Digital Journal", 'link'=>"http://webotic.ae", 'src'=>"images/ieo/partners/digital.png", ];
	// $newsdatas[] = [ 'style'=>"", 'title'=>"ICOBench", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/partners/icobench2.png", ];
	$newsdatas[] = [ 'style'=>"", 'title'=>"bitcoinwiki", 'link'=>"https://en.bitcoinwiki.org/wiki/Buyanylight", 'src'=>"images/ieo/partners/bitcoinwiki.png", ];
	$newsdatas[] = [ 'style'=>"", 'title'=>"asiaone", 'link'=>"https://www.asiaone.com/business/blockpass-and-buyanylight-announce-partnership-bring-pass-rebate-blockpass-users", 'src'=>"images/ieo/partners/asiaone.png", ];
	$newsdatas[] = [ 'style'=>"", 'title'=>"fn", 'link'=>"https://www.finanznachrichten.de/nachrichten-2020-01/48525766-blockpass-and-buyanylight-announce-partnership-to-bring-pass-rebate-to-blockpass-users-011.htm", 'src'=>"images/ieo/partners/fn_logo.png", ];
	$newsdatas[] = [ 'style'=>"", 'title'=>"scoop", 'link'=>"https://www.scoop.co.nz/stories/WO2001/S00014/blockpass-and-buyanylight-announce-partnership.htm", 'src'=>"images/ieo/partners/scoop.png", ];

?>

<section class="section6 pt-5" style=" height: 100%;">
	<h3 class="text-center"><strong>BuyAnyLight in the News and Media</strong></h3>
	<div class="container d-flex align-items-center flex-column pb-5" style="">
		<div class="row">
			@foreach($newsdatas as $nd)
				<div class="col mt-3">
					<div class="card card-body d-flex justify-content-center align-items-center rounded">
						<a href="{{ $nd['link'] }}" class="" target="_blank">
							<img src="{{ $nd['src'] }}" style="">
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>


<section class="section7 section-buy-token" id="section-bal-token">
	<div class="pt-3 mt-3 container">
		<div class="row">
			<div class="col-7">
				<h3 class="">
					<b>
						<span>
							Buy
						</span>
						<span class="header-text">
							BAL 
						</span>
						<span>
							Tokens
						</span>
					</b>
				</h3>
			</div>
			<div class="col-5">
				<a data-fancybox href="https://www.youtube.com/embed/o8CAwwz6tIM?rel=0&enablejsapi=1" class="btn btn-BAL text-white text-left" style="font-size: 10px;">
					<i class="fas fa-play"></i>&nbsp;<b>How it works?</b>	
				</a>
			</div>
		</div>
		<div class="buying-content">
			<form action="/buy-token" method="post" enctype="multipart/form-data" id="token-form">
				@csrf()
				<div class="pt-4">
					<div class="input-group" style="height: 75px; position: relative; right: 5px;">
	  					<div class="input-group-prepend" style="width: 88px">
	    					<span class="input-group-text bal-token d-flex justify-content-center btn-ieo" id="basic-addon1" style="" data-toggle="tooltip" data-placement="right" title="BAL Token">
	    						<img src="{{ Util::assetUrl('images/logo-white-mobile.png') }}" width="28">
	    					</span>
	  					</div>
	  					<input class="form-control bal-token-input pl-4" placeholder="Enter an amount you want to buy" min="25000" name="bal" required="required" style="height: 70px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; font-size: 12px; margin-top: 3px;">
	  					<br>
					</div>
				</div>
				<div>
	  				<small>The minimum purchasing threshold is 50 USD and 200 BAL</small>
	  				{{-- <small>The minimum investment is 5,000 USD and 25,000 BAL</small> --}}
	  			</div>
				<div class="pt-4 bal-alert" style="display: none;">
					<div class="alert alert-danger" role="alert">
  						The minimum investment is 50 USD and 200 BAL
  						{{-- The minimum investment is 5,000 USD and 25,000 BAL --}}
					</div>
				</div>
				<hr>
				<div class="pt-2">
					<div class="row">
						<div class="col-12 col-md-6 ">
						@foreach($tokens as $token)
							<div class="card mb-3" style="">
  								<div class="row no-gutters">
    								<div class="col-md-3 col-3 d-flex align-items-center justify-content-center token-info"  data-toggle="tooltip" data-placement="right" title="{{ $token['symbol'] }}">
      									<p class="mb-0" style="font-size: 20px;">{!! $token['logo'] !!}</p>
    								</div>
    								<div class="col-md-9 col-9">
      									<div class="card-body card-body d-flex align-items-center justify-content-end token-value" style="height: 70px;">
        									<p class="card-text text-right mb-0">
        										<span class="{{ $token['base'] }}_value" data-value="{{ $token['bal_rate'] }}">
        											0
        										</span> <span>{{ $token['base'] }}</span><br>
        										<small class="text-muted">1 BAL = {{ $token['bal_rate'] }} {{ $token['base'] }} </small>
        									</p>
      									</div>
    								</div>
  								</div>
							</div>
							@endforeach
						</div>
						<div class="col-12 col-md-6">

							{{-- cb --}}
							{{-- ///////////////////////////////////// --}}
							<div class="card card-body bal-profit" style="z-index: 0;">
								<h5>
									<b>
										<span> Purchase today and get lucrative gains.</span>
									</b>
								</h5>
								<div class="pt-2">
									<div class="row">
										<div class="col">
											<div>
												<b>
													Cost today
												</b>
											</div>
											<span class="BAL_value">1</span> BAL=
											<span class="USD_value">0.25</span> USD
											{{-- <span class="USD_value">0.2</span> USD --}}
										</div>
										<div class="col-5">
											<div class="token-price" style="display: none;">
												<b>
													Price today
												</b>
												<br>
												<span>1</span> BAL=
												<span>0.25</span> USD
												{{-- <span>0.2</span> USD --}}
											</div>	
										</div> 
									</div>
									<div class="row">
										<div class="col">
											<div class="pt-2">
												<b>
													Cost during IEO
												</b>
											</div>
											<span class="BAL_value">1</span> BAL=
											<span class="USDIEO_value">0.30303</span> USD
										</div>
										<div class="col-5">
											<div class="pt-2 token-price" style="display: none;">
												<b>
													Price during IEO
												</b>
												<br>
												<span>1</span> BAL=
												<span>0.30303</span> USD
											</div>
										</div>
									</div>
								</div>
								<div class="pt-2">
									<div>
										<b>Gain on purchasing the token now!</b>
									</div>
									<div class="row">
										<div class="col">
											 	Gain Ratio : 21.21% 
												{{-- ROI = 51.52% --}}
										</div>
										<div class="col">

										</div>
									</div>
									<div class="row">
										<div class="col">
											Gain Made in USD :
											<span class="USD_return">0.05303 USD</span>		
											{{-- <span class="USD_return">0.10303 USD</span>		 --}}
										</div>
										<div class="col">
												
										</div>
									</div>
								</div>
								{{-- <div class="corner-ribbon bottom-right red shadow">
									<span style="font-size: 13px;">17.5% Discount!</span>
								</div> --}}
								
								<div class="row mt-4 justify-content-center" style="height: 50px;">
								<p class="ribbon small">
								  	<span class="text">
								  		<strong class="bold">17.5% OFF</strong> until IEO Sale!
								  	</span>
								</p>									
								</div>
							</div>
							{{-- ///////////////////////////////// --}}
							{{-- cb --}}




							<div class="pt-4">
								<div class="form-group">
									<label> <b>Step 1:</b> Select Currency to buy BAL Tokens</label>
									<select name="currency" class="form-control" required>
										@foreach($tokens as $token)
											<option value="" class="{{ $token['base'] }}_value">{{ $token['base'] }}</option>
										@endforeach
									</select>
									<small class="pt-3">
															<b>
																We accept: 
															</b>
															Visa, Mastercard, Bank Transfer, Bitcoin, Ethereum
														</small>
								</div>
								@if(!empty($code))
									<input type="hidden" name="referral_code" value="{{ $code }}">
								@endif
								<button type="submit" class="btn btn-buy-token w-100" style="border-radius: 10px; color: #fff;" id="token-btn">
									<b>Buy Tokens Now!</b>
								</button>
					
							</div>
						</div>
						<div class="container">
							<div class="card card-body add-token mt-3">
								How to add a Custom ERC20 Token / our BAL Token to your Ethereum wallet? <br>
								<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">Check out this easy step-by-step guide</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>


<section class="section8">
	<div class="container pt-5 pb-5 mt-5">
		<div class="text-justify">
			<h3 class="text-center">
				<b>
					<span class="header-text">Our</span>
					<span class="text-white">Vision</span>
				</b>
			</h3>
			<div class="text-center mt-3">
				<img class="video" src="{{ Util::assetUrl('/images/ieo/meetbal.png') }}" width="50%">
			</div>
			<p class="pt-3 text-white">
				We want to revolutionize the entire sourcing process by harnessing the power of blockchain, AI, big data, and smart contracts. Starting from the LED lighting industry, we aim to expand the BAL Network into other industries, among them the construction and precious metal industries. 
			</p>
		</div>
		<div class=" text-justify pt-3">
			<h3 class="text-center">
				<b>
					<span class="header-text">Our</span>
					<span class="text-white">Mission</span>
				</b>
			</h3>
			<div class="text-center mt-3">
				<img class="video" src="{{ Util::assetUrl('/images/ieo/mission.png') }}" width="50%">
			</div>
			<p class="pt-3 text-white">
				Our mission is to become the platform of choice for individuals, businesses, and manufacturers. Principled, honest, and focused, we leverage the world’s best suppliers and deliver the most significant value LED products, with the most exceptional service and advice, and first-rate customer satisfaction – every time.
			</p>
		</div>
	</div>
</section>
<section class="section9" id="why-token">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">Why Choose</span> BAL Token?
			</b>
		</h3>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/1.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Decentralization</b></h5>
			<div class="text-center pt-2">
				<p>
					BAL is decentralized and community owned.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/2.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Security</b></h5>
			<div class="text-center pt-2">
				<p>
					All transactions in BAL are secured by smart contracts.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/3.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Utility</b></h5>
			<div class="text-center pt-2">
				<p>
					BAL token is the native token within the BAL ecosystem.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/4.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Liquidity</b></h5>
			<div class="text-center pt-2">
				<p>
					Exchange or transfer value as simple as sending an email.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/5.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Nominal Transactional Fee</b></h5>
			<div class="text-center pt-2">
				<p>
					Transfer up to a million dollars for only a single digit fee.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/6.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>Transparency</b></h5>
			<div class="text-center pt-2">
				<p>
					All transactions are transparent and auditable.
				</p>
			</div>
		</div>
	</div>	
</section>


<section class="section10" id="roadmap">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">BAL</span>
				<span class="text-white">Roadmap</span>
			</b>
		</h3>

		<div>
			<p class="text-white text-justify">
				The BAL platform is an established business with a ready platform. To expand our operations and decentralize our business model through blockchain we have devised a solid plan and an ambitious roadmap, with an expert team, and we are positioned to expand globally. Our ability to rapidly deploy a solution once the technology has been developed makes our financial goal more achievable.
			</p>
		</div>
		
		<div class="container text-center text-white">
				{{-- roadmap --}}
				{{-- ////////////////////////////////////////////////////////////////// --}}
			
				<?php

					$timeline = [];
					$timeline[] = [
						'name' => '2014',
						'icon' => 'fas fa-archway',
						'style' => '',
						'items' => [
							'Foundation of Almani Lighting Gmbh.',
						],
					];
					$timeline[] = [
						'name' => '2015',
						'icon' => 'far fa-handshake',
						'style' => '',
						'items' => [
							'Foundation of Almani Lighting LLC, Dubai.',
							'Strategic Partnerships.',
						],
					];
					$timeline[] = [
						'name' => '2016',
						'icon' => 'fas fa-users',
						'style' => '',
						'items' => [
							'BAL Idea inception. Research and feasibility and development team recruitment.',
						],
					];
					$timeline[] = [
						'name' => '2017',
						'icon' => 'fas fa-warehouse',
						'style' => '',
						'items' => [
							'51% Ownership acquisition of Almani Lighting LLC by ASAS Holding, warehouse expansion.',
							'BAL Light Finder development and testing.',
						],
					];
					$timeline[] = [
						'name' => '2018',
						'icon' => 'fas fa-sitemap',
						'style' => '',
						'items' => [
							'Team expansion, product range extended to 600+.',
							'Fiat partner collaboration, major Sheikh palace contracts in UAE.',
						],
					];
					$timeline[] = [
						'name' => '2019',
						'icon' => 'fas fa-at',
						'style' => '',
						'items' => [
							'BAL Beta version release,',
							'documentation and drafting,',
							'Website development and launch,',
							'seed round finished and public token sale.',
							'Marketing kickstart.',
						],
					];
					$timeline[] = [
						'name' => '2020',
						'icon' => 'fas fa-link',
						'style' => '',
						'items' => [
							'IEO sale and listing on exchanges.',
							// 'Blockchain development team expansion',
							'Blockchain based platform development initiated.',
							'Smart contracts development, wallet development with cross-chain.',
							'Asset exchange.',
							'Traceable logistic partnerships and development initiated.',
							]
						];
					$timeline[] = [
						'name' => '2021',
						'icon' => 'fas fa-mobile',
						'style' => '',
						'items' => [
							'Traceable logistic functionality implementation.',
							'Alpha version release.',
							'Mobile apps release.',
						],
					];
					$timeline[] = [
						'name' => '2022',
						'icon' => 'fas fa-brain',
						'style' => '',
						'items' => [
							'On-chain logistic fully implemented.',
							'AI-based smart contracts implementation.',
							'BAL custodial platform development.',
						],
					];
					$timeline[] = [
						'name' => '2023',
						'icon' => 'fas fa-file',
						'style' => '',
						'items' => [
							'Expansion into construction industry.',
							'BAL tokenization platform development.',
							'Smart contract notary service launch.',
						],
					];

				?>

				<div id="timeline-content">
					<ul class="timeline1">
						@foreach ($timeline as $key => $tmls)
								<li class="event" data-date="">
									<h6 class="mb-3">
										<b>{{ $tmls['name'] }}</b>
									</h6>
									@foreach ($tmls['items'] as $content)
									<p data-aos="fade-left" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">{{ $content }}</p>
									@endforeach
								</li>
						@endforeach
					</ul>
				</div>	
				<!-- <div>
					<span class="text-white">
						To view the full roadmap, Check our white paper
					</span>
					<div class="mt-2">
						<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}"  target="_blank" class="btn buy-btn">
							<i class="far fa-file-pdf"></i>
						    &nbsp;
							Whitepaper
						</a>
					</div>
				</div> -->

				{{-- ////////////////////////////////////////////////////////////////// --}}
				{{-- roadmap --}}




		</div>
	</div>
</section>

<section class="section11">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">BAL Crowd Sale</span>
				<span >Information</span>
			</b>
		</h3>
		<div>
			<h4 class="text-center"> <b>Token Information</b></h4>
			<div class="mt-3 text-center">
				<img src="{{ Util::assetUrl('images/ieo/bal-token.png') }}" width="75%">
			</div>
			<div class="row pt-3">
				<div class="col-6">
					<div>
						<b>Token name:</b>
					</div>
					<div class="pt-2">
						<b>Ticker:</b>
					</div>
					<div class="pt-2">
						<b>Network:</b>
					</div>
					<div class="pt-2">
						<b>Soft Cap:</b>
					</div>
					<div class="pt-2">
						<b>Hard Cap:</b>
					</div>
					<div class="pt-2">
						<b>Total supply:</b>
					</div>
					<div class="pt-2">
						<b>IEO price:</b>
					</div>
					<div class="pt-2">
						<b>Pre-IEO Sale price:</b>
					</div>
					<div class="pt-2">
						<b>Private Round price:</b>
					</div>
				</div>
				<div class="col-6">
					<div>
						BAL Token
					</div>
					<div class="pt-2">
						BAL
					</div>
					<div class="pt-2">
						Ethereum
					</div>
					<div class="pt-2">
						2 Million USD
					</div>
					<div class="pt-2">
						8 Million USD
					</div>
					<div class="pt-2">
						55 Million BAL
					</div>
					<div class="pt-2">
						1BAL = 0.30303 USD
					</div>
					<div class="pt-2">
						1BAL = 0.25 USD
					</div>
					<div class="pt-2">
						1BAL = 0.20 USD
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section12">
	<div class="container">
		<h3 class="text-center">
			<b>
				<span class="header-text">Funds Distribution</span>
				<span >Plan</span>
			</b>
		</h3>
		<div class="text-justify pt-3">
			<p class="text-justify">
				Our aim is to make BAL Platform the leading marketplace for sourcing light products around the world, and we have devised a plan to make our dream a reality. The proceeds from the token sale will fund the decentralized platform launch, continued platform development, user acquisition, and marketing:
			</p>
			<div class="pt-3">
				<div>
					<p class="mb-0"><b>DEVELOPMENT AND GROWTH</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%; background-color: #72649F;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							40%
  						</p>
					</div>
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>MARKETING EXPENSE</b></p>
					<div class="progress ">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%; background-color: #9B81CA;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							20%
  						</p>
					</div>			
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>HIRING SPECIALISTS AND BUILDING TEAM</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #7481C5;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>	
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>PROMOTER EXPENSE</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #BF81CA;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>	
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>ADMINISTRATIVE CHARGES AND LEGAL ISSUES</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #A5ADD9;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>	
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>FOUNDING TEAM</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #9B81CA;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section13">
	<div class="container">
		<div class="pt-5" id="allocation">
			<h3 class="text-center">
				<b>
					<span class="header-text">Token</span>
					<span>Distribution</span>
				</b>
			</h3>
			<div class="text-center pt-3"> 
				<img src="{{ Util::assetUrl('images/ieo/pie-chart.png') }}" width="60%">
			</div>
			<div class="row pt-4">
				<div class=" col-6">
					<ul class="token-list">
						<li>
							<div class="d-flex align-items-start">
								<div class="d-inline-block">
									<i style="color: #754973;" class="fas fa-circle"></i>
								</div>
								<div class="d-inline-block pl-2">
									<span> 
										20% (11 mil)
									</span>
									<br>	 
									<span>
										Seed Investor Allocation <br>
									<a target="_blank" href="https://etherscan.io/address/0xe8c066E2A338e57d220C34306B9B1f4e2490DFf3#tokentxns">View Allocation</a>
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
										10% (5.5 mil)
									</span>
									<br>	 
									<span>
										Private & Pre-IEO Sale
										<br>
										<a target="_blank" href="https://etherscan.io/address/0x56d700c93184F1A440eF49A366f5532AB2611b4D#tokentxns">View Allocation</a>
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
										30% (16.5 mil)
									</span>
									<br>	 
									<span>
										Main Sale Event<br>
										<a target="_blank" href="https://etherscan.io/address/0x955a5d4f04e7Ce70b2783D84eA38A483ED00DdEf#tokentxns">View Allocation</a>
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
										10% (5.5 mil)
									</span>
									<br>	 
									<span>
										Advisory Board Allocation<br>
										<a target="_blank" href="https://etherscan.io/address/0xbDC7B020FCFbB08877cF7af9F78591D06F881BAf#tokentxns">View Allocation</a>
									</span>	
								</div>
							</div>
						</li>								
					</ul>						
				</div>
				<div class=" col-6">
					<ul class="token-list">
						<li>
							<div class="d-flex align-items-start">
								<div class="d-inline-block">
									<i style="color: #e74a3b;" class="fas fa-circle"></i>
								</div>
								<div class="d-inline-block pl-2">
									<span> 
										5% (2.75 mil)
									</span>
									<br>	 
									<span>
										Bounty and Airdrop<br>
										<a target="_blank" href="https://etherscan.io/address/0x997C48bF57fa3234ee718D0e3d6D0AD496aC5E83#tokentxns">View Allocation</a>
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
										10% (5.5 mil)
									</span>
									<br>	 
									<span>
										Team and Management<br>
										<a target="_blank" href="https://etherscan.io/address/0x0482AeFB13627A10b5489a89fE7d6F49Eb62B9B2#tokentxns">View Allocation</a>
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
										15% (8.25 mil)
									</span>
									<br>	 
									<span>
										Reserve<br>
										<a target="_blank" href="https://etherscan.io/address/0x412ca7c3ed4Fe0d213C08443E261224b5EEd6222#tokentxns">View Allocation</a>
									</span>	
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section14" id="coreteam">
	<div class="container pt-5 pb-5">
		<h3 class="text-center">
			<b>
				Meet Our <span class="team-text">Team</span> <span class="advisor-text">Advisors</span>
			</b>
		</h3>
		<ul class="nav nav-pills mt-5 mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active team" id="pills-team-tab" data-toggle="pill" href="#pills-team" role="tab" aria-controls="pills-home" aria-selected="true">Team</a>
			</li>
			<li class="nav-item">
				<a class="nav-link advisory" id="pills-advisory-tab" data-toggle="pill" href="#pills-advisory" role="tab" aria-controls="pills-profile" aria-selected="false">Advisory</a>
			</li>
		</ul>

		<?php
			$coreTeam = [];
			$coreTeam[] = [	'name'=>'Johannes Eidens', 'title'=>'CEO & Founder', 'linkedin'=>'https://www.linkedin.com/in/dotcomv', 'image'=>'images/ieo/team/joh.jpg', 'text'=>'Mr. Johannes, the founder, and CEO is a dreamer by nature and has charted his own unconventional career path as a serial entrepreneur. Following his dreams has led him to build successful businesses, he started with a master degree in International Management to the creation of a vast portfolio of successful startups and early-stage companies that includes but is not limited to Almani Lighting LLC, ZoomDNA.com, DubaiConsult.com, and Dotcom Ventures FZE.<br><br>Through his path, he’s developed expertise in navigating career changes, career reinvention, inspired leadership, life & work strategies, as well as intra and entrepreneurship. He has studied at a top German University and under the best in class entrepreneurs and leaders that aid in him delivering the very best to his businesses and end clients.<br><br>BuyAnyLight is his latest venture, whereby he is aiming to streamline and simplify the Light Sourcing process by helping home owners, contractors, consultants, project owners and tower builders get the best in the market LED Products at the most competitive rates.', 'model_no' => 1 ];
			$coreTeam[] = [	'name'=>'Martin Heyen', 'title'=>'Co-Founder & CFO', 'linkedin'=>'', 'image'=>'images/ieo/team/martin.jpg', 'text'=>'A serial entrepreneur, venture capitalist and expert in International Business and Management. He is the founder of Almani Lighting GmbH, Germany and also the director and owner of Norok GmbH. He also manages and develops an international property portfolio. His passion for lighting has deep roots: His father, Dr. Meino Heyen, is the founder of AIXTRON GmbH which is listed on the Frankfurt Stock Exchange. AIXTRON achieved impressive innovations within the LED and OLED industry which are the fundamentals for Almani Lightings existence today.<br><br>Martin also has been a venture capitalist and early stage investor since early 2000 and have helped a multitude of successful startups and early-stage companies under his portfolio. Martin owns a good fortune generated from his investments and has been an inspiration to young entrepreneurs with High Potential ideas. BuyAnyLight is one of his venture on his mission to gap revolutionizing the entire LED Lighting industry with modern-age technical infrastructure.<br><br>Mr. Martin is a highly goal-driven, experienced finance professional with significant academic knowledge and over 20 years of financial management, audit, accounting, financial analysis, reporting, budgeting and corporate finance experience. Highly skilled in treasury management & planning, taxation, internal controls evaluation, financial modeling and cash flow management; proficient in assisting clients in operational improvements.He serves as a team leader who thrives in advanced teamwork situations, exceedingly capable to collaborate with diversely talented teams, extremely motivated to make BuyAnyLight the leading LED Sourcing platform of the world.', 'model_no' => 2 ];
			$coreTeam[] = [	'name'=>'Leo Vicente', 'title'=>'Chief Technical Officer', 'linkedin'=>'https://www.linkedin.com/in/ljvicente', 'image'=>'images/ieo/team/leo.jpg', 'text'=>'Mr. Leo Vicente is the Chief Technology Officer at BuyAnyLight. He is an IT Professional with over 10 years of experience in Project/Product Management, design, application architecture, development, data modeling testing, telecommunication, blockchain solutions and Implementation of Software Solutions. A good team player with the ability to work independently, having excellent communication and interpersonal skills. Expertise in design, development and implementation of component based client/server, n-tier applications and web development, using object technology.<br><br>Mr. Leo has created and launched a huge number of projects of enterprise scale, among which some of the prominent projects are: development of in-house infrastructure for Almani Lighting Software, BuyAnyLight Light Finder Platform and integration with blockchain etc.<br><br>His main task as a Chief Technical Officer of BAL is to implement technology strategies and ensuring that the technological resources are aligned with the company’s business needs. Leo actively participate in the engineering efforts to ensure the solutions are delivered correctly and efficiently.', 'model_no' => 3];
			$coreTeam[] = [	'name'=>'Muhammad Younas', 'title'=>'Chief Operating Officer', 'linkedin'=>'https://www.linkedin.com/in/muhammad-younas2023', 'image'=>'images/ieo/advisors/muhammad.jpg', 'text'=>'Mr. Muhammad is the Chief Operating Officer of BuyAnyLight. He is an experienced individual with more than ten years of industry experience. From startups to fully matured businesses, he has worked with over 500 clients as a consultant. He has experience in overseeing various operational teams with the goal of optimizing service delivery for end consumers and customers. <br><br>Muhammad has extensive knowledge in blockchain technologies, Initial Coin Offerings (ICO), Security Token Offerings (STO), Initial Exchange Offering, business development, Artificial Intelligence (AI) technology, Internet of things (IoT), Crowd Funding, Venture capital industry. He is proficient in Community management, Community Growth, and Digital Marketing. Muhammad’s background in computer science had blessed him with the cognitive ability to comprehend technical information, and he ensures to transform the idea into a seed to be planted in the reader´s minds and hearts. Muhammad also has a diverse experience in the provision of research, content, and copywriting solutions for companies based on FinTech and blockchain. Since 2017, he has helped over 75 blockchain startups, ICOs, STO, and IEOs, with his role starting from initial research and idea refinement to drafting authority documents i.e., white papers and business proposals to delivering quality copy/content in areas such as website, video script and blogs, articles and press releases.<br><br>At BuyAnyLight, he directly manages and play an integral role in developing leaders of several operational teams covering Business Operations, Business Development, Customer Success, etc. and work closely with leadership teams overseas to ensure international alignment and operational effectiveness.', 'model_no' => 13];
			$coreTeam[] = [	'name'=>'Rene Rowell dela Rama', 'title'=>'Director of Blockchain Integration', 'linkedin'=>'https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148', 'image'=>'images/ieo/team/rene.jpg', 'text'=>'Rene is working as the BAL Director of Blockchain Integration and the scope of his role is to interpret complex technical blockchain infrastructure and express clearly the goal to a variety of cross-functional stakeholders.<br><br>Rene is an innovative person with broad understanding of cryptocurrency and matters involving around it. He is greatly exposed to international trends and is always looking for ways to further push the limits of encrypted technology.<br><br>Rene also develops and implement software modules and at the same time diagnose and resolve issues of the BAL Platform. He is also responsible for developing innovative solutions to challenging problems, including command and control and high integrity solutions.', 'model_no' => 4];
			$coreTeam[] = [	'name'=>'Rizvi Iqbal', 'title'=>'Blockchain & DLT Specialist', 'linkedin'=>'https://www.linkedin.com/in/rizviqbal', 'image'=>'images/ieo/team/rizvi.jpg', 'text'=>'Mr. Rizvi is the Blockchain/DLT Specialist with the BuyAnyLight Project. His role for the project is to define key elements regarding Blockchain and Distributed Ledger Technology. He provides an in-depth analysis of the performance and scalability of the system as well as developing infrastructure and tools to analyze blockchain transactions.', 'model_no' => 5];
			$coreTeam[] = [	'name'=>'Artem Gordadze', 'title'=>'Marketing Specialist', 'linkedin'=>'https://www.linkedin.com/in/artem-gordadze', 'image'=>'images/ieo/team/artem.jpg', 'text'=>'My contribution to the BAL team is to conduct market research to develop data about the current trends and habits for the intended clients. I made conclusions for the market data analysis by gathering results from campaigns, conversion rates and website traffic online. I use all the data to improve the BAL Platform\'s future campaigns and strategies.', 'model_no' => 6];	
			$coreTeam[] = [	'name'=>'Nantha Kumar', 'title'=>'Sales Director', 'linkedin'=>'https://www.linkedin.com/in/nantha-kumar-36b92685', 'image'=>'images/ieo/team/nantha.jpg', 'text'=>'My main participation with BuyAnyLight as a Sales Director is to ensure that my team will be able to accelerate sales growth. I generate and submit sales-related reports to management for evaluation. Additionally, we collaborate with senior sales team for the BAL Platform to set revenue goals and future strategic plans and make sure the successful execution of these strategies to achieve the company’s financial target.', 'model_no' => 7];
			$coreTeam[] = [	'name'=>'Marc Vazquez', 'title'=>'Sourcing, Production & Investors Relations', 'linkedin'=>'https://www.linkedin.com/in/marc-vazquez-6b01a794', 'image'=>'images/ieo/team/marc.jpg', 'text'=>'I am responsible for the BuyAnyLight’s Sourcing, Production and Investors Relations. I expedite the gathering of data for research models, support development and investment information. I together with my team extracts market and peer data to create more leads. I also participate in the monthly and quarterly report for shareholders and management for feedback regarding the project.', 'model_no' => 8];					
			$coreTeam[] = [	'name'=>'Ryan Quines', 'title'=>'Design Lead', 'linkedin'=>'https://www.linkedin.com/in/ryan-matthew-quines-551a85152', 'image'=>'images/ieo/team/ryan.jpg', 'text'=>'My major contribution to BuyAnyLight project is to create and integrate creative designs for the overall impression of the platform. I work closely with the graphic designs and photographs to create a much-needed piece to complete every detailed to achieve perfections. I also collaborate with content specialists and management to be able to deliver impressive results. I develop the overall layout and production design for BAL.', 'model_no' => 9];
			$coreTeam[] = [	'name'=>'Zain Ul Abdin', 'title'=>'Senior Architect', 'linkedin'=>'https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a', 'image'=>'images/ieo/team/zain.jpg', 'text'=>'I am the Senior Architect for the BuyAnyLight project, my active participation entails on the tactical level of the organization. I work directly with business representatives to figure out specific requirements to determine design solutions. Portion of my job concentration is with regards to budgeting, contracts and structural specifications.', 'model_no' => 10];
			$coreTeam[] = [	'name'=>'Shajudeen Yousf', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/shajudeen-yousf-783452146/', 'image'=>'images/ieo/team/shajudeen.jpg', 'text'=>'As an LED lighting designer architect, I am responsible to identify the core values of BuyAnyLight. In this role, I am facing the client and need to take ownership of projects while assisting in creating appropriate led lighting design solutions through to completion.', 'model_no' => 11];
			$coreTeam[] = [	'name'=>'Ammar Mohamed', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/ammar-mohamed-231379103/', 'image'=>'images/ieo/team/ammar.jpg', 'text'=>'My responsibilities as Lighting Designer Architect are mainly: Preparing renderings, drawings and specification, Assisting with the concept development, visualization, calculations and design development of the company\'s specialist lighting design projects. Attending site meetings and presenting creative designs to clients are also part of my tasks.', 'model_no' => 12];
			$coreTeam[] = [	'name'=>'Chad Hanson', 'title'=>'Social Media, Community Manager', 'linkedin'=>'https://www.linkedin.com/in/chad-hanson-a747a2137/', 'image'=>'images/ieo/team/chad.jpg', 'text'=>'My role with BuyAnyLight includes working alongside other community managers and the marketing department to promote the project, build and maintain community relations, and provide accurate answers to community questions.', 'model_no' => 14];
			$coreTeam[] = [	'name'=>'Maria Carron Igloso', 'title'=>'Investor relations and Public Relations Manager', 'linkedin'=>'https://www.linkedin.com/in/maria-carron-igloso-1324b5105', 'image'=>'images/ieo/team/maria.jpg', 'text'=>'I am BuyAnyLight\'s Investor Relations and Public Relations Manager. I facilitate all the release of information to investors and the general public. I handle meetings and inquiries and reports back to the management for results. I also take part in providing a solution to crisis management. My other task for BuyAnyLight is to maintain professional connections to all clients and investors.', 'model_no' => 15];		
			$coreTeam[] = [	'name'=>'Tiffany Anggot', 'title'=>'Director Of Strategic Partnerships', 'linkedin'=>'https://www.linkedin.com/in/tiffany-jel-a-367548147', 'image'=>'images/ieo/team/tiffany.jpg', 'text'=>'My responsibility is to expand community relations and informing partners of strategic business goals. I work closely with other executives to define short-and long-terms policies and strategies and then connect with the stakeholders to expand on these company visions.', 'model_no' => 16];
			$coreTeam[] = [	'name'=>'Juliane Schreilechner', 'title'=>'Training Consultant', 'linkedin'=>'https://www.linkedin.com/in/juliane-schreilechner-142108174/', 'image'=>'images/ieo/team/juliane.jpg', 'text'=>'I am the Training Consultant for the BuyAnyLight team, and my key responsibilities are developing and organizing educational activities to boost team\'s job performance. Training, seminars and courses with regards to cryptography, blockchain and smart contracts were organized to keep a well-versed and confident BAL team. Creating a non-toxic work culture with high efficiency will remain my utmost goal.', 'model_no' => 17];		
		?>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab">
				<div class="row justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col-6 mt-5 text-center">						
						<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">
							@if($tm['linkedin'])
							<a href="{{ $tm['linkedin'] }}" class="text-white linkedin" style="font-size: 20px;" target="_blank">
								<i class="fab fa-linkedin"></i>
							</a>
							@else
								<span class="text-white linkedin" style="font-size: 20px;">
									<i class="fab fa-linkedin"></i>
								</span>
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
						<button class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#TeamModal{{$tm['model_no']}}">About Me</button>
						<div class="modal fade" id="TeamModal{{$tm['model_no']}}" tabindex="-1" role="dialog" aria-labelledby="TeamModalLabel" aria-hidden="true">
  							<div class="modal-dialog" role="document">
    							<div class="modal-content">
      								<div class="modal-body text-left text-dark">
	        							<button type="button" class="close" data-dismiss="modal" 	aria-label="Close">	
	        								<span aria-hidden="true">&times;</span>
	        							</button>
	        							<h5>
	        								{{ $tm['name'] }}
	        							</h5>
	        							<hr>
	        							<p>
        									{!! $tm['text'] !!}	
	        							</p>
      								</div>
    							</div>
  							</div>
						</div>						
					</div>
				@endforeach
				</div>
			</div>
		
			<div class="tab-pane fade" id="pills-advisory" role="tabpanel" aria-labelledby="pills-advisory-tab">
					<div class="container pb-5">
				
					<?php
						$coreTeam = [];
						$coreTeam[] = [	'name'=>'Khalid Almutawa', 'title'=>'Partner and Chairman ASAS Holding Group', 'linkedin'=>'', 'image'=>'images/ieo/advisors/khalid.jpg', 'text'=>'My participation with BuyAnyLight is not limited to leadership and governance alone, I pledge my full dedication with the BAL project to make it a success. I am responsible for creating an effective and harmonious step by step transition of the project. I ensure an effective relationship with everyone who participates in the BuyAnyLight project by allowing a constructive exchange of theories and opinions. I also ensure that every strategies and policy are lawfully implemented within the organization.', 'model_no' => 18];
						$coreTeam[] = [	'name'=>'Sebastijan Eder', 'title'=>'Partner, 0C Ventures', 'linkedin'=>'https://www.linkedin.com/in/sebastijan-eder-a8235028/', 'image'=>'images/ieo/advisors/sebastijan.jpg', 'text'=>'My association with BuyAnyLight revolves around strengthening the project knowledge by providing precise analysis of financial data that will uphold the project\'s current business strategies. I endorse the verification of the effectivity of commercial, financial and operational targets to make sure that expected results were delivered. I also must build a strong relation and partnership with future stakeholders, business people, and everyone who wish to take part in the project.', 'model_no' => 19];
						$coreTeam[] = [	'name'=>'Ralph Kattan ', 'title'=>'Team leader Accounting & Regulatory Information Santander Consumer Bank AG, Germany*', 'linkedin'=>'https://www.linkedin.com/in/ralph-kattan-709103191/', 'image'=>'images/ieo/advisors/ralph.jpg', 'text'=>'My key role as BuyAnyLight Advisor is to manage and monitor effective project and ventures to help conclude an adequate marketing plan for the BuyAnyLight Platform. I take part in connecting the business with numerous affiliates to help prepare a qualified budget for the development of the BAL project. I also maintain constant communication with clients, networks and associates to ensure correct information about the project\'s progress are disseminated.', 'model_no' => 20];
						$coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'International Key Account Manager, CustomBiotech EMEA/LATAM at Roche Diagnostic Germany', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'I assist the team with insights on how to work on the project systematically by undertaking market research. I assist in creating sustainable progress on the BuyAnyLight platform. As an advisor, I also help to enterprise the project by creating leads through affiliates. I maintain a constant data feed on analytical business report.', 'model_no' => 21];
						$coreTeam[] = [	'name'=>'Dr. Moritz Eidens', 'title'=>'CEO PharmGenomics GmbH', 'linkedin'=>'https://www.linkedin.com/in/dr-moritz-eidens-80550910/', 'image'=>'images/ieo/advisors/moritz.jpg', 'text'=>'My involvement with BuyAnyLight project revolves around the proper analysis of the business plan to give counsel on marketing, investments and potential funding opportunities. I also perform extensive research on processes and endeavor on recommendations for changes in strategy to improve the project development. I also aid on issue and risk analysis to mitigate the business threats involved in the implementation of the project.', 'model_no' => 22];
						// $coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'Strategy & Business Development EMEA/LATA', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'', ];
						//$coreTeam[] = [	'name'=>'Dr. Stefan Freh', 'title'=>'Specialist Solicitor Industrial Law', 'linkedin'=>'', 'image'=>'images/ieo/advisors/stefan.jpg', 'text'=>'The best time to plant a tree was 20 years ago. The second best time is now.', ];
						$coreTeam[] = [	'name'=>'Mohsin Irshad', 'title'=>'Sr. UI/UX Designer at EXCEED IT Services', 'linkedin'=>'https://www.linkedin.com/in/mohsin-irshad-8b982532', 'image'=>'images/ieo/advisors/mohsin.jpg', 'text'=>'I am a proud Sr. UI/UX Designer Advisor for BuyAnyLight project. I present the team with organized information to create a unique interactive experience that could attract users into the platform. Most of my input to the project was through my years of testing and user research. I also contribute to task flows, design ideas, GUI elements and sitemaps of the BAL platform.', 'model_no' => 23];		
						$coreTeam[] = [	'name'=>'Janis Leitans', 'title'=>'Scientific Assistant, Latvian Biomedical Research Centre', 'linkedin'=>'https://www.linkedin.com/in/janis-leitans-16297269/', 'image'=>'images/ieo/team/janis.jpg', 'text'=>'I take part in providing possible business support landscape for the BuyAnyLight project. My in-depth knowledge allows me to advise BuyAnyLight team with a range of options available for the business development of the project. I provide counsel on the business planning process to attract more leads through improved techniques.', 'model_no' => 24];	
					?>
					<div class="row justify-content-center">
					@foreach($coreTeam as $tm)
						<div class="col-6 mt-5 text-center">						
							<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">
							@if($tm['linkedin'])
								<a href="{{ $tm['linkedin'] }}" class="text-white linkedin" style="font-size: 20px;" target="_blank">
									<i class="fab fa-linkedin"></i>
								</a>
							@else
								<span class="text-white linkedin" style="font-size: 20px;">
									<i class="fab fa-linkedin"></i>
								</span>
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
							<button class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#TeamModal{{$tm['model_no']}}">About Me</button>
							<div class="modal fade" id="TeamModal{{$tm['model_no']}}" tabindex="-1" role="dialog" aria-labelledby="TeamModalLabel" aria-hidden="true">
  								<div class="modal-dialog" role="document">
    								<div class="modal-content">
      									<div class="modal-body text-left text-dark">
	        								<button type="button" class="close" data-dismiss="modal" 	aria-label="Close">	
	        									<span aria-hidden="true">&times;</span>
	     		   							</button>
	        								<h5>
	        									{{ $tm['name'] }}
	        								</h5>
	        								<hr>
	    									<p>
    											{!! $tm['text'] !!}	
     		   								</p>
      									</div>
    								</div>
  								</div>
							</div>						
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

























{{-- partners --}}
{{-- ////////////////////////////////////////////////////////////// --}}
<section class="section15" id="partners" style="background-image: url({{ Util::assetUrl('images/ieo/partners-bg-hr.png') }});">
	<div class="pt-0">
		<div class="pt-0 pb-4">
			<div class="container">

				{{-- <div class="pt-5 ">
					<h3 class="text-center">
						<strong>
							<span class="text-white">
								Our
							</span>
							<span class="text-white">
								Partners
							</span>
						</strong> 
					</h3>
				</div> --}}


				<?php
					$partners = [];
					$partners[] = [ 'style'=>'', 'title'=>'Almani', 'alt'=>'Almani', 'src'=>Util::assetUrl('images/ieo/partners/almani.png'), 'link'=>'https://almani.ae' ];
					// $partners[] = [ 'style'=>'', 'title'=>'CamelLED', 'alt'=>'CamelLED', 'src'=>Util::assetUrl('images/ieo/partners/camel_led.png'),  'link'=>'https://camel.almani.ae'];
					$partners[] = [	'style'=>'', 'title'=>'Blockpass', 'alt'=>'Asas', 'src'=>Util::assetUrl('images/ieo/partners/blockpass.png'), 'link'=>'https://www.blockpass.org/buyanylight/'];
					$partners[] = [ 'style'=>'', 'title'=>'Dotcom Ventures', 'alt'=>'Dotcom Ventures', 'src'=>Util::assetUrl('images/ieo/partners/dotcom_ventures.png'), 'link'=>'https://dotcomv.com'];
					$partners[] = [ 'style'=>'', 'title'=>'Dubai Consult', 'alt'=>'Dubai Consult', 'src'=>Util::assetUrl('images/ieo/partners/dubai_consult.png'),  'link'=>'https://dubaiconsult.com/'];
					$partners[] = [ 'style'=>'', 'title'=>'Continental Investments', 'alt'=>'Continental Investments', 'src'=>Util::assetUrl('images/ieo/partners/continental.png'), 'link'=>'http://www.continvest.net'];
					$partners[] = [ 'style'=>'', 'title'=>'Asas', 'alt'=>'Asas', 'src'=>Util::assetUrl('images/ieo/partners/asas.png'), 'link'=>'https://asasholding.ae'];
					$partners[] = [ 'style'=>'', 'title'=>'German UAE', 'alt'=>'German UAE', 'src'=>Util::assetUrl('images/ieo/partners/german_uae.png'), 'link'=>'https://uae.diplo.de/ae-en/vertretungen/generalkonsulat1'];
					// $partners[] = [ 'style'=>'', 'title'=>'Light Middles East', 'alt'=>'Light Middles East', 'src'=>Util::assetUrl('images/ieo/partners/light_middles_east.png'), 'link'=>'https://light-middleeast.german-pavilion.com/en/exhibitors/80967/'];
					$partners[] = [	'style'=>'', 'title'=>'Light Middle East', 'alt'=>'Light Middle East', 'src'=>Util::assetUrl('images/ieo/partners/madeingermany.png'), 'link'=>'https://light-middleeast.german-pavilion.com/en/exhibitors/80967/'];
					$partners[] = [ 'style'=>"", 'title'=>"Airdrop Village", 'link'=>"https://airdropvillage.io/airdrop/buyanylight", 'src'=>"images/ieo/marketing-partners/airdropvillage.png", ];
					$partners[] = [ 'style'=>"", 'title'=>"Airdrop King", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/marketing-partners/airdropking.png", ];
					$partners[] = [ 'style'=>"", 'title'=>"Webotic.ae", 'link'=>"http://webotic.ae", 'src'=>"images/ieo/marketing-partners/webotic.png", ];
					$partners[] = [ 'style'=>"", 'title'=>"Airdrop Alert", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/marketing-partners/airdropalert.png", ];
					$partners[] = [ 'style'=>"max-width: 180px;", 'title'=>"Vitro Services", 'link'=>"https://vitor-services.company", 'src'=>"images/ieo/marketing-partners/vitor-services2.png", ];
					$partners[] = [ 'style'=>"", 'title'=>"Consulate General of the Federal Republic of Germany Dubai", 'link'=>"https://uae.diplo.de/ae-en/vertretungen/generalkonsulat1", 'src'=>"Consulate General of the Federal Republic of Germany Dubai", ];
					$partners[] = [ 'style'=>"", 'title'=>"Bitcoin Subsidium", 'link'=>"https://www.bitcoin-subsidium.org/", 'src'=>"images/ieo/partners/bitcoin_sub.png"];
					$partners[] = [ 'style'=>"", 'title'=>"Transcendence", 'link'=>"https://teloscoin.org/", 'src'=>"images/ieo/partners/transcendence.png"];
					$partners[] = [ 'style'=>"", 'title'=>"Telos", 'link'=>"https://teloscoin.org/", 'src'=>"images/ieo/partners/telos.png"];
					$partners[] = [ 'style'=>"", 'title'=>"Bitcoin Subsidium", 'link'=>"https://bitdorado.exchange/", 'src'=>"images/ieo/partners/bitdrado.png"];
				?>
				<div class="row pt-4 justify-content-center partners sponsored_fair">
					<div class="col-12 mt-3 text-center">					
						<h2 class="text-white mb-4">Partners</h2>
					</div>

					@foreach($partners as $prtnr)
					@if ($prtnr['title'] == "Consulate General of the Federal Republic of Germany Dubai")
						<div class="col-6 partner">								
							<a href="{{$prtnr['link']}}" target="_blank" title="{{ $prtnr['title'] }}" style="text-align:left; color:#A789DD;">
								{{ $prtnr['src'] }}
							</a>
						</div>
						@else
						<div class="col-6 partner">								
							<a href="{{$prtnr['link']}}" target="_blank" title="{{ $prtnr['title'] }}">
								<img title="{{ $prtnr['title'] }}" src="{{ $prtnr['src'] }}">
							</a>
						</div>
						@endif
					@endforeach
				</div>
		

				<div class="row pt-3 mt-5 pb-3 justify-content-center sponsored_fair">

					<div class="col-12 mt-5 text-center">
						{{-- <h2 class="text-white ml-3 mb-4">Road Shows</h2> --}}
						<h2 class="text-white mb-4">Road Shows</h2>
						<div class="icons mt-3">
							<?php
								$datas = [];					
								$datas[] = [ 'style'=>"", 'title'=>"Gitex Future Stars", 'link'=>"https://www.gitexfuturestars.com/exhibitors/buy-any-light", 'src'=>"images/ieo/partners/gitexfuturestars.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Light Middle East Fair", 'link'=>"https://light-middleeast.german-pavilion.com/en/exhibitors/80967/", 'src'=>"images/ieo/partners/light_middles_east_date.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Malta Blockchain Summit", 'link'=>"https://maltablockchainsummit.com", 'src'=>"images/ieo/partners/maltablockchainsummit.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Future Blockchain Summit", 'link'=>"https://www.futureblockchainsummit.com/", 'src'=>"images/ieo/partners/futureblockchainsummit.png", ];
							?>							
							@foreach($datas as $data)
							<div class="col-6">
								<a href="{{ $data['link'] }}" target="_blank">
									<img title="{{ $data['title'] }}" alt="{{ $data['title'] }}" src="{{ Util::assetUrl($data['src']) }}" style="">
								</a>
							</div>
							@endforeach

						</div>
					</div>

					{{-- <div class="col-6 mt-5">
						<div id="icoholder-widget-big-black-listed-31234"></div>
						<script type="application/javascript" async="async" src="https://icoholder.com/en/widget/big-black-listed/31234.js?width=5"></script>
					</div> --}}

		<!-- 			<div class="col-12 mt-5 text-center">
						{{-- <h2 class="text-white ml-3 mb-4">Audits & Ratings</h2> --}}
						<h2 class="text-white mt-5 mb-4">Ratings</h2>
						<div class="icons">
							<a style="width: 150px;" href="https://icobench.com/ico/buyanylight-bal" target="_blank" rel="nofollow" title="BuyAnyLight (BAL) on ICOBENCH">
								<img style="" src="https://icobench.com/rated/buyanylight-bal?shape=square&size=m" alt="BuyAnyLight (BAL) ICO rating"/>
							</a>
							<a style="width: 150px;" href="https://icomarks.com/ico/buyanylight" target="_blank"  title="BuyAnyLight ICOMARKS">
								<img style="" src="{{ Util::assetUrl('images/ieo/partners/icomarks.svg') }}" alt="BuyAnyLight ICOMARKS"/>
							</a>
							<a style="width: 150px;" href="https://coincodex.com/ieo/buyanylight/" target="_blank" rel="nofollow" title="BuyAnyLight COINCODEX">
								<img style="" src="{{ Util::assetUrl('images/ieo/partners/coincodex.png') }}" alt="BuyAnyLight COINCODEX"/>
							</a>
							<a style="width: 165px;" href="https://icoholder.com/en/buyanylight-31234" target="_blank"  title="BuyAnyLight ICOHOLDER">
								<img style="" src="{{ Util::assetUrl('images/ieo/partners/icoholder.png') }}" alt="BuyAnyLight ICOHOLDER"/>
							</a>
							<a href="https://icosbull.com/eng/ico/buyanylightbal" target="_blank"  title="BuyAnyLight on ICOSBENCH">
								<img src="{{ Util::assetUrl('images/ieo/partners/icosbull.png') }}" alt="BuyAnyLight ICO Bull"/>
							</a>
						</div>
					</div> -->


				<!-- 	<div class="col-12 mt-5 text-center">
						{{-- <h2 class="text-white ml-3 mb-4">BuyAnyLight in News and Media</h2> --}}
						<h2 class="text-white mt-5 mb-4">BAL in News and Media</h2>
						<div class="icons">
							<a href="https://en.bitcoinwiki.org/wiki/Buyanylight" target="_blank">
								<img style="width: 200px;" 
								title="Bitcoin Wiki" 
								alt="Bitcoin Wiki" 
								src="{{ Util::assetUrl('images/ieo/bitcoinwiki.svg') }}">
							</a>
						</div>
					</div> -->

				</div>
			</div>
		</div>
	</div>
</section>
{{-- ////////////////////////////////////////////////////////////// --}}
{{-- partners --}}





























<section class="section16">
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
										<button type="submit" class="btn btn-BAL">
											Subscribe now
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<img src="{{ Util::assetUrl('images/ieo/7.png')}}" style="width: 50%; height: auto;">
						</div>
					</div>
				</div>
			</div>
			<div class="pt-5">
				<h4 class="text-center">
					<b>
						Want to know more about our Private Round? 
						<span class="header-text scrollTo openContact" target="contact">
							<span>
								Contact Us!		
							</span>
						</span>

						
					</b>
				</h4>
			</div>
		</div>
	</div>
</section>

@endsection