<div class="fixed-top">
    
<nav class="main-navbar navbar navbar-expand-lg navbar-dark bg-black">
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
                    <a class="nav-link text-white links" href="{{ route('home') }}">{{ trans('msg.Home') }}</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('home') }}#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.About') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('home') }}#ninety">{{ trans('msg.How') }}</a>
                        <a class="dropdown-item" href="{{ route('home') }}#about">{{ trans('msg.About_bal') }}</a>
                        <a class="dropdown-item" href="{{ route('home') }}#why-bal">{{ trans('msg.Why') }}</a>
                        <a class="dropdown-item" href="{{ route('home') }}#all-packages">{{ trans('msg.Packages') }}</a>
                        <a class="dropdown-item" href="{{ route('home') }}#package">{{ trans('msg.Summary') }}</a>
                        <a class="dropdown-item" href="{{ route('home') }}#addons">{{ trans('msg.Add_ons') }}</a>
                    </div>
                </li>
                <!-- <li class="nav-item dropdown mr-3">
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
                </li> -->
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
                    <a class="nav-link text-white links" href="{{ route('ieo') }}" target="_blank">{{ trans('msg.IEO') }}</a>
                </li>
                 <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('investor') }}" target="_blank">{{ trans('msg.Investors') }}</a>
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
                 <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.Media') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://medium.com/buyanylight" target="_blank">{{ trans('msg.News') }}</a>
                        <a class="dropdown-item" href="https://blog.buyanylight.com" target="_blank">{{ trans('msg.Blog') }}</a>
                        <a class="dropdown-item" href="{{ route('downloads') }}">{{ trans('msg.Downloads') }}</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="{{ route('contact') }}">{{ trans('msg.Contact') }}</a>
                </li>
                <!-- <li class="nav-item mr-3">
                    <a class="nav-link text-white links" href="https://lightfinder.buyanylight.com">{{ trans('msg.Sign') }}</a>
                </li> -->
                <!-- <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle text-white links" href="{{ route('seller') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('msg.Register') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/buyer/register">{{ trans('msg.Buyers') }}</a>
                        <a class="dropdown-item" href="https://lightfinder.buyanylight.com/supplier/register">{{ trans('msg.Sellers') }}</a>
                    </div>
                </li> -->
                @if(\Request::is('buy-token') || \Request::is('kyc') || \Request::is('kyc-form') || \Request::is('thank-you'))
                @else
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">
                    <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle text-white links" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @switch($locale)
                        @case('kr')
                            Korean
                        @break
                        @default
                            English
                    @endswitch <span class="caret"></span>
                    </a>
                 
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="lang/en">
                            English
                        </a>
                        <a class="dropdown-item" href="lang/kr">
                            Korean
                        </a>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@if(\Request::is('myhome'))
    <nav class="promo-home-navbar navbar navbar-expand-lg pt-3 pb-3 navbar-dark bg-danger text-white">
        <div class="row w-100">
            <div class="col-md-6 d-flex align-items-center justify-content-end">
               <b> Sign up now to save $949 for your first project!</b>
            </div>
            <div class="col-md-6">
                <a href="#interested" class="btn btn-light btn-outline-danger">Get This Deal Now!</a>    
            </div>
        </div> 
    </nav>
@endif

@if(\Request::is('mytower'))
    <nav class="promo-tower-navbar navbar navbar-expand-lg pt-3 pb-3 navbar-dark bg-danger text-white"> 
        <div class="row w-100">
            <div class="col-md-6 d-flex align-items-center justify-content-end">
               <b> Sign up now to save $1949 for your first project! </b>
            </div>
            <div class="col-md-6">
                <a href="#interested" class="btn btn-light text-danger">Get This Deal Now!</a>    
            </div>
        </div>
    </nav>
@endif
</div>


