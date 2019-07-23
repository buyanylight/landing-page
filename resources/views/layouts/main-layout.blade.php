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
        <link rel="stylesheet" href="css/app.css?v=1">
        <link rel="stylesheet" href="css/privacy.css?v=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        
    @yield('meta')

    <!-- Meta -->
    <!-- //////////////////////////////////////////////////////////////////////// -->
    <meta name="author" content="Buyanylight.com">
    <meta name="keywords" content="Light, chandelier, lamp, led strip lights, ceiling lights, pendant lighting, outdoor lights, led strip, wall lights, light fixtures, Cheapest lights, cheapest place to buy lights, LED lights, online lighting store, kitchen lights, bathroom lights, bedroom lights, led panel, flood lights, lighting design, architectural lighting, home lighting, smart home, find light, light finder, get light quotes, search lights online, buy lights online, Sourcing reinvented, project management, lighting mangement, lighting consultancy, lighting solutions, lighting project, lighting companies, lighting consultant, innovation, switch to led, sourcing solution" />

    <meta property="og:type" content="article">
    <meta property="og:url" content="https://buyanylight.com">
    <meta property="og:image" content="https://buyanylight.com/images/logo-white.png">



    @section('meta-title')
    <meta name="title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
    <meta property="og:title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
    @show

    @section('meta-description')
    <meta name="description" content="BuyAnyLight is the new global marketplace for LED lighting. Offering quality LED from the top sellers at the lowest prices. With BAL, everyone wins!." />
    <meta property="og:description" content="BUY ANY LIGHT (BAL) has pioneered an innovation that changes the procedure of sourcing lights forever! The BAL platform benefits users with the best possible prices for any light, increased efficiency of lights procurement, access to the actual manufacturers of top global brands, increased profits, automation functions, and many other excellent features.">
    @show

    <!-- //////////////////////////////////////////////////////////////////////// -->
    <!-- Meta -->


    </head>
    <body class="eupopup eupopup-bottom eupopup-style-compact">
        @include('includes.navbar')
        @yield('content')

        @include('includes.footer')
        <!-- Scripts -->
        <script src="js/app.js" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
              $('#pills-chinese-tab').click(function(){
                console.log("Stop video");
                $('#english-video').stopVideo();
            });
        });
    </script>
    @if (session('success') || session('danger'))
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.toast').toast('show')
        });
    </script>
    @endif
</html>
