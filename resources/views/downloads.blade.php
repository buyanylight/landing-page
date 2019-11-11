@extends('layouts.main-layout')

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
		width: 345px;
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

	a:hover{
		text-decoration: none;
	}
	

</style>
@endsection


@section('content')
<div class="investor pt-5">
	<div class="intro-investor d-flex align-items-center">
		<div class="container">
			<h1 class="text-black">
				<b>Media</b>
			</h1>
		</div>
	</div>
</div>


<div class="container py-5">
	<div class=" downloads">
	
		<?php 
			$downloads_bal = [];
			$downloads_bal[] = [ "link"=>"one-pagers/BuyAnyLight.pdf", "title"=>"BuyAnyLight <br> One Pager", ];
			$downloads_bal[] = [ "link"=>"brochures/LightFinder_BAL.pdf", "title"=>"Lightfinder <br>Brochure", ];
			$downloads_bal[] = [ "link"=>"brochures/MyHome_BAL.pdf", "title"=>"My Home <br> Brochure", ];
			$downloads_bal[] = [ "link"=>"brochures/MyTower_BAL.pdf", "title"=>"My Tower <br> Brochures", ];		
		?>

		<h3 class="mb-5">
			<b>
				BuyAnyLight 
			</b>
		</h3>
		<h5 class="mb-3">
			<b>
				Downloads 
			</b>
		</h5>

		<div class="card-deck pl-3 d-flex justify-content-start">

		@foreach($downloads_bal as $dwnld)
			@if($dwnld['title'] == 'BuyAnyLight <br> One Pager' || $dwnld['title'] == 'My Tower <br> Brochures' )
			<a href="{{ Util::assetUrl($dwnld['link']) }}" target="_blank">
				<div class="card mb-5 text-center" style="max-width: 300px;">
		  			<div class="row no-gutters">
		    			<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 35px;">
		      				<i class="far fa-file-pdf"></i>
		    			</div>
		    			<div class="col-md-8">
		      				<div class="card-body">
		        				<p class="card-title mb-0">{!! $dwnld['title'] !!}</p>
		      				</div>
		    			</div>
		  			</div>
				</div>
			</a>	
			@else
			<a href="{{ Util::assetUrl($dwnld['link']) }}" target="_blank">
				<div class="card mb-5 ml-5 text-center" style="max-width: 300px;">
			  		<div class="row no-gutters">
			    		<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 35px;">
			      			<i class="far fa-file-pdf"></i>
			    		</div>
			    		<div class="col-md-8">
			      			<div class="card-body">
			        			<p class="card-title mb-0">{!! $dwnld['title'] !!}</p>
			      			</div>
			    		</div>
			  		</div>
				</div>
			</a>

			@endif
		@endforeach
		</div>


		<h5 class="mb-3">
			<b>
				Videos 
			</b>
		</h5>

		<?php 
			$videos_bal = [];
			$videos_bal[] = [ "link"=>"aaJQLTaSgLk", "title"=>"Introduction to BAL", ];
			$videos_bal[] = [ "link"=>"OBm3CPqiXt8", "title"=>"Lightfinder", ];
			$videos_bal[] = [ "link"=>"rWX1qeigBMk", "title"=>"My Home", ];
			$videos_bal[] = [ "link"=>"IdrrtNgvDKo", "title"=>"My Tower", ];
			$videos_bal[] = [ "link"=>"7N3FqFyASC0", "title"=>"Become a Selller", ];
		?>

		<div class="card-deck pl-3 d-flex justify-content-start">

		@foreach($videos_bal as $vid)
			@if($vid['title'] == 'Introduction to BAL' || $vid['title'] == 'My Tower' )
			<a  data-fancybox href="https://www.youtube.com/embed/{{ $vid['link'] }}?rel=0&enablejsapi=1">
				<div class="card mb-5 text-center" style="max-width: 300px;">
		  			<div class="row no-gutters">
		    			<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 30px;">
		      				<i class="fas fa-play"></i>
		    			</div>
		    			<div class="col-md-8">
		      				<div class="card-body">
		        				<p class="card-title mb-0">{!! $vid['title'] !!}</p>
		      				</div>
		    			</div>
		  			</div>
				</div>
			</a>	
			@else
			<a  data-fancybox href="https://www.youtube.com/embed/{{ $vid['link'] }}?rel=0&enablejsapi=1">
				<div class="card mb-5 ml-5 text-center" style="max-width: 300px;">
			  		<div class="row no-gutters">
			    		<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 30px;">
			      			<i class="fas fa-play"></i>
			    		</div>
			    		<div class="col-md-8">
			      			<div class="card-body">
			        			<p class="card-title mb-0">{!! $vid['title'] !!}</p>
			      			</div>
			    		</div>
			  		</div>
				</div>
			</a>

			@endif
		@endforeach
		</div>







		<hr>


		<?php 
			$downloads_ieo = [];
		

			$downloads_ieo[] = [ "link"=>"one-pagers/BuyAnyLight-IEO.pdf", "title"=>"BuyAnyLight <br> IEO One Pager", ];
			$downloads_ieo[] = [ "link"=>"papers/Whitepaper_1.1.pdf", "title"=>"BuyAnyLight <br> White Paper", ];
			$downloads_ieo[] = [ "link"=>"papers/Yellowpaper_1.0.pdf", "title"=>"BuyAnyLight <br> Yellow Paper", ];
			$downloads_ieo[] = [ "link"=>"BAL_Token_Sale_Agreement.pdf", "title"=>"Token Sale <br>Agreement", ];			
		?>


		<h3 class="mb-5">
			<b>
				BuyAnyLight IEO
			</b>
		</h3>
		<h5 class="mb-3">
			<b>
				Downloads 
			</b>
		</h5>

		<div class="card-deck pl-3 d-flex justify-content-start">

		@foreach($downloads_ieo as $dwnld)
			@if($dwnld['title'] == 'BuyAnyLight <br> IEO One Pager' || $dwnld['title'] == 'Token Sale <br>Agreement' )
			<a href="{{ Util::assetUrl($dwnld['link']) }}">
				<div class="card mb-5 text-center" style="max-width: 300px;">
		  			<div class="row no-gutters">
		    			<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 35px;">
		      				<i class="far fa-file-pdf"></i>
		    			</div>
		    			<div class="col-md-8">
		      				<div class="card-body">
		        				<p class="card-title mb-0">{!! $dwnld['title'] !!}</p>
		      				</div>
		    			</div>
		  			</div>
				</div>
			</a>	
			@else
			<a href="{{ Util::assetUrl($dwnld['link']) }}" target="_blank">
				<div class="card mb-5 ml-5 text-center" style="max-width: 300px;">
			  		<div class="row no-gutters">
			    		<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 35px;">
			      			<i class="far fa-file-pdf"></i>
			    		</div>
			    		<div class="col-md-8">
			      			<div class="card-body">
			        			<p class="card-title mb-0">{!! $dwnld['title'] !!}</p>
			      			</div>
			    		</div>
			  		</div>
				</div>
			</a>

			@endif
		@endforeach
		</div>


		<?php 
			$videos_ieo = [];
			$videos_ieo[] = [ "link"=>"o8CAwwz6tIM", "title"=>"BuyAnyLight IEO", ];
			$videos_ieo[] = [ "link"=>"5nMkricvzfc", "title"=>"IEO vs ICO", ];
		?>


		<h5 class="mb-3">
			<b>
				Videos 
			</b>
		</h5>


		<div class="card-deck pl-3 d-flex justify-content-start">

		@foreach($videos_ieo as $vid)
			@if($vid['title'] == 'BuyAnyLight IEO' )
			<a data-fancybox href="https://www.youtube.com/embed/{{ $vid['link'] }}?rel=0&enablejsapi=1">
				<div class="card mb-5 text-center" style="max-width: 300px;">
		  			<div class="row no-gutters">
		    			<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 35px;">
		      				<i class="fas fa-play"></i>
		    			</div>
		    			<div class="col-md-8">
		      				<div class="card-body">
		        				<p class="card-title mb-0">{!! $vid['title'] !!}</p>
		      				</div>
		    			</div>
		  			</div>
				</div>
			</a>	
			@else
			<a data-fancybox href="https://www.youtube.com/embed/{{ $vid['link'] }}?rel=0&enablejsapi=1">
				<div class="card mb-5 ml-5 text-center" style="max-width: 300px;">
			  		<div class="row no-gutters">
			    		<div class="col-md-4 d-flex align-items-center justify-content-center border-right border-dark bg-black text-white" style="font-size: 35px;">
		      				<i class="fas fa-play"></i>
			    		</div>
			    		<div class="col-md-8">
			      			<div class="card-body">
			        			<p class="card-title mb-0">{!! $vid['title'] !!}</p>
			      			</div>
			    		</div>
			  		</div>
				</div>
			</a>

			@endif
		@endforeach
		</div>

	</div>	
</div>


@endsection


