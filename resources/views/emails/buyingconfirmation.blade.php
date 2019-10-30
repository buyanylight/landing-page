@component('mail::message')
<div style="color: black; font-size: 14px !important;">
	<p style=" color: black; font-size: 14px !important">
		Greetings {{ $name }}!
	</p>
	<p style="color: black; font-size: 14px !important">
		We appreciate the trust you confer to BuyAnyLight.com. First and foremost, we would like to congratulate you on your initiative towards a profitable investment with us. We thank you for participating in our private BAL token sale.
	</p>
	<p style="color: black; font-size: 14px !important">
		Below are the transaction details of your electronic purchase:
	</p>
	<ul style=" color: black; list-style: none;">
		<li><b>Reference ID:</b> {{ $user_reference_id }}</li>
		<li style="padding-top: 5px;"><b>Total BAL Tokens:</b> {{ $bal_amt }} BAL</li>
		@if(!empty($later_bank))
		<li style="padding-top: 5px;"><b>Amount to be paid:</b> {{ $amount }}</li>
		@else
		<li style="padding-top: 5px;"><b>Amount Paid:</b> {{ $amount }}</li>
		@endif
		@if(!empty($reference))
		<li style="padding-top: 5px;"><b>Bank Transfer Reference:</b> {{ $reference }}</li>
		@endif
		@if(!empty($transaction_id))
		<li style="padding-top: 5px;"><b>Transaction ID:</b> {{ $transaction_id }}</li>
		@endif
		<li style="padding-top: 5px;"><b>Your ETH address:</b> {{ $receiver_id }}</li>
	</ul>
		@if(!empty($reference))
		@if(!empty($later_bank))
		<p style="color: black; font-size: 14px !important;">
			You may complete the bank transfer with the following reference no. {{ $reference }}. Send the transfer slip image directly to invest@buyanylight.com so we can facilitate the transaction immediately.
		</p>
		@else
		<p style="color: black; font-size: 14px !important;">
			Send the transfer slip image directly to invest@buyanylight.com so we can facilitate the transaction immediately.
		</p>
		@endif
		@if(strpos($amount, 'USD') !== false)
		<p style="color: black; font-size: 14px !important">Bank Details:</p>
		<ul style="color: black; list-style:none;">
			<li style="padding-top: 5px;"><b>Account Holder:</b> Dotcom Ventures FZE</li>
			<li style="padding-top: 5px;"><b>Holder Address:</b> <span>UAQ Free Trade Zone,
				  											P.O. Box 7073,
				  											Umm Al Quwain,
				  											United Arab Emirates</span></li>
			<li style="padding-top: 5px;"><b>Account Number:</b> 1025511569802</li>
			<li style="padding-top: 5px;"><b>IBAN:</b> AE340260001025511569802</li>
			<li style="padding-top: 5px;"><b>SWIFT/BIC:</b> EBILAEADJAZ</li>
			<li style="padding-top: 5px;"><b>Reference:</b> {{$reference}}</li>
			<li style="padding-top: 5px;"><b> Bank Address:</b> <span>Emirates NBD,
				  											Jabal Ali Branch,
				  											Dubai, United Arab Emirates</span></li>
		</ul>
		@else
		<p style="color: black; font-size: 14px !important"><b>Bank Details:</b></p>
		<ul>
			<li style="padding-top: 5px;"><b>Account Holder:</b> Dotcom Ventures FZE</li>
			<li style="padding-top: 5px;"><b>Holder Address:</b> <span>UAQ Free Trade Zone,
				  											P.O. Box 7073,
				  											Umm Al Quwain,
				  											United Arab Emirates</span></li>
			<li style="padding-top: 5px;"><b>Account Number:</b> 1025511569803</li>
			<li style="padding-top: 5px;"><b>IBAN:</b> AE340260001025511569803</li>
			<li style="padding-top: 5px;"><b>SWIFT/BIC:</b> EBILAEADJAZ</li>
			<li style="padding-top: 5px;"><b>Reference:</b> {{$reference}}</li>
			<li style="padding-top: 5px;"><b>Bank Address:</b><span>Emirates NBD,
				  											Jabal Ali Branch,
				  											Dubai, United Arab Emirates</span></li>
		</ul>
		@endif
		<p style="color: black; font-size: 14px !important">
			BuyAnyLight is a project operated by <a href="https://buyanylight.com/terms">Dotcom Ventures FZE</a>.
		</p>

		@endif






	<p style="color: black; font-size: 14px !important">
		In case you haven’t finished the KYC step yet, you may click on the link below for completion:
	</p>
	<p>
		<a href="https://buyanylight.com/kyc-form/{{ $user_reference_id }}?amount={{ $amount }}&bal={{$bal_amt}}&receiver_id={{$receiver_id}}&name={{$name}}&email={{$email}}&number={{$number}}">KYC Form</a>
	</p>
	<p style="color: black; font-size: 14px !important">
		Attached in this email is the Token Sale Agreement for your reference. If we can be of further service, feel free to contact us via our social media platforms.
	</p>
		<p style="color: black; font-size: 14px">
		Thanks for your support, trust and investment.
	</p>
	<p style=" color: black; font-size: 14px;">
	Sincerely,<br><br>
	{{ config('app.name') }} Team <br>
	Email: invest@buyanylight.com <br>
	Phone: +971 (0) 488 732 65 <br>
	Address: DIP, Dubai, UAE
		
	</p>
</div>


@endcomponent
