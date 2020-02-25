@extends('layouts.main-layout')


@section('content')
<section class="section1">
	<div class="container h-100 d-flex align-items-center">
		<div class="row w-100">
			<div class="col-5 text-white">
				<div class="d-flex justify-content-center flex-column h-100">
					<h1 class="display-4">
						<b>Sourcing Reinvented!</b>	
					</h1>
					<h4>
						The global platform for LED lighting
					</h4>
					<div class="row mt-3">
						<div class="col-4">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight.pdf') }}" class="btn btn-BAL w-100">BAL One Pager</a>
						</div>
						<div class="col-4">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" class="btn btn-BAL w-100">BAL IEO One Pager</a>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<a href="{{ route('ieo') }}" class="btn btn-BAL mt-2 w-100">IEO</a>
						</div>
						<div class="col-4">
							<a href="{{ route('ieo') }}#section-bal-token" class="btn btn-BAL mt-2 w-100">Buy BAL Tokens</a>
						</div>
					</div>
					<div class="mt-3">
						<a data-fancybox href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="text-white">
							<span style="font-size: 30px;">
								<i class="far fa-play-circle"></i>&nbsp; 
							</span>
							<b class="video-text">
								Introducing BuyAnyLight
							</b>
						</a>
					</div>
					<div class="mt-3">
						<div class="row">
							<div class="col-12">
								<b>
									ICO Rating Review:
								</b>	
							</div>
							<div class="col-12 pt-3">
								<a href="https://icobench.com/ico/buyanylight-bal" 
					target="_blank" rel="nofollow" title="BuyAnyLight (BAL) on ICObench">					
						<img border="0" async src="{{Util::assetUrl('images/ieo/partners/icobench.png')}}" 						
						style="height: 60px; margin-bottom: -15px; margin-right: 5px;" 
						alt="BuyAnyLight (BAL) ICO rating"/>
					</a>
					
					<a href="https://icomarks.com/ico/buyanylight" 
					target="_blank" rel="nofollow" title="BuyAnyLight ICO">
						<img border="0" async src="{{Util::assetUrl('images/ieo/partners/icomarks.svg')}}"
						style="height: 60px; margin-bottom: -15px; margin-left: 5px;" 
						alt="BuyAnyLight ICO Rating"/>
					</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<img src="{{ Util::assetUrl('images/main-image.png') }}" alt="" width="100%">
			</div>
			<div class="col-1">
				<div class="row mt-4 text-center justify-content-center align-items-center h-100">
					<div class="col-12 mt-2">
						<a href="http://www.youtube.com/c/BuyAnyLight" style="color: white;" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://twitter.com/BuyAnyLight" style="color: white;" target="_blank"><i class="fab fa-twitter"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://www.instagram.com/buyanylight/" style="color: white;" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://www.facebook.com/BuyAnyLight/" style="color: white;" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://github.com/buyanylight" style="color: white;" target="_blank"><i class="fab fa-github"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://www.reddit.com/r/BuyAnyLight/" style="color: white;" target="_blank"><i class="fab fa-reddit-alien"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://bitcointalk.org/index.php?topic=5193049.0;topicseen" style="color: white;" target="_blank"><i class="fab fa-bitcoin"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://t.me/buyanylight" style="color: white;" target="_blank"><i class="fab fa-telegram-plane"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://medium.com/buyanylight" style="color: white;" target="_blank"><i class="fab fa-medium-m"></i></a>
					</div>
					<div class="col-12 mt-2">
						<a href="https://www.linkedin.com/company/buyanylight/" style="color: white;" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section2">  
	<div class="container h-100" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="row">
			<div class="col-4">
				<div class="card card-body text-center">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/finder-icon.png') }}" alt="" width="40%">
					</div>
					<div class="card-contents">
						<h5>
							<b>LightFinder</b>
						</h5>
						<p>B2B & B2C</p>
						<p> LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from
							manufacturers... </p>
						<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
							<i class="fas fa-play"></i>&nbsp;<b>Play Video</b>	
						</a>
						<a href="#all-packages" class="btn btn-BAL" style="font-size: 13px;">
							<b>Cut LED cost, not quality</b>	
						</a>
							
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card card-body text-center">
						<div class="text-center">
							<img src="{{ Util::assetUrl('images/home-icon.png') }}" alt="" width="40%">
						</div>
						<div class="card-contents">
							<h5>
								<b>My Home</b>
							</h5>
							<p>Private homes, villas, and palaces</p>
							<p>Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities...</p>
							<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
								<i class="fas fa-play"></i>&nbsp;<b>Play Video</b>	
							</a>
							<a href="#all-packages" class="btn btn-BAL" style="font-size: 13px;">
								<b>Find dream home LED at dreamy prices</b>
							</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card card-body text-center">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/tower-icon.png') }}" alt="" width="40%">
					</div>
					<div class="card-contents">
						<h5>
							<b>My Tower</b>
						</h5>
						<p>Consultants, contractors, clients</p>
						<p>My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package...</p>
						<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
							<i class="fas fa-play"></i>&nbsp;<b>Play Video</b>	
						</a>
						<a href="#all-packages" class="btn btn-BAL" style="font-size: 13px;">
							<b>Get the best quality and prices ever</b>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section3" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
	<div class="container text-white text-center d-flex justify-content-end align-items-center flex-column h-100">
		<h4>
			<b>Start your free trial now!</b> 
		</h4>
		<p>
			Get your favorite lighting products with a single click registration process. <br>Submit your requirements and our experts will do the rest.
		</p>
		<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-outline-light btn-lg">Start your free trial</a>
		
	</div>
</section>
<section class="section4" id="about">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="row">
			<div class="col-6 d-flex justify-content-center flex-column">
				<h4>
					<b>About BuyAnyLight</b>
				</h4>
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
				<a data-fancybox href="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" class="btn btn-video text-left pl-0" style="font-size: 13px;">
					<i class="fas fa-play"></i>&nbsp;<b>Introduction to BuyAnyLight</b>	
				</a>
				
			</div>
			<div class="col-6">
				<img src="{{ Util::assetUrl('images/about-img.png') }}" alt="" width="100%">
			</div>
		</div>
	</div>
</section>
<section class="section5">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="row">
			<div class="col-4">
				<div class="text-center">
					<img src="{{ Util::assetUrl('images/about(1).png') }}" alt="" width="50%">
				</div>
				<div class="pt-3 text-center">
					<b>A private homeowner?</b> <br>
					<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
						<i class="fas fa-play"></i>&nbsp;<b>My Home</b>	
					</a>
					<p class="pt-2 text-justify">
						A typical homeowner does not have the technical expertise to understand lux calculations, wattages, IP or IK ratings, lumen per watt, and the same applies to lighting setup and design aesthetics. Use BuyAnyLight to make your home a greener, more stylish and energy-efficient zone by switching to LED Lights. The difference in prices are huge and so will be your energy bill savings.
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="text-center">
					<img src="{{ Util::assetUrl('images/about(2).png') }}" alt="" width="50%">
				</div>
				<div class="pt-3 text-center">
					<b>A consultant, contractor or project owner?</b>
					<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
						<i class="fas fa-play"></i>&nbsp;<b>My Tower</b>	
					</a>
					<p class="pt-2 text-justify">
						We've got you covered! We save you time, money and add even more value with the finest technical expertise to specify the ideal LED lights for your project. Your own BAL expert will help you through your project, every step of the way ensuring that you get the best prices, designs and products anywhere in the world. BAL allows contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win situation!
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="text-center">
					<img src="{{ Util::assetUrl('images/about(3).png') }}" alt="" width="76%">
				</div>
				<div class="pt-3 text-center">
					<b>Researching LED prices and products?</b>
					<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
						<i class="fas fa-play"></i>&nbsp;<b>LightFinder</b>	
					</a>
					<p class="pt-2 text-justify">
						Whether you just want to get an idea of the market or aim to outsource your lighting needs for any of your project, we have got you covered. Our LightFinder platform makes this as easy as submitting an online form. Simply sign up and submit your RFQ (request for quotation). That’s it! Our AI based system will find the right lighting products specially catered for your lighting needs while ensuring the best value in product quality, costs, and service.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section6">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="row">
			<div class="col-6">
				<img src="{{ Util::assetUrl('images/about(4).png') }}" alt="" width="50%">
			</div>
			<div class="col-6 d-flex justify-content-center flex-column">
				<h4>
					<b>WE ALWAYS FIND THE BEST <br> LIGHT AT THE BEST PRICE</b>
				</h4>
				<p>
					BuyAnyLight (BAL) has the world’s largest network of lighting manufacturers, and we are continually adding more, allowing BAL to provide the best platform for finding any type of LED light. Our AI powered systems and high speed servers match buyer enquiries with the most suitable suppliers within seconds and send out Requests For Quotes (RFQs) instantly. Simply use the powerful BAL tools to select the most competitive: it’s fast – and beautifully simple!
				</p>
				<p>
					BAL secures 100% of your funds until you receive your goods. The system also manages the logistics, so you receive your order on time, safely and securely.
				</p>
				<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class="btn btn-video text-left pl-0" style="font-size: 13px;">
					<i class="fas fa-play"></i>&nbsp;<b>LightFinder</b>	
				</a>
			</div>
		</div>
	</div>
</section>
<section class="section7" id="ninety">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="row text-white">
			<div class="col-6">
				<h4>
					<b>SAVE UP TO 90%...<br> HOW DOES THAT WORK?</b>
				</h4>
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
			<div class="col-6">
				<img src="{{ Util::assetUrl('images/about(5).png') }}" alt="" width="90%">
			</div>
		</div>
	</div>
</section>
<section class="downloadsection">
	<div class="container h-100 d-flex justify-content-center align-items-center flex-column">
		<div class="pt-1 text-center">
			<h3>
				<b>Want to know more?</b>
			</h3>
			<p class="pt-3">
				Download to know more about us, <br>our project, and how can you participate in our token sale.
			</p>
			<div class="buttons pt-3 ">
				<div class="row w-100">
					<div class="col">
						<div class="d-flex justify-content-center align-items-center">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-BAL">
							<b>One Pager</b>	
							</a>
						</div>
					</div>
					<div class="col">
						<div>
							<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" target="_blank" class="btn btn-BAL">
							<b>Whitepaper</b>	
							</a>
						</div>
					</div>
					<div class="col">
						<div>
							<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-BAL" target="_blank">
							<b>Yellowpaper</b>	
							</a>				
						</div>
					</div>
				</div>
				<div class="pt-3">
					<div class="row w-100">
						<div class="col">
							<a href="#contact" class="btn btn-BAL">Schedule a meeting</a>
						</div>
						<div class="col">
							<a href="#section-bal-token" class="btn btn-BAL">
								<b>
									BUY BAL TOKENS NOW!
								</b>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section8" id="why-bal">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<h3 class="text-center">
			<b>WHY CHOOSE US?</b>
		</h3>
		<p class="text-center">
			BuyAnyLight (BAL) delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time!
		</p>
		<p class="text-center">
			Take a look at just some of the big BAL benefits:
		</p>
		<div class="pt-3">
			<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
				<li class="nav-item " style="">
					<a class="nav-link buyer active " id="pills-buyer-tab" data-toggle="pill" href="#pills-buyer" role="tab" aria-controls="pills-buyer" aria-selected="true">Buyers</a>
				</li>
				<li class="nav-item" style="">
					<a class="nav-link seller " id="pills-seller-tab" data-toggle="pill" href="#pills-seller" role="tab" aria-controls="pills-seller" aria-selected="false">Sellers</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-buyer" role="tabpanel" aria-labelledby="pills-buyer-tab">
					<div class="pt-5 pb-5">
						<div class="row">
							<div class="col-4">
								<div class="">
									<div class="row">
										<div class="col-3 d-flex justify-content-center flex-column">
											<img src="{{ Util::assetUrl('images/whychoose(1).png') }}" alt="" width="100%">
										</div>
										<div class="col-9 d-flex justify-content-center flex-column">
											<b>Convenient</b>
											<p>
												BAL is a one-stop shop that reduces the time spent on sourcing LED lights by over 90%.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="">
									<div class="row">
										<div class="col-3 d-flex justify-content-center flex-column">
											<img src="{{ Util::assetUrl('images/whychoose(2).png') }}" alt="" width="100%">
										</div>
										<div class="col-9 d-flex justify-content-center flex-column">
											<b>Lowest Prices</b>
											<p>
												Get the best quotes directly from BAL and manufacturers, without involving any costly middle-men.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="">
									<div class="row">
										<div class="col-3 d-flex justify-content-center flex-column">
											<img src="{{ Util::assetUrl('images/whychoose(3).png') }}" alt="" width="100%">
										</div>
										<div class="col-9 d-flex justify-content-center flex-column">
											<b>Greater variety</b>
											<p>
												Find any type of LED light you need on BAL. Review different designs and technical specifications from world-class manufacturers.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(4).png') }}" alt="" width="100%">
									</div>
									<div class="col-9 d-flex justify-content-center flex-column">
										<b>Easy price comparison</b>
										<p>
											Use the advanced filter feature to select quotes and pick the best ones to review and compare.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(5).png') }}" alt="" width="100%">
									</div>
									<div class="col-9 d-flex justify-content-center flex-column">
										<b>Trustless Payments</b>
										<p>
											All your payments are 100% secured as they are managed and processed by trustless smart contracts. 
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(6).png') }}" alt="" width="100%">
									</div>
									<div class="col-9 d-flex justify-content-center flex-column">
										<b>Risk-free</b>
										<p>
											No long-term financial commitment - and no upfront payment when using My Home and My Tower packages.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(7).png') }}" alt="" width="100%">
									</div>
									<div class="col-9 d-flex justify-content-center flex-column">
										<b>Request samples</b>
										<p>
											Want to try before you buy? You can order a few samples first before buying in bulk.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(8).png') }}" alt="" width="100%">
									</div>
									<div class="col-9 d-flex justify-content-center flex-column">
										<b>Traceable Logistics</b>
										<p>
											With BAL, you get end to end traceability of your shipments. We promise on-time delivery and a live shipment tracker.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(9).png') }}" alt="" width="100%">
									</div>
									<div class="col-9 d-flex justify-content-center flex-column">
										<b>First-class consultancy</b>
										<p>
											Private homeowners, consultants and contractors can take advantage of our consultancy services. Our LED lighting experts are here to ensure the success of every project, whatever its size.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-seller" role="tabpanel" aria-labelledby="pills-seller-tab">
					<div class="pt-5 pb-5">
						<div class="row">
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(1).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Easy set-up</b>
										<p>
											No need for tedious product listing processes: just complete your seller profile and verification.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(2).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Free registration</b>
										<p>
											BAL is completely free for sellers. Simply register and start receiving Requests For Quotes (RFQs) from buyers worldwide!
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(3).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Cost-saving</b>
										<p>
											Find any type of LED light you need on BAL. Review different designs and technical specifications from world-class brands.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(4).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Flexible pricing</b>
										<p>
											Use the advanced filter feature to select quotes and pick the best ones to review and compare.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(5).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Secure platform</b>
										<p>
											BAL guarantees the payments for every supply project and acts as trustee. Fulfil all your orders with absolute confidence!
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(6).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Completely free</b>
										<p>
											Suppliers can use the service of BAL to provide quotes at no cost at all. However, every supplier must pass our screening process to use the BAL platform and start selling.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(7).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Provide samples</b>
										<p>
											Buyers can order samples before a bulk order. This feature prevents disputes as the buyer knows what to expect.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(8).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Hassle-free supply</b>
										<p>
											We save you all the hassle and headaches of managing logistics: we fulfil the order and make sure it’s sent to the buyer promptly and safely.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-3 d-flex justify-content-center flex-column">
										<img src="{{ Util::assetUrl('images/whychoose(9).png') }}" alt="" width="100%">
									</div>
									<div class="col-9">
										<b>Easy to use</b>
										<p>
											Forget about tiring learning curves! The BAL platform is intuitive and easy to use.
										</p>
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
<section class="section9" id="all-packages">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<h3 class="text-center">
			<b>
				OUR PACKAGES
			</b>
		</h3>
		<p class="pt-3 text-center">We welcome everyone to use our platform. Take a look at the groups below and see which one is right for you. <br> If you have any queries, don’t hesitate to <a href="{{ route('contact') }}" class="">get in touch.</a></p>
	</div>
	<div class="container pt-3 pb-5" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="card mb-3">
			<div class="card-body">
				<h4 class="card-title text-center">
					<b>Free Trial</b>
				</h4>
				<p class="text-center">
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
			<div class="card mr-2">
				<div class="card-body">
					<h4 class="card-title pt-1 pb-3">
						<b>LightFinder</b>
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
							<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
								<b>Pricing</b>
								<div class="pricing-down float-right">
									<i class="fas fa-angle-down"></i>
								</div>
								<div class="pricing-up float-right" style="display: none;">
									<i class="fas fa-angle-up"></i>
								</div>
							</button>
							<div class="collapse" id="pricing">
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
			<div class="card mr-2 ml-2">
				<div class="card-body">
					<h4 class="card-title pt-1 pb-3">
						<b>My Home</b>
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
							<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
								<b>Pricing</b>
								<div class="pricing-down float-right">
									<i class="fas fa-angle-down"></i>
								</div>
								<div class="pricing-up float-right" style="display: none;">
									<i class="fas fa-angle-up"></i>
								</div>
							</button>
							<div class="collapse" id="pricing">
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
			<div class="card ml-2">
				<div class="card-body">
					<h4 class="card-title pt-1 pb-3">
						<b>My Tower</b>
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
							<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
								<b>Pricing</b>
								<div class="pricing-down float-right">
									<i class="fas fa-angle-down"></i>
								</div>
								<div class="pricing-up float-right" style="display: none;">
									<i class="fas fa-angle-up"></i>
								</div>
							</button>
							<div class="collapse" id="pricing">
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
</section>
<div>
	<img src="{{ Util::assetUrl('images/ieo/ieo-bg(2).png') }}" alt="" width="100%">
</div>
<section class="section10" id="package">
	<div class="h-100" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="container h-100">
			<h4 class="text-left">
				<b>ALL PACKAGES</b>
			</h4>
			<div class="pt-5 h-100">
				<ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
					<li class="nav-item trial" style="border: 1px solid black;">
						<a class="nav-link trial" id="pills-trial-tab" data-toggle="pill" href="#pills-trial" role="tab" aria-controls="pills-trial" aria-selected="true">Free Trial</a>
					</li>
					<li class="nav-item home" style="border: 1px solid black;">
						<a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">My Home</a>
					</li>
					<li class="nav-item tower" style="border: 1px solid black;">
						<a class="nav-link" id="pills-tower-tab" data-toggle="pill" href="#pills-tower" role="tab" aria-controls="pills-tower" aria-selected="false">My Tower</a>
					</li>
					<li class="nav-item finder" style="border: 1px solid black;">
						<a class="nav-link finder" id="pills-finder-tab" data-toggle="pill" href="#pills-finder" role="tab" aria-controls="pills-finder" aria-selected="false">LightFinder</a>
					</li>
				</ul>
				<div class="tab-content pt-5" id="pills-tabContent" style="height: 90%;">
					<div class="tab-pane fade  h-100" id="pills-trial" role="tabpanel" aria-labelledby="pills-trial-tab">
						<div class="pills-all h-100">
							<div class="card card-trial-summary">
								<div class="card-header text-center bg-BAL text-white">
									<h4 class="mb-0">
										Free Trial
									</h4>
									<small>NO UPFRONT COSTS & FREE QUOTATION</small>
								</div>
								<div class="card-body pt-5 pb-5">
									<p class="card-text text-center">GET A FREE QUOTE. YOU’LL LOVE OUR AMAZING PRICES!</p>
									<div class="pb-2 pt-2">
										<ul class="trial-list">
											<li>
												<i class="fas fa-check"></i>
												Risk-free
											</li>
											<li>
												<i class="fas fa-check"></i>
												Explore BAL
											</li>
											<li>
												<i class="fas fa-times"></i>
												Sample request
											</li>
											<li>
												<i class="fas fa-times"></i>
												Multiple item request
											</li>
											<li>
												<i class="fas fa-times"></i>
												Designated lighting designer
											</li>
											<li>
												<i class="fas fa-times"></i>
												Markup feature 
												<span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
													<i class="fas fa-info-circle"></i>
												</span>
											</li>
										</ul>
									</div>
									 <p class="text-center">
										<b>Note </b> <br> A LightFinder package is required to <br> confirm the order.
									</p>
									<hr>
									<div class="text-center pt-4">
										<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">Subscribe now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane show active  fade h-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="pills-all h-100">
							<div class="card card-my-home-summary">
								<div class="card-header text-center bg-BAL text-white">
									<h4 class="mb-0">
										My Home
									</h4>
									<small>NO UPFRONT COSTS & FREE QUOTATION</small>
								</div>
								<div class="card-body pt-5 pb-5">
									<p class="card-text text-center">GET THE POSSIBLE RESULTS FOR EVERY BEAUTIFUL HOME!</p>
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
												<span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
													<i class="fas fa-info-circle"></i>
												</span>
											</li>
											<li>
												<i class="fas fa-times"></i>
												Markup feature
												<span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
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
									<div class="text-center">
										<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">Subscribe now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade  h-100" id="pills-tower" role="tabpanel" aria-labelledby="pills-tower-tab">
						<div class="pills-all h-100">
							<div class="card card-my-tower-summary">
								<div class="card-header text-center bg-BAL text-white">
									<h4 class="mb-0">
										My Tower
									</h4>
									<small>NO UPFRONT COSTS & FREE QUOTATION</small>
								</div>
								<div class="card-body pt-5 pb-5">
									<p class="card-text text-center">A COMPLETE PROJECT SOLUTION WITH LOWEST PRICES IN THE ENTIRE MARKET - GUARANTEED!</p>
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
												<span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
													<i class="fas fa-info-circle"></i>
												</span>
											</li>
											<li>
												<i class="fas fa-check"></i>
												Markup feature
												<span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
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
									<div class="text-center">
										<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">Subscribe now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade h-100" id="pills-finder" role="tabpanel" aria-labelledby="pills-finder-tab">
						<div class="pills-all h-100" style=" {{ ($agent->is('IE')) ? 'display:block;' : '' }}" >
							<div class="card-group">
								<div class="card card-mini-summary">
									<h4 class="card-header text-center bg-BAL text-white">MINI</h4>
									<div class="card-body pt-5 pb-5 text-center">
										<p class="card-text">MAKE A GREAT BAL START RIGHT HERE!</p>
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
													<span class="" data-toggle="tooltip" data-placement="right" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
														<i class="fas fa-info-circle"></i>
													</span>
												</li>
												<li>
													<i class="fas fa-times"></i>
													Designated lighting designer
													<span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
														<i class="fas fa-info-circle"></i>
													</span>
												</li>
												<li>
													<i class="fas fa-times"></i>
													Markup feature
													<span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
														<i class="fas fa-info-circle"></i>
													</span>
												</li>
											</ul>
										</div>
										<p class="text-center">* 20% BAL fee on order confirmation</p>
										<hr>
										<div class="text-center pb-2">
											<h5>$499/Monthly</h5>
											<small>$5499/Yearly</small>   
										</div>
										<div >
											<a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-BAL">Subscribe now</a>
										</div>
									</div>
								</div>
								<div class="card card-premium-summary">
									<h4 class="card-header text-center bg-BAL text-white">
										PREMIUM
									</h4>
									<div class="best-pick w-100 d-flex align-items-center justify-content-center">
										<span class="text-black ">
											<b>BEST PICK</b>
										</span>
									</div>
									<div class="card-body {{ ($agent->is('IE')) ? 'pb-5 pt-5' : 'pb-0 pt-0' }} text-center d-flex align-items-center">
										<div class="card-premium-contents">
											<p class="card-text">AN ABUNDANCE OF GREAT BAL BENEFITS - THE PERFECT PACKAGE FOR YOUR BUSINESS</p>
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
														<span class="" data-toggle="tooltip" data-placement="right" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
															<i class="fas fa-info-circle"></i>
														</span>
													</li>
													<li>
														<i class="fas fa-check"></i>
														Designated lighting designer
														<span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
															<i class="fas fa-info-circle"></i>
														</span>
													</li>
													<li>
														<i class="fas fa-check"></i>
														Markup feature
														<span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
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
											<div>
												<a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-BAL">Subscribe now</a>
											</div>
										</div>
									</div>
								</div> 
								<div class="card card-standard-summary">
									<h4 class="card-header text-center bg-BAL text-white">STANDARD</h4>
									<div class="card-body pt-5 pb-5 text-center d-flex align-items-center">
										<div class="card-standard-contents">
											<p class="card-text">NEED MORE THAN JUST A FEW LIGHTS? THIS IS THE PACKAGE FOR YOU!</p>
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
														<span class="" data-toggle="tooltip" data-placement="right" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
															<i class="fas fa-info-circle"></i>
														</span>
													</li>
													<li>
														<i class="fas fa-times"></i>
														Designated lighting designer
														<span class=" " data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
															<i class="fas fa-info-circle"></i>
														</span>
													</li>
													<li>
														<i class="fas fa-times"></i>
														Markup feature
														<span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
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
											<div>
												<a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-BAL">Subscribe now</a>
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
	</div>
</section>
<section class="downloadsection">
	<div class="container h-100 d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<div class="pt-1 text-center">
			<h3>
				<b>Want to know more?</b>
			</h3>
			<p class="pt-3">
				Download to know more about us, <br>our project, and how can you participate in our token sale.
			</p>
			<div class="buttons pt-3 ">
				<div class="row w-100">
					<div class="col">
						<div class="d-flex justify-content-center align-items-center">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" target="_blank" class="btn btn-BAL">
							<b>One Pager</b>	
							</a>
						</div>
					</div>
					<div class="col">
						<div>
							<a href="{{ Util::assetUrl('papers/Whitepaper_1.1.pdf') }}" target="_blank" class="btn btn-BAL">
							<b>Whitepaper</b>	
							</a>
						</div>
					</div>
					<div class="col">
						<div>
							<a href="{{ Util::assetUrl('papers/Yellowpaper_1.0.pdf') }}" class="btn btn-BAL" target="_blank">
							<b>Yellowpaper</b>	
							</a>				
						</div>
					</div>
				</div>
				<div class="pt-3">
					<div class="row w-100">
						<div class="col">
							<a href="#contact" class="btn btn-BAL">
								<b>
									Schedule a meeting
								</b>
							</a>
						</div>
						<div class="col">
							<a href="#section-bal-token" class="btn btn-BAL">
								<b>
									BUY BAL TOKENS NOW!
								</b>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section11" id="addons">
	<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
		<h3 class="pt-5">
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
		<div class="row">
			<div class="col-md-4">
				<img src="{{ Util::assetUrl('images/lightdesign.jpg')}}" class="mt-3 w-100 section-10-img">
				<!-- <div class="w-100 general-lighting">
					<div class="container d-flex align-items-end h-100 pb-3">
						<a href="" class="btn btn-BAL">Book now</a>
					</div>
				</div> -->
				<h5 class="pt-3">
					<b>
						Lighting consultation
					</b>
				</h5>
				<div class="collapse" id="read-more">
					<div class="card card-body ml-0 pl-0 border-0">
						Great lighting creates an aesthetic ambience that instantly elevates one’s mood and style. Our highly skilled LED lighting designers will help you to create a stunning atmosphere that brings your LED lighting design dreams to life. This add-on is available to all BAL users, irrespective of your package choice. We provide one-to-one access to our world-class consultants who will work with you and provide expert advice from project start-up to the final glorious switch-on!
					</div>
				</div>
				<button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
					<b class="1-read-more">Read more</b>
					<b  class="1-read-less" style="display: none;">Read less</b>
					<div class="read-more-down float-right">
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="read-more-up float-right" style="display: none;">
						<i class="fas fa-angle-up"></i>
					</div>
				</button>
				<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
					<b>Pricing</b>
					<div class="pricing-down float-right">
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="pricing-up float-right" style="display: none;">
						<i class="fas fa-angle-up"></i>
					</div>
				</button>
				<div class="collapse" id="pricing">
					<div class="card card-body ml-0 pl-0 border-0">
						$199
					</div>
				</div>
				<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
					Book Now
				</a>
			</div>
			<div class="col-md-4">
				<img src="{{ Util::assetUrl('images/luxcalculation.jpg')}}" class="mt-3 w-100 section-10-img">
				<!-- <div class="w-100 general-lighting">
					<div class="container d-flex align-items-end h-100 pb-3">
						<a href="" class="btn btn-BAL">Book now</a>
					</div>
				</div> -->
				<h5 class="pt-3">
					<b>Lux calculation</b>
				</h5>
				<div class="collapse" id="read-more">
					<div class="card card-body ml-0 pl-0 border-0">
						This valuable add-on determines the exact brightness requirements (lumens) for a project area - data which is essential for selecting the right products and quantities to achieve the design objectives in any lighting project. Essentially, contractors and consultants can leverage our expertise to give their clients the most reasonable quote - and including this data in a proposal or quote elevates your professionalism and credibility. What’s more, an accurate lux calculation justifies the quote’s rationale and increases the chances of winning the project bid.
					</div>
				</div>
				<button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
					<b class="2-read-more">Read more</b>
					<b  class="2-read-less" style="display: none;">Read less</b>
					<div class="read-more-down float-right">
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="read-more-up float-right" style="display: none;">
						<i class="fas fa-angle-up"></i>
					</div>
				</button>
				<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
					<b>Pricing</b>
					<div class="pricing-down float-right">
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="pricing-up float-right" style="display: none;">
						<i class="fas fa-angle-up"></i>
					</div>
				</button>
				<div class="collapse" id="pricing">
					<div class="card card-body ml-0 pl-0 border-0">
						$299
					</div>
				</div>
				<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
					Book Now
				</a>
			</div>
			<div class="col-md-4">
				<img src="{{ Util::assetUrl('images/3dlightingdesign.jpg')}}" class="mt-3 w-100 section-10-img">
				<!-- <div class="w-100 general-lighting">
					<div class="container d-flex align-items-end h-100 pb-3">
						<a href="" class="btn btn-BAL">Book now</a>
					</div>
				</div> -->
				<h5 class="pt-3">
					<b>3D lighting design</b>
				</h5>
				<div class="collapse" id="read-more">
					<div class="card card-body ml-0 pl-0 border-0">
						This additional option (available to all BAL users) gives you the opportunity to envision the look and feel of your finished project area. Our professional lighting designers prepare your 3D designs with pinpoint accuracy. In some cases, a 3D lighting design is a contractual requirement when executing a lighting project, but every contractor and consultant can present these stunning 3D models to their clients to inform, reassure and impress. It’s also a chance to gain an edge over competitors, and can add an extra revenue stream to the project.
					</div>
				</div>
				<button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
					<b class="3-read-more">Read more</b>
					<b  class="3-read-less" style="display: none;">Read less</b>
					<div class="read-more-down float-right">
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="read-more-up float-right" style="display: none;">
						<i class="fas fa-angle-up"></i>
					</div>
				</button>
				<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
					<b>Pricing</b>
					<div class="pricing-down float-right">
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="pricing-up float-right" style="display: none;">
						<i class="fas fa-angle-up"></i>
					</div>
				</button>
				<div class="collapse" id="pricing">
					<div class="card card-body ml-0 pl-0 border-0">
						$399
					</div>
				</div>
				<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
					Book Now
				</a>
			</div>
		</div>
	</div>
</section>
@endsection