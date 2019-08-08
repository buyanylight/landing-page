@extends('layouts.main-layout')

@section('css')
	<link rel="stylesheet" href="css/ieo.css?v=1">
@endsection

@section('content')
<section class="section-1 pt-5 ">
	<div class="container h-100">
		<div class="row w-100 h-100 d-flex align-items-center">
			<div class="col-md-8">
				<h3 style="line-height: 1.5">
					<strong>
						<span class="text-white">
							<b>BAL Initial Exchange</b>
						</span>
					</strong> 
					<br>
					<span class="text-white"> 
						<b>Offering (IEO)</b> 
					</span>
				</h3>
				<div class="pt-1">
					<a href="" class="btn btn-ieo">One Pager</a>
					<a href="" class="btn btn-ieo">White Paper</a>
					<a href="" class="btn btn-ieo">Yellow Paper</a>
				</div>
			</div>
			<div class="col-md-4 bg-ieo countdown rounded-circle">
				<div class="d-flex align-items-center h-100" style="padding: 20px; padding-bottom: 3rem;">
					<div class="w-100">	
						<h4 class="text-center text-white"><b>IEO PRE SALE</b></h4>
						<div class="w-100 pt-2">
							<p class="text-white text-center mb-0"><b>Private Sale starts in:</b></p>
							<div id="timer" class="pt-2 pb-2 bg-white text-center d-flex justify-content-center">
								<div class="row" style="width: 90%">
									<div class="col-md-3 p-0 text-center">
		  								<div id="days" class="d-inline-block"></div>
									</div>
									<div class="col-md-3 p-0 text-center">
		  								<div id="hours" class=" d-inline-block"></div>
									</div>
									<div class="col-md-3 p-0 text-center">
		  								<div id="minutes" class=" d-inline-block"></div>
									</div>
									<div class="col-md-3 p-0 text-center">
		  								<div id="seconds" class=" d-inline-block"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="w-100">
							<p class="text-white text-center pt-3 mb-0"><b>Public Sale starts in:</b></p>
							<div id="timer" class=" pt-2 pb-2 bg-white text-center d-flex justify-content-center">
								<div class="row" style="width: 90%">
									<div class="col-md-3 p-0 text-center">
		  								<div id="days1" class="d-inline-block"></div>
									</div>
									<div class="col-md-3 p-0 text-center">
		  								<div id="hours1" class=" d-inline-block"></div>
									</div>
									<div class="col-md-3  p-0 text-center">
		  								<div id="minutes1" class=" d-inline-block"></div>
									</div>
									<div class="col-md-3 p-0 text-center">
		  								<div id="seconds1" class=" d-inline-block"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-2 pt-5">
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-md-6">
					<img src="{{ asset('images/ieo/2.png')}}" width="80%">		
			</div>
			<div class="col-md-6">
				<h3>
					<strong>
						<span class="header-text">
							About BAL Initial Exchange
						</span> 
						<span class="text-dark">
							 Offering (IEO)
						</span> 
					</strong> 
				</h3>
				<div class="pt-3">
					<p>
						BuyAnyLight (BAL) Initial Exchange Offering (IEO) is a crowd funding campaign aimed at raising funds for the development of a decentralized, peer to peer marketplace for lighting products and expansion of the existing BAL Network. It is a framework for addressing the unique challenges faced by lighting contractors, manufacturers and buyers as it combines revolutionary technologies such as blockchain and cryptography, smart contracts, fintech and tokenization.
					</p>
					<p>
						We understand and embrace the new blockchain-powered technologies that can optimize sourcing within the light industry and strive to lay the digital infrastructure for smarter light sourcing in a seamless, cost effective way.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-5 pb-5">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-md-6">
					<h3>
						<strong>
							<span class="header-text">
							 	What is BAL  
							</span>
							<span>
								Token?
							</span>
						</strong> 
					</h3>
					<p>
						BAL is an ERC 20 compliant digital asset deployed on Ethereum blockchain. It allows peer to peer mode of payment store and exchange of value and is specifically designed for supporting larger volumes of transactions and creation of a complete financial ecosystem. It offers quick, secure and efficient transfer of value with high confirmation speed.
					</p>
				</div>
				<div class="col-md-6 text-center">	
					<img src="{{ asset('images/ieo/3.png')}}" width="80%">		
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-3 pt-5 pb-5">
	<div class="text-center pt-5">
		<img src="{{ asset('images/ieo/4.png')}}" width="50%">
	</div>
	<div class="container pt-5 pb-5">
		<div class="pt-1 text-center">
			<h3>
				<b>Do you want to know more?</b>
			</h3>
			<p class="pt-3">
				Download and get more detailed information <br> about out initial exchange offering
			</p>
			<div class="buttons pt-3">
				<a href="" class="btn btn-ieo ">One Pager</a>
				<a href="" class="btn btn-ieo ml-3">White Paper</a>
				<a href="" class="btn btn-ieo ml-3">Yellow Paper</a>
			</div>
		</div>
	</div>
</section>
<section class="section-4">
	<div class="bg-black pt-5 pb-5">
		<div class="container pt-5 pb-5">
			<div class="row d-flex align-items-center">
				<div class="col-md-6">
					<h3>
						<strong>
							<span class="header-text">
							 	Our
							</span>
							<span class="text-white">
								Vision
							</span>
						</strong> 
					</h3>
					<p class="text-white">
						Our vision is to become the leading global platform of choice for buyers and sellers dealing in LED lighting. Through BAL Marketplace, we aim to democratize the access to sourcing of lighting products without the influence of a centralized authority or intermediary.
					</p>
				</div>
				<div class="col-md-6 text-center">
					<div>
						<a  data-fancybox href="https://www.youtube.com/embed/o8CAwwz6tIM">
							<img src="{{asset('images/mv-img.png')}}" alt="..." class="rounded-circle mv-img" width="35%">
							
							<div class="text-dark yt">
								<i class="fab fa-youtube"></i>
							</div>
							
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-5 pb-5">
			<div class="row d-flex align-items-center">
				<div class="col-md-6 text-center">
					<a data-fancybox href="https://www.youtube.com/embed/5nMkricvzfc" >
						<div>
							<img src="{{asset('images/mv-img.png')}}" alt="..." class="rounded-circle mv-img" width="35%">
							<div class="text-dark yt">
								<i class="fab fa-youtube "></i>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<h3>
						<strong>
							<span class="header-text">
							 	Our
							</span>
							<span class="text-white">
								Mission
							</span>
						</strong> 
					</h3>
					<p class="text-white">
						Creation of a modern-age lighting products marketplace by fully harnessing the blockchain, smart contracts and cryptographic technology. Principled, honest and focused, we leverage the world’s best suppliers and deliver the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-5 pt-5">
	<div class="container pt-5 pb-5 text-center">
		<h3>
			<strong>
				<span class="header-text">
					Why choose
				</span>
				<span class="text-dark">
					BAL token?
				</span>
			</strong> 
		</h3>
		<div class="row pt-5">
			<div class="col-md-4">
				<div>
					<img src="{{ asset('images/ieo/6-1.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Decentralization</b>
						</h5>
						<p class="pt-1">
							Unlike traditional marketplaces and payment networks, there is no single point of failure. All transactional activities happening within the BAL ecosystem are open and transparent to the whole community.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<img src="{{ asset('images/ieo/6-2.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Security</b>
						</h5>
						<p class="pt-1">
							BAL Token uses Ethereum blockchain based proof of work consensus for confirming transactions, which makes it completely decentralized and one of the most secure digital assets. All your transactional data is encrypted, and your digital assets reserved in a wallet only you can access.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<img src="{{ asset('images/ieo/6-3.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Utility</b>
						</h5>
						<p class="pt-3">
							BAL Token has inherent utility within the BAL Marketplace, a leading marketplace based in Dubai, UAE, allowing it to be accepted as a mode of payment for lighting products.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-5 pb-5">
			<div class="col-md-4">
				<div>
					<img src="{{ asset('images/ieo/6-4.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Liquidity and Easy Transaction</b>
						</h5>	
						<p class="pt-1">
							Easily liquidate or transfer your BAL Token to anyone, anywhere in the world through a secure, encrypted digital wallet.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<img src="{{ asset('images/ieo/6-5.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Nominal Transactional Fee</b>
						</h5>
						<p class="pt-1">
							BAL Marketplace deducts significantly lower fee than any other major online payment system: enabling users to send, receive or perform any transactional activity at minimal costs.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<img src="{{ asset('images/ieo/6-6.png') }}" width="20%">
					<div class="pt-3">
						<h5>
							<b>Transparency</b>
						</h5>
						<p class="pt-1">
							Deployment of all transactional records on a transparent blockchain ensures visibility and eliminates fraud.
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section >
<section class="section-6">
	<div class="bg-black pt-5 pb-5">
		<div class="container pt-5 pb-5 text-center">
			<h3>
				<strong>
					<span class="header-text">
						BAL
					</span>
					<span class="text-white">
						Roadmap
					</span>
				</strong> 
			</h3>
			<div class="pt-5">	
				<ul class="timeline" id="timeline">
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2014</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class=" p-0 map-list">
      										<li>
      											Establishment of Almani Lighting in Germany
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2015</span>
     					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="pl-0 map-list">
      										<li>
      											Establishment of the Almani Lighting Dubai, UAE Branch		
      										</li>
      									</ul> 
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class=" map-list pl-0">
      										<li>
      											Cooperation with Asas Holdings, UAE
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2017</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											Establishment of a state-of-the-art showroom
      										</li>
      									</ul>	 
      								</div>	
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2018</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Idea inception of the BAL Platform
      												</li>
      												<li>
      													Initial Research
      												</li>
      												<li>
      													Team Building
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Platform Development Initiated
      												</li>
      												<li>
      													BAL Website development
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2019</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													White Paper Drafting for the BAL Platform
      												</li>
      												<li>
      													Centralized Platform completed and ready for user review
      												</li>
      												<li>
      													Token Development
      												</li>
      												<li>
      													IEO planning and launching
      												</li>
      												<li>
      													Marketing Campaign Kick-off
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Exchange listing and IEO
      												</li>
      												<li>
      													Hybrid Blockchain work initialized
      												</li>
      												<li>
      													Participation in Roadshows
      												</li>
      												<li>
      													Smart Contracts implementation
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2020</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Wallet Launch with the functionality of Crosschain Swapping
      												</li>
      												<li>
      													Blockchain testing and improvement
      												</li>
      												<li>
      													Team expansion
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Mobile application launch
      												</li>
      												<li>
      													Mobile wallet launch
      												</li>
      												<li>
      													Business expansion into Indian markets
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
  					<li class="li complete">
    					<div class="timestamp">
      						<span class="author text-white pb-4">2021</span>
    					</div>
    					<div class="status">
      						<div class="one-map pt-4 text-left"> 
      							<div class="card">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q1-Q2</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Migration from Ethereum to Patented Blockchain
      												</li>
      												<li>
      													Cloud Staking Functionality Implemented
      												</li>
      												<li>
      													On-chain logistic, freight tracking functionality implemented
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      							<div class="card mt-2">
      								<div class="card-body">
      									<ul class="map-list pl-0">
      										<li>
      											<b>Q2-Q3</b>
      											<ul class="pl-3 pt-2">
      												<li>
      													Business expansion to American markets
      												</li>
      											</ul>
      										</li>
      									</ul>
      								</div>
      							</div>
      						</div>
    					</div>
  					</li>
 				</ul>  
 				<div class="arrows pt-3"></div>   
			</div>
		</div>
	</div>
</section>
<section class="section-7">
	<div class="pt-5">
		<div class="container pt-5 pb-5">
			<h3 class="text-center">
				<strong>
					<span class="header-text">
						Custom Token
					</span>
					<span class="text-dark">
						Information
					</span>
				</strong> 
			</h3>
			<div class="text-center pt-5">
				<div class="row">
					<div class="col-md-6">
						<div>
							<table class="text-left w-100" cellpadding="10" id="token-info">
								<tr>
									<td>Token Name:</td>
									<td>BAL</td>
								</tr>
								<tr>
									<td>Ticker:</td>
									<td>BAL</td>
								</tr>
								<tr>
									<td>Token Type:</td>
									<td>ERC20</td>
								</tr>
								<tr>
									<td>Blockchain Deployed:</td>
									<td>Ethereum</td>
								</tr>
								<tr>
									<td>Total Supply</td>
									<td>55,000,000(100%)</td>
								</tr>
								<tr>
									<td>Supply Reserved for IEO:</td>
									<td>16,500,000(30%)</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<table class="text-left w-100" id="token-info"> 
								<tr>
									<td>Soft Cap:</td>
									<td>1,000,000 $</td>
								</tr>
								<tr>
									<td>Hard Cap:</td>
									<td>5,000,000 $</td>
								</tr>
								<tr>
									<td>IEO Token Price:</td>
									<td>1BAL = 0.30303 USD (XXX ETH)</td>
								</tr>
								<tr>
									<td>Know Your Customer (KYC):</td>
									<td>No</td>
								</tr>
								<tr>
									<td>Token Issue:</td>
									<td>30.11.2019</td>
								</tr>
								<tr>
									<td>Accepts:</td>
									<td>ETH, BTC</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-5 pb-5">
		<div class="container">
			<h3 class="text-left">
				<strong>
					<span class="header-text">
						Funds Distribution
					</span>
					<span class="text-dark">
						Plan
					</span>
				</strong> 
			</h3>
			<div class="pt-3">
				<p>
					We are aiming to make BAL Marketplace as the leading light products marketplace across the globe and have devised a proper plan that would give our dream a practical implementation. The proceeds from the token sale will fund the product launch, continued platform development and user acquisition:
				</p>
			</div>
			<div class="pt-3">
				<div class="row">
					<div class="col-md-4">
						<p><b>DEVELOPMENT AND GROWTH</b></p>
						<p><b>MARKETING EXPENSE</b></p>
						<p><b>HIRING SPECLISTS AND BUILDING TEAM</b></p>
						<p><b>PROMOTER EXPENSE</b></p>
						<p><b>ADMINISTRATIVE CHARGES AND LEGAL ISSUES</b></p>
						<p><b>FOUNDING TEAM</b></p>
					</div>
					<div class="col-md-8">
						<div class="progress">
  							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								40%
  							</p>
						</div>
						<div class="progress mt-4">
  							<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								20%
  							</p>
						</div>
						<div class="progress mt-4">
  							<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
						<div class="progress mt-4">
  							<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
						<div class="progress mt-4">
  							<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
						<div class="progress mt-4">
  							<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  							<p class="w-100 text-right pr-3">
  								10%
  							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-5 pb-5">
		<div class="container">
			<h3 class="text-left">
				<strong>
					<span class="header-text">
						Token
					</span>
					<span class="text-dark">
						Distribution
					</span>
				</strong> 
			</h3>
			<div class="row pt-3 d-flex align-items-center">
				<div class="col-md-6 text-center">
					<img src="{{ asset('images/ieo/graph1.png') }}" width="60%">
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<ul class="token-list">
								<li>
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-1">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												20%
											</span>
											<br>	 
											<span>
												Seed Investor Allocation
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-2">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												10%
											</span>
											<br>	 
											<span>
												Private Round, Angel Investor
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-3">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												30%
											</span>
											<br>	 
											<span>
												Main Sale Event
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-4">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												10%
											</span>
											<br>	 
											<span>
												Team and Management
											</span>	
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="token-list">
								<li >
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-5">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												5%
											</span>
											<br>	 
											<span>
												Bounty and Airdrop
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-6">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												10%
											</span>
											<br>	 
											<span>
												Advisory Board Allocation
											</span>	
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex align-items-start">
										<div class="d-inline-block text-7">
											<i class="fas fa-square"></i>
										</div>
										<div class="d-inline-block pl-2">
											<span> 
												15%
											</span>
											<br>	 
											<span>
												Reserve
											</span>	
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pt-5 pb-5">
		<div class="pt-1 text-center">
			<h3>
				<b>Do you want to know more?</b>
			</h3>
			<p class="pt-3">
				Download and get more detailed information <br> about out initial exchange offering
			</p>
			<div class="buttons pt-3">
				<a href="" class="btn btn-ieo ">One Pager</a>
				<a href="" class="btn btn-ieo ml-3">White Paper</a>
				<a href="" class="btn btn-ieo ml-3">Yellow Paper</a>
			</div>
		</div>
	</div>
</section>
<section class="section-8">
	<div class="pt-5">
		<div class="bg-black pt-5 pb-5">
			<div class="container">
				<h3 class="text-center">
					<strong>
						<span class="header-text">
							Meet Our
						</span>
						<span class="text-white">
							Team
						</span>
					</strong> 
				</h3>
				<div class="row pt-5">
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Johannes Eidens
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Co Managing Partner
						</p>
						<a href="https://www.linkedin.com/in/dotcomv" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Martin Heyen
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Chief Financial Officer, International Expansion
						</p>
						<!-- <a href="" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a> -->
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Leo Vicente
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Chief Technical Officer / Engineering Lead
						</p>
						<a href="https://www.linkedin.com/in/ljvicente/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Rene Rowell
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Blockchain Integration Director
						</p>
						<a href="https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Zain Ul Abdin
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Senior Architect
						</p>
						<a href="https://www.linkedin.com/in/muhammad-zain-ul-abdin-120a3612a/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
				</div>
				<div class="row pt-5">
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Rizvi Iqbal
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Software Developer
						</p>
						<a href="https://www.linkedin.com/in/rizviqbal/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Ryan Quines
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							UI/UX Visual Designer
						</p>
						<a href="https://www.linkedin.com/in/ryan-matthew-quines-551a85152/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Maria Carron Igloso
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Community Manager
						</p>
						<a href="https://www.linkedin.com/in/maria-carron-igloso-1324b5105/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Tiffany Anggot
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Cryptography Researcher
						</p>
						<a href="https://www.linkedin.com/in/tiffany-jel-a-367548147/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Nantha Kumar
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Sales Director
						</p>
						<a href="https://www.linkedin.com/in/nantha-kumar-36b92685/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
				</div>
				<div class="pt-5">
					<h3 class="text-center">
						<strong>
							<span class="header-text">
								Our Advisory
							</span>
							<span class="text-white">
								Board
							</span>
						</strong> 
					</h3>
				</div>
				<div class="row pt-5">
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Dr. Moritz Eidens
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							CEO PharmGenomics GmbH
						</p>
						<a href="https://www.linkedin.com/in/dr-moritz-eidens-80550910/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Ralph Kattan
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Early BAL Investor. Fintech, Blockchain researcher & Digital Assets expert.
						</p>
						<a href="" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Khalid Almutawa
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Partner and Chairman ASAS Holding Group
						</p>
						<a href="https://www.linkedin.com/in/ljvicente/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div class="col text-center">
						<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Dr. Stefan Freh
							</b>
						</p>
						<p class="text-white pt-1 mb-1">
							Specialist Solicitor Industrial Law
						</p>
						<!-- <a href="https://www.linkedin.com/in/rene-rowell-dela-rama-3ab529148/" class="pt-2 text-white" style="font-size: 20px;">
							<i class="fab fa-linkedin"></i>
						</a> -->
					</div>
					<div class="col text-center">
					<!-- 	<img src="{{ asset('images/ieo/team.png')}}" class="rounded-circle team-img">
						<p class="header-text pt-3 mb-0">
							<b>
								Advisor
							</b>
						</p>
						<p class="text-white pt-1">
							sdfsd
						</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-9">
	<div class=" h-100 d-flex align-items-center">
		<div class="container">
			<div class="card newsletter-card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h4>
								<b>
									Sign up for our IEO newsletter
								</b>
							</h4>
							<p>
								Some text here
							</p>
							<div>
								<form  action="https://buyanylight.us3.list-manage.com/subscribe/post?u=22d8456f8db4bacaef7a16d53&amp;id=7b85cd9f3f" method="post" class="input-group mt-3" name="mc-embedded-subscribe-form" novalidate target="_blank">
	                            <input type="email" name="EMAIL" class="form-control" placeholder="Your Email Address">
	                            	<div class="input-group-append">
	                                	<button type="submit" class="btn btn-ieo">
	                                    	Subscribe now
	                                	</button>
	                            	</div>
	                        	</form>
							</div>
						</div>
						<div class="col-md-4 d-flex justify-content-center">
							<img src="{{ asset('images/ieo/7.png')}}" width="50%">
						</div>
					</div>
				</div>
			</div>
			<div class="pt-5">
				<h4 class="text-center">
					<b>
						Want to know more about our Private Round? 
						<a href="/contact" class="header-text">
							<span >
								Contact Us!		
							</span>
						</a>

						
					</b>
				</h4>
			</div>
		</div>
	</div>
</section>


@endsection