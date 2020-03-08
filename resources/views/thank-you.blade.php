@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')

@section('meta')

<meta class="bal-order-id" name="bal-order-id" content="{{ $u_details['user_reference_id'] }}">
<meta class="bal-total-token" name="bal-total-token" content="{{ $u_details['bal_amt'] }}">

@endsection

@section('body-end-javascript')
<script type="text/javascript">
	$('.print-page').click(function(){
		window.print();
	})


		grecaptcha.ready(function() {
		grecaptcha.execute( '{{ env('CAPTCHA_KEY') }}' , { action: 'contact' } )
		   .then(function(token) {
				var recaptchaResponse = document.getElementById('recaptchaResponse2');
				recaptchaResponse.value = token;

				// console.log(token)

				var emailId = "{{ $u_details['email_id'] }}"
				var firstName = "{{ $u_details['user_name'] }}"
				var passWord = "{{ $u_details['password'] }}"
				var grecaptcha_token = token;

				// console.log(grecaptcha_token);
	

				$.ajax({
					type: "POST",
					url: "https://api.buyanylight.com/v1/validate-email",
					data: {email: emailId},
				}).done(function(data){
						console.log('xxxxx' + data)
						if (data == 0) {
							$.ajax({
								type: "POST",
								url: "https://api.buyanylight.com/v1/buyer/register",
								data: {
									first_name: firstName,
									last_name: '  ',
									email: emailId,
									password: passWord,
									confirm_password: passWord,
									main_interest: 'my-home',
									google_token: grecaptcha_token
								},
								success: function(data){
									$('p.account-confirm').html('<p>We have created an BuyAnyLight account for you to check your BAL Tokens. </p><p> Here are the account details:</p><p> <strong>Email: </strong>' + emailId + '<br><strong> Password: </strong>' + passWord +'</p>')
								}
							})
						} else {
							$('p.account-confirm').text('Please use your BuyAnyLight account to check your BAL Tokens.');
							console.log('email exists')
						}
					}).fail(function(data){
						console.log(data + 'ssssss')
					})

			});
	 	});







	// console.log("{{ $u_details['email_id'] }}")


	



</script>

@endsection

@section('content')
<style type="text/css">
	@media print {
    .print-page {
      display: none;
    }

    footer {
    	display: none;
    }
}

</style>
<section style="min-height: 100vh;">
	<div class=" d-flex align-items-center justify-content-center" style="height: 100vh">
		<div>
			<h3 class="text-center">
				<b>
				{{ trans('msg.thanks_header')}}
				</b>
			</h3>
			<div class="pt-4">
				<p>{{ trans('msg.thanks1')}} {{ $u_details['user_name'] }}, </p>
				<p>{{ trans('msg.thanks2')}}</p>
				<p>{{ trans('msg.thanks3')}}</p>
				<ul>
					<li><b>{{ trans('msg.ref_id')}}:</b> {{ $u_details['user_reference_id'] }}</li>
					<li><b>{{ trans('msg.buyer_name')}}:</b> {{ $u_details['user_name'] }}</li>
					<li><b>{{ trans('msg.buyer_email')}}:</b> {{ $u_details['email_id'] }}</li>
					<li><b>{{ trans('msg.buyer_mobile')}}:</b> {{ $u_details['number'] }}</li>
					<li><b>{{ trans('msg.thanks10')}}:</b> {{ $u_details['bal_amt'] }} BAL</li>
					<li><b>{{ trans('msg.thanks11')}}:</b> {{ $u_details['amount'] }}</li>
					<li><b>{{ trans('msg.kyc3')}}:</b> {{ $u_details['country'] }}</li>
					<li><b>{{ trans('msg.buyer_address')}}:</b> {{ $u_details['address'] }}</li>
					<li><b>{{ trans('msg.thanks12')}}:</b> Received</li>
					<li><b>{{ trans('msg.thanks13')}}:</b> Received</li>
					<input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse2" class="recaptchaResponse">
				</ul>
				<p class="account-confirm">
				 <b> {{ trans('msg.thanks4')}}</b>
				</p>
				<p>
					<i>{{ trans('msg.thanks5')}}</i>
				</p>
				<p>
					{{ trans('msg.thanks6', [
						'bal_amt' => $u_details['bal_amt'], 
						'receiver_id' => $u_details['receiver_id']
						])
					}}
				</p>
				<p>
					{!! trans('msg.kyc2') !!}
				</p>

				<p>
					{{ trans('msg.thanks8')}}
				</p>

				<p>{{ trans('msg.thanks7')}}
					<br>
					BuyAnyLight Team
				</p>
				
			</div>
			<button class="btn btn-primary print-page">{{ trans('msg.thanks9')}}</button>
		</div>
	</div>
</section>









@endsection