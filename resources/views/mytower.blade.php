@extends($layout) 

@section('css')
	@if($isDesktop)
	<link rel="stylesheet" href="{{ Util::assetUrl('css/mytower.css') }}">
	@else
	<link rel="stylesheet" href="{{ Util::assetUrl('css/mytower-mobile.css') }}">
	@endif
@endsection 

@section('body-end-javascript')
	@if($agent->isMobile())



	<script type="text/javascript">

		$('.slide').slick({
			centerMode: true,
			adaptiveHeight: false,
			centerPadding: '0px',
			slidesToShow: 1,
			initialSlide: 0,
			infinite: true,
			appendArrows: $('.arrows'),
			prevArrow: '',
			nextArrow: '<button type="button" class="btn arrow-btn text-white"><i class="fas fa-long-arrow-alt-right"></i></button>',
			});

		$('.works').slick({
			centerMode: true,
			adaptiveHeight: false,
			centerPadding: '0px',
			slidesToShow: 1,
			initialSlide: 0,
			infinite: true,
			}).on('afterChange', function(event, slick, currentSlide, nextSlide){
				console.log(currentSlide)
  				if (currentSlide == 0) {
  					$('.step1').show()
  					$('.step2').hide()
  					$('.step3').hide()
  					$('.step4').hide()
  				}
  				if (currentSlide == 1) {
  					$('.step1').hide()
  					$('.step2').show()
  					$('.step3').hide()
  					$('.step4').hide()
  				}
  				if (currentSlide == 2) {
  					$('.step1').hide()
  					$('.step2').hide()
  					$('.step3').show()
  					$('.step4').hide()
  				}
  				if (currentSlide == 3) {
  					$('.step1').hide()
  					$('.step2').hide()
  					$('.step3').hide()
  					$('.step4').show()
  				}
		})
	</script>
	@else
		<script type="text/javascript">

		$('.slide').slick({
			centerMode: true,
			adaptiveHeight: false,
			centerPadding: '0px',
			slidesToShow: 3,
			initialSlide: 0,
			infinite: true,
			appendArrows: $('.arrows'),
			prevArrow: '',
			nextArrow: '<button type="button" class="btn arrow-btn text-white"><i class="fas fa-long-arrow-alt-right"></i></button>',
			});

		$('.works').slick({
			centerMode: true,
			adaptiveHeight: false,
			centerPadding: '0px',
			slidesToShow: 1,
			initialSlide: 0,
			infinite: true,
			}).on('afterChange', function(event, slick, currentSlide, nextSlide){
				console.log(currentSlide)
  				if (currentSlide == 0) {
  					$('.step1').show()
  					$('.step2').hide()
  					$('.step3').hide()
  					$('.step4').hide()
  				}
  				if (currentSlide == 1) {
  					$('.step1').hide()
  					$('.step2').show()
  					$('.step3').hide()
  					$('.step4').hide()
  				}
  				if (currentSlide == 2) {
  					$('.step1').hide()
  					$('.step2').hide()
  					$('.step3').show()
  					$('.step4').hide()
  				}
  				if (currentSlide == 3) {
  					$('.step1').hide()
  					$('.step2').hide()
  					$('.step3').hide()
  					$('.step4').show()
  				}
		})
	</script>
	@endif
@endsection
@section('content')
<section class="section-1">
	<div class="container-fluid d-flex align-items-center justify-content-items h-100 section-padding">
		<div>
			
		</div>
		<div class="row w-100 section-1-row">
			<div class="col-12 col-md-5 d-flex align-items-center justify-content-items">
				<div>
					<h1 class="text-white">
						<strong>My Tower</strong>
					</h1>
					<p class="text-white">
						<b>
							Are you a consultant, contractor or project owner? 
						</b>
					</p>
					<p class="text-white">
						If yes, we have great news that will drive up sales, profits and project cycle 
						efficiency for your business and save a fortune for project owners!
					</p>
					<!-- <a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="btn btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a> -->
					<a data-fancybox href="{{ Util::assetUrl('brochures/MyTower_BAL.pdf') }}" class="btn btn-BAL"><i class="far fa-file-pdf"></i> &nbsp; View Brochure</a>
					<div class="mt-3" style="border: 1px solid white; padding: 25px; background-color: white; border-radius: 20px;">
						<h3 class="text-dark">
							<b>
								<span style="text-decoration:line-through;">Project fee = $1949 </span> <br>Sign up now and get no project fee on your first project
							</b>
						</h3>
						<form class="pt-1" method="post" action="/subscribe">
							{{ csrf_field() }}
								<select class="form-control" name="answer" required="required" style="">
									<option selected disabled value="">Interested?</option>
									<option value="Yes, Constructing Home">I'm looking for lights for a new project.</option>
									<option value="Yes, Renovating Home">I'm looking for lights to renovate a project.</option>
									<option value="Yes, Like the idea">Just interested on the idea.</option>
								</select>
								<input type="email" name="email" placeholder="Enter your email" class="form-control mt-3" required="required" style="">

							<button type="submit" class=" mt-3 btn btn-lg w-100 btn-danger">Sign me up!</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-7">
				<iframe width="100%" height="100%"  class="BAL-video" src=" https://www.youtube.com/embed/ggLc0PPemko?rel=0&enablejsapi=1&autoplay=1" frameborder="0" allowfullscreen></iframe>

				<!-- <div class="card-deck slide ">
					<?php
						$datas = [];
						$datas[]= ['src'=>'images/mytower/mytower-imgs1.jpg'];
						$datas[]= ['src'=>'images/mytower/mytower-imgs2.jpg'];
						$datas[]= ['src'=>'images/mytower/mytower-imgs3.jpg'];
						$datas[]= ['src'=>'images/mytower/mytower-imgs4.jpg'];
						$datas[]= ['src'=>'images/mytower/mytower-imgs5.jpg'];
						$datas[]= ['src'=>'images/mytower/mytower-imgs6.jpg'];
					?>
					@foreach($datas as $data)
					<div class="card top-section-images" style="background-image: url({{ Util::assetUrl($data['src']) }}); background-size: cover; background-position: center; background-position-x: left; border-radius: 15px; background-repeat: no-repeat;"></div>
					@endforeach
				</div>
				<div class="arrows"></div> -->
			</div>
		</div>
	</div>
	<div class="icon-scroll" style="">
	</div>
</section>
<section class="section-2">
	<div class="pt-5 mt-5 pb-5 h-100">
		<div class="container h-100">
			<h3>
				<b>
					<span style="color: #5555A4">My Tower</span> Advantages
				</b>
			</h3>
			<div class="card-deck h-50 pt-5">
				<div class="card card-body">
					<i class="fas fa-tasks" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>Convencience</b></h5>
						<p class="pt-1"> No more long and tedious quote & sample processes with multiple suppliers. BAL is your one-stop shop. </p>
					</div>
				</div>
				<div class="card card-body">
					<i class="fas fa-dollar-sign" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>The Best Prices</b></h5>
						<p class="pt-1">Huge discounts on top brand quality (no matter what your order size), no middle men and a passion for giving everyone a great deal. </p>
					</div>
				</div>
				<div class="card card-body">
					<i class="fas fa-boxes" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>Access to Variety</b></h5>
						<p class="pt-1">We can easily meet your exact requirements from all the world’s top brands. </p>
					</div>
				</div>
			</div>
			<div class="card-deck row-two h-50" style="">
				<div class="card card-body">
					<i class="fas fa-boxes" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>Flexible Quotes</b></h5>
						<p class="pt-1">BAL helps you make a handsome profit and still give your client a winning price! </p>
					</div>
				</div>
				<div class="card card-body">
					<i class="fas fa-shield-alt" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>Secure</b></h5>
						<p class="pt-1">Your payment is secured with BAL until you receive the goods. So your funds are safe with us. </p>
					</div>
				</div>
				<div class="card card-body">
					<i class="fas fa-truck" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>World-class Logistics</b></h5>
						<p class="pt-1">BAL makes sure that all your orders are handled with ultimate care and security with a live shipment tracker. </p>
					</div>
				</div>
			</div>
			<!-- <div class="pt-5 text-center">
				<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a>
				<a href="#interested" class="btn btn-md btn-BAL">I'm Interested</a>
				
			</div> -->
		</div>
	</div>
</section>
<div style="background: #5555a4;">
	<div class="pt-5 pb-5 container text-center">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
				<h2 class="text-white m-0"><b> Yes! I Want The Free Offer</b></h2>
			</div>
			<div class="col-12 col-md-6">
				<a href="#interested" class="btn btn-lg btn-danger">GET THIS DEAL NOW!</a>
			</div>
		</div>
		<!-- <a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a> -->
	</div>
</div>
<section class="section-3">
	<div class="main-bg">
		<div class="container pt-5">
			<h2 class="text-center text-white">
				<b>	How it Works </b>
			</h2>
		</div>
	</div>
	<div class="row w-100 works-row">
		<div class="col-md-3 col-12">
			<div class="d-flex  h-100 align-items-end justify-content-end"></div>
		</div>
		<div class="col-md-6 col-12">
			<div class="d-flex justify-content-center laptop">
				<div class="works">
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui1.png') }}" class="works-img">
						</div>
					</div>
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui2.png') }}" class="works-img">
						</div>
					</div>	
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui3.png') }}" class="works-img">
						</div>
					</div>	
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui4.png') }}"class="works-img">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-12">
			<div class="works-text h-100 d-flex align-items-end">
				<div class="step1">
					<h5><b>Step 1</b></h5>
					<p>Create your BAL account.</p>
				</div>
				<div class="step2" style="display: none;">
					<h5><b>Step 2</b></h5>
					<p>Submit your enquiry and await your quote.</p>
				</div>
				<div class="step3" style="display: none;">
					<h5><b>Step 3</b></h5>
					<p>Receive the quote and, if you wish, request samples.</p>
				</div>
				<div class="step4" style="display: none;">
					<h5><b>Step 4</b></h5>
					<p>Confirm your order.</p>
				</div>
			</div>
		</div>
		<div class="container text-center pt-5">
			<a data-fancybox href="https://www.youtube.com/embed/ggLc0PPemko?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a>
			<a data-fancybox href="{{ Util::assetUrl('brochures/MyTower_BAL.pdf') }}" class="btn btn-md btn-BAL"> <i class="fas fa-file-pdf"></i> &nbsp;View Brochure</a>
			<!-- <a href="#interested" class="btn btn-md btn-BAL">I'm Interested</a> -->

		</div>
	</div>
</section>
<!-- <div style="background: #5555a4;">
	<div class="pt-5 pb-5 container text-center">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
				<h2 class="text-white m-0"><b> YES! I Want The Free Offer</b></h2>
			</div>
			<div class="col-12 col-md-6">
				<a href="#interested" class="btn btn-lg btn-light">GET THIS DEAL NOW!</a>
			</div>
		</div>
		<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a>
	</div>
</div> -->
<section class="section-price">
	<div class="pt-5 pb-5 h-100" style="background-color: #f7f7f7;">
		<div class="container h-100">
			<h3 class="text-center">
				<b>
					<span style="color: #5555A4">My Tower Package</span> Price
				</b>
			</h3>
			<div class="center-content">
			<div class="card card-my-home-summary" style="box-shadow: 8px 8px 20px #cccccc;">
				<h4 class="card-header text-center bg-BAL text-white">
					MY TOWER
					<br>
					<small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
				</h4>
				<div class="card-body pt-5 pb-5">
						<p class="card-text text-center">A COMPLETE PROJECT SOLUTION WITH LOWEST PRICES IN THE ENTIRE MARKET</p>
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
								<span style="text-decoration: line-through;">
									<b>* 10% BAL fee on order confirmation </b> <br>
								</span>
								<span style="text-decoration: line-through;">
									<b>** $1949 Project fee payable only on offer acceptance </b>
								</span>
							</p>
							<hr>
							<div class="text-center pb-2">
								<h5>
									<b>Free of cost on your first project </b>
								</h5> 
							</div>
							<div class="text-center">
								<!-- <a href="#interested" class="btn btn-md btn-BAL">I'm interested</a> -->
							</div>
						</div>
					</div>
				</div>
		</div>

	</div>
</section>
<div style="background: #5555a4;">
	<div class="pt-5 pb-5 container text-center">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
				<h2 class="text-white m-0"><b> Yes! I Want The Free Offer</b></h2>
			</div>
			<div class="col-12 col-md-6">
				<a href="#interested" class="btn btn-lg btn-danger">GET THIS DEAL NOW!</a>
			</div>
		</div>
		<!-- <a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a> -->
	</div>
</div>
<section class="section-4">
	<div class="pt-5 pb-5 mt-5">
		<div class="container">
			<h3>
				<b>
					Frequently Asked Questions
				</b>
			</h3>		
			<div id="accordion" class="mt-4">
				<?php 
					$datas = [];
					$datas[]= [ 'title'=>'What is BAL?', 'content'=>' BAL (BuyAnyLight) is a pioneering online platform offering an innovative and value-packed procedure for resourcing LED lighting projects. BAL delivers unique advantages for both buyers and sellers and a win-win edge for them all.', ];
					$datas[]= [ 'title'=>'How do I register with BAL?', 	'content'=>'Simply visit <a href="https://lightfinder.buyanylight.com/buyer/register">https:// lightfinder.buyanylight.com /buyer/register</a>, follow the steps to create an account and fill in the registration form. Once you’ve registered, you can start uploading your enquiry.', ];
					$datas[]= [ 'title'=>'Why should I use the BAL platform?', 							'content'=>'	 Here are some of great values the platform provides for sellers: 
                           <ul>
                              <li>
                                easy to set-up and use 
                              </li>
                              <li>
                                free registration 
                              </li>
                              <li>
                                saves you lots of money 
                              </li>
                              <li>
                                secure payment
                              </li>
                              <li>
                                samples available 
                              </li>
                              <li>
                                reliable 
                              </li>
                              <li>
                                trackable deliveries to your door
                              </li>
                           </ul>', ];
					$datas[]= [ 'title'=>'If I have a question or concern, who do I contact?', 	'content'=>'Email us at info@buyanylight.com', ];
				?>

				@foreach($datas as $key => $data)
				<div class="card border-0 bg-white">
					<div class="card-header border-0 bg-white">
						<h5 class="mb-0">
							<a class="btn-link text-BAL" 
							data-toggle="collapse" 
							data-target="#faq-{{ $key }}" 
							aria-expanded="true" 
							aria-controls="faq-{{ $key }}">
								{{ $data['title'] }}
							</a>
						</h5>
					</div>
					<div id="faq-{{ $key }}" class="collapse" data-parent="#accordion">
						<div class="card-body">
							{!! $data['content'] !!}
						</div>
					</div>
				</div>
				@if($key < count($datas)-1)
				<hr>
				@endif
				@endforeach
			</div>
	
		</div>
	</div>
</section>
<section class="section-5" id="interested">
	<div class="pt-5 mt-5 pb-5">
		<div class="container">
			<h2 class="text-white">
				<b>
					<span style="text-decoration:line-through;">Project fee = $1949 </span> 
					<br>Sign up now and get no project fee on your first project
				</b>

			</h2>
			<form class="pt-3" method="post" action="/subscribe">
				{{csrf_field()}}
				<div>
					<select class="form-control" name="answer" required="required">
						<option selected disabled value="">Looking for lights?</option>
						<option value="Yes, Constructing Home">Yes, I'm constructing at the moment.</option>
						<option value="Yes, Renovating Home">Yes, I'm retrofitting a project.</option>
						<option value="Yes, Like the idea">No, but interested on the idea.</option>
					</select>
					<input type="email" name="email" placeholder="Enter your email" class="form-control mt-3" required="required">
					<button type="submit" class=" mt-3 btn btn-danger btn-lg w-100">Sign me up</button>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection