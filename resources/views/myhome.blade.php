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
	<div style="position: relative; z-index: 5">
            <!-- Position toasts -->
    	<div style="position: absolute; top: 70px; right: 55px; min-width: 300px;">
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
<section class="section-1">
	<div class="container-fluid d-flex align-items-center justify-content-items h-100 section-padding">
		<div class="row w-100 section-1-row">
			<div class="col-12 col-md-5 d-flex align-items-center justify-content-items">
				<div>
					<h1 class="text-white">
						BuyAnyLight <br><strong>My Home Package</strong>
					</h1>
					<p class="text-white">
						<b>
							Are you thinking about changing your home lighting system to LED?
						</b>
					</p>
					<p class="text-white">
						We’ve got great news for you. There’s a new and innovative LED sourcing platform that gives you access to experts, saves you time and helps you make incredible savings on your lighting projects.
					</p>
					<div>
						<form>
							<input type="email" name="email" placeholder="Enter you email" class="form-control">
							<button class="btn btn-BAL mt-2">I'm interested</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-7">
				<div class="card-deck slide">
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home1.jpg') }}); background-size: cover; background-position: center; background-position-x: left; border-radius: 15px;"></div>
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home2.jpg') }}); background-size: cover; background-position: center; border-radius: 15px;"></div>
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home3.jpg') }}); background-size: cover; background-position: center; border-radius: 15px;"></div>
					<div class="card" style="background: url({{ Util::assetUrl('/images/home/home4.jpg') }}); background-size: cover; background-position: center; border-radius: 15px;"></div>
				</div>
				<div class="arrows"></div>
			</div>
		</div>
	</div>
	<div class="icon-scroll" style="">
	</div>
</section>
<section class="section-2">
	<div class="pt-5 mt-5 pb-5 mb-5 h-100">
		<div class="container h-100">
			<h3>
				<b>
					BuyAnyLight <span style="color: #5555A4">Home Package</span> Advantages
				</b>
			</h3>
			<div class="card-deck h-50 pt-5">
				<div class="card card-body">
					<i class="fas fa-tasks" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>Convencience</b></h5>
						<p class="pt-1">The time you spend on sourcing for lights is significantly reduced. </p>
					</div>
				</div>
				<div class="card card-body">
					<i class="fas fa-dollar-sign" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>The Best Prices</b></h5>
						<p class="pt-1">BAL LED lights are significantly cheaper than any other suppliers. </p>
					</div>
				</div>
				<div class="card card-body">
					<i class="fas fa-boxes" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>A World of Variety</b></h5>
						<p class="pt-1">We can easily meet your exact requirements from all the world’s top brands. </p>
					</div>
				</div>
			</div>
			<div class="card-deck row-two h-50" style="">
				<div class="card card-body">
					<i class="fas fa-stopwatch" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>Fast Turnaround</b></h5>
						<p class="pt-1">We give you the best prices in a single quote and deliver the goods to your doorstep. It’s that simple! </p>
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
					<i class="fas fa-globe-asia" style="font-size: 50px;"></i>
					<div class="pt-3">
						<h5><b>World-class Logistics</b></h5>
						<p class="pt-1">BAL makes sure that all your orders are handled with ultimate care and security with a live shipment tracker. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-3 pt-5">
	<div class="main-bg">
		<div class="container pt-5">
			<h2 class="text-center text-white">
				<b>	How it Works </b>
			</h2>
		</div>
	</div>
	<div class="row w-100" style="position: relative; bottom: 220px; margin:0px">
		<div class="col-md-3 col-12">
			<div class="d-flex  h-100 align-items-end justify-content-end"></div>
		</div>
		<div class="col-md-6 col-12">
			<div class="d-flex justify-content-center" style="background: url({{ Util::assetUrl('/images/home/home_laptop.png') }}); height: 393px; background-repeat: no-repeat; background-position: center; background-size:contain;">
				<div class="works">
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui1.png') }}" style="        width: 94.5%; position: relative; top: 108px; left: 0px; height: 166px;">
						</div>
					</div>
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui2.png') }}" style="        width: 94.5%; position: relative; top: 108px; left: 0px; height: 166px;">
						</div>
					</div>	
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui3.png') }}" style="        width: 94.5%; position: relative; top: 108px; left: 0px; height: 166px;">
						</div>
					</div>	
					<div>
						<div class="d-flex justify-content-center">
							<img src="{{ Util::assetUrl('images/home/home_ui4.png') }}" style="        width: 94.5%; position: relative; top: 108px; left: 0px; height: 166px;">
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
	</div>
</section>
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
					$datas[]= [ 'title'=>'What is BAL?', 							'content'=>'Simply visit <a href="https://lightfinder.buyanylight.com/buyer/register">https:// lightfinder.buyanylight.com /buyer/register</a>, follow the steps to create an account and fill in the registration form. Once you’ve registered, you can start uploading your enquiry.', ];
					$datas[]= [ 'title'=>'How do I register with BAL as a buyer?', 	'content'=>'BAL (BuyAnyLight) is a pioneering online platform offering an innovative and value-packed procedure for resourcing LED lighting projects. BAL delivers unique advantages for both buyers and sellers and a win-win edge for them all.', ];
					$datas[]= [ 'title'=>'What is BAL?', 							'content'=>'BAL (BuyAnyLight) is a pioneering online platform offering an innovative and value-packed procedure for resourcing LED lighting projects. BAL delivers unique advantages for both buyers and sellers and a win-win edge for them all.', ];
					$datas[]= [ 'title'=>'How do I register with BAL as a buyer?', 	'content'=>'Simply visit <a href="https://lightfinder.buyanylight.com/buyer/register">https:// lightfinder.buyanylight.com /buyer/register</a>, follow the steps to create an account and fill in the registration form. Once you’ve registered, you can start uploading your enquiry.', ];
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
</section>
<section class="section-5">
	<div class="pt-5 mt-5 pb-5">
		<div class="container">
			<h2 class="text-white">
				<b>
					Are you looking for lights for your house?
				</b>
			</h2>
			<form class="pt-3" method="post" action="/subscribe">
				{{csrf_field()}}
				<div>
					<select class="form-control" name="answer" required="required">
						<option selected disabled value="">Select an option</option>
						<option value="Yes, Constructing Home">Yes, I'm constructing my Home.</option>
						<option value="Yes, Renovating Home">Yes, I'm renovating my Home.</option>
						<option value="Yes, Like the idea">No, but interested on the idea.</option>
					</select>
					<input type="email" name="email" placeholder="Enter your email" class="form-control mt-3" required="required">
					<button type="submit" class=" mt-3 btn btn-dark">I'm Interested</button>
				</div>
			</form>
		</div>
	</div>
</section>






@endsection

