@component('mail::message')
Hello Admin,

New BAL Token purchase transaction details: 

<ul style=" list-style: none;">
	<li><b>User Reference ID:</b> {{ $user_reference_id }}</li>
	<li style="padding-top: 10px;"><b>Name:</b> {{ $name }}</li>
	<li style="padding-top: 10px;"><b>Email:</b> {{ $email }}</li>
	<li style="padding-top: 10px;"><b>BAL Tokens Total Value:</b> {{ $bal_amt }} BAL</li>
	<li style="padding-top: 10px;"><b>Amount Paid:</b> {{ $amount }}</li>
	@if(!empty($reference))
	<li style="padding-top: 10px;"><b>Bank Transfer Reference:</b> {{ $reference }}</li>
	@endif
	@if(!empty($transaction_id))
	<li style="padding-top: 10px;"><b>Transaction ID:</b> {{ $transaction_id }}</li>
	@endif
	<li style="padding-top: 10px;"><b>Your ETH address:</b> {{ $receiver_id }}</li>
</ul>


Thanks,<br>
@endcomponent
