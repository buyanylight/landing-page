@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')


@section('content')
<section style="min-height: 100vh">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3>
				<b>
					KYC form
				</b>
			</h3>
			<div class="card mt-3">
				<div class="card-body">
					<div>
						<form action="/kyc-confirm" method="post" enctype="multipart/form-data">
		  					@csrf()
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"><b>Name:</b> </label>
								<div class="col-sm-10">
									<input type="text" name="user_name" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"><b>Email ID:</b> </label>
								<div class="col-sm-10">
									<input type="email" name="email_id" class="form-control" value="{{ $email_id }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"><b>Country:</b> </label>
								<div class="col-sm-10">
									<select name="country" class="form-control">
									@foreach($countries as $country)
										<option value="{{ $country }}"> {{ $country }}</option>
									@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"><b>Upload ID:</b> </label>
								<div class="col-sm-10">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input"  name="user_id" id="validatedCustomFile" required>
		    							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
		 							</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"><b>Upload ID with selfie :</b> </label>
								<div class="col-sm-10">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input" name="user_selfie_id" required>
		    							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
		 							</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button type="submit" class="btn text-white w-100" style="background-color: #510091;"> Submit </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection