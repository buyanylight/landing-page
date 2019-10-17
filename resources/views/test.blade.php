@extends('layouts.main-layout')



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
				<p>Hello , </p>
				<p>Thank you for completing the Know Your Customer (KYC) form.</p>
				<p>We have received the following details:</p>
				<ul>
					<li>Reference ID : </li>
					<li>Name: </li>
					<li>Email: </li>
					<li>Mobile: </li>
					<li>BAL Tokens purchased:  BAL</li>
					<li>Amount Paid: </li>
					<li>Country: </li>
					<li>User verification ID  image: Received</li>
					<li>User selfie verification image: Received</li>
				</ul>
				<p>You will receive your  BAL Tokens very soon. We will send them to the following ETH address: </p>
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