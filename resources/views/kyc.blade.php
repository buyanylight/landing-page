@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')


@section('content')
<section style="min-height: 100vh">
	<div class="pt-5 mt-5 pb-5 mb-5">
		<div class="container">
			<h3>
				<b>
					 {!! trans('msg.kyc_header') !!}
				</b>
			</h3>
			<div class="row pt-3">
				<div class="col-md-4 col-12 pt-2">
					<div class="card card-body text-center p-2" style="background-color: #7c7ca9; color: white; height: 50px;">
						<small>
							<b>{{ trans('msg.step1')}}</b> <br>
							{{ trans('msg.step1_desc')}}
						</small>
					</div>
				</div>
				<div class="col-md-4 col-12 pt-2">
					<div class="card card-body text-center p-2" style="background-color: #5555A4; color: white; height: 50px;"> 
						<small>
							<b>{{ trans('msg.step2')}}</b><br>
							{{ trans('msg.step2_desc')}}
							
						</small>
					</div>
				</div>
				<div class="col-md-4 col-12 pt-2">
					<div class="card card-body text-center p-2" style="  height: 50px;">
						<small>
							<b>{{ trans('msg.step3')}}</b> <br>
							{{ trans('msg.step3_desc')}}
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
 				{{ trans('msg.kyc_thanks')}}
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>
			<div class="alert alert-success mt-2" role="alert">
				@if(!empty($later_bank))
				{{ trans('msg.later_bank2')}}
 				@else
 				{{ trans('msg.later_bank3')}}
 				@endif
			</div>
			@endif
			<div class="card mt-3">
				<div class="card-body">
					<div>
						<p>
							{{ trans('msg.kyc1')}}
						</p>
						<p>
							{!! trans('msg.kyc2') !!}
						</p>

						<hr>
						<form action="{{ route('thank-you') }}" method="post" enctype="multipart/form-data">
		  					@csrf()
		  					<div class="form-group row">
		  						<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}:</b></label>
		  							<div class="col-sm-9 pt-2">
		  								{{ $user_reference_id }}
		  							</div>
		  					</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}:</b> </label>
								<div class="col-sm-9">
									<input type="text" name="user_name" class="form-control"  value="{{ $name }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}:</b> </label>
								<div class="col-sm-9">
									<input type="email" name="email_id" class="form-control" value="{{ $email_id }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}:</b> </label>
								<div class="col-sm-9">
									<input type="tel" name="number" class="form-control" value="{{ $number }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_address')}}:</b> </label>
								<div class="col-sm-9">
									<input type="text" name="address" class="form-control" placeholder="{{ trans('msg.buyer_address_placeholder')}}" required="required">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.kyc3')}}:</b> </label>
								<div class="col-sm-9">
									<select name="country" class="form-control" required>
										<option disabled selected value="">{{ trans('msg.kyc4')}}</option>
									@foreach($countries as $country)
										<option value="{{ $country }}"> {{ $country }}</option>
									@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row was-validated">
								<label class="col-sm-3 col-form-label">
									<b>{{ trans('msg.kyc5')}}:</b> 
									<span class="" data-toggle="tooltip" data-placement="bottom" title=" {{ trans('msg.kyc5.1')}}" style="font-size: 12px; ">
                                         <i class="fas fa-info-circle"></i>
                                    </span>
								</label>
								<div class="col-sm-9">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input"  name="user_id_pic" id="validatedCustomFile" required>
		    							<label class="custom-file-label" for="validatedCustomFile">{{ trans('msg.kyc11')}}</label>
		    							<small>
		    								<b>
		    									{{ trans('msg.kyc6')}}:
		    								</b>
		    								 JPG, PNG, PDF | 
		    								 <b>
												{{ trans('msg.kyc7')}}:
		    								 </b>
		    								  5 MB
		    							</small>
		 							</div>
								</div>
							</div>
							<div class="form-group row was-validated">
								<label class="col-sm-3 col-form-label">
									<b>{{ trans('msg.kyc8')}}:</b> 
									<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.kyc8.1')}}" style="font-size: 12px; ">
                                         <i class="fas fa-info-circle"></i>
                                    </span><br>
                                    <a data-fancybox href="{{ Util::assetUrl('images/ieo/selfie_verify.png') }}">{{ trans('msg.kyc9')}}</a>
								</label>
								<div class="col-sm-9">
									<div class="custom-file">
		    							<input type="file" class="custom-file-input" name="selfie_id_pic" required>
		    							<label class="custom-file-label" for="validatedCustomFile">{{ trans('msg.kyc11')}}</label>
		    							<small>
		    								<b>
		    									{{ trans('msg.kyc6')}}:
		    								</b>
		    								 JPG, PNG, PDF | 
		    								 <b>
												{{ trans('msg.kyc7')}}:
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
									<button type="submit" class="btn text-white w-100" style="background-color: #510091;"> {{ trans('msg.kyc10')}} </button>
								</div>
							</div>
						</form>
						@if(!empty($later_bank))
						<hr>
						<p class="m-0">
							{!! trans('msg.later_bank1')!!} 
						</p>
						@endif
					</div>
				</div>
			</div>
			<div class="card card-body mt-3">
				{{ trans('msg.sectionbuy_how1')}} <br> <a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/" target="_blank">
					{{ trans('msg.sectionbuy_how2')}}</a>	
			</div>
		</div>
	</div>


</section>

@endsection