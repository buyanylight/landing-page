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
					<li>Reference ID : {{ $u_details['user_reference_id'] }}</li>
					<li>Name: {{ $u_details['user_name'] }}</li>
					<li>Email: {{ $u_details['email_id'] }}</li>
					<li>Mobile: {{ $u_details['number'] }}</li>
					<li>BAL Tokens purchased: {{ $u_details['bal_amt'] }} BAL</li>
					<li>Amount Paid: {{ $u_details['amount'] }}</li>
					<li>Country: {{ $u_details['country'] }}</li>
					<li>User verification ID  image: Received</li>
					<li>User selfie verification image: Received</li>
				</ul>
				<p>You will receive your {{ $u_details['bal_amt'] }} BAL Tokens very soon. We will send them to the following ETH address: {{ $u_details['receiver_id'] }}</p>
				<p>
					For any further queries, please contact us at 
					<a href="mailto:invest@buyanylight.com">invest@buyanylight.com</a> or call us at +971 (0) 488 732 65.
				</p>

				<p>
					Thanks again for your trust, support and BAL Token investment during our private sale.
				</p>

				<p>Thank You!
					<br>
					Team BuyAnyLight
				</p>
				
			</div>
			<button class="btn btn-primary print-page">Print this page</button>
		</div>
	</div>
</section>









@endsection