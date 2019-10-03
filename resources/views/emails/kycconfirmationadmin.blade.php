@component('mail::message')
<div>

	<p>
		Hello Admin,
	</p>
	<p>
		Received a new KYC form
	</p>
	<p>
		Here are the details:
	</p>

	<ul style=" list-style: none;">
		<li><b>Reference ID:</b> {{ $user_reference_id }}</li>
		<li style="padding-top: 10px;"><b>Name:</b> {{ $name }}</li>
		<li style="padding-top: 10px;"><b>Email:</b> {{ $email }}</li>
		<li style="padding-top: 10px;"><b>BAL Tokens Total Value:</b> {{ $bal_amt }}</li>
		<li style="padding-top: 10px;"><b>Amount Paid:</b> {{ $amount }}</li>
		<li style="padding-top: 10px;"><b>Country:</b> {{ $country }}</li>
		<li style="padding-top: 10px;"><b>User ETH address:</b> {{ $receiver_id }}</li>
		<li style="padding-top: 10px;"><b>User Verification ID:</b> {{ $user_id }}</li>
		<li style="padding-top: 10px;"><b>User Selfie Verification:</b> {{ $selfie_user_id }}</li>
	</ul>
	<p style="font-size: 14px;">
	Thanks,<br>
	{{ config('app.name') }}
	</p>
</div>

@endcomponent
