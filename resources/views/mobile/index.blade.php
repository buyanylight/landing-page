@extends('layouts.mobile-layout')

@section('content')
<div>
	<div class="section1">
		<div class="h-100 d-flex align-items-center justidy-content-center container text-white">
			<div>
				<h1>Sourcing<br>Reinvented</h1>
				<p>The global marketplace for LED Lighting</p>
			</div>
		</div>
	</div>
	<div class="section2 pt-5">
		<div class="container text-center">
			<a href="#trial" class="btn btn-dark">Start your free trial today</a>
		</div>
		<div class="container pt-5">
			<div class="row">
				<div class="col" >
					<div class=" text-center" style=" height: 100px;">
						<img src="{{ asset('images/world-icon.png') }}" width="50%">
						<h5 class="pt-3"><b>LightFinder</b></h5>
					</div>
					<div class="text-center">
						<a href="" class="btn btn-sm btn-outline-secondary">More</a>
					</div>
				</div>
				<div class="col">
					<div class=" text-center" style=" height: 100px;">
						<img src="{{ asset('images/home-icon.png') }}" width="50%">
						<h5 class="pt-3"><b>My Home</b></h5>
					</div>
					<div class="text-center">
						<a href="" class="btn btn-sm btn-outline-secondary">More</a>
					</div>
					
				</div>
				<div class="col">
					<div class=" text-center" style=" height: 100px;">
						<img src="{{ asset('images/tower-icon.png') }}" width="50%">
						<h5 class="pt-3"><b>My Tower</b></h5>
					</div>
					<div class="text-center">
						<a href="" class="btn btn-sm btn-outline-secondary">More</a>
					</div>
				</div>
			</div>
			<div class="pt-4">
				
			</div>
			<div class=" pt-4">
				
			</div>
		</div>
	</div>
	<div class="section3 pt-5" id="about">
		<!-- <img src="{{ asset('images/mobile_about.png')}}"> -->
		<div class="container section3-contents">
			<h3><b>ABOUT BUY ANY LIGHT</b></h3>
			<p class="pt-3">
				<b>Principled, honest and focused, BAL leverages the world’s best suppliers and deliver the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time. </b>
			</p>
			<p>Transforming the way we source LED lighting, the BAL platform gives you:</p>
			<ul>
				<li>higher profit margins</li>
				<li>the world’s lowest prices for any light unit</li>
				<li>greater efficiency of lighting procurement</li>
				<li>superb online automation and functionality.</li>
				<li>access to the actual manufacturers of top global brands </li>
			</ul>
			<p>Whether you’re new to LED or a professional expert, we have a package to achieve all your objectives. </p>
		</div>
		<p class="pt-3 text-center">
			Private homeowner?<br> Consultant?<br> Contractor?<br> Project owner?
		</p>
		<p class="text-center"><b>WE'VE GOT YOU COVERED!</b></p>
	</div>
	<div class="section4 pt-5 pb-5">
		<div class="container pt-5 pb-5 section4-container">
		
			<p class="pt-3">
				We save you time, money and add greater value. Your dedicated BAL expert will help you through your project every step of the way, ensuring that you get the best prices, designs and products anywhere in the world. BAL helps contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win!
			</p>
			<div class="embed-responsive embed-responsive-16by9 pt-3">
             	<iframe width="640" height="360" src="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
            </div>  
		</div>
		<div class="text-white text-center">
				<a href="">Find out lots more NOW on our desktop website</a>
		</div>
	</div>
	<div class="section5 pt-5 pb-5 bg-black">
		<div class="container">
			<h3 class="text-white">
				HOW BAL WORKS
			</h3>
			<div class="text-center pt-3 pb-3">
  				<img src="{{ asset('images/bal_works.png') }}" width="225">
			</div>
		</div>
	</div>
	<div class="section13 pt-5 pb-5">
		<div class="container">
			<h3><b>WHY CHOOSE US?</b></h3>
			<p class="pt-3">
				BUY ANY LIGHT (BAL) delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time! 
			</p>
			<p>Take a look at just some of the big BAL benefits: </p>
			<div class="text-center">
				<img src="{{ asset('images/why_bal.png') }}" width="85%">
				
			</div>
		</div>
	</div>
	<div class="section6 pt-5 ">
		<div class="container section6-container">
			<div class="intro">
				<h3><b>OUR PACKAGES</b></h3>
				<p class="pt-3">
					We offer a range of buyer packages to suit the different needs of individuals and businesses. 
				</p>
				<p>Take a look at our desktop website to find out more.</p>
			</div>
			<div class="pt-3 pb-5 trial" id="trial">
				<h4><b>Free Trial</b></h4>
				<p class="pt-3">
					To start finding out about all the benefits you can enjoy with us, simply register for the free trial.
				</p>
			</div>
		</div>
		<div class="bg-black home pt-5 pb-5 text-white section6-container">
			<div class="container">
				<h4><b>My Home</b></h4>
				<p class="pt-3">
					Perfect for private homes, villas, and palaces where you want the best in design and aesthetics matched with cost-saving, eco-friendly LED from the world’s finest lighting manufacturers.
				</p>
				<div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/OBm3CPqiXt8?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
            	<div class="card pt-height w-65">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        My Home
                                        <div class="text-muted">
                                            <small>
                                                NO UPFRONT COSTS & FREE QUOTATION
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text" style="color:black; ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="trial-list" style="list-style: none;">
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
                                                            100% Payment Protection
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check"></i>
                                                            Home lighting consultation
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check"></i>
                                                            Designated lighting designer
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-times"></i>
                                                            Markup feature
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 pt-2">
                                                    <p class="text-center">
                                                        <span>FOR ALL THIS, YOU PAY <strong>$0.00</strong></span><br><br>
                                                        <strong>*</strong>10% BAL fee on order confirmation <br>
                                                        <strong>**</strong>$949 Project fee payable only on offer acceptance
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        	<a  class="btn btn-dark" href="https://lightfinder.buyanylight.com/buyer/register">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
			</div>
		</div>
		<div class="tower pt-5 pb-5 section6-container">
			<div class="container">
				<h3><b>My Tower</b></h3>
				<p class="pt-3">
					Ideal for consultants, contractors and landlords, this package leverages our expertise and buying power to save you a fortune and secure the finest LED products for your project. Plus - our expert help and advice is always on hand!
				</p>
				<p class="text-center">
					Watch the video to learn how BAL will transform your projects and profits.
				</p>
				<div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div>
	            <div class="card pt-height w-65">
                		<h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        My Tower
                                        <div class="text-muted">
                                            <small>
                                                NO UPFRONT COSTS & FREE QUOTATION
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-md-6">
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
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check"></i>
                                                            Markup feature
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 pt-2">
                                                    <p class="text-center">
                                                        <span>FOR ALL THIS, YOU PAY <strong>$0.00</strong></span><br><br>
                                                        <strong>*</strong> 10% BAL fee on order confirmation <br>
                                                        <strong>**</strong> $1949 Project fee payable only on offer acceptance
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        	<a  class="btn btn-dark" href="https://lightfinder.buyanylight.com/buyer/register">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
			</div>
		</div>
		<div class="finder pt-5 pb-5 section6-container bg-black text-white">
			<div class="container">
				<h4>LightFinder - B2B & B2C</h4>
				<p class="pt-3">
					Businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers love our sourcing solutions package. Access the innovative BAL platform and get the best quotes directly from BAL’s various world-class manufacturer partners. Just choose the LightFinder package that works for you!
				</p>
				<p class="text-center">
					BAL will transform your LED projects! <br>Watch the video to find out how.
				</p>
				 <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/OBm3CPqiXt8?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
	            <div class="card" style="">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        MINI
                                        <div class="text-muted">
                                            <small>
                                                SOURCING REINVENTED
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text" style="color: black">
                                            <ul class="trial-list" >
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
                                                </li>
                                                <li>
                                                        <i class="fas fa-times"></i>
                                                        Designated lighting designer
                                                </li>
                                                <li>
                                                        <i class="fas fa-times"></i>
                                                        Markup Feature
                                                </li>
                                            </ul>
                                           <div class= "pt-2">
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>$5499/Yearly</strong>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>$499/Monthly</strong>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <p class="text-center">
                                                        <strong>*</strong> 20% BAL fee on order confirmation <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        	<a  class="btn btn-dark" href="https://lightfinder.buyanylight.com/buyer/register">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style=" border: black;">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white; ">
                                        STANDARD
                                        <div class="text-muted">
                                            <small>
                                                SOURCING REINVENTED
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text" style="color: black">
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
                                                </li>
                                                <li>
                                                        <i class="fas fa-times"></i>
                                                        Designated lighting designer
                                                </li>
                                                <li>
                                                        <i class="fas fa-times"></i>
                                                        Markup Feature
                                                </li>
                                            </ul>
                                           <div class= "pt-2">
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>$7699/Yearly</strong>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>$699/Monthly</strong>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <p class="text-center">
                                                        <strong>*</strong> 15% BAL fee on order confirmation <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        	<a  class="btn btn-dark" href="https://lightfinder.buyanylight.com/buyer/register">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        PREMIUM
                                        <div class="text-muted">
                                            <small>
                                                SOURCING REINVENTED
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text" style="color: black">
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
                                                </li>
                                                <li>
                                                        <i class="fas fa-check"></i>
                                                        Designated lighting designer
                                                </li>
                                                <li>
                                                        <i class="fas fa-check"></i>
                                                        Markup Feature
                                                </li>
                                            </ul>
                                           <div class= "pt-2">
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>$9899/Yearly</strong>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>$899/Monthly</strong>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <p class="text-center">
                                                        <strong>*</strong> 10% BAL fee on order confirmation <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        	<a  class="btn btn-dark" href="https://lightfinder.buyanylight.com/buyer/register">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
			</div>
		</div>
	</div>
	<div class="section7 pt-5 pb-5">
		<div class="container section7-container">
			<h3>
				<b>ALWAYS ADDING VALUE: optional extras</b>
			</h3>
			<p class="pt-3">
				We’ve designed packages to delight a variety of user categories. But every user is an individual, so we’ve also built in optional services to get additional tailored help if you need it. Our superb team of highly experienced LED lighting design experts support every kind of LED project for private villas, industrial estates, hotels, public facilities and any other building or infrastructure.  
			</p>
			<p>Our optional add-on services currently include:</p>
		</div>
		<div class="container pt-3">
			<div class="">
				<div class="card lighting-consultation">
					<div class="card-body d-flex align-items-end">
						<div>
							<h5><b>General lighting consultation (199$)</b></h5>
							<p>Enjoy one-to-one access to our world-class consultants who will give expert advice and support from project start-up to the final glorious switch-on!</p>
							<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-outline-light">Book now</a>
						</div>
					</div>
				</div>
			</div>
			<div class=" pt-3">
				<div class="card lux-calculation">
					<div class="card-body d-flex align-items-end">
						<div>
							<h5><b>Lux calculation (299$)</b></h5>
							<p>This valuable add-on determines the exact brightness requirements (lumens) for a project area - data which is essential for selecting the right products and quantities to achieve the design objectives in any lighting project.</p>
							<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-outline-light">Book now</a>
						</div>
					</div>
				</div>
			</div>
			<div class=" pt-3">
				<div class="card threed-design">
					<div class="card-body d-flex align-items-end">
						<div>
							<h5><b>3D lighting design (399$) </b></h5>
							<p>Stunning, 3D lighting designs let you see how your finished project area will look and feel, gain an edge over competitors, and provide your project with an extra revenue stream.</p>
							<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-outline-light">Book now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center pt-5">
			<a href="" style="color: black;">Find out lots more NOW on our desktop website</a>
		</div>
	</div>
	<div class="section12 pt-5 pb-5" id="contact">
		<div class="container text-center">
			<h3><b>CONTACT US</b></h3>
			<p>Feel free to get in touch with us.</p>
			<div class="container "> 
           		<div>
					<form method="post" action="/contact-us">
	                	{{ csrf_field() }}
	                	<div class="row">
	                    	<div class="col-sm-6">
	                        	<div class="form-group">
	                        		<input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" required>
	                        	</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                        	<div class="form-group">
	                        		<input class="form-control" name="email" id="email" type="email" placeholder="Enter email address" required>
	                        	</div>
	                    	</div>
	                    	<div class="col-12">
	                        	<div class="form-group">
	                        		<input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject"required>
	                        	</div>
	                    	</div>
	                   		<div class="col-12">
	                        	<div class="form-group">
	                        		<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message" spellcheck="false"></textarea required>
	                        	</div>
	                    	</div>
	                	</div>
	                	<input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
	                	<div class="form-group mt-3">
	                		<button type="submit"  class="btn btn-dark w-100 send-message" disabled="disabled">Send Message</button>
	                 	</div>
	            	</form>
				</div>
            </div>
		</div>
	</div>
	<button id="topBtn" class="btn btn-dark btn-lg"><i class="fas fa-arrow-up"></i></button>
</div>
<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_KEY') }}"></script>
<script type="text/javascript">
    grecaptcha.ready(function() {
        grecaptcha.execute( '{{ env('CAPTCHA_KEY') }}' , { action: 'contact' } )
           .then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
                $('.send-message').removeAttr('disabled','disabled');
            });
     });

</script>
@endsection