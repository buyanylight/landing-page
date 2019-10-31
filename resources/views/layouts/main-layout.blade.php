<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>


	    <?php
	        //disable fb pixel and google analytics for develpment or url is not loseweightorgetpaid.com	        
	        $is_live = false;
	        if(strpos(Request::url(), 'buyanylight.com') !== false){
	            $is_live = true;	        
	        }
	    ?>

    	@if($is_live)
		<!-- Global site tag (gtag.js) - Google Analytics -->
		{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143361165-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-143361165-1');
		</script> --}}
		<!-- Global site tag (gtag.js) - Google Analytics -->


		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K2PS739');</script>
		<!-- End Google Tag Manager -->


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

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">


		<!-- Styles -->
		{{-- @yield('css') --}}

		@section('css')
		<link rel="stylesheet" href="{{ Util::assetUrl('css/app.css') }}">
		@show
		<link rel="stylesheet" href="{{ Util::assetUrl('css/privacy.css') }}">
		<link rel="stylesheet" href="{{ Util::assetUrl('css/slick.css') }}">
		<link rel="stylesheet" href="{{ Util::assetUrl('css/slick-theme.css') }}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	
		@yield('head-css')


	@yield('meta')

	<!-- Meta -->
	<!-- //////////////////////////////////////////////////////////////////////// -->
	<meta name="author" content="Buyanylight.com">
	<meta name="keywords" content="Light, chandelier, lamp, led strip lights, ceiling lights, pendant lighting, outdoor lights, led strip, wall lights, light fixtures, Cheapest lights, cheapest place to buy lights, LED lights, online lighting store, kitchen lights, bathroom lights, bedroom lights, led panel, flood lights, lighting design, architectural lighting, home lighting, smart home, find light, light finder, get light quotes, search lights online, buy lights online, Sourcing reinvented, project management, lighting mangement, lighting consultancy, lighting solutions, lighting project, lighting companies, lighting consultant, innovation, switch to led, sourcing solution" />

	<meta property="og:type" content="article">
	<meta property="og:url" content="https://buyanylight.com">
	<meta property="og:image" content="{{ Util::assetUrl('images/bal-logo-share.png') }}">



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
	<link rel="stylesheet" href="{{ Util::assetUrl('css/preloaders.css') }}">	
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- preloader --}}


	{{-- mylivechat --}}
	{{-- <script type="text/javascript">function add_chatinline(){var hccid=42898044;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); </script> --}}

	</head>
	<body class="eupopup eupopup-bottom">
    	@if($is_live)
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2PS739"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		@endif

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

			<div style="z-index: 1032; 
			display: inline-flex;
		    justify-content: center;
		    align-items: center;
		    flex-direction: column;">
				<img class="bal-solo" 
				style="width: 152px; margin-right: -10px;" 
				src="{{ Util::assetUrl('images/logos/logo-white-sm.png') }}">
				
				<div class="lds-ellipsis">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		@include('includes.navbar')
		@yield('content')

		@include('includes.footer')
		<!-- Scripts -->
		<script src="{{ Util::assetUrl('js/app.js') }}" charset="utf-8"></script>
		<script src="{{ Util::assetUrl('js/validator.min.js') }}" charset="utf-8"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
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


    	$(window).scroll(function(){
        	$('.main-navbar').toggleClass('bg-white', $(this).scrollTop() > 550);
        	$('.promo-home-navbar').addClass('bg-danger', $(this).scrollTop() > 550);
        	$('.promo-tower-navbar').addClass('bg-danger', $(this).scrollTop() > 550);

    	});

    	$(window).scroll(function(){
        	if($(this).scrollTop() > 550){
            	$('#topBtn').fadeIn();
            	$('.links').addClass('ncol')
            	$('.promo-home-navbar').addClass('pt-4 pb-3')
            	$('.promo-tower-navbar').addClass('pt-4 pb-3')
            	$(".logo").attr("src","/images/logo-black.png");
        	} else {
            	$('.promo-home-navbar').removeClass('pt-4')
            	$('.promo-home-navbar').addClass('pt-3')
            	$('.promo-tower-navbar').removeClass('pt-4')
            	$('.promo-tower-navbar').addClass('pt-3')
            	$(".logo").attr("src","/images/logo-white.png");
            	$('.links').removeClass('ncol')
        	}
    	});


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
		navbar = $('.main-navbar');
		promohomenavbar = $('.promo-home-navbar');
		promotowernavbar = $('.promo-tower-navbar');

		$(window).scroll(function () {
			var a = $(window).scrollTop();
			var b = navbar.height();
	 
			currentScrollTop = a;
	 
			if (c < currentScrollTop && a > b + b) {
				navbar.addClass("scrollUp");
				promohomenavbar.addClass("scrollUp")
				promotowernavbar.addClass("scrollUp")
				promohomenavbar.addClass("pt-4 pb-3")
				promotowernavbar.addClass("pt-4 pb-3")
			} else if (c > currentScrollTop && !(a <= b)) {
				navbar.removeClass("scrollUp");
				promohomenavbar.removeClass("scrollUp");
				promotowernavbar.removeClass("scrollUp");
				promohomenavbar.addClass("pt-3")
				promohomenavbar.removeClass("pt-4")
				promotowernavbar.addClass("pt-3")
				promotowernavbar.removeClass("pt-4")
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



		$('.document h3').click(function(){
			$(this).next('ul').slideToggle();
			$(this).find('.caret_down').toggleClass('hide_group');
			$(this).find('.caret_right').toggleClass('hide_group');
		});
	});

	
	function makeTimerPrivate() {
			var endTime = new Date("01 November 2019 0:00:00 GMT+04:00");
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




	</script>

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

	// if coreteam is in url 
	//////////////////////////////////////////////////////////////// 
	$(document).ready(function(){
		var anchors = window.location.href.split("#");
		if(anchors.length >1 && (anchors[1]=='coreteam')) {			
			scrollToTargetID($(this).attr('target'));
		};	
	});
	//////////////////////////////////////////////////////////////// 
	// if coreteam is in url 


	{{-- preloader --}}
	{{-- ////////////////////////////////////////////////////////////// --}}
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
			
			popUpIEO();
		} 
		else { 
			//if not IE 11
			$(window).on('load',function(){
				$('.preloader > div').fadeOut();
				$('.preloader').addClass('completed');
				setTimeout(function(){
					$('.preloader').css("display", "none");

					popUpIEO();

				},1100);
			});			
		}
	{{-- ////////////////////////////////////////////////////////////// --}}
	{{-- preloader --}}

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

	<style>
		a.btn.closeIEOPopUp {
		    background-color: #5555A4;
		    border-color: #5555A4;
		}
		a.btn.closeIEOPopUp:hover {
			background-color: #000;
			border-color: #000;			
		}
		a.btn.closeIEOPopUp:not(:disabled):not(.disabled):active {
		    color: #000;
		    background-color: #ffffff;
		    border-color: #000000;		
		}
		a.btn.closeIEOPopUp:not(:disabled):not(.disabled):active:focus,
		a.btn.closeIEOPopUp.focus,
		a.btn.closeIEOPopUp:focus {
			box-shadow: none;
		}
	</style>


	<div id="ieo-popup" 
	class="modal fade" 
	tabindex="-1" 
	role="dialog" 
	aria-labelledby="BAL Token Sale" 
	aria-hidden="true">
	    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	        <div style="background-image: url({{ Util::assetUrl('images/popup-bg3.png') }}); background-size: cover; background-position: center;"
	        class="modal-content">
	            <div class="modal-header" style="border-bottom: 0; padding-bottom: 10px;">
	            	<div class="d-flex align-items-center justify-content-center" style="width: 100%;">
		            	<img style="height: 180px; margin: 20px; margin-bottom: 0px;" src="{{ Util::assetUrl('images/logos/logo-black3.png') }}"/>
	            	</div>
	                <button type="button" class="btn closeIEOPopUp" aria-label="Close" data-dismiss="modal"
	                style="position: absolute; right: 20px; top: 10px; padding: 0px 0px 10px 10px; outline: none; margin: 0px 0px 10px 10px; font-size: 25px;">
	                    <i class="fas fa-times"></i>
	                </button>
	            </div>
	            <div class="modal-body pt-2 pr-5 pb-5 pl-5 mb-4" style="">
	            	<div style="text-align: center;">
		                <h1 class="modal-title pt-0 pb-4">
		                	BAL TOKEN PRE-IEO SALE IS LIVE!
		                </h1>
	            		<h3>            			
			                <a class="closeIEOPopUp btn btn-success btn-lg" 
			                style="font-size: 1em; padding: 0.25em 1em;" 
			                href="{{ route('ieo') }}#section-bal-token">
				                Get your <strong>17.5%</strong>
				                DISCOUNT NOW!
			            	</a>			            	
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

