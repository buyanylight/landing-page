@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')

@section('body-end-javascript')


@if( $curr == 'credit')

@if ($agent->isMobile())
<script type="text/javascript" src="{{ Util::assetUrl('js/foloosipay.v2-mobile.js')}}"></script>
@else
<script type="text/javascript" src="{{ Util::assetUrl('js/foloosipay.v2.js')}}"></script>
@endif
<script type="text/javascript">
    var options = {
        "reference_token" : "{{ $response }}", //which is get from step2
        "merchant_key" : "{{ env('FOLOOSI_MERCHANT_KEY') }}"
    }

    console.log( "{{ $response }}" )
    var fp1 = new Foloosipay(options);

    $('#credit').click(function() {
    	fp1.open();
    })



   foloosiHandler(response, function (e) {
   if(e.data.status == 'success'){
   		fp1.close();
   		$('#user-detail-form').submit();
   }
   if(e.data.status == 'error'){
      	console.log(e.data.status);
      	console.log(e.data.data.payment_status);
   }

   jQuery('a').click( function(e) {
    		jQuery('.collapse').collapse('hide');
		});




   $(document).ready(function(){

   $('#form-submit').click(function(e){
   		e.stopPropagation()
   		$('#name-div').text($('#fullname').val());
   		$('#email-div').text($('#email').val());
   		$('#eth-div').text($('#eth_address').val());
   		$('#number-div').text($('#number').val());


   		var value = $('#eth_address').val();


   			console.log();

   			if (!(validator.isEmpty($('#fullname').val()))) {
   				console.log('Name-Yess!')
   				$('#name_error').hide();
   			} else {
   				$('#name_error').show();
   			}


   			if (!(validator.isEmpty($('#number').val()))) {
   				console.log('Name-Yess!')
   				$('#number_error').hide();
   			} else {
   				$('#number_error').show();
   			}


   			if (validator.isEmail($('#email').val())) {
   				console.log('Email-Yes!')
   				$('#email_error').hide();
   			} else{
   				$('#email_error').show();
   			}

   			if ($('input#sale_check').is(':checked')) {
   				console.log('Sale-Yes!')
   				$('#sale_error').hide();
   			} else{
   				$('#sale_error').show();
   			}

   			if (validator.isLength($('#eth_address').val(), {min: 42})) {
   				console.log('Eth-Yes!')
   				$('#eth_error').hide();

   			} else{
   				$('#eth_error').show();
   			}


   			if (validator.equals($('#confirm-email').val(), $('#email').val())) {
   				console.log('Confirm-email-yes!')
   				$('#confirm_email_error').hide();

   			} else {

   				console.log('Confirm-email-no!')
   				$('#confirm_email_error').show();
   			}


   		if (!(validator.isEmpty($('#fullname').val())) && 
   			!(validator.isEmpty($('#number').val())) &&
   			validator.isEmail($('#email').val()) && 
   			$('input#sale_check').is(':checked') && 
   			validator.isLength($('#eth_address').val(), {min: 42}) &&
   			validator.equals($('#confirm-email').val(), $('#email').val())
   			) {
   			$('.payment').slideDown();
   			$('.user-form-card').slideUp();
   			$('.user-form-card-info').show();
   			$('.sale-tick').show();

   		}

   		$('.completed-trxn').click(function(){
   			$('#user-detail-form').append('<input type="hidden" name="reference" value="BuyAnyLight-{{ $rand }}">');
   			$('#user-detail-form').submit();

   		})

        $('.later-trxn').click(function(){
            $('#user-detail-form').append('<input type="hidden" name="reference" value="BuyAnyLight-{{ $rand }}">');
            $('#user-detail-form').append('<input type="hidden" name="later_bank" value="1">');
            $('#user-detail-form').submit();

        })


   		   $('#investor-edit').click(function(){
   			$('.payment').slideUp();

   		$('.user-form-card').slideDown();
   			$('.user-form-card-info').hide();

   })

   });


  		// $("#user-detail-form").validate();
	})

});
</script>

@elseif ($curr == 'nocredit')
	<script type="text/javascript">
		 jQuery('a').click( function(e) {
    		jQuery('.collapse').collapse('hide');
		});




   $(document).ready(function(){

   $('#form-submit').click(function(e){
   		e.stopPropagation()
   		$('#name-div').text($('#fullname').val());
   		$('#email-div').text($('#email').val());
   		$('#eth-div').text($('#eth_address').val());
   		$('#number-div').text($('#number').val());

   		var value = $('#eth_address').val();


   			console.log();

   			if (!(validator.isEmpty($('#fullname').val()))) {
   				console.log('Name-Yess!')
   				$('#name_error').hide();
   			} else {
   				$('#name_error').show();
   			}


   			if (!(validator.isEmpty($('#number').val()))) {
   				console.log('Name-Yess!')
   				$('#number_error').hide();
   			} else {
   				$('#number_error').show();
   			}

   			if (validator.isEmail($('#email').val())) {
   				console.log('Email-Yes!')
   				$('#email_error').hide();
   			} else{
   				$('#email_error').show();
   			}

   			if ($('input#sale_check').is(':checked')) {
   				console.log('Sale-Yes!')
   				$('#sale_error').hide();
   			} else{
   				$('#sale_error').show();
   			}

   			if (validator.isLength($('#eth_address').val(), {min: 42})) {
   				console.log('Eth-Yes!')
   				$('#eth_error').hide();

   			} else{
   				$('#eth_error').show();
   			}

   			if (validator.equals($('#confirm-email').val(), $('#email').val())) {
   				console.log('Confirm-email-yes!')
   				$('#confirm_email_error').hide();



   			} else {

   				console.log('Confirm-email-no!')
   				$('#confirm_email_error').show();
   			}


   		if (!(validator.isEmpty($('#fullname').val())) && 
   			!(validator.isEmpty($('#number').val())) && 
   			validator.isEmail($('#email').val()) && 
   			$('input#sale_check').is(':checked') && 
   			validator.isLength($('#eth_address').val(), {min: 42}) &&
   			validator.equals($('#confirm-email').val(), $('#email').val())
   			){
   			$('.payment').slideDown();
   			$('.user-form-card').slideUp();
   			$('.user-form-card-info').show();
   			$('.sale-tick').show();

   		}

   		$('.completed-trxn').on('click', function(){
   			$('#user-detail-form').append('<input type="hidden" name="reference" value="BuyAnyLight-{{ $rand }}">');
   			$('#user-detail-form').submit();

   		})

       $('.later-trxn').click(function(){
            $('#user-detail-form').append('<input type="hidden" name="reference" value="BuyAnyLight-{{ $rand }}">');
            $('#user-detail-form').append('<input type="hidden" name="later_bank" value="1">');
            $('#user-detail-form').submit();

        })

   });

   $('#investor-edit').click(function(){

   			$('.payment').slideUp();

   		$('.user-form-card').slidedown();
   			$('.user-form-card-info').hide();

   })


	})
	</script>

@else
<script type="text/javascript">
	$('#u-form').submit(function() {
    var id1 = $('#email').val(); //if #id1 is input element change from .text() to .val() 
    var id2 = $('#confirm_email').val(); //if #id2 is input element change from .text() to .val()
    if (id1 !== id2) {
   	$('#confirm_email').tooltip('show');
        return false;
    }
    else
    {
        return true;
    }

 	$('#element').on('shown.bs.tooltip', function () {
   		setTimeout(function () {
    		$('#confirm_email').tooltip('hide');
   		}, 2000);
	})




});

</script>
 @endif
@endsection


@section('content')

<style type="text/css">
	.accordion > .card:first-of-type {
     	border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }
</style>

<section style="min-height: 100vh;">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3>
				<b>
				{!! trans('msg.header')!!}
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
			<div>	
				<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert" style="margin-bottom: 0px;">
				{{ trans('msg.disclaimer')}}
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>
				<div class="pt-3">
				
					<div class="pt-3">
						<a data-fancybox href="{{ Util::assetUrl('BAL_Token_Sale_Agreement.pdf') }}" class="btn" style="background-color: #5555A4; color: white;"> {{ trans('msg.agreement')}}
							<span class="text-success sale-tick" style="display: none;">
								<i class="fas fa-check-circle"></i>
							</span>
						</a>
					</div>
					
				</div>



				<div class="pt-3 pb-5">
					@if( $curr == 'credit')
					<div class="row">
						<div class="col-md-8 col-12">
							<div class="card user-form-card">
								<div class="card-header" style="background-color: #5555A4; color: white;">
									<b>{{ trans('msg.info_head')}}</b>
								</div>
								<div class="card-body">
									<div class="user-form">
										<form action="/kyc" method="post" enctype="multipart/form-data" id="user-detail-form">
					  						@csrf()
					  							<div class="form-group row">
		  											<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}</b></label>
		  											<div class="col-sm-9 pt-2">
		  												{{$user_reference_id }}
		  											</div>
		  										</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="text" name="name" class="form-control" placeholder="{{ trans('msg.buyer_name_placeholder')}}" required="required" id="fullname">
					  									<small class="text-danger" id="name_error" style="display: none">Please enter your full name.</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="email" name="email_id" class="form-control	" placeholder="{{ trans('msg.buyer_email_placeholder')}}" required="required" id="email">
					  									<small class="text-danger" id="email_error" style="display: none">Please enter your correct email id.</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_confirm_email')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="email" class="form-control	" placeholder="{{ trans('msg.buyer_confirm_email_placeholder')}}" required="required" id="confirm-email">
					  									<small class="text-danger" id="confirm_email_error" style="display: none">Email IDs must be matching!</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="tel" name="number" class="form-control	" placeholder="{{ trans('msg.buyer_mobile_placeholder')}}" required="required" id="number">
					  									<small class="text-danger" id="number_error" style="display: none">Please enter your correct Mobile number.</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_eth_address')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="text" name="receiver_id" class="form-control" placeholder="{{ trans('msg.buyer_eth_address_placeholder')}}" pattern=".{40,42}" required title="Please enter the correct address" id="eth_address">
					  									<small class="text-danger" id="eth_error" style="display: none">Please enter the eth address consisting of 42 characters.</small>

					  								</div>
					  							</div>
					  							<div class="form-check">
		  											<input class="form-check-input" type="checkbox" value="1" required id="sale_check">
		  											<label class="form-check-label">
													  {{ trans('msg.agreement_accept')}}
		  											</label><br>
					  								<small class="text-danger" id="sale_error" style="display: none">Please read and accept the agreement .</small>

												</div>
					  							<input type="hidden" name="amount" value="{{ $amt }}">
					  							<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
                          <input type="hidden" name="bal_amt" value="{{ $bal_amt }}">
					  							<input type="hidden" name="referral_code" value="{{ $code }}">

						  						<div class="btn btn-primary mt-2 col-12" id="form-submit" style="background-color: #5555A4; cursor: pointer;">
												  {{ trans('msg.submit_btn1')}}
						  						</div>
					  					</form>
									</div>
								</div>
							</div>
							<div class="card user-form-card-info" style="display: none;">
								<div class="card-header" style="background-color: #5555A4; color: white;">
									<div class="row">
										<div class="col-md-6 col-6">
											<div class="d-inline-block" style="font-size: 16px;">
											{{ trans('msg.info_head')}}
											</div>
										</div>
										<div class="col-md-6 col-6 text-right">
											<div class="btn btn-sm text-color d-inline-block bg-white" id="investor-edit">
												<i class="fas fa-edit"></i>	{{ trans('msg.edit_btn')}}
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}:</b></label>
		  								<div class="col-sm-9 pt-2">
		  									{{$user_reference_id }}
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}:</b></label>
		  								<div class="col-sm-9 pt-2 " id="name-div">
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}:</b></label>
		  								<div class="col-sm-9 pt-2 " id="email-div">
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}:</b></label>
		  								<div class="col-sm-9 pt-2 " id="number-div">
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_eth_address')}}:</b></label>
		  								<div class="col-sm-9 pt-2" id="eth-div">
		  								</div>
		  							</div>
								</div>
							</div>
							<div class="payment pt-3" style="display: none;">
								<b>
								{{ trans('msg.choose_pay')}}
								</b>
								<div class="accordion pt-3" id="payment">
  									<div class="card" style="background-color: #5555A4;">
    									<div class="card-header" id="headingOne">
      										<h2 class="mb-0">
        										<button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#card-accordion" aria-expanded="true" aria-controls="card-accordion" style="color: white;" id="credit">
												{{ trans('msg.pay1')}}
          											<span class="" data-toggle="tooltip" data-placement="right" data-html="true" title="Card payments are processed by our partner  Foloosi Technologies LLC" style="font-size: 15px; float: right; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
        										</button>
      										</h2>
    									</div>
  									</div>
  									<div class="card mt-3">
    								<div class="card-header" id="headingTwo" style="background-color: #5555A4;">
      									<h2 class="mb-0">
        									<button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#bank-accordion" aria-expanded="false" aria-controls="bank-accordion" style="color: white;">
											{{ trans('msg.pay2')}}
        									</button>
      									</h2>
    								</div>
    								<div id="bank-accordion" class="collapse" aria-labelledby="headingTwo" data-parent="#payment">
      								<div class="card-body">
      							
        							<div class="bank-transfer">
			  							<div class="row" >
			  								@if($usd == 1)
				  								<div class="col">
				  									<b>
				  										<u>{{ trans('msg.bank1')}}</u>
				  									</b>
				  									<div class="row pt-3">
				  										<div class="col-4">
				  											<b>
															  {{ trans('msg.bank2')}}
				  											</b>
				  										</div>
				  										<div class="col-8">
				  											Dotcom Ventures FZE
				  										</div>
				  									</div>
				  									<div class="row pt-3">
				  										<div class="col-4">
				  											<b>
															  {{ trans('msg.bank3')}}
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
															  {{ trans('msg.bank4')}}
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
															  {{ trans('msg.bank5')}}
				  											</b>
				  										</div>
				  										<div class="col-8">
				  											BuyAnyLight-{{ $rand }}<br> 
				  											<small>
				  												<b>( {{ trans('msg.bank6')}} )</b>
				  		
				  											</small>
				  										</div>
				  									</div>
				  									<div class="row pt-3">
				  										<div class="col-4">
				  											<b>
															  {{ trans('msg.bank7')}}
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
			  										<u> {{ trans('msg.bank1.1')}}</u>
			  									</b>
			  									<div class="row pt-3">
			  										<div class="col-4">
			  											<b>
														  {{ trans('msg.bank2')}}
			  											</b>
			  										</div>
			  										<div class="col-8">
			  											Dotcom Ventures FZE
			  										</div>
			  									</div>
			  									<div class="row pt-3">
			  										<div class="col-4">
			  											<b>
														  {{ trans('msg.bank3')}}
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
														  {{ trans('msg.bank4')}}
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
														  {{ trans('msg.bank5')}}
			  											</b>
			  										</div>
			  										<div class="col-8">
			  											BuyAnyLight-{{ $rand }}<br> 
				  											<small>
				  												<b>
				  													({{ trans('msg.bank6')}})
				  												</b>
				  										</small>
			  										</div>
			  									</div>
			  									<div class="row pt-3">
			  										<div class="col-4">
			  											<b>
														  {{ trans('msg.bank7')}}
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
                                         <p class="pt-3">
                                            <i>
												{!! trans('msg.bank8') !!}
                                            </i>
                                        </p>
			  							<div class="mt-3 col-12 p-0">
			  								<button class="btn btn-success w-100 completed-trxn">
											  {{ trans('msg.bank9')}}
			  								</button>
                                            <button class=" mt-2 btn btn-secondary w-100 later-trxn">
											{{ trans('msg.bank10')}}
                                            </button>
			  							</div>
        							</div>
		  						
      									</div>
    								</div>
  								</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-12 pt-2">
							<div class="card" >
								<div class="card-header" style="background-color: #5555A4; color: white;">
								{{ trans('msg.trxn_details')}}
								</div>
								<div class="card-body">
									<div class="row pt-2">
										<div class="col">
											<b>
											{{ trans('msg.bal_amt')}}
											</b>
										</div>
										<div class="col">
											{{ $bal_amt }} BAL
										</div>
									</div>
									<div class="row pt-2">
										<div class="col">
											<b>
											{{ trans('msg.amount')}}
											</b>
										</div>
										<div class="col">
											{{ number_format($amount, 2) }} {{ $dcurr}}
										</div>
									</div>
									<div class="row pt-2">
										<div class="col">
											<b>
											{{ trans('msg.pay_accept')}}
											</b>
										</div>
										<div class="col">
											Visa, Mastercard, Bank Transfer
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@elseif ($curr == 'nocredit')

					<div class="row">
						<div class="col-md-8 col-12">
							<div class="card user-form-card">
								<div class="card-header" style="background-color: #5555A4; color: white;">
									<b>{{ trans('msg.info_head')}}</b>
								</div>
								<div class="card-body">
									<div class="user-form">
										<form action="/kyc" method="post" enctype="multipart/form-data" id="user-detail-form">
					  						@csrf()
					  							<div class="form-group row">
		  											<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}</b></label>
		  											<div class="col-sm-9 pt-2">
		  												{{$user_reference_id }}
		  											</div>
		  										</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="text" name="name" class="form-control" placeholder="{{ trans('msg.buyer_name_placeholder')}}" required="required" id="fullname">
					  									<small class="text-danger" id="name_error" style="display: none">Please enter your full name.</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="email" name="email_id" class="form-control	" placeholder="{{ trans('msg.buyer_email_placeholder')}}" required="required" id="email">
					  									<small class="text-danger" id="email_error" style="display: none">Please enter your correct email id.</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_confirm_email')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="email" class="form-control	" placeholder="{{ trans('msg.buyer_confirm_email_placeholder')}}" required="required" id="confirm-email">
					  									<small class="text-danger" id="confirm_email_error" style="display: none">Email IDs must be matching!</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="tel" name="number" class="form-control	" placeholder="{{ trans('msg.buyer_mobile_placeholder')}}" required="required" id="number">
					  									<small class="text-danger" id="number_error" style="display: none">Please enter your correct Mobile number.</small>
					  								</div>
					  							</div>
					  							<div class="form-group row">
					  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_eth_address')}}</b></label>
					  								<div class="col-sm-9">
					  									<input type="text" name="receiver_id" class="form-control" placeholder="{{ trans('msg.buyer_eth_address_placeholder')}}" pattern=".{40,42}" required title="Please enter the correct address" id="eth_address">
					  									<small class="text-danger" id="eth_error" style="display: none">Please enter the eth address consisting of 42 characters.</small>

					  								</div>
					  							</div>
					  							<div class="form-check">
		  											<input class="form-check-input" type="checkbox" value="1" required id="sale_check">
		  											<label class="form-check-label">
													  {{ trans('msg.agreement_accept')}}
		  											</label><br>
					  								<small class="text-danger" id="sale_error" style="display: none">Please read and accept the agreement .</small>

												</div>
					  							<input type="hidden" name="amount" value="{{ $amt }}">
					  							<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
                          <input type="hidden" name="bal_amt" value="{{ $bal_amt }}">
					  							<input type="hidden" name="referral_code" value="{{ $code }}">

						  						<div class="btn btn-primary mt-2 col-12" id="form-submit" style="background-color: #5555A4; cursor: pointer;">
												  {{ trans('msg.submit_btn1')}}
						  						</div>
					  					</form>
									</div>
								</div>
							</div>
							<div class="card user-form-card-info" style="display: none;">
								<div class="card-header" style="background-color: #5555A4; color: white;">
									<div class="row">
										<div class="col-md-6 col-6">
											<div class="d-inline-block" style="font-size: 16px;">
											{{ trans('msg.info_head')}}
											</div>
										</div>
										<div class="col-md-6 col-6 text-right">
											<div class="btn btn-sm text-color d-inline-block bg-white" id="investor-edit">
												<i class="fas fa-edit"></i>	{{ trans('msg.edit_btn')}}
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}:</b></label>
		  								<div class="col-sm-9 pt-2">
		  									{{$user_reference_id }}
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}:</b></label>
		  								<div class="col-sm-9 pt-2 " id="name-div">
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}:</b></label>
		  								<div class="col-sm-9 pt-2 " id="email-div">
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}:</b></label>
		  								<div class="col-sm-9 pt-2 " id="number-div">
		  								</div>
		  							</div>
		  							<div class="form-group row">
		  								<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_eth_address')}}:</b></label>
		  								<div class="col-sm-9 pt-2" id="eth-div">
		  								</div>
		  							</div>
								</div>
							</div>
							<div class="payment pt-3" style="display: none;">
								<b>
								{{ trans('msg.choose_pay')}}
								</b>
								<div class="accordion pt-3" id="payment">
  									<div class="card mt-3">
    									<div class="card-header" id="headingTwo" style="background-color: #5555A4;">
      										<h2 class="mb-0">
        										<button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#bank-accordion" aria-expanded="false" aria-controls="bank-accordion" style="color: white;">
												{{ trans('msg.pay2')}}
        										</button>
      										</h2>
    								</div>
    								<div id="bank-accordion" class="collapse" aria-labelledby="headingTwo" data-parent="#payment">
      								<div class="card-body">
      							
        							<div class="bank-transfer">
			  							<div class="row" >
			  								@if($usd == 1)
				  								<div class="col">
				  									<b>
				  										<u>{{ trans('msg.bank1')}}</u>
				  									</b>
				  									<div class="row pt-3">
				  										<div class="col-4">
				  											<b>
															  {{ trans('msg.bank2')}}
				  											</b>
				  										</div>
				  										<div class="col-8">
				  											Dotcom Ventures FZE
				  										</div>
				  									</div>
				  									<div class="row pt-3">
				  										<div class="col-4">
				  											<b>
															  {{ trans('msg.bank3')}}
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
															  {{ trans('msg.bank4')}}
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
															  {{ trans('msg.bank5')}}
				  											</b>
				  										</div>
				  										<div class="col-8">
				  											BuyAnyLight-{{ $rand }}<br> 
				  											<small>
				  												<b>( {{ trans('msg.bank6')}} )</b>
				  		
				  											</small>
				  										</div>
				  									</div>
				  									<div class="row pt-3">
				  										<div class="col-4">
				  											<b>
															  {{ trans('msg.bank7')}}
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
			  										<u> {{ trans('msg.bank1.1')}}</u>
			  									</b>
			  									<div class="row pt-3">
			  										<div class="col-4">
			  											<b>
														  {{ trans('msg.bank2')}}
			  											</b>
			  										</div>
			  										<div class="col-8">
			  											Dotcom Ventures FZE
			  										</div>
			  									</div>
			  									<div class="row pt-3">
			  										<div class="col-4">
			  											<b>
														  {{ trans('msg.bank3')}}
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
														  {{ trans('msg.bank4')}}
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
														  {{ trans('msg.bank5')}}
			  											</b>
			  										</div>
			  										<div class="col-8">
			  											BuyAnyLight-{{ $rand }}<br> 
				  											<small>
				  												<b>
				  													({{ trans('msg.bank6')}})
				  												</b>
				  										</small>
			  										</div>
			  									</div>
			  									<div class="row pt-3">
			  										<div class="col-4">
			  											<b>
														  {{ trans('msg.bank7')}}
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
                                         <p class="pt-3">
                                            <i>
												{!! trans('msg.bank7') !!}
                                            </i>
                                        </p>
			  							<div class="mt-3 col-12 p-0">
			  								<button class="btn btn-success w-100 completed-trxn">
											  {{ trans('msg.bank9')}}
			  								</button>
                                            <button class=" mt-2 btn btn-secondary w-100 later-trxn">
											{{ trans('msg.bank10')}}
                                            </button>
			  							</div>
        							</div>
		  						
      									</div>
    								</div>
  								</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-12 pt-2">
							<div class="card" >
								<div class="card-header" style="background-color: #5555A4; color: white;">
								{{ trans('msg.trxn_details')}}
								</div>
								<div class="card-body">
									<div class="row pt-2">
										<div class="col">
											<b>
											{{ trans('msg.bal_amt')}}
											</b>
										</div>
										<div class="col">
											{{ $bal_amt }} BAL
										</div>
									</div>
									<div class="row pt-2">
										<div class="col">
											<b>
											{{ trans('msg.amount')}}
											</b>
										</div>
										<div class="col">
											{{ number_format($amount, 2) }} {{ $dcurr}}
										</div>
									</div>
									<div class="row pt-2">
										<div class="col">
											<b>
											{{ trans('msg.pay_accept')}}
											</b>
										</div>
										<div class="col">
											Visa, Mastercard, Bank Transfer
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

						@elseif ( $curr == 'BTC')
						<div class="row">
							<div class="col-12">
								<div class="d-flex align-items-center">
									<div class="card w-100">
				  						<div class="card-header" style="background-color: #5555A4; color: white;">
						  					<b>
						    					{{ trans('msg.btc1')}}
						  					</b>
				  						</div>
				  						<div class="card-body">
				  							<div class="card-title">
				  								<p>
													{!! trans('msg.btc2', ['bal_amt' => $bal_amt])!!}
				  								</p>
				  								<p>
													{!! trans('msg.btc3', ['amt' => $amt])!!}
				  								</p>
				  								<p>
				  									1Ep8bLyLkwmXGMHKYrFdmRG6SRvC1179nV
				  								</p>
												<p>
						  							<small>
						  								<b>
															{{ trans('msg.btc4')}}
						  								</b>
					  								</small>
												</p>
				  								<hr>
				  								<form action="/kyc" method="post" enctype="multipart/form-data" id="u-form">
					  							@csrf()
					  								<div class="form-group row">
		  												<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}:</b></label>
		  												<div class="col-sm-9 pt-2">
		  													{{$user_reference_id }}
		  												</div>
		  											</div>
					  								<div class="form-group row">
				  										<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}:</b></label>
				  										<div class="col-sm-9">
				  											<input type="text" name="name" class="form-control" placeholder="{{ trans('msg.buyer_name_placeholder')}}" required="required">
				  										</div>
				  									</div>
				  									<div class="form-group row">
		  												<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}:</b></label>
		  												<div class="col-sm-9">
		  													<input type="text" name="email_id" class="form-control"placeholder="{{ trans('msg.buyer_email_placeholder')}}" required="required" id="email">
		  												</div>
		  											</div>
		  											<div class="form-group row">
		  												<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_confirm_email')}}:</b></label>
		  												<div class="col-sm-9">
		  													<input type="text" class="form-control"placeholder="{{ trans('msg.buyer_confirm_email_placeholder')}}" required="required" id="confirm_email" data-toggle="tooltip" data-placement="right" data-delay='{"show":"50", "hide":"100"}' data-trigger="manual" title="Email IDs must be matching!">
                                        
		  												</div>
		  											</div>
		  											<div class="form-group row">
					  									<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}:</b></label>
					  									<div class="col-sm-9">
					  										<input type="tel" name="number" class="form-control	" placeholder="{{ trans('msg.buyer_mobile_placeholder')}}" required="required" id="number">
					  									</div>
					  								</div>
				  									<div class="form-group row">
				  										<label class="col-sm-3 col-form-label">
				  											<b>{{ trans('msg.btc6')}}:</b>
				  											<span class="" name="transaction_id" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.btc6.1')}}" style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
				  										</label>
				  										<div class="col-sm-9">
				  											<input type="text" name="transaction_id" class="form-control" required="required" placeholder="{{ trans('msg.btc3')}}" pattern=".{64,}" required title="Please enter the correct address">
				  										</div>
				  									</div>
				  									<div class="form-group row">
				  										<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_eth_address')}}:</b></label>
				  										<div class="col-sm-9">
				  											<input type="text" name="receiver_id" class="form-control" placeholder="{{ trans('msg.buyer_eth_address_placeholder')}}" pattern=".{40,42}" required title="Please enter the correct address">
				  										</div>
				  									</div>
				  									<div class="form-check">
  														<input class="form-check-input" type="checkbox" value="" required>
  														<label class="form-check-label">
															{{ trans('msg.agreement_accept')}}
  														</label>
													</div>
				  									<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
				  									<input type="hidden" name="amount" value="{{ $amt }} BTC">
                                                    <input type="hidden" name="bal_amt" value="{{ $bal_amt }}">
				  									<input type="hidden" name="referral_code" value="{{ $code }}">
				  									<button type="submit" class="btn  btn-primary mt-2 col-12" style="background-color: #5555A4;">
														{{ trans('msg.kyc10')}}
					  								</button>
					  							</form>
				  							</div>
				  						</div>
				  					</div>
								</div>
								<div class="card card-body mt-3">
									{{ trans('msg.sectionbuy_how1')}}<br>
			  						<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/" target="_blank">	{{ trans('msg.sectionbuy_how2')}}</a>
			  					</div>
							</div>
						</div>

							@else
							<div>
								<div class="row">
									<div class="col-12">
								<div class="card w-100">
									<div class="card-header" style="background-color: #5555A4; color: white;">
				  						<b>
				    						{{ trans('msg.eth1')}}
				  						</b>
									</div>
			  						<div class="card-body">
			  							<p>
											{!! trans('msg.btc2', ['bal_amt' => $bal_amt])!!}
				  						</p>
				  						<p>
				  							
				  						</p>
				  						<p>
											{{ trans('msg.eth2', ['amt' => $amt])}}
				  						</p>
		  								<p>
		  									0x0b60500e43d0dd3b92acb681133d66e4f21e81bf
		  								</p>
			  							<small>
			  								<b>
												{{ trans('msg.eht3')}}
			  								</b>
			  							</small>
		  								<hr>
		  								<form action="/kyc" method="post" enctype="multipart/form-data" id="u-form">
			  								@csrf()
			  								<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>{{ trans('msg.ref_id')}}:</b></label>
		  										<div class="col-sm-9 pt-2">
		  											{{$user_reference_id }}
		  										</div>
		  									</div>
			  								<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_name')}}:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="name" class="form-control" placeholder="{{ trans('msg.buyer_name_placeholder')}}" required="required">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_email')}}:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="email_id" class="form-control"placeholder="{{ trans('msg.buyer_email_placeholder')}}" required="required" id="email">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  											<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_confirm_email')}}:</b></label>
		  											<div class="col-sm-9">
		  												<input type="text" class="form-control"placeholder="{{ trans('msg.buyer_confirm_email_placeholder')}}" required="required" id="confirm_email" data-toggle="tooltip" data-placement="right" data-delay='{"show":"50", "hide":"100"}' data-trigger="manual" title="Email IDs must be matching!">
                                        
		  											</div>
		  										</div>
		  										<div class="form-group row">
					  									<label class="col-sm-3 col-form-label"><b>{{ trans('msg.buyer_mobile')}}:</b></label>
					  									<div class="col-sm-9">
					  										<input type="tel" name="number" class="form-control	" placeholder="{{ trans('msg.buyer_mobile_placeholder')}}" required="required" id="number">
					  									</div>
					  								</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label">
		  											<b>{{ trans('msg.btc5')}}: 
		  												<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.eth4')}}" style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
		  											</b>
		  										</label>
		  										<div class="col-sm-9">
		  											<input type="text" name="transaction_id" class="form-control" placeholder="{{ trans('msg.btc6')}}" pattern=".{66,}" required title="Please enter the correct transaction hash or transaction ID">
		  										</div>
		  									</div>
		  									<div class="form-group row">
		  										<label class="col-sm-3 col-form-label"><b>{{ trans('msg.btc5')}}:</b></label>
		  										<div class="col-sm-9">
		  											<input type="text" name="receiver_id" class="form-control" placeholder="{{ trans('msg.btc5')}}" pattern=".{40,42}" required title="Please enter the correct address">
		  										</div>
		  									</div>
		  									<div class="form-check pb-3">
  												<input class="form-check-input" type="checkbox" value="" required>
  												<label class="form-check-label">
													{{ trans('msg.agreement_accept')}}
  												</label>
											</div>
		  									<input type="hidden" name="user_reference_id" value="{{ $user_reference_id }}">
		  									<input type="hidden" name="bal_amt" value="{{ $bal_amt }}">

		  									<input type="hidden" name="amount" value="{{ $amt }} ETH">
                                            <input type="hidden" name="referral_code" value="{{ $code }}">

		  									<button type="submit" class="btn  btn-primary mt-2 col-12" style="background-color: #5555A4;">
												{{ trans('msg.kyc10')}}
			  								</button>
			  							</form>
			  						</div>
			  					</div>
			  					<div class="card card-body mt-3">
									{{ trans('msg.sectionbuy_how1')}}<br>
			  						<a href="https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/" target="_blank">{{ trans('msg.sectionbuy_how2')}} </a>
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