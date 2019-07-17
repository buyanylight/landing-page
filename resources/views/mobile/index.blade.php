@extends('layouts.mobile-layout')

@section('content')

<div style="position: relative;  z-index: 5">
            <!-- Position toasts -->
    <div style="position: absolute; top: 70px; left:10%; min-width: 300px;">
        <div class="toast" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto">
                    <img src="{{ asset('images/logo-black-icon.png') }}" width="25">
                    BuyAnyLight
                </strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            @if(session('success'))
            <div class="toast-body">
                <b>Thanks for being awesome</b>
                {!! session('success') !!}
            </div>
            @else
            <div class="toast-body">
                {!! session('danger') !!}
            </div>
            @endif
        </div>
    </div>    
</div>
<div class="">
	<div class="section1">
		<div class="h-100 d-flex align-items-center justify-content-center container text-white">
			<div class="w-100 text-center">
				<h1 class="header-phrase"><b>SOURCING REINVENTED</b></h1>
				<p class="header-sentence">The global marketplace for LED Lighting</p>
        		<div class="container text-center">
                    <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-dark header-link">Start your free trial today</a>
        		</div>
                <div class="container text-center pt-2">
                    <a data-fancybox  href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="btn btn-dark header-link fancybox">Watch Video</a>
                </div>
                <div class="container text-center pt-2">
                    <a href="/ieo" class="btn btn-dark header-link">IEO</a>
                </div>
			</div>
		</div>
        <div class="share-icons text-center w-100">
            <div class="row m-0">
                <div class="col-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=buyanylight.com&display=popup" class="one-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <div class="col-4">
                    <a href="whatsapp://send?text=Hey! Check out BuyAnyLight! https://buyanylight.com" class="one-icon">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <div class="col-4">
                    <a href="http://twitter.com/share?text=Hey! Check out BuyAnyLight! https://buyanylight.com" class="one-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
	</div>
	<div class="section2 pt-5 pb-5">
        <div class="container">
            <div class="">
                <div class="card LightFinder">
                    <div class="card-body d-flex align-items-end">
                        <div>
                            <h5 class="text-white"><b>LightFinder</b></h5>
                            <a href="/m/package/#finder" class="btn btn-sm pl-0 text-white">
                                <div class="link-text">
                                    Learn more 
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" pt-3">
                <div class="card MyHome">
                    <div class="card-body d-flex align-items-end">
                        <div>
                            <h5 class="text-white"><b>My Home</b></h5>
                            <a href="/m/package/#home" class="btn btn-sm pl-0 text-white">
                                <div class="link-text">
                                    Learn more 
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" pt-3">
                <div class="card MyTower">
                    <div class="card-body d-flex align-items-end">
                        <div>
                            <h5 class="text-white"><b>My Tower</b></h5>
                            <a href="/m/package/#tower" class="btn btn-sm pl-0 text-white">
                                <div class="link-text">
                                    Learn more 
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="section3 pt-5 pb-5 bg-black text-white" id="about">
        <div class="container text-left">
            <h3 class="">
                <b>
                    ABOUT BAL
                </b>
            </h3>
            <p class="pt-3 m-0">
                Principled, honest and focused, BAL leverages the world’s best suppliers and delivers the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time.
            </p>
            <div class="text-left pt-3">
                <a href="/m/about" class="btn text-white pl-0">
                    <div class="link-text">
                        Explore your benefits
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
            <!-- <div class="text-left">
                <a href="/m/about" class="btn text-white pl-0">
                    <div class="link-text">
                        One pager
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div> -->
        </div>
    </div>
	<div class="section5 pt-5 pb-5" id="works">
		<div class="container">
			<h3 class="text-left">
                <b>
				    LightFinder?
                </b>
			</h3>
			<div class="text-center pt-4">
                <ul class="works-list text-white text-left">
                    <li class="mt-1 bg-black rounded">
                        <div class="d-flex align-items-center list-content">
                            <div class="step-icon d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="step d-inline-block">
                                Enter the product details you're looking for
                            </div>
                        </div>
                    </li>
                    <li class="mt-1 bg-black rounded">
                        <div class="d-flex align-items-center list-content">
                            <div class="step-icon d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class=" step d-inline-block">
                                High speed BAL systems search for ideal suppliers who match your enquiry
                                
                            </div>
                        </div>
                    </li>
                    <li class="mt-1 bg-black rounded">
                        <div class="d-flex align-items-center list-content">
                            <div class="step-icon d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            <div class=" step d-inline-block">
                                Instant automatic quote requests sent to matched suppliers
                            </div>
                        </div>
                    </li>
                    <li class="mt-1 bg-black rounded">
                        <div class="d-flex align-items-center list-content">
                            <div class="step-icon d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class=" step d-inline-block">
                                View your quotes & choose the best
                            </div>
                        </div>
                    </li>
                </ul>
			</div>
            <div class="text-left pt-3">
                <a data-fancybox href="https://www.youtube.com/embed/OBm3CPqiXt8?rel=0&enablejsapi=1" class="btn text-black pl-0">
                    <div class="link-text">
                        Watch video 
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
		</div>
	</div>
	<div class="section6 pt-5 pb-5 bg-black text-white" id="why-bal">
		<div class="container">
			<h3 class="text-left">
                <b>WHY CHOOSE BAL?</b>
            </h3>
			<p class="pt-4 text-left">
				BAL delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time! 
			</p>
            <a href="/m/why-us" class="btn btn-sm pl-0 text-white">
                <div class="link-text">
                    Find out 
                </div>
                &nbsp;
                <div class="link-icon">
                    <i class="fas fa-arrow-right"></i> 
                </div>
            </a>
		</div>
	</div>
</div>
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

</script>
@endsection