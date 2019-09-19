@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')

@section('body-end-javascript')
<script type="text/javascript">
	$( document ).ready(function() {
		$('.bal-token').change(function() {
			if (parseInt(this.value) < 25000) {
				$('.toast').toast('show')
			}			
		})




		$('.bal-token').keyup(function() {
			Currencyconvert()
		})

		function Currencyconvert(){
			var originalvalue = $('.bal-token').val();

			var USDvalue = parseFloat(originalvalue) * $('.USD_value').data('value')
			$('.USD_value').text(USDvalue);
			$('input.USD_value').val(USDvalue);

			var BTCvalue = parseFloat(originalvalue) * $('.BTC_value').data('value')
			$('.BTC_value').text(BTCvalue);
			$('input.BTC_value').val(BTCvalue);

			var ETHvalue = parseFloat(originalvalue) * $('.ETH_value').data('value')
			$('.ETH_value').text(ETHvalue);
			$('input.ETH_value').val(ETHvalue);

			var EURvalue = parseFloat(originalvalue) * $('.EUR_value').data('value')
			$('.EUR_value').text(EURvalue);
			$('input.EUR_value').val(EURvalue);

		}



		jQuery('a').click( function(e) {
    		jQuery('.collapse').collapse('hide');
		});






	});
</script>

<script type="text/javascript">
    var options = {
        "reference_token" : "REFERENCE_TOKEN", //which is get from step2
        "merchant_key" : "test_$2y$10$.0TFlqFxM7y.3GoHkDIqWeO-2bT2eBz8t86PVUkHwH9zMghDm5PLi"
    }
    var fp1 = new Foloosipay(options);
</script>
<script type="text/javascript" src="https://www.foloosi.com/js/foloosipay.v2.js"></script>

@endsection



@section('content')

<style type="text/css">
	.toast{
		display: none;
	}

</style>




<section style="min-height: 100vh">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3>
				<b>
					Currency Converter
				</b>
			</h3>
			{{--  @foreach($tokens as $token)
				{{ $token['asset_id_quote'] }} - {{ $token['bal_rate'] }} <br>
			@endforeach --}}
			<form action="/buy-token" method="post" enctype="multipart/form-data">
				@csrf()				
				<div class="pt-4">
					<div class="input-group">
	  					<div class="input-group-prepend">
	    					<span class="input-group-text" id="basic-addon1">BAL</span>
	  					</div>
	  					<input type="number" class="form-control bal-token" placeholder="Enter an amount" aria-label="Username" aria-describedby="basic-addon1" min="25000" name="bal">
	  					<br>
					</div>
				</div>
				<div class="toast toast-danger mt-2 w-100" role="alert" aria-live="polite" aria-atomic="true" data-autohide="false" style="max-width: 100% !important; border: 1px solid red">
					<div class="toast-header">
						<img src="{{ Util::assetUrl('images/logo-black-icon.png') }}" width="25">
						<strong class="mr-auto">&nbsp; BAL IEO</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
		      				<span aria-hidden="true">&times;</span>
		    			</button>
		  			</div>
		  			<div class="toast-body">
		    			The minimum investment is 5000 USD.
		  			</div>
				</div>
				<div class="pt-4">
					<div class="card-deck">
						@foreach($tokens as $token)
							<div class="card">
								<div class="card-header text-center">
									<h4>
										{{ $token['asset_id_quote'] }}
									</h4>
								</div>
								<div class="card-body text-center">
									<div class="{{ $token['asset_id_quote'] }}_value" data-value="{{ $token['bal_rate'] }}">
									</div>
									<input type="hidden" name="{{ $token['asset_id_quote'] }}_value" class="{{ $token['asset_id_quote'] }}_value">
								</div>
								<div class="text-right pr-2">
									<small>
										1 BAL = {{ $token['bal_rate'] }} {{ $token['asset_id_quote'] }} 
										<br>
										Last Updated: {{ $token['time'] }}
									</small>
								</div>
							</div>
						@endforeach
					</div>
					<div class="pt-4">
						<button type="submit" class="btn btn-primary">Buy Tokens</button>
					</div>
				</div>
			</form>
			<div>
				<h3>
					<b>
						Choose a Payment Method
					</b> 
				</h3>
				<div class="card-deck" id="payment">
					<div class="card">
						<a class="text-center btn" data-toggle="collapse" href="#card" role="button" aria-expanded="false" aria-controls="card" data-parent="#payment">
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
					<div class="card">
						<a class=" text-center btn" data-toggle="collapse" href="#btc" role="button" aria-expanded="false" aria-controls="btc" data-parent="#payment">
							<div class="card-body">
								<h2  style="color: 	#f7931a">
									<i class="fab fa-bitcoin"></i>
								</h2>
								Bitcoin
							</div>
						</a>
					</div>
					<div class="card">
						<a class="text-center btn" data-toggle="collapse" href="#eth" role="button" aria-expanded="false" aria-controls="eth" data-parent="#payment">
							<div class="card-body">
								<h2 style="color: #329239">
									<i class="fab fa-ethereum"></i>
								</h2>
							Ethereum
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
	  						</div>
	  					</div>
					</div>
					<div class="collapse" id="btc">
	  					<div class="card">
	  						<div class="card-body">
	  							<div class="card-title">
		  							<b>
		    							Bitcoin Transaction
		  							</b>
		  							<br>
		  							<small>
	  									Sending coin or token other than ETH to this address may result in the loss of your deposit.
	  								</small>
	  								<table class="mt-3">
	  									<tr>
	  										<td style="width: 190px;">
	  											<b>
	  												BTC Receivers address: 
	  											</b>
	  										</td>
	  										<td>
	  											3Kbn178ZEKmuGCrTjL1yUWF2jW8FvxNfGb
	  										</td>
	  									</tr>
	  									<tr style="vertical-align: text-top; padding-top: 10px;">
	  										<td>
	  											<b>
	  												Transaction ID: 
	  											</b>
	  										</td>
	  										<td style="padding-top: 10px;">
	  											<input type="type" name="btc_transaction_id" class="form-control" placeholder="Completed transaction id">
	  											<button type="submit" class="btn btn-sm btn-primary mt-2">
	  												Submit
	  											</button>
	  										</td>
	  									</tr>
	  								</table>
	  							</div>
	  						</div>
	  					</div>
					</div>
					<div class="collapse" id="eth">
	  					<div class="card">
	  						<div class="card-body">
	  							<b>
	    							Ethereum Transaction
	  							</b>
	  							<br>
	  							<small>
	  								Sending coin or token other than ETH to this address may result in the loss of your deposit.
	  							</small>
	  							<table class="mt-3">
	  								<tr>
	  									<td style="width: 190px; padding-top: 10px;">
	  										<b>
	  											ETH Receivers address:
	  										</b>
	  									</td>
	  									<td>
	  										0xbF48C5D01832D4974CA394F156308fe01aa3BBB0
	  									</td>
	  								</tr>
	  								<tr style="vertical-align: text-top; padding-top: 10px;">
	  									<td>
	  										<b>
	  											Transaction ID: 
	  										</b>
	  									</td>
	  									<td style="padding-top: 10px;">
	  										<input type="type" name="eth_transaction_id" class="form-control" placeholder="Completed transaction id">
	  										<button type="submit" class="btn btn-sm btn-primary mt-2">
	  											Submit
	  										</button>
	  									</td>
	  								</tr>
	  							</table>
	  						</div>
	  					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




@endsection