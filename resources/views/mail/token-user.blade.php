<p>Hello {{ $name }},</p>
<p>Thank you for your trust, support and BAL Token investment during our
private sale.</p>
<p>Please find below your reference ID and further details concerning your
transaction:</p>
<ul>
	<li>Reference ID: {{ $user_reference_id }}</li>
	<li>BAL Tokens purchased: {{ number_format($bal_amt) }}</li>
	<li>Amount Paid: {{ $amount }}</li>
	@if(empty($reference))
	@else
		<li>Bank Transfer reference: {{ $reference }}</li>
	@endif
	@if(empty($transaction_id))
	@else
		<li>Transaction ID: {{ $transaction_id }}</li>
	@endif
		<li>Your ETH address: {{ $receiver_id }}</li>
</ul>

<p>In case you haven’t filled out the Know Your Customer (KYC) form, please
complete it by accessing the following link:</p>
<a href="http://192.168.1.204:8004/kyc-form/{{ $user_reference_id }}?amount={{ $amount }}&bal={{$bal_amt}}&receiver_id={{$receiver_id}}&name={{$name}}&email={{$email_id}}">KYC Form</a>

<p>
	For any further queries, please contact us at 
	<a href="mailto:invest@buyanylight.com">invest@buyanylight.com</a>  or call us at +971 (0) 488 732 65.
</p>

<p>
	Our Token Sale Agreement is attached for your reference.
</p>


<p>Thank You!
<br>
Team BuyAnyLight
</p>