@extends('layouts.main-layout')

@section('meta-title')
<meta name="title" content="BuyAnyLight | IEO">
<meta property="og:title" content=" BuyAnyLight | IEO">
@endsection

@section('meta-description')
<meta name="description" content="BuyAnyLight (BAL) IEO is a crowdfunding campaign aimed at raising funds for the development of a decentralized, marketplace for lighting products." />
<meta property="og:description" content="BuyAnyLight (BAL) IEO is a crowdfunding campaign aimed at raising funds for the development of a decentralized, marketplace for lighting products.">
@endsection

@section('css')
	{{-- <link rel="stylesheet" href="css/ieo.css?v=1"> --}}
	<link rel="stylesheet" href="{{ Util::assetUrl('css/ieo.css') }}">
@endsection

@section('body-end-javascript')
	<script>

				grecaptcha.ready(function() {
		grecaptcha.execute( '{{ env('CAPTCHA_KEY') }}' , { action: 'contact' } )
		   .then(function(token) {
				var recaptchaResponse = document.getElementById('recaptchaResponse');
				recaptchaResponse.value = token;
				$('.send-message').removeAttr('disabled','disabled');
			});
	 });





		$('.roadmap').slick({
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			initialSlide: 0,
			infinite: false,
			appendArrows: $('.arrows'),
			prevArrow: '<button type="button" class="slick-prev d-inline-block">Previous</button>',
			nextArrow: '<button type="button" class="slick-next d-inline-block">Next</button>',
		});



		// $('.roadmap').slick({
		// 	centerMode: true,
		// 	adaptiveHeight: true,
		// 	centerPadding: '0px',
		// 	slidesToShow: 1,
		// 	initialSlide: 1,
		// 	infinite: false,
		// });






		const minBAL = 200;
		// const minBAL = 25000;


		$('.bal-token').change(function() {

			if (numeral($('.bal-token').val()).value() < minBAL && numeral($('.bal-token').val()).value() !== 9) {
				$('.bal-alert').show()
			} else {
				$('.bal-alert').hide()
			}
		})


		$('.bal-token').keyup(function() {
			if (numeral($('.bal-token').val()).value() < minBAL && numeral($('.bal-token').val()).value() !== 9) {
				$('#token-btn').attr('disabled', 'disabled')
			} else {
				$('#token-btn').removeAttr('disabled')
			}

			 $('.token-price').show();

			 $(this).val(function(index, value) {
				var amount = numeral(value).format('0,0');
				
				return amount
			});


		 // parseFloat($(this).val().replace(/,/g , ''))





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

		// 1000



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
<div style="position: relative; z-index: 5">
    <!-- Position toasts -->
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
</div>

<section class="section-1" id="section-1" style="background-image : url({{ Util::assetUrl('/images/ieo/ieo-bg.png')}})">
	<div class="container-fluid h-100 pr-5 pl-5">
		<div class=" d-flex align-items-center h-100">
			<div class="row w-100">
				<div class="col-5 d-flex align-items-center">
					<div>
						<h1 class="display-4">
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
						<div class="mt-3 pagers-paper row">
							<div class="col pr-1">
								<a href="#meet-bal" class="btn btn-BAL w-100">
						        	<i class="fas fa-link"></i>
						            &nbsp;
									Meet BAL
								</a>
							</div>
							<div class="col pr-1 pl-1">
								<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}"  target="_blank" class="btn btn-BAL w-100">
									<i class="far fa-file-pdf"></i>
						            &nbsp;
									Whitepaper
								</a>
							</div>
							<div class="col pr-1 pl-1">
								<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-BAL w-100" target="_blank">
									<i class="far fa-file-pdf"></i>
						            &nbsp;
									Yellowpaper
								</a>
							</div>
							<div class="col pr-1 pl-1">
								<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-BAL w-100">
						        	<i class="far fa-file-pdf"></i>
						            &nbsp;
									One Pager
								</a>					
							</div>
							<div class="col pl-1 ">
								<a href="{{ Util::assetUrl('BuyAnyLight_Pitch_Deck.pdf') }}" class="btn btn-BAL w-100" target="_blank">
									<i class="far fa-file-pdf"></i>
						            &nbsp;
									Pitch Deck
								</a>
							</div>
					<!-- 		<a href="https://t.me/buyanylight" class="btn btn-BAL" target="_blank">
								<i class="fab fa-telegram-plane"></i>
					            &nbsp;
								Join Our Community
							</a> -->
						</div>
						<div class="mt-3 row text-center">
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
						<div class="mt-3">
							<a href="#section-bal-token" class="btn btn-BAL w-100">
								<i class="fas fa-coins"></i>
					            &nbsp;
								Get 17.5% discount Now!
							</a>
						</div>
						<div class="mt-3">
							<div class="card card-body" style=" background-color:#5555A4;  border-radius: 25px; box-shadow: 7px 7px 10px #d2d2d2;">
								<div class="row">
									<div class="col-6">
										<h5 class="mb-0 text-white"><b>IEO - BAL TOKEN</b></h5>
										<p class="mb-1 text-white">
											The IEO of BAL Token starts in:
										</p>
											<div id="timer" class=" pt-1">
												<div class="text-white" style="">
												<div id="days1" class="timer-item d-inline-block mr-3 text-center"></div>
												<div id="hours1" class="timer-item d-inline-block mr-3 text-center"></div>
												<div id="minutes1" class="timer-item d-inline-block mr-3 text-center"></div>
												<div id="seconds1" class="timer-item d-inline-block text-center"></div>
											</div>
										</div>
									</div>
									<div class="col-6 d-flex justify-content-center align-items-center" style="border: 1px solid; border-radius: 25px 0px 0px 25px;background-color: #3a3a77;  border-right: 0px; position: relative; left: 5px;">
										<div>
											<h5 class="text-white">Available soon in platforms</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-2"></div>
				<div class="col-5">
					<div class="videos mt-4" style="box-shadow: 7px 7px 10px #3c3c3c;">
						<a data-fancybox href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0">
							<img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo.png') }}" alt="" width="100%">
							<div class="d-flex align-items-end pb-2 pl-2 h-100 video-btn" style=" position: absolute; bottom: 495px; color: #FF0000;  left: 340px; font-size: 30px;">
		                        <div>
		                            <i class="fab fa-youtube"></i> 
		       
		                        </div>
		                    </div>
						</a>
					</div>
					<div class="mt-3">
						<div class="card card-body" style="border-radius:25px; box-shadow: 7px 7px 10px #3c3c3c;">
							<h4 class="pb-3"><strong>Token Sale</strong></h4>
							<div class="l">
								<div class="row" style="font-size: 10px;">
									<p class="col-md-1 m-0 d-flex align-items-center"><b>Start</b></p>

									<p class="col-md-2 text-center m-0"><b></b></p>
									<p class="col-md-2 text-center m-0"><b>Soft Cap</b></p>
									<!-- <p class="col-md-1 text-right m-0"><b>Soft Cap</b></p> -->
									<!-- <p class="col-md-1 text-right m-0"><b>Soft Cap</b></p> -->
									<p class="col-md-7 text-right m-0 d-flex align-items-center justify-content-end"><b>Hard Cap</b></p>
								</div>
								<div class="pt-1">
									<div class="progress">
			  							<div class="progress-bar" role="progressbar" style="width: 38%" aria-valuenow="35" aria-valuemin="0" aria-valuemax	="100">
			  									$2,100,000
			  							</div>
									</div>
								</div>
								<div class="row pt-1" style="font-size: 10px;">
									<p class="col-md-1 mb-0"><b>$0</b></p>
									<!-- <p class="col-md-2 mb-0"><b>$1,000,000</b></p> -->
									<p class="col-md-2 text-center mb-0"><b></b></p>
									<p class="col-md-2 text-center mb-0"><b>$2,000,000</b></p>
									<p class="col-md-7 text-right mb-0"><b>$8,000,000</b></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding: 10px;">
						<div class="col-4 p-1">
							<div class="card text-center">
								<div class="card-header" style="border-bottom: 1px solid #5555A4;font-size: 12px; color: #5555A4;">
									<b>PRIVATE SALE</b><br>
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
								<div class="card-header" style=" border-bottom: 1px solid #5555A4; font-size: 12px; color: #5555A4;">
									<b>PRE -IEO</b><br>
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
								<div class="card-header" style="border-bottom: 1px solid #5555A4;font-size: 12px; color: #5555A4;">
									<b>IEO</b><br>
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
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="container h-100">
		<div class="d-flex align-items-center h-100">
			<div>
				<div class="row w-100 h-100 d-flex align-items-center ">
					<div class="col-md-7 bal-ieo-text" style="position: relative;">

						 <a href="https://icobench.com/ico/buyanylight-bal" target="_blank" rel="nofollow" title="BuyAnyLight (BAL) on ICOBench">			
						<img border="0" 
						style="height: 80px; position: absolute; top: -5px; right: 25px;" 
						src="{{ Util::assetUrl('images/ieo/partners/icobench.png') }}" 
						alt="BuyAnyLight (BAL) ICO rating"/>
						</a>


						<a href="https://icomarks.com/ico/buyanylight" target="_blank" rel="nofollow" title="BuyAnyLight ICOMARKS">
						<img border="0" 
						style="height: 80px; position: absolute; top: -5px; right: 115px;" 
						src="{{ Util::assetUrl('images/ieo/icomark.png') }}" 
						alt="BuyAnyLight ICOMARKS Rating"/>
						</a> --}}


						<a href="https://icobench.com/ico/buyanylight-bal" 
						target="_blank" rel="nofollow" title="BuyAnyLight (BAL) on ICObench">
							<img border="0" src="https://icobench.com/rated/buyanylight-bal?shape=square&size=m" 
							style="height: 80px; position: absolute; top: -5px; right: 25px;" 
							alt="BuyAnyLight (BAL) ICO rating"/>
						</a>
						
						<a href="https://icomarks.com/ico/buyanylight" 
						target="_blank" rel="nofollow" title="BuyAnyLight ICO">
							<img border="0" src="{{ Util::assetUrl('images/ieo/partners/icomarks.svg')}}"
							style="height: 80px; position: absolute; top: -5px; right: 115px;" 
							alt="BuyAnyLight ICO Rating"/>
						</a>




						<h3 class="" style="line-height: 1.5">
							<strong>
								<span class="">
									<b>BAL Initial <span class="pinkish">Exchange</span></b>
								</span>
							</strong> 
							<br> 
							<span class=""> 
								<b>Offering (IEO)</b> 
							</span>
							<br> 
							<p class="small-desc">
								{{-- BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowdfunding campaign aimed at raising funds for the development of a decentralized. --}}
								The BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowdfunding campaign to raise funds for the development of a blockchain deployed, decentralized marketplace for lighting products, and the expansion of the existing BAL Network.
							</p>					
						</h3>

						<div class="pt-1 pagers-paper">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-BAL">
	            				<i class="far fa-file-pdf"></i>
	            				&nbsp;
								One Pager
							</a>					
							<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}"  target="_blank" class="btn btn-BAL">
								<i class="far fa-file-pdf"></i>
	            				&nbsp;
								White Paper
							</a>
							<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-BAL" target="_blank">
								<i class="far fa-file-pdf"></i>
	            				&nbsp;
								Yellow Paper
							</a>
							<a href="{{ Util::assetUrl('BuyAnyLight_Pitch_Deck.pdf') }}" class="btn btn-BAL" target="_blank">
								<i class="far fa-file-pdf"></i>
	            				&nbsp;
								Pitch Deck
							</a>
							<a href="https://t.me/buyanylight" class="btn btn-BAL mt-3" target="_blank" style="width: 86%;">
								<i class="fab fa-telegram-plane"></i>
	            				&nbsp;
								Join Our Community
							</a>
						</div>
						<div class="pt-3">
							<h5>
								View on Etherscan
							</h5>
							<div class="pt-2">
								<a href="https://etherscan.io/token/0xd8e1c43a29dc0311dcadbaccc8c3b677cd462a1b" class="btn btn-BAL" target="_blank">Token Contract</a>
								<a href="https://etherscan.io/address/0xE9F5c250D03B8ff13119a3529D59771224FDDc19" class="btn btn-BAL" target="_blank">Token Owner </a>
								<a href="#allocation" class="btn btn-BAL">Token Allocation</a>
								<a href="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" class="btn btn-BAL" target="_blank">Token Sale Agreement</a>
							</div>
						</div>
						<div class="videos mt-4">
							<a data-fancybox 
							style="background-image: url({{ Util::assetUrl('/images/ieo/bal-ieo.png') }}); background-size: 100%; border: solid 3px black" 
							href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0" 
							class="video-link" >
								<img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo.png') }}" alt="" >
								<div class="d-flex align-items-end pb-2 pl-2 h-100 text-dark">
		                            <div>
		                                <i class="fab fa-youtube"></i> 
		                                <span>
		                                    Play video
		                                </span>
		                            </div>
		                        </div>
							</a>
							<a data-fancybox 
							style="background-image: url({{ Util::assetUrl('/images/ieo/bal-ieo-vs-ico.png') }}); background-size: 100%; border: solid 3px black"
							href="https://www.youtube-nocookie.com/embed/5nMkricvzfc?rel=0" 
							class="">
								<img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo-vs-ico.png') }}" alt="" style="border: solid 3px black">
								<div class="d-flex align-items-end pb-2 pl-2 h-100 text-dark">
		                            <div>
		                                <i class="fab fa-youtube"></i> 
		                                <span>
		                                    Play video
		                                </span>
		                            </div>
		                        </div>
							</a>
						</div>
						<div class="pt-4">
							<h4>
								View on Etherscan
							</h4>
							<div class="pt-2">
								<a href="https://etherscan.io/token/0xd8e1c43a29dc0311dcadbaccc8c3b677cd462a1b" class="btn btn-BAL" target="_blank">Token Contract</a>
								<a href="https://etherscan.io/address/0xE9F5c250D03B8ff13119a3529D59771224FDDc19" class="btn btn-BAL" target="_blank">Token Owner </a>
								<a href="#allocation" class="btn btn-BAL">Token Allocation</a>
								<a href="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" class="btn btn-BAL" target="_blank">Token Sale Agreement</a>
							</div>
						</div>
						
					</div>
					<div class="col-md-5">
						<div class="countdown">
							<div class="d-flex align-items-center h-100" style="padding: 20px; padding-bottom: 2rem;">
								<div class="w-100">	
									{{-- <h4 class="text-center text-white"><b>IEO PRE SALE</b></h4> --}}
									<div class="w-100 pt-2">
										<h4 class="text-center text-white"><b>PRE -IEO SALE LIVE NOW!</b></h4>
										{{-- <h4 class="text-center text-white"><b>PRIVATE SALE LIVE NOW!</b></h4> --}}
										<p class="text-white text-center mb-0">
											<b>sale ends in:</b>
										</p>
										<div id="timer" class="pt-2  text-center d-flex justify-content-center">
											<div class="row justify-content-center" style="width: 90%">
												<div id="days" class="timer-item d-inline-block"></div>
												<div id="hours" class="timer-item d-inline-block"></div>
												<div id="minutes" class="timer-item d-inline-block"></div>
												<div id="seconds" class="timer-item d-inline-block"></div>
											</div>
										</div>
										<div class="pl-5 text-white">
											<small><span>1 BAL = 0.25 USD</span></small>
											<small><span>1 BAL = 0.2 USD</span></small>
										</div>
									</div>
									<div class="w-100">
										<p class="text-white text-center pt-3 mb-0"><b>IEO Sale starts in:</b>
										</p>
										<div id="timer" class=" pt-2 text-center d-flex justify-content-center">
											<div class="row justify-content-center" style="width: 90%">
												<div id="days1" class="timer-item d-inline-block"></div>
												<div id="hours1" class="timer-item d-inline-block"></div>
												<div id="minutes1" class="timer-item d-inline-block"></div>
												<div id="seconds1" class="timer-item d-inline-block"></div>
											</div>
										</div>
										<div class="pl-5 text-white">
											<small><span>1 BAL = 0.30303 USD</span></small>
										</div>
									</div>
									<div class="mt-4">
										<div class="row" style="font-size: 10px;">
											<p class="col-md-4 text-white m-0 d-flex align-items-center">Start</p>
											<p class="col-md-4 text-center text-white m-0 d-flex align-items-center justify-content-center">Soft Cap</p>
											<p class="col-md-4 text-right text-white m-0 d-flex align-items-center justify-content-end">Hard Cap</p>
										</div>
										<div class="pt-1">
											<div class="progress">
		  										<div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
		  											$2,100,000
		  										</div>
											</div>
										</div>
										<div class="row pt-1" style="font-size: 10px;">
											<p class="col-md-4 text-white">26% target raised</p>
											<p class="col-md-4 text-center text-white">$4,000,000</p>
											<p class="col-md-4 text-right text-white">$8,000,000</p>
										</div>
									</div>
									<div class="w-100">
										<img class="countdown-bottom-img" src="{{ Util::assetUrl('images/ieo/countdown-bottom.png') }}" alt="">
									</div>
									<div class="w-100 mt-2">
										<div class="card-deck">



											{{-- <div class="card text-center">
												<div class="card-header text-white " style="background: #F511A9; padding:12px;">
													<b>PRIVATE SALE</b>
												</div>
												<div class="card-text p-2" style="font-size: 11px;">
													 1<sup>st</sup> - 31<sup>st</sup> Oct 2019
												</div>
											</div>
											<div class="card text-center">
												<div class="card-header  text-white" style="background: #F511A9">
													<b>IEO START</b>
												</div>
												<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
													1<sup>st</sup>&nbsp; Dec 2019
												</div>
											</div>
											<div class="card text-center ">
												<div class="card-header  text-white" style="background: #F511A9">
													<b>IEO END</b>
												</div>
												<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
													31<sup>st</sup>&nbsp; Dec 2019
												</div>
											</div> --}}

											
											<div class="card text-center">
												<div class="card-header text-white" style="background: #F511A9; padding:10px;">
													<b>PRIVATE SALE</b><br>
													<span style="font-size: 11px; text-decoration: line-through;">0.30303 USD</span><br>
													<span style="font-size: 11px;">0.2 USD</span>
												</div>
												<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center" style="font-size: 11px;">
													<div class="row">																											 
														<div class="col-12">1<sup>st</sup> Oct 2019</div>
														<div class="col-12">to</div>
														<div class="col-12">31<sup>st</sup> Oct 2019</div>
													</div>

												</div>
											</div>
											<div class="card text-center">
												<div class="card-header  text-white" style="background: #F511A9; padding: 10px;">
													<b>PRE -IEO</b><br>
													<span style="font-size: 11px; text-decoration: line-through;">0.30303 USD</span><br>
													<span style="font-size: 11px;">0.25 USD</span>
												</div>
												<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
													<div class="row">														
														<div class="col-12">1<sup>st</sup> Nov 2019</div>
														<div class="col-12">to</div>
														<div class="col-12">31<sup>st</sup> Jan 2020</div>
													</div>
												</div>
											</div>
											<div class="card text-center ">
												<div class="card-header  text-white" style="background: #F511A9; padding: 10px;">
													<b>IEO</b><br>
													<span style="font-size: 11px;">0.30303 USD</span><br>
													<span style="font-size: 11px;">&nbsp;</span>
												</div>
												<div class="card-text p-2 h-100 d-flex align-items-center justify-content-center">
													<div class="row">
														<div class="col-12">1<sup>st</sup> Feb 2020</div>
														<div class="col-12">to</div>
														<div class="col-12">29<sup>th</sup> Feb 2020</div>
													</div>													
												</div>
											</div>



										</div>
									</div>

									<div class="pt-3">
										<div style="font-size: 80%; font-weight: 400; width: 123px; display: inline-block; line-height: 16px;">
											<a href="{{ Util::assetUrl('bal_certificate.pdf')}}" target="_blank" class="text-white">
												Audited by
												Blockchain Consilium
											</a>
										</div>

										<p class="ribbon small">
										  	<span class="text">
										  		<strong class="bold">17.5% OFF</strong> until IEO Sale!
										  	</span>
										</p>											

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row pt-4">
					<div class="pt-4 w-100">
						<a href="#section-bal-token" class="btn w-100 buy-btn">
							<div class="header-text">
								<h4>
									<b>
										BUY BAL TOKENS NOW!
									</b>
								</h4>
							</div> 
							<i class="fas fa-chevron-down"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
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



<section class="section-2 bg-black pt-3 pb-3">
	<div class="w-100 container">
		<div class="row">
			<div class="col-3 d-flex align-items-center">
				<div class="text-white">
					<span style="font-size: 18px;">Ratings</span>
					<br> 
					by ICO Experts
				</div>
			</div>
			<div class="col-9">
				@foreach($datas as $data)
				<div class="d-inline-block mr-3">
					<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
						<img class="icon" src="{{ $data['src'] }}" style="height: 85px;">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>

<!-- 	<div class="pt-5 pb-5">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-md-6">
					<h3>
						<strong>
							<span class="header-text">
								What is BAL  
							</span>
							<span>
								Token?
							</span>
						</strong> 
					</h3>
					<p>
						{{-- BAL is an ERC 20 compliant digital asset deployed on Ethereum blockchain. It allows peer to peer mode of payment store and exchange of value and is specifically designed for supporting larger volumes of transactions and creation of a complete financial ecosystem. It offers quick, secure and efficient transfer of value with high confirmation speed. --}}
						BAL is an ERC-20 compliant digital token deployed on the Ethereum blockchain that allows a peer-to-peer mode of payment, storage, and exchange of value seamlessly and securely. The BAL Token is specifically designed to support large volumes of transactions within the BAL ecosystem. It offers quick, secure, and efficient transfer of value with high confirmation speed.						
					</p>
				</div>
				<div class="col-md-6 text-center">	
					<img src="{{ Util::assetUrl('images/ieo/3.png')}}" width="80%">		
				</div>
			</div>
		</div>
	</div> -->
</section>

<section>
	<div class="container pt-5 pb-5">
		<div class="row pt-5" id="meet-bal">
			<div class="col-6">
				<img src="{{ Util::assetUrl('images/ieo/2.png')}}" width="80%">		
			</div>
			<div class="col-6 d-flex align-items-center">
				<div>
					<h3>
						<strong>
							<span class="header-text">
								Meet 
							</span> 
							<span class="text-dark">
								BuyAnyLight
							</span> 
						</strong> 
					</h3>
					<div class="pt-3">
						<p>
							BuyAnyLight help you source quality LED products for all of your lighting needs. Using blockchain, AI, Big Data and Smart Contracts, it presents your inquiries before the right manufacturers and ensure that you get the products you had ordered. 
						</p>
					</div>
					<div class="all-videos mt-4">
						<a data-fancybox="" style="background-image: url({{ Util::assetUrl('images/ieo/bal.jpeg')}}); background-size: cover; border: solid 3px black" href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="video-link">
							<img class="video" src="{{ Util::assetUrl('images/ieo/bal.jpeg')}}" alt="" >
							<div class="d-flex align-items-end justify-content-center h-100" style="position: absolute; bottom: 35px; color: #FF0000; left: 130px; font-size: 20px;">
		                        <div>
		                            <i class="fab fa-youtube"></i> 
		                        </div>
		                    </div>
						</a>
						<a data-fancybox="" style="background-image: url(Util::assetUrl('images/ieo/lightfinder.jpeg')}}); background-size: cover; border: solid 3px black" href="https://www.youtube-nocookie.com/embed/k-zrKcgJf0Q?rel=0" class="">
							<img class="video" src="{{ Util::assetUrl('images/ieo/lightfinder.jpeg')}}" alt="" >
							<div class="d-flex align-items-end justify-content-center h-100" style="position: absolute; bottom: 35px; color: #FF0000; left: 405px;font-size: 20px;">
		                        <div>
		                       		<i class="fab fa-youtube"></i> 
		                        </div>
		                    </div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-5 pb-5 mt-5">
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
			<div class="card-deck mt-4">
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

?>

<section class="BAL-news" style="background-color: #f7f7f7; height: 100%;">
	<h3 class="text-center pt-5"><strong>BuyAnyLight in the News and Media</strong></h3>
	<div class="container d-flex align-items-center pt-4 pb-5" style="">
		<div class="">
			<div class="news-channels text-center">
				@foreach($newsdatas as $nd)
					@if($nd['title'] == 'fn')
					<a href="{{ $nd['link'] }}" class="mr-4" target="_blank">
						<img src="{{ $nd['src'] }}" width="15%">
					</a>
					@else
					<a href="{{ $nd['link'] }}" class="mr-4 pt-4" target="_blank">
						<img src="{{ $nd['src'] }}" width="10%">
					</a>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</section>



<section class="section-buy-token" id="section-bal-token">
	<div class="pt-5 pb-5 container">
		<h3>
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
		<div class="buying-content">
			<form action="/buy-token" method="post" enctype="multipart/form-data">
				@csrf()
				<div class="pt-4">
					<div class="input-group" style="height: 70px; position: relative; right: 13px;">
	  					<div class="input-group-prepend" style="width: 135px">
	    					<span class="input-group-text d-flex justify-content-center btn-BAL" id="basic-addon1" style="width: 100%; border-radius: 20px; position: relative; left: 15px; z-index: 1; box-shadow: 4px 0px 5px 0px #cccccc; background-color: #5555A4;" data-toggle="tooltip" data-placement="right" title="BAL Token">
	    						<img src="{{ Util::assetUrl('images/logo-white-mobile.png') }}" width="28">
	    					</span>
	  					</div>
	  					<input class="form-control bal-token pl-4" placeholder="Enter an amount you want to buy" name="bal" required="required" style="height: 70px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; font-size: 15px; border: 1px solid #000000;">
					</div>
	  				<div>
	  					<small>The minimum investment is 50 USD and 200 BAL</small>
	  					{{-- <small>The minimum investment is 5,000 USD and 25,000 BAL</small> --}}
	  				</div>
				</div>
				<div class="pt-4 bal-alert" style="display: none;">
					<div class="alert alert-danger" role="alert">
  						The minimum investment is 50 USD and 200 BAL
  						{{-- The minimum investment is 5,000 USD and 25,000 BAL --}}
					</div>
				</div>
				<hr/>
				<div class=" mt-4">
					<div class="row">
						<div class="col-6">
						<h3 class="pb-3">
							<b>
								BAL <span class="header-text">Costs</span> Today
							</b>
						</h3>
						@foreach($tokens as $token)
							<div class="card mb-3" style="border-radius: 20px; height: 60px;">
  								<div class="row no-gutters">
    								<div class="col-md-3 d-flex align-items-center justify-content-center btn-BAL" style="border-radius: 20px; box-shadow: 4px 0px 5px 0px #cccccc; height: 60px;" data-toggle="tooltip" data-placement="right" title="{{ $token['symbol'] }}">
      									<p class="mb-0" style="font-size: 20px;">{!! $token['logo'] !!}</p>
    								</div>
    								<div class="col-md-9">
      									<div class="card-body card-body d-flex align-items-center justify-content-end" style="height: 60px;">
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
						<div class="col-6">
							<h3 class="pb-3">
								<b>
									<span class="header-text">Profit</span> / Return on Investment
								</b>
							</h3>

							{{-- cb --}}
							{{-- //////////////////////// --}}
							<div class="card card-body" style="border-radius: 20px; ">
								<div class="row">
									<div class="col-7">
										<div class="pt-2">
											<h5>
												<b>
													<u>Cost today</u>
												</b>
											</h5>
											<p style="padding-bottom: 18px;">
												<span class="BAL_value">1</span> BAL = <span class="USD_value">0.25</span> 
												{{-- <span class="BAL_value">1</span> BAL = <span class="USD_value">0.2</span>  --}}
												USD
											</p>
											<h5>
												<b>
													<u>Cost during IEO</u>
												</b>
											</h5>
											<p style="padding-bottom: 18px;">
												<span class="BAL_value">1</span> BAL = <span class="USDIEO_value">0.30303</span>
												USD
											</p>
											<h5>
												<b>
													<u>Profits investing today</u>
												</b>
											</h5>
											<p class="mb-1 mt-1">
											 	{{-- ROI : 51.52%  --}}
											 	ROI : 21.21% 
											 </p>
											 <p class="mb-0">
											 	Profits :
												<span class="USD_return">
													{{-- 0.10303  --}}
													0.05303 
												</span>
												USD
											 </p> 
										</div>	
									</div>
									<div class="col-5">
										<div class="pt-2 token-price" style="display: none">
											<h5>
												<b>
													<u>Price today</u>
												</b>
											</h5>
											<p style="padding-bottom: 18px;">
												<span>1</span> BAL = <span>0.25</span> 
												{{-- <span>1</span> BAL = <span>0.2</span>  --}}
												USD
											</p>
											<h5>
												<b>
													<u>Price during IEO</u>
												</b>
											</h5>
											<p style="padding-bottom: 18px;">
												<span>1</span> BAL = <span>0.30303 USD</span>
											</p>
											
										</div>
									</div>
								</div>
								<p class="ribbon">
								  	<span class="text">
								  		<strong class="bold">17.5% OFF</strong> until IEO Sale!
								  	</span>
								</p>								
							</div>
							{{-- //////////////////////// --}}
							{{-- cb --}}


						</div>
					</div>
					<div class="pt-4 row w-100">
						<div class="col-md-12 col-12 ">
							<div class="form-group">
								<h3>
									<label> 
										<b>Step 1:</b> Select <span>Currency</span> to buy BAL Tokens
									</label>
								</h3>
								<div class="row">
									<div class="col-md-6 col-12">
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
									<div class="col-md-6 col-12">
										@if(!empty($code))
											<input type="hidden" name="referral_code" value="{{ $code }}">
										@endif
										<button type="submit" class="btn btn-BAL buy-btn w-100" style="border-radius: 10px; color: #fff;" id="token-btn"><b>Buy Tokens Now!</b></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-body mt-3">
			  				How to add a Custom ERC20 Token / our BAL Token to your Ethereum wallet? <br>
			  				<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/" target="_blank">Check out this easy step-by-step guide</a>
			  			</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>
























<?php /*






<section class="section-4 text-white" id="jurisdiction" style="display: none !important;">
	<div class="bg-black pt-2 pb-2" style="background-image: url({{ Util::assetUrl('images/ieo/bal_bg.png') }});">
		<div class="container pt-5 pb-0">
			<div class="row justify-content-center">			
				<h3>
					<strong>
						{{-- <span class="header-text" style="text-shadow: 0px 0px 25px rgba(255, 255, 255, 0.45);"> --}}
						<span class="">
							Jurisdiction
						</span>
					</strong>
				</h3>
			</div>
			<div class="row justify-content-center mb-4">
				<p>
					Available in 777 Countries. See the full list below:
				</p>
			</div>
			<div class="row justify-content-center">
				<div class="jurisdiction_table">
					<?php
						$countries = ["Afghanistan", "Belarus", "Bolivia", "Bosnia & Herzegovina", "Burundi", "Central African Rep.", "Congo, Dem. Rep.", "Congo, Repub. of the", "Cook Islands", "Egypt", "Eritrea", "Guinea-Bissau", "Haiti", "Iran", "Iraq", "Lebanon", "Libya", "Maldives", "Mali", "Moldova", "Montenegro", "Puerto Rico", "Senegal", "Serbia", "Somalia", "Sudan", "Swaziland", "Syria", "Tunisia", "Ukraine", "United States", "Venezuela", "Yemen", "Zimbabwe",];
					?>
					@foreach($countries as $country)
					<div class="items">{{ $country }}</div>
					@endforeach					
				</div>
			</div>
			<div class="column justify-content-space-between mt-5">
				
				<div class="col-12">					
					<p style="text-align: right;">
						<span>BuyAnyLight is brought to you by:</span> <br>
						<a href="https://almani.ae" target="_blank">Almani Lighting GmbH, Germany</a> <br>
					</p>
				</div>

				<div class="col-12">					
					<p style="text-align: right;">
						<a href="{{ route('terms') }}" target="_blank" class="terms">Terms & Conditions</a>
					</p>
				</div>					

			</div>
		</div>






	</div>
</section>






*/ ?>










































































<section class="section-3 pt-3 pb-5">
	{{-- <div class="text-center pt-5">
		<img src="{{ Util::assetUrl('images/ieo/4.png')}}" width="50%">
	</div> --}}
	<div class="container pt-5 pb-5">
		<div class="pt-1 text-center">
			<h3>
				<b>Do you want to know more?</b>
			</h3>
			<p class="pt-3">
				Download to know more about us, <br>our project and how can you participate in our upcoming token sale.
			</p>
			<div class="buttons pt-3">
				<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-BAL">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					One Pager
				</a>
				<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" target="_blank" class="btn btn-BAL ml-3">
					<i class="far fa-file-pdf"></i>
	            	&nbsp;
					Whitepaper
				</a>
				<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-BAL ml-3" target="_blank">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					Yellowpaper
				</a>				

			</div>
			<div class="pt-3">
				<a href="#contact" class="btn btn-BAL m-2">Schedule a meeting</a>
				<a href="#section-bal-token" class="btn btn-BAL m-2">
					<b>
						BUY BAL TOKENS NOW!
					</b>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section-4">
	<div class="bg-black pt-5 pb-5">
		<div class="container pt-5 pb-5">
			<div class="row d-flex align-items-center">
				<div class="col-md-6">
					<div class="vision-mission">
						<img class="video" src="{{ Util::assetUrl('/images/ieo/visionmission.png') }}" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<h3>
						<strong>
							<span class="header-text">
								Our
							</span>
							<span class="text-white">
								Vision
							</span>
						</strong> 
					</h3>
					<p class="text-white">
						We envision to revolutionize the entire sourcing process by harnessing the power of blockchain, AI, Big Data and Smart Contracts. Starting from the LED Lighting Industry, we aim to expand BAL Network into other industries including but not limited to Construction, Pharma, Food and Precious Metal Industry. 
					</p>
					<h3>
						<strong>
							<span class="header-text">
								Our
							</span>
							<span class="text-white">
								Mission
							</span>
						</strong> 
					</h3>
					<p class="text-white">
						Our mission is to become the leading platform of choice for individuals and businesses and manufacturers. Principled, honest and focused, we leverage the world’s best suppliers and deliver the most significant value LED products, the most exceptional service and advice, and first-rate customer satisfaction – every time.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-5 pt-5">
	<div class="container pt-5 pb-5 text-center">
		<h3>
			<strong>
				<span class="header-text">
					Why choose
				</span>
				<span class="text-dark">
					BAL token?
				</span>
			</strong> 
		</h3>
		<div class="row pt-5">
			<div class="col-md-4 whychoosebaltoken-item">
				<div>
					<img src="{{ Util::assetUrl('images/ieo/6-1.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Decentralization</b>
						</h5>
						<p class="pt-1">
							BAL is decentralized and community owned
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 whychoosebaltoken-item">
				<div>
					<img src="{{ Util::assetUrl('images/ieo/6-2.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Security</b>
						</h5>
						<p class="pt-1">
							All transactions in BAL are secured by Smart Contracts.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 whychoosebaltoken-item">
				<div>
					<img src="{{ Util::assetUrl('images/ieo/6-3.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Utility</b>
						</h5>
						<p class="pt-1">
							BAL Token is the native token within the BAL Ecosystem.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-5 pb-5">
			<div class="col-md-4 whychoosebaltoken-item">
				<div>
					<img src="{{ Util::assetUrl('images/ieo/6-4.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Liquidity</b>
						</h5>	
						<p class="pt-1">
							Exchange or transfer value as simple as sending an email.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 whychoosebaltoken-item">
				<div>
					<img src="{{ Util::assetUrl('images/ieo/6-5.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Nominal Transactional Fee</b>
						</h5>
						<p class="pt-1">
							Transfer up to a million dollar in a single digit fee.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 whychoosebaltoken-item">
				<div>
					<img src="{{ Util::assetUrl('images/ieo/6-6.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Transparency</b>
						</h5>
						<p class="pt-1">
							All transactions are transparent and auditable.
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section >
<section>
	<img src="{{ Util::assetUrl('images/HALF.jpg') }}" width="100%">

</section>


<section class="section-6" id="roadmap">
	<div class="bg-black pt-5 pb-5">
		<div class="container pt-5 pb-5 text-center">
			<h3>
				<strong>
					<span class="header-text">
						BAL
					</span>
					<span class="text-white">
						Roadmap
					</span>
				</strong> 
			</h3>

			<div>
				<p class="text-white">
					The BAL Platform is an established business with a ready platform. To expand our operations and decentralize our business model through blockchain we have devised a solid plan and an ambitious roadmap, with the most expert team, and we are positioned to expand globally. Our ability to rapidly deploy a solution once the technology has been developed makes our financial goal more attainable.
				</p>
			</div>

			<div class="pt-5">	
				

				

				<?php /*
				

				{{-- roadmap --}}
				{{-- ////////////////////////////////////////////////////////////////// --}}
				<ul class="roadmap">

					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}


					<li class="li complete">

						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2014</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
									<div class="card mb-2"><div class="card-body">Establishment of Almani Lighting GmbH, Germany</div></div>
									<div class="card mb-2"><div class="card-body">In depth analysis and visits to the world’s best LED manufacturer</div></div>
								</div>
							</div>
						</div>

						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2015</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
									<div class="card mb-2"><div class="card-body">Establishment of the Almani Lighting LLC, Dubai, UAE Branch</div></div>
									<div class="card mb-2"><div class="card-body">Cooperation with ASAS Holdings, Dubai, UAE</div></div>      							
									<div class="card mb-2"><div class="card-body">A range of 50 products in architectural and residential lighting</div></div>      							
								</div>
							</div>
						</div>


						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2016</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
									<div class="card mb-2"><div class="card-body">Inception of the idea for the BAL Platform</div></div>
									<div class="card mb-2"><div class="card-body">Initial research and feasibility</div></div>
									<div class="card mb-2"><div class="card-body">Recruitment of technical team for BAL platform development</div></div>
									<div class="card mb-2"><div class="card-body">Platform development initiated</div></div>
									<div class="card mb-2"><div class="card-body">Product range covering 100 products in architectural, residential, commercial and decorative lighting</div></div>
								</div>
							</div>
						</div>


						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2017</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
									<div class="card mb-2"><div class="card-body">ASAS Holdings invests in Almani Lighting LLC, and acquires 51% ownership</div></div>
									<div class="card mb-2"><div class="card-body">Establishment of a state-of-the-art Dubai showroom</div></div>
									<div class="card mb-2"><div class="card-body">Warehouse expansion</div></div>
									<div class="card mb-2"><div class="card-body">Several prestigious projects in UAE completed</div></div>
									<div class="card mb-2"><div class="card-body">Product range covering 250 products in architectural, residential, commercial and decorative lighting</div></div>
									<div class="card mb-2"><div class="card-body">BAL LightFinder and My Home Features testing</div></div>
								</div>
									
							</div>
						</div>



					</li>

					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}


					<li class="li complete">


						<div style="width: 30%;">
							<div class="timestamp">
								<span class="author text-white pb-4">2018</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
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
						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2019</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
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


					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}


					<li class="li complete">

						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2020</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 

									
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
					
					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}


					<li class="li complete">



						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2021</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 

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


						<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2022</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
									<div class="card mb-2"><div class="card-body">On-chain logistic, freight tracking functionality implemented</div></div>
									<div class="card mb-2"><div class="card-body">AI based Smart Contracts implementation</div></div>
									<div class="card mb-2"><div class="card-body">Development of BAL Exchange for enabling digital asset trading</div></div>
									<div class="card mb-2"><div class="card-body">Development of BAL Custodial Platform</div></div>
								</div>
							</div>
						</div>
							<div>
							<div class="timestamp">
								<span class="author text-white pb-4">2023 - 2024</span>
							</div>
							<div class="status">
								<div class="one-map text-left"> 
									<div class="card mb-2"><div class="card-body">Development of BAL Tokenization Platform</div></div>
								</div>
							</div>
						</div>
					</li>

					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}
					{{-- lililililililililililililililililililililililililililililililililililili --}}



				</ul>  
				{{-- ////////////////////////////////////////////////////////////////// --}}
				{{-- roadmap --}}

				<div class="arrows pt-3"></div>   


				*/ ?>


				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
	
				
				
				
				











				
				
				
				
				
				{{-- roadmap --}}
				{{-- ////////////////////////////////////////////////////////////////// --}}

				<?php
					$timelines = [];

					$timeline = [];
					$timeline[] = [
						'name' => '2014',
						'icon' => 'fas fa-archway',
						'items' => [
							'Foundation Almani Lighting Gmbh.',
						],
					];
					$timeline[] = [
						'name' => '2015',
						'icon' => 'far fa-handshake',
						'items' => [
							'Foundation of Almani Lighting LLC, Dubai.',
							'Strategic Partnerships.',
						],
					];
					$timeline[] = [
						'name' => '2016',
						'icon' => 'fas fa-users',
						'items' => [
							'BAL Idea Inception, Research and Feasibility and Development team recruitment.',
						],
					];
					$timeline[] = [
						'name' => '2017',
						'icon' => 'fas fa-warehouse',
						'items' => [
							'51% Ownership Acquisition of Almani Lighting LLC by Asas Holding, Warehouse expansion.',
							'BAL Light Finder development and testing.',
						],
					];
					$timelines[] = $timeline;
					



					$timeline = [];
					$timeline[] = [
						'name' => '2018',
						'icon' => 'fas fa-sitemap',
						'items' => [
							'Team Expansion, Product range extended to 600+.',
							'Fiat Partner Collaboration, Major Sheikh Palace Contracts in UAE.',
						],
					];
					$timeline[] = [
						'name' => '2019',
						'icon' => 'fas fa-at',
						'items' => [
							'BAL Beta Version release,',
							'Documentation and drafting,',
							'Website Development and launch,',
							'Seed round finished and Public Token sale.',
							'Marketing Kickstart.',
						],
					];
					$timeline[] = [
						'name' => '2020',
						'icon' => 'fas fa-link',
						'items' => [
							'IEO Sale and Listing on exchanges.',
							// 'Blockchain development team expansion',
							'Blockchain based platform development Initiated',
							'Smart Contracts Development, Wallet development with cross-chain.',
							'Asset exchange.',
							'Traceable Logistic partnerships and development initiated.',
						],
					];
					$timelines[] = $timeline;



					$timeline = [];
					$timeline[] = [
						'name' => '2021',
						'icon' => 'fas fa-mobile',
						'items' => [
							'Traceable logistic functionality implementation.',
							'Alpha version release.',
							'Mobile apps release.',
						],
					];
					$timeline[] = [
						'name' => '2022',
						'icon' => 'fas fa-brain',
						'items' => [
							'On-chain logistic fully implemented.',
							'AI-Based Smart Contracts Implementation.',
							'BAL Custodial Platform development.',
						],
					];
					$timeline[] = [
						'name' => '2023',
						'icon' => 'fas fa-file',
						'items' => [
							'Expansion into construction industry.',
							'BAL Tokenization Platform Development.',
							'Smart Contract Notary Service Launch.',
						],
					];

					$timelines[] = $timeline;


				?>

				<ul class="roadmap">
					@foreach($timelines as $key => $tmls)
					<?php  
						if($key == 0)
						$dot = 'first-item';
						else if($key == count($timelines)-1)
						$dot = 'last-item';
						else
						$dot = '';
					?>

					<li class="li complete">
						<div class="ps-timeline-sec">
							<div class="container">
								<ol class="ps-timeline {{ $dot }}">
								@foreach ($tmls as $key2 => $tml)
									<li style="width:{{ 100/count($tmls) }}%;">
										<?php  $pos = ($key2%2 == 0)?'top':'bot'; ?>							
										<?php  $pos2 = ($key2%2 == 0)?'bot':'top'; ?>
										
										<div class="img-handler-{{ $pos }}">
											{{-- <img src="{{ $tml['icon'] }}" alt=""/> --}}
											<i style="" class="{{ $tml['icon'] }} timeline-icon"></i>
										</div>


										<div class="ps-{{ $pos2 }}">
											@foreach($tml['items'] as $item)
												<p>{{ $item }}</p>									
											@endforeach
										</div>
										<span class="ps-sp-{{ $pos }}">{{ $tml['name'] }}</span>
									</li>
								@endforeach
								</ol>
							</div>
						</div>		
					</li>
					@endforeach
				</ul>
				<div class="arrows pt-3"></div>   

				{{-- ////////////////////////////////////////////////////////////////// --}}
				{{-- roadmap --}}


				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
	</div>
</section>

<style>
#custom-token-info table td {
    min-height: 55px;
    height: 55px;
    padding: 0 15px;
}
</style>

<section class="section-7" id="custom-token-info">
	<div class="pt-5">
		<div class="container pt-5 pb-5">
			<h3 class="text-center">
				<strong>
					<span class="header-text">
						BAL Crowd Sale
					</span>
					<span class="text-dark">
						Information
					</span>
				</strong> 
			</h3>
			<div class="text-center pt-5">
				<div class="row">
					<div class="col-md-5">
						<div>
							<h4 class="text-left"> <b>Token Information</b></h4>
							<table class="text-left w-100 mt-3" cellpadding="10" id="token-info">
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
									<td>2 Million USD</td>
								</tr>
								<tr>
									<td><b>Hard Cap:</b></td>
									<td>8 Million USD</td>
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
					</div>
					<div class="col-md-7">
						<div>
							<h4 class="text-left"> <b>Crowd Sales Plan</b></h4>
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
					</div>
					<div class="col-md-6 offset-md-3">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-5 pb-5">
		<div class="container">
			<h3 class="text-left">
				<strong>
					<span class="header-text">
						Funds Distribution
					</span>
					<span class="text-dark">
						Plan
					</span>
				</strong> 
			</h3>
			<div class="pt-3">
				<p>
					Our aim is to make BAL Platform the leading marketplace for sourcing light products across the globe, and we have devised a plan to make our dream a reality. The proceeds from the token sale will fund the decentralized platform launch, continued platform development, user acquisition, and marketing:					
				</p>
			</div>
			<div class="pt-3">
				<div class="row">
					<div class="col-md-4">
						<p><b>DEVELOPMENT AND GROWTH</b></p>
						<p><b>MARKETING EXPENSE</b></p>
						<p><b>HIRING SPECIALISTS AND BUILDING TEAM</b></p>
						<p><b>PROMOTER EXPENSE</b></p>
						<p><b>ADMINISTRATIVE CHARGES AND LEGAL ISSUES</b></p>
						<p><b>FOUNDING TEAM</b></p>
					</div>
					<div class="col-md-8">
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
							<p class="w-100 text-right pr-3">
								40%
							</p>
						</div>
						<div class="progress mt-4">
							<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							<p class="w-100 text-right pr-3">
								20%
							</p>
						</div>
						<div class="progress mt-4">
							<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							<p class="w-100 text-right pr-3">
								10%
							</p>
						</div>
						<div class="progress mt-4">
							<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							<p class="w-100 text-right pr-3">
								10%
							</p>
						</div>
						<div class="progress mt-4">
							<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							<p class="w-100 text-right pr-3">
								10%
							</p>
						</div>
						<div class="progress mt-4">
							<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							<p class="w-100 text-right pr-3">
								10%
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-5 pb-5" id="allocation">
		<div class="container">
			<h3 class="text-left">
				<strong>
					<span class="header-text">
						Token
					</span>
					<span class="text-dark">
						Distribution
					</span>
				</strong> 
			</h3>
			<div class="row pt-3 d-flex align-items-center">
				<div class="col-md-6 text-center">
					<img src="{{ Util::assetUrl('images/ieo/graph1.png') }}" width="60%">
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
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

						<div class="col-md-6">
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
	</div>
	<div class="container pt-5 pb-5">
		<div class="pt-1 text-center">
			<h3>
				<b>Do you want to know more?</b>
			</h3>
			<p class="pt-3">
				Download to know more about us, <br>our project and how can you participate in our upcoming token sale.
			</p>
			<div class="buttons pt-3">
				<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-BAL">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					One Pager
				</a>
				<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" target="_blank" class="btn btn-BAL ml-3">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					Whitepaper
				</a>
				<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-BAL ml-3" target="_blank">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					Yellowpaper
				</a>
			</div>
			<div class="pt-3">
				<a href="#contact" class="btn btn-BAL m-2">Schedule a meeting</a>
				<a href="#section-bal-token" class="btn btn-BAL m-2">
					<b>
						BUY BAL TOKENS NOW!
					</b>					
				</a>
			</div>
		</div>
	</div>
</section>





















<section class="section-8" id="coreteam">
	<div class="pt-5">
		<div class="bg-black pt-5 pb-5">
			<div class="container">
				<h3 class="text-center">
					<strong>
						<span class="header-text">
							Meet Our
						</span>
						<span class="text-white">
							Team
						</span>
					</strong> 
				</h3>

				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Johannes Eidens', 'title'=>'CEO & Founder', 'linkedin'=>'https://www.linkedin.com/in/dotcomv', 'image'=>'images/ieo/team/joh.jpg', 'text'=>'Mr. Johannes, the founder, and CEO is a dreamer by nature and has charted his own unconventional career path as a serial entrepreneur. Following his dreams has led him to build successful businesses, he started with a master degree in International Management to the creation of a vast portfolio of successful startups and early-stage companies that includes but is not limited to Camel LED, Almani Lighting LLC, ZoomDna.com, Dubai Consult.com, and DotCom Ventures FZE.<br><br>Through his path, he’s developed expertise in navigating career changes, career reinvention, inspired leadership, life & work strategies, as well as intra and entrepreneurship. He has studied at a top German University and under the best in class entrepreneurs and leaders that aid in him delivering the very best to his businesses and end clients.<br><br>BuyAnyLight is his latest venture, whereby he is aiming to streamline and simplify the Light Sourcing process by helping home owners, contractors, consultants, project owners and tower builders get the best in the market LED Products at the most competitive rates.', 'model_no' => 1 ];
					$coreTeam[] = [	'name'=>'Martin Heyen', 'title'=>'Co-Founder & CFO', 'linkedin'=>'', 'image'=>'images/ieo/team/martin.jpg', 'text'=>'A serial entrepreneur, venture capitalist and expert in International Business and Management. He is the founder of Almani Lighting GmbH, Germany and also the director and owner of Norok GmbH. He also manages and develops an international property portfolio. His passion for lighting has deep roots: His father, Dr. Meino Heyen, is the founder of AIXTRON GmbH which is listed on the Frankfurt Stock Exchange. AIXTRON achieved impressive innovations within the LED and OLED industry which are the fundamentals for Almani Lightings existence today.<br><br>Martin also has been a venture capitalist and early stage investor since early 2000 and have helped a multitude of successful startups and early-stage companies under his portfolio. Martin owns a good fortune generated from his investments and has been an inspiration to young entrepreneurs with High Potential ideas. BuyAnyLight is one of his venture on his mission to gap revolutionizing the entire LED Lighting industry with modern-age technical infrastructure.<br><br>Mr. Martin is a highly goal-driven, experienced finance professional with significant academic knowledge and over 20 years of financial management, audit, accounting, financial analysis, reporting, budgeting and corporate finance experience. Highly skilled in treasury management & planning, taxation, internal controls evaluation, financial modeling and cash flow management; proficient in assisting clients in operational improvements.He serves as a team leader who thrives in advanced teamwork situations, exceedingly capable to collaborate with diversely talented teams, extremely motivated to make BuyAnyLight the leading LED Sourcing platform of the world.', 'model_no' => 2 ];
					$coreTeam[] = [	'name'=>'Leo Vicente', 'title'=>'Chief Technical Officer', 'linkedin'=>'https://www.linkedin.com/in/ljvicente', 'image'=>'images/ieo/team/leo.jpg', 'text'=>'Mr. Leo Vicente is the Chief Technology Officer at BuyAnyLight. He is an IT Professional with over 10 years of experience in Project/Product Management, design, application architecture, development, data modeling testing, telecommunication, blockchain solutions and Implementation of Software Solutions. A good team player with the ability to work independently, having excellent communication and interpersonal skills. Expertise in design, development and implementation of component based client/server, n-tier applications and web development, using object technology.<br><br>Mr. Leo has created and launched a huge number of projects of enterprise scale, among which some of the prominent projects are: development of in-house infrastructure for Almani Lighting Software, BuyAnyLight Light Finder Platform and integration with blockchain etc.<br><br>His main task as a Chief Technical Officer of BAL is to implement technology strategies and ensuring that the technological resources are aligned with the company’s business needs. Leo actively participate in the engineering efforts to ensure the solutions are delivered correctly and efficiently.', 'model_no' => 3];
					$coreTeam[] = [	'name'=>'Muhammad Younas', 'title'=>'Chief Operating Officer', 'linkedin'=>'https://www.linkedin.com/in/muhammad-younas2023', 'image'=>'images/ieo/advisors/muhammad.jpg', 'text'=>'Mr. Muhammad is the Chief Operating Officer of BuyAnyLight. He is an experienced individual with more than ten years of industry experience. From startups to fully matured businesses, he has worked with over 500 clients as a consultant. He has experience in overseeing various operational teams with the goal of optimizing service delivery for end consumers and customers. <br><br>Muhammad has extensive knowledge in blockchain technologies, Initial Coin Offerings (ICO), Security Token Offerings (STO), Initial Exchange Offering, business development, Artificial Intelligence (AI) technology, Internet of things (IoT), Crowd Funding, Venture capital industry. He is proficient in Community management, Community Growth, and Digital Marketing. Muhammad’s background in computer science had blessed him with the cognitive ability to comprehend technical information, and he ensures to transform the idea into a seed to be planted in the reader´s minds and hearts. Muhammad also has a diverse experience in the provision of research, content, and copywriting solutions for companies based on FinTech and blockchain. Since 2017, he has helped over 75 blockchain startups, ICOs, STO, and IEOs, with his role starting from initial research and idea refinement to drafting authority documents i.e., white papers and business proposals to delivering quality copy/content in areas such as website, video script and blogs, articles and press releases.<br><br>At BuyAnyLight, he directly manages and play an integral role in developing leaders of several operational teams covering Business Operations, Business Development, Customer Success, etc. and work closely with leadership teams overseas to ensure international alignment and operational effectiveness.', 'model_no' => 13];
					$coreTeam[] = [	'name'=>'Rene Rowell dela Rama', 'title'=>'Director of Blockchain Integration', 'linkedin'=>'https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148', 'image'=>'images/ieo/team/rene.jpg', 'text'=>'Rene is working as the BAL Director of Blockchain Integration and the scope of his role is to interpret complex technical blockchain infrastructure and express clearly the goal to a variety of cross-functional stakeholders.<br><br>Rene is an innovative person with broad understanding of cryptocurrency and matters involving around it. He is greatly exposed to international trends and is always looking for ways to further push the limits of encrypted technology.<br><br>Rene also develops and implement software modules and at the same time diagnose and resolve issues of the BAL Platform. He is also responsible for developing innovative solutions to challenging problems, including command and control and high integrity solutions.', 'model_no' => 4];

				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">						
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
						<div class="header-text pt-3 mb-0">
							<b>
								{{ $tm['name'] }}
							</b>
						</div>
						<p class="text-white pt-1 mb-1">
							{{ $tm['title'] }}							
						</p>
						<button class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#TeamModal{{$tm['model_no']}}">About Me</button>
						<div class="modal fade" id="TeamModal{{$tm['model_no']}}" tabindex="-1" role="dialog" aria-labelledby="TeamModalLabel" aria-hidden="true">
  							<div class="modal-dialog" role="document">
    							<div class="modal-content">
      								<div class="modal-body text-left">
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

				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Rizvi Iqbal', 'title'=>'Blockchain & DLT Specialist', 'linkedin'=>'https://www.linkedin.com/in/rizviqbal', 'image'=>'images/ieo/team/rizvi.jpg', 'text'=>'Mr. Rizvi is the Blockchain/DLT Specialist with the BuyAnyLight Project. His role for the project is to define key elements regarding Blockchain and Distributed Ledger Technology. He provides an in-depth analysis of the performance and scalability of the system as well as developing infrastructure and tools to analyze blockchain transactions.', 'model_no' => 5];
					$coreTeam[] = [	'name'=>'Artem Gordadze', 'title'=>'Marketing Specialist', 'linkedin'=>'https://www.linkedin.com/in/artem-gordadze', 'image'=>'images/ieo/team/artem.jpg', 'text'=>'My contribution to the BAL team is to conduct market research to develop data about the current trends and habits for the intended clients. I made conclusions for the market data analysis by gathering results from campaigns, conversion rates and website traffic online. I use all the data to improve the BAL Platform\'s future campaigns and strategies.', 'model_no' => 6];	
					$coreTeam[] = [	'name'=>'Nantha Kumar', 'title'=>'Sales Director', 'linkedin'=>'https://www.linkedin.com/in/nantha-kumar-36b92685', 'image'=>'images/ieo/team/nantha.jpg', 'text'=>'My main participation with BuyAnyLight as a Sales Director is to ensure that my team will be able to accelerate sales growth. I generate and submit sales-related reports to management for evaluation. Additionally, we collaborate with senior sales team for the BAL Platform to set revenue goals and future strategic plans and make sure the successful execution of these strategies to achieve the company’s financial target.', 'model_no' => 7];
					$coreTeam[] = [	'name'=>'Marc Vazquez', 'title'=>'Sourcing, Production & Investors Relations', 'linkedin'=>'https://www.linkedin.com/in/marc-vazquez-6b01a794', 'image'=>'images/ieo/team/marc.jpg', 'text'=>'My main participation with BuyAnyLight as a Sales Director is to ensure that my team will be able to accelerate sales growth. I generate and submit sales-related reports to management for evaluation. Additionally, we collaborate with senior sales team for the BAL Platform to set revenue goals and future strategic plans and make sure the successful execution of these strategies to achieve the company’s financial target.', 'model_no' => 8];					
					$coreTeam[] = [	'name'=>'Ryan Quines', 'title'=>'Design Lead', 'linkedin'=>'https://www.linkedin.com/in/ryan-matthew-quines-551a85152', 'image'=>'images/ieo/team/ryan.jpg', 'text'=>'My major contribution to BuyAnyLight project is to create and integrate creative designs for the overall impression of the platform. I work closely with the graphic designs and photographs to create a much-needed piece to complete every detailed to achieve perfections. I also collaborate with content specialists and management to be able to deliver impressive results. I develop the overall layout and production design for BAL.', 'model_no' => 9];


					
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">						
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
      								<div class="modal-body text-left">
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

				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Zain Ul Abdin', 'title'=>'Senior Architect', 'linkedin'=>'https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a', 'image'=>'images/ieo/team/zain.jpg', 'text'=>'I am the Senior Architect for the BuyAnyLight project, my active participation entails on the tactical level of the organization. I work directly with business representatives to figure out specific requirements to determine design solutions. Portion of my job concentration is with regards to budgeting, contracts and structural specifications.', 'model_no' => 10];

					$coreTeam[] = [	'name'=>'Shajudeen Yousf', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/shajudeen-yousf-783452146/', 'image'=>'images/ieo/team/shajudeen.jpg', 'text'=>'As an LED lighting designer architect, I am responsible to identify the core values of BuyAnyLight. In this role, I am facing the client and need to take ownership of projects while assisting in creating appropriate led lighting design solutions through to completion.', 'model_no' => 11];
					$coreTeam[] = [	'name'=>'Ammar Mohamed', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/ammar-mohamed-231379103/', 'image'=>'images/ieo/team/ammar.jpg', 'text'=>'My responsibilities as Lighting Designer Architect are mainly: Preparing renderings, drawings and specification, Assisting with the concept development, visualization, calculations and design development of the company\'s specialist lighting design projects. Attending site meetings and presenting creative designs to clients are also part of my tasks.', 'model_no' => 12];

					$coreTeam[] = [	'name'=>'Chad Hanson', 'title'=>'Social Media, Community Manager', 'linkedin'=>'https://www.linkedin.com/in/chad-hanson-a747a2137/', 'image'=>'images/ieo/team/chad.jpg', 'text'=>'My role with BuyAnyLight includes working alongside other community managers and the marketing department to promote the project, build and maintain community relations, and provide accurate answers to community questions.', 'model_no' => 14];
					
					$coreTeam[] = [	'name'=>'Maria Carron Igloso', 'title'=>'Investor relations and Public Relations Manager', 'linkedin'=>'https://www.linkedin.com/in/maria-carron-igloso-1324b5105', 'image'=>'images/ieo/team/maria.jpg', 'text'=>'I am BuyAnyLight\'s Investor Relations and Public Relations Manager. I facilitate all the release of information to investors and the general public. I handle meetings and inquiries and reports back to the management for results. I also take part in providing a solution to crisis management. My other task for BuyAnyLight is to maintain professional connections to all clients and investors.', 'model_no' => 15];
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">
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
      								<div class="modal-body text-left">
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


















				<div class="row pt-5 justify-content-center">
				<?php
					$coreTeam = [];
				$coreTeam[] = [	'name'=>'Tiffany Anggot', 'title'=>'Director Of Strategic Partnerships', 'linkedin'=>'https://www.linkedin.com/in/tiffany-jel-a-367548147', 'image'=>'images/ieo/team/tiffany.jpg', 'text'=>'My responsibility is to expand community relations and informing partners of strategic business goals. I work closely with other executives to define short-and long-terms policies and strategies and then connect with the stakeholders to expand on these company visions.', 'model_no' => 16];
				$coreTeam[] = [	'name'=>'Juliane Schreilechner', 'title'=>'Training Consultant', 'linkedin'=>'https://www.linkedin.com/in/juliane-schreilechner-142108174/', 'image'=>'images/ieo/team/juliane.jpg', 'text'=>'I am the Training Consultant for the BuyAnyLight team, and my key responsibilities are developing and organizing educational activities to boost team\'s job performance. Training, seminars and courses with regards to cryptography, blockchain and smart contracts were organized to keep a well-versed and confident BAL team. Creating a non-toxic work culture with high efficiency will remain my utmost goal.', 'model_no' => 17];
				?>

				@foreach($coreTeam as $tm)
					<div class="col-3 text-center">
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
      								<div class="modal-body text-left">
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





				<div class="pt-5 mt-5">
					<h3 class="text-center">
						<strong>
							<span class="header-text">
								Our Advisory
							</span>
							<span class="text-white">
								Board
							</span>
						</strong> 
					</h3>
				</div>




				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Khalid Almutawa', 'title'=>'Partner and Chairman ASAS Holding Group', 'linkedin'=>'', 'image'=>'images/ieo/advisors/khalid.jpg', 'text'=>'My participation with BuyAnyLight is not limited to leadership and governance alone, I pledge my full dedication with the BAL project to make it a success. I am responsible for creating an effective and harmonious step by step transition of the project. I ensure an effective relationship with everyone who participates in the BuyAnyLight project by allowing a constructive exchange of theories and opinions. I also ensure that every strategies and policy are lawfully implemented within the organization.', 'model_no' => 18];
					$coreTeam[] = [	'name'=>'Sebastijan Eder', 'title'=>'Partner, 0C Ventures', 'linkedin'=>'https://www.linkedin.com/in/sebastijan-eder-a8235028/', 'image'=>'images/ieo/advisors/sebastijan.jpg', 'text'=>'My association with BuyAnyLight revolves around strengthening the project knowledge by providing precise analysis of financial data that will uphold the project\'s current business strategies. I endorse the verification of the effectivity of commercial, financial and operational targets to make sure that expected results were delivered. I also must build a strong relation and partnership with future stakeholders, business people, and everyone who wish to take part in the project.', 'model_no' => 19];
					$coreTeam[] = [	'name'=>'Ralph Kattan ', 'title'=>'Team leader Accounting & Regulatory Information Santander Consumer Bank AG, Germany*', 'linkedin'=>'https://www.linkedin.com/in/ralph-kattan-709103191/', 'image'=>'images/ieo/advisors/ralph.jpg', 'text'=>'My key role as BuyAnyLight Advisor is to manage and monitor effective project and ventures to help conclude an adequate marketing plan for the BuyAnyLight Platform. I take part in connecting the business with numerous affiliates to help prepare a qualified budget for the development of the BAL project. I also maintain constant communication with clients, networks and associates to ensure correct information about the project\'s progress are disseminated.', 'model_no' => 20];
					$coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'International Key Account Manager, CustomBiotech EMEA/LATAM at Roche Diagnostic Germany', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'I assist the team with insights on how to work on the project systematically by undertaking market research. I assist in creating sustainable progress on the BuyAnyLight platform. As an advisor, I also help to enterprise the project by creating leads through affiliates. I maintain a constant data feed on analytical business report.', 'model_no' => 21];
					$coreTeam[] = [	'name'=>'Dr. Moritz Eidens', 'title'=>'CEO PharmGenomics GmbH', 'linkedin'=>'https://www.linkedin.com/in/dr-moritz-eidens-80550910/', 'image'=>'images/ieo/advisors/moritz.jpg', 'text'=>'My involvement with BuyAnyLight project revolves around the proper analysis of the business plan to give counsel on marketing, investments and potential funding opportunities. I also perform extensive research on processes and endeavor on recommendations for changes in strategy to improve the project development. I also aid on issue and risk analysis to mitigate the business threats involved in the implementation of the project.', 'model_no' => 22];
					//$coreTeam[] = [	'name'=>'Dr. Stefan Freh', 'title'=>'Specialist Solicitor Industrial Law', 'linkedin'=>'', 'image'=>'images/ieo/advisors/stefan.jpg', 'text'=>'The best time to plant a tree was 20 years ago. The second best time is now.', ];
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">						
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
      								<div class="modal-body text-left">
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


				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Mohsin Irshad', 'title'=>'Sr. UI/UX Designer at EXCEED IT Services', 'linkedin'=>'https://www.linkedin.com/in/mohsin-irshad-8b982532', 'image'=>'images/ieo/advisors/mohsin.jpg', 'text'=>'I am a proud Sr. UI/UX Designer Advisor for BuyAnyLight project. I present the team with organized information to create a unique interactive experience that could attract users into the platform. Most of my input to the project was through my years of testing and user research. I also contribute to task flows, design ideas, GUI elements and sitemaps of the BAL platform.', 'model_no' => 23];
					
					$coreTeam[] = [	'name'=>'Janis Leitans', 'title'=>'Scientific Assistant, Latvian Biomedical Research Centre', 'linkedin'=>'https://www.linkedin.com/in/janis-leitans-16297269/', 'image'=>'images/ieo/team/janis.jpg', 'text'=>'I take part in providing possible business support landscape for the BuyAnyLight project. My in-depth knowledge allows me to advise BuyAnyLight team with a range of options available for the business development of the project. I provide counsel on the business planning process to attract more leads through improved techniques.', 'model_no' => 24];
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col-3 text-center">						
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
      								<div class="modal-body text-left">
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
<section class="section-8" id="partners" style="background-image: url({{ Util::assetUrl('images/ieo/partners-bg.png') }});">
	<div class="pt-0">
			<div class="container pt-5 pb-5">

				<div class="row pt-5 pb-5 mb-3 justify-content-center sponsored_fair">

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
					$partners[] = [	'style'=>'', 'title'=>'Almani', 'alt'=>'Almani', 'src'=>Util::assetUrl('images/ieo/partners/almani.png'), 'link'=>'https://almani.ae'];
					// $partners[] = [	'style'=>'', 'title'=>'CamelLED', 'alt'=>'CamelLED', 'src'=>Util::assetUrl('images/ieo/partners/camel_led.png'), 'link'=>'https://camel.almani.ae'];
					$partners[] = [	'style'=>'', 'title'=>'Blockpass', 'alt'=>'Asas', 'src'=>Util::assetUrl('images/ieo/partners/blockpass.png'), 'link'=>'https://www.blockpass.org/buyanylight/'];
					$partners[] = [	'style'=>'', 'title'=>'Dotcom Ventures', 'alt'=>'Dotcom Ventures', 'src'=>Util::assetUrl('images/ieo/partners/dotcom_ventures.png'), 'link'=>'https://dotcomv.com'];
					$partners[] = [	'style'=>'', 'title'=>'Dubai Consult', 'alt'=>'Dubai Consult', 'src'=>Util::assetUrl('images/ieo/partners/dubai_consult.png'), 'link'=>'https://dubaiconsult.com/'];
					$partners[] = [	'style'=>'', 'title'=>'German Embassy UAE', 'alt'=>'German Embassy UAE', 'src'=>Util::assetUrl('images/ieo/partners/german_uae.png'), 'link'=>'https://uae.diplo.de/ae-en/vertretungen/generalkonsulat1' ];
					$partners[] = [	'style'=>'', 'title'=>'Asas', 'alt'=>'Asas', 'src'=>Util::assetUrl('images/ieo/partners/asas.png'), 'link'=>'https://asasholding.ae'];

					// $partners[] = [	'style'=>'', 'title'=>'Light Middle East', 'alt'=>'Light Middle East', 'src'=>Util::assetUrl('images/ieo/partners/light_middles_east.png'), 'link'=>'https://light-middle-east.ae.messefrankfurt.com/dubai/en.html'];
					$partners[] = [	'style'=>'', 'title'=>'Light Middle East', 'alt'=>'Light Middle East', 'src'=>Util::assetUrl('images/ieo/partners/madeingermany.png'), 'link'=>'https://light-middleeast.german-pavilion.com/en/home/'];
					$partners[] = [	'style'=>'', 'title'=>'Continental Investments', 'alt'=>'Continental Investments', 'src'=>Util::assetUrl('images/ieo/partners/continental.png'), 'link'=>'http://www.continvest.net'];
				?>
				<div class="col-12">
					<h2 class="text-white ml-3 mt-0">Strategic Partners</h2>
					<div class="icons">
						@foreach($partners as $prtnr)
						<div class="col-3 partner">								
							<a href="{{$prtnr['link']}}" target="_blank" title="{{ $prtnr['title'] }}" alt="{{ $prtnr['alt'] }}">
								<img title="{{ $prtnr['title'] }}" alt="{{ $prtnr['alt'] }}" src="{{ $prtnr['src'] }}">
							</a>
						</div>
						@endforeach
					</div>
				</div>
		

				<?php
					$roadshows = [];					
					$roadshows[] = [ 'style'=>"", 'title'=>"Gitex Future Stars", 'link'=>"https://www.gitexfuturestars.com/exhibitors/buy-any-light", 'src'=>"images/ieo/partners/gitexfuturestars.png", ];
					$roadshows[] = [ 'style'=>"", 'title'=>"Malta Blockchain Summit", 'link'=>"https://maltablockchainsummit.com", 'src'=>"images/ieo/partners/maltablockchainsummit.png", ];
					$roadshows[] = [ 'style'=>"", 'title'=>"Future Blockchain Summit", 'link'=>"https://www.futureblockchainsummit.com/", 'src'=>"images/ieo/partners/futureblockchainsummit.png", ];
					$roadshows[] = [ 'style'=>"", 'title'=>"Light Middle East Fair", 'link'=>"https://light-middle-east.ae.messefrankfurt.com/dubai/en.html", 'src'=>"images/ieo/partners/light_middles_east_date.png", ];
				?>
				<div class="col-12 mt-10">
					<h2 class="text-white ml-3 mt-0">Road Shows</h2>
					<div class="icons">
						@foreach($roadshows as $rdshw)
						<div class="col-3 partner">								
							<a href="{{$rdshw['link']}}" target="_blank" title="{{ $rdshw['title'] }}" alt="{{ $rdshw['title'] }}" >
								<img src="{{ Util::assetUrl($rdshw['src']) }}">
							</a>
						</div>
						@endforeach
					</div>
				</div>
		
		

				<?php
					
					// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
					$datas = [];
					$datas[] = [ 'style'=>"", 'title'=>"Airdrop Village", 'link'=>"https://airdropvillage.io/airdrop/buyanylight", 'src'=>"images/ieo/marketing-partners/airdropvillage.png", ];
					$datas[] = [ 'style'=>"", 'title'=>"Airdrop King", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/marketing-partners/airdropking.png", ];
					$datas[] = [ 'style'=>"", 'title'=>"Webotic.ae", 'link'=>"http://webotic.ae", 'src'=>"images/ieo/marketing-partners/webotic.png", ];
					$datas[] = [ 'style'=>"", 'title'=>"Airdrop Alert", 'link'=>"https://airdropalert.com/buyanylight-airdrop", 'src'=>"images/ieo/marketing-partners/airdropalert.png", ];
					$datas[] = [ 'style'=>"", 'title'=>"Vitro Services", 'link'=>"https://vitor-services.company", 'src'=>"images/ieo/marketing-partners/vitor-services2.png", ];
				?>
				<div class="col-5 mt-10">
					<h2 class="text-white ml-3 mt-0">Marketing Partners</h2>
					<div class="icons">
						@foreach($datas as $data)
						<div class="col-6 partner small">
							<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
								{{-- <img src="{{ Util::assetUrl($data['src']) }}"> --}}
								<div class="icon" style="background-image: url({{ Util::assetUrl($data['src']) }})"></div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
				
				<div class="col-2 mt-10">
				</div>

				<?php
					
					// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
					$datas = [];
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICORATING", 'link'=>"https://icoholder.com/en/buyanylight-31234", 'src'=>Util::assetUrl("images/ieo/partners/icoholder.png"), ];
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight COINCODEX", 'link'=>"https://coincodex.com/ieo/buyanylight/", 'src'=>Util::assetUrl("images/ieo/partners/coincodex.png"), ];
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOHOLDER", 'link'=>"https://icobench.com/ico/buyanylight-bal", 'src'=>"https://icobench.com/rated/buyanylight-bal?shape=square&size=m", ];
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOMARKS", 'link'=>"https://icomarks.com/ico/buyanylight", 'src'=>Util::assetUrl("images/ieo/partners/icomarks.svg"), ];
					//$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOSBULL", 'link'=>"https://icosbull.com/eng/ico/buyanylightbal", 'src'=>"images/ieo/partners/icosbull.png", ];
				?>
	<!-- 			<div class="col-5 mt-10">
					<h2 class="text-white ml-3 mt-0">Ratings</h2>
					<div class="icons">
						@foreach($datas as $data)
						<div class="col-4 partner">
							<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
								<div class="icon" style="background-image: url({{ $data['src'] }})"></div>
							</a>
						</div>
						@endforeach
						

						<?php $data = [ 'style'=>"", 'title'=>"BuyAnyLight ICOSBULL", 'link'=>"https://icosbull.com/eng/ico/buyanylightbal", 'src'=>"images/ieo/partners/icosbull.png", ]; ?>						
						<div class="col-8 partner">
							<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
								<div class="icon" style="background-image: url({{ Util::assetUrl($data['src']) }})"></div>
							</a>
						</div>

					</div>
				</div> -->
		
			
				

				<?php
					
					// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
					$datas = [];
					$datas[] = [ 'style'=>"", 'title'=>"Bitcoin Wiki", 'link'=>"https://en.bitcoinwiki.org/wiki/Buyanylight", 'src'=>"images/ieo/partners/bitcoinwiki.png", ];
				?>
<!-- 				<div class="col-5 mt-10">
					<h2 class="text-white ml-3 mt-0">BuyAnyLight in News and Media</h2>
					<div class="icons">
						@foreach($datas as $data)
						<div class="col-12 partner">
							<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
								{{-- <img src="{{ Util::assetUrl($data['src']) }}"> --}}
								<div class="icon" style="background-image: url({{ Util::assetUrl($data['src']) }})"></div>
							</a>
						</div>
						@endforeach
					</div>
				</div> -->
					
				
	<!-- 			
				<div class="col-2 mt-10">
				</div> -->


				<div class="col-5 mt-10">
					<h2 class="text-white ml-3 mt-0">Sponsors</h2>
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
</section>
{{-- ////////////////////////////////////////////////////////////// --}}
{{-- partners --}}




























<section class="section-9">
	<div class=" h-100 d-flex align-items-center">
		<div class="container">
			<div class="card newsletter-card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h4 class="mb-4">
								<b>
									Sign up for our IEO newsletter
								</b>
							</h4>
							<p></p>
							<div>
								<form  action="https://buyanylight.us3.list-manage.com/subscribe/post?u=22d8456f8db4bacaef7a16d53&amp;id=7b85cd9f3f" method="post" class="input-group mt-3" name="mc-embedded-subscribe-form" novalidate target="_blank">
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
							<img src="{{ Util::assetUrl('images/ieo/7.png')}}"  style="width: 50%; height: auto;">
						</div>
					</div>
				</div>
			</div>






			{{-- contact us --}}
			{{-- ///////////////////////////////////////////////////////////////////////////// --}}
			{{-- ///////////////////////////////////////////////////////////////////////////// --}}
			<div class="contact pt-0" id="contact">
				{{-- <div class="intro-contact d-flex  align-items-center">
		    		<div class="container">
		    			<h3 class="text-white">
		                	<b>CONTACT US</b>
		            	</h3>
		        	</div>
				</div> --}}
		        <div class="container pt-5">
		        	<h4>
				         <b>
								Want to know more about our Private Round? 
								<span class="header-text">
									<span >
										Contact Us!		
									</span>
								</span>

								
							</b>
		        	</h4>
		        </div>
				<div class="contact-form pt-3 pb-5">
		            <div class="container contact-form-container bg-black"> 
		                <div class="row">
		                    <div class="col-md-8 bg-white border border-dark">
		                        <div class="formBox ">
		                            <form method="post" action="/contact-us">
		                                {{ csrf_field() }}
		                                <div class="row">
		                                    <div class="col-sm-6">
		                                        <div class="inputBox ">
		                                            <div class="inputText">Name</div>
		                                            <input type="text" name="name" class="input">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-6">
		                                        <div class="inputBox">
		                                            <div class="inputText">Email</div>
		                                            <input type="text" name="email" class="input">
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-sm-6">
		                                        <div class="inputBox">
		                                            <div class="inputText">Subject</div>
		                                            <input type="text" name="subject" class="input">
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <div class="inputBox">
		                                            <div class="inputText">Message</div>
		                                            <textarea class="input" name="message"></textarea>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
		                                        <input type="submit" class="btn btn-BAL w-100 send-message" value="Send Message" disabled="disabled">
		                                    </div>
		                                </div>
		                            </form>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="location text-white">
		                            <div class="row">
		                                <div class="col-md-1">
		                                    <i class="fas fa-map-marker-alt text-BAL"></i>
		                                </div>
		                                <div class="col-md-10">
		                                    <span class="header-text"><b>BuyAnyLight.com</b></span><br>
		                                    <span>Dubai Investment Park 1, <br> Opp. Green Community East, Showroom 10, P.O. BOX 3219 <br> Dubai,  United Arab Emirates</span>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="location text-white">
		                            <div class="row">
		                                <div class="col-md-1">
		                                    <i class="fas fa-phone text-BAL"></i>
		                                </div>
		                                <div class="col-md-10">
		                                    <span class="header-text"><b>+971 4 887 3265</b></span><br>
		                                    <span>Mon to Fri 9am to 6pm</span><br>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="location text-white">
		                            <div class="row">
		                                <div class="col-md-1">
		                                    <i class="fas fa-envelope text-BAL"></i>
		                                </div>
		                                <div class="col-md-10">
		                                    <span  class="header-text"><b>info@buyanylight.com</b></span><br>
		                                    <span>Send us your query anytime</span><br>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			{{-- ///////////////////////////////////////////////////////////////////////////// --}}
			{{-- ///////////////////////////////////////////////////////////////////////////// --}}
			{{-- contact us --}}






		</div>
	</div>
</section>




@endsection
