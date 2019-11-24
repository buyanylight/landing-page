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
									$('p.account-confirm').html('<p>We have created an BuyAnyLight account for you to check your BAL Tokens </p><p> Here are the account details:</p><p> <strong>Email: </strong>' + emailId + '<br><strong> Password: </strong>' + passWord +'</p>')
								}
							})
						} else {
							$('p.account-confirm').text('Please use your BuyAnyLight account to check your BAL Tokens');
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
					Your BAL Token Investment Confirmation
				</b>
			</h3>
			<div class="pt-4">
				<p>Hello {{ $u_details['user_name'] }}, </p>
				<p>Thank you for completing the Know Your Customer (KYC) form.</p>
				<p>We have received the following details:</p>
				<ul>
					<li><b>Reference ID:</b> {{ $u_details['user_reference_id'] }}</li>
					<li><b>Name:</b> {{ $u_details['user_name'] }}</li>
					<li><b>Email:</b> {{ $u_details['email_id'] }}</li>
					<li><b>Mobile:</b> {{ $u_details['number'] }}</li>
					<li><b>BAL Tokens purchased:</b> {{ $u_details['bal_amt'] }} BAL</li>
					<li><b>Amount Paid:</b> {{ $u_details['amount'] }}</li>
					<li><b>Country:</b> {{ $u_details['country'] }}</li>
					<li><b>User verification ID image:</b> Received</li>
					<li><b>User selfie verification image:</b> Received</li>
					<input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse2" class="recaptchaResponse">
				</ul>
				<p class="account-confirm">
				 <b> Please wait while we check for your account. </b>
				</p>
				<p>
					<i>In case we face issues with your payment or KYC, we will contact you via Email or Mobile.</i>
				</p>
				<p>
					Once your payment was received and after successful KYC passing, you will receive your {{ $u_details['bal_amt'] }} BAL Tokens into the following ETH address: {{ $u_details['receiver_id'] }}
				</p>
				<p>
					For any further queries, please contact us at 
					<a href="mailto:invest@buyanylight.com">invest@buyanylight.com</a> or call us at +971 (0) 488 732 65.
				</p>

				<p>
					Thanks again for your trust, support and BAL Token investment during our PRE-IEO sale.
				</p>

				<p>Thank You!
					<br>
					BuyAnyLight Team
				</p>
				
			</div>
			<button class="btn btn-primary print-page">Print this page</button>
		</div>
	</div>
</section>









@endsection