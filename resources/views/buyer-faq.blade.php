@extends( ($agent->isMobile()) ? 'layouts.mobile-layout' : 'layouts.main-layout' )

@section('meta-title')
<meta name="title" content="BuyAnyLight | Buyer FAQs">
<meta property="og:title" content=" BuyAnyLight | Buyer FAQs">
@endsection

@section('meta-description')
<meta name="description" content="Here are the list of buyer's frequently Asked Questions to know more about us" />
<meta property="og:description" content="Here are the list of buyer's frequently Asked Questions to know more about us">
@endsection


@section('content')
<div class="buyer-faq pt-5 pb-3 bg-white all-contents">
    <div class="intro-faq d-flex align-items-center">
    	<div class="container">
    		<h3 class="text-white">
                <b>BUYER FAQ</b>
            </h3>
        </div>
    </div>
    <div class="container pt-3 border-0 bg-white">
		<div id="accordion">
  			<div class="card border-0 bg-white">
    			<div class="card-header border-0 bg-white" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
          				What is BAL?
        				</button>
      				</h5>
    			</div>
    			<div id="faq-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
       					 BAL (BuyAnyLight) is a pioneering online platform offering an innovative and value-packed procedure for resourcing LED lighting projects. BAL delivers unique advantages for both buyers and sellers and a win-win edge for them all.
      				</div>
    			</div>
  			</div>
            <hr>	
  			<div class="card border-0 bg-white">
    			<div class="card-header border-0 bg-white" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
          				Who can register with BAL?
        				</button>
      				</h5>
    			</div>

    			<div id="faq-2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
       					<p>Anyone looking for a quality LED lighting supplier can register. There are four main groups of people who can reap huge BAL benefits:</p>
                        <ul>
                            <li>
                              	Free Trial (any lighting user)
                            </li>
                            <li>
                               	My Home (private homeowners)
                            </li>
                            <li>
                                My Tower (contractors, consultants and project owners)
                            </li>
                            <li>
                                LightFinder (lighting companies)
                            </li>
                        </ul>
      				</div>
    			</div>
  			</div>
            <hr>     
  			<div class="card border-0 bg-white">
    			<div class="card-header border-0 bg-white" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-3" aria-expanded="true" aria-controls="faq-3">
          				How do I register with BAL as a buyer?
        				</button>
      				</h5>
    			</div>
    			<div id="faq-3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
       					Simply visit <a href="https://lightfinder.buyanylight.com/buyer/register">https:// lightfinder.buyanylight.com /buyer/register</a>, follow the steps to create an account and fill in the registration form. Once you’ve registered, you can start uploading your enquiry.
      				</div>
    			</div>
  			</div>
            <hr>    
  			<div class="card border-0 bg-white">
    			<div class="card-header border-0 bg-white" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-4" aria-expanded="true" aria-controls="faq-4">
          				What does it cost to register with BAL?
        				</button>
      				</h5>
    			</div>
    			<div id="faq-4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
       					{{-- BAL registration is completely <span style="font-weight: 600">FREE</span>! You only pay a subscription package when you’ve accepted a quotation and are ready to commit with BAL. --}}
       					<strong>For My Home and My Tower package:</strong> BAL registration is completely FREE! You only pay a subscription package when you’ve accepted a quotation and are ready to commit with BAL.
       					<br><br>
       					<strong>For LightFinder package:</strong> You can start with a free trial, but you are required to subscribe for a chosen package: Mini, Standard and Premium to start your project.
      				</div>
    			</div>
  			</div>
            <hr>    
  			<div class="card border-0 bg-white">
    			<div class="card-header border-0 bg-white" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-5" aria-expanded="true" aria-controls="faq-5">
          				Can I try before I buy?
        				</button>
      				</h5>
    			</div>
    			<div id="faq-5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
       					Yes, for a small fee you can order samples to help you make the perfect choices!
      				</div>
    			</div>
  			</div>
            <hr>    
  			<div class="card border-0 bg-white">
    			<div class="card-header border-0 bg-white" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-6" aria-expanded="true" aria-controls="faq-6">
          				Why should I use the BAL platform?
        				</button>
      				</h5>
    			</div>
    			<div id="faq-6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
       					 Here are some of great values the platform provides for sellers: 
                           <ul>
                              <li>
                                easy to set-up and use 
                              </li>
                              <li>
                                free registration 
                              </li>
                              <li>
                                saves you lots of money 
                              </li>
                              <li>
                                secure payment
                              </li>
                              <li>
                                samples available 
                              </li>
                              <li>
                                reliable 
                              </li>
                              <li>
                                trackable deliveries to your door
                              </li>
                           </ul>
      				</div>
    			</div>
                <hr>
    			<div class="card border-0 bg-white">
    				<div class="card-header border-0 bg-white" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-7" aria-expanded="true" aria-controls="faq-7">
          					How do I get a quotation? 
        					</button>
      					</h5>
    				</div>
    				<div id="faq-7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      					<div class="card-body">
       						Simply enter the details or upload an image showing your requirement. Our intelligent online systems and high-speed servers will match your enquiry with the most suitable suppliers and send out Requests for Quotes (RFQs) automatically in a matter of seconds.
      					</div>
    				</div>
  				</div>
                <hr>    
  				<div class="card border-0 bg-white">
    				<div class="card-header border-0 bg-white" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-8" aria-expanded="true" aria-controls="faq-8">
          					How do I confirm an order?
        					</button>
      					</h5>
    				</div>
    				<div id="faq-8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      					<div class="card-body">
       						Once you’ve selected and approved a seller’s quotation, you need to subscribe to your chosen package and arrange the payment.
      					</div>
    				</div>
  				</div>
                <hr>    
  				<div class="card border-0 bg-white">
    				<div class="card-header border-0 bg-white" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-9" aria-expanded="true" aria-controls="faq-9">
          					How do I pay?
        					</button>
      					</h5>
    				</div>
    				<div id="faq-9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      					<div class="card-body">
       						You need to make 100% payment when you confirm your order. BAL will hold your payment securely and will only transfer it to the supplier’s account when the goods have arrived safely on your doorstep. BAL acts as the trustee for every BuyAnyLight transaction and your funds are completely safe with us.
      					</div>
    				</div>
  				</div>
                <hr>    
  				<div class="card border-0 bg-white">
    				<div class="card-header border-0 bg-white" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-10" aria-expanded="true" aria-controls="faq-10">
          					How will my goods be shipped?
        					</button>
      					</h5>
    				</div>
    				<div id="faq-10" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      					<div class="card-body">
       						When you upload your enquiry, you have a choice of land, sea or air shipping. Every supplier quotation must include the shipping charges so you know exactly how much you’ll pay.
      					</div>
    				</div>
  				</div>
                <hr>    
  				<div class="card border-0 bg-white">
    				<div class="card-header border-0 bg-white" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link text-BAL" data-toggle="collapse" data-target="#faq-11" aria-expanded="true" aria-controls="faq-11">
          					What if I forget my BAL password?
        					</button>
      					</h5>
    				</div>
    				<div id="faq-11" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      					<div class="card-body">
       						Just click on “I’ve forgotten my password” on the sign-up page. You’ll shortly receive an email telling you how to reset your password.
      					</div>
    				</div>
  				</div>
                <hr>    
  				<div class="card border-0 bg-white">
    				<div class="card-header border-0 bg-white" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link text-BAL text-left" data-toggle="collapse" data-target="#faq-12" aria-expanded="true" aria-controls="faq-12">
          					If I have a question or concern, who do I contact?
        					</button>
      					</h5>
    				</div>
    				<div id="faq-12" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      					<div class="card-body">
       						Email us at info@buyanylight.com
      					</div>
    				</div>
  				</div>
  			</div>
		</div>
	</div>
</div>
@endsection




