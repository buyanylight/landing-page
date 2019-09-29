<p>Hello {{ $name }}, </p>
<p>Thank you for completing the Know Your Customer (KYC) form.</p>
<p>We have received the following details:</p>
<ul>
	<li>Reference ID : {{ $user_reference_id }}</li>
	<li>Name: {{ $name }}</li>
	<li>Email: {{ $email_id }}</li>
	<li>BAL Tokens purchased: {{ number_format($bal_amt) }} BAL</li>
	<li>Amount Paid: {{ $amount }}</li>
	<li>Country: {{ $country }}</li>
	<li>User verification ID  image: Received</li>
	<li>User selfie verification image: Received</li>
</ul>
<p>You will receive your {{ number_format($bal_amt) }} BAL Tokens very soon. We will send them to the following ETH address: {{ $receiver_id }}</p>
<p>
	For any further queries, please contact us at 
	<a href="mailto:invest@buyanylight.com">invest@buyanylight.com</a> or call us at +971 (0) 488 732 65.
</p>

<p>
	Thanks again for your trust, support and BAL Token investment during our private sale.
</p>

<p>Thank You!
	<br>
	Team BuyAnyLight
</p>



