@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')


@section('content')
<section style="min-height: 100vh">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3>
				<b>
					Know <span style="background-color: #510091;">Your</span> Customer (KYC)
				</b>
			</h3>
			<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert" style="margin-bottom: 0px;">
 				An email has been sent to you, if not received please check your spam or junk folder.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>
			<div class="alert alert-success mt-2" role="alert" >
 				Thank you for your payment!
			</div>
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
						<form action="/kyc-confirm" method="post" enctype="multipart/form-data">
		  					@csrf()
		  					<div class="form-group row">
		  						<label class="col-sm-3 col-form-label"><b>Reference ID:</b></label>
		  							<div class="col-sm-9 p-1">
		  								{{$user_reference_id }}
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
		    							<input type="file" class="custom-file-input"  name="user_id" id="validatedCustomFile" required>
		    							<label class="custom-file-label" for="validatedCustomFile">Choose file</label>
		    							<div class="invalid-feedback">Please upload an Image</div>
                    					<div class="valid-feedback">Image has been uploaded</div>
		 							</div>
								</div>
							</div>
							<div class="form-group row was-validated">
								<label class="col-sm-3 col-form-label">
									<b>Upload selfie with ID :</b> 
									<span class="" data-toggle="tooltip" data-placement="bottom" title="The selfie should include a selfie with the ID, a piece of paper containing 'BAL TOKEN', date, and your signature." style="font-size: 12px; ">
                                         <i class="fas fa-info-circle"></i>
                                    </span>
								</label>
								<div class="col-sm-9">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input" name="user_selfie_id" required>
		    							<label class="custom-file-label" for="validatedCustomFile">Choose file</label>
		    							<div class="invalid-feedback">Please upload an Image</div>
                    					<div class="valid-feedback">Image has been uploaded</div>
		 							</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
									<button type="submit" class="btn text-white w-100" style="background-color: #510091;"> Submit </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="card card-body mt-3">
				How to add a Custom ERC20 Token /our BAL Token to your Ethereum wallet? <br> <a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">
				Check out this easy step-by-step guide</a>	
			</div>
		</div>
	</div>
</section>

@endsection