@component('mail::message')
Hello Admin,

New BAL Token purchase transaction details: 

<ul style=" list-style: none;">
	<li><b>User Reference ID:</b> {{ $user_reference_id }}</li>
	<li style="padding-top: 10px;"><b>Name:</b> {{ $name }}</li>
	<li style="padding-top: 10px;"><b>Email:</b> {{ $email }}</li>
	<li style="padding-top: 10px;"><b>Mobile:</b> {{ $number }}</li>
	<li style="padding-top: 10px;"><b>Total BAL Tokens:</b> {{ $bal_amt }} BAL</li>
	@if(!empty($reference))
	<li style="padding-top: 10px;"><b>Bank Transfer Reference:</b> {{ $reference }}</li>
	@if(!empty($later_bank))
	<li style="padding-top: 10px;"><b>Amount to be paid:</b> {{ $amount }}</li>
	<li style="padding-top: 10px;"><b>Bank Transfer Done:</b> No</li>
	@else
	<li style="padding-top: 10px;"><b>Amount Paid:</b> {{ $amount }}</li>
	<li style="padding-top: 10px;"><b>Bank Transfer Done:</b> Yes</li>
	@endif
	@endif
	@if(!empty($transaction_id))
	<li style="padding-top: 10px;"><b>Transaction ID:</b> {{ $transaction_id }}</li>
	@endif
	<li style="padding-top: 10px;"><b>User ETH address:</b> {{ $receiver_id }}</li>
</ul>


Thanks,<br>
@endcomponent
