@component('mail::message')
<div style="color: black; font-size: 14px;">
	<p style="font-size: 14px">
		Greetings {{ $name }}!
	</p>
	<p style="font-size: 14px">
		Your effort to complete the Know Your Customer (KYC) form is greatly appreciated. The details you provided are as follows:
	</p>
	<ul style=" list-style: none;">
		<li><b>Reference ID:</b> {{ $user_reference_id }}</li>
		<li style="padding-top: 10px;"><b>Name:</b> {{ $name }}</li>
		<li style="padding-top: 10px;"><b>Email:</b> {{ $email }}</li>
		<li style="padding-top: 10px;"><b>BAL Tokens Total Value:</b> {{ $bal_amt }}</li>
		<li style="padding-top: 10px;"><b>Amount Paid:</b> {{ $amount }}</li>
		<li style="padding-top: 10px;"><b>Country:</b> {{ $country }}</li>
		<li style="padding-top: 10px;"><b>Your ETH address:</b> {{ $receiver_id }}</li>
	</ul>
	<p style="font-size: 14px">
		You will receive your {{ $bal_amt }} BAL Tokens very soon. We will send them to the following ETH address: {{ $receiver_id }}
	</p>
	<p style="font-size: 14px">
		It is a pleasure to serve you. Connect with all of our channels if you need further assistance and cooperation.
	</p>

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
</div>

