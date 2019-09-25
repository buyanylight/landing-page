@extends('layouts.mobile-layout')

@section('meta-title')
<meta name="title" content="BuyAnyLight | Videos">
<meta property="og:title" content=" BuyAnyLight | Videos">
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
	    background-image: url({{ Util::assetUrl('images/media/bg2.jpg') }});
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
		/*min-height: 75px;*/
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
			<h3 class="text-white" style="text-shadow: -2px 2px 6px #000000;">
				<b>Downloads</b>
			</h3>			
		</div>
	</div>
</div>


<div class="container py-2">
	<div class="row justify-content-center downloads">
	
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
		<div class="col-12 p-3">
			<div class="card">
			    <div class="card-body pt-2">
					<div class="container">
				        <div class="row align-items-center">

					        <div class="col-12 pl-0">
					        	<h2 class="card-title mt-3">{{ $vid['title'] }}</h2>
					        </div>
					        
					        <div class="col-12">
					        	<div class="row justify-content-between align-items-center">					        									        				    		
                    				
                    				<a data-fancybox href="https://www.youtube.com/embed/{{ $vid['link'] }}?rel=0&enablejsapi=1" 
                    				class="btn btn-dark black">
							    		<i class="fas fa-play mr-1"></i>
							    		Play Video
									</a>
							    	<img  src="{{ Util::assetUrl('images/logos/logo-black3.png') }}" alt="{{ $vid['title'] }}">
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


