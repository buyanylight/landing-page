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
	    background-image: url({{ Util::assetUrl('images/media/downloads-bg2.jpg') }});
		background-size: cover;	
		width: 370px;
		margin: auto;
	}
	.downloads .card .card-title {	
		min-height: 75px;
	}
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
				<b>Downloads</b>
			</h3>			
		</div>
	</div>
</div>


<div class="container py-2">
	<div class="row justify-content-center downloads">
	
		<?php 
			$downloads = [];
			$downloads[] = [ "link"=>"one-pagers/BuyAnyLight.pdf", "title"=>"BuyAnyLight One Pager", ];
			$downloads[] = [ "link"=>"brochures/LightFinder_BAL.pdf", "title"=>"Lightfinder Brochures", ];
			$downloads[] = [ "link"=>"brochures/MyHome_BAL.pdf", "title"=>"My Home Brochures", ];
			$downloads[] = [ "link"=>"brochures/MyTower_BAL.pdf", "title"=>"My Tower Brochures", ];

			$downloads[] = [ "link"=>"one-pagers/BuyAnyLight-IEO.pdf", "title"=>"IEO One Pager", ];
			$downloads[] = [ "link"=>"papers/Whitepaper_1.0.pdf", "title"=>"White Paper", ];
			$downloads[] = [ "link"=>"papers/Yellowpaper_1.0.pdf", "title"=>"Yellow Paper", ];
			$downloads[] = [ "link"=>"BAL_Token_Sale_Agreement.pdf", "title"=>"Token Sale Agreement", ];			
		?>	
	
		@foreach($downloads as $dwnld)
		<div class="col p-3">
			<div class="card">
			    <div class="card-body pt-2">
					<div class="container">
				        <div class="row align-items-center">

					        <div class="col-12 pl-0">
					        	<h2 class="card-title mt-3">{{ $dwnld['title'] }}</h2>
					        </div>
					        
					        <div class="col-12">
					        	<div class="row justify-content-between align-items-center">					        		
							        <a target="_blank" 
							        href="{{ Util::assetUrl($dwnld['link']) }}"
							        class="btn btn-dark black">							    		
							    		<i class="fas fa-file-pdf"></i>
							    		Download PDF
									</a>
							    	<img  src="{{ Util::assetUrl('images/logos/logo-black3.png') }}" alt="{{ $dwnld['title'] }}">
					        	</div>
					        </div>

				    	</div>
				    </div>
			    </div>
			</div>
		</div>
		@endforeach

	</div>	
</div>


@endsection


