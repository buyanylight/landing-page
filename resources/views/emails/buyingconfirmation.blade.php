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
		<li style="padding-top: 10px;"><b>BAL Tokens Total Value:</b> {{ $bal_amt }}</li>
		<li style="padding-top: 10px;"><b>Amount Paid:</b> {{ $amount }}</li>
		@if(!empty($reference))
		<li style="padding-top: 10px;"><b>Bank Transfer Reference:</b> {{ $reference }}</li>
		@endif
		@if(!empty($transaction_id))
		<li style="padding-top: 10px;"><b>Transaction ID:</b> {{ $transaction_id }}</li>
		@endif
		<li style="padding-top: 10px;"><b>Your ETH address:</b> {{ $receiver_id }}</li>
	</ul>
	<p style="color: black; font-size: 14px !important">
		We would also want to ensure that you fill up the Know Your Customer (KYC) Form, so we could integrate your data into the system. You may complete the step by clicking the link below:
	</p>
	<p>
		<a href="https://buyanylight.com/kyc-form/{{ $user_reference_id }}?amount={{ $amount }}&bal={{$bal_amt}}&receiver_id={{$receiver_id}}&name={{$name}}&email={{$email}}&number={{$number}}">KYC Form</a>
	</p>
	<p style="color: black; font-size: 14px !important">
		Attached in this email is the Token Sale Agreement for your reference. If we can be of further service, feel free to contact us in all our avenues. Again, we value doing business with you.
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
