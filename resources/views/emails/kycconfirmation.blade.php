@component('mail::message')
<div style="color: black; font-size: 14px;">
	<p style="color: black; font-size: 14px">
		Greetings {{ $name }}!
	</p>
	<p style=" color: black; font-size: 14px">
		Your effort to complete the Know Your Customer (KYC) form is greatly appreciated. The details you provided are as follows:
	</p>
	<ul style=" color: black; list-style: none;">
		<li><b>Reference ID:</b> {{ $user_reference_id }}</li>
		<li style="padding-top: 5px;"><b>Name:</b> {{ $name }}</li>
		<li style="padding-top: 5px;"><b>Email:</b> {{ $email }}</li>
		<li style="padding-top: 5px;"><b>Mobile:</b> {{ $number }}</li>
		<li style="padding-top: 5px;"><b>BAL Tokens Total Value:</b> {{ $bal_amt }}</li>
		<li style="padding-top: 5px;"><b>Amount Paid:</b> {{ $amount }}</li>
		<li style="padding-top: 5px;"><b>Country:</b> {{ $country }}</li>
		<li style="padding-top: 5px;"><b>Your ETH address:</b> {{ $receiver_id }}</li>
		<li style="padding-top: 5px;"><b>User Verification ID:</b> Received</li>
		<li style="padding-top: 5px;"><b>User Selfie Verification:</b> Received</li>
	</ul>
	<p style="color: black; font-size: 14px">
		We will secure the transfer of {{ $bal_amt }} BAL tokens into your account as immediately as possible. After this part: You may check the amount in your ETH address: [{{ $receiver_id }}] thereafter. You may also check <a href=" https://kb.myetherwallet.com/en/tokens/how-to-add-custom-token/"> this link</a> on how you can add custom tokens to your ETH wallet hassle-free.
	</p>
	<p style="color: black; font-size: 14px">
		It is a pleasure to serve you. Connect with all of our channels if you need further assistance and cooperation.
	</p>
	<p style="color: black; font-size: 14px;">
	Thanks,<br>
	{{ config('app.name') }} Team	
	</p>

@endcomponent
</div>

