<h2>Hello {{ $name }},</h2>
<p>Email confirmation for the completed transaction</p>
<p>Here are the details:</p>
<ul>
	<li>Amount Paid: {{ $amount }}</li>
	@if(empty($reference))
	@else
		<li>Bank Transfer reference: {{ $reference }}</li>
	@endif
	@if(empty($transaction_id))
	@else
		<li>Transaction ID: {{ $transaction_id }}</li>
	@endif
		<li>Receiver ID: {{ $receiver_id }}</li>
</ul>

<p>Incase you havent completed the KYC form, Please completed it in given link below:</p>
<a href="https://buyanylight.com/kyc-form">KYC Form</a>


<p>Thank You</p>