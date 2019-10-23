@extends($layout) 

@section('css')
	@if($isDesktop)
	<link rel="stylesheet" href="{{ Util::assetUrl('css/mytower.css') }}">
	@else
	<link rel="stylesheet" href="{{ Util::assetUrl('css/mytower-mobile.css') }}">
	@endif
@endsection 

@section('body-end-javascript')
	<script type="text/javascript">
		$('.slide').slick({
			centerMode: true,
			adaptiveHeight: false,
			centerPadding: '0px',
			slidesToShow: 3,
			initialSlide: 1,
			infinite: true,
			appendArrows: $('.arrows'),
			prevArrow: '',
			nextArrow: '<button type="button" class="btn arrow-btn text-white"><i class="fas fa-long-arrow-alt-right"></i></button>',
			});
	</script>
@endsection
@section('content')
<section class="section-1">
	<div class="container-fluid d-flex align-items-center justify-content-items h-100 section-padding">
		<div>
			
		</div>
		<div class="row w-100 h-50">
			<div class="col-12 col-md-5 d-flex align-items-center justify-content-items">
				<div>
					<h1 class="text-white">
						BuyAnyLight <br><strong>My Tower Package</strong>
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
					<div>
						<form>
							<input type="email" name="email" placeholder="Enter you email" class="form-control">
							<button class="btn btn-BAL mt-2">I'm interested</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-7 h-100">
				<div class="card-deck slide h-100">
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
					<div class="card top-section-images" style="background-image: url({{ Util::assetUrl($data['src']) }});"></div>
					@endforeach
				</div>
				<div class="arrows"></div>
			</div>
		</div>
	</div>
	<div class="icon-scroll" style="">
	</div>
</section>
<section class="section-2">
	<div class="pt-5 mt-5">
		<div class="container">
			<h3 class="mb-4">
				<b>
					BuyAnyLight Home Package Advantages
				</b>
			</h3>
			<div class="row card-deck">


				<?php
					$datas = [];
					$datas[]= [ 'title' => 'Convenience',           'icon' => 'fas fa-tasks',        'content' => 'Cuts the time you spend on sourcing LED by over 90%. No more long and tedious quote & sample processes with multiple suppliers. BAL is your one-stop shop.', ];
					$datas[]= [ 'title' => 'The Best Prices',       'icon' => 'fas fa-dollar-sign',  'content' => 'Huge discounts on top brand quality (no matter what your order size), no middle men and a passion for giving everyone a great deal.', ];
					$datas[]= [ 'title' => 'Access to Variety',     'icon' => 'fas fa-door-open',        'content' => 'With our global network of lighting manufacturers, we can easily meet your exact requirements from the world’s top brands.', ];
					$datas[]= [ 'title' => 'Fast Turnaround',       'icon' => 'fas fa-stopwatch',    'content' => 'We always provide the ideal solutions, the best offers and take care of all the hassle, so the process is super-fast and simple. ', ];
					$datas[]= [ 'title' => 'Secure',                'icon' => 'fas fa-shield-alt',   'content' => 'Enjoy our 100% payment protection without a single sheet of tedious bank paperwork to do: a single transfer is all you need to complete an order.', ];
					$datas[]= [ 'title' => 'Flexible Quotes',       'icon' => 'fas fa-boxes',        'content' => 'You can easily modify the margins on your BAL quotes via the platform. BAL helps you make a handsome profit and still give your client a winning price!', ];
					$datas[]= [ 'title' => 'World-class Logistics', 'icon' => 'fas fa-truck',        'content' => 'BAL makes sure that all your orders are handled with ultimate care and security. We promise on-time delivery with a live shipment tracker.', ];
				?>
				@foreach($datas as $data)
				<div class="col-12 col-md-4  mb-3">
				<div class="card card-body">
					<i class="{{ $data['icon'] }}" style="font-size: 50px;"></i>
					<div class="pt-3">
						<b>{{ $data['title'] }}</b>
						<p class="pt-1">{{ $data['content'] }}</p>
					</div>
				</div>
				</div>
				@endforeach

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
<script>
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
});	
</script>
@endsection