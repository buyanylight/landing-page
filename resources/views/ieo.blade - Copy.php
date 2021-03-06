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

		$('.roadmap').slick({
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			initialSlide: 1,
			infinite: false,
			appendArrows: $('.arrows'),
			prevArrow: '<button type="button" class="slick-prev d-inline-block">Previous</button>',
			nextArrow: '<button type="button" class="slick-next d-inline-block">Next</button>',
		});


		const minBAL = 200;


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
<section class="section-1" id="section-1" style="background-image : url({{ Util::assetUrl('/images/ieo/ieo-bg1.png') }})">
	<div class="container h-100">
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
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-ieo">
	            				<i class="far fa-file-pdf"></i>
	            				&nbsp;
								One Pager
							</a>					
							<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}"  target="_blank" class="btn btn-ieo">
								<i class="far fa-file-pdf"></i>
	            				&nbsp;
								White Paper
							</a>
							<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-ieo" target="_blank">
								<i class="far fa-file-pdf"></i>
	            				&nbsp;
								Yellow Paper<a href="https://t.me/buyanylight" class="btn btn-ieo ml-3" target="_blank">
					<i class="fab fa-telegram-plane"></i>
	            			&nbsp;
					Join Our Community
				</a>
							</a>
						</div>
						<!-- <div class="pt-3">
							<h5>
								View on Etherscan
							</h5>
							<div class="pt-2">
								<a href="https://etherscan.io/token/0xd8e1c43a29dc0311dcadbaccc8c3b677cd462a1b" class="btn btn-ieo" target="_blank">Token Contract</a>
								<a href="https://etherscan.io/address/0xE9F5c250D03B8ff13119a3529D59771224FDDc19" class="btn btn-ieo" target="_blank">Token Owner </a>
								<a href="#allocation" class="btn btn-ieo">Token Allocation</a>
								<a href="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" class="btn btn-ieo" target="_blank">Token Sale Agreement</a>
							</div>
						</div> -->
						<div class="videos mt-4">
							<a data-fancybox 
							style="background-image: url({{ Util::assetUrl('/images/ieo/bal-ieo.png') }}); background-size: 100%; border: solid 3px black" 
							href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0" 
							class="video-link" >
								<!-- <img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo.png') }}" alt="" > -->
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
								<!-- <img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo-vs-ico.png') }}" alt="" style="border: solid 3px black"> -->
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
								<a href="https://etherscan.io/token/0xd8e1c43a29dc0311dcadbaccc8c3b677cd462a1b" class="btn btn-ieo" target="_blank">Token Contract</a>
								<!-- <a href="https://etherscan.io/address/0xE9F5c250D03B8ff13119a3529D59771224FDDc19" class="btn btn-ieo" target="_blank">Token Owner </a> -->
								<a href="#allocation" class="btn btn-ieo">Token Allocation</a>
								<a href="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" class="btn btn-ieo" target="_blank">Token Sale Agreement</a>
							</div>
						</div>
						
					</div>
					<div class="col-md-5">
						<div class="countdown">
							<div class="d-flex align-items-center h-100" style="padding: 20px; padding-bottom: 2rem;">
								<div class="w-100">	
									{{-- <h4 class="text-center text-white"><b>IEO PRE SALE</b></h4> --}}
									<div class="w-100 pt-2">
										<h4 class="text-center text-white"><b>PRE -IEO SALE LIVE ON NOV 1!</b></h4>
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
									<div class="w-100 mt-4">
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
													<span style="font-size: 11px;">0.30303 USD</span>
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
										<small>
											<a href="{{ Util::assetUrl('bal_certificate.pdf')}}" target="_blank" class="text-white">Audited by Blockchain Consilium</a>
										</small>
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
	    					<span class="input-group-text d-flex justify-content-center btn-ieo" id="basic-addon1" style="width: 100%; border-radius: 20px; position: relative; left: 15px; z-index: 1; box-shadow: 4px 0px 5px 0px #cccccc; background: -webkit-linear-gradient(right, #e4007b, #0000af);" data-toggle="tooltip" data-placement="right" title="BAL Token">
	    						<img src="{{ Util::assetUrl('images/logo-white-mobile.png') }}" width="28">
	    					</span>
	  					</div>
	  					<input class="form-control bal-token pl-4" placeholder="Enter an amount you want to buy" name="bal" required="required" style="height: 70px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; font-size: 15px; border: 1px solid #000000;">
					</div>
	  				<div>
	  					<small>The minimum investment is 50 USD and 200 BAL</small>
	  				</div>
				</div>
				<div class="pt-4 bal-alert" style="display: none;">
					<div class="alert alert-danger" role="alert">
  						The minimum investment is 50 USD and 200 BAL
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
    								<div class="col-md-3 d-flex align-items-center justify-content-center btn-ieo" style="border-radius: 20px; box-shadow: 4px 0px 5px 0px #cccccc; height: 60px;" data-toggle="tooltip" data-placement="right" title="{{ $token['symbol'] }}">
      									<p class="mb-0" style="font-size: 20px;">{!! $token['logo'] !!}</p>
    								</div>
    								<div class="col-md-9">
      									<div class="card-body card-body d-flex align-items-center justify-content-end" style="height: 60px;">
        									<p class="card-text text-right mb-0">
        										<span class="{{ $token['asset_id_quote'] }}_value" data-value="{{ $token['bal_rate'] }}">
        											0
        										</span> <span>{{ $token['asset_id_quote'] }}</span><br>
        										<small class="text-muted">1 BAL = {{ $token['bal_rate'] }} {{ $token['asset_id_quote'] }} </small>
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
							<div class="card card-body" style="border-radius: 20px;">
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
											 	ROI : 17.5% 
											 </p>
											 <p class="mb-0">
											 	Profits :
												<span class="USD_return">
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
							</div>
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
											<option value="" class="{{ $token['asset_id_quote'] }}_value">{{ $token['asset_id_quote'] }}</option>
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
										<button type="submit" class="btn btn-ieo w-100" style="border-radius: 10px;" id="token-btn"><b>Buy Tokens Now!</b></button>
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


























































<section class="section-2 pt-5">
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-md-6">
					<img src="{{ Util::assetUrl('images/ieo/2.png')}}" width="80%">		
			</div>
			<div class="col-md-6">
				<h3>
					<strong>
						<span class="header-text">
							About BAL Initial Exchange
						</span> 
						<span class="text-dark">
							 Offering (IEO)
						</span> 
					</strong> 
				</h3>
				<div class="pt-3">
					<p>
						The BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowdfunding campaign to raise funds for the development of a blockchain deployed, decentralized marketplace for lighting products, and the expansion of the existing BAL Network. It is a framework for addressing the unique challenges faced by lighting contractors, manufacturers, and buyers that combines revolutionary technologies such as blockchain and cryptography, smart contracts, fintech, and tokenization.
					</p>
					<p>We understand and embrace the new blockchain-powered technologies that can optimize sourcing in the lighting industry and create the digital infrastructure for smarter light sourcing in a seamless, cost-effective way.						
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-5 pb-5">
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
	</div>
</section>















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
				<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-ieo">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					One Pager
				</a>
				<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" target="_blank" class="btn btn-ieo ml-3">
					<i class="far fa-file-pdf"></i>
	            	&nbsp;
					White Paper
				</a>
				<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-ieo ml-3" target="_blank">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					Yellow Paper
				</a>				

			</div>
			<div class="pt-3">
				<a href="#contact" class="btn btn-ieo m-2">Schedule a meeting</a>
				<a href="#section-bal-token" class="btn btn-ieo m-2 buy-btn">
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
						Our vision is to become the leading global platform for buyers and sellers dealing in LED lighting. Through BAL Marketplace, we aim to democratize access to the sourcing of lighting products, without the interference of a centralized authority or intermediary.
					</p>
				</div>
				<div class="col-md-6 text-center">
					<div class="vision-mission">
						{{-- <a  data-fancybox href="https://www.youtube.com/embed/o8CAwwz6tIM">							
							<img src="{{asset('images/mv-img.png')}}" alt="..." class="rounded-circle mv-img" width="35%">							
							<div class="text-dark yt">
								<i class="fab fa-youtube"></i>
							</div>
						</a> --}}

						<a data-fancybox 
						href="https://www.youtube-nocookie.com/embed/o8CAwwz6tIM?rel=0" 
						class="">
							<img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo.png') }}" alt="">
							<div class="d-flex align-items-end pb-2 pl-2 h-100 text-dark" style="position: relative; bottom: 35px; left: 50px;">
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
		</div>
		<div class="container pt-5 pb-5">
			<div class="row d-flex align-items-center">
				<div class="col-md-6 text-center">
					{{-- <a data-fancybox href="https://www.youtube.com/embed/5nMkricvzfc" >
						<img src="{{asset('images/mv-img.png')}}" alt="..." class="rounded-circle mv-img" width="35%">
						<div class="text-dark yt">
							<i class="fab fa-youtube "></i>
						</div>
					</a> --}}
					<div class="vision-mission">
						<a data-fancybox 
						href="https://www.youtube-nocookie.com/embed/5nMkricvzfc?rel=0" 
						class="">
							<img class="video" src="{{ Util::assetUrl('/images/ieo/bal-ieo-vs-ico.png') }}" alt="">
							<div class="d-flex align-items-end pb-2 pl-2 h-100 text-dark" style="position: relative; bottom: 35px;     left: 50px;">
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
				<div class="col-md-6">
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
						We aim to create a modern platform for lighting products by fully harnessing the technological power offered by blockchain, smart contracts, and cryptographic technology. Principled, honest and focused, we leverage the world’s best suppliers and deliver the most significant value LED products, the most exceptional service and advice, and first-rate customer satisfaction – every time.
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
							Unlike traditional marketplaces and payment networks, there is no single point of failure. All transactional activities happening within the BAL ecosystem are open and transparent to the whole community.
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
							BAL Token uses an Ethereum blockchain based proof of work consensus for confirming transactions, which makes it completely decentralized and one of the most secure digital assets. All of your transactional data is encrypted, and your digital assets are reserved in a wallet only you can access.
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
							BAL Token has inherent utility within the BAL marketplace, a leading marketplace based in Dubai, UAE, allowing it to be accepted as a mode of payment for lighting products.
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
							<b>Liquidity and Easy Transaction</b>
						</h5>	
						<p class="pt-1">
							Easily liquidate or transfer your BAL Token to anyone, anywhere in the world through a secure, encrypted digital wallet.
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
							BAL Marketplace deducts significantly lower fees than any other major online payment system. This allows users to send, receive or perform any transactional activity at minimal costs.
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
							Deployment of all transactional records on a transparent blockchain ensures visibility and eliminates fraud.
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section >


<section class="section-6">
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
									<div class="card mb-2"><div class="card-body">Product range covering 250 products in architectural, residential, commercial and decorative lighting</div>
									<div class="card mb-2"><div class="card-body">BAL LightFinder and My Home Features testing</div>
								</div>
									
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
			</div>
		</div>
	</div>
</section>


<section class="section-7">
	<div class="pt-5">
		<div class="container pt-5 pb-5">
			<h3 class="text-center">
				<strong>
					<span class="header-text">
						Custom Token
					</span>
					<span class="text-dark">
						Information
					</span>
				</strong> 
			</h3>
			<div class="text-center pt-5">
				<div class="row">
					<div class="col-md-6">
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
									<td>Know Your Customer (KYC):</td>
									<td>Yes</td>
								</tr>
								<tr>
									<td>Supply reserved for Private Round:</td>
									<td>5.5 Million (10% of the total supply)</td>
								</tr>
								<tr>
									<td>Supply reserved for IEO:</td>
									<td>16.5 Million (30% of the total supply)</td>
								</tr>								
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<table class="text-left w-100" id="token-info"> 
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
									<td>BTC, ETH, EUR, USD</td>
								</tr>
								<tr>
									<td>Private round price:</td>
									<td>1BAL = USD 0.25</td>
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
				<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-ieo">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					One Pager
				</a>
				<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" target="_blank" class="btn btn-ieo ml-3">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					White Paper
				</a>
				<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-ieo ml-3" target="_blank">
					<i class="far fa-file-pdf"></i>
	            			&nbsp;
					Yellow Paper
				</a>
			</div>
			<div class="pt-3">
				<a href="#contact" class="btn btn-ieo m-2">Schedule a meeting</a>
				<a href="#section-bal-token" class="btn btn-ieo m-2 buy-btn">
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
					$coreTeam[] = [	'name'=>'Johannes Eidens', 'title'=>'CEO & Founder', 'linkedin'=>'https://www.linkedin.com/in/dotcomv', 'image'=>'images/ieo/team/joh.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Martin Heyen', 'title'=>'Co-Founder & CFO', 'linkedin'=>'', 'image'=>'images/ieo/team/martin.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Leo Vicente', 'title'=>'Chief Technical Officer', 'linkedin'=>'https://www.linkedin.com/in/ljvicente', 'image'=>'images/ieo/team/leo.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Rene Rowell dela Rama', 'title'=>'Director of Blockchain Integration', 'linkedin'=>'https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148', 'image'=>'images/ieo/team/rene.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Rizvi Iqbal', 'title'=>'Blockchain & DLT Specialist', 'linkedin'=>'https://www.linkedin.com/in/rizviqbal', 'image'=>'images/ieo/team/rizvi.jpg', 'text'=>'', ];

				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">						
						<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">							
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

				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Artem Gordadze', 'title'=>'Marketing Specialist', 'linkedin'=>'https://www.linkedin.com/in/artem-gordadze', 'image'=>'images/ieo/team/artem.jpg', 'text'=>'', ];	
					$coreTeam[] = [	'name'=>'Nantha Kumar', 'title'=>'Sales Director', 'linkedin'=>'https://www.linkedin.com/in/nantha-kumar-36b92685', 'image'=>'images/ieo/team/nantha.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Marc Vazquez', 'title'=>'Sourcing, Production & Investors Relations', 'linkedin'=>'https://www.linkedin.com/in/marc-vazquez-6b01a794', 'image'=>'images/ieo/team/marc.jpg', 'text'=>'', ];					
					$coreTeam[] = [	'name'=>'Ryan Quines', 'title'=>'Design Lead', 'linkedin'=>'https://www.linkedin.com/in/ryan-matthew-quines-551a85152', 'image'=>'images/ieo/team/ryan.jpg', 'text'=>'', ];

					$coreTeam[] = [	'name'=>'Zain Ul Abdin', 'title'=>'Senior Architect', 'linkedin'=>'https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a', 'image'=>'images/ieo/team/zain.jpg', 'text'=>'', ];

					
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">						
						<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">							
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

				<?php
					$coreTeam = [];

					$coreTeam[] = [	'name'=>'Shajudeen Yousf', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/shajudeen-yousf-783452146/', 'image'=>'images/ieo/team/shajudeen.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Ammar Mohamed', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/ammar-mohamed-231379103/', 'image'=>'images/ieo/team/ammar.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Muhammad Younas', 'title'=>'Content Lead', 'linkedin'=>'https://www.linkedin.com/in/muhammad-younas2023', 'image'=>'images/ieo/advisors/muhammad.jpg', 'text'=>'', ];

					$coreTeam[] = [	'name'=>'Chad Hanson', 'title'=>'Social Media, Community Manager', 'linkedin'=>'https://www.linkedin.com/in/chad-hanson-a747a2137/', 'image'=>'images/ieo/team/chad.jpg', 'text'=>'', ];
					
					$coreTeam[] = [	'name'=>'Maria Carron Igloso', 'title'=>'Investor relations and Public Relations Manager', 'linkedin'=>'https://www.linkedin.com/in/maria-carron-igloso-1324b5105', 'image'=>'images/ieo/team/maria.jpg', 'text'=>'', ];
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col text-center">
						<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">							
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


















				<div class="row pt-5 justify-content-center">
				<?php
					$coreTeam = [];
				$coreTeam[] = [	'name'=>'Tiffany Anggot', 'title'=>'Director Of Strategic Partnerships', 'linkedin'=>'https://www.linkedin.com/in/tiffany-jel-a-367548147', 'image'=>'images/ieo/team/tiffany.jpg', 'text'=>'', ];
				$coreTeam[] = [	'name'=>'Juliane Schreilechner', 'title'=>'Training Consultant', 'linkedin'=>'https://www.linkedin.com/in/juliane-schreilechner-142108174/', 'image'=>'images/ieo/team/juliane.jpg', 'text'=>'', ];
				?>

				@foreach($coreTeam as $tm)
					<div class="col-3 text-center">
						<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">							
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
					$coreTeam[] = [	'name'=>'Khalid Almutawa', 'title'=>'Partner and Chairman ASAS Holding Group', 'linkedin'=>'', 'image'=>'images/ieo/advisors/khalid.jpg', 'text'=>'Investor. Serial Entrepreneur. Early Investor in Almani Lighting, Amazon and Nvidia.', ];
					$coreTeam[] = [	'name'=>'Sebastijan Eder', 'title'=>'Partner, 0C Ventures', 'linkedin'=>'https://www.linkedin.com/in/sebastijan-eder-a8235028/', 'image'=>'images/ieo/advisors/sebastijan.jpg', 'text'=>'Entrepreneur, Investor, Blockchain & Crypto enthusiast and Tech fan.', ];
					$coreTeam[] = [	'name'=>'Ralph Kattan ', 'title'=>'Team leader Accounting & Regulatory Information Santander Consumer Bank AG, Germany*', 'linkedin'=>'https://www.linkedin.com/in/ralph-kattan-709103191/', 'image'=>'images/ieo/advisors/ralph.jpg', 'text'=>'Early BAL Investor. Fintech, Blockchain researcher & Digital Assets expert.', ];
					$coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'International Key Account Manager, CustomBiotech EMEA/LATAM at Roche Diagnostic Germany', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'', ];
					$coreTeam[] = [	'name'=>'Dr. Moritz Eidens', 'title'=>'CEO PharmGenomics GmbH', 'linkedin'=>'https://www.linkedin.com/in/dr-moritz-eidens-80550910/', 'image'=>'images/ieo/advisors/moritz.jpg', 'text'=>'Founder PharmGenomics. Investor and Blockchain Enthusiast since 2014.', ];
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


				<?php
					$coreTeam = [];
					$coreTeam[] = [	'name'=>'Mohsin Irshad', 'title'=>'Sr. UI/UX Designer at EXCEED IT Services', 'linkedin'=>'https://www.linkedin.com/in/mohsin-irshad-8b982532', 'image'=>'images/ieo/advisors/mohsin.jpg', 'text'=>'', ];
					
					$coreTeam[] = [	'name'=>'Janis Leitans', 'title'=>'Scientific Assistant, Latvian Biomedical Research Centre', 'linkedin'=>'https://www.linkedin.com/in/janis-leitans-16297269/', 'image'=>'images/ieo/team/janis.jpg', 'text'=>'', ];
				?>
				<div class="row pt-5 justify-content-center">
				@foreach($coreTeam as $tm)
					<div class="col-3 text-center">						
						<div class="rounded-circle team-img" style="background-image: url({{ Util::assetUrl($tm['image'])}})">							
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
					$partners[] = [	'style'=>'', 'title'=>'CamelLED', 'alt'=>'CamelLED', 'src'=>Util::assetUrl('images/ieo/partners/camel_led.png'), 'link'=>'https://camel.almani.ae'];
					$partners[] = [	'style'=>'', 'title'=>'Dotcom Ventures', 'alt'=>'Dotcom Ventures', 'src'=>Util::assetUrl('images/ieo/partners/dotcom_ventures.png'), 'link'=>'https://dotcomv.com'];
					$partners[] = [	'style'=>'', 'title'=>'Dubai Consult', 'alt'=>'Dubai Consult', 'src'=>Util::assetUrl('images/ieo/partners/dubai_consult.png'), 'link'=>'https://dubaiconsult.com/'];
					$partners[] = [	'style'=>'', 'title'=>'German Embassy UAE', 'alt'=>'German Embassy UAE', 'src'=>Util::assetUrl('images/ieo/partners/german_uae.png'), 'link'=>'https://uae.diplo.de/ae-en/vertretungen/generalkonsulat1' ];
					$partners[] = [	'style'=>'', 'title'=>'Asas', 'alt'=>'Asas', 'src'=>Util::assetUrl('images/ieo/partners/asas.png'), 'link'=>'https://asasholding.ae'];
					// $partners[] = [	'style'=>'', 'title'=>'Light Middle East', 'alt'=>'Light Middle East', 'src'=>Util::assetUrl('images/ieo/partners/light_middles_east.png'), 'link'=>'https://light-middle-east.ae.messefrankfurt.com/dubai/en.html'];
					$partners[] = [	'style'=>'', 'title'=>'Light Middle East', 'alt'=>'Light Middle East', 'src'=>Util::assetUrl('images/ieo/partners/madeingermany.png'), 'link'=>'https://light-middleeast.german-pavilion.com/en/home/'];
					$partners[] = [	'style'=>'', 'title'=>'Continental Investments', 'alt'=>'Continental Investments', 'src'=>Util::assetUrl('images/ieo/partners/continental.png'), 'link'=>'http://www.continvest.net'];
				?>
				<div class="col-12">
					<h2 class="text-white ml-3 mt-0">Partners</h2>
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
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICORATING", 'link'=>"https://icoholder.com/en/buyanylight-31234", 'src'=>"images/ieo/partners/icoholder.png", ];
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOHOLDER", 'link'=>"https://icobench.com/ico/buyanylight-bal", 'src'=>"images/ieo/partners/icobench.png", ];
					$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOMARKS", 'link'=>"https://icomarks.com/ico/buyanylight", 'src'=>"images/ieo/icomark.png", ];
					//$datas[] = [ 'style'=>"", 'title'=>"BuyAnyLight ICOSBULL", 'link'=>"https://icosbull.com/eng/ico/buyanylightbal", 'src'=>"images/ieo/partners/icosbull.png", ];
				?>
				<div class="col-5 mt-10">
					<h2 class="text-white ml-3 mt-0">Ratings</h2>
					<div class="icons">
						@foreach($datas as $data)
						<div class="col-4 partner">
							<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
								{{-- <img src="{{ Util::assetUrl($data['src']) }}"> --}}
								<div class="icon" style="background-image: url({{ Util::assetUrl($data['src']) }})"></div>
							</a>
						</div>
						@endforeach
						

						<?php $data = [ 'style'=>"", 'title'=>"BuyAnyLight ICOSBULL", 'link'=>"https://icosbull.com/eng/ico/buyanylightbal", 'src'=>"images/ieo/partners/icosbull.png", ]; ?>						
						<div class="col-12 partner">
							<a href="{{$data['link']}}" target="_blank" title="{{ $data['title'] }}" alt="{{ $data['title'] }}" >
								{{-- <img src="{{ Util::assetUrl($data['src']) }}"> --}}
								<div class="icon" style="background-image: url({{ Util::assetUrl($data['src']) }})"></div>
							</a>
						</div>

					</div>
				</div>
		
			
				

				<?php
					
					// $datas[] = [ 'style'=>"", 'title'=>"", 'link'=>"", 'src'=>"", ];					
					$datas = [];
					$datas[] = [ 'style'=>"", 'title'=>"Bitcoin Wiki", 'link'=>"https://en.bitcoinwiki.org/wiki/Buyanylight", 'src'=>"images/ieo/partners/bitcoinwiki.png", ];
				?>
				<div class="col-5 mt-10">
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
				</div>
					
				
				
				<div class="col-2 mt-10">
				</div>


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
										<button type="submit" class="btn btn-ieo">
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
		                                        <input type="submit" class="btn btn-ieo w-100 send-message" value="Send Message" disabled="disabled">
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
