@extends('layouts.main-layout')

@section('meta-title')
<meta name="title" content="BuyAnyLight | Be an investor">
<meta property="og:title" content=" BuyAnyLight | Be an investor">
@endsection

@section('meta-description')
<meta name="description" content="BAL: immense growth potential and exceptional investment opportunities! If you’re considering investing and would like to know more, Contact us." />
<meta property="og:description" content="BAL: immense growth potential and exceptional investment opportunities! If you’re considering investing and would like to know more, Contact us.">
@endsection


@section('content')
<div style="position: relative; z-index: 5">
            <!-- Position toasts -->
    <div style="position: absolute; top: 70px; right: 55px;">
        <div class="toast" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto">
                    <img src="{{ Util::assetUrl('images/logo-black-icon.png') }}" width="25">
                    BuyAnyLight
                </strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            @if(session('success'))
            <div class="toast-body">
                <b>Thanks for being awesome!</b>
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
<div class="investor pt-5">
	<div class="intro-investor d-flex align-items-center">
		<div class="container">
			<h3 class="text-white">
				<b>Be an investor</b>
			</h3>
			<p class="text-white">
				<b>BAL: immense growth potential and exceptional investment opportunities!</b>
			</p>
		</div>
	</div>
</div>
<div class="container pt-5">
	<p>
		BAL has pioneered the innovative sourcing of LED lights and we intend to become one of the most successful commercial platforms in the world.
	</p>
</div>
<div class="container pb-5">
	<h3><b>Drop us a message</b></h3>
	<p>If you’re considering investing and would like to know more, please get in touch to discuss our hugely exciting investment proposal.</p>
	<div class="contact-form pt-3 pb-5">
			<div class="container contact-form-container bg-black"> 
                <div class="row">
                    <div class="col-md-8 bg-white border border-dark">
                        <div class="formBox ">
                            <form method="post" action="/contact-us">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="inputBox ">
                                            <div class="inputText">Name</div>
                                            <input type="text" name="name" class="input">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="inputBox">
                                            <div class="inputText">Email</div>
                                            <input type="text" name="email" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="inputBox">
                                            <div class="inputText">Subject</div>
                                            <input type="text" name="subject" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="inputBox">
                                            <div class="inputText">Message</div>
                                            <textarea class="input" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
                                        <input type="submit" class="btn btn-dark w-100 send-message" value="Send Message" disabled="disabled">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-map-marker-alt text-BAL"></i>
                                </div>
                                <div class="col-md-10">
                                    <span class="text-BAL"><b>BuyAnyLight.com</b></span><br>
                                    <span>Dubai Investment Park 1, <br> Opp. Green Community East, Showroom 10, P.O. BOX 3219 <br> Dubai,  United Arab Emirates</span>
                                </div>
                            </div>
                        </div>
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-phone text-BAL"></i>
                                </div>
                                <div class="col-md-10">
                                    <span class="text-BAL"><b>+971 4 887 3265</b></span><br>
                                    <span>Mon to Fri 9am to 6pm</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-envelope text-BAL"></i>
                                </div>
                                <div class="col-md-10">
                                    <span  class="text-BAL"><b>info@buyanylight.com</b></span><br>
                                    <span>Send us your query anytime</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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