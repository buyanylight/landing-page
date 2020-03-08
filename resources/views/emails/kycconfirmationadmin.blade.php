@component('mail::message')
<div>

	<p>
		Hello Admin,
	</p>
	<p>
		Received a new KYC form.
	</p>
	<p>
		Here are the details:
	</p>

	<ul style=" list-style: none;">
		<li><b>Reference ID:</b> {{ $user_reference_id }}</li>
		<li style="padding-top: 10px;"><b>Name:</b> {{ $name }}</li>
		<li style="padding-top: 10px;"><b>Email:</b> {{ $email }}</li>
		<li style="padding-top: 10px;"><b>Mobile:</b> {{ $number }}</li>
		<li style="padding-top: 10px;"><b>Total BAL Tokens:</b> {{ $bal_amt }} BAL</li>
		@if(!empty($later_bank))
		<li style="padding-top: 10px;"><b>Amount Paid*:</b> {{ $amount }}</li>
		@else
		<li style="padding-top: 10px;"><b>Amount Paid:</b> {{ $amount }}</li>
		@endif
		<li style="padding-top: 10px;"><b>Country:</b> {{ $country }}</li>
		<li style="padding-top: 5px;"><b>Physical Address:</b> {{ $address }}</li>
		<li style="padding-top: 10px;"><b>User ETH address:</b> {{ $receiver_id }}</li>
		<li style="padding-top: 10px;"><b>User Verification ID:</b> {{ $user_id }}</li>
		<li style="padding-top: 10px;"><b>User Selfie Verification:</b> {{ $selfie_user_id }}</li>
	</ul>

	@if(!empty($reference))
	<p style="font-size: 14px; color:black !important;
	">
		Please check if the bank transfer has been done with the reference {{ $reference }}.
	</p>
	@endif
	<p style="font-size: 14px;">
	Thanks,<br>
	{{ config('app.name') }}
	</p>
</div>

@endcomponent
