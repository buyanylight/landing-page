<h2>Hello Admin,</h2>
<p>You received a transaction for BAL Token</p>
<p>Here are the details:</p>
<ul>
	<li>User ID: {{$user_reference_id}}</li>
	<li>Name: {{ $name }}</li>
	<li>Email: {{ $email_id }}</li>
	<li>BAL Tokens: {{ $bal_amt }}</li>
	<li>Amount paid: {{ $amount }}</li>
	@if(empty($reference))
	@else
		<li>Bank transfer reference: {{ $reference }}</li>
	@endif
	@if(empty($transaction_id))
	@else
		<li>Transaction ID: {{ $transaction_id }}</li>
	@endif
		<li>Receiver ID: {{ $receiver_id }}</li>
</ul>

<p>Thank You</p>