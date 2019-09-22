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
			$('option.USD_value').val(USDvalue + ' USD').text('USD');

			var BTCvalue = parseFloat(originalvalue) * $('.BTC_value').data('value')
			$('.BTC_value').text(BTCvalue);
			$('option.BTC_value').val(BTCvalue + ' BTC').text('BTC');

			var ETHvalue = parseFloat(originalvalue) * $('.ETH_value').data('value')
			$('.ETH_value').text(ETHvalue);
			$('option.ETH_value').val(ETHvalue + ' ETH').text('ETH');

			var EURvalue = parseFloat(originalvalue) * $('.EUR_value').data('value')
			$('.EUR_value').text(EURvalue);
			$('option.EUR_value').val(EURvalue + ' EUR').text('EUR');

		}



	
	});
</script>
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
	  					<input type="number" class="form-control bal-token" placeholder="Enter an amount" aria-label="bal-token" aria-describedby="basic-addon1" min="25000" name="bal" required="required">
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
					<div class="pt-3">
						<div class="card">
							<div class="card-body">
								<b>Profit / ROI</b>
								<div class="pt-2">
									<b>Today</b> : 1 BAL = 0.2 USD <br>
									<b>Pre Sale</b> : 1 BAL = 0.30303 USD <br>
									<b>Profit made</b> : 515.515% 


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