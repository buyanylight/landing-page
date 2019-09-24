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

<style type="text/css">
	.accordion > .card:first-of-type {
     	border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }
</style>

<section style="min-height: 100vh">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3>
				<b>
					Token Purchase Confirmation
				</b>
			</h3>
			<div>	
				<div class="pt-5">
					<b>
						Token Sale Agreement
					</b>
					<div class="pt-3">
						<object data="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" type="application/pdf" style="width: 100%; height: 450px;">
        					<embed src="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" type="application/pdf" />
    					</object>
					</div>
					
				</div>
				<div class="pt-3 pb-5">
					@if( $curr == 'credit')
					<b>
						Choose a Payment Method
					</b>  
					@endif
					@if( $curr == 'credit')
					<div class="row mt-3">
						<div class="col-8">
							<div class="accordion" id="payment">
  								<div class="card">
    								<div class="card-header" id="headingOne">
      									<h2 class="mb-0">
        								<button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#card-accordion" aria-expanded="true" aria-controls="card-accordion" id="credit">
          									Credit Card / Debit Card 
        								</button>
      									</h2>
    								</div>
    								<div id="card-accordion" class="collapse" aria-labelledby="headingOne" data-parent="#payment">
    									<div class="card-body user-card-form" style="display: none;">
			  								<p class="text-success">Your Payment was successful, Thank you.</p>
			  								<div class="row p-3 ">
			  									<div class="form-group w-100">
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
			  													<input type="email" name="email_id" class="form-control" placeholder="Email ID" required="required">
			  												</div>
			  											</div>
			  											<div class="form-group row">
			  												<label class="col-sm-3 col-form-label"> <b>Your ETH Receiver address:</b></label>
			  												<div class="col-sm-9">
			  													<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
			  												</div>
			  											</div>
			  											<div class="form-check">
  															<input class="form-check-input" type="checkbox" value="" required>
  															<label class="form-check-label">
   							 									I have read the token sale agreement
  															</label>
														</div>
			  											<input type="hidden" name="amount" value="{{ $amt }}">
			  											<input type="hidden" name="user_reference_id" value="{{ $user_reference_id}}">
			  											<input type="hidden" name="bal_amt" value="{{ $bal_amt}}">
				  										<button type="submit" class="btn btn-primary mt-2 col-12">
				  											Submit
				  										</button>
			  										</form>
			  									</div>
			  								</div>
    									</div>
    								</div>
  								</div>
 								<div class="card mt-3">
    								<div class="card-header" id="headingTwo">
      									<h2 class="mb-0">
        									<button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#bank-accordion" aria-expanded="false" aria-controls="bank-accordion">
          										Bank transfer
        									</button>
      									</h2>
    								</div>
    								<div id="bank-accordion" class="collapse" aria-labelledby="headingTwo" data-parent="#payment">
      									<div class="card-body">
        								
		  							<div class="row ">
		  								@if($usd == 1)
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
			  											BuyAnyLight-{{ $rand }}<br> 
			  											<small>
			  												<b>(Please include this reference code in your transfer.)</b>
			  		
			  											</small>
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
		  								@else

		  									<div class="col">
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
		  											BuyAnyLight-{{ $rand }}<br> 
			  											<small>
			  												<b>
			  													(Please include this reference code in your transfer)
			  												</b>
			  										</small>
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
		  								@endif
		  							</div>
		  							<div class="mt-3 col-12">
		  								<button class="btn btn-primary completed-trxn w-100">
		  									I have sent the funds
		  								</button>
		  							</div>
		  							<div style="display: none;" class="user-bank-form">
			  							<hr>
		  								<p class="text-success">Thank you for your payment</p>
			  							<div class="row p-3">
			  								<div class="form-group w-100">
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
			  												<input type="email" name="email_id" class="form-control" placeholder="Email ID" required="required">
			  											</div>
			  										</div>
			  										<div class="form-group row">
			  											<label class="col-sm-3 col-form-label"><b>Your ETH Receiver address:</b></label>
			  											<div class="col-sm-9">
			  												<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
			  											</div>
			  										</div>
			  										<div class="form-check">
  														<input class="form-check-input" type="checkbox" value="" required>
  														<label class="form-check-label">
   							 								I have read the token sale agreement
  														</label>
													</div>
			  										<input type="hidden" name="amount" value="{{ $amt }}">
			  										<input type="hidden" name="reference" value="BuyAnyLight-{{ $rand }}">
			  										<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
			  										<input type="hidden" name="bal_amt" value="{{ $bal_amt }}">
				  									<button type="submit" class="btn btn-primary mt-2 col-12">
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
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									Transaction Details
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<b>
												BAL Tokens:
											</b>
										</div>
										<div class="col">
											{{ $bal_amt }}
										</div>
									</div>
									<div class="row">
										<div class="col">
											<b>
												Amount to be paid:
											</b>
										</div>
										<div class="col">
											{{ $amt }}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
						@elseif ( $curr == 'BTC')
						<div class="row">
							<div class="col-8">
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
				  											BTC Receivers address: 
				  										</b>
				  									</div>
				  									<div class="col-8">
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
				  										<label class="col-sm-3 col-form-label">
				  											<b>Transaction Hash:</b>
				  											<span class="" data-toggle="tooltip" data-placement="bottom" title="A transaction hash or transaction ID is a unique 64 characters identifier that is generated whenever a transaction is executed." style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
				  										</label>
				  										<div class="col-sm-9">
				  											<input type="text" name="transaction_id" class="form-control" required="required" placeholder="Enter Transaction ID" pattern=".{64,}" required title="Please enter the correct address">
				  										</div>
				  									</div>
				  									<div class="form-group row">
				  										<label class="col-sm-3 col-form-label"><b>Your ETH receiver address:</b></label>
				  										<div class="col-sm-9">
				  											<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
				  										</div>
				  									</div>
				  									<div class="form-check">
  														<input class="form-check-input" type="checkbox" value="" required>
  														<label class="form-check-label">
   							 								I have read the token sale agreement
  														</label>
													</div>
				  									<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
				  									<input type="hidden" name="amount" value="{{ $user_reference_id }}">
				  									<input type="hidden" name="bal_amt" value="{{ $bal_amt }}">
				  									<button type="submit" class="btn  btn-primary mt-2 col-12">
					  									Submit
					  								</button>
					  							</form>
				  							</div>
				  						</div>
				  					</div>
								</div>
								<div class="card card-body mt-3">
			  						How to add a Custom ERC20 Token / our BAL Token to your Ethereum wallet? <br>
			  						<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">Check out this easy step-by-step guide</a>
			  					</div>
								
							</div>
							<div class="col-4">
								<div class="card">
									<div class="card-header">
										Transaction details
									</div>
									<div class="card-body">
										<div class="row">
				  							<div class="col-8">
				  								<b>
				  									BAL Tokens:
				  								</b>
				  							</div>
				  							<div class="col">
				  									{{ $bal_amt }}
				  								<input type="hidden" name="amount" value="{{ $bal_amt }}">
				  							</div>
				  						</div>
				  						<div class="row">
				  							<div class="col-8">
				  								<b>
				  									Amount to be paid (BTC):
				  								</b>
				  							</div>
				  							<div class="col">
				  									{{ $amt }}
				  								<input type="hidden" name="amount" value="{{ $amt }}">
				  							</div>
				  						</div>
									</div>
									
								</div>
							</div>
						</div>

							@else
							<div class="pt-4">
								<div class="row">
									<div class="col-8">
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
		  											Our ETH Receivers address:
		  										</b>
		  									</div>
		  									<div class="col-8">
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
		  										<label class="col-sm-3 col-form-label">
		  											<b>Transaction Hash: 
		  												<span class="" data-toggle="tooltip" data-placement="bottom" title="A transaction hash or transaction ID is a unique 66 characters identifier that is generated whenever a transaction is executed." style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
		  											</b>
		  										</label>
		  										<div class="col-sm-9">
		  											<input type="text" name="transaction_id" class="form-control" placeholder="Enter Transaction ID" pattern=".{66,}" required title="Please enter the correct transaction hash or transaction ID">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>Your ETH receiver address:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="receiver_id" class="form-control" placeholder="To receive your BAL Tokens, please provide your receiver address" pattern=".{40,42}" required title="Please enter the correct address">
		  										</div>
		  									</div>
		  									<div class="form-check pb-3">
  												<input class="form-check-input" type="checkbox" value="" required>
  												<label class="form-check-label">
   							 						I have read the token sale agreement
  												</label>
											</div>
		  									<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
		  									<input type="hidden" name="bal_amt" value="{{ $bal_amt }}">

		  									<input type="hidden" name="amount" value="{{ $amt }} ETH">
		  									<button type="submit" class="btn  btn-primary mt-2 col-12">
			  									Submit
			  								</button>
			  							</form>
			  						</div>
			  					</div>
			  					<div class="card card-body mt-3">
			  						How to add a Custom ERC20 Token / our BAL Token to your Ethereum wallet? <br>
			  						<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">Check out this easy step-by-step guide</a>
			  					</div>
										
									</div>
									<div class="col-4">
										<div class="card">
											<div class="card-header">
												Transaction details
											</div>
											<div class="card-body">
												<div class="row">
		  											<div class="col-8">
		  												<b>
		  													BAL Tokens:
		  												</b>
		  											</div>
		  											<div class="col">
		  												{{ $bal_amt }}
		  												<input type="hidden" name="amount" value="{{ $amt }}">
		  											</div>
		  										</div>
												<div class="row">
		  											<div class="col-8">
		  												<b>
		  													Amount to be paid (ETH):
		  												</b>
		  											</div>
		  											<div class="col">
		  												{{ $amt }}
		  												<input type="hidden" name="amount" value="{{ $amt }}">
		  											</div>
		  										</div>
											</div>
										</div>
									</div>
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