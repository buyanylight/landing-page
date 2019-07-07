<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buyanylight.com - Sourcing Reinvented</title>
    <link href="{{ asset('images/logo-white.png') }}" rel="icon" type="image/x-icon">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/mobile.css">

</head>
<body>
	@include('includes.mobile-navbar')
	@yield('content')

   <script src="js/mobile.js" charset="utf-8"></script>
</body>
</html>