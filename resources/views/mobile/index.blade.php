@extends('layouts.mobile-layout')

@section('content')
<div class="all-contents">
	<div class="section1">
		<div class="h-100 d-flex align-items-start justify-content-center container text-white" style="padding-top: 5rem;">
			<div class="w-100 text-center">
				<h1 class="header-phrase"><b>SOURCING REINVENTED</b></h1>
				<p class="header-sentence">The global platform for LED Lighting</p>
				<div class="container text-center pb-2 mt-3 mb-3">
				
					<a href="https://icobench.com/ico/buyanylight-bal" 
					target="_blank" rel="nofollow" title="BuyAnyLight (BAL) on ICObench">					
						<img border="0" src="https://icobench.com/rated/buyanylight-bal?shape=square&size=m" 						
						style="height: 60px; margin-bottom: -15px; margin-right: 5px;" 
						alt="BuyAnyLight (BAL) ICO rating"/>
					</a>
					
					<a href="https://icomarks.com/ico/buyanylight" 
					target="_blank" rel="nofollow" title="BuyAnyLight ICO">
						<img border="0" src="{{Util::assetUrl('images/ieo/partners/icomarks.svg')}}"
						style="height: 60px; margin-bottom: -15px; margin-left: 5px;" 
						alt="BuyAnyLight ICO Rating"/>
					</a>
				</div>
				<div class="row pt-2">
					<div class="col-12">
						<div class="text-center">
							<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL w-100">
								<small>
									Start your free trial today
								</small>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a data-fancybox  href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="btn btn-BAL w-100 fancybox">
								<small>
									Watch Video
								</small>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a href="{{ route('ieo') }}" class="btn btn-BAL w-100">
								<small>
									IEO
								</small>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight.pdf') }}" 
							target="_blank" 		            
							class="btn btn-BAL w-100">
								<small>
									<i class="far fa-file-pdf mr-2"></i>
									BAL One Pager
								</small> 
							</a>                    
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
							target="_blank" 		            
							class="btn btn-BAL w-100">
								<small>
									<i class="far fa-file-pdf mr-2"></i>
									BAL IEO One Pager
								</small>
							</a>                    
						</div>
					</div>
				</div>
				<div>
					<img src="{{ Util::assetUrl('images/main-image.png') }}" alt="" width="100%">
				</div>
			</div>
		</div>
	</div>
	<div class="section2 pt-5 pb-5" id="all-packages">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card card-body text-center">
						<div class="text-center">
							<img src="{{ Util::assetUrl('images/finder-icon.png') }}" alt="" width="40%">
						</div>
						<div class="card-contents pt-3">
							<h5>
								<b>LightFinder</b>
							</h5>
							<p>B2B & B2C</p>
							<p> LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from
								manufacturers... </p>
								<a href="#finder" class="btn btn-BAL" style="font-size: 13px;">
									<b>Cut LED cost, not quality</b>	
								</a>
								
							</div>
						</div>
					</div>
					<div class="col-12 pt-3">
						<div class="card card-body text-center">
							<div class="text-center">
								<img src="{{ Util::assetUrl('images/home-icon.png') }}" alt="" width="40%">
							</div>
							<div class="card-contents pt-3">
								<h5>
									<b>My Home</b>
								</h5>
								<p>Private homes, villas, and palaces</p>
								<p>Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities...</p>
								<a href="#home" class="btn btn-BAL" style="font-size: 13px;">
									<b>Find dream home LED at dreamy prices</b>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 pt-3">
						<div class="card card-body text-center">
						<div class="text-center">
							<img src="{{ Util::assetUrl('images/tower-icon.png') }}" alt="" width="40%">
						</div>
						<div class="card-contents pt-3">
							<h5>
								<b>My Tower</b>
							</h5>
							<p>Consultants, contractors, clients</p>
							<p>My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package...</p>
							<a href="#tower" class="btn btn-BAL" style="font-size: 13px;">
								<b>Get the best quality and prices ever</b>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section3 pt-3 pb-5" id="about">
		<div class="container">
			<h4 class="text-center">
				<b>About BuyAnyLight</b>
			</h4>
			<div class="row pt-4">
				<div class="col-12">
					<img src="{{ Util::assetUrl('images/about-img.png') }}" alt="" width="100%">
				</div>
				<div class="col-12 pt-4">
					<p>
						BuyAnyLight (BAL) has transformed the way we source LED lighting. The BAL platform gives users:
					</p>
					<ul>
						<li>higher profit margins</li>
						<li>the best possible prices for any light unit</li>
						<li>greater efficiency of lighting procurement</li>
						<li>superb online automation and functionality</li>
						<li>access to top global brand manufacturers.</li>
					</ul>
					<p>
						Whether you have lots of experience with LED lights or none at all, we have a package to help you achieve all your objectives.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section5 pt-5 pb-5" id="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/about(1).png') }}" alt="" width="60%">
					</div>
					<div class="pt-3 text-center">
						<b>A private homeowner?</b>
						<p class="pt-2 text-justify">
							A typical homeowner does not have the technical expertise to understand lux calculations, wattages, IP or IK ratings, lumen per watt, and the same applies to lighting setup and design aesthetics. Use BuyAnyLight to make your home a greener, more stylish and energy-efficient zone by switching to LED Lights. The difference in prices are huge and so will be your energy bill savings.
						</p>
					</div>
				</div>
				<div class="col-12 pt-4">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/about(2).png') }}" alt="" width="60%">
					</div>
					<div class="pt-3 text-center">
						<b>A consultant, contractor or project owner?</b>
						<p class="pt-2 text-justify">
							We've got you covered! We save you time, money and add even more value with the finest technical expertise to specify the ideal LED lights for your project. Your own BAL expert will help you through your project, every step of the way ensuring that you get the best prices, designs and products anywhere in the world. BAL allows contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win situation!
						</p>
					</div>
				</div>
				<div class="col-12 pt-4">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/about(3).png') }}" alt="" width="60%">
					</div>
					<div class="pt-3 text-center">
						<b>Researching LED prices and products?</b>
						<p class="pt-2 text-justify">
							Whether you just want to get an idea of the market or aim to outsource your lighting needs for any of your project, we have got you covered. Our LightFinder platform makes this as easy as submitting an online form. Simply sign up and submit your RFQ (request for quotation). That’s it! Our AI based system will find the right lighting products specially catered for your lighting needs while ensuring the best value in product quality, costs, and service.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section6 pt-5 pb-5" id="why-bal">
		<div class="container">
			<h4 class="text-center">
				<b>WE ALWAYS FIND THE BEST <br> LIGHT AT THE BEST PRICE</b>
			</h4>
			<div class="row pt-4">
				<div class="col-12 text-center">
					<img src="{{ Util::assetUrl('images/about(4).png') }}" alt="" width="50%">
				</div>
				<div class="col-12 text-justify pt-4">
					<p>
						BuyAnyLight (BAL) has the world’s largest network of lighting manufacturers, and we are continually adding more, allowing BAL to provide the best platform for finding any type of LED light. Our AI powered systems and high speed servers match buyer enquiries with the most suitable suppliers within seconds and send out Requests For Quotes (RFQs) instantly. Simply use the powerful BAL tools to select the most competitive: it’s fast – and beautifully simple!
					</p>
					<p>
						BAL secures 100% of your funds until you receive your goods. The system also manages the logistics, so you receive your order on time, safely and securely.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section7 pt-5 pb-5" id="works">
		<div class="container">
			<h4 class="text-center text-white">
				<b>SAVE UP TO 90%...<br> HOW DOES THAT WORK?</b>
			</h4>
			<div class="row text-white pt-4">
				<div class="col-12">
					<img src="{{ Util::assetUrl('images/about(5).png') }}" alt="" width="90%">
				</div>
				<div class="col-12 pt-4 text-justify">
					<p>
						Outsourcing of LED lights has increased hugely in recent years. The digital age, globalisation, increased transparency and continued cost pressures all make outsourcing a viable and attractive option for major brands worldwide.
					</p>
					<p>
						The best outsourcing manufacturers adhere strictly to the brand specifications while also leveraging the low production costs. We are contracted to these factories which supply us with products similar to global brands such as Phillips, Osram etc. at unbelievable prices and of course, fully within the law.
					</p>
					<p>
						Due to the massive overheads such as staff, warehouse, multi-level supply chain these global brands prices are far higher. BAL creates powerful applications that process large amounts of data and build relationships with manufacturers to provide the finest products, the best prices, and top-notch services anywhere in the world. Combining our low fees and super-low product prices means that every BAL user makes massive savings compared with any other supplier in the market.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section8 pt-5 pb-5" id="why-bal">
		<div class="container">
			<h3 class="text-center">
				<b>WHY CHOOSE US?</b>
			</h3>
			<p class="text-center">
				BuyAnyLight (BAL) delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time!
			</p>
			<p class="text-center">
				Take a look at just some of the big BAL benefits:
			</p>
			<div class="card text-left">
				<div class="card-header why-header">
					<ul class="nav nav-pills card-header-pills nav-justified">
						<li class="nav-item  border border-white rounded-0">
							<a class="nav-link text-white active rounded-0" id="buyer-tab" data-toggle="tab" href="#buyer" role="tab" aria-controls="buyer" aria-selected="true">Buyer</a>
						</li>
						<li class="nav-item border border-white rounded-0">
							<a class="nav-link text-white rounded-0" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="true">Seller</a>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">     
						<ul class="list-group list-group-flush" style="padding: 0px; list-style-type: none;">
							<li class="list-group-item">No lengthy tie-ins</li>
							<li class="list-group-item">100% secure payments</li>
							<li class="list-group-item">First-class consultancy</li>
							<li class="list-group-item">Easy price comparison</li>
							<li class="list-group-item">On-time delivery guaranteed</li>
							<li class="list-group-item">Try samples before bulk orders</li>
							<li class="list-group-item">Vast choice of world-class LEDs</li>
							<li class="list-group-item">Cuts sourcing time by up to 90%</li>
							<li class="list-group-item">No middle men means lowest prices</li>
						</ul>       
					</div>
					<div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
						<ul class="list-group list-group-flush" style="padding: 0px; list-style-type: none;">
							<li class="list-group-item">Intuitive and simple for users</li>
							<li class="list-group-item">Slash your marketing costs</li>
							<li class="list-group-item">Guaranteed payments</li>
							<li class="list-group-item">Completely free to use</li>
							<li class="list-group-item">Conquer new markets</li>
							<li class="list-group-item">Quick & easy set-up</li>
							<li class="list-group-item">No-hassle logistics</li>
							<li class="list-group-item">No product listing</li>
							<li class="list-group-item">Flexible pricing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<img src="{{ Util::assetUrl('images/ieo/ieo-bg(2).png') }}" alt="" width="100%">
	</div>
	<div class="section9" id="packages">
		<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
			<h3 class="text-center">
				<b>
					OUR PACKAGES
				</b>
			</h3>
			<p class="pt-3 text-center">We welcome everyone to use our platform. Take a look at the groups below and see which one is right for you. <br><br> If you have any queries,  <br>don’t hesitate to <a href="{{ route('home') }}#footer" class="">get in touch.</a></p>
		</div>
		<div class="container pt-3 pb-5" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
			<div class="card mb-3" id="trial">
				<div class="card-body">
					<h4 class="card-title text-center">
						<b>Free Trial</b>
					</h4>
					<p class="text-justify">
						Register now and experience yourself the variety of tools and packages offered by BAL. 
					</p>
					<div class="text-center">
						<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
							Register Now
						</a>
					</div>
				</div>
			</div>
			<hr class="border-white">
			<div class=" card-deck pt-0 pb-0">
				<div class="card" id="finder">
					<div class="card-body">
						<h4 class="card-title pt-1 pb-3">
							<b><span class="text-BAL">Light</span>Finder</b>
						</h4>
						<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class=" text-white package-link">
						<div class="package-one">
							<div class="d-flex align-items-end pb-2 pl-2 h-100">
								<div>
									<i class="fab fa-youtube"></i> 
									<span>
										Play video
									</span>
								</div>
							</div>
						</div>
						</a>
						<div class="row pt-3">
							<div class="col-md-12">
								<!-- <hr class="border-black"> -->
								<button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
									<b>Introduction</b>
									<div class="introduction-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="introduction-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="introduction">
									<div class="card card-body ml-0 pl-0 border-0">
										LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers. As a LightFinder user you can access the innovative BAL platform, upload your requirements and get the best quotes direct from BAL’s various world-class manufacturer partners. All suppliers on the BAL platform are first-class manufacturers, vetted directly by our team of experts.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 finder2" type="button" data-toggle="collapse" data-target="#finder2" aria-expanded="false" aria-controls="finder2">
									<b>Finest quality, lowest prices, no stress!</b>
									<div class="finder2-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="finder2-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="finder2">
									<div class="card card-body ml-0 pl-0 border-0">
										When you upload your requirements as a LightFinder user, BAL’s intelligent systems match you with manufacturers whose products match your request. BAL then sends out an instant Request for Quotation (RFQ). All you need to do is sit back and wait for your quotations to arrive. 
										BAL saves you all the time and stress of manually sifting through lots of supplier quotes. Use the intelligent filter on BAL to sort the quotes automatically until you arrive at a handful you’d like to vet manually. After selecting your preferred supplier, you can confirm the order immediately or request a sample.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 finder3" type="button" data-toggle="collapse" data-target="#finder3" aria-expanded="false" aria-controls="finder3">
									<b>LightFinder level that works for you!</b>
									<div class="finder3-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="finder3-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="finder3">
									<div class="card card-body ml-0 pl-0 border-0">
										As a LightFinder user you have the choice of Mini, Standard, and Premium subscriptions, depending on the volumes you need. Like all BAL users, you can leverage the platform’s power to find the finest global suppliers and the best value for a fraction of the usual cost - all from the comfort of your own home or office.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing1" aria-expanded="false" aria-controls="pricing">
									<b>Pricing</b>
									<div class="pricing-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="pricing-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="pricing1">
									<div class="ml-0 pl-0 border-0">
										<div class="card m-0 text-left" style="padding-bottom: 15px;">
											<div class="card-header pricing-header">
												<ul class="nav nav-pills card-header-pills nav-justified">
													<li class="nav-item  border border-white rounded-0">
														<a class="nav-link active rounded-0" id="mini-tab" data-toggle="tab" href="#mini" role="tab" aria-controls="mini" aria-selected="true" style=" {{ ($agent->is('IE')) ? 'height: 100%; font-size: 12px' : '' }}">Mini</a>
													</li>
													<li class="nav-item border border-white rounded-0">
														<a class="nav-link rounded-0" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="true" style=" {{ ($agent->is('IE')) ? 'height: 100%; font-size: 12px' : '' }}">Premium</a>
													</li>
													<li class="nav-item border border-white rounded-0">
														<a class="nav-link rounded-0" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true" style=" {{ ($agent->is('IE')) ? 'height: 100%; font-size: 12px' : '' }}">Standard</a>
													</li>
												</ul>
											</div>
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="mini" role="tabpanel" aria-labelledby="mini-tab">     
													<div class="card-body pt-5 pb-3 text-center text-dark">
														<p class="card-text">
															<small>
																MAKE A GREAT BAL START RIGHT HERE!
															</small>
														</p>
														<div class="pt-2 pb-2 text-left">
															<ul class="trial-list">
																<li>
																	<i class="fas fa-check"></i>
																	Inquire & source 3 items
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	Minimum order quantity: 20
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	100% payment guarantee
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	Best price guarantee
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	Sample request
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	Additional inquiry for $199
																</li>
																<li>
																	<i class="fas fa-times"></i>
																	Label & design support
																	<span class="" data-toggle="tooltip" data-placement="bottom" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
																		<i class="fas fa-info-circle"></i>
																	</span>
																</li>
																<li>
																	<i class="fas fa-times"></i>
																	Designated lighting designer
																	<span class="" data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
																		<i class="fas fa-info-circle"></i>
																	</span>
																</li>
																<li>
																	<i class="fas fa-times"></i>
																	Markup feature
																	<span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
																		<i class="fas fa-info-circle"></i>
																	</span>
																</li>
															</ul>
														</div>
														<p class="text-center">* 20% BAL fee on order confirmation</p>
														<hr>
														<div class="text-center pt-2">
															<h5>$499/Monthly</h5>
															<small>$5499/Yearly</small>   
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
													<div class="card-body pt-5 pb-3 text-center text-dark d-flex align-items-center">
														<div class="card-premium-contents">
															<p class="card-text">
																<small>
																	AN ABUNDANCE OF GREAT BAL BENEFITS - THE PERFECT PACKAGE FOR YOUR BUSINESS
																</small>
															</p>
															<div class="pt-2 pb-2 text-left">
																<ul class="trial-list">
																	<li>
																		<i class="fas fa-check"></i>
																		Inquire & source 10 items
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Minimum order quantity: 10
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		100% payment guarantee
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Best price guarantee
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Sample request
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Additional inquiry for $99
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Label & design support
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Designated lighting designer
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
																				<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Markup feature
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																</ul>
															</div>
															<p class="text-center">* 10% BAL fee on order confirmation</p>
															<hr>
															<div class="text-center pb-2">
																<h5>$899/Monthly</h5>
																<small>$9899/Yearly</small>   
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
													<div class="card-body pt-5 pb-3 text-center text-dark d-flex align-items-center">
														<div class="card-standard-contents">
															<p class="card-text">
																<small>
																	NEED MORE THAN JUST A FEW LIGHTS? THIS IS THE PACKAGE FOR YOU!
																</small>
															</p>
															<div class="pt-2 pb-2 text-left">
																<ul class="trial-list">
																	<li>
																		<i class="fas fa-check"></i>
																		Inquire & source 6 items
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Minimum order quantity: 10
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		100% payment guarantee
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Best price guarantee
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Sample request
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		Additional inquiry for $149
																	</li>
																	<li>
																		<i class="fas fa-times"></i>
																		Label & design support
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-times"></i>
																		Designated lighting designer
																		<span class=" " data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-times"></i>
																		Markup feature
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																</ul>
															</div>
															<p class="text-center">* 15% BAL fee on order confirmation</p>
															<hr>
															<div class="text-center pb-2">
																<h5>$699/Monthly</h5>
																<small>$7699/Yearly</small>   
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pt-3">
									<div class="row">
										<div class="col-6">
											<a href="https://lightfinder.buyanylight.com/buyer/register" class=" w-100 btn btn-BAL">
												Register Now
											</a>
										</div>
										<div class="col-6">
											<a href="{{ Util::assetUrl('brochures/LightFinder_BAL.pdf') }}" class=" w-100 btn btn-BAL" target="_blank">
												Brochure
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card" id="home">
					<div class="card-body">
						<h4 class="card-title pt-1 pb-3">
							<b><span class="text-BAL">My</span> Home</b>
						</h4>
						<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="text-white package-link">
						<div class="package-two">
							<div class="d-flex align-items-end pb-2 pl-2 h-100">
								<div>
									<i class="fab fa-youtube"></i> 
									<span>
										Play video
									</span>
								</div>
							</div>
						</div>
						</a>
						<div class="row">
							<div class="col-md-12 pt-3">
								<!-- <hr class="border-black"> -->
								<button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
									<b>Introduction</b>
									<div class="introduction-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="introduction-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="introduction">
									<div class="card card-body ml-0 pl-0 border-0">
										Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities. However, choosing and buying LED locally is often complex, stressful and disappointing. BAL is here to help you source LED lights with professional precision and world-class products and service. Very few private property owners are experts in LED, lumens, CCT or CRI, so we provide all the help you want and need.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 home2" type="button" data-toggle="collapse" data-target="#home2" aria-expanded="false" aria-controls="home2">
									<b>Perfect for homeowners</b>
									<div class="home2-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="home2-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="home2">
									<div class="card card-body ml-0 pl-0 border-0">
										To start your project on the right track, choose the My Home package, upload your lighting requirements or share with us pictures of the lighting that’s currently in your home. Our team of experts will explore the ideal technology and design options for you and present you with a quote for your LED light project, quickly and efficiently. BAL offers you the lowest prices for excellent quality LED lights - plus you’ll also make huge savings on electricity bills. No more messing with local stores that exploit your inexperience and sell you their old stock at high prices! BAL raises the quality, lowers the costs and gives you a far more pleasing outcome all round.
										<br>
										<br>
										Don’t forget, with LED lights you’ll be playing a role in reducing the carbon footprint, saving energy and making the world a better place.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 home3" type="button" data-toggle="collapse" data-target="#home3" aria-expanded="false" aria-controls="home3">
									<b>The next step</b>
									<div class="home3-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="home3-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="home3">
									<div class="card card-body ml-0 pl-0 border-0">
										We go above and beyond just designing your lights and quoting for projects. We offer you the best possible prices for every product we quote, saving you up to 90% on your LED project. BAL buying power attracts significant discounts from manufacturers and we’re proud to pass on these great savings to you.
										<br>
										<br>
										To take advantage of these huge savings and benefits, we charge only a one-time project subscription fee and 10% commission on the total product cost. That’s quite simply how we earn our revenue. Plus, you don’t pay anything until you’ve decided to commit to our quote, so there is ZERO RISK to you when trying us out!
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing2" aria-expanded="false" aria-controls="pricing">
									<b>Pricing</b>
									<div class="pricing-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="pricing-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="pricing2">
									<div class="ml-0 pl-0 border-0">
									   <div class="card m-0 card-my-home">
										   <div class="card-header pricing-header text-center text-white">
											   <h5 class=" mb-0 pb-0">
												   My Home
											   </h5>
											   <small>NO UPFRONT COSTS & FREE QUOTATION</small>
										   </div>
											<div class="card-body pt-5 pb-3">
												<p class="card-text text-center">
													<small>
														GET THE POSSIBLE RESULTS FOR EVERY BEAUTIFUL HOME!
													</small>
												</p>
												<div class="pb-2 pt-2">
													<ul class="trial-list">
														<li>
															<i class="fas fa-check"></i>
															Risk-free
														</li>
														<li>
															<i class="fas fa-check"></i>
															Unlimited revisions
														</li>
														<li>
															<i class="fas fa-check"></i>
															Sample request
														</li>
														<li>
															<i class="fas fa-check"></i>
															Best price guarantee
														</li>
														<li>
															<i class="fas fa-check"></i>
															100% payment protection
														</li>
														<li>
															<i class="fas fa-check"></i>
															Home lighting consultation
														</li>
														<li>
															<i class="fas fa-check"></i>
															Designated lighting designer
															<span class="" data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
																<i class="fas fa-info-circle"></i>
															</span>
														</li>
														<li>
															<i class="fas fa-times"></i>
															Markup feature
															<span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
																<i class="fas fa-info-circle"></i>
															</span>
														</li>
													</ul>
												</div>
												<p class="text-center">
													* 10% BAL fee on order confirmation <br>
													** $949 Project fee payable only on offer acceptance
												</p>
												<hr>
												<div class="text-center pb-2">
													<h5>FOR ALL THIS, YOU PAY <b>$0.00</b></h5> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pt-3">
									<div class="row">
										<div class="col-6">
											<a href="https://lightfinder.buyanylight.com/buyer/register" class=" w-100 btn btn-BAL">
												Register Now
											</a>
										</div>
										<div class="col-6">
											<a href="{{ Util::assetUrl('brochures/MyHome_BAL.pdf') }}" class=" w-100 btn btn-BAL" target="_blank">
												Brochure
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card" id="tower">
					<div class="card-body">
						<h4 class="card-title pt-1 pb-3">
							<b><span class="text-BAL">My</span> Tower</b>
						</h4>
						<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="text-white package-link">
						<div class="package-three">
							<div class="d-flex align-items-end pb-2 pl-2 h-100">
								<div>
									<i class="fab fa-youtube"></i> 
									<span>
										Play video
									</span>
								</div>
							</div>
						</div>
						</a>
						<div class="row pt-3">
							<div class="col-md-12">
								<!-- <hr class="border-black"> -->
								<button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
									<b>Introduction</b>
									<div class="introduction-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="introduction-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="introduction">
									<div class="card card-body ml-0 pl-0 border-0">
										My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package and either upload your requirements or drag and drop your Bill of Quantities (BOQ). With NO UPFRONT PAYMENT, you can receive a solution and quote from BAL, confident in the knowledge that our expertise, products, prices, and service are unrivalled in the LED marketplace.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 tower2" type="button" data-toggle="collapse" data-target="#tower2" aria-expanded="false" aria-controls="tower2">
									<b>How does BAL save you money?</b>
									<div class="tower2-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="tower2-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="tower2">
									<div class="card card-body ml-0 pl-0 border-0">
										Corporate customers enjoy prices up to 90% lower than those of local suppliers. Our massive orders attract exclusive discounts from manufacturers, so we can offer you the best prices on the market. Besides, we have no large sales force, no executive car fleet or costly showrooms to run, so our low business overheads also help us to give our customers the best products at unbelievable prices.
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 tower3" type="button" data-toggle="collapse" data-target="#tower3" aria-expanded="false" aria-controls="tower3">
									<b>The next step</b>
									<div class="tower3-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="tower3-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="tower3">
									<div class="card card-body ml-0 pl-0 border-0">
										When (and only when) you decide to commit to a BAL quote, you’ll be asked to make a one-time project subscription fee to confirm your order or request samples. We charge a 10% commission on the total cost of the products: this is how BAL earns its revenue and maintains its service.
										<br>
										<br>
										DID YOU KNOW? Our Markup Feature (exclusive to BAL corporate users) - is a fantastic BAL feature, allowing you to add markups to the quotes, quickly and easily. It means you can offer your customers lower prices than local suppliers while also boosting your profits - a win-win for everyone!
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing3" aria-expanded="false" aria-controls="pricing">
									<b>Pricing</b>
									<div class="pricing-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="pricing-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="pricing3">
									<div class="ml-0 pl-0 border-0">
									   <div class="card m-0 card-my-tower text-dark">
											<div class="card-header text-center pricing-header text-white">
												<h5 class=" mb-0 pb-0">
													My Tower
												</h5>
												<small>NO UPFRONT COSTS & FREE QUOTATION</small>
											</div>
											<div class="card-body pt-5 pb-3">
												<p class="card-text text-center">
													<small>
														A COMPLETE PROJECT SOLUTION WITH LOWEST PRICES IN THE ENTIRE MARKET
													</small>
												</p>
												<div class="pb-2 pt-2">
													<ul class="trial-list">
														<li>
															<i class="fas fa-check"></i>
															Risk-free
														</li>
														<li>
															<i class="fas fa-check"></i>
															Unlimited revisions
														</li>
														<li>
															<i class="fas fa-check"></i>
															Sample request
														</li>
														<li>
															<i class="fas fa-check"></i>
															Best price guarantee
														</li>
														<li>
															<i class="fas fa-check"></i>
															100% payment protection
														</li>
														<li>
															<i class="fas fa-check"></i>
															Project lighting consultation
														</li>
														<li>
															<i class="fas fa-check"></i>
															Designated lighting designer
															<span class="" data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
																	<i class="fas fa-info-circle"></i>
															</span>
														</li>
														<li>
															<i class="fas fa-check"></i>
															Markup feature
															<span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
																<i class="fas fa-info-circle"></i>
															</span>
														</li>
													</ul>
												</div>
												<p class="text-center">
													* 10% BAL fee on order confirmation <br>
													** $1949 Project fee payable only on offer acceptance
												</p>
												<hr>
												<div class="text-center pb-2">
													<h5>FOR ALL THIS, YOU PAY <b>$0.00</b></h5> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pt-3">
									<div class="row">
										<div class="col-6">
											<a href="https://lightfinder.buyanylight.com/buyer/register" class=" w-100 btn btn-BAL">
												Register Now
											</a>
										</div>
										<div class="col-6">
											<a href="{{ Util::assetUrl('brochures/MyTower_BAL.pdf') }}" class=" w-100 btn btn-BAL" target="_blank">
												Brochure
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section10-main pb-5" id="add-ons">
		<div class="container">
			<h3 class="pt-5 text-center">
				<b>
					ALWAYS ADDING VALUE: optional extras
				</b>
			</h3>
			<p class="pt-3">
				We’ve designed packages of options to delight various user categories. But every user is an individual, and for maximum flexibility the BuyAnyLight (BAL) platform enables you to add in extra services to suit you. These services are provided by our superb team of highly experienced LED lighting design experts, able to support every kind of LED project for private villas, industrial estates, hotels, public facilities and any other building or infrastructure.  
			</p>
			<p>
				Our optional add-on services include:
			</p>
			<div class="">
				<div class="card lighting-consultation">
					<div class="card-body d-flex align-items-end">
						<div>
							<h5><b>General lighting consultation (199$)</b></h5>
							<p>Enjoy one-to-one access to our world-class consultants who will give expert advice and support from project start-up to the final glorious switch-on!</p>
							<a href="https://lightfinder.buyanylight.com/buyer/register/general-lighting-consultation" class="btn btn-sm btn-outline-light">Book now</a>
						</div>
					</div>
				</div>
			</div>
			<div class=" pt-3">
				<div class="card lux-calculation">
					<div class="card-body d-flex align-items-end">
						<div>
							<h5><b>Lux calculation (299$)</b></h5>
							<p>This valuable add-on determines the exact brightness requirements (lumens) for a project area - data which is essential for selecting the right products and quantities to achieve the design objectives in any lighting project.</p>
							<a href="https://lightfinder.buyanylight.com/buyer/register/lux-calculation" class="btn btn-sm btn-outline-light">Book now</a>
						</div>
					</div>
				</div>
			</div>
			<div class=" pt-3">
				<div class="card threed-design">
					<div class="card-body d-flex align-items-end">
						<div>
							<h5><b>3D lighting design (399$) </b></h5>
							<p>Stunning, 3D lighting designs let you see how your finished project area will look and feel, gain an edge over competitors, and provide your project with an extra revenue stream.</p>
							<a href="https://lightfinder.buyanylight.com/buyer/register/3d-lighting-design" class="btn btn-sm btn-outline-light">Book now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

