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
				<b>{{ trans('msg.investor1') }}</b>
			</h3>
			<p class="text-white">
				<b>{{ trans('msg.investor2') }}</b>
			</p>
		</div>
	</div>
</div>
<div class="container pt-5">
	<p>
    {{ trans('msg.investor3') }}
	</p>
</div>
<div class="container pb-5">
	<h3><b>{{ trans('msg.investor4') }}</b></h3>
	<p>
    {{ trans('msg.investor5') }}
    </p>
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
                                            <div class="inputText">{{ trans('msg.investor6') }}</div>
                                            <input type="text" name="name" class="input">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="inputBox">
                                            <div class="inputText">{{ trans('msg.investor7') }}</div>
                                            <input type="text" name="email" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="inputBox">
                                            <div class="inputText">{{ trans('msg.investor8') }}</div>
                                            <input type="text" name="subject" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="inputBox">
                                            <div class="inputText">{{ trans('msg.investor9') }}</div>
                                            <textarea class="input" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
                                        <input type="submit" class="btn btn-dark w-100 send-message" value="{{ trans('msg.investor10') }}" disabled="disabled">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="col-md-10">
                                    <span class="text-white"><b>BuyAnyLight.com</b></span><br>
                                    <span>Dubai Investment Park 1, <br> Opp. Green Community East, Showroom 10, P.O. BOX 3219 <br> Dubai,  United Arab Emirates</span>
                                </div>
                            </div>
                        </div>
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div class="col-md-10">
                                    <span class="text-white"><b>+971 4 887 3265</b></span><br>
                                    <span>{{ trans('msg.investor11') }}</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div class="col-md-10">
                                    <span  class="text-white"><b>info@buyanylight.com</b></span><br>
                                    <span>{{ trans('msg.investor12') }}</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3>
           <b>
           {!! trans('msg.investor13') !!}
           </b>
        </h3>
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