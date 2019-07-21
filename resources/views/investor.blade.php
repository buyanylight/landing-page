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
    <div style="position: absolute; top: 70px; right: 55px; min-width: 300px;">
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
<div class="section15">
	<div class="section15-contents">
		<div class="section15-banner d-flex align-items-center">
			<div class="container text-white">
				<h3><b>Be An Investor</b></h3>
				<p>
					<b>BAL: immense growth potential and exceptional investment opportunities!</b>
				</p>
				<p>
					BAL has pioneered the innovative sourcing of LED lights and we intend to become one of the most successful commercial platforms in the world.
				</p>
			</div>
		</div>
		<div class="container pt-5 pb-5">


			<h3><b>Drop us a message</b></h3>
			<p>If you’re considering investing and would like to know more, please get in touch to discuss our hugely exciting investment proposal.</p>
			<div>
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
	            		<button type="submit" id="send-message" class="btn btn-dark w-100 send-message" disabled="disabled">Send Message</button>
	            	</div>
	       		</form>
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