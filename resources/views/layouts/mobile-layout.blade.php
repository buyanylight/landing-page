<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	@if(strpos(Request::url(), 'buyanylight.com') !== false)
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143361165-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-143361165-1');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '422311248361106');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=422311248361106&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	@endif


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Buyanylight.com - Sourcing Reinvented</title>
	<link href="{{ Util::assetUrl('images/logo-black-icon.png') }}" rel="icon" type="image/x-icon">

	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">

	<!-- Styles -->

   	

	@section('css')
		<link rel="stylesheet" href="{{ Util::assetUrl('css/mobile.css') }}">
	@show

	<link rel="stylesheet" href="{{ Util::assetUrl('css/privacy.css') }}">
	<link rel="stylesheet" href="{{ Util::assetUrl('css/slick.css') }}">
	<link rel="stylesheet" href="{{ Util::assetUrl('css/slick-theme.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	

	@yield('head-css')

	 <!-- Meta -->
	<!-- //////////////////////////////////////////////////////////////////////// -->
	<meta name="description" content="BuyAnyLight is the new global marketplace for LED lighting. Offering quality LED from the top sellers at the lowest prices. With BAL, everyone wins!" />
	<meta name="author" content="Buyanylight.com">
	<meta name="title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
	<meta name="keywords" content="Light, chandelier, lamp, led strip lights, ceiling lights, pendant lighting, outdoor lights, led strip, wall lights, light fixtures, Cheapest lights, cheapest place to buy lights, LED lights, online lighting store, kitchen lights, bathroom lights, bedroom lights, led panel, flood lights, lighting design, architectural lighting, home lighting, smart home, find light, light finder, get light quotes, search lights online, buy lights online, Sourcing reinvented, project management, lighting mangement, lighting consultancy, lighting solutions, lighting project, lighting companies, lighting consultant, innovation, switch to led, sourcing solution" />


	<meta property="og:title" content="Sourcing Reinvented - The global marketplace for LED Lighting | BuyAnyLight.com">
	<meta property="og:type" content="article">
	<meta property="og:url" content="https://buyanylight.com">
	{{-- <meta property="og:image" content="https://buyanylight.com/images/logo-white.png"> --}}
	<meta property="og:image" content="{{ Util::assetUrl('images/bal-logo-share.png') }}">
	<meta property="og:description" content="BUY ANY LIGHT (BAL) has pioneered an innovation that changes the procedure of sourcing lights forever! The BAL platform benefits users with the best possible prices for any light, increased efficiency of lights procurement, access to the actual manufacturers of top global brands, increased profits, automation functions, and many other excellent features.">


	<!-- //////////////////////////////////////////////////////////////////////// -->
	<!-- Meta -->
	{{-- preloader --}}
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- <link rel="stylesheet" href="https://loading.io/css/loading.css"> --}}
	<link rel="stylesheet" href="{{ Util::assetUrl('css/preloaders.css') }}">
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- preloader --}}

</head>
<body class="eupopup eupopup-bottom">

	<div class="preloader">
		{{-- <div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div> --}}

		{{-- <div class="lds-ripple"><div></div><div></div></div> --}}

		{{-- <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> --}}
		
		{{-- <div class="bal-loading-logo">
			<div class="ld ld-shadow">
				<img src="{{ Util::assetUrl('images/logos/logo-white2.png') }}" 
				alt="BuyAnyLight">
			</div>
		</div> --}}

		{{-- <div style="z-index: 1032;">
			<img class="bal-solo" 
			style="width: 152px; margin-right: -10px;" 
			src="{{ Util::assetUrl('images/logos/logo-white-sm.png') }}">
		</div> --}}

		<div style="z-index: 1032; 
		display: inline-flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;">
			<img class="bal-solo" 
			style="width: 152px; margin-right: -10px;" 
			src="{{ Util::assetUrl('images/logos/logo-white-sm.png') }}">
			
			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
		</div>

	</div>

	@include('includes.mobile-navbar')
	<div style="position: relative;  z-index: 5">
			<!-- Position toasts -->
		<div style="position: absolute; top: 70px; left:10px; min-width: 300px;">
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
	@yield('content')
	
	@include('includes.mobile-footer')


	<script src="{{ Util::assetUrl('js/mobile.js') }}" charset="utf-8"></script>
	<script src="{{ Util::assetUrl('js/validator.min.js') }}" charset="utf-8"></script>

	@if (session('kyc-success'))

	<script type="text/javascript">
		$(document).ready(function() {
			$('.kyc-toast').toast('show');
		});
	</script>


	@endif


	@if (session('success') || session('danger'))
	<script type="text/javascript">
	$( document ).ready(function() {
		$('.toast').toast('show')
	});
	  
	</script>
	@endif
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_KEY') }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

	<script type="text/javascript">
	grecaptcha.ready(function() {
		grecaptcha.execute( '{{ env('CAPTCHA_KEY') }}' , { action: 'contact' } )
		   .then(function(token) {
				var recaptchaResponse = document.getElementById('recaptchaResponse');
				recaptchaResponse.value = token;
				$('.send-message').removeAttr('disabled','disabled');
			});
	 });

	</script>
	<script type="text/javascript">

	  $( document ).ready(function() {
  

		$('.investor-btn').click(function(){
			console.log("Hello World!");
			if($('.investor-down').is(':visible')){

				$('.investor-down').hide();  
				$('.investor-up').show();  

			} else {

				$('.investor-down').show();  
				$('.investor-up').hide(); 
			}
		})

		$('.seller-btn').click(function(){
			console.log("Hello World!");
			if($('.seller-down').is(':visible')){

				$('.seller-down').hide();  
				$('.seller-up').show();  

			} else {

				$('.seller-down').show();  
				$('.seller-up').hide(); 
			}
		})

		$('.buyer-btn').click(function(){
			console.log("Hello World!");
			if($('.buyer-down').is(':visible')){

				$('.buyer-down').hide();  
				$('.buyer-up').show();  

			} else {

				$('.buyer-down').show();  
				$('.buyer-up').hide(); 
			}
		})

		 $('.newsletter-btn').click(function(){
			console.log("Hello World!");
			if($('.newsletter-down').is(':visible')){

				$('.newsletter-down').hide();  
				$('.newsletter-up').show();  

			} else {

				$('.newsletter-down').show();  
				$('.newsletter-up').hide(); 
			}
		})

		  $('.contact-btn, .help-icon').click(function(){
			console.log("Hello World!");
			if($('.contact-down').is(':visible')){

				$('.contact-down').hide();  
				$('.contact-up').show();  

			} else {

				$('.contact-down').show();  
				$('.contact-up').hide(); 
			}
		})


		$('.about-btn, .help-icon').click(function(){
			console.log("Hello World!");
			if($('.about-down').is(':visible')){

				$('.about-down').hide();  
				$('.about-up').show();  

			} else {

				$('.about-down').show();  
				$('.about-up').hide(); 
			}
		})

		
		$('.document h3').click(function(){
			$(this).next('ul').slideToggle();
			$(this).find('.caret_down').toggleClass('hide_group');
			$(this).find('.caret_right').toggleClass('hide_group');
		});

		

	   $(window).scroll(function(){
			$(".share-icons").css("opacity", 1 - $(window).scrollTop() / 250);
		});

		'use strict';
  
		var c, currentScrollTop = 0,
		navbar = $('nav');

		$(window).scroll(function () {
			var a = $(window).scrollTop();
			var b = navbar.height();
	 
			currentScrollTop = a;
	 
			if (c < currentScrollTop && a > b + b) {
				navbar.addClass("scrollUp");
			} else if (c > currentScrollTop && !(a <= b)) {
				navbar.removeClass("scrollUp");
			}
			c = currentScrollTop;
		});

		 $('.timeline').slick({
			centerMode: false,
			centerPadding: '0px',
			slidesToShow: 1,
			initialSlide:0,
			infinite: false,
		   
		});


		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		// $('#navbarNavDropdown ul li a').on('click',function(){
		//     $(this).parent().parent().slideToggle(); 
		// });


		 function makeTimerPrivate() {

			var endTime = new Date("1 November 2019 0:00:00 GMT+04:00");          
			// var endTime = new Date("31 January 2020 0:00:00 GMT+04:00");
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			$("#days").html("<span style='font-size: 14px;'>" + days +" </span>" + "<br><span>Days</span>");
			$("#hours").html("<span style='font-size: 14px;'>" + hours +" </span>" + "<br><span>Hours</span>");
			$("#minutes").html("<span style='font-size: 14px;'>" + minutes +" </span>" + "<br><span>Minutes</span>");
			$("#seconds").html("<span style='font-size: 14px;'>" + seconds +" </span>" + "<br><span>Seconds</span>");       

		}

		setInterval(function() { makeTimerPrivate(); }, 1000);

		function makeTimerPublic() {

			// var endTime = new Date("01 December 2019 0:00:00 GMT+04:00");
			var endTime = new Date("01 Febuary 2020 0:00:00 GMT+04:00");
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			$("#days1").html("<span style='font-size: 14px;'>" + days +" </span>" + "<br><span>Days</span>");
			$("#hours1").html("<span style='font-size: 14px;'>" + hours +" </span>" + "<br><span>Hours</span>");
			$("#minutes1").html("<span style='font-size: 14px;'>" + minutes +" </span>" + "<br><span>Minutes</span>");
			$("#seconds1").html("<span style='font-size: 14px;'>" + seconds +" </span>" + "<br><span>Seconds</span>");       

		}

		setInterval(function() { makeTimerPublic(); }, 1000);

	
	})
	</script>

	@yield('body-end-javascript')
	
	<script>
	function scrollToTargetID(targetID){
		console.log(targetID);
		const yourElement = document.getElementById(targetID);
		const yCoordinate = yourElement.getBoundingClientRect().top + window.pageYOffset;
		const yOffset = -100; 

		window.scrollTo({
			top: yCoordinate + yOffset,
			behavior: 'smooth'
		});				
	};

	{{-- scroll to --}}
	{{-- ////////////////////////////////////////////////////////////// --}}	
	$(document).ready(function(){
		$('.scrollTo').click(function() {
			scrollToTargetID($(this).attr('target'));
		});
	});		
	{{-- ////////////////////////////////////////////////////////////// --}}	
	{{-- scroll to --}}


	// if coreteam is in url 
	//////////////////////////////////////////////////////////////// 
	$(document).ready(function(){
		var anchors = window.location.href.split("#");
		if(anchors.length >1 && (anchors[1]=='coreteam')) {			
			scrollToTargetID('coreteam');
		};	
	});
	//////////////////////////////////////////////////////////////// 
	// if coreteam is in url 

	// preloader
	//////////////////////////////////////////////////////////////// 	
	$(window).on('load',function(){
		// $('.preloader > div').css("display", "none");
		$('.preloader > div').fadeOut();
		$('.preloader').addClass('completed');
		setTimeout(()=>{
			$('.preloader').css("display", "none");
			popUpIEO();
		},1100);
	});
	//////////////////////////////////////////////////////////////
	// preloader
	</script>








	{{-- ieo-popup --}}
	{{-- ////////////////////////////////////////////////////////////// --}}
	<script>
	function setCookie(name,value,days) {
	    var expires = "";
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime() + (days*24*60*60*1000));
	        // date.setTime(date.getTime() + (60*1000));
	        expires = "; expires=" + date.toUTCString();
	    }
	    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	}
	function getCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}
	function eraseCookie(name) {
	    document.cookie = name+'=; Max-Age=-99999999;';  
	}


	function popUpIEO() {
		console.log('popUpIEO',getCookie('ieo-popup'));

		if(getCookie('ieo-popup')!='1')
		$('#ieo-popup').modal('show');
	}

	$(document).ready(function(){
		$('#ieo-popup .closeIEOPopUp').click((data)=>{
			setCookie('ieo-popup','1',1);
			console.log('closeIEOPopUp click = '+getCookie('ieo-popup'));
		});


	});
	</script>



	<div id="ieo-popup" 
	class="modal fade" 
	tabindex="-1" 
	role="dialog" 
	aria-labelledby="BAL Token Sale" 
	aria-hidden="true">
	    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	        <div style="background-image: url({{ Util::assetUrl('images/popup-bg3.png') }}); background-size: cover; background-position: center;"
	        class="modal-content">
	            <div class="modal-header" style="border-bottom: 0;">
	            	<div class="d-flex align-items-center justify-content-center" style="width: 100%;">
		            	<img style="height: 180px; margin: 20px;" 
		            	src="{{ Util::assetUrl('images/logos/logo-black3.png') }}"/>
	            	</div>
	                <button type="button" class="btn closeIEOPopUp" aria-label="Close" data-dismiss="modal"
	                style="position: absolute; right: 20px; top: 10px; padding: 0px 0px 10px 10px; outline: none; margin: 0px 0px 10px 10px; font-size: 25px;">
	                    <i class="fas fa-times"></i>
	                </button>
	            </div>
	            <div class="modal-body pt-2 pr-5 pb-5 pl-5 mb-4" style="">
	            	<div style="text-align: center;">
		                <h1 class="modal-title pt-0 pb-4" style="line-height: 40px;">
		                	BAL TOKEN PRE-IEO SALE IS LIVE!
		                </h1>
	            		<h3>            			
			                Get your 17.5% 
			                <a class="closeIEOPopUp" href="{{ route('ieo') }}#section-bal-token">
			                DISCOUNT NOW!</a>
	            		</h3>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- ieo-popup --}}


	
	{{-- mylivechat.com --}}
	{{-- //////////////////////////////////////////////////////// --}}
	<!--Add the following script at the bottom of the web page (before </body></html>)-->
	<script type="text/javascript">function add_chatinline(){var hccid=42898044;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
	add_chatinline();</script>
	{{-- //////////////////////////////////////////////////////// --}}
	{{-- mylivechat.com --}}	
</body>
</html>