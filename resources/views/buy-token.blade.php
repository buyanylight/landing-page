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
   		fp1.close();
   		$(".user-card-form").show();
   }
   if(e.data.status == 'error'){
      	console.log(e.data.status);
      	console.log(e.data.data.payment_status);
   }

   jQuery('a').click( function(e) {
    		jQuery('.collapse').collapse('hide');
		});


   $('.completed-trxn').click(function() {
   		$('.user-bank-form').show();
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
				<div class="pt-5 pb-5">
					@if( $curr == 'credit')
					<b>
						Choose a Payment Method
					</b>  
					@endif
					@if( $curr == 'credit')
					<div class="card-deck pt-3" id="payment">
						<div class="card">
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
									Credit Card / Debit Card
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
		  						<div class="card-header">
		  							<b>
		    							Payment Gateway
		  							</b>
		  						</div>
		  						<div class="card-body">
		  							<div class="row">
		  								<div class="col-2">
		  									<b>
		  										Amount to be paid:
		  									</b>
		  								</div>
		  								<div class="col-10">
		  									{{ $amt }}
		  								</div>
		  							</div>
		  							<div class="mt-2">
			  							<button class="btn btn-primary" id="credit">
			  								Pay with Credit Card / Debit Card
			  							</button>
		  							</div>
		  							<div class="user-card-form" style="display: none;">
			  							<hr>
			  							<p class="text-success">Your Payment was successful, Thank you.</p>
			  							<div class="row p-3 ">
			  								<div class="form-group w-100">
			  									<form action="/kyc" method="post" enctype="multipart/form-data">
			  										@csrf()
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label">Name:</label>
			  											<div class="col-sm-9">
			  												<input type="text" name="name" class="form-control" placeholder="Full name" required="required">
			  											</div>
			  										</div>
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label">Email:</label>
			  											<div class="col-sm-9">
			  												<input type="email" name="email_id" class="form-control" placeholder="Email ID" required="required">
			  											</div>
			  										</div>
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label"> Your ETH Receiver address:</label>
			  											<div class="col-sm-9">
			  												<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
			  											</div>
			  										</div>
			  										<input type="hidden" name="amount" value="{{ $amt }}">
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
						<div class="collapse" id="bank">
		  					<div class="card" style="{{ $agent->isMobile() ? 'padding-bottom: 10px;' : ''  }}">
		  						<div class="card-header">
			  						<b>
			    						Bank Transfer
			  						</b>
		  						</div>
		  						<div class="card-body">
		  							<div class="row">
		  								<div class="col">
		  									<b>
		  										Amount to be paid:
		  									</b>
		  								</div>
		  								<div class="col-10">
		  									{{ $amt }}
		  								</div>
		  							</div>
		  							<div class="row mt-3">
		  								<div class="col">
		  									<b>
		  										<u>USD account</u>
		  									</b>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Account Holder:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											Ms Dotcom Ventures FZE
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Holder Address:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											UAQ Free Trade Zone <br>
		  											P.O. Box 7073 <br>
		  											Umm Al Quwain<br>
		  											United Arab Emirates
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Account Number:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											1025511569802
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												IBAN:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											AE340260001025511569802
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												SWIFT/BIC:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											EBILAEADJAZ
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Reference:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											BuyAnyLight-{{ $rand }}
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Bank Address:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											Emirates NBD <br>
		  											Jabal Ali Branch <br>
		  											Dubai, United Arab Emirates
		  										</div>
		  									</div>
		  								</div>

		  								<div class="col" style="{{ $agent->isMobile() ? 'border-top: 1px solid; padding-top: 10px;' : ''  }}">
		  									<b>
		  										<u>EUR account</u>
		  									</b>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Account Holder:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											Ms Dotcom Ventures FZE
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Holder Address:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											UAQ Free Trade Zone <br>
		  											P.O. Box 7073 <br>
		  											Umm Al Quwain<br>
		  											United Arab Emirates
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Account Number:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											1025511569803
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												IBAN:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											AE070260001025511569803
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												SWIFT/BIC:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											EBILAEADJAZ
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Reference:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											BuyAnyLight-{{ $rand }}
		  										</div>
		  									</div>
		  									<div class="row pt-3">
		  										<div class="col-4">
		  											<b>
		  												Bank Address:
		  											</b>
		  										</div>
		  										<div class="col-8">
		  											Emirates NBD <br>
		  											Jabal Ali Branch <br>
		  											Dubai, United Arab Emirates
		  										</div>
		  									</div>
		  								</div>
		  							</div>
		  							<div class="pt-2">
		  								<button class="btn btn-primary completed-trxn">I have completed the Transfer</button>
		  							</div>
		  							<div style="display: none;" class="user-bank-form">
			  							<hr>
		  								<p class="text-success">Thank you for your payment</p>
			  							<div class="row p-3">
			  								<div class="form-group w-100">
			  									<form action="/kyc" method="post" enctype="multipart/form-data">
			  										@csrf()
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label">Name:</label>
			  											<div class="col-sm-9">
			  												<input type="text" name="name" class="form-control" placeholder="Full name" required="required">
			  											</div>
			  										</div>
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label">Email:</label>
			  											<div class="col-sm-9">
			  												<input type="email" name="email_id" class="form-control" placeholder="Email ID" required="required">
			  											</div>
			  										</div>
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label"> Your ETH Receiver address:</label>
			  											<div class="col-sm-9">
			  												<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
			  											</div>
			  										</div>
			  										<input type="hidden" name="amount" value="{{ $amt }}">
			  										<input type="hidden" name="reference" value="BuyAnyLight-{{ $rand }}">
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
					</div>
						@elseif ( $curr == 'BTC')
						<div class="d-flex align-items-center">
							<div class="card w-100">
		  						<div class="card-header">
				  					<b>
				    					Bitcoin Transaction
				  					</b>
		  						</div>
		  						<div class="card-body">
		  							<div class="card-title">
			  							<small>
		  									Sending coin or token other than BTC to this address may result in the loss of your deposit.
		  								</small>
		  								<div class="row pt-3">
		  									<div class="col">
		  										<b>
		  											Amount to be paid (BTC):
		  										</b>
		  									</div>
		  									<div class="col-9">
		  											{{ $amt }}
		  										<input type="hidden" name="amount" value="{{ $amt }}">
		  									</div>
		  								</div>
		  								<div class="row pt-3">
		  									<div class="col">
		  										<b>
		  											BTC Receivers address: 
		  										</b>
		  									</div>
		  									<div class="col-9">
		  										1Ep8bLyLkwmXGMHKYrFdmRG6SRvC1179nV
		  									</div>
		  								</div>
		  								<hr>
		  								<form action="/kyc" method="post" enctype="multipart/form-data">
			  							@csrf()
			  								<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Name:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="name" class="form-control" placeholder="Full name" required="required">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Email:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="email_id" class="form-control"placeholder="Email" required="required">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Transaction Hash:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="transaction_id" class="form-control" required="required" placeholder="Enter Transaction Hash" pattern=".{64,}" required title="Please enter the correct address">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Your ETH receiver address:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
		  										</div>
		  									</div>
		  									<input type="hidden" name="amount" value="{{ $amt }} BTC">
		  									<button type="submit" class="btn  btn-primary mt-2 col-12">
			  									Submit
			  								</button>
			  							</form>
		  							</div>
		  						</div>
		  					</div>
						</div>
							@else
							<div class="pt-4">
								<div class="card w-100">
									<div class="card-header">
				  						<b>
				    						Ethereum Transaction
				  						</b>
									</div>
			  						<div class="card-body">
			  							<small>
			  								Sending coin or token other than ETH to this address may result in the loss of your deposit.
			  							</small>
			  							<div class="row pt-3">
		  									<div class="col">
		  										<b>
		  											Amount to be paid (ETH):
		  										</b>
		  									</div>
		  									<div class="col-9">
		  											{{ $amt }}
		  										<input type="hidden" name="amount" value="{{ $amt }}">
		  									</div>
		  								</div>
		  								<div class="row pt-3">
		  									<div class="col">
		  										<b>
		  											Our ETH Receivers address:
		  										</b>
		  									</div>
		  									<div class="col-9">
		  										0x0b60500e43d0dd3b92acb681133d66e4f21e81bf
		  									</div>
		  								</div>
		  								<hr>
		  								<form action="/kyc" method="post" enctype="multipart/form-data">
			  								@csrf()
			  								<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Name:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="name" class="form-control" placeholder="Full name" required="required">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Email:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="email_id" class="form-control"placeholder="Email" required="required">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Transaction Hash:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="transaction_id" class="form-control" placeholder="Enter Transaction Hash" pattern=".{66,}" required title="Please enter the correct address">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Your ETH receiver address:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
		  										</div>
		  									</div>
		  									<input type="hidden" name="amount" value="{{ $amt }} ETH">
		  									<button type="submit" class="btn  btn-primary mt-2 col-12">
			  									Submit
			  								</button>
			  							</form>
			  						</div>
			  					</div>
							</div>
						@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endsection