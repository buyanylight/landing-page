@extends('layouts.mobile-layout')
@section('content')

<div class="section6 pt-5 pb-5 all-contents" id="why-bal">
		<div class="intro-why d-flex align-items-center ">
            <div class="container">
                <h3 class=" text-white">
                    <b>WHY CHOOSE BAL?</b>
                </h3>
            </div>
        </div>
		<div class="container pt-3">
			<p class="pt-3 text-left">
				BuyAnyLight (BAL) delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time! 
			</p>
			<p class="text-left">Take a look at just some of the big BAL benefits: </p>
            <div class="text-left">     
                <div class="col pl-0">
                    <div class="card text-left bg-dark">
                        <div class="card-header">
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
            <div class="pt-3">
                <a href="{{ route('m-more-reasons') }}" class="btn text-dark pl-0">
                    <div class="link-text">
                       <b> More reasons why </b>
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
		</div>
	</div>
@endsection