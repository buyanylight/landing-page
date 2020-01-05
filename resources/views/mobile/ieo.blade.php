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

			
			$('.bal-token').keyup(function() {
			if (numeral($('.bal-token').val()).value() < minBAL) {
				$('.bal-alert').show()
				$('#token-btn').attr('disabled', 'disabled')
			

			} else {
				$('.bal-alert').hide()
				$('#token-btn').removeAttr('disabled')
				
			}	
		})

		$('.bal-token').keyup(function() {

			$(this).val(function(index, value) {
    			var amount = numeral(value).format('0,0');
    			
    			return amount
  			});

			 $('.token-price').show();



			Currencyconvert()

			$(".BAL_value").text(numeral($(this).val()).format('0,0'));
			var originalvalue = numeral($('.bal-token').val()).value();

			var USDIEO_value = numeral(originalvalue * 0.30303).format('0,0.00000');

			var USDvalue = parseFloat(originalvalue * $('.USD_value').data('value'))
			var USDIEO = parseFloat(originalvalue * 0.30303);

			$(".USDIEO_value").text(USDIEO_value);


			var USD_return = (USDIEO - USDvalue).toFixed(5);

			 $(".USD_return").text(USD_return);



		})


		$( window ).on('load', function() {
  				$('.bal-token').val('');
			});



		function Currencyconvert(){
			var originalvalue = numeral($('.bal-token').val()).value();

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

<div class="all-contents">
<section class="section-1 mb-3">
	<div class="section-1-bg" style="margin-top: 4rem;">
		<div class="container h-100">
			<div class="row">
				<div class="col-12">
					<h1>
						<b>
							LED Sourcing <br><span class="header-text">Revolutionized!</span> 
						</b>
					</h1>
					<div>
						Do you need led products for your newly constructed villa, your building, tower, or real-estate project?
						<br>
						Do you worry about the sky-high pricings and have trust issues with suppliers?
						<br>
						Do you hate delayed deliveries and want to get secured payments?
					</div>
				</div>
				<div class="col-12 text-center">
					<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
						target="_blank" class="btn btn-ieo mt-3 ">
	            		<i class="fas fa-link"></i>
	            		&nbsp;
						Meet BAL								
					</a>
					<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
						target="_blank" class="btn btn-ieo mt-3">
	            		<i class="far fa-file-pdf"></i>
	            		&nbsp;
						Yellow Paper								
					</a>
					<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
						target="_blank" class="btn btn-ieo mt-2">
	            		<i class="far fa-file-pdf"></i>
	            		&nbsp;
						White Paper								
					</a>
				
					<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
						target="_blank" class="btn btn-ieo mt-2">
	            		<i class="far fa-file-pdf"></i>
	            		&nbsp;
						One Pager								
					</a>
					<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
						target="_blank" class="btn btn-ieo mt-2">
	            		<i class="far fa-file-pdf"></i>
	            		&nbsp;
						Pitch Deck								
					</a>
				</div>
				<div class="col-12 text-center mt-3">
					<div class="row">
						<div class="col one-link">
		                	<a href="http://www.youtube.com/c/BuyAnyLight" class="text-dark" target="_blank"><i class="fab fa-youtube"></i></a>
		                </div>
		               	<div class="col one-link">
		                    <a href="https://twitter.com/BuyAnyLight" class="text-dark" target="_blank"><i class="fab fa-twitter"></i></a>
		                </div>
		                <div class="col one-link">
		                    <a href="https://www.instagram.com/buyanylight/" class="text-dark" target="_blank"><i class="fab fa-instagram"></i></a>
		                </div>
		               	<div class="col one-link">
		                    <a href="https://www.facebook.com/BuyAnyLight/" class="text-dark" target="_blank"><i class="fab fa-facebook-f"></i></a>
		                </div>
		                <div class="col one-link">
		                 	<a href="https://github.com/buyanylight" class="text-dark" target="_blank"><i class="fab fa-github"></i></a>
		                </div>
					</div>
				</div>
				<div class="col-12 text-center mt-2">
					<div class="row">
	                    <div class="col one-link">
	                        <a href="https://www.reddit.com/r/BuyAnyLight/" class="text-dark" target="_blank"><i class="fab fa-reddit-alien"></i></a>
	                    </div>
	                    <div class="col one-link">
	                        <a href="https://bitcointalk.org/index.php?topic=5193049.0;topicseen" class="text-dark" target="_blank"><i class="fab fa-bitcoin"></i></a>
	                   	</div>
	                    <div class="col one-link">
	                        <a href="https://t.me/buyanylight" class="text-dark" target="_blank"><i class="fab fa-telegram-plane"></i></a>
	                    </div>
	                    <div class="col one-link">
	                        <a href="https://medium.com/buyanylight" class="text-dark" target="_blank"><i class="fab fa-medium-m"></i></a>
	                    </div>
	                    <div class="col one-link">
	                    	<a href="https://www.linkedin.com/company/buyanylight/" class="text-dark" target="_blank"><i class="fab fa-linkedin-in"></i></a>
	                    </div>
					</div>
				</div>
				<div class="mt-3 col-12">
					<a href="#section-bal-token" class="btn btn-ieo w-100">
						<i class="fas fa-coins"></i>
					    &nbsp;
						Get 17.5% discount Now!
					</a>
				</div>
				<div class="mt-3 col-12">
					<div class="card card-body" style=" background-color:#5555A4;  border-radius: 25px; box-shadow: 7px 7px 10px #3c3c3c;">
						<div class="row text-center">
							<div class="col-12">
								<h5 class="mb-0 text-white"><b>IEO - BAL TOKEN</b></h5>
								<p class="mb-1 text-white">
									The IEO of BAL Token starts in:
								</p>
								<div id="timer" class=" pt-1">
									<div class="text-white" style="">
										<div id="days1" class="timer-item d-inline-block mr-3 text-center text-white"></div>
										<div id="hours1" class="timer-item d-inline-block mr-3 text-center text-white"></div>
										<div id="minutes1" class="timer-item d-inline-block mr-3 text-center text-white"></div>
										<div id="seconds1" class="timer-item d-inline-block text-center text-white"></div>
									</div>
								</div>
							</div>
							<div class="col-12 mt-3 d-flex justify-content-center align-items-center" style="border: 1px solid; border-radius: 25px;background-color: #3a3a77;  border-right: 0px;">
								<div>
									<p class="text-white m-3">Available soon in platforms</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 mt-3">
					<div class="card card-body" style="border-radius:25px; box-shadow: 7px 7px 10px #3c3c3c;">
						<h4 class="pb-3"><strong>Token Sale</strong></h4>
						<div class="l">
							<div class="row" style="font-size: 10px;">
								<p class="col-4 m-0 d-flex align-items-center"><b>Start</b></p>
								<p class="col-4 text-center m-0 d-flex align-items-center justify-content-center"><b>Soft Cap</b></p>
								<p class="col-4 text-right m-0 d-flex align-items-center justify-content-end"><b>Hard Cap</b></p>
							</div>
							<div class="pt-1">
								<div class="progress">
			  						<div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax	="100">
			  								$2,100,000
			  						</div>
								</div>
							</div>
							<div class="row pt-1" style="font-size: 10px;">
								<p class="col-4 mb-0"><b>26% target raised</b></p>
								<p class="col-4 text-center mb-0"><b>$4,000,000</b></p>
								<p class="col-4 text-right mb-0"><b>$8,000,000</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-buy-token" id="sale-dates-price">
	<div class="pt-0 pb-4 container">
		<div class="row" style="padding: 10px;">
			<div class="col-4 p-1">
			<div class="card text-center">
				<div class="card-header text-white" style="">
					<b style="font-size: 12px;">PRIVATE SALE</b><br>
					<span style="font-size: 11px; text-decoration: line-through;">0.30303 USD</span><br>
					<span style="font-size: 11px;">0.2 USD</span>
				</div>
				<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
					<div class="row" style="font-size: 12px;">																											 
						<div class="col-12">1<sup>st</sup> Oct 2019</div>
						<div class="col-12">to</div>
						<div class="col-12">31<sup>st</sup> Oct 2019</div>
					</div>

				</div>
			</div>
			</div>

			<div class="col-4 p-1">
			<div class="card text-center">
				<div class="card-header  text-white" style="">
					<b style="font-size: 12px;">PRE -IEO</b><br>
					<span style="font-size: 11px; text-decoration: line-through;">0.30303 USD</span><br>
					<span style="font-size: 11px;">0.25 USD</span>
				</div>
				<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
					<div class="row" style="font-size: 12px;">														
						<div class="col-12">1<sup>st</sup> Nov 2019</div>
						<div class="col-12">to</div>
						<div class="col-12">31<sup>st</sup> Jan 2020</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-4 p-1">
			<div class="card text-center ">
				<div class="card-header  text-white" style="">
					<b style="font-size: 12px;">IEO</b><br>
					<span style="font-size: 11px;">0.30303 USD</span><br>
					<span style="font-size: 11px;">&nbsp;</span>
				</div>
				<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
					<div class="row" style="font-size: 12px;">
						<div class="col-12">1<sup>st</sup> Feb 2020</div>
						<div class="col-12">to</div>
						<div class="col-12">29<sup>th</sup> Feb 2020</div>
					</div>													
				</div>
			</div>
			</div>

		</div>

		<div class="row justify-content-center align-items-center" >
			<p class="ribbon">
			  	<span class="text">
			  		<strong class="bold">17.5% OFF</strong> until IEO Sale!
			  	</span>
			</p>			
		</div>
	</div>
</section>
<?php
			// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
		$datas = [];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICORATING", 'link'=>"https://icoholder.com/en/buyanylight-31234", 'src'=>Util::assetUrl("images/ieo/partners/icoholder.png"), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight COINCODEX", 'link'=>"https://coincodex.com/ieo/buyanylight/", 'src'=>Util::assetUrl("images/ieo/partners/coincodex.png"), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOHOLDER", 'link'=>"https://icobench.com/ico/buyanylight-bal", 'src'=>"https://icobench.com/rated/buyanylight-bal?shape=square&size=m", ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOMARKS", 'link'=>"https://icomarks.com/ico/buyanylight", 'src'=>Util::assetUrl("images/ieo/partners/icomarks.svg"), ];
		$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOSBULL", 'link'=>"https://icosbull.com/eng/ico/buyanylightbal", 'src'=>"images/ieo/partners/icosbull.png", ];
	?>

<section>
	<div class="w-100 container bg-black">
		<div class="row pt-3 pb-3">
			<div class="col-12 text-center">
				<div class="text-white">
					<span style="font-size: 18px;">Ratings</span>
					<br> 
					by ICO Experts
				</div>
			</div>
			<div class="col-12 mt-3 text-center">
				@foreach($datas as $data)
				<div class="d-inline-block mr-3">
					<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
						<img class="icon" src="{{ $data['src'] }}" style="height: 60px;">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<section class="section-2 pt-5" id="meet-bal">
	<div class="container pb-3">
		<h3 class="text-center pb-3">
			<b>
				<span class="header-text">Meet</span> BuyAnyLight
			</b>
		</h3>
		<div class="text-justify">
			<p>
				BuyAnyLight help you source quality LED products for all of your lighting needs. Using blockchain, AI, Big Data and Smart Contracts, it presents your inquiries before the right manufacturers and ensure that you get the products you had ordered. 
			</p>
		</div>
		<div class="row">
			<div class="col">
				<a data-fancybox="" style="background-image: url({{ Util::assetUrl('images/ieo/bal.jpeg')}}); background-size: cover; width:100%" href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="video-link">
				<img class="video" src="{{ Util::assetUrl('images/ieo/bal.jpeg')}}" alt="" width="100%" style="border:1px solid black;">
					<div class="d-flex align-items-end justify-content-center h-100" style="position: absolute; bottom: 10%; color: #FF0000; left: 43%; font-size: 20px;">
		                <div>
		                    <i class="fab fa-youtube"></i> 
		                </div>
		            </div>
				</a>
			</div>
			<div class="col">
				<a data-fancybox="" style="background-image: url({{ Util::assetUrl('images/ieo/bal.jpeg')}}); background-size: cover; width:100%" href="https://www.youtube-nocookie.com/embed/k-zrKcgJf0Q?rel=0" class="video-link">
				<img class="video" src="{{ Util::assetUrl('images/ieo/lightfinder.jpeg')}}" alt="" width="100%" style="border:1px solid black;">
					<div class="d-flex align-items-end justify-content-center h-100" style=" position: absolute; bottom: 10%; color: #FF0000; left: 43%; font-size: 20px;">
		                <div>
		                    <i class="fab fa-youtube"></i> 
		                </div>
		            </div>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="pt-3 pb-5">
			<div class="card-deck pt-5">
				<div class="card buyer-card">
					<div class="card-body text-center">
						<div class="card-title ">
							<h2><i class="fas fa-stopwatch"></i></h2>
						</div> 
						<h5 class="">
							<b class="text-BAL">SEAMLESS ORDERS</b>
						</h5>
						Submit your lighting requirements as simple as sharing an image and receive the best quotations. 
					</div>
				</div>
				<div class="card buyer-card">
					<div class="card-body text-center">
						<div class="card-title ">
							<h2><i class="fas fa-wallet"></i></h2>
						</div> 
						<h5 class="">
							<b class="text-BAL">TRUSTLESS PAYMENTS</b>
						</h5>
						With blockchain deployed self-enforceable smart contracts, your payments are trustless and 100% secured.
					</div>
				</div>	
				<div class="card buyer-card">
					<div class="card-body text-center">
						<div class="card-title ">
							<h2><i class="fas fa-globe-asia"></i></h2>
						</div> 
						<h5 class="">
							<b class="text-BAL">TRACEABLE LOGISTICS</b>
						</h5>
						All your order details, right from the manufacturer to the shipper and then to you are added to a traceable blockchain network.  

					</div>
				</div>
			</div>
			<div class="card-deck">
				<div class="card buyer-card">
					<div class="card-body text-center">
						<div class="card-title ">
							<h2><i class="fas fa-thumbs-up"></i></h2>
						</div> 
						<h5 class="">
							<b class="text-BAL">EXPERT CONSULTATION</b>
						</h5>
						Get free of cost consultation from experts who are available for your support 24/7.
					</div>
				</div>
				<div class="card buyer-card">
					<div class="card-body text-center">
						<div class="card-title ">
							<h2><i class="fas fa-dollar-sign"></i></h2>
						</div> 
						<h5 class="">
							<b class="text-BAL">NOMINAL PRICES</b>
						</h5>
						Compared to big brands, you get products of similar quality and design, for up to 75% lower price.
					</div>
				</div>	
				<div class="card buyer-card">
					<div class="card-body text-center">
						<div class="card-title ">
							<h2><i class="fas fa-boxes"></i></h2>
						</div> 
						<h5 class="">
							<b class="text-BAL">NO MORE MIDDLEMAN</b>
						</h5>
						Avoid hectic order processing and the costs when you buy from retailers. Get direct access to manufacturers.  

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
	$newsdatas[] = [ 'style'=>"", 'title'=>"fn", 'link'=>"https://www.finanznachrichten.de/nachrichten-2020-01/48525766-blockpass-and-buyanylight-announce-partnership-to-bring-pass-rebate-to-blockpass-users-011.htm", 'src'=>"images/ieo/partners/fn_logo.svg", ];
	$newsdatas[] = [ 'style'=>"", 'title'=>"scoop", 'link'=>"https://www.scoop.co.nz/stories/WO2001/S00014/blockpass-and-buyanylight-announce-partnership.htm", 'src'=>"images/ieo/partners/scoop.png", ];

?>

<section class="BAL-news" style="background-color: #f7f7f7; height: 100%;">
	<h3 class="text-center pt-4"><strong>BuyAnyLight in the News and Media</strong></h3>
	<div class="container d-flex align-items-center pb-4" style="">
		<div class="">
			<div class="news-channels text-center">
				@foreach($newsdatas as $nd)
				@if($nd['title'] == 'fn')
					<a href="{{ $nd['link'] }}" class="mr-4" target="_blank">
						<img src="{{ $nd['src'] }}" width="31.19%">
					</a>
					@else
					<a href="{{ $nd['link'] }}" class="mr-4 pt-4" target="_blank">
						<img src="{{ $nd['src'] }}" width="23%">
					</a>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</section>


<section class="section-buy-token" id="section-bal-token">
	<div class="pt-3 mt-3 container">
		<h3>
			<strong>
				<span>
					Buy
				</span>
				<span class="header-text">
					BAL 
				</span>
				<span>
					Tokens
				</span>
			</strong>
		</h3>
		<div class="buying-content">
			<form action="/buy-token" method="post" enctype="multipart/form-data" id="token-form">
				@csrf()
				<div class="pt-4">
					<div class="input-group" style="height: 75px; position: relative; right: 5px;">
	  					<div class="input-group-prepend" style="width: 88px">
	    					<span class="input-group-text d-flex justify-content-center btn-ieo" id="basic-addon1" style="width: 100%; border-radius: 20px; position: relative; left: 10px; z-index: 1; box-shadow: 4px 0px 5px 0px #cccccc;  background: #5555A4;" data-toggle="tooltip" data-placement="right" title="BAL Token">
	    						<img src="{{ Util::assetUrl('images/logo-white-mobile.png') }}" width="28">
	    					</span>
	  					</div>
	  					<input  class="form-control bal-token pl-4" placeholder="Enter an amount you want to buy" min="25000" name="bal" required="required" style="height: 70px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; font-size: 12px; margin-top: 3px; border: 1px solid #000000;">
	  					<br>
					</div>
				</div>
				<div>
	  				<small>The minimum investment is 50 USD and 200 BAL</small>
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
							<div class="card mb-3" style="border-radius: 20px; height: 70px;">
  								<div class="row no-gutters">
    								<div class="col-md-3 col-3 d-flex align-items-center justify-content-center btn-ieo" style="border-radius: 20px; box-shadow: 4px 0px 5px 0px #cccccc; height: 70px;" data-toggle="tooltip" data-placement="right" title="{{ $token['symbol'] }}">
      									<p class="mb-0" style="font-size: 20px;">{!! $token['logo'] !!}</p>
    								</div>
    								<div class="col-md-9 col-9">
      									<div class="card-body card-body d-flex align-items-center justify-content-end" style="height: 70px;">
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
							<div class="card card-body" style="z-index: 0;">
								<h5>
									<b>
										<span>Profit / Return on Investment:</span>
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
										<b>Profits investing today</b>
									</div>
									<div class="row">
										<div class="col">
											 	ROI : 21.21% 
												{{-- ROI = 51.52% --}}
										</div>
										<div class="col">

										</div>
									</div>
									<div class="row">
										<div class="col">
											Return = 
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
								<button type="submit" class="btn buy-btn" id="token-btn">
									<b>Buy Tokens</b>
								</button>
					
							</div>
						</div>
						<div class="card card-body mt-2">
			  				How to add a Custom ERC20 Token / our BAL Token to your Ethereum wallet? <br>
			  				<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">Check out this easy step-by-step guide</a>
			  			</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>


<section class="section-3 bg-black">
	<div class="container pt-5 pb-5 mt-5">
		<div class="text-justify">
			<h3 class="text-center">
				<b>
					<span class="header-text">Our</span>
					<span class="text-white">Vision</span>
				</b>
			</h3>
			<p class="pt-2 text-white">
				We envision to revolutionize the entire sourcing process by harnessing the power of blockchain, AI, Big Data and Smart Contracts. Starting from the LED Lighting Industry, we aim to expand BAL Network into other industries including but not limited to Construction, Pharma, Food and Precious Metal Industry. 
			</p>
		</div>
		<div class=" text-justify pt-3">
			<h3 class="text-center">
				<b>
					<span class="header-text">Our</span>
					<span class="text-white">Mission</span>
				</b>
			</h3>
			<p class="pt-2 text-white">
				Our mission is to become the leading platform of choice for individuals and businesses and manufacturers. Principled, honest and focused, we leverage the world’s best suppliers and deliver the most significant value LED products, the most exceptional service and advice, and first-rate customer satisfaction – every time.
			</p>
			<div class="text-center pt-3 vision-mission">
	

				<a data-fancybox 
				href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0" 
				class="">
					<img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo.png') }}" alt="">
					<div class="d-flex align-items-end pb-2 pl-2 h-100 text-dark" style="position: relative; bottom: 30px; left: 30px; width: 50%;">
                        <div>
                        	<i class="fab fa-youtube"></i> 
                            <span>
                            	Play video
                            </span>
                        </div>
                    </div>
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
				<img src="{{ Util::assetUrl('images/ieo/6-1.png') }}" width="15%">
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
				<img src="{{ Util::assetUrl('images/ieo/6-2.png') }}" width="15%">
			</div>
			<h5 class="text-center pt-3"><b>Security</b></h5>
			<div class="text-center pt-2">
				<p>
					All transactions in BAL are secured by Smart Contracts.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/6-3.png') }}" width="15%">
			</div>
			<h5 class="text-center pt-3"><b>Utility</b></h5>
			<div class="text-center pt-2">
				<p>
					BAL Token is the native token within the BAL Ecosystem.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/6-4.png') }}" width="15%">
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
				<img src="{{ Util::assetUrl('images/ieo/6-5.png') }}" width="15%">
			</div>
			<h5 class="text-center pt-3"><b>Nominal Transactional Fee</b></h5>
			<div class="text-center pt-2">
				<p>
					Transfer up to a million dollar in a single digit fee.
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/6-6.png') }}" width="15%">
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
<section>
	<img src="{{ Util::assetUrl('images/HALF.jpg') }}" width="100%">

</section>














































































<section class="section-5 bg-black" id="roadmap">
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
		









			
				

				{{-- roadmap --}}
				{{-- ////////////////////////////////////////////////////////////////// --}}
				{{-- <ul class="roadmap">
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
	      							<div class="card mb-2"><div class="card-body">A range of 50 products in architectural and residential lighting</div></div>      							
	      						</div>
	    					</div>
	  					</div>
					</li>

  					<li class="li complete">
						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2016</span>
							</div>
							<div class="status">
								<div class="one-map pt-4 text-left"> 
									<div class="card mb-2"><div class="card-body">Inception of the idea for the BAL Platform</div></div>
									<div class="card mb-2"><div class="card-body">Initial research and feasibility</div></div>
									<div class="card mb-2"><div class="card-body">Recruitment of technical team for BAL platform development</div></div>
									<div class="card mb-2"><div class="card-body">Platform development initiated</div></div>
									<div class="card mb-2"><div class="card-body">Product range covering 100 products in architectural, residential, commercial and decorative lighting</div></div>
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
	      							<div class="card mb-2"><div class="card-body">ASAS Holdings invests in Almani Lighting LLC, and acquires 51% ownership</div></div>
									<div class="card mb-2"><div class="card-body">Establishment of a state-of-the-art Dubai showroom</div></div>
									<div class="card mb-2"><div class="card-body">Warehouse expansion</div></div>
									<div class="card mb-2"><div class="card-body">Several prestigious projects in UAE completed</div></div>
									<div class="card mb-2"><div class="card-body">Product range covering 250 products in architectural, residential, commercial and decorative lighting</div>
									<div class="card mb-2"><div class="card-body">BAL LightFinder and My Home Features testing</div>
									</div>
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
	      							<div class="card mb-2">
	      								<div class="card-body">
	      									<ul class="map-list pl-0">
	      										<li>
	      											<b>Q1 - Q2</b>
	      											<ul class="pl-3 pt-2">
	      												<li>Team Expansion</li>
														<li>New two-story office in Dubai Investment Park </li>
														<li>Product range covering 600 products in architectural, residential, commercial, decorative, industrial, and outdoor lighting.</li>
														<li>Completion of two Sheikh palaces for the ruler of Sharjah emirate</li>
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
	      												<li>BAL website development</li>
														<li>BAL My Tower testing and implementation</li>
														<li>Collaboration with Fiat Partner</li>
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
	      												<li>BAL Online Platform release</li>
														<li>Biggest LED lighting portfolio within the LED industry for a single brand (Almani)</li>
														<li>Cooperation with 100+ high quality LED lighting manufacturers</li>
														<li>BAL backend development Phase 2</li>
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
														<li>Centralized platform development completed and ready for community and manufacturer review</li>
														<li>Token generation event</li>
														<li>Seed Round Sale</li>
														<li>Seed Round successfully completed and raised USD $2 Million</li>
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
														<li>My Home, My Tower, and LightFinder brochure development</li>
														<li>Private funding initiatives</li>
														<li>Release of yellow paper (Technical Paper)</li>
														<li>Exchange listing and public sale i.e., Initial Exchange Offering (IEO)</li>
														<li>BAL nominated at Light Middle East for the most exciting startup, and its founders for “Personality of the Year”</li>
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
	      												<li>Hiring of blockchain developers and corporate restructuring</li>
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
														<li>Marketing expansion</li>
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
	      												<li>Team expansion for hiring AI and machine learning specialists</li>
														<li>Research on artificial intelligence, machine learning, big data, and predictive analytics and their application within the BAL platform</li>
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
														<li>Blockchain integration on Testnet</li>
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
														<li>Desktop wallet beta version release of a non-custodial multi-currency light wallet allowing users to send, receive, and eventually exchange funds over Lightning Network, all without needing to download full blockchains.</li>
														<li>Release of a mobile version of the BAL wallet. This application will be compatible on all devices and allow users to access our wallet and its features directly from their mobile device.</li>
														<li>On-chain logistic, freight tracking functionality development initiated. This will enable blockchain based traceability of logistics and freight activities within our ecosystem</li>
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
														<li>Desktop wallet alpha version launched with the functionality of Crosschain swapping. This will allow users to transact multiple currencies directly, without converting via third-party exchange</li>
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
									<div class="card mb-2"><div class="card-body">Development of BAL Exchange for enabling digital asset trading</div></div>
									<div class="card mb-2"><div class="card-body">Development of BAL Custodial Platform</div></div>
	      						</div>
	    					</div>
    					</div>
  					</li>
  					<li class="li complete">
						<div>
	    					<div class="timestamp">
	      						<span class="author text-white pb-4">2023 - 2024</span>
	    					</div>
	    					<div class="status">
	      						<div class="one-map pt-4 text-left"> 
									<div class="card mb-2"><div class="card-body">Development of BAL Tokenization Platform</div></div>
	      						</div>
	    					</div>
    					</div>
  					</li>
 				</ul>   
				<div class="arrows pt-3"></div> --}}



				<?php

					$timeline = [];
					$timeline[] = [
						'name' => '2014',
						'icon' => 'fas fa-archway',
						'style' => '',
						'items' => [
							'Foundation Almani Lighting Gmbh.',
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
							'BAL Idea Inception, Research and Feasibility and Development team recruitment.',
						],
					];
					$timeline[] = [
						'name' => '2017',
						'icon' => 'fas fa-warehouse',
						'style' => '',
						'items' => [
							'51% Ownership Acquisition of Almani Lighting LLC by',
							'Asas Holding, Warehouse expansion,',
							'BAL Light Finder development and testing.',
						],
					];
					$timeline[] = [
						'name' => '2018',
						'icon' => 'fas fa-sitemap',
						'style' => '',
						'items' => [
							'Team Expansion, Product range extended to 600+',
							'Fiat Partner Collaboration, Major Sheikh Palace Contracts in UAE.',
						],
					];
					$timeline[] = [
						'name' => '2019',
						'icon' => 'fas fa-at',
						'style' => '',
						'items' => [
							'BAL Beta Version release,',
							'Documentation and drafting,',
							'Website Development and launch,',
							'Seed round finished and Public Token sale',
							'Marketing Kickstart.',
						],
					];
					$timeline[] = [
						'name' => '2020',
						'icon' => 'fas fa-link',
						'style' => '',
						'items' => [
							'IEO Sale and Listing on exchanges.',
							'Blockchain development team expansion.',
							'Blockchain based platform development Initiated.',
							'Smart Contracts Development, Wallet development with cross-chain.',
							'Asset exchange.',
							'Traceable Logistic partnerships and development initiated.',
						],
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
							'AI-Based Smart Contracts Implementation.',
							'BAL Custodial Platform development.',
						],
					];
					$timeline[] = [
						'name' => '2023',
						'icon' => 'fas fa-file',
						'style' => '',
						'items' => [
							'Expansion into construction industry.',
							'BAL Tokenization Platform Development.',
							'Smart Contract Notary Service Launch.',
						],
					];

				?>

				<div class="ps-timeline-sec">
					<div class="container">
						<ol class="ps-timeline">
						@foreach ($timeline as $key2 => $tml)
							<li style="{{ $tml['style'] }}">										
								<span class="ps-sp-top">{{ $tml['name'] }}</span>

								<div class="img-handler img-handler-top">
									{{-- <img src="{{ $tml['icon'] }}" alt=""/> --}}
									<i style="" class="{{ $tml['icon'] }} timeline-icon"></i>
								</div>


								<div class="ps-top">
									@foreach($tml['items'] as $item)
										<p>{{ $item }}</p>									
									@endforeach
								</div>
							</li>
						@endforeach
						</ol>
					</div>
				</div>	
		

				{{-- ////////////////////////////////////////////////////////////////// --}}
				{{-- roadmap --}}




		</div>
	</div>
</section>





































































<section class="section-6">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				<span class="header-text">BAL Crowd Sale</span>
				<span >Information</span>
			</b>
		</h3>
		<div>
			<h4 class="text-left"> <b>Token Information</b></h4>
			<table class="text-left w-100" cellpadding="10" id="token-info">
				<tr>
					<td><b>Token name:</b></td>
					<td>BAL Token</td>
				</tr>
				<tr>
					<td><b>Ticker:</b></td>
					<td>BAL</td>
				</tr>
				<tr>
					<td><b>Network:</b></td>
					<td>Ethereum</td>
				</tr>
				<tr>
					<td><b>Soft Cap:</b></td>
					<td>4 Million USD</td>
				</tr>
				<tr>
					<td><b>Hard Cap:</b></td>
					<td>5 Million USD</td>
				</tr>								
				<tr>
					<td><b>Total supply:</b></td>
					<td>55 Million BAL</td>
				</tr>
				<tr>
					<td><b>IEO price:</b></td>
					<td>1BAL = USD 0.30303 (Upcoming)</td>
				</tr>
				<tr>
					<td><b>Pre-IEO Sale price:</b></td>
					<td>1BAL = USD 0.25 (Live)</td>
				</tr>
				<tr>
					<td><b>Private Round price:</b></td>
					<td>1BAL = USD 0.20</td>
				</tr>
			</table>
		</div>
		<div>
			<h4 class="text-left mt-3"> <b>Crowd Sales Plan</b></h4>
			<div class="row mt-3 text-left">
				<div class="col-md-12">
					<div class="card card-body" style="border: 1px solid #5555A4; border-radius: 10px;">
						<small><i class=" header-text far fa-calendar-alt"></i> 1st October 2019 - 31st October 2019</small>
						<b>Private Round Sale</b>
						<small><i class=" header-text fas fa-dollar-sign"></i> 0.20</small>
					</div>
					<div class="card card-body mt-3" style="border: 1px solid #5555A4; border-radius: 10px;">
						<small><i class="far fa-calendar-alt"></i> 1st November 2019 - 31st January 2020</small>
						<b>PRE-IEO Sale</b>
						<small><i class=" header-text fas fa-dollar-sign"></i> 0.25</small>
					</div>	
					<div class="card card-body mt-3" style="border: 1px solid #5555A4; border-radius: 10px;">
						<small><i class="far fa-calendar-alt"></i> 1st Feburary 2020 - 29th Feburary 2020</small>
						<b>IEO Sale</b>
						<small><i class=" header-text fas fa-dollar-sign"></i> 0.30303</small>
					</div>	
					<div class="card card-body mt-3" style="border: 1px solid #5555A4; border-radius: 10px;">
						<small><i class="far fa-calendar-alt"></i> Q1 2020</small>
						<b>Listing</b>
						<small class="header-text">Available in platforms soon</small>
					</div>
				</div>
			</div>
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
					Our aim is to make BAL Platform the leading marketplace for sourcing light products across the globe, and we have devised a plan to make our dream a reality. The proceeds from the token sale will fund the decentralized platform launch, continued platform development, user acquisition, and marketing:
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
			<div class="pt-5" id="allocation">
				<h3 class="text-center">
					<b>
						<span class="header-text">Token</span>
						<span>Distribution</span>
					</b>
				</h3>
				<div class="text-center pt-3"> 
					<img src="{{ Util::assetUrl('images/ieo/graph1.png') }}" width="60%">
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
												Private Round, Angel Investor<br>
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
								<li >
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
	</div>
</section>

<section class="section-7 bg-black" id="coreteam">
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
					$coreTeam[] = [	'name'=>'Rizvi Iqbal', 'title'=>'Blockchain & DLT Specialist', 'linkedin'=>'https://www.linkedin.com/in/rizviqbal', 'image'=>'images/ieo/team/rizvi.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Artem Gordadze', 'title'=>'Marketing Specialist', 'linkedin'=>'https://www.linkedin.com/in/artem-gordadze', 'image'=>'images/ieo/team/artem.jpg', 'text'=>'', ];	
					$coreTeam[] = [	'name'=>'Nantha Kumar', 'title'=>'Sales Director', 'linkedin'=>'https://www.linkedin.com/in/nantha-kumar-36b92685', 'image'=>'images/ieo/team/nantha.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Marc Vazquez', 'title'=>'Sourcing, Production & Investors Relations', 'linkedin'=>'https://www.linkedin.com/in/marc-vazquez-6b01a794', 'image'=>'images/ieo/team/marc.jpg', 'text'=>'', ];					
					$coreTeam[] = [	'name'=>'Ryan Quines', 'title'=>'Design Lead', 'linkedin'=>'https://www.linkedin.com/in/ryan-matthew-quines-551a85152', 'image'=>'images/ieo/team/ryan.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Zain Ul Abdin', 'title'=>'Senior Architect', 'linkedin'=>'https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a', 'image'=>'images/ieo/team/zain.jpg', 'text'=>'', ];
					
					$coreTeam[] = [	'name'=>'Ammar Mohamed', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/ammar-mohamed-231379103/', 'image'=>'images/ieo/team/ammar.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Shajudeen Yousf', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/shajudeen-yousf-783452146/', 'image'=>'images/ieo/team/shajudeen.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Muhammad Younas', 'title'=>'Content Lead', 'linkedin'=>'https://www.linkedin.com/in/muhammad-younas2023', 'image'=>'images/ieo/advisors/muhammad.jpg', 'text'=>'', ];
					
					$coreTeam[] = [	'name'=>'Chad Hanson', 'title'=>'Social Media, Community Manager', 'linkedin'=>'https://www.linkedin.com/in/chad-hanson-a747a2137/', 'image'=>'images/ieo/team/chad.jpg', 'text'=>'', ];

					$coreTeam[] = [	'name'=>'Maria Carron Igloso', 'title'=>'Investor relations and Public Relations Manager', 'linkedin'=>'https://www.linkedin.com/in/maria-carron-igloso-1324b5105', 'image'=>'images/ieo/team/maria.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Tiffany Anggot', 'title'=>'Director Of Strategic Partnerships', 'linkedin'=>'https://www.linkedin.com/in/tiffany-jel-a-367548147', 'image'=>'images/ieo/team/tiffany.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Juliane Schreilechner', 'title'=>'Training Consultant', 'linkedin'=>'https://www.linkedin.com/in/juliane-schreilechner-142108174/', 'image'=>'images/ieo/team/juliane.jpg', 'text'=>'', ];
				
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
					$coreTeam[] = [	'name'=>'Khalid Almutawa', 'title'=>'Partner and Chairman ASAS Holding Group', 'linkedin'=>'', 'image'=>'images/ieo/advisors/khalid.jpg', 'text'=>'Investor. Serial Entrepreneur. Early Investor in Almani Lighting, Amazon and Nvidia.', ];
					$coreTeam[] = [	'name'=>'Sebastijan Eder', 'title'=>'Partner, 0C Ventures', 'linkedin'=>'https://www.linkedin.com/in/sebastijan-eder-a8235028/', 'image'=>'images/ieo/advisors/sebastijan.jpg', 'text'=>'Entrepreneur, Investor, Blockchain & Crypto enthusiast and Tech fan.', ];				
					$coreTeam[] = [	'name'=>'Ralph Kattan ', 'title'=>'Team leader Accounting & Regulatory Information Santander Consumer Bank AG, Germany*', 'linkedin'=>'https://www.linkedin.com/in/ralph-kattan-709103191/', 'image'=>'images/ieo/advisors/ralph.jpg', 'text'=>'Early BAL Investor. Fintech, Blockchain researcher & Digital Assets expert.', ];
					$coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'International Key Account Manager, CustomBiotech EMEA/LATAM at Roche Diagnostic Germany', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Dr. Moritz Eidens', 'title'=>'CEO PharmGenomics GmbH', 'linkedin'=>'https://www.linkedin.com/in/dr-moritz-eidens-80550910/', 'image'=>'images/ieo/advisors/moritz.jpg', 'text'=>'Founder PharmGenomics. Investor and Blockchain Enthusiast since 2014.', ];
					// $coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'Strategy & Business Development EMEA/LATA', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'', ];
					//$coreTeam[] = [	'name'=>'Dr. Stefan Freh', 'title'=>'Specialist Solicitor Industrial Law', 'linkedin'=>'', 'image'=>'images/ieo/advisors/stefan.jpg', 'text'=>'The best time to plant a tree was 20 years ago. The second best time is now.', ];
					$coreTeam[] = [	'name'=>'Mohsin Irshad', 'title'=>'Sr. UI/UX Designer at EXCEED IT Services', 'linkedin'=>'https://www.linkedin.com/in/mohsin-irshad-8b982532', 'image'=>'images/ieo/advisors/mohsin.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Janis Leitans', 'title'=>'Scientific Assistant, Latvian Biomedical Research Centre', 'linkedin'=>'https://www.linkedin.com/in/janis-leitans-16297269/', 'image'=>'images/ieo/team/janis.jpg', 'text'=>'', ];	

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
					</div>
				@endforeach
				</div>

	</div>
</section>

























{{-- partners --}}
{{-- ////////////////////////////////////////////////////////////// --}}
<section class="section-8" id="partners" style="background-image: url({{ Util::assetUrl('images/ieo/partners-bg-hr.png') }});">
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
					// $partners[] = [ 'style'=>'', 'title'=>'Light Middles East', 'alt'=>'Light Middles East', 'src'=>Util::assetUrl('images/ieo/partners/light_middles_east.png'), 'link'=>'https://light-middle-east.ae.messefrankfurt.com/dubai/en.html'];
					$partners[] = [	'style'=>'', 'title'=>'Light Middle East', 'alt'=>'Light Middle East', 'src'=>Util::assetUrl('images/ieo/partners/madeingermany.png'), 'link'=>'https://light-middleeast.german-pavilion.com/en/home/'];

				?>
				<div class="row pt-4 justify-content-center partners sponsored_fair">
					<div class="col-12 mt-3 text-center">					
						<h2 class="text-white mb-4">Strategic Partners</h2>
					</div>

					@foreach($partners as $prtnr)
					<div class="col-6 text-center partner">
						<a href="{{$prtnr['link']}}" target="_blank">
							<img title="{{ $prtnr['title'] }}" alt="{{ $prtnr['alt'] }}" src="{{ $prtnr['src'] }}">
						</a>
					</div>
					@endforeach
				</div>
		

				<div class="row pt-3 mt-5 pb-3 justify-content-center sponsored_fair">

					<div class="col-12 mt-5 text-center">
						{{-- <h2 class="text-white ml-3 mb-4">Road Shows</h2> --}}
						<h2 class="text-white mb-4">Road Shows</h2>
						<div class="icons">
							<?php
								$datas = [];					
								$datas[] = [ 'style'=>"", 'title'=>"Gitex Future Stars", 'link'=>"https://www.gitexfuturestars.com/exhibitors/buy-any-light", 'src'=>"images/ieo/partners/gitexfuturestars.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Light Middle East Fair", 'link'=>"https://light-middle-east.ae.messefrankfurt.com/dubai/en.html", 'src'=>"images/ieo/partners/light_middles_east_date.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Malta Blockchain Summit", 'link'=>"https://maltablockchainsummit.com", 'src'=>"images/ieo/partners/maltablockchainsummit.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Future Blockchain Summit", 'link'=>"https://www.futureblockchainsummit.com/", 'src'=>"images/ieo/partners/futureblockchainsummit.png", ];
							?>							
							@foreach($datas as $data)
							<a href="{{ $data['link'] }}" target="_blank">
								<img title="{{ $data['title'] }}" alt="{{ $data['title'] }}" src="{{ Util::assetUrl($data['src']) }}" style="">
							</a>
							@endforeach

						</div>
					</div>

					<div class="col-12 mt-5 text-center">
						{{-- <h2 class="text-white ml-3 mb-4">Marketing Partners</h2> --}}
						<h2 class="text-white mt-5 mb-4">Marketing Partners</h2>
						<div class="icons">
							<?php								
								// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
								$datas = [];
								$datas[] = [ 'style'=>"", 'title'=>"Airdrop Village", 'link'=>"https://airdropvillage.io/airdrop/buyanylight", 'src'=>"images/ieo/marketing-partners/airdropvillage.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Airdrop King", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/marketing-partners/airdropking.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Webotic.ae", 'link'=>"http://webotic.ae", 'src'=>"images/ieo/marketing-partners/webotic.png", ];
								$datas[] = [ 'style'=>"", 'title'=>"Airdrop Alert", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/marketing-partners/airdropalert.png", ];
								$datas[] = [ 'style'=>"max-width: 180px;", 'title'=>"Vitro Services", 'link'=>"https://vitor-services.company", 'src'=>"images/ieo/marketing-partners/vitor-services2.png", ];
							?>
							@foreach($datas as $data)
							<a href="{{ $data['link'] }}" target="_blank">
								<img title="{{ $data['title'] }}" alt="{{ $data['title'] }}" src="{{ Util::assetUrl($data['src']) }}" style="{{ $data['style'] }}">
							</a>
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

					<div class="col-12 mt-5 text-center">
						{{-- <h2 class="text-white ml-3">Sponsors</h2> --}}
						<h2 class="text-white mt-5 mb-4">Sponsors</h2>
						<div class="icons">
							<a href="https://light-middleeast.german-pavilion.com/en/exhibitors/80967/"
							target="_blank" 
							style="text-decoration: none !important;">
							<h3 class="text-white p-3">Consulate General of the Federal Republic of Germany Dubai</h3>
							</a>
						</div>
					</div>

				</div>


			</div>
		</div>
	</div>
</section>
{{-- ////////////////////////////////////////////////////////////// --}}
{{-- partners --}}





























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
										<button type="submit" class="btn buy-btn">
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
			<div class="pt-0">
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

</div>

@endsection