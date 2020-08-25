<nav class="navbar navbar-expand-lg navbar-dark p-0 fixed-top" id="mobileNavbar">
	<!-- test -->
    <div class="container-fluid">
        <div class="w-100 p-2 bg-black">
            <a class="navbar-brand " href="{{ route('home') }}">
                <img src="{{ Util::assetUrl('images/logo-white.png') }}" width="150" class="logo"> 
            </a>
            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav bg-black">
                <li class="nav-item mr-3 ml-3 mt-3">
                    <a class="nav-link text-white links w-100" href="{{ route('home') }}">{{ trans('msg.Home') }}</a>
                </li>
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-white text-left links btn-black w-100" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.About') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('m-home') }}#works">{{ trans('msg.How') }}</a>
                        <a class="dropdown-item" href="{{ route('m-home') }}#about">{{ trans('msg.About_bal') }}</a>
                        <a class="dropdown-item" href="{{ route('m-home') }}#why-bal">{{ trans('msg.Why') }}</a>
                        <!-- <a class="dropdown-item" href="{{ route('downloads') }}">Media</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-white text-left links btn-black w-100" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.Packages') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('m-home') }}#trial">{{ trans('msg.section9_trial_heading') }}</a>
                        <a class="dropdown-item" href="{{ route('m-home') }}#home">{{ trans('msg.section9_myhome_heading') }}</a>
                        <a class="dropdown-item" href="{{ route('m-home') }}#tower">{{ trans('msg.section9_mytower_heading') }}</a>
                        <a class="dropdown-item" href="{{ route('m-home') }}#finder">{{ trans('msg.section9_lightfinder_heading') }}</a>
                        <a class="dropdown-item" href="{{ route('m-home') }}#add-ons">{{ trans('msg.Add_ons') }}</a>
                    </div>
                </li>
                <hr class="border-white w-100 m-2">
                <!-- <li class="nav-item dropdown mr-3 ml-3">
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
                </li> -->
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="{{ route('ieo') }}">IEO</a>
                </li>
                 <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="{{ route('investor') }}">{{ trans('msg.Investors') }}</a>
                </li>

                <!-- <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle  text-left text-white links btn-black w-100" href="{{ route('investor') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Investors
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('ieo') }}">IEO</a>
                        <a class="dropdown-item" href="{{ route('investor') }}">Lets Talk</a>
                    </div>
                </li> -->
                <hr class="border-white w-100 m-2">

                
                <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle  text-left text-white links btn-black w-100" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.Media') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://medium.com/buyanylight" target="_blank">{{ trans('msg.News') }}</a>
                        <a class="dropdown-item" href="https://blog.buyanylight.com" target="_blank">{{ trans('msg.Blog') }}</a>
                        <a class="dropdown-item" href="{{ route('downloads') }}">{{ trans('msg.Downloads') }}</a>
                    </div>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="{{ route('home') }}#footer">{{ trans('msg.Contact') }}</a>
                </li>
                <hr class="border-white w-100 m-2">
                <!-- <li class="nav-item mr-3 ml-3">
                    <a class="nav-link text-white links w-100" href="https://lightfinder.buyanylight.com">{{ trans('msg.Sign') }}</a>
                </li> -->
                <!-- <li class="nav-item dropdown mr-3 ml-3">
                    <button class="nav-link dropdown-toggle text-left text-white links btn-black w-100" href="/https://lightfinder.buyanylight.com/buyer/register" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.Register') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">{{ trans('msg.Buyers') }}</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">{{ trans('msg.Sellers') }}</a>
                    </div>
                </li> -->
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown mr-3 ml-3">
                    <span id="nspanvbarDropdownMenuLink" class="nav-link dropdown-toggle  text-left text-white links btn-black w-100" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @switch($locale)
                        @case('kr')
                            Korean
                        @break
                        @default
                            English
                    @endswitch
                    </span>
                 
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="lang/en">
                            English
                        </a>
                        <a class="dropdown-item" href="lang/kr">
                            Korean
                        </a>
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
