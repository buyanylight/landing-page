@extends('layouts.mobile-layout')

@section('meta-title')
<meta name="title" content="BuyAnyLight | Downloads">
<meta property="og:title" content=" BuyAnyLight | Downloads">
@endsection

@section('meta-description')
<meta name="description" content="BAL: immense growth potential and exceptional investment opportunities! If you’re considering investing and would like to know more, Contact us." />
<meta property="og:description" content="BAL: immense growth potential and exceptional investment opportunities! If you’re considering investing and would like to know more, Contact us.">
@endsection

@section('head-css')
<style>
	.intro-investor {
		background-size: cover;
		background-position: center;        
		background-image: url({{ Util::assetUrl('images/media/bg1.jpg') }});
		height: 210px;
	}
	.with-right-line {
		color: #000;
	}

	.with-right-line:after {
		background: #d2d2d2;
		content: '';
		display: inline-block;
		height: 1px;
		position: relative;
		top: -5px;
		width: 30px;    
	}

	.downloads a.btn-dark.black {
		background-color: #000000;
		border-color: #000000;  
		font-size: 20px;    
	}

	.downloads .card {  
		/*background-image: url({{ Util::assetUrl('images/media/downloads-bg2.jpg') }});*/
		background-size: cover; 
		width: 370px;
		margin: auto;
	}
	/*.downloads .card .card-title {  
		min-height: 75px;
	}*/
	.downloads .card img {  
		width: 95px;
		height: auto;
		   /* position: absolute;
			right: 5px;
			bottom: 5px;*/
	}
	

</style>
@endsection


@section('content')
<div class="investor pt-5">
	<div class="intro-investor d-flex align-items-center">
		<div class="container">
			<h3 class="text-black">
				<b>Media</b>
			</h3>           
		</div>
	</div>
</div>


<div class="container py-2">
	<div class=" downloads">
	
		<?php 
			$downloads = [];
			$downloads[] = [ "link"=>"one-pagers/BuyAnyLight.pdf", "title"=>"BuyAnyLight One Pager", ];
			$downloads[] = [ "link"=>"brochures/LightFinder_BAL.pdf", "title"=>"Lightfinder Brochures", ];
			$downloads[] = [ "link"=>"brochures/MyHome_BAL.pdf", "title"=>"My Home Brochures", ];
			$downloads[] = [ "link"=>"brochures/MyTower_BAL.pdf", "title"=>"My Tower Brochures", ];

			$downloads[] = [ "link"=>"one-pagers/BuyAnyLight-IEO.pdf", "title"=>"IEO One Pager", ];
			$downloads[] = [ "link"=>"papers/Whitepaper_1.1.pdf", "title"=>"White Paper", ];
			$downloads[] = [ "link"=>"papers/Yellowpaper_1.0.pdf", "title"=>"Yellow Paper", ];
			$downloads[] = [ "link"=>"BAL_Token_Sale_Agreement.pdf", "title"=>"Token Sale Agreement", ];            
		?>  


		<h3 class="pt-3">
			<b> Downloads
		</h3>
	
		@foreach($downloads as $dwnld)
		<a href="{{ Util::assetUrl($dwnld['link']) }}" target="_blank">
		<div class="card mb-3" style="max-width: 100%;">
			<div class="row no-gutters">
				<div class="col-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 25px;">
		      		<i class="far fa-file-pdf"></i>
				</div>
				<div class="col-8">
	  				<div class="card-body">
						<p class="card-title">{!! $dwnld['title'] !!}</p>
	  				</div>
				</div>
  			</div>
		</div> 
		</a>
		@endforeach



		<h3 class="pt-3">
			<b> Videos
		</h3>


		<?php 
			$videos= [];
			$videos[] = [ "link"=>"aaJQLTaSgLk", "title"=>"Introduction to BAL", ];
			$videos[] = [ "link"=>"OBm3CPqiXt8", "title"=>"Lightfinder", ];
			$videos[] = [ "link"=>"rWX1qeigBMk", "title"=>"My Home", ];
			$videos[] = [ "link"=>"IdrrtNgvDKo", "title"=>"My Tower", ];
			$videos[] = [ "link"=>"7N3FqFyASC0", "title"=>"Become a Selller", ];
			$videos[] = [ "link"=>"o8CAwwz6tIM", "title"=>"BAL IEO", ];
			$videos[] = [ "link"=>"5nMkricvzfc", "title"=>"IEO vs ICO", ];
		?>

			@foreach($videos as $vid)
			<a  data-fancybox href="https://www.youtube.com/embed/{{ $vid['link'] }}?rel=0&enablejsapi=1" target="_blank">
				<div class="card mb-3" style="max-width: 100%;">
					<div class="row no-gutters">
						<div class="col-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 25px;">
			      			<i class="fas fa-play"></i>
						</div>
						<div class="col-8">
	  						<div class="card-body">
								<p class="card-title">{!! $vid['title'] !!}</p>
	  						</div>
						</div>
  					</div>
				</div> 
			</a>
			@endforeach

	</div>  
</div>


@endsection

