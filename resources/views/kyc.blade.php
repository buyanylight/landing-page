@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')


@section('content')
<section style="min-height: 100vh">
	<div class="pt-5 mt-5 pb-5 mb-5">
		<div class="container">
			<h3>
				<b>
					Know <span style="color: #510091;">Your</span> Customer (KYC)
				</b>
			</h3>
			<div class="row pt-3">

					
					<div class="col-md-4 col-12 pt-2">
						<div class="card card-body text-center p-2" style="background-color: #7c7ca9; color: white; height: 50px;">
							<small>
								<b>STEP 1</b> <br>
							Amount of BAL and Currency
							</small>
							
						</div>
					</div>
					<div class="col-md-4 col-12 pt-2 ">
						<div class="card card-body text-center p-2" style="background-color: #7c7ca9; color: white; height: 50px;"> 
							<small>
								<b>STEP 2 </b><br>
							Investor Information and Payment
								
							</small>
							
						</div>
					</div>
					<div class="col-md-4 col-12 pt-2">
						<div class="card card-body text-center p-2" style=" background-color: #5555A4; color: white; height: 50px;">
							<small>
								<b>STEP 3</b> <br>
						 	Know Your Customer (KYC)
							</small>
							
						</div>
					</div>


				</div>
			@if ($errors->any())
    		<div class="alert alert-danger mt-3">
        		<ul class="m-0">
            	@foreach ($errors->all() as $error)
                	<li>{{ $error }}</li>
           		 @endforeach
        		</ul>
    		</div>
    		@else
    		<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert" style="margin-bottom: 0px;">
 				An email has been sent to you, if not received please check your spam or junk folder.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>
			<div class="alert alert-success mt-2" role="alert">
				@if(!empty($later_bank))
 					In order to finish your bank transfer later, all details have been emailed to you.
 				@else
 					Thank you for your payment!
 				@endif
			</div>
			@endif
			<div class="card mt-3">
				<div class="card-body">
					<div>
						<p>
							Please complete the KYC form. You will receive your BAL Tokens soon.
						</p>
						<p>
							For any queries, please contact us at <a href="mailto:invest@buyanylight.com"> invest@buyanylight.com</a> or call us at +971 (0) 488 732 65.
						</p>

						<hr>
						<form action="{{ route('thank-you') }}" method="post" enctype="multipart/form-data">
		  					@csrf()
		  					<div class="form-group row">
		  						<label class="col-sm-3 col-form-label"><b>Reference ID:</b></label>
		  							<div class="col-sm-9 pt-2">
		  								{{ $user_reference_id }}
		  							</div>
		  					</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Name:</b> </label>
								<div class="col-sm-9">
									<input type="text" name="user_name" class="form-control"  placeholder="Full name" value="{{ $name }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Email:</b> </label>
								<div class="col-sm-9">
									<input type="email" name="email_id" class="form-control" value="{{ $email_id }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Mobile:</b> </label>
								<div class="col-sm-9">
									<input type="tel" name="number" class="form-control" value="{{ $number }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Country:</b> </label>
								<div class="col-sm-9">
									<select name="country" class="form-control" required>
										<option disabled selected value="">Select Country</option>
									@foreach($countries as $country)
										<option value="{{ $country }}"> {{ $country }}</option>
									@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row was-validated">
								<label class="col-sm-3 col-form-label">
									<b>Upload ID:</b> 
									<span class="" data-toggle="tooltip" data-placement="bottom" title=" ID card / Passport or Driver's license." style="font-size: 12px; ">
                                         <i class="fas fa-info-circle"></i>
                                    </span>
								</label>
								<div class="col-sm-9">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input"  name="user_id_pic" id="validatedCustomFile" required>
		    							<label class="custom-file-label" for="validatedCustomFile">Choose file</label>
		    							<small>
		    								<b>
		    									Files:
		    								</b>
		    								 JPG, PNG, PDF | 
		    								 <b>
		    								 	Max-size:
		    								 </b>
		    								  5 MB
		    							</small>
		 							</div>
								</div>
							</div>
							<div class="form-group row was-validated">
								<label class="col-sm-3 col-form-label">
									<b>Upload selfie with ID :</b> 
									<span class="" data-toggle="tooltip" data-placement="bottom" title="The selfie should include a selfie with the ID, a piece of paper containing 'BAL TOKEN', date, and your signature." style="font-size: 12px; ">
                                         <i class="fas fa-info-circle"></i>
                                    </span><br>
                                    <a data-fancybox href="{{ Util::assetUrl('images/ieo/selfie_verify.png') }}">Check example</a>
								</label>
								<div class="col-sm-9">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input" name="selfie_id_pic" required>
		    							<label class="custom-file-label" for="validatedCustomFile">Choose file</label>
		    							<small>
		    								<b>
		    									Files:
		    								</b>
		    								 JPG, PNG, PDF | 
		    								 <b>
		    								 	Max-size:
		    								 </b>
		    								  5 MB
		    							</small>
		 							</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="hidden" name="user_reference_id" value="{{$user_reference_id }}">
									<input type="hidden" name="receiver_id" value="{{ $receiver_id }}">
									<input type="hidden" name="bal_amt" value="{{$bal_amt}}">
									<input type="hidden" name="amount" value="{{$amount}}">
									@if(!empty($transaction_id))
										<input type="hidden" name="transaction_id" value="{{ $transaction_id }}">
									@endif
									@if(!empty($reference))
										<input type="hidden" name="reference" value="{{ $reference}}">
										@if(!empty($later_bank))
											<input type="hidden" name="later_bank" value="1">
										@endif
									@endif
									<button type="submit" class="btn text-white w-100" style="background-color: #510091;"> Submit and Complete the process </button>
								</div>
							</div>
						</form>
						@if(!empty($later_bank))
						<hr>
						<p class="m-0">
							For our verification and security purposes, we are requesting your bank wire slip copy to be emailed to <a href="mailto:invest@buyanylight.com">invest@buyanylight.com</a> so we can verify it and confirm the receipt of your deposits immediately.
						</p>
						@endif
					</div>
				</div>
			</div>
			<div class="card card-body mt-3">
				How to add a Custom ERC20 Token /our BAL Token to your Ethereum wallet? <br> <a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/" target="_blank">
				Check out this easy step-by-step guide</a>	
			</div>
		</div>
	</div>


</section>

@endsection