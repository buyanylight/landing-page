@extends('layouts.main-layout')


@section('content')
<section class="section-1 mt-5 pt-5">
    <div class="container h-100 d-flex align-items-center">
        <div class="text-white">
            <h1>
                <b>
                    Sourcing Reinvented
                </b>
            </h1>
            <p class="sub-title pb-1 mb-0">
                The global marketplace for LED lighting
            </p>
            <div>
                <a href="#about" class="btn btn-sm btn-outline-dark text-white">
                    <div class="link-text">
                        Discover BAL benefits 
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
                <a  data-fancybox href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="btn btn-sm btn-outline-dark text-white">
                    <div class="link-text">
                        Watch the video 
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
                 <a href="/coming-soon" class="btn btn-sm btn-outline-dark text-white">
                    <div class="link-text">
                        IEO
                    </div>&nbsp;
                    <div class="link-icon">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
            <div class="mt-1">
                 <a href="one-pagers/BUYANYLIGHT.pdf" target="_blank" 
                 class="btn btn-sm btn-outline-dark text-white">
                    <div class="link-icon">
	            		<i class="far fa-file-pdf"></i>
                    </div>
                    &nbsp;
                    <div class="link-text">
	            		Download BAL One Page PDF
                    </div>
                </a>	            
            </div>

        </div>
    </div>
</section>
<section class="section-2" style="height: auto;">  
    <div class="container h-100">
        <div class="w-100 card all-cards" >
            <div class="card-body d-flex justify-content-center"style=" {{ ($agent->is('IE')) ? 'display:block !important;' : '' }}">
                <div class="card-deck">
                    <div class="card border-0 lightfinder">
                        <img src="{{ asset('images/world-icon.png') }}" class="card-top ml-3" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-BAL">LightFinder</h4>
                            <div class="card-subtitle mt-2 text-muted">B2B & B2C</div>
                            <hr>
                            <p class="card-text">LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from <br> manufacturers...</p>
                            <a href="#all-packages" class="btn btn-sm pl-0 text-dark">
                                <div class="link-text" style="color: #5555A4">
                                    Cut LED cost, not quality 
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="h-100 border-right border-dark"></div>
                    <div class="card border-0" style=" {{ ($agent->is('IE')) ? 'display:block !important;' : '' }}">
                        <img src="{{ asset('images/home-icon.png') }}" class=" card-top ml-3" alt="..." width="9%">
                        <div class="card-body">
                            <h4 class="card-title text-BAL">My Home</h4>
                            <div class="card-subtitle mt-2 text-muted">Private homes, villas, and palaces</div>
                            <hr>
                            <p class="card-text">Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities...</p>
                            <a href="#all-packages" class="btn btn-sm pl-0 text-dark">
                                <div class="link-text" style="color: #5555A4">
                                    Find dream home LED at dreamy prices  
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="h-100 border-right border-dark"></div>
                    <div class="card border-0"style=" {{ ($agent->is('IE')) ? 'display:block !important;' : '' }}">
                        <img src="{{ asset('images/tower-icon.png') }}" class="card-top ml-3" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-BAL" >My Tower</h4>
                            <div class="card-subtitle mt-2 text-muted"> Consultants, contractors, clients</div>
                            <hr class="hr-card">
                            <p class="card-text"> My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package...</p>
                            <a href="#all-packages" class="btn btn-sm pl-0 text-dark">
                                <div class="link-text" style="color: #5555A4">
                                    Get the best quality and prices ever 
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-3 trial-btn-link">
            <a href="#all-packages" class="btn btn-BAL btn-lg">Start your free trial</a>
        </div>
        {{-- <div class="text-center mb-5 trial-btn-link">
            <a href="one-pagers/BUYANYLIGHT.pdf" 
            target="_blank" 
            style="background-color: green; color: white;" 
            class="btn btn-lg">
            	<i class="far fa-file-pdf mr-2"></i>
            	Download BAL One Page PDF
            </a>
        </div> --}}
    </div>
</section>
<!-- <section class="section-3 mt-4">
    <div class="container pt-5 pb-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 text-white video">
                <div class="embed-responsive embed-responsive-16by9 ">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>  
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 text-white">
                <div>
                    <h3>
                        <b>Mission</b> 
                        <hr style="margin-right: 352px; background-color: white; margin-top: 8px;">
                    </h3>
                    <p>                        
                        Principled, honest and focused, we leverage the world’s best suppliers and deliver the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time.    
                    </p>
                </div>
                <div class="pt-3">
                    <h3>
                        <b>Vision</b>
                        <hr style="margin-right: 372px; background-color: white; margin-top: 8px;">
                    </h3>
                    <p>
                        We will be the global platform of choice for buyers and sellers of quality LED lighting.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="section-4" id="about">
    <div class="container pt-5 pb-5">
        <div class="row d-flex align-items-center">
            <img src="{{asset('images/about.png')}}" width="100%" class="about-img">
            <div class="col-md-5 ">
                <h3>
                    <b><span class="text-BAL">About</span> BuyAnyLight</b>
                </h3>
                <p>
                    BuyAnyLight (BAL) has transformed the way we source LED lighting. The BAL platform gives users:
                </p>
                <ul>
                    <li>higher profit margins</li>
                    <li>the best possible prices for any light unit</li>
                    <li>greater efficiency of lighting procurement</li>
                    <li>superb online automation and functionality</li>
                    <li>access to top global brand manufacturers.</li>
                </ul>
                <p>
                    Whether you have lots of experience with LED lights or none at all, we have a package to help you achieve all your objectives.
                </p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 text-center">
                <!-- <img src="{{asset('images/about-bg.png')}}" width="100%"> -->
            </div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-5 text-center">
                <!-- <img src="{{asset('images/about-bg2.png')}}" width="100%"> -->
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 ">
                <p>
                    <b class="text-BAL"> A private homeowner? </b> Use BAL to make your home a greener, more stylish and cost-efficient zone by switching to LED lights. The energy bill savings are huge!
                </p>
                <p>
                    <b class="text-BAL"> A consultant, contractor or project owner? </b> We've got you covered! We save you time, money and add even more value with the finest technical expertise to specify the ideal LED lights for your project. Your own BAL expert will help you through your project, every step of the way ensuring that you get the best prices, designs and products anywhere in the world. BAL allows contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win situation!
                </p>
                <p>
                    <b class="text-BAL"> Researching LED prices and products? </b> Because it’s focused purely on LED lights, BuyAnyLight allows you to do this in record time. BAL provides the best value in product quality, costs, and service.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-5" id="balvsretail">
    <div class="section-5-container bg-black h-100">
        <div class="container pt-5">
            <h3 class="text-white">
                <b><span class="text-BAL">BUYANYLIGHT</span> PRICE COMPARISON</b>
            </h3>
        </div>
        <div class="container p-5 pl-0">
            <div class="center">
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light2.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="" width="100%">
                                    <p class="font-weight-bold text-center pt-4">
                                        $102
                                    </p>        
                                </div>
                                <div class="col-md-2">
                                    
                                </div>
                                <div class="col-md-5">
                                     <img class="card-img" src="{{ asset('images/retails/flos.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $3501
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light1.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $6
                                    </p>        
                                </div>
                                <div class="col-md-2">
                                    |
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/ledvance.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $28
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light3.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">           
                                    <p class="font-weight-bold text-center pt-4">
                                        $25
                                    </p> 
                                </div>
                                <div class="col-md-2">
                                    |
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/bega.jpg') }}" alt=""> 
                                    <p class="font-weight-bold text-center pt-4">
                                        $444
                                    </p>   
                                </div> 
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light4.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $3
                                    </p>        
                                </div>
                                <div class="col-md-2">
                                    |
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/slv_logo.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $25
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light5.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">           
                                    <p class="font-weight-bold text-center pt-4">
                                        $8
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    |
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/philips.png') }}" alt=""> 
                                    <p class="font-weight-bold text-center pt-4">
                                        $40
                                    </p>    
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light6.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $67
                                    </p>           
                                </div>
                                <div class="col-md-2">
                                |
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/et2.png') }}" alt=""> 
                                    <p class="font-weight-bold text-center pt-4">
                                        $446
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card bg-dark mr-2">
                    <div class="card-body p-0">
                        <img class="" src="{{ asset('images/products/light7.jpg') }}" alt="" width="100%">
                        <div class="card-text text-white p-2 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $12
                                    </p>           
                                </div>
                                <div class="col-md-2">
                                    |
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img" src="{{ asset('images/retails/marset_logo.png') }}" alt="">
                                    <p class="font-weight-bold text-center pt-4">
                                        $529
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
              </div>
            <div class="pt-5 text-white text-center font-15">
                <p>
                    Get your Free Quote        
                </p> 
                <a href="#all-packages" class="text-white btn btn-BAL" >

                    Click Here <br>
                    <i class="fas fa-chevron-down"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section-6" id="ninety">
    <div class="container pt-5 pb-5">
        <div class="row align-items-center">
            <div class="col-md-5">
                <h4>
                    <b><span class="text-BAL">WE ALWAYS FIND THE BEST LIGHT AT THE</span> BEST PRICE</b>
                </h4>
                <p>
                    BuyAnyLight (BAL) has the world’s largest network of lighting manufacturers, and we are continually adding more, allowing BAL to provide the best platform for finding any type of LED light. Our AI powered systems and high speed servers match buyer enquiries with the most suitable suppliers within seconds and send out Requests For Quotes (RFQs) instantly. Simply use the powerful BAL tools to select the most competitive: it’s fast – and beautifully simple!
                </p>
                <p>
                    BAL secures 100% of your funds until you receive your goods. The system also manages the logistics, so you receive your order on time, safely and securely.
                </p>
                
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 text-center">
                <img src="{{ asset('images/find.png')}}" width="50%">
            </div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="{{ asset('images/save.png')}}" width="100%">
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <h4>
                    <b><span class="text-BAL">SAVE UP TO 90%...</span> HOW DOES THAT WORK?</b>
                </h4>
                <p>
                    Outsourcing of LED lights has increased hugely in recent years. The digital age, globalisation, increased transparency and continued cost pressures all make outsourcing a viable and attractive option for major brands worldwide.
                </p>
                <p>
                    The best outsourcing manufacturers adhere strictly to the brand specifications while also leveraging the low production costs. We are contracted to these factories which supply us with products similar to global brands such as Phillips, Osram etc. at unbelievable prices and of course, fully within the law.
                </p>
                <p>
                    Due to the massive overheads such as staff, warehouse, multi-level supply chain these global brands prices are far higher. BAL creates powerful applications that process large amounts of data and build relationships with manufacturers to provide the finest products, the best prices, and top-notch services anywhere in the world. Combining our low fees and super-low product prices means that every BAL user makes massive savings compared with any other supplier in the market.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-7" id="why-bal">
    <div class="container pt-5 pb-5">
        <h3>
            <b><span class="text-BAL">WHY</span> CHOOSE US?</b>
        </h3>
        <br>
        <p>
            BuyAnyLight (BAL) delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time!
            <br>
            <br>
            Take a look at just some of the big BAL benefits:
        </p>
        <div class="row">
            <div>
                
            </div>
        </div>
        <div class="pt-3">
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item bg-white" style="border: 1px solid #5555A4; border-radius: 0.24rem;">
                    <a class="nav-link active text-BAL" id="pills-buyer-tab" data-toggle="pill" href="#pills-buyer" role="tab" aria-controls="pills-buyer" aria-selected="true">Buyers</a>
                </li>
                <li class="nav-item bg-white" style="border: 1px solid #5555A4; border-radius: 0.24rem;">
                    <a class="nav-link text-BAL" id="pills-seller-tab" data-toggle="pill" href="#pills-seller" role="tab" aria-controls="pills-seller" aria-selected="false">Sellers</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-buyer" role="tabpanel" aria-labelledby="pills-buyer-tab">
                    <div class="pt-5 pb-5">
                        <div class="card-deck">
                            <div class="card buyer-card">
                                <div class="card-body ">
                                   <div class="card-title">
                                        <i class="fas fa-stopwatch"></i>&nbsp;
                                        <b class="text-BAL">Convenient</b>
                                    </div> 
                                    <hr>
                                    BAL is a one-stop shop that reduces the time spent on sourcing LED lights by over 90%.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-dollar-sign"></i>&nbsp;
                                        <b class="text-BAL">Lowest Prices</b>
                                    </div>
                                    <hr>
                                    Get the best quotes directly from BAL and manufacturers, without involving any costly middle-men.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-boxes"></i>&nbsp;
                                        <b class="text-BAL">Greater variety</b>
                                    </div>
                                    <hr>
                                    Find any type of LED light you need on BAL. Review different designs and technical specifications from world-class manufacturers.
                                </div>
                            </div>
                        </div>
                        <div class="card-deck mt-4">
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-equals"></i>&nbsp;
                                        <b class="text-BAL">Easy price comparison</b>
                                    </div>
                                    <hr>
                                    Use the advanced filter feature to select quotes and pick the best ones to review and compare.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-key"></i>&nbsp;
                                        <b class="text-BAL">Secure</b>
                                    </div>
                                    <hr>
                                    Enjoy 100% payment protection guarantee. Your payment is secured with BAL until the goods reach their destination.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-filter"></i>&nbsp;
                                        <b class="text-BAL">Risk-free</b>
                                    </div>
                                    <hr>
                                    No long-term financial commitment - and no upfront payment when using My Home and My Tower packages.
                                </div>
                            </div>
                        </div>
                        <div class="card-deck mt-4">
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-lightbulb"></i>&nbsp;
                                        <b class="text-BAL">Request samples</b>
                                    </div>
                                    <hr>
                                    Want to try before you buy? You can order a few samples first before buying in bulk.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-globe-asia"></i>&nbsp;
                                        <b class="text-BAL">World-class logistics</b> 
                                    </div>
                                    <hr>
                                    BAL takes responsibility for ensuring that all your orders are securely handled with the greatest care. We promise on-time delivery and a live shipment tracker.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-thumbs-up"></i>&nbsp;
                                        <b class="text-BAL">First-class consultancy</b>
                                    </div>
                                    
                                    <hr>
                                    Private homeowners, consultants and contractors can take advantage of our consultancy services. Our LED lighting experts are here to ensure the success of every project, whatever its size.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-seller" role="tabpanel" aria-labelledby="pills-seller-tab">
                    <div class="pt-5 pb-5">
                        <div class="card-deck">
                            <div class="card buyer-card">
                                <div class="card-body ">
                                   <div class="card-title">
                                        <i class="fas fa-business-time"></i>&nbsp;
                                        <b class="text-BAL">Easy set-up</b>
                                    </div> 
                                    <hr>
                                    No need for tedious product listing processes: just complete your seller profile and verification.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-laptop"></i>&nbsp;
                                        <b class="text-BAL">Free registration</b>
                                    </div>
                                    <hr>
                                    BAL is completely free for sellers. Simply register and start receiving Requests For Quotes (RFQs) from buyers worldwide!
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-hand-holding-usd"></i>&nbsp;
                                        <b class="text-BAL">Cost-saving</b>
                                    </div>
                                    <hr>
                                    Find any type of LED light you need on BAL. Review different designs and technical specifications from world-class brands.
                                </div>
                            </div>
                        </div>
                        <div class="card-deck mt-4">
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-wallet"></i>&nbsp;
                                        <b class="text-BAL">Flexible pricing</b>
                                    </div>
                                    <hr>
                                    Use the advanced filter feature to select quotes and pick the best ones to review and compare.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-shield-alt"></i>&nbsp;
                                        <b class="text-BAL">Secure platform</b>
                                    </div>
                                    <hr>
                                    BAL guarantees the payments for every supply project and acts as trustee. Fulfil all your orders with absolute confidence!
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-smile"></i>&nbsp;
                                        <b class="text-BAL">Completely free</b>
                                    </div>
                                    <hr>
                                    Suppliers can use the service of BAL to provide quotes at no cost at all. However, every supplier must pass our screening process to use the BAL platform and start selling.
                                </div>
                            </div>
                        </div>
                        <div class="card-deck mt-4">
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-lightbulb"></i>&nbsp;
                                        <b class="text-BAL">Provide samples</b>
                                    </div>
                                    <hr>
                                    Buyers can order samples before a bulk order. This feature prevents disputes as the buyer knows what to expect.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-boxes"></i>&nbsp;
                                        <b class="text-BAL">Hassle-free supply</b> 
                                    </div>
                                    <hr>
                                    We save you all the hassle and headaches of managing logistics: we fulfil the order and make sure it’s sent to the buyer promptly and safely.
                                </div>
                            </div>
                            <div class="card buyer-card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <i class="fas fa-pen-square"></i>&nbsp;
                                        <b class="text-BAL">Easy to use</b>
                                    </div>
                                    
                                    <hr>
                                    Forget about tiring learning curves! The BAL platform is intuitive and easy to use.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-8 bg-black" id="all-packages">
    <div class="container pt-5">
        <h3 class="text-white"><span class="text-BAL">OUR</span> PACKAGES</h3>
        <p class="text-white pt-3">We welcome everyone to use our platform. Take a look at the groups below and see which one is right for you. <br> If you have any queries, don’t hesitate to <a href="/contact" class="text-white">get in touch.</a></p>
    </div>
    <div class="container pt-3 pb-5">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><b><span class="text-BAL">Free</span> Trial</b></h4>
                <p>
                    To start finding out about all the benefits you can enjoy with us, simply register for the free trial. This enables you to explore many of BAL’s tools and functions before choosing the right subscription package for you or your organisation. It’s also useful if you want to make an enquiry and receive quotes quickly and simply. You may subscribe to one of the LightFinder packages to request for samples or confirm an order.
                </p>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                    <div class="link-text">
                        Register Now
                    </div>&nbsp;
                    <div class="link-icon text-dark">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
        </div>
        <hr class="border-white">
        <div class=" card-deck pt-0 pb-0">
            <div class="card mr-2">
                <div class="card-body">
                    <h4 class="card-title pt-1 pb-3">
                        <b><span class="text-BAL">Light</span>Finder</b>
                    </h4>
                    <a data-fancybox href="https://www.youtube.com/embed/OBm3CPqiXt8?rel=0&enablejsapi=1" class=" text-white package-link">
                    <div class="package-one">
                        <div class="d-flex align-items-end pb-2 pl-2 h-100">
                            <div>
                                <i class="fab fa-youtube"></i> 
                                <span>
                                    Play video
                                </span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <!-- <hr class="border-black"> -->
                            <button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
                                <b>Introduction</b>
                                <div class="introduction-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="introduction-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="introduction">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers. As a LightFinder user you can access the innovative BAL platform, upload your requirements and get the best quotes direct from BAL’s various world-class manufacturer partners. All suppliers on the BAL platform are first-class manufacturers, vetted directly by our team of experts.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 finder2" type="button" data-toggle="collapse" data-target="#finder2" aria-expanded="false" aria-controls="finder2">
                                <b>Finest quality, lowest prices, no stress!</b>
                                <div class="finder2-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="finder2-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="finder2">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    When you upload your requirements as a LightFinder user, BAL’s intelligent systems match you with manufacturers whose products match your request. BAL then sends out an instant Request for Quotation (RFQ). All you need to do is sit back and wait for your quotations to arrive. 
                                    BAL saves you all the time and stress of manually sifting through lots of supplier quotes. Use the intelligent filter on BAL to sort the quotes automatically until you arrive at a handful you’d like to vet manually. After selecting your preferred supplier, you can confirm the order immediately or request a sample.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 finder3" type="button" data-toggle="collapse" data-target="#finder3" aria-expanded="false" aria-controls="finder3">
                                <b>LightFinder level that works for you!</b>
                                <div class="finder3-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="finder3-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="finder3">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    As a LightFinder user you have the choice of Mini, Standard, and Premium subscriptions, depending on the volumes you need. Like all BAL users, you can leverage the platform’s power to find the finest global suppliers and the best value for a fraction of the usual cost - all from the comfort of your own home or office.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
                                <b>Pricing</b>
                                <div class="pricing-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="pricing-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="pricing">
                                <div class="ml-0 pl-0 border-0">
                                    <div class="card m-0 text-left" style="padding-bottom: 15px;">
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
                                                <div class="card-body pt-5 pb-3 text-center text-dark">
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
                                                        </ul>
                                                    </div>
                                                    <p class="text-center">* 20% BAL fee on order confirmation</p>
                                                    <hr>
                                                    <div class="text-center pt-2">
                                                        <h5>$499/Monthly</h5>
                                                        <small>$5499/Yearly</small>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                                <div class="card-body pt-5 pb-3 text-center text-dark d-flex align-items-center">
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                                <div class="card-body pt-5 pb-3 text-center text-dark d-flex align-items-center">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-1">
                                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                                    <div class="link-text">
                                        Register Now
                                    </div>&nbsp;
                                    <div class="link-icon text-dark">
                                        <i class="fas fa-arrow-right"></i> 
                                    </div>
                                </a>
                                <a href="{{ asset('brochures/LightFinder_BAL.pdf') }}" class="pl-0 btn" target="_blank">
                                    <div class="link-text">
                                        Brochure
                                    </div>&nbsp;
                                    <div class="link-icon text-dark">
                                        <i class="fas fa-arrow-right"></i> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mr-2 ml-2">
                <div class="card-body">
                    <h4 class="card-title pt-1 pb-3">
                        <b><span class="text-BAL">My</span> Home</b>
                    </h4>
                    <a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="text-white package-link">
                    <div class="package-two">
                        <div class="d-flex align-items-end pb-2 pl-2 h-100">
                            <div>
                                <i class="fab fa-youtube"></i> 
                                <span>
                                    Play video
                                </span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="row">
                        <div class="col-md-12 pt-3">
                            <!-- <hr class="border-black"> -->
                            <button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
                                <b>Introduction</b>
                                <div class="introduction-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="introduction-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="introduction">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities. However, choosing and buying LED locally is often complex, stressful and disappointing. BAL is here to help you source LED lights with professional precision and world-class products and service. Very few private property owners are experts in LED, lumens, CCT or CRI, so we provide all the help you want and need.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 home2" type="button" data-toggle="collapse" data-target="#home2" aria-expanded="false" aria-controls="home2">
                                <b>Perfect for homeowners</b>
                                <div class="home2-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="home2-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="home2">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    To start your project on the right track, choose the My Home package, upload your lighting requirements or share with us pictures of the lighting that’s currently in your home. Our team of experts will explore the ideal technology and design options for you and present you with a quote for your LED light project, quickly and efficiently. BAL offers you the lowest prices for excellent quality LED lights - plus you’ll also make huge savings on electricity bills. No more messing with local stores that exploit your inexperience and sell you their old stock at high prices! BAL raises the quality, lowers the costs and gives you a far more pleasing outcome all round.
                                    <br>
                                    <br>
                                    Don’t forget, with LED lights you’ll be playing a role in reducing the carbon footprint, saving energy and making the world a better place.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 home3" type="button" data-toggle="collapse" data-target="#home3" aria-expanded="false" aria-controls="home3">
                                <b>The next step</b>
                                <div class="home3-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="home3-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="home3">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    We go above and beyond just designing your lights and quoting for projects. We offer you the best possible prices for every product we quote, saving you up to 90% on your LED project. BAL buying power attracts significant discounts from manufacturers and we’re proud to pass on these great savings to you.
                                    <br>
                                    <br>
                                    To take advantage of these huge savings and benefits, we charge only a one-time project subscription fee and 10% commission on the total product cost. That’s quite simply how we earn our revenue. Plus, you don’t pay anything until you’ve decided to commit to our quote, so there is ZERO RISK to you when trying us out!
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
                                <b>Pricing</b>
                                <div class="pricing-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="pricing-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="pricing">
                                <div class="ml-0 pl-0 border-0">
                                   <div class="card m-0 card-my-home">
                                        <h5 class="card-header text-center bg-black text-white">
                                            MY HOME
                                            <br>
                                            <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                                        </h5>
                                        <div class="card-body pt-5 pb-3">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-1">
                                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                                    <div class="link-text">
                                        Register Now
                                    </div>&nbsp;
                                    <div class="link-icon text-dark">
                                        <i class="fas fa-arrow-right"></i> 
                                    </div>
                                </a>
                                <a href="{{ asset('brochures/MyHome_BAL.pdf') }}" class="pl-0 btn" target="_blank">
                                    <div class="link-text">
                                    Brochure
                                    </div>&nbsp;
                                    <div class="link-icon text-dark">
                                        <i class="fas fa-arrow-right"></i> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card ml-2">
                <div class="card-body">
                    <h4 class="card-title pt-1 pb-3">
                        <b><span class="text-BAL">My</span> Tower</b>
                    </h4>
                    <a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="text-white package-link">
                    <div class="package-three">
                        <div class="d-flex align-items-end pb-2 pl-2 h-100">
                            <div>
                                <i class="fab fa-youtube"></i> 
                                <span>
                                    Play video
                                </span>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <!-- <hr class="border-black"> -->
                            <button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
                                <b>Introduction</b>
                                <div class="introduction-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="introduction-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="introduction">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package and either upload your requirements or drag and drop your Bill of Quantities (BOQ). With NO UPFRONT PAYMENT, you can receive a solution and quote from BAL, confident in the knowledge that our expertise, products, prices, and service are unrivalled in the LED marketplace.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 tower2" type="button" data-toggle="collapse" data-target="#tower2" aria-expanded="false" aria-controls="tower2">
                                <b>How does BAL save you money?</b>
                                <div class="tower2-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="tower2-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="tower2">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    Corporate customers enjoy prices up to 90% lower than those of local suppliers. Our massive orders attract exclusive discounts from manufacturers, so we can offer you the best prices on the market. Besides, we have no large sales force, no executive car fleet or costly showrooms to run, so our low business overheads also help us to give our customers the best products at unbelievable prices.
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 tower3" type="button" data-toggle="collapse" data-target="#tower3" aria-expanded="false" aria-controls="tower3">
                                <b>The next step</b>
                                <div class="tower3-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="tower3-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="tower3">
                                <div class="card card-body ml-0 pl-0 border-0">
                                    When (and only when) you decide to commit to a BAL quote, you’ll be asked to make a one-time project subscription fee to confirm your order or request samples. We charge a 10% commission on the total cost of the products: this is how BAL earns its revenue and maintains its service.
                                    <br>
                                    <br>
                                    DID YOU KNOW? Our Markup Feature (exclusive to BAL corporate users) - is a fantastic BAL feature, allowing you to add markups to the quotes, quickly and easily. It means you can offer your customers lower prices than local suppliers while also boosting your profits - a win-win for everyone!
                                </div>
                            </div>
                            <button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
                                <b>Pricing</b>
                                <div class="pricing-down float-right">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="pricing-up float-right" style="display: none;">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </button>
                            <div class="collapse" id="pricing">
                                <div class="ml-0 pl-0 border-0">
                                   <div class="card m-0 card-my-tower text-dark">
                                        <h5 class="card-header text-center bg-black text-white">
                                            MY TOWER
                                            <br>
                                            <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                                        </h5>
                                        <div class="card-body pt-5 pb-3">
                                            <p class="card-text text-center">A COMPLETE PROJECT SOLUTION WITH LOWEST PRICES IN THE ENTIRE MARKET</p>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-1">
                                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                                    <div class="link-text">
                                        Register Now
                                    </div>&nbsp;
                                    <div class="link-icon text-dark">
                                        <i class="fas fa-arrow-right"></i> 
                                    </div>
                                </a>
                                <a href="{{ asset('brochures/MyTower_BAL.pdf') }}" class="pl-0 btn" target="_blank">
                                    <div class="link-text">
                                        Brochure
                                    </div>&nbsp;
                                    <div class="link-icon text-dark">
                                        <i class="fas fa-arrow-right"></i> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section 9 pt-5 pb-5" id="package">
    <div class="section-9-container h-100">
        <div class="container h-100">
            <h4 class="text-left">
                <b><span class="text-BAL">ALL</span> PACKAGES</b>
            </h4>
            <div class="pt-5 h-100">
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                        <a class="nav-link text-dark font-weight-bold" id="pills-trial-tab" data-toggle="pill" href="#pills-trial" role="tab" aria-controls="pills-trial" aria-selected="true">Free Trial</a>
                    </li>
                    <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                        <a class="nav-link active text-dark font-weight-bold" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">My Home</a>
                    </li>
                    <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                        <a class="nav-link text-dark font-weight-bold" id="pills-tower-tab" data-toggle="pill" href="#pills-tower" role="tab" aria-controls="pills-tower" aria-selected="false">My Tower</a>
                    </li>
                    <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                        <a class="nav-link text-dark font-weight-bold" id="pills-finder-tab" data-toggle="pill" href="#pills-finder" role="tab" aria-controls="pills-finder" aria-selected="false">LightFinder</a>
                    </li>
                </ul>
                <div class="tab-content pt-5" id="pills-tabContent" style="height: 90%;">
                    <div class="tab-pane fade  h-100" id="pills-trial" role="tabpanel" aria-labelledby="pills-trial-tab">
                        <div class="pills-all h-100">
                            <div class="card card-trial-summary">
                                <h4 class="card-header text-center bg-BAL text-white">
                                    FREE TRIAL
                                    <br>
                                    <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                                </h4>
                                <div class="card-body pt-5 pb-5">
                                    <p class="card-text text-center">GET A FREE QUOTE. YOU’LL LOVE OUR AMAZING PRICES!</p>
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
                                    <div class="text-center pt-4">
                                        <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">Subscribe now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show active  fade h-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="pills-all h-100">
                            <div class="card card-my-home-summary">
                                <h4 class="card-header text-center bg-BAL text-white">
                                    MY HOME
                                    <br>
                                    <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                                </h4>
                                <div class="card-body pt-5 pb-5">
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
                                                <span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
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
                                        * 10% BAL fee on order confirmation <br>
                                        ** $949 Project fee payable only on offer acceptance
                                    </p>
                                    <hr>
                                    <div class="text-center pb-2">
                                        <h5>FOR ALL THIS, YOU PAY <b>$0.00</b></h5> 
                                    </div>
                                    <div class="text-center">
                                        <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">Subscribe now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade  h-100" id="pills-tower" role="tabpanel" aria-labelledby="pills-tower-tab">
                        <div class="pills-all h-100">
                            <div class="card card-my-tower-summary">
                                <h4 class="card-header text-center bg-BAL text-white">
                                    MY TOWER
                                    <br>
                                    <small style="font-size: 13px;">NO UPFRONT COSTS & FREE QUOTATION</small>
                                </h4>
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
                                                <span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                Markup feature
                                                <span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
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
                                        <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">Subscribe now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade h-100" id="pills-finder" role="tabpanel" aria-labelledby="pills-finder-tab">
                        <div class="pills-all h-100" style=" {{ ($agent->is('IE')) ? 'display:block;' : '' }}" >
                            <div class="card-group">
                                <div class="card card-mini-summary">
                                    <h4 class="card-header text-center bg-BAL text-white">MINI</h4>
                                    <div class="card-body pt-5 pb-5 text-center">
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
                                                    <span class="" data-toggle="tooltip" data-placement="right" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-times"></i>
                                                    Designated lighting designer
                                                    <span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
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
                                        <p class="text-center">* 20% BAL fee on order confirmation</p>
                                        <hr>
                                        <div class="text-center pb-2">
                                            <h5>$499/Monthly</h5>
                                            <small>$5499/Yearly</small>   
                                        </div>
                                        <div >
                                            <a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-BAL">Subscribe now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-premium-summary">
                                    <h4 class="card-header text-center bg-BAL text-white">
                                        PREMIUM
                                    </h4>
                                    <div class="best-pick w-100 d-flex align-items-center justify-content-center">
                                        <span class="text-black ">
                                            <b>BEST PICK</b>
                                        </span>
                                    </div>
                                    <div class="card-body {{ ($agent->is('IE')) ? 'pb-5 pt-5' : 'pb-0 pt-0' }} text-center d-flex align-items-center">
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
                                                        <span class="" data-toggle="tooltip" data-placement="right" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check"></i>
                                                        Designated lighting designer
                                                        <span class="" data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check"></i>
                                                        Markup feature
                                                        <span class="" data-toggle="tooltip" data-placement="right" title="Customise your quotation prices with our flexible markup feature." style="font-size: 12px; ">
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
                                                <a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-BAL">Subscribe now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card card-standard-summary">
                                    <h4 class="card-header text-center bg-BAL text-white">STANDARD</h4>
                                    <div class="card-body pt-5 pb-5 text-center d-flex align-items-center">
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
                                                        <span class="" data-toggle="tooltip" data-placement="right" title="Our ODM services mean we can brand your individual light fittings with your own logo and/or labels." style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-times"></i>
                                                        Designated lighting designer
                                                        <span class=" " data-toggle="tooltip" data-placement="right" title="Enjoy direct communication with your designated lighting designer from start to finish." style="font-size: 12px; ">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
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
                                            <p class="text-center">* 15% BAL fee on order confirmation</p>
                                            <hr>
                                            <div class="text-center pb-2">
                                                <h5>$699/Monthly</h5>
                                                <small>$7699/Yearly</small>   
                                            </div>
                                            <div>
                                                <a href="https://lightfinder.buyanylight.com/buyer/register/lightfinder" class="btn btn-BAL">Subscribe now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-10" id="addons">
    <div class="container pt-5 pb-5">
        <h3 class="pt-5"><span class="text-BAL"><b>ALWAYS ADDING VALUE:</span> optional extras</b></h3>
        <p class="pt-3">
            We’ve designed packages of options to delight various user categories. But every user is an individual, and for maximum flexibility the BuyAnyLight (BAL) platform enables you to add in extra services to suit you. These services are provided by our superb team of highly experienced LED lighting design experts, able to support every kind of LED project for private villas, industrial estates, hotels, public facilities and any other building or infrastructure.  
        </p>
        <p>
            Our optional add-on services include:
        </p>
        <div class="row">
            <div class="col-md-4">
                <h5>
                    <b><span class="text-BAL">Lighting</span> consultation</b>
                </h5>
                <img src="{{ asset('images/lightdesign.jpg')}}" class="mt-3 w-100 section-10-img">
                <!-- <div class="w-100 general-lighting">
                    <div class="container d-flex align-items-end h-100 pb-3">
                        <a href="" class="btn btn-BAL">Book now</a>
                    </div>
                </div> -->
                <div class="collapse" id="read-more">
                    <div class="card card-body ml-0 pl-0 border-0">
                        Great lighting creates an aesthetic ambience that instantly elevates one’s mood and style. Our highly skilled LED lighting designers will help you to create a stunning atmosphere that brings your LED lighting design dreams to life. This add-on is available to all BAL users, irrespective of your package choice. We provide one-to-one access to our world-class consultants who will work with you and provide expert advice from project start-up to the final glorious switch-on!
                    </div>
                </div>
                <button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
                    <b class="1-read-more">Read more</b>
                    <b  class="1-read-less" style="display: none;">Read less</b>
                    <div class="read-more-down float-right">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="read-more-up float-right" style="display: none;">
                        <i class="fas fa-angle-up"></i>
                    </div>
                </button>
                <button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
                    <b>Pricing</b>
                    <div class="pricing-down float-right">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="pricing-up float-right" style="display: none;">
                        <i class="fas fa-angle-up"></i>
                    </div>
                </button>
                <div class="collapse" id="pricing">
                    <div class="card card-body ml-0 pl-0 border-0">
                        $199
                    </div>
                </div>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                    <div class="link-text">
                        Book Now
                    </div>&nbsp;
                    <div class="link-icon text-dark">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <h5>
                    <b><span class="text-BAL">Lux</span> calculation</b>
                </h5>
                <img src="{{ asset('images/luxcalculation.jpg')}}" class="mt-3 w-100 section-10-img">
                <!-- <div class="w-100 general-lighting">
                    <div class="container d-flex align-items-end h-100 pb-3">
                        <a href="" class="btn btn-BAL">Book now</a>
                    </div>
                </div> -->
                <div class="collapse" id="read-more">
                    <div class="card card-body ml-0 pl-0 border-0">
                        This valuable add-on determines the exact brightness requirements (lumens) for a project area - data which is essential for selecting the right products and quantities to achieve the design objectives in any lighting project. Essentially, contractors and consultants can leverage our expertise to give their clients the most reasonable quote - and including this data in a proposal or quote elevates your professionalism and credibility. What’s more, an accurate lux calculation justifies the quote’s rationale and increases the chances of winning the project bid.
                    </div>
                </div>
                <button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
                    <b class="2-read-more">Read more</b>
                    <b  class="2-read-less" style="display: none;">Read less</b>
                    <div class="read-more-down float-right">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="read-more-up float-right" style="display: none;">
                        <i class="fas fa-angle-up"></i>
                    </div>
                </button>
                <button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
                    <b>Pricing</b>
                    <div class="pricing-down float-right">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="pricing-up float-right" style="display: none;">
                        <i class="fas fa-angle-up"></i>
                    </div>
                </button>
                <div class="collapse" id="pricing">
                    <div class="card card-body ml-0 pl-0 border-0">
                        $299
                    </div>
                </div>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                    <div class="link-text">
                        Book Now
                    </div>&nbsp;
                    <div class="link-icon text-dark">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <h5>
                    <b>3D <span class="text-BAL">lighting</span> design</b>
                </h5>
                <img src="{{ asset('images/3dlightingdesign.jpg')}}" class="mt-3 w-100 section-10-img">
                <!-- <div class="w-100 general-lighting">
                    <div class="container d-flex align-items-end h-100 pb-3">
                        <a href="" class="btn btn-BAL">Book now</a>
                    </div>
                </div> -->
                <div class="collapse" id="read-more">
                    <div class="card card-body ml-0 pl-0 border-0">
                        This additional option (available to all BAL users) gives you the opportunity to envision the look and feel of your finished project area. Our professional lighting designers prepare your 3D designs with pinpoint accuracy. In some cases, a 3D lighting design is a contractual requirement when executing a lighting project, but every contractor and consultant can present these stunning 3D models to their clients to inform, reassure and impress. It’s also a chance to gain an edge over competitors, and can add an extra revenue stream to the project.
                    </div>
                </div>
                <button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
                    <b class="3-read-more">Read more</b>
                    <b  class="3-read-less" style="display: none;">Read less</b>
                    <div class="read-more-down float-right">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="read-more-up float-right" style="display: none;">
                        <i class="fas fa-angle-up"></i>
                    </div>
                </button>
                <button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
                    <b>Pricing</b>
                    <div class="pricing-down float-right">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="pricing-up float-right" style="display: none;">
                        <i class="fas fa-angle-up"></i>
                    </div>
                </button>
                <div class="collapse" id="pricing">
                    <div class="card card-body ml-0 pl-0 border-0">
                        $399
                    </div>
                </div>
                <a href="https://lightfinder.buyanylight.com/buyer/register" class=" pl-0 btn">
                    <div class="link-text">
                        Book Now
                    </div>&nbsp;
                    <div class="link-icon text-dark">
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection