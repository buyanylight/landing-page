<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand " href="{{ route('home') }}">
            <img src="{{ Util::assetUrl('images/logo-white.png') }}" width="200" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('home') }}#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('home') }}#ninety">How it works</a>
                        <a class="dropdown-item" href="{{ route('home') }}#balvsretail">BAL vs. retail</a>
                        <a class="dropdown-item" href="{{ route('home') }}#about">About BAL</a>
                        <a class="dropdown-item" href="{{ route('home') }}#why-bal">Why BAL</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Packages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('home') }}#all-packages">Free Trial</a>
                        <a class="dropdown-item" href="{{ route('home') }}#all-packages">My Home</a>
                        <a class="dropdown-item" href="{{ route('home') }}#all-packages">My Tower</a>
                        <a class="dropdown-item" href="{{ route('home') }}#all-packages">LightFinder</a>
                        <a class="dropdown-item" href="{{ route('home') }}#package">Summary</a>
                        <a class="dropdown-item" href="{{ route('home') }}#addons">Add-ons</a>
                    </div>
                </li>
               <!--  <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('home') }}#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Buyers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">Register</a>
                        <a class="dropdown-item" href="{{ route('buyer-faq') }}">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('seller') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sellers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('seller') }}">Start today</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">Register</a>
                        <a class="dropdown-item" href="{{ route('seller-faq') }}">FAQ</a>
                    </div>
                </li> -->
                 <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('ieo') }}" target="_blank">IEO</a>
                </li>
                 <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('investor') }}" target="_blank">Investors</a>
                </li>
                <!-- <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('investor') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Investors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('ieo') }}">IEO</a>
                        <a class="dropdown-item" href="{{ route('investor') }}">Lets talk</a>
                    </div>
                </li> -->


              <!--   <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Media
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('downloads') }}">Downloads</a>
                        <a class="dropdown-item" href="{{ route('videos') }}">Videos</a>
                    </div>
                </li>
 -->
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('downloads') }}" target="_blank">Media</a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="https://medium.com/buyanylight" target="_blank">News</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="https://lightfinder.buyanylight.com">Sign in</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('seller') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">Buyers</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">Sellers</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>