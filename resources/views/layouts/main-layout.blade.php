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
    </head>
    <body class="eupopup eupopup-bottom eupopup-style-compact">
        @include('includes.navbar')
        @yield('content')

        @include('includes.footer')
        <!-- Scripts -->
        <script src="js/app.js" charset="utf-8"></script>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slide').hiSlide();
        });
    </script>
    @if (session('success') || session('danger'))
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
    @endif
</html>
