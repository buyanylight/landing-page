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

			var BTCvalue = parseFloat(originalvalue) * $('.BTC_value').data('value')
			$('.BTC_value').text(BTCvalue);

			var ETHvalue = parseFloat(originalvalue) * $('.ETH_value').data('value')
			$('.ETH_value').text(ETHvalue);

			var EURvalue = parseFloat(originalvalue) * $('.EUR_value').data('value')
			$('.EUR_value').text(EURvalue);

		}

	});
</script>

@endsection



@section('content')

<style type="text/css">
	.toast

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
			<div class="pt-4">
				<div class="input-group">
	  				<div class="input-group-prepend">
	    				<span class="input-group-text" id="basic-addon1">BAL</span>
	  				</div>
	  				<input type="number" class="form-control bal-token" placeholder="Enter an amount" aria-label="Username" aria-describedby="basic-addon1" min="5000">
	  				<br>
				</div>
			</div>
			<div class="toast toast-danger mt-2 w-100" role="alert" aria-live="polite" aria-atomic="true" data-autohide="false" style="max-width: 100% !important;">
				<div class="toast-header">
					<img src="..." class="rounded mr-2" alt="...">
					<strong class="mr-auto">Bootstrap</strong>
					<small class="text-muted">11 mins ago</small>
					<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
		      			<span aria-hidden="true">&times;</span>
		    		</button>
		  		</div>
		  		<div class="toast-body">
		    		Hello, world! This is a toast message.
		  		</div>
			</div>
			<div class="pt-4">
				<div class="card-deck">
					<!-- <div class="card">
						<div class="card-body text-center">
							<h4 class="mb-0">
								USD
							</h4>
							<small>1 BAL = 0.2 USD</small>
							<div class="usd_value">
								0
							</div>
						</div>
					</div> -->

					@foreach($tokens as $token)
						<div class="card">
							<div class="card-body text-center">
								<h4 class="mb-0">
									{{ $token['asset_id_quote'] }}
								</h4>
								<small>
									1 BAL = {{ $token['bal_rate'] }} {{ $token['asset_id_quote'] }}
								</small>
								<div class="{{ $token['asset_id_quote'] }}_value" data-value="{{ $token['bal_rate'] }}">
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>




@endsection