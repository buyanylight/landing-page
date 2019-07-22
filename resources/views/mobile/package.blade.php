@extends('layouts.mobile-layout')
@section('content')

<div class="section7 pt-5 all-contents text-left">
		<div class="intro-package d-flex align-items-center text-white">
            <div class="container">
    			<h3>
                    <b>OUR PACKAGES</b>
                </h3>
            </div>
		</div>
		<div class="container">
			<div class="pt-3 pb-5 trial" id="trial">
				<p class="pt-3">
					We offer a range of buyer packages to suit the different needs of individuals and businesses. 
				</p>
				<h4>
                    <b>Free Trial</b>
                    <hr style="border: 1px solid black;">
                </h4>
				<p class="pt-2">
					To start finding out about all the benefits you can enjoy with us, simply register for the free trial.
				</p>
                <a href="" class="btn  btn-sm btn-dark">Register now</a>
                <button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#trial-card" aria-expanded="false" aria-controls="trial-card">
                    Check details
                </button>
                <div class="collapse pt-3" id="trial-card">
                    <div class="card card-trial">
                        <h5 class="card-header text-center bg-black text-white">
                            FREE TRIAL
                            <br>
                            <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                        </h5>
                        <div class="card-body pt-3 pb-3">
                            <p class="card-text text-center"> GET A FREE QUOTE AT UNBELIEVABLE PRICES. YOU'LL LOVE OUR AMAZING PRICES!</p>
                            <div class="pb-2 pt-2">
                                <ul class="trial-list">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Risk-free
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Explore BAL
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        Sample request
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        Multiple item request
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        Designated lighting designer
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
                                <b>Note </b> <br> A LightFinder package is required to <br> confirm the order.
                            </p>
                            <hr>
                            <div class="text-center pt-2">
                                <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-sm  btn-dark">Subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="finder pt-5 pb-5 bg-black text-white" id="finder">
			<div class="container">
				<h4>
                    <b> LightFinder </b>
                    <hr style="border: 1px solid white;">
                </h4>
				<p class="pt-2">
					Businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers love our sourcing solutions package. Access the innovative BAL platform and get the best quotes directly from BAL’s various world-class manufacturer partners. Just choose the LightFinder package that works for you!
				</p>
				<p class="text-left">
					BAL will transform your LED projects! Watch the video to find out how.
				</p>
				 <div class="embed-responsive embed-responsive-16by9 mb-3">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/OBm3CPqiXt8?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                </div> 
                <p>
                    With a choice of valuable subscription options, the LightFinder package saves time, effort and stress for consultants, homeowners or companies who want to buy quality LED direct from the manufacturer. Best of all, BAL cuts costs by up to 90%. 
                </p>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-sm btn-light">Register now</a>
                <a href="{{ asset('brochures/LightFinder_BAL.pdf') }}" class="btn btn-sm btn-secondary" target="_blank">Brochure</a>
                <button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#finder-card" aria-expanded="false" aria-controls="finder-card">
                    Check rate
                </button>
                <div class="collapse pt-3" id="finder-card">
                    <div class="card text-left">
                        <div class="card-header bg-black">
                            <ul class="nav nav-pills card-header-pills nav-justified">
                                <li class="nav-item  border border-white rounded-0">
                                    <a class="nav-link text-white active rounded-0" id="mini-tab" data-toggle="tab" href="#mini" role="tab" aria-controls="mini" aria-selected="true">Mini</a>
                                </li>
                                <li class="nav-item border border-white rounded-0">
                                    <a class="nav-link text-white rounded-0" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="true">Premium</a>
                                </li>
                                <li class="nav-item border border-white rounded-0">
                                    <a class="nav-link text-white rounded-0" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true">Standard</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="mini" role="tabpanel" aria-labelledby="mini-tab">     
                                <div class="card-body pt-5 pb-5 text-center text-dark">
                                <p class="card-text">MAKE A GREAT BAL START RIGHT HERE!</p>
                                <div class="pt-2 pb-2 text-left">
                                    <ul class="trial-list">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Inquire & source 3 items
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Minimum order quantity: 20
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            100% payment guarantee
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Best price guarantee
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Sample request
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Additional inquiry for $199
                                        </li>
                                        <li>
                                            <i class="fas fa-times"></i>
                                            Label & design support
                                            <span class="" data-toggle="tooltip" data-placement="bottom" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-times"></i>
                                                Designated lighting designer
                                            <span class="" data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-times"></i>
                                                Markup feature
                                            <span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                        </li>
                                    <!--     <li>
                                            <i class="fas fa-times"></i>
                                                Markup feature
                                            <span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
                                                 <i class="fas fa-info-circle"></i>
                                            </span>
                                        </li> -->
                                    </ul>
                                </div>
                                <p class="text-center">* 20% BAL fee on order confirmation</p>
                                <hr>
                                <div class="text-center pb-2">
                                    <h5>$499/Monthly</h5>
                                    <small>$5499/Yearly</small>   
                                </div>
                                <div>
                                    <a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-sm  btn-dark">Subscribe now</a>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                <div class="card-body pt-5 pb-5 text-center text-dark d-flex align-items-center">
                                    <div class="card-premium-contents">
                                        <p class="card-text">AN ABUNDANCE OF GREAT BAL BENEFITS - THE PERFECT PACKAGE FOR YOUR BUSINESS</p>
                                        <div class="pt-2 pb-2 text-left">
                                            <ul class="trial-list">
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Inquire & source 10 items
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Minimum order quantity: 10
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    100% payment guarantee
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Best price guarantee
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Sample request
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Additional inquiry for $99
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Label & design support
                                                    <span class="" data-toggle="tooltip" data-placement="bottom" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
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
                                        <p class="text-center">* 10% BAL fee on order confirmation</p>
                                        <hr>
                                        <div class="text-center pb-2">
                                            <h5>$899/Monthly</h5>
                                            <small>$9899/Yearly</small>   
                                        </div>
                                        <div>
                                            <a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-dark btn-sm ">Subscribe now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                 <div class="card-body pt-5 pb-5 text-center text-dark d-flex align-items-center">
                                    <div class="card-standard-contents">
                                        <p class="card-text">NEED MORE THAN JUST A FEW LIGHTS? THIS IS THE PACKAGE FOR YOU!</p>
                                        <div class="pt-2 pb-2 text-left">
                                            <ul class="trial-list">
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Inquire & source 6 items
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Minimum order quantity: 10
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    100% payment guarantee
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Best price guarantee
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Sample request
                                                </li>
                                                <li>
                                                    <i class="fas fa-check"></i>
                                                    Additional inquiry for $149
                                                </li>
                                                <li>
                                                    <i class="fas fa-times"></i>
                                                    Label & design support
                                                    <span class="" data-toggle="tooltip" data-placement="bottom" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-times"></i>
                                                    Designated lighting designer
                                                    <span class=" " data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-times"></i>
                                                    Markup feature
                                                    <span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="text-center">* 15% BAL fee on order confirmation</p>
                                        <hr>
                                        <div class="text-center pb-2">
                                            <h5>$699/Monthly</h5>
                                            <small>$7699/Yearly</small>   
                                        </div>
                                        <div>
                                            <a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-dark btn-sm ">Subscribe now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="home pt-5 pb-5 text-black bg-white" id="home">
			<div class="container">
				<h4>
                    <b>My Home</b>
                    <hr style="border: 1px solid black;">

                </h4>
				<p class="pt-2">
					Perfect for private homes, villas, and palaces where you want the best in design and aesthetics matched with cost-saving, eco-friendly LED from the world’s finest lighting manufacturers.
				</p>
				<div class="embed-responsive embed-responsive-16by9 mb-3">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                </div> 
                <p>
                    No more poor quality LED, high prices or confusing choices… For a one-time fee, BAL’s My Home package accesses help and advice, top quality LED, lowest prices and speedy delivery for owners of private homes, villas and palaces. 
                </p>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-sm btn-dark">Register now</a>
                <a href="{{ asset('brochures/MyHome_BAL.pdf') }}" class="btn btn-sm  btn-secondary" target="_blank">Brochure</a>
                <button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#home-card" aria-expanded="false" aria-controls="home-card">
                    Check rate
                </button>
                <div class="collapse pt-3" id="home-card">
                    <div class="card card-my-home">
                        <h5 class="card-header text-center bg-black text-white">
                            MY HOME
                            <br>
                            <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                        </h5>
                        <div class="card-body pt-3 pb-3">
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
                                        <span class="" data-toggle="tooltip" data-placement="bottom" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                            <i class="fas fa-info-circle"></i>
                                         </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        Markup feature
                                        <span class="" data-toggle="tooltip" data-placement="bottom" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <p class="text-center">
                                * 10% BAL fee on order confirmation <br>
                                ** $949 Project fee payable only on offer acceptance
                            </p>
                            <hr>
                            <div class="text-center pb-2">
                                <h5>FOR ALL THIS, YOU PAY <b>$0.00</b></h5> 
                            </div>
                            <div class="text-center">
                                <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-sm  btn-dark">Subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class=" bg-black  text-white tower pt-5 pb-5" id="tower">
			<div class="container">
				<h3>
                    <b>My Tower</b>
                    <hr style="border: 1px solid white;">

                </h3>
				<p class="pt-2">
					Ideal for consultants, contractors and landlords, this package leverages our expertise and buying power to save you a fortune and secure the finest LED products for your project. Plus - our expert help and advice is always on hand!
				</p>
				<p class="text-left">
					Watch the video to learn how BAL will transform your projects and profits.
				</p>
				<div class="embed-responsive embed-responsive-16by9 mb-3">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                </div>
                <p>
                     With no middlemen or upfront costs, My Tower offers a complete project solution. My Tower saves you time and effort and delivers world-class LED that costs up to 90% less. The result… Better projects and happier clients!
                </p>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-sm  btn-light">Register now</a>
                <a href="{{ asset('brochures/MyTower_BAL.pdf') }}" class="btn btn-sm  btn-secondary" target="_blank">Brochure</a>
                <button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#tower-card" aria-expanded="false" aria-controls="tower-card">
                    Check rate
                </button>
                <div class="collapse pt-3" id="tower-card">
                    <div class="card card-my-tower text-dark">
                        <h5 class="card-header text-center bg-black text-white">
                            MY TOWER
                            <br>
                            <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                        </h5>
                        <div class="card-body pt-5 pb-5">
                            <p class="card-text text-center">A COMPLETE PROJECT SOLUTION WITH LOWEST PRICES IN THE ENTIRE MARKET - GUARANTEED!</p>
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
                                * 10% BAL fee on order confirmation <br>
                                ** $1949 Project fee payable only on offer acceptance
                            </p>
                            <hr>
                            <div class="text-center pb-2">
                                <h5>FOR ALL THIS, YOU PAY <b>$0.00</b></h5> 
                            </div>
                            <div class="text-center">
                                <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-sm  btn-dark">Subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<div class="section9 pt-5 pb-5">
		<div class="container section9-container">
			<h3>
				<b>ALWAYS ADDING VALUE: optional extras</b>
			</h3>
			<p class="pt-3">
				We’ve designed packages to delight a variety of user categories. But every user is an individual, so we’ve also built in optional services to get additional tailored help if you need it. 
                <div class="text-left">
                    <a href="/m/add-ons" class="btn text-dark pl-0">
                        <div class="link-text">
                            <b>Explore packages</b>
                        </div>&nbsp;
                        <div class="link-icon">
                            <i class="fas fa-arrow-right"></i> 
                        </div>
                    </a>
                </div>
              <!--   Our superb team of highly experienced LED lighting design experts support every kind of LED project for private villas, industrial estates, hotels, public facilities and any other building or infrastructure.  --> 
		  </div>
	   </div>

@endsection