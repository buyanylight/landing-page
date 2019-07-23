<nav class="navbar navbar-expand-lg navbar-dark {{Request::path() == '/'  ? 'bg-transparent' : 'bg-black'}} fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand " href="/">
            <img src="{{ asset('images/logo-white.png') }}" width="250" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="/">Home</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/#ninety">How it works</a>
                        <a class="dropdown-item" href="/#balvsretail">BAL vs. retail</a>
                        <a class="dropdown-item" href="/#about">About BAL</a>
                        <a class="dropdown-item" href="/#why-bal">Why BAL</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Packages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/#trial">Free Trial Plan</a>
                        <a class="dropdown-item" href="/#home">My Home Plan</a>
                        <a class="dropdown-item" href="/#tower">My Tower Plan</a>
                        <a class="dropdown-item" href="/#finder">LightFinder Plan</a>
                        <a class="dropdown-item" href="/#package">Summary</a>
                        <a class="dropdown-item" href="/#addons">Addons</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Buyers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">Register</a>
                        <a class="dropdown-item" href="/buyer-faq">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="/seller" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sellers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/seller">Start today</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">Register</a>
                        <a class="dropdown-item" href="/seller-faq">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="/investor" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Investors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/ieo">IEO</a>
                        <a class="dropdown-item" href="/investor">Lets talk</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="https://medium.com/@infobuyanylight" target="_blank">News</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="/#contact">Contact</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="https://lightfinder.buyanylight.com">Sign in</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="/seller" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign up
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