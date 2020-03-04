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
					{!! trans('msg.section1_heading') !!}
					</b>
				</h1>
				<div>
				{!! trans('msg.section1_desc') !!}
				</div>
			</div>
			<div class="col-12 text-center pt-4">
				<div class="row">
					<div class="col-12">
						<a href="#meet-bal" 
							class="btn btn-BAL w-100 mt-3 ">
							<i class="fas fa-link"></i>
							&nbsp;
							{{ trans('msg.section1_btn1') }}								
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							{{ trans('msg.section1_btn2') }}							
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							{{ trans('msg.section1_btn3') }}							
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							{{ trans('msg.section1_btn4') }}							
						</a>
					</div>
					<div class="col-6">
						<a href="{{ Util::assetUrl('BuyAnyLight_Pitch_Deck.pdf') }}" 
							target="_blank" class="btn btn-BAL w-100 mt-2">
							<i class="far fa-file-pdf"></i>
							&nbsp;
							{{ trans('msg.section1_btn5') }}								
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
					<b>{{ trans('msg.section2_heading') }}</b>
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
						<b>{{ trans('msg.section3_heading1') }}</b> 
						</h5> 
						<p class="">{!! trans('msg.section3_desc1') !!}</p>
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
							<b>{{ trans('msg.section3_btn1') }}</b>		
							</a>
							<p class="m-0 mt-2 ">
							<b>{!! trans('msg.section3_launch') !!}</b>	
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 mt-3">
				<div class="card card-body text-center" style="border-radius:25px;">
					<div class="container">
						<h5 class="">
						<b>{{ trans('msg.section3_heading2') }}</b>
						</h5>
						<div class="pt-3">
							<div class="row " style="font-size:12px;">
								<p class="col-md-1 m-0 d-flex align-items-center"><b>{{ trans('msg.section3_progress1') }}</b></p>
								<p class="col-md-2 text-center m-0"><b>{{ trans('msg.section3_progress2') }}</b></p>
								<p class="col-md-7 text-right m-0 d-flex align-items-center justify-content-end"><b>{{ trans('msg.section3_progress3') }}</b></p>
							</div>
							<div class="pt-1">
								<div class="progress">
									  <div class="progress-bar" role="progressbar" style="width: 38%" aria-valuenow="35" aria-valuemin="0" aria-valuemax	="100">	
									  </div>
								</div>
							</div>
							<div class="row pt-1 " style="font-size:12px;">
							<p class="col-md-1 mb-0"><b>{{ trans('msg.section3_progress4') }}</b></p>
								<p class="col-md-2 text-center mb-0"><b>{{ trans('msg.section3_progress5') }}</b></p>
								<p class="col-md-7 text-right mb-0"><b>{{ trans('msg.section3_progress6') }}</b></p>
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
											<p class="mb-0">{{ trans('msg.section3_video1') }}</p>
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
												<p class="mb-0">{{ trans('msg.section3_video2') }}</p>
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
							<b>{{ trans('msg.section3_private') }}</b>	
						</h5>
						<div class="card card-body mt-3" style="
						background-color:#3249B5; 
						background-image:none; 
						color:white;
						padding:0.7rem;">
							<p class="m-0 text-center">{{ trans('msg.section3_private_desc1') }}</p>
						</div>
						<div class="mt-3  text-center">
							<p class="m-0">{{ trans('msg.section3_private_desc2') }}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body" style="border-radius:25px;">
					<div class="container">
						<h5 class=" text-center">
							<b>{{ trans('msg.section3_pre_ieo') }}</b>	
						</h5>
						<div class="card card-body mt-3" style="
						background-color:#3249B5; 
						background-image:none; 
						color:white;
						padding:0.7rem;">
							<p class="m-0 text-center">{{ trans('msg.section3_pre_ieo_desc1') }}</p>
						</div>
						<div class="mt-3  text-center">
							<p class="m-0">{{ trans('msg.section3_pre_ieo_desc2') }}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pt-3">
				<div class="card card-body" style="border-radius:25px;">
					<div class="container">
						<h5 class=" text-center">
							<b>{{ trans('msg.section3_ieo') }}</b>	
						</h5>
						<div class="card card-body mt-3" style="
						background-color:#3249B5; 
						background-image:none; 
						color:white;
						padding:0.7rem;">
							<p class="m-0 text-center">{{ trans('msg.section3_ieo_desc1') }}</p>
						</div>
						<div class="mt-3  text-center">
							<p class="m-0">{{ trans('msg.section3_ieo_desc2') }}</p>
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
				{{ trans('msg.section4_heading') }}
			</strong> 
		</h3>
		<div class="row pt-4">
			<div class="col-12 text-center">
				<img src="{{ Util::assetUrl('images/ieo/meetbal(1).png')}}" width="80%">		
			</div>
			<div class="col-12 d-flex justify-content-center flex-column">
				<div class="pt-3">
					<p class="">
						{{ trans('msg.section4_desc') }}
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
									{{ trans('msg.section4_video1') }}
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
									{{ trans('msg.section4_video2') }}
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
			<b>{{ trans('msg.section6_heading') }}</b>	
		</h2>
		<p class="text-center pt-2">
			{!! trans('msg.section6_desc') !!}
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
								{{ trans('msg.section6_point1') }}
							</h5>
							<div class="benefit-text">
								{{ trans('msg.section6_point1_desc') }}
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
							{{ trans('msg.section6_point2') }}
							</h5>
							<div class="benefit-text">
							{{ trans('msg.section6_point2_desc') }}
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
							{{ trans('msg.section6_point3') }}
							</h5>
							<div class="benefit-text">
							{{ trans('msg.section6_point3_desc') }}
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
							{{ trans('msg.section6_point4') }}
							</h5>
							<div class="benefit-text">
							{{ trans('msg.section6_point4_desc') }}
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
							{{ trans('msg.section6_point5') }}
							</h5>
							<div class="benefit-text">
							{{ trans('msg.section6_point5_desc') }}
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
							{{ trans('msg.section6_point6') }}
							</h5>
							<div class="benefit-text">
							{{ trans('msg.section6_point6_desc') }}
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
	<h3 class="text-center"><strong>{{ trans('msg.section7_heading') }}</strong></h3>
	<div class="container d-flex align-items-center flex-column pb-5">
		<div class="row">
				@foreach($newsdatas as $nd)
				<div class="col-6 mt-3">
					<div class="card card-body d-flex justify-content-center align-items-center rounded">
						<a href="{{ $nd['link'] }}" class="" target="_blank">
							<img src="{{ $nd['src'] }}">
						</a>
					</div>
				</div>
				@endforeach
			</div>
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
						{{ trans('msg.sectionbuy_heading') }}
						</span>
					</b>
				</h3>
			</div>
			<div class="col-5">
				<a data-fancybox href="https://www.youtube.com/embed/o8CAwwz6tIM?rel=0&enablejsapi=1" class="btn btn-BAL text-white text-left" style="font-size: 10px;">
					<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.sectionbuy_video') }}</b>	
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
	  					<input class="form-control bal-token-input pl-4" placeholder="{{ trans('msg.sectionbuy_enteramt') }}" min="25000" name="bal" required="required" style="height: 70px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; font-size: 12px; margin-top: 3px;">
	  					<br>
					</div>
				</div>
				<div>
					<small>{{ trans('msg.sectionbuy_price') }}</small>
	  			</div>
				<div class="pt-4 bal-alert" style="display: none;">
					<div class="alert alert-danger" role="alert">	
						{{ trans('msg.sectionbuy_col_1') }}
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
										<span>{{ trans('msg.sectionbuy_col_2') }}</span>
									</b>
								</h5>
								<div class="pt-2">
									<div class="row">
										<div class="col">
											<div>
												<b>
													<u>{{ trans('msg.sectionbuy_cost1') }}</u>
												</b>
											</div>
											<span class="BAL_value">1</span> BAL=
											<span class="USD_value">0.25</span> USD
											{{-- <span class="USD_value">0.2</span> USD --}}
										</div>
										<div class="col-5">
											<div class="token-price" style="display: none;">
												<b>
													<u>{{ trans('msg.sectionbuy_cost2') }}</u>
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
													<u>{{ trans('msg.sectionbuy_gain') }}</u>
												</b>
											</div>
											<span class="BAL_value">1</span> BAL=
											<span class="USDIEO_value">0.30303</span> USD
										</div>
										<div class="col-5">
											<div class="pt-2 token-price" style="display: none;">
												<b>
													<u>{{ trans('msg.sectionbuy_pricetoday') }}</u>
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
										<b> <u>{{ trans('msg.sectionbuy_gain') }}</u></b>
									</div>
									<div class="row">
										<div class="col">
											{{ trans('msg.sectionbuy_gain1') }} : 21.21% 
												{{-- ROI = 51.52% --}}
										</div>
										<div class="col">

										</div>
									</div>
									<div class="row">
										<div class="col">
											{{ trans('msg.sectionbuy_gain2') }}:
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
										{!! trans('msg.sectionbuy_ieosale') !!}
								  	</span>
								</p>									
								</div>
							</div>
							{{-- ///////////////////////////////// --}}
							{{-- cb --}}




							<div class="pt-4">
								<div class="form-group">
									<label> <b>Step 1:</b>{!! trans('msg.sectionbuy_step') !!}</label>
									<select name="currency" class="form-control" required>
										@foreach($tokens as $token)
											<option value="" class="{{ $token['base'] }}_value">{{ $token['base'] }}</option>
										@endforeach
									</select>
									<small class="pt-3">
										{!! trans('msg.sectionbuy_accept') !!}
														</small>
								</div>
								@if(!empty($code))
									<input type="hidden" name="referral_code" value="{{ $code }}">
								@endif
								<button type="submit" class="btn btn-buy-token w-100" style="border-radius: 10px; color: #fff;" id="token-btn">
									<b>{{ trans('msg.sectionbuy_buytokens') }}</b>
								</button>
					
							</div>
						</div>
						<div class="container">
							<div class="card card-body add-token mt-3">
								{{ trans('msg.sectionbuy_how1') }} <br>
								<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">{{ trans('msg.sectionbuy_how2') }}</a>
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
					{!! trans('msg.section9_heading1') !!} 
				</b>
			</h3>
			<div class="text-center mt-3">
				<img class="video" src="{{ Util::assetUrl('/images/ieo/meetbal.png') }}" width="50%">
			</div>
			<p class="pt-3 text-white">
				{!! trans('msg.section9_desc1') !!} 
			</p>
		</div>
		<div class=" text-justify pt-3">
			<h3 class="text-center">
				<b>
					{!! trans('msg.section9_heading2') !!} 
				</b>
			</h3>
			<div class="text-center mt-3">
				<img class="video" src="{{ Util::assetUrl('/images/ieo/mission.png') }}" width="50%">
			</div>
			<p class="pt-3 text-white">
				
				{{ trans('msg.section9_desc2') }} 
			</p>
		</div>
	</div>
</section>
<section class="section9" id="why-token">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				{{ trans('msg.section10_heading') }} 
			</b>
		</h3>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/1.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3">	<b>{{ trans('msg.section10_point1') }} </b></h5>
			<div class="text-center pt-2">
				<p>
					
					{{ trans('msg.section10_point1_desc') }} 
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/2.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>{{ trans('msg.section10_point2') }}</b></h5>
			<div class="text-center pt-2">
				<p>
					{{ trans('msg.section10_point2_desc') }} 
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/3.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>{{ trans('msg.section10_point3') }}</b></h5>
			<div class="text-center pt-2">
				<p>
					{{ trans('msg.section10_point3_desc') }} 
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/4.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>{{ trans('msg.section10_point4') }}</b></h5>
			<div class="text-center pt-2">
				<p>
					{{ trans('msg.section10_point4_desc') }} 
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/5.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>{{ trans('msg.section10_point5') }}</b></h5>
			<div class="text-center pt-2">
				<p>
					{{ trans('msg.section10_point5_desc') }} 
				</p>
			</div>
		</div>
		<div class="pt-3">
			<div class="text-center">
				<img src="{{ Util::assetUrl('images/ieo/whychoose/6.png') }}" width="25%">
			</div>
			<h5 class="text-center pt-3"><b>{{ trans('msg.section10_point6') }}</b></h5>
			<div class="text-center pt-2">
				<p>
					{{ trans('msg.section10_point6_desc') }} 
				</p>
			</div>
		</div>
	</div>	
</section>


<section class="section10" id="roadmap">
	<div class="container pt-5 pb-5">
		<h3 class="pb-3 text-center">
			<b>
				
				{{ trans('msg.section11_heading') }} 
			</b>
		</h3>

		<div>
			<p class="text-white text-justify">
				
				{{ trans('msg.section11_desc') }} 
		
		<div class="container text-center text-white">
				{{-- roadmap --}}
				{{-- ////////////////////////////////////////////////////////////////// --}}
			
				<?php

					$timeline = [];
					$timeline[] = [
					'name' => '2014',
					'icon' => 'fas fa-archway',
					'items' => [
						trans('msg.section11_roadmap1'),
					],
				];
				$timeline[] = [
					'name' => '2015',
					'icon' => 'far fa-handshake',
					'items' => [
						trans('msg.section11_roadmap2'),
						trans('msg.section11_roadmap3'),
					],
				];
				$timeline[] = [
					'name' => '2016',
					'icon' => 'fas fa-users',
					'items' => [
						trans('msg.section11_roadmap4'),
					],
				];
				$timeline[] = [
					'name' => '2017',
					'icon' => 'fas fa-warehouse',
					'items' => [
						trans('msg.section11_roadmap5'),
						trans('msg.section11_roadmap6'),
					],
				];
				$timeline[] = [
				'name' => '2018',
				'icon' => 'fas fa-sitemap',
				'items' => [
					trans('msg.section11_roadmap7'),
					trans('msg.section11_roadmap8'),
				],
			];
			$timeline[] = [
				'name' => '2019',
				'icon' => 'fas fa-at',
				'items' => [
					trans('msg.section11_roadmap9'),
					trans('msg.section11_roadmap10'),
					trans('msg.section11_roadmap11'),
					trans('msg.section11_roadmap12'),
					trans('msg.section11_roadmap13'),
				],
			];
			$timeline[] = [
				'name' => '2020',
				'icon' => 'fas fa-link',
				'items' => [
					trans('msg.section11_roadmap14'),
					// 'Blockchain development team expansion',
					trans('msg.section11_roadmap15'),
					trans('msg.section11_roadmap16'),
					trans('msg.section11_roadmap17'),
					trans('msg.section11_roadmap18'),
				],
			];
			$timeline[] = [
			'name' => '2021',
			'icon' => 'fas fa-mobile',
			'items' => [
				trans('msg.section11_roadmap19'),
				trans('msg.section11_roadmap20'),
				trans('msg.section11_roadmap21'),
			],
		];
		$timeline[] = [
			'name' => '2022',
			'icon' => 'fas fa-brain',
			'items' => [
				trans('msg.section11_roadmap22'),
				trans('msg.section11_roadmap23'),
				trans('msg.section11_roadmap24'),
			],
		];
		$timeline[] = [
			'name' => '2023',
			'icon' => 'fas fa-file',
			'items' => [
				trans('msg.section11_roadmap25'),
				trans('msg.section11_roadmap26'),
				trans('msg.section11_roadmap27'),
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
				{{ trans('msg.section12_heading') }} 

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
						<b>{{ trans('msg.section12_info2') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info3') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info4') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info5') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info6') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info7') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info8') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info9') }} </b>
					</div>
					<div class="pt-2">
						<b>{{ trans('msg.section12_info10') }} </b>
					</div>
				</div>
				<div class="col-6">
					<div>
						BAL TOKEN
					</div>
					<div class="pt-2">
						BAL
					</div>
					<div class="pt-2">
					{{ trans('msg.section12_desc1') }} 
					</div>
					<div class="pt-2">
					{{ trans('msg.section12_desc2') }} 
					</div>
					<div class="pt-2">
					{{ trans('msg.section12_desc3') }} 
					</div>
					<div class="pt-2">
					{{ trans('msg.section11_heading') }} 
					</div>
					<div class="pt-2">
						1BAL =  0.30303 USD {{ trans('msg.section12_desc4') }} 
					</div>
					<div class="pt-2">
						1BAL =  0.25 USD {{ trans('msg.section12_desc5') }} 
					</div>
					<div class="pt-2">
						1BAL =  0.20 USD
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
				{{ trans('msg.section13_heading') }} 

			</b>
		</h3>
		<div class="text-justify pt-3">
			<p class="text-justify">
				Our aim is to make BAL Platform the leading marketplace for sourcing light products around the world, and we have devised a plan to make our dream a reality. The proceeds from the token sale will fund the decentralized platform launch, continued platform development, user acquisition, and marketing:
			</p>
			<div class="pt-3">
				<div>
					<p class="mb-0"><b>{{ trans('msg.section13_progress1') }}</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%; background-color: #72649F;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							40%
  						</p>
					</div>
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>{{ trans('msg.section13_progress2') }}</b></p>
					<div class="progress ">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%; background-color: #9B81CA;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							20%
  						</p>
					</div>			
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>{{ trans('msg.section13_progress3') }} </b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #7481C5;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>	
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>{{ trans('msg.section13_progress4') }}</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #BF81CA;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>	
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>{{ trans('msg.section13_progress5') }}</b></p>
					<div class="progress">
  						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%; background-color: #A5ADD9;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  						<p class="w-100 text-right pr-3">
  							10%
  						</p>
					</div>	
				</div>
				<div class="pt-3">
					<p class="mb-0"><b>{{ trans('msg.section13_progress6') }}</b></p>
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
					{{ trans('msg.section14_heading') }}
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
										{{ trans('msg.section14_chart1') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart1_desc') }} <br>
									<a target="_blank" href="https://etherscan.io/address/0xe8c066E2A338e57d220C34306B9B1f4e2490DFf3#tokentxns">{{ trans('msg.section14_view') }}</a>
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
										{{ trans('msg.section14_chart2') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart2_desc') }}
										<br>
										<a target="_blank" href="https://etherscan.io/address/0x56d700c93184F1A440eF49A366f5532AB2611b4D#tokentxns">{{ trans('msg.section14_view') }}</a>
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
										{{ trans('msg.section14_chart3') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart3_desc') }}<br>
										<a target="_blank" href="https://etherscan.io/address/0x955a5d4f04e7Ce70b2783D84eA38A483ED00DdEf#tokentxns">{{ trans('msg.section14_view') }}</a>
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
										{{ trans('msg.section14_chart4') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart4_desc') }}<br>
										<a target="_blank" href="https://etherscan.io/address/0xbDC7B020FCFbB08877cF7af9F78591D06F881BAf#tokentxns">{{ trans('msg.section14_view') }}</a>
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
										{{ trans('msg.section14_chart5') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart5_desc') }}<br>
										<a target="_blank" href="https://etherscan.io/address/0x997C48bF57fa3234ee718D0e3d6D0AD496aC5E83#tokentxns">{{ trans('msg.section14_view') }}</a>
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
										{{ trans('msg.section14_chart6') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart6_desc') }}<br>
										<a target="_blank" href="https://etherscan.io/address/0x0482AeFB13627A10b5489a89fE7d6F49Eb62B9B2#tokentxns">{{ trans('msg.section14_view') }}</a>
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
										{{ trans('msg.section14_chart7') }}
									</span>
									<br>	 
									<span>
										{{ trans('msg.section14_chart7_desc') }}<br>
										<a target="_blank" href="https://etherscan.io/address/0x412ca7c3ed4Fe0d213C08443E261224b5EEd6222#tokentxns">{{ trans('msg.section14_view') }}</a>
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
				{!! trans('msg.sectionteam_heading') !!}
			</b>
		</h3>
		<ul class="nav nav-pills mt-5 mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active team" id="pills-team-tab" data-toggle="pill" href="#pills-team" role="tab" aria-controls="pills-home" aria-selected="true">{{ trans('msg.sectionteam_Team') }}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link advisory" id="pills-advisory-tab" data-toggle="pill" href="#pills-advisory" role="tab" aria-controls="pills-profile" aria-selected="false">{{ trans('msg.sectionteam_Advisory') }}</a>
			</li>
		</ul>

		<?php
			$coreTeam = [];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_1_name'), 'title'=>trans('msg.sectionteam_1_desc'), 'linkedin'=>'https://www.linkedin.com/in/dotcomv', 'image'=>'images/ieo/team/joh.jpg', 'text'=>trans('msg.sectionteam_1_about'), 'model_no' => 1 ];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_2_name'), 'title'=>trans('msg.sectionteam_2_desc'), 'linkedin'=>'', 'image'=>'images/ieo/team/martin.jpg', 'text'=>trans('msg.sectionteam_2_about'), 'model_no' => 2 ];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_3_name'), 'title'=>trans('msg.sectionteam_3_desc'), 'linkedin'=>'https://www.linkedin.com/in/ljvicente', 'image'=>'images/ieo/team/leo.jpg', 'text'=>trans('msg.sectionteam_3_about'), 'model_no' => 3];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_4_name'), 'title'=>trans('msg.sectionteam_4_desc'), 'linkedin'=>'https://www.linkedin.com/in/muhammad-younas2023', 'image'=>'images/ieo/advisors/muhammad.jpg', 'text'=>trans('msg.sectionteam_4_about'), 'model_no' => 13];
			
			
			
			
			
			
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_5_name'), 'title'=>trans('msg.sectionteam_5_desc'), 'linkedin'=>'https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148', 'image'=>'images/ieo/team/rene.jpg', 'text'=>trans('msg.sectionteam_5_about'), 'model_no' => 4];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_6_name'), 'title'=>trans('msg.sectionteam_6_desc'), 'linkedin'=>'https://www.linkedin.com/in/rizviqbal', 'image'=>'images/ieo/team/rizvi.jpg', 'text'=>trans('msg.sectionteam_6_about'), 'model_no' => 5];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_7_name'), 'title'=>trans('msg.sectionteam_7_desc'), 'linkedin'=>'https://www.linkedin.com/in/artem-gordadze', 'image'=>'images/ieo/team/artem.jpg', 'text'=>trans('msg.sectionteam_7_about'), 'model_no' => 6];	
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_8_name'), 'title'=>trans('msg.sectionteam_8_desc'), 'linkedin'=>'https://www.linkedin.com/in/nantha-kumar-36b92685', 'image'=>'images/ieo/team/nantha.jpg', 'text'=>trans('msg.sectionteam_8_about'), 'model_no' => 7];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_9_name'), 'title'=>trans('msg.sectionteam_9_desc'), 'linkedin'=>'https://www.linkedin.com/in/marc-vazquez-6b01a794', 'image'=>'images/ieo/team/marc.jpg', 'text'=>trans('msg.sectionteam_9_about'), 'model_no' => 8];					
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_10_name'), 'title'=>trans('msg.sectionteam_10_desc'), 'linkedin'=>'https://www.linkedin.com/in/ryan-matthew-quines-551a85152', 'image'=>'images/ieo/team/ryan.jpg', 'text'=>trans('msg.sectionteam_10_about'), 'model_no' => 9];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_11_name'), 'title'=>trans('msg.sectionteam_11_desc'), 'linkedin'=>'https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a', 'image'=>'images/ieo/team/zain.jpg', 'text'=>trans('msg.sectionteam_11_about'), 'model_no' => 10];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_12_name'), 'title'=>trans('msg.sectionteam_12_desc'), 'linkedin'=>'https://www.linkedin.com/in/shajudeen-yousf-783452146/', 'image'=>'images/ieo/team/shajudeen.jpg', 'text'=>trans('msg.sectionteam_12_about'), 'model_no' => 11];
			// $coreTeam[] = [	'name'=>'Ammar Mohamed', 'title'=>'Lighting Design Architect', 'linkedin'=>'https://www.linkedin.com/in/ammar-mohamed-231379103/', 'image'=>'images/ieo/team/ammar.jpg', 'text'=>'My responsibilities as Lighting Designer Architect are mainly: Preparing renderings, drawings and specification, Assisting with the concept development, visualization, calculations and design development of the company\'s specialist lighting design projects. Attending site meetings and presenting creative designs to clients are also part of my tasks.', 'model_no' => 12];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_13_name'), 'title'=>trans('msg.sectionteam_13_desc'), 'linkedin'=>'https://www.linkedin.com/in/chad-hanson-a747a2137/', 'image'=>'images/ieo/team/chad.jpg', 'text'=>trans('msg.sectionteam_13_about'), 'model_no' => 14];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_14_name'), 'title'=>trans('msg.sectionteam_14_desc'), 'linkedin'=>'https://www.linkedin.com/in/maria-carron-igloso-1324b5105', 'image'=>'images/ieo/team/maria.jpg', 'text'=>trans('msg.sectionteam_14_about'), 'model_no' => 15];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_15_name'), 'title'=>trans('msg.sectionteam_15_desc'), 'linkedin'=>'https://www.linkedin.com/in/tiffany-jel-a-367548147', 'image'=>'images/ieo/team/tiffany.jpg', 'text'=>trans('msg.sectionteam_15_about'), 'model_no' => 16];
			$coreTeam[] = [	'name'=>trans('msg.sectionteam_16_name'), 'title'=>trans('msg.sectionteam_16_desc'), 'linkedin'=>'https://www.linkedin.com/in/juliane-schreilechner-142108174/', 'image'=>'images/ieo/team/juliane.jpg', 'text'=>trans('msg.sectionteam_16_about'), 'model_no' => 17];		
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
						<button class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#TeamModal{{$tm['model_no']}}">{{ trans('msg.sectionteam_about_btn') }}</button>
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
						$coreTeam[] = [	'name'=>trans('msg.sectionteam_17_name'), 'title'=>trans('msg.sectionteam_17_desc'), 'linkedin'=>'', 'image'=>'images/ieo/advisors/khalid.jpg', 'text'=>trans('msg.sectionteam_17_name'), 'model_no' => 18];
							$coreTeam[] = [	'name'=>trans('msg.sectionteam_18_name'), 'title'=>trans('msg.sectionteam_18_desc'), 'linkedin'=>'https://www.linkedin.com/in/sebastijan-eder-a8235028/', 'image'=>'images/ieo/advisors/sebastijan.jpg', 'text'=>trans('msg.sectionteam_18_about'), 'model_no' => 19];
							$coreTeam[] = [	'name'=>trans('msg.sectionteam_19_name'), 'title'=>trans('msg.sectionteam_19_desc'), 'linkedin'=>'https://www.linkedin.com/in/ralph-kattan-709103191/', 'image'=>'images/ieo/advisors/ralph.jpg', 'text'=>trans('msg.sectionteam_19_about'), 'model_no' => 20];
							$coreTeam[] = [	'name'=>trans('msg.sectionteam_20_name'), 'title'=>trans('msg.sectionteam_20_desc'), 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>trans('msg.sectionteam_20_desc'), 'model_no' => 21];
							$coreTeam[] = [	'name'=>trans('msg.sectionteam_21_name'), 'title'=>trans('msg.sectionteam_21_desc'), 'linkedin'=>'https://www.linkedin.com/in/dr-moritz-eidens-80550910/', 'image'=>'images/ieo/advisors/moritz.jpg', 'text'=>trans('msg.sectionteam_21_about'), 'model_no' => 22];
							//$coreTeam[] = [	'name'=>'Dr. Stefan Freh', 'title'=>'Specialist Solicitor Industrial Law', 'linkedin'=>'', 'image'=>'images/ieo/advisors/stefan.jpg', 'text'=>'The best time to plant a tree was 20 years ago. The second best time is now.', ];
						// $coreTeam[] = [	'name'=>'Alexander Vogt', 'title'=>'Strategy & Business Development EMEA/LATA', 'linkedin'=>'https://www.linkedin.com/in/alexander-vogt-b5b80858/', 'image'=>'images/ieo/advisors/alexander.jpg', 'text'=>'', ];
						//$coreTeam[] = [	'name'=>'Dr. Stefan Freh', 'title'=>'Specialist Solicitor Industrial Law', 'linkedin'=>'', 'image'=>'images/ieo/advisors/stefan.jpg', 'text'=>'The best time to plant a tree was 20 years ago. The second best time is now.', ];
						$coreTeam[] = [	'name'=>trans('msg.sectionteam_22_name'), 'title'=>trans('msg.sectionteam_22_desc'), 'linkedin'=>'https://www.linkedin.com/in/mohsin-irshad-8b982532', 'image'=>'images/ieo/advisors/mohsin.jpg', 'text'=>trans('msg.sectionteam_22_name'), 'model_no' => 23];
							$coreTeam[] = [	'name'=>trans('msg.sectionteam_23_name'), 'title'=>trans('msg.sectionteam_23_desc'), 'linkedin'=>'https://www.linkedin.com/in/janis-leitans-16297269/', 'image'=>'images/ieo/team/janis.jpg', 'text'=>trans('msg.sectionteam_23_name'), 'model_no' => 24];
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
						<h2 class="text-white mb-4">{{ trans('msg.partners') }}</h2>
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
						<h2 class="text-white mb-4">{{ trans('msg.roadshows') }}</h2>
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
									{{ trans('msg.sign_up') }}
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
								<input type="email" name="EMAIL" class="form-control" placeholder="{{ trans('msg.subcribe_email') }}">
									<div class="input-group-append">
										<button type="submit" class="btn btn-BAL">
											{{ trans('msg.subcribe_email') }}
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
						{{ trans('msg.private_round') }}
					</b>
				</h4>
			</div>
		</div>
	</div>
</section>

@endsection