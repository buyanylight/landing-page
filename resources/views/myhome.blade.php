@extends(($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout')


@section('css')
	@if($agent->isMobile())
		<link rel="stylesheet" href="{{ Util::assetUrl('css/mobile-home.css') }}">
	@else
		<link rel="stylesheet" href="{{ Util::assetUrl('css/home.css') }}">
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
	<div style="position: relative; z-index: 1029">
            <!-- Position toasts -->
    	<div style="position: absolute; top: 145px; right: 55px; min-width: 300px;">
        	<div class="toast" data-autohide="false">
            	<div class="toast-header">
                	<strong class="mr-auto">
                    	<img src="{{ Util::assetUrl('images/logo-black-icon.png') }}" width="25">
                    	BuyAnyLight
                	</strong>
                	<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            	</div>
            	@if(session('success'))
           		<div class="toast-body">
                	<b>Thanks for being awesome!</b>
                	{!! session('success') !!}
            	</div>
           		@else
            	<div class="toast-body">
                	{!! session('danger') !!}
            	</div>
            	@endif
        	</div>
    	</div>    
	</div>
<section class="section-1" >
	<div class="container-fluid d-flex align-items-center justify-content-items h-100 section-padding">
		<div class="row w-100 section-1-row">
			<div class="col-12 col-md-5 d-flex align-items-center justify-content-items">
				<div>
					<h1 class="text-white">
						<br><strong>My Home</strong>
					</h1>
					<p class="text-white">
						<b>
							Are you thinking about changing your home lighting system to LED?
						</b>
					</p>
					<p class="text-white">
						We’ve got great news for you. There’s a new and innovative LED sourcing platform that gives you access to experts, saves you time and helps you make incredible savings on your lighting projects.
					</p>
					<!-- <a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a> -->
					<a target="_blank" href="{{ Util::assetUrl('brochures/MyHome_BAL.pdf') }}" class="btn btn-BAL"><i class="far fa-file-pdf"></i> &nbsp; View Brochure</a>
					<div class="mt-3" style="border: 1px solid white; padding: 25px; background-color: white; border-radius: 20px;">
						<h3 class="text-dark">
							<b>
								<img src="{{ Util::assetUrl('images/home/project_fee.png') }}" class="project_img"> 
								<br>
								<div class="mt-3">
									Sign up now to save $949 for your first project!
								</div> 
							</b>
						</h3>
						<form class="pt-1" method="post" action="/subscribe">
							{{ csrf_field() }}
								<select class="form-control" name="answer" required="required" style="">
									<option selected disabled value="">Interested?</option>
									<option value="Yes, Constructing Home">I'm looking for lights for my new home.</option>
									<option value="Yes, Renovating Home">I'm looking for lights to renovate my home.</option>
									<option value="Yes, Like the idea">Just interested on the idea.</option>
								</select>
								<input type="email" name="email" placeholder="Enter your email" class="form-control mt-3" required="required" style="">
								<input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
					<input type="hidden" name="home" value="1">
								

							<button type="submit" class=" mt-3 btn btn-lg w-100 btn-danger">Sign me up!</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-7">
				<iframe width="100%" height="100%" class="BAL-video" style="border-radius: 20px;" src=" https://www.youtube.com/embed/YiH67TXySrY?rel=0&enablejsapi=1&autoplay=1" frameborder="0" allowfullscreen></iframe>
				<!-- <div class="card-deck slide">
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home1.jpg') }}); background-size: cover; background-position: center; background-position-x: left; border-radius: 15px; background-repeat: no-repeat;"></div>
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home2.jpg') }}); background-size: cover; background-position: center; border-radius: 15px; background-repeat: no-repeat;"></div>
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home3.jpg') }}); background-size: cover; background-position: center; border-radius: 15px; background-repeat: no-repeat;"></div>
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home4.jpg') }}); background-size: cover; background-position: center; border-radius: 15px; background-repeat: no-repeat;"></div>
				</div>
				<div class="arrows"></div> -->
			</div>
		</div>
	</div>
	<div class="icon-scroll" style="">
	</div>
</section>
<section class="section-2">
	<div class="pt-5 pb-5 h-100">
		<div class="container h-100">
			<h3>
				<b>
					<span style="color: #5555A4">My Home</span> Advantages
				</b>
			</h3>
			<div  class="row pt-5 pb-3">
				<div class="col-12 col-md-6">
					<img src="{{ Util::assetUrl('/images/home/home6.jpg') }}" height="100%" width="100%" style="border-radius: 25px;">
				</div>
				<div class="col-12 col-md-6">
					<p class="about-text">
						BuyAnyLight (BAL) is the first platform that’s designed exclusively for sourcing LED lights. With the help of BAL, homeowners like you can now source great quality, low‐cost LED just as the experts do, thanks to our simple, no‐hassle support and intelligent system. We believe in great service that’s professional, honest, super‐efficient. Simply choose our package and upload your requirements. Then just sit back and let our lighting professionals handle the rest! 
					</p>
					<div class="card card-body mt-2">
						<div class="row">
							<div class="col-1">
								<i class="fas fa-tasks" style="font-size: 25px;"></i>
							</div>
							<div class="col-11">
								<h5><b>Convenient</b></h5>
							</div>
						</div>
					</div>
					<div class="card card-body mt-2">
						<div class="row">
							<div class="col-1">
								<i class="fas fa-dollar-sign" style="font-size: 25px;"></i>
							</div>
							<div class="col-11">
								<h5><b>The Best Prices</b></h5>
							</div>
						</div>
					</div>
					<div class="card card-body mt-2">
						<div class="row">
							<div class="col-1">
								<i class="fas fa-stopwatch" style="font-size: 25px;"></i>
							</div>
							<div class="col-11">
								<h5><b>Fast Turnaround</b></h5>
							</div>
						</div>
					</div>
					<div class="card card-body mt-2">
						<div class="row">
							<div class="col-1">
								<i class="fas fa-boxes" style="font-size: 25px;"></i>
							</div>
							<div class="col-11">
								<h5><b>A World of Variety</b></h5>
							</div>
						</div>
					</div>
				<!-- 	<div class="card card-body">
						<i class="fas fa-dollar-sign" style="font-size: 50px;"></i>
						<div class="pt-3">
							<h5><b>The Best Prices</b></h5>
							<p class="pt-1">BAL LED lights are significantly cheaper than any other suppliers. </p>
						</div>
					</div>
					<div class="card card-body">
						<i class="fas fa-stopwatch" style="font-size: 50px;"></i>
						<div class="pt-3">
							<h5><b>Fast Turnaround</b></h5>
							<p class="pt-1">We give you the best prices in a single quote and deliver the goods to your doorstep. It’s that simple! </p>
						</div>
					</div>
					<div class="card card-body">
						<i class="fas fa-boxes" style="font-size: 50px;"></i>
						<div class="pt-3">
							<h5><b>A World of Variety</b></h5>
							<p class="pt-1">We can easily meet your exact requirements from all the world’s top brands. </p>
						</div>
					</div> -->
					
				</div>
			</div>
			
			
	
			<!-- <div class="card-deck row-two h-50" style=""> -->
			<!-- </div> -->
		</div>
	</div>
</section>
<div style="background: #5555a4;">
	<div class="pt-5 pb-5 container text-center">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center align-items-center promo">
				<h3 class="text-white m-0"><b> Sign up now to save<br>$949 for your first project!</b></h3>
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
			<a data-fancybox href="https://www.youtube.com/embed/YiH67TXySrY?rel=0&enablejsapi=1" class="btn btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a>
			<a target="_blank" href="{{ Util::assetUrl('brochures/MyHome_BAL.pdf') }}" class="btn btn-md btn-BAL"> <i class="fas fa-file-pdf"></i> &nbsp;View Brochure</a>
			<!-- <a href="#interested" class="btn btn-md btn-BAL">I'm Interested</a> -->

		</div>
	</div>
</section>
<!-- <div style="background: #5555a4;">
	<div class="pt-5 pb-5 container text-center">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
				<h2 class="text-white m-0"><b> Sign up now get a free lighting project</b></h2>
			</div>
			<div class="col-12 col-md-6">
				<a href="#interested" class="btn btn-lg btn-light">GET THIS DEAL NOW!</a>
			</div>
		</div>
		<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a>
	</div>
</div> -->
<!-- <section class="section-price">
	<div class=" pt-5 pb-5  h-100" style="background-color: #f7f7f7;">
		<div class="container h-100">
			<h3 class="text-center">
				<b>
					<span style="color: #5555A4">My Home Package</span> Price
				</b>
			</h3>
			<div class="center-content">
			<div class="card card-my-home-summary" style="box-shadow: 8px 8px 20px #cccccc;">
				<h4 class="card-header text-center bg-BAL text-white">
					MY HOME
					<br>
					<small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
				</h4>
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
								<span style="text-decoration: line-through;">
									<b>* 10% BAL fee on order confirmation</b> <br>
								</span>
								<span style="text-decoration: line-through;">
									<b>** $949 Project fee payable only on offer acceptance</b>
								</span>
							</p>
							<hr>
							<div class="text-center pb-2">
								<h5>Sign up now to save $949 for your first project!</h5> 
							</div>
							<div class="text-center">
								<a href="#interested" class="btn btn-md btn-BAL">I'm interested</a>
							</div>
						</div>
					</div>
				</div>
		</div>

	</div>
</section> -->
<!-- <section style="background: #f7f7f7;">
	<div  class="container-fluid" style="height: 50vh; " class="w-100">
		<div class="card-deck slide w-100">
			<div class="card" style="background: url({{ Util::assetUrl('/images/home/home1.jpg') }}); background-size: cover; background-position: center; background-position-x: left; border-radius: 15px; background-repeat: no-repeat;"></div>
			<div class="card" style="background: url({{ Util::assetUrl('/images/home/home2.jpg') }}); background-size: cover; background-position: center; border-radius: 15px; background-repeat: no-repeat;"></div>
			<div class="card" style="background: url({{ Util::assetUrl('/images/home/home3.jpg') }}); background-size: cover; background-position: center; border-radius: 15px; background-repeat: no-repeat;"></div>
			<div class="card" style="background: url({{ Util::assetUrl('/images/home/home4.jpg') }}); background-size: cover; background-position: center; border-radius: 15px; background-repeat: no-repeat;"></div>
			</div>
		<div class="arrows"></div>
	</div>
</section> -->
<!-- <div style="background: #5555a4;">
	<div class="pt-5 pb-5 container text-center">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center align-items-center promo">
				<h2 class="text-white m-0"><b> Sign up now to save $949 for your first project!</b></h2>
			</div>
			<div class="col-12 col-md-6">
				<a href="#interested" class="btn btn-lg btn-danger">GET THIS DEAL NOW!</a>
			</div>
		</div>
		<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-md btn-BAL"><i class="fas fa-play"></i> &nbsp; Watch Video</a>
	</div>
</div> -->
<!-- <section class="section-4">
	<div class=" pb-5 mt-5">
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
​
				@foreach($datas as $key => $data)
				<div class="card border-0 bg-white">
					<div class="card-header border-0 bg-white">
						<h5 class="mb-0">
							<button class="btn btn-link text-BAL" 
							data-toggle="collapse" 
							data-target="#faq-{{ $key }}" 
							aria-expanded="true" 
							aria-controls="faq-{{ $key }}">
								{{ $data['title'] }}
							</button>
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
</section> -->
<section class="section-5" id="interested">
	<div class="pt-5 mt-5 pb-5">
		<div class="container">
			<h2 class="text-white">
				<b>
					<img src="{{ Util::assetUrl('images/home/project_fee_white.png') }}" class="project_img_white">
					<br>
					<div class="mt-3">
					Sign up now to save $949 for your first project!

					 </div> 
				</b>
			</h2>
			<form class="pt-3" method="post" action="/subscribe">
				{{csrf_field()}}
				<div>
					<select class="form-control" name="answer" required="required">
						<option selected disabled value="">Looking for lights?</option>
						<option value="Yes, Constructing Home">Yes, I'm constructing my Home.</option>
						<option value="Yes, Renovating Home">Yes, I'm renovating my Home.</option>
						<option value="Yes, Like the idea">No, but interested on the idea.</option>
					</select>
					<input type="email" name="email" placeholder="Enter your email" class="form-control mt-3" required="required">
					<input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
					<input type="hidden" name="home" value="1">

					<button type="submit" class=" mt-3 btn btn-lg btn-danger w-100">Sign me up</button>
				</div>
			</form>
		</div>
	</div>
</section>






@endsection

