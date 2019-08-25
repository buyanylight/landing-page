<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143361165-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-143361165-1');
		</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Buyanylight.com - Sourcing Reinvented</title>
		<link href="{{ asset('images/logo-black-icon.png') }}" rel="icon" type="image/x-icon">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">

		<!-- Facebook Pixel Code -->

		<!-- Styles -->
		@yield('css')

		@section('css')
		<link rel="stylesheet" href="{{ asset('css/app.css') }}?ver={{ env('VERSION','0') }}">
		@show
		<link rel="stylesheet" href="{{ asset('css/privacy.css') }}?ver={{ env('VERSION','0') }}">
		<link rel="stylesheet" href="{{ asset('css/slick.css') }}?ver={{ env('VERSION','0') }}">
		<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}?ver={{ env('VERSION','0') }}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		
	@yield('meta')

	<!-- Meta -->
	<!-- //////////////////////////////////////////////////////////////////////// -->
	<meta name="author" content="Buyanylight.com">
	<meta name="keywords" content="Light, chandelier, lamp, led strip lights, ceiling lights, pendant lighting, outdoor lights, led strip, wall lights, light fixtures, Cheapest lights, cheapest place to buy lights, LED lights, online lighting store, kitchen lights, bathroom lights, bedroom lights, led panel, flood lights, lighting design, architectural lighting, home lighting, smart home, find light, light finder, get light quotes, search lights online, buy lights online, Sourcing reinvented, project management, lighting mangement, lighting consultancy, lighting solutions, lighting project, lighting companies, lighting consultant, innovation, switch to led, sourcing solution" />

	<meta property="og:type" content="article">
	<meta property="og:url" content="https://buyanylight.com">
	<meta property="og:image" content="https://buyanylight.com/images/bal-logo-share.png?ver={{ env('VERSION','0') }}">



	@section('meta-title')
	<meta name="title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
	<meta property="og:title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
	@show

	@section('meta-description')
	<meta name="description" content="BUY ANY LIGHT (BAL) has pioneered an innovation that changes the procedure of sourcing lights forever! The BAL platform benefits users with the best possible prices for any light, increased efficiency of lights procurement, access to the actual manufacturers of top global brands, increased profits, automation functions, and many other excellent features." />
	<meta property="og:description" content="BUY ANY LIGHT (BAL) has pioneered an innovation that changes the procedure of sourcing lights forever! The BAL platform benefits users with the best possible prices for any light, increased efficiency of lights procurement, access to the actual manufacturers of top global brands, increased profits, automation functions, and many other excellent features.">
	@show

	<!-- //////////////////////////////////////////////////////////////////////// -->
	<!-- Meta -->

	@yield('head-javascript')
	
	{{-- preloader --}}
	{{-- ////////////////////////////////////////////////////////////// --}}
	<style>
		.currently-preloading {
			overflow: hidden;
			margin: 0;
			padding: 0;
		}
		.preloader {
			/*height: 100vh;
			width: 100vw;*/
			height: 100%;
			width: 100%;
			z-index: 1032;
			display: flex;
		    justify-content: center;
		    align-items: center;			
			position: fixed;
		    top: 0;
		    /*background-color: #000;*/
		    /*transition: 1s;*/
		}
		.preloader:before {
			content:'';
			position: absolute;
			left: 0;
			width: 50%;
			height: 100%;			
		    background-color: #000;
		    transition: 1s;
		}
		.preloader:after {
			content:'';
			position: absolute;
			right: 0;
			width: 50%;
			height: 100%;			
		    background-color: #000;
		    transition: 1s;
		}
		.preloader.completed:before {
			left: -50%;
		}
		.preloader.completed:after {
			right: -50%;
		}


		.sk-folding-cube {
			z-index: 1032;
		  	margin: 20px auto;
		  	width: 40px;
		  	height: 40px;
		  	position: relative;
		  	-webkit-transform: rotateZ(45deg);
		    transform: rotateZ(45deg);
		}

		.sk-folding-cube .sk-cube {
		  float: left;
		  width: 50%;
		  height: 50%;
		  position: relative;
		  -webkit-transform: scale(1.1);
		      -ms-transform: scale(1.1);
		          transform: scale(1.1); 
		}
		.sk-folding-cube .sk-cube:before {
		  content: '';
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  background-color: #fff;
		  -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
		          animation: sk-foldCubeAngle 2.4s infinite linear both;
		  -webkit-transform-origin: 100% 100%;
		      -ms-transform-origin: 100% 100%;
		          transform-origin: 100% 100%;
		}
		.sk-folding-cube .sk-cube2 {
		  -webkit-transform: scale(1.1) rotateZ(90deg);
		          transform: scale(1.1) rotateZ(90deg);
		}
		.sk-folding-cube .sk-cube3 {
		  -webkit-transform: scale(1.1) rotateZ(180deg);
		          transform: scale(1.1) rotateZ(180deg);
		}
		.sk-folding-cube .sk-cube4 {
		  -webkit-transform: scale(1.1) rotateZ(270deg);
		          transform: scale(1.1) rotateZ(270deg);
		}
		.sk-folding-cube .sk-cube2:before {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s;
		}
		.sk-folding-cube .sk-cube3:before {
		  -webkit-animation-delay: 0.6s;
		          animation-delay: 0.6s; 
		}
		.sk-folding-cube .sk-cube4:before {
		  -webkit-animation-delay: 0.9s;
		          animation-delay: 0.9s;
		}
		@-webkit-keyframes sk-foldCubeAngle {
		  0%, 10% {
		    -webkit-transform: perspective(140px) rotateX(-180deg);
		            transform: perspective(140px) rotateX(-180deg);
		    opacity: 0; 
		  } 25%, 75% {
		    -webkit-transform: perspective(140px) rotateX(0deg);
		            transform: perspective(140px) rotateX(0deg);
		    opacity: 1; 
		  } 90%, 100% {
		    -webkit-transform: perspective(140px) rotateY(180deg);
		            transform: perspective(140px) rotateY(180deg);
		    opacity: 0; 
		  } 
		}

		@keyframes sk-foldCubeAngle {
		  0%, 10% {
		    -webkit-transform: perspective(140px) rotateX(-180deg);
		            transform: perspective(140px) rotateX(-180deg);
		    opacity: 0; 
		  } 25%, 75% {
		    -webkit-transform: perspective(140px) rotateX(0deg);
		            transform: perspective(140px) rotateX(0deg);
		    opacity: 1; 
		  } 90%, 100% {
		    -webkit-transform: perspective(140px) rotateY(180deg);
		            transform: perspective(140px) rotateY(180deg);
		    opacity: 0; 
		  }
		}		
	</style>
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- preloader --}}

	</head>
	<body class="eupopup eupopup-bottom">

		
		<div class="preloader">
			<div class="sk-folding-cube">
				<div class="sk-cube1 sk-cube"></div>
				<div class="sk-cube2 sk-cube"></div>
				<div class="sk-cube4 sk-cube"></div>
				<div class="sk-cube3 sk-cube"></div>
			</div>	
		</div>


		@include('includes.navbar')
		@yield('content')

		@include('includes.footer')
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}?ver={{ env('VERSION','0') }}" charset="utf-8"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	 	<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_KEY') }}"></script>
 
	<script type="text/javascript">
		grecaptcha.ready(function() {
		grecaptcha.execute( '{{ env('CAPTCHA_KEY') }}' , { action: 'contact' } )
		   .then(function(token) {
				var recaptchaResponse = document.getElementById('recaptchaResponse');
				recaptchaResponse.value = token;
				$('.send-message').removeAttr('disabled','disabled');
			});
	 });
		$(document).ready(function(){

		$('.center').slick({
			centerMode: false,
			centerPadding: '0px',
			slidesToShow: 4,
			initialSlide:0,
			infinite: true,
		});

		$('.timeline').slick({
		    centerMode: false,
		    adaptiveHeight: true,
		    centerPadding: '0px',
		    slidesToShow: 4,
		    initialSlide:0,
		    infinite: false,
		    appendArrows: $('.arrows'),
		    prevArrow: '<button type="button" class="slick-prev d-inline-block">Previous</button>',
		    nextArrow: '<button type="button" class="slick-next d-inline-block">Next</button>',
		});

		// $('.timeline').slick({
		// 	dots: true,
		// 	infinite: true,
		// 	speed: 300,
		// 	slidesToShow: 1,
		// 	adaptiveHeight: true,
		// });



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

		$('.trial').click(function(){
			console.log("Hello World!");
			if($('.trial-down').is(':visible')){

				$('.trial-down').hide();  
				$('.trial-up').show();  

			} else {

				$('.trial-down').show();  
				$('.trial-up').hide(); 
			}
		})

		$('.introduction').click(function(){
			console.log("Hello World!");
			if($('.introduction-down').is(':visible')){

				$('.introduction-down').hide();  
				$('.introduction-up').show();  

			} else {

				$('.introduction-down').show();  
				$('.introduction-up').hide(); 
			}
		})

		$('.finder2').click(function(){
			console.log("Hello World!");
			if($('.finder2-down').is(':visible')){

				$('.finder2-down').hide();  
				$('.finder2-up').show();  

			} else {

				$('.finder2-down').show();  
				$('.finder2-up').hide(); 
			}
		})


		$('.finder3').click(function(){
			console.log("Hello World!");
			if($('.finder3-down').is(':visible')){

				$('.finder3-down').hide();  
				$('.finder3-up').show();  

			} else {

				$('.finder3-down').show();  
				$('.finder3-up').hide(); 
			}
		})

		$('.pricing').click(function(){
			console.log("Hello World!");
			if($('.pricing-down').is(':visible')){

				$('.pricing-down').hide();  
				$('.pricing-up').show();  

			} else {

				$('.pricing-down').show();  
				$('.pricing-up').hide(); 
			}
		})

		$('.home2').click(function(){
			console.log("Hello World!");
			if($('.home2-down').is(':visible')){

				$('.home2-down').hide();  
				$('.home2-up').show();  

			} else {

				$('.home2-down').show();  
				$('.home2-up').hide(); 
			}
		})


		$('.home3').click(function(){
			console.log("Hello World!");
			if($('.home3-down').is(':visible')){

				$('.home3-down').hide();  
				$('.home3-up').show();  

			} else {

				$('.home3-down').show();  
				$('.home3-up').hide(); 
			}
		})

		$('.tower2').click(function(){
			console.log("Hello World!");
			if($('.tower2-down').is(':visible')){

				$('.tower2-down').hide();  
				$('.tower2-up').show();  

			} else {

				$('.tower2-down').show();  
				$('.tower2-up').hide(); 
			}
		})


		$('.tower3').click(function(){
			console.log("Hello World!");
			if($('.tower3-down').is(':visible')){

				$('.tower3-down').hide();  
				$('.tower3-up').show();  

			} else {

				$('.tower3-down').show();  
				$('.tower3-up').hide(); 
			}
		})

		$('pricing').click(function(){
			console.log("Hello World!");
			if($('pricing-down').is(':visible')){

				$('pricing-down').hide();  
				$('pricing-up').show();  

			} else {

				$('pricing-down').show();  
				$('pricing-up').hide(); 
			}
		})

		$('.read-more').click(function(){
			console.log("Hello World!");
			if($('.read-more-down').is(':visible')){

				$('.read-more-down').hide();  
				$('.1-read-more').hide();  
				$('.read-more-up').show();  
				$('.1-read-less').show();  

			} else {

				$('.1-read-less').hide();  
				$('.1-read-more').show();  
				$('.read-more-down').show();  
				$('.read-more-up').hide(); 
			}
		})

	});

	function makeTimerPrivate() {

	//      var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");  
		var endTime = new Date("01 October 2019 0:00:00 GMT+04:00");          
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

	//      var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");  
		var endTime = new Date("01 December 2019 0:00:00 GMT+04:00");          
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




	</script>
	@if (session('success') || session('danger'))
	<script type="text/javascript">
		$( document ).ready(function() {
			$('.toast').toast('show')
		});
	</script>
	@endif
	
	@yield('body-end-javascript')



	{{-- preloader --}}
	{{-- ////////////////////////////////////////////////////////////// --}}
	<script>
		function detectOldIE() {
		    var ua = window.navigator.userAgent;

		    var msie = ua.indexOf('MSIE ');
		    if (msie > 0) {
		        // IE 10 or older => return version number
		        // return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
		        return true;
		    }

		    var trident = ua.indexOf('Trident/');
		    if (trident > 0) {
		        // IE 11 => return version number
		        var rv = ua.indexOf('rv:');
		        // return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
		        return true;
		    }

		    var edge = ua.indexOf('Edge/');
		    if (edge > 0) {
		       	// Edge (IE 12+) => return version number
		       	// return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
			    return false;
		    }

		    // other browser
		    return false;
		}

		if(detectOldIE()){
			//if IE 11 or <
			$('.preloader').css("display", "none");
		} 
		else { 
			//if not IE 11
			$(window).on('load',function(){
				$('.preloader .sk-folding-cube').css("display", "none");
				$('.preloader').addClass('completed');
				setTimeout(function(){
					$('.preloader').css("display", "none");
				},1100);
			});			
		}
	</script>
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- preloader --}}

	</body>
</html>

