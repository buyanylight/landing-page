@extends('layouts.mobile-layout')

@section('content')
<!-- <div style="position: relative;  z-index: 5">
            Position toasts
    <div style="position: absolute; top: 70px; left:10%; min-width: 300px;">
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
</div> -->
<div class="section14 pt-5 pb-5 all-contents">
	<div class="section14-contents d-flex align-items-center">
		<div class="container text-white">
			<h3><b>BE AN INVESTOR</b></h3>
		</div>
	</div>
	<div class="container pt-3">
			<p>
				<b>BuyAnyLight… IMMENSE GROWTH POTENTIAL AND EXCEPTIONAL INVESTMENT OPPORTUNITIES!</b>
			</p>
			<p>
				BAL has pioneered the innovative sourcing of LED lights and we are set to become one of the most successful commercial platforms in the world.
			</p>
		<p>If you’re considering investing and would like to know more, please call +971 4 8873265 to discuss our hugely exciting investment proposal!</p>
		<div class="pt-3">
		<h3><b>Drop us a message</b></h3>
		<p>Feel free to get in touch with us</p>
			<form method="post" action="/contact-us">
	            {{ csrf_field() }}
	            <div class="row">
	                <div class="col-sm-6">
	                    <div class="form-group">
	                    	<input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" required>
	                    </div>
	                </div>
	                <div class="col-sm-6">
	                	<div class="form-group">
	                    	<input class="form-control" name="email" id="email" type="email" placeholder="Enter email address" required>
	                   	</div>
	                </div>
	                <div class="col-12">
	                    <div class="form-group">
	                     	<input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject"required>
	                    </div>
	                </div>
	                <div class="col-12">
	                    <div class="form-group">
	                    	<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message" spellcheck="false"></textarea required>
	                    </div>
	                </div>
	            </div>
	            <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
	            <div class="form-group mt-3">
	            	<button type="submit" class="btn btn-dark w-100 send-message" disabled="disabled">Send Message</button>
	            </div>
	        </form>
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