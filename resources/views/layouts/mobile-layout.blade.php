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
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buyanylight.com - Sourcing Reinvented</title>
    <link href="{{ asset('images/logo-black-icon.png') }}" rel="icon" type="image/x-icon">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/mobile.css?v=1">
    <link rel="stylesheet" href="/css/privacy.css?v=1">
    <link rel="stylesheet" href="/css/slick.css?v=1">
    <link rel="stylesheet" href="/css/slick-theme.css?v=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>
<body class="eupopup eupopup-bottom eupopup-style-compact">
	@include('includes.mobile-navbar')
	@yield('content')
    
    @include('includes.mobile-footer')


    <script src="/js/mobile.js" charset="utf-8"></script>
    @if (session('success') || session('danger'))
    <script type="text/javascript">
    $( document ).ready(function() {
        $('.toast').toast('show')
    });
      
    </script>
    @endif
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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


        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // $('#navbarNavDropdown ul li a').on('click',function(){
        //     $(this).parent().parent().slideToggle(); 
        // });

        // $('.navbar-nav>li>a').on('click', function(){
        //     $('.navbar-collapse').collapse('hide');
        // });


    
    })
    </script>
</body>
</html>