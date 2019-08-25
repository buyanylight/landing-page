@extends('layouts.mobile-layout')

@section('content')
<div class="section3 pt-5 pb-3 all-contents" id="about">
	<div class="container about-header text-left text-white d-flex align-items-center">
    	<h3 class="">
           	<b>
                ABOUT BAL
            </b>
       	</h3>
    </div>
    <div class="container about-contents pt-3">
        <p class="pt-3">
            Principled, honest and focused, BAL leverages the world’s best suppliers and deliver the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time.
        </p>
        <p>Transforming the way we source LED lighting, the BAL platform gives you:</p>
        <ul class="about-list text-dark rounded">
            <hr>
            <li class="mt-1">
                <span class="">
                    <b>
                        higher profit margins
                    </b>
                </span>
            </li>
            <hr>
            <li class="mt-1">
                <span class="w-100">
                    <b>
                        the world’s lowest prices for any light unit
                    </b>
                </span>
            </li>
            <hr>
            <li class="mt-1">
               	<span class="w-100 ">
                    <b>
                    	greater efficiency of lighting procurement
                    </b>
                </span>
            </li>
            <hr>
            <li class="mt-1">
            	<span class="w-100 ">
                    <b>
                    	superb online automation and functionality
                    </b>
            	</span>
            </li>
            <hr>
            <li class="mt-1">
            	<span class="w-100 ">
                	<b>
                    	access to top global brand manufacturers.
                    </b>
                </span>
            </li>
            <hr>
        </ul>
        <p>Whether you’re new to LED or a professional expert, we have a package to achieve all your objectives.</p>
    </div>
</div>
<div class="section4 pb-5">
    <div class="container">
    	<div class="about-text text-left">
        	<div class="row text-center">
                <div class="col-6">
                    <p class="border border-dark p-2">
                        Home owner? 
                    </p>
                </div>   
                <div class="col-6 ">
                    <p class="border border-dark p-2">
                        Project owner?  
                    </p>
                </div>   
                <div class="col-6 ">
                    <p class="border border-dark p-2">
                        Consultant? 
                    </p>
                </div>   
                <div class="col-6">
                    <p class="border border-dark p-2">
                        Contractor? 
                    </p>
                </div>   
            </div>

        </div>
        <h3 class="text-left pt-3">
       		WE'VE GOT YOU COVERED!
        </h3>
        <p class="pt-3 text-left">
      		We save you time, money and add greater value. Your dedicated BAL expert will help you through your project every step of the way, ensuring that you get the best prices, designs and products anywhere in the world. BAL helps contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win!
        </p>
        <div class="embed-responsive embed-responsive-16by9 video">
        	<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
        <p class="pt-3">
            Offering top quality LED from the world’s best manufacturers at the lowest prices, BAL also delivers the finest service and advice and first-rate customer satisfaction every time.
            <div class="text-left">
                    <a href="{{ route('m-add-ons') }}" class="btn text-dark pl-0">
                        <div class="link-text">
                            <b>Add extra value</b>
                        </div>&nbsp;
                        <div class="link-icon">
                            <i class="fas fa-arrow-right"></i> 
                        </div>
                    </a>
                </div>
        </p>
    </div>
</div>
@endsection