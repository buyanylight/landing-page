<nav class="navbar navbar-expand-lg navbar-dark p-0 fixed-top" id="mobileNavbar">
	<!-- test -->
    <div class="container-fluid">
        <div class="w-100 p-2 bg-black">
            <a class="navbar-brand " href="{{ route('home') }}">
                <img src="{{ asset('images/logo-white.png') }}" width="150" class="logo"> 
            </a>
            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav bg-black">
                <li class="nav-item mr-3 ml-3 mt-3">
                    <a class="nav-link text-white links w-100" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-white text-left links btn-black w-100" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('m-home') }}#works">How it works</a>
                        <a class="dropdown-item" href="{{ route('m-about') }}">About BAL</a>
                        <a class="dropdown-item" href="{{ route('m-why-us') }}">Why BAL</a>
                    </div>
                </li>
                <hr class="border-white w-100 m-2">
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-left text-white links btn-black w-100" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Buyers
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">Register</a>
                        <a class="dropdown-item" href="{{ route('buyer-faq') }}">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-left text-white links btn-black w-100" href="{{ route('seller') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sellers
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('seller') }}">Start today</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">Register</a>
                        <a class="dropdown-item" href="{{ route('seller-faq') }}">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-white text-left links btn-black w-100" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Packages
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('m-package') }}#trial">Free Trial</a>
                        <a class="dropdown-item" href="{{ route('m-package') }}#home">My Home</a>
                        <a class="dropdown-item" href="{{ route('m-package') }}#tower">My Tower</a>
                        <a class="dropdown-item" href="{{ route('m-package') }}#finder">LightFinder</a>
                        <a class="dropdown-item" href="{{ route('m-add-ons') }}">Add-ons</a>
                    </div>
                </li>
                <hr class="border-white w-100 m-2">
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle  text-left text-white links btn-black w-100" href="{{ route('investor') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Investors
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('ieo') }}">IEO</a>
                        <a class="dropdown-item" href="{{ route('investor') }}">Lets Talk</a>
                    </div>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="https://medium.com/@infobuyanylight" target="_blank">News</a>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="{{ route('home') }}#footer">Contact</a>
                </li>
                <hr class="border-white w-100 m-2">
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="https://lightfinder.buyanylight.com">Sign in</a>
                </li>
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-left text-white links btn-black w-100" href="/https://lightfinder.buyanylight.com/buyer/register" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign up
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">Buyers</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">Sellers</a>
                    </div>
                </li>
                {{-- <li class="nav-item dropdown mr-3 ml-3">
                    <button class="btn btn-success text-white hideNavbar">
                    	hide
                    </button>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
{{-- <div class="nav-backdrop"></div> --}}
