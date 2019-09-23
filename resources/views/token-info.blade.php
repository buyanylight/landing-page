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
			var USD  = parseFloat(USDvalue).toFixed(2);


			var BTCvalue = parseFloat(originalvalue) * $('.BTC_value').data('value')

			var ETHvalue = parseFloat(originalvalue) * $('.ETH_value').data('value')

			var EURvalue = parseFloat(originalvalue) * $('.EUR_value').data('value')
			var EUR  = parseFloat(EURvalue).toFixed(2);

			

			if (USD == 'NaN') {

			$('.USD_value').text(0);
			$('.EUR_value').text(0);
			$('.ETH_value').text(0);
			$('.BTC_value').text(0);


			$('option.USD_value').val(USD + ' USD').text('USD');
			$('option.EUR_value').val(EUR + ' EUR').text('EUR');
			$('option.BTC_value').val(BTCvalue + ' BTC').text('BTC');
			$('option.ETH_value').val(ETHvalue + ' ETH').text('ETH');



			} else {

			$('.USD_value').text(USD);
			$('.EUR_value').text(EUR);
			$('.ETH_value').text(ETHvalue);
			$('.BTC_value').text(BTCvalue);


			$('option.USD_value').val(USD + ' USD').text('USD');
			$('option.EUR_value').val(EUR + ' EUR').text('EUR');
			$('option.BTC_value').val(BTCvalue + ' BTC').text('BTC');
			$('option.ETH_value').val(ETHvalue + ' ETH').text('ETH');
			}

		}



	
	});
</script>
@endsection



@section('content')

<style type="text/css">
	.toast{
		display: none;
	}

	.col-2 {
		max-width: 10.9% !important;
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
			<form action="/buy-token" method="post" enctype="multipart/form-data">
				@csrf()				
				<div class="pt-4">
					<div class="input-group">
	  					<div class="input-group-prepend">
	    					<span class="input-group-text" id="basic-addon1">BAL</span>
	  					</div>
	  					<input type="number" class="form-control bal-token" placeholder="Enter an amount you want to buy" aria-label="bal-token" aria-describedby="basic-addon1" min="25000" name="bal" required="required">
	  					<br>
					</div>
				</div>
				<div class="toast toast-danger mt-2 w-100" role="alert" aria-live="polite" aria-atomic="true" data-autohide="false" style="max-width: 100% !important; border: 1px solid red">
					<div class="toast-header">
						<img src="{{ Util::assetUrl('images/logo-black-icon.png') }}" width="25">
						<strong class="mr-auto">&nbsp; BAL</strong>
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
									<b>
										{{ $token['asset_id_quote'] }}
									</b>
								</div>
								<div class="card-body text-center d-flex justify-content-center align-items-center" style="height: 158px;">
									<h4 class="{{ $token['asset_id_quote'] }}_value" data-value="{{ $token['bal_rate'] }}">

									</h4>
								</div>
								<div class="text-right pr-2 pb-1">
									<small>
										1 BAL = {{ $token['bal_rate'] }} {{ $token['asset_id_quote'] }} 
										<br>
										Last Updated: {{ $token['time'] }}
									</small>
								</div>
							</div>
						@endforeach
					</div>
					<div class="pt-3">
						<div class="card">
							<div class="card-body">
								<h5>
									<b>
										Profit / ROI
									</b>
								</h5>
								<div class="pt-2">
									<div class="row">
										<div class="col">
											<b>
												Private Sale:
											</b>
										</div>
										<div class="col col-md-10">1 BAL = 0.2 USD</div>
									</div>
									<div class="row">
										<div class="col">
											<b>
												IEO:
											</b>
										</div>
										<div class="col col-md-10">1 BAL = 0.30303 USD</div>
									</div>
								</div>	
								<div class="pt-2">
									<div class="row">
										<div class="col">
											<b>
												ROI (%):
											</b>
										</div>
										<div class="col col-md-10">
											51.515%
										</div>
									</div>
									<div class="row">
										<div class="col">
											<b>
												Return (USD):
											</b>
										</div>
										<div class="col col-md-10">
											151.515 USD
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pt-4">
						<div class="form-group">
							<label>Select Currency</label>
							<select name="currency" class="form-control">
								@foreach($tokens as $token)
								<option value="" class="{{ $token['asset_id_quote'] }}_value">{{ $token['asset_id_quote'] }}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Buy Tokens</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>




@endsection