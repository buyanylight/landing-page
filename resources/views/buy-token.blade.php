@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')

@section('body-end-javascript')

<script type="text/javascript" src="https://www.foloosi.com/js/foloosipay.v2.js"></script>
					@if( $curr == 'credit')

<script type="text/javascript">
    var options = {
        "reference_token" : "{{ $response }}", //which is get from step2
        "merchant_key" : "test_$2y$10$.0TFlqFxM7y.3GoHkDIqWeO-2bT2eBz8t86PVUkHwH9zMghDm5PLi"
    }

    console.log( "{{ $response }}" )
    var fp1 = new Foloosipay(options);

    $('#credit').click(function() {
    	fp1.open();
    })



   foloosiHandler(response, function (e) {
   if(e.data.status == 'success'){
      console.log(e.data.status);
      console.log(e.data.data.transaction_no);
   }
   if(e.data.status == 'error'){
      //responde success code
      console.log(e.data.status);
      console.log(e.data.data.payment_status);
   }

   jQuery('a').click( function(e) {
    		jQuery('.collapse').collapse('hide');
		});
});
</script>

@else

 @endif
@endsection



@section('content')
<section style="min-height: 100vh">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3>
				<b>
					Token Purchase Confirmation
				</b>
			</h3>
			<div>
				@if( $curr == 'credit')
				<b>
					Choose a Payment Method
				</b>  
				@endif
				@if( $curr == 'credit')
				<div class="card-deck" id="payment">
					<div class="card" id="credit">
						<a class="text-center btn" data-toggle="collapse" href="#card" role="button" aria-expanded="false" aria-controls="card" data-parent="#payment" >
							<div class="card-body">
								<h2>
									<span style="color: #192061">
										<i class="fab fa-cc-visa"></i>
									</span>
									|
									<span style="color: #192061">
										<i class="fab fa-cc-mastercard"></i>
									</span>
									|
									<span style="color: #192061">
										<i class="fab fa-cc-amex"></i>
									</span>
								</h2>
								Credit Card
							</div>
						</a>
					</div>
					<div class="card">
						<a class="text-center btn" data-toggle="collapse" href="#bank" role="button" aria-expanded="false" aria-controls="bank"  data-parent="#payment">
							<div class="card-body">
								<h2>
									<i class="fas fa-exchange-alt"></i>
								</h2>
								Bank Transfer
							</div>
						</a>
					</div>
				</div>
				<div class="accordion-group pt-3">
					<div class="collapse" id="card">
	  					<div class="card">
	  						<div class="card-body">
	  							<b>
	    							Payment Gateway
	  							</b>
	  						</div>
	  					</div>
					</div>
					<div class="collapse" id="bank">
	  					<div class="card">
	  						<div class="card-body">
	  							<div class="card-title">
		  							<b>
		    							Bank Transfer
		  							</b>
	  							</div>
	  							<div class="row">
	  								<div class="col-6">
	  									<h3>
	  										USD account
	  									</h3>
	  									<table class="mt-3">
	  										<tr>
	  											<td style="width: 150px;">
	  												<b>
	  													Account Holder:
	  												</b>
	  											</td>
	  											<td>
	  												Ms Dotcom Ventures FZE
	  											</td>
	  										</tr>
	  										<tr style="vertical-align: text-top; width: 150px;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Holder Address:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												UAQ Free Trade Zone <br>
	  												P.O. Box 7073 <br>
	  												Umm Al Quwain<br>
	  												United Arab Emirates
	  											</td>
	  										</tr>
	  										<tr style="width: 150px;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Account Number:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												1025511569802
	  											</td>
	  										</tr>
	  										<tr style="width: 150px;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													IBAN:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												AE340260001025511569802
	  											</td>
	  										</tr>
	  										<tr style="width: 150px;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													SWIFT/BIC:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												EBILAEADJAZ
	  											</td>
	  										</tr>
	  										<tr style="width: 150px;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Reference  										
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												BuyAnyLight
	  											</td>
	  										</tr>
	  										<tr style="vertical-align: text-top; width: 150px;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Bank Address:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												Emirates NBD <br>
	  												Jabal Ali Branch <br>
	  												Dubai, United Arab Emirates
	  											</td>
	  										</tr>
	  									</table>
	  								</div>
	  								<div class="col-6">
	  									<h3>
	  										EUR account
	  									</h3>
	  									<table class="mt-3">
	  										<tr>
	  											<td style="width: 150px;">
	  												<b>
	  													Account Holder:
	  												</b>
	  											</td>
	  											<td>
	  												Ms Dotcom Ventures FZE
	  											</td>
	  										</tr>
	  										<tr style="vertical-align: text-top; ">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Holder Address:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												UAQ Free Trade Zone <br>
	  												P.O. Box 7073 <br>
	  												Umm Al Quwain<br>
	  												United Arab Emirates
	  											</td>
	  										</tr>
	  										<tr>
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Account Number:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												1025511569803
	  											</td>
	  										</tr>
	  										<tr>
	  											<td style="padding-top: 10px;">
	  												<b>
	  													IBAN:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												AE070260001025511569803
	  											</td>
	  										</tr>
	  										<tr>
	  											<td style="padding-top: 10px;">
	  												<b>
	  													SWIFT/BIC:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												EBILAEADJAZ
	  											</td>
	  										</tr>
	  										<tr>
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Reference  										
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												BuyAnyLight
	  											</td>
	  										</tr>
	  										<tr style="vertical-align: text-top;">
	  											<td style="padding-top: 10px;">
	  												<b>
	  													Bank Address:
	  												</b>
	  											</td>
	  											<td style="padding-top: 10px;">
	  												Emirates NBD <br>
	  												Jabal Ali Branch <br>
	  												Dubai, United Arab Emirates
	  											</td>
	  										</tr>
	  									</table>
	  								</div>
	  							</div>
	  							<div class="row p-3">
	  								<div class="form-group w-100">
	  									<form action="/kyc_card" method="post" enctype="multipart/form-data">
	  										@csrf()
	  										<label>Your ETH Receiver ID</label>
	  										<input type="type" name="receiver_id" class="form-control" placeholder="Your receiver ID" required="required">
		  									<button type="submit" class="btn btn-sm btn-primary mt-2">
		  										Submit
		  									</button>
	  									</form>
	  								</div>
	  							</div>
	  						</div>
	  					</div>
					</div>
				</div>
					@elseif ( $curr == 'BTC')
					<div class="d-flex align-items-center">
						<div class="card w-100">
	  						<div class="card-body">
	  							<div class="card-title">
		  							<b>
		    							Bitcoin Transaction
		  							</b>
		  							<br>
		  							<small>
	  									Sending coin or token other than BTC to this address may result in the loss of your deposit.
	  								</small>
	  								<table class="mt-3">
	  									<tr>
	  										<td>
	  											<b>
	  												Amount to be paid (BTC):
	  											</b>
	  										</td>
	  										<td>
	  											{{ $amt }}
	  											<input type="hidden" name="amount" value="{{ $amt }}">
	  										</td>
	  									</tr>
	  									<tr>
	  										<td style="width: 190px; padding-top: 10px; padding-bottom: 10px;">
	  											<b>
	  												BTC Receivers address: 
	  											</b>
	  										</td>
	  										<td>
	  											3Kbn178ZEKmuGCrTjL1yUWF2jW8FvxNfGb
	  										</td>
	  									</tr>
	  									<form action="/kyc" method="post" enctype="multipart/form-data">
		  								@csrf()
		  								<tr style="border-top: 1px solid black;">
		  									<td style="vertical-align: text-top; padding-top: 10px;">
		  										<b>Email Id:</b>
		  									</td>
		  									<td style="padding-top: 10px;">
		  										<input type="email" name="email_id" class="form-control" placeholder="Email ID" required="required">
		  									</td>
		  								</tr>
		  								<tr style="border-top: 1px solid black;" >
		  									<td style="vertical-align: text-top; padding-top: 10px;">
		  										<b>
		  											Transaction ID: 
		  										</b>
		  									</td>
		  									<td style="padding-top: 10px;">
		  										<input type="type" name="transaction_id" class="form-control" placeholder="Transaction ID" required="required">
		  									</td>
		  								</tr>
		  								<tr>
		  									<td style="vertical-align: text-top; padding-top: 10px;">
		  										<b>
		  											Your ETH receiver address:
		  										</b>
		  									</td>
		  									<td style="padding-top: 10px;">
		  										<input type="type" name="receiver_id" class="form-control" placeholder="Your receiver ID" required="required">
		  										<input type="hidden" name="amount" value="{{ $amt }} BTC">

		  										<button type="submit" class="btn btn-sm btn-primary mt-2">
		  											Submit
		  										</button>
		  									</td>
		  								</tr>
		  								</form>
	  								</table>
	  							</div>
	  						</div>
	  					</div>
					</div>
						@else
						<div class="pt-4">
							<div class="card w-100">
		  						<div class="card-body">
		  							<b>
		    							Ethereum Transaction
		  							</b>
		  							<br>
		  							<small>
		  								Sending coin or token other than ETH to this address may result in the loss of your deposit.
		  							</small>
		  							<table class="mt-3 w-100">
		  								<tr>
		  									<td>
		  										<b>
		  											Amount to be paid (ETH):
		  										</b>
		  									</td>
		  									<td>
		  										{{ $amt }}
		  									</td>

		  								</tr>
		  								<tr>
		  									<td style="width: 200px; padding-top:10px; padding-bottom:10px; vertical-align: text-top;">
		  										<b>
		  											Our ETH Receivers address:
		  										</b>
		  									</td>
		  									<td style="padding-bottom: 10px; padding-top: 10px;">
		  										0xbF48C5D01832D4974CA394F156308fe01aa3BBB0
		  									</td>
		  								</tr>
		  								<form action="/kyc" method="post" enctype="multipart/form-data">
		  								@csrf()
		  								<tr style="border-top: 1px solid black;">
		  									<td style="vertical-align: text-top; padding-top: 10px;">
		  										<b>Email Id:</b>
		  									</td>
		  									<td style="padding-top: 10px;">
		  										<input type="type" name="email_id" class="form-control" placeholder="Email ID" required="required">
		  									</td>
		  								</tr>
		  								<tr>
		  									<td style="vertical-align: text-top; padding-top: 10px;"> 
		  										<b>
		  											Transaction ID: 
		  										</b>
		  									</td>
		  									<td style="padding-top: 10px;">
		  										<input type="type" name="transaction_id" class="form-control" placeholder="Transaction ID" required="required">
		  									</td>
		  								</tr>
		  								<tr>
		  									<td style="vertical-align: text-top; padding-top: 10px;">
		  										<b>
		  											Your ETH receiver address:
		  										</b>
		  									</td>
		  									<td style="padding-top: 10px;">
		  										<input type="type" name="receiver_id" class="form-control" placeholder="Your receiver ID" required="required">
		  										<input type="hidden" name="amount" value="{{ $amt }} ETH">
		  										<button type="submit" class="btn btn-sm btn-primary mt-2">
		  											Submit
		  										</button>
		  									</td>
		  								</tr>
		  								</form>
		  							</table>
		  						</div>
		  					</div>
						</div>
					@endif
			</div>
		</div>
	</div>
</section>
@endsection