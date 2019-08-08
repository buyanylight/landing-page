@extends('layouts.mobile-layout')

@section('css')
	<link rel="stylesheet" href="css/ieo-mobile.css?v=1">
@endsection

@section('content')
<section class="section-1">
	<div class="section-1-bg pt-5">
		<div class="text-center h-100 d-flex align-items-center justify-content-center">
			<div>
				<h3 class="text-white">
					<b>BAL Initial Exchange <br> Offering (IEO)</b>
				</h3>
				<div class="pt-2">
					<a href="" class="btn btn-light btn-round w-100"><b><span class="header-text">One Pager</span></b></a>
				</div>
				<div class="pt-2">
					<a href="" class="btn btn-light btn-round w-100"><b><span class="header-text">White Paper</span></b></a>
				</div>
				<div class="pt-2">
					<a href="" class="btn btn-light btn-round w-100"><b><span class="header-text">Yellow Paper</span></b></a>
				</div>

			</div>
		</div>
	</div>
	<div class="bg-ieo countdown rounded-circle">
		<div class="d-flex align-items-center h-100" style="padding: 20px; padding-bottom: 5rem;">
			<div class="w-100">	
				<h4 class="text-center text-white"><b>IEO PRE SALE</b></h4>
				<div class="w-100 pt-2">
					<p class="text-white text-center mb-0"><b>Private Sale starts in:</b></p>
					<div id="timer" class="pt-2 pb-2 bg-white text-center d-flex justify-content-center">
						<div class="row" style="width: 90%">
							<div class="col p-0 text-center">
		  						<div id="days" class="d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		  						<div id="hours" class=" d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		  						<div id="minutes" class=" d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		  						<div id="seconds" class=" d-inline-block"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-100">
					<p class="text-white text-center pt-3 mb-0"><b>Public Sale starts in:</b></p>
					<div id="timer" class=" pt-2 pb-2 bg-white text-center d-flex justify-content-center">
						<div class="row" style="width: 90%">
							<div class="col p-0 text-center">
		 						<div id="days1" class="d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		 						<div id="hours1" class=" d-inline-block"></div>
							</div>
							<div class="col  p-0 text-center">
		 						<div id="minutes1" class=" d-inline-block"></div>
							</div>
							<div class="col p-0 text-center">
		 						<div id="seconds1" class=" d-inline-block"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-2">
	<div class="container pb-3">
		<h3 class="text-left pb-3">
			<b>
				<span class="header-text">BAL Initial Exchange</span>
				<br>
				<span>Offering (IEO)</span>
			</b>
		</h3>
		<div class="text-left">
			<p>
				BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowd funding campaign aimed at raising funds for the development of a decentralized, peer to peer marketplace for lighting products and expansion of the existing BAL Network. It is a framework for addressing the unique challenges faced by lighting contractors, manufacturers and buyers as it combines revolutionary technologies such as blockchain and cryptography, smart contracts, fintech and tokenization.
			</p>
			<p>
				We understand and embrace the new blockchain-powered technologies that can optimize sourcing within the light industry and strive to lay the digital infrastructure for smarter light sourcing in a seamless, cost effective way.
			</p>
		</div>
	</div>
	<div class="container pt-3">
		<h3 class="pb-3">
			<b>
				<span class="header-text">What is BAL</span> Token?
			</b>
		</h3>
		<div>
			<p>
				BAL is an ERC 20 compliant digital asset deployed on Ethereum blockchain. It allows peer to peer mode of payment, store and exchange of value and is specifically designed for supporting larger volumes of transactions and creation of a complete financial ecosystem. It offers quick, secure and efficient transfer of value with high confirmation speed.
			</p>
		</div>
	</div>
	<div class="container pt-3 pb-5">
		<img src="{{ asset('images/mobile_bg/ieo/2.png')}}" width="100%">
	</div>
</section>
@endsection