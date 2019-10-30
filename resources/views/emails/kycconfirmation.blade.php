@component('mail::message')
<div style="color: black; font-size: 14px;">
	<p style="color: black; font-size: 14px">
		Greetings {{ $name }}!
	</p>
	<p style=" color: black; font-size: 14px">
		Your efforts to complete the Know Your Customer (KYC) form is greatly appreciated. The details you have provided are as follows:
	</p>
	<ul style=" color: black; list-style: none;">
		<li><b>Reference ID:</b> {{ $user_reference_id }}</li>
		<li style="padding-top: 5px;"><b>Name:</b> {{ $name }}</li>
		<li style="padding-top: 5px;"><b>Email:</b> {{ $email }}</li>
		<li style="padding-top: 5px;"><b>Mobile:</b> {{ $number }}</li>
		<li style="padding-top: 5px;"><b>Total BAL Tokens:</b> {{ $bal_amt }} BAL</li>
		@if(!empty($later_bank))
			<li style="padding-top: 5px;"><b>Amount Paid*:</b> {{ $amount }}</li>
		@else
			<li style="padding-top: 5px;"><b>Amount Paid:</b> {{ $amount }}</li>
		@endif
		<li style="padding-top: 5px;"><b>Country:</b> {{ $country }}</li>
		<li style="padding-top: 5px;"><b>Your ETH address:</b> {{ $receiver_id }}</li>
		<li style="padding-top: 5px;"><b>User Verification ID:</b> Received</li>
		<li style="padding-top: 5px;"><b>User Selfie Verification:</b> Received</li>
	</ul>
	@if(!empty($later_bank))
	<p style="color: black; font-size: 14px;">
		<i>
			Subject of bank transfer slip confirmation to be send to: <a href="mailto:invest@buyanylight.com">invest@buyanylight.com</a>
		</i>
	</p>
	@endif
	<p style="color: black; font-size: 14px">
		After verification of your payment and successful KYC passing, we will send {{ $bal_amt }} BAL tokens to the following ETH address: [{{ $receiver_id }}] How to add our custom BAL token to your ETH wallet, please check <a href=" https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/">here</a>.
	</p>
	<p style="color: black; font-size: 14px">
		Thanks again for your support, trust and investment.
	</p>
	<p style="color: black; font-size: 14px;">
	Thanks,<br>
	{{ config('app.name') }} Team	
	</p>

@endcomponent
</div>

