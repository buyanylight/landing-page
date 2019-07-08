@extends('layouts.main-layout')
@section('content')
<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    @if(session('success'))
                    <div class="thank-you-pop">
                        <img src="{{ asset('images/green-tick.png')}}" alt="">
                        <h2>Hey, Thanks for getting in touch!</h2>
                        <p>{{session('success')}}</p>
                    </div>
                    @endif
            </div>
        </div>
    </div>
</div>
<div class="body-content">
    <div class="section-1">
        <div class="video-banner">
            <div class="video-image-container">
                <img src="{{asset('images/main-image.png')}}" class="video-image">
            </div>
            <div class="d-flex justify-content-center align-items-center video-container">
                <div class="container bannercontainer">
                    <h1 class=" display-4 text-left headline">
                        Sourcing Reinvented
                    </h1>
                    <p>
                        <span class="sub-title">The global marketplace for LED Lighting<span>
                        <br>
                        <small class="text-white sub-caption">BuyAnyLight (BAL) has transformed the way we source LED lighting.</small>
                    </p>
                    <a href="#about" class="btn btn-outline-light">Read More</a>
                    <!-- <button class="btn btn-light">Get your Free Trial</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-white section-2 pt-5 pb-5">
        <div class=" container section-2-container">
            <div class="row justify-content-center section-2-contents text-center">
                <div class="col-sm-4">
                    <div class="card section-2-card">
                        <img src="{{ asset('images/world-icon.png') }}" class="card-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="font-weight-bold">
                                    LightFinder
                                </h3> 
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">
                                B2B & B2C
                            </h6>
                            <hr class="hr-card">
                            <p class="card-text">
                                LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers...
                            </p>
                            <a href="#finder" class="btn btn-sm btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card section-2-card">
                        <img src="{{ asset('images/tower-icon.png') }}" class="card-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="font-weight-bold">
                                    My Tower
                                </h3> 
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Consultants, contractors and project owners
                            </h6>
                            <hr class="hr-card">
                            <p class="card-text">
                                My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package...
                            </p>
                            <a href="#tower" class="btn btn-sm btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card section-2-card">
                        <img src="{{ asset('images/home-icon.png') }}" class="card-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="font-weight-bold">
                                    My Home
                                </h3> 
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Private homes, villas, and palaces
                            </h6>
                            <hr class="hr-card">
                            <p class="card-text">
                                Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities...
                            </p>
                            <a href="#home" class="btn btn-sm btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="container text-center pt-5">
                    <a href="" class="btn btn-dark">Start your free trial today</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3" id="mission">
        <div class="bg-white section-3-contents">
            <div class="container pt-5 pb-5 h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5 col-sm-5 text-dark pt-4 h-100">
                        <h4 class="font-weight-bold">
                            Mission
                            <hr class="section-3-hr">
                        </h4>
                        <p>
                           Principled, honest and focused, we leverage the world’s best suppliers and deliver the greatest value LED products, the finest service and advice and first-rate customer satisfaction – every time.
                        </p>
                        <h4 class="font-weight-bold">
                            Vision
                            <hr class="section-3-hr">
                        </h4>
                        <p>
                           We will be the global platform of choice for buyers and sellers of quality LED lighting.
                        </p>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div>  
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="section-4" id="about">
        <div class="section-4-contents h-100">
            <div class="section-4-img d-flex justify-content-center align-items-center">
            
            </div>
            <div class="container h-100">
                <div class="row section-4-part1">
                    <div class="col-md-6">
                        <h4 class="font-weight-bold">
                            About BuyAnyLight
                        </h4>
                        <div>
                            <p style="width: 95%;">
                               BuyAnyLight (BAL) has transformed the way we source LED lighting. The BAL platform gives users: 
                            </p>
                            <ul>
                                <li>higher profit margins</li>
                                <li>the best possible prices for any light unit</li>
                                <li>greater efficiency of lighting procurement</li>
                                <li>superb online automation and functionality</li>
                                <li>access to the actual manufacturers of top global brands</li>
                            </ul>
                            <p style="width: 95%;">
                                Whether you have lots of experience with LED lights or none at all, we have a package to help you achieve all your objectives.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        
                    </div>
                </div>
                <div class="row section-4-part2">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 text-white">
                        <div>
                            <p>
                               <b>A private homeowner?</b> Use BAL to make your home a greener, more stylish and cost-efficient zone by switching to LED lights. The energy bill savings are huge!
                            </p>
                            <p>
                                <b>A consultant, contractor or a project owner?</b> We've got you covered! We save you time, money and add even more value with the finest technical expertise to specify the ideal LED lights for your project. Your own BAL expert will help you through your project, every step of the way, ensuring that you get the best prices, designs and products anywhere in the world. BAL allows contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win situation!
                            </p>
                            <p>
                                <b>Researching LED prices and products?</b> Because it’s focused purely on LED lights, BuyAnyLight allows you to do this in record time. BAL provides the best value in product quality, costs, and service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-5" id="balvsretail">
        <div class="section-5-container bg-black h-100">
            <div class="container pt-5">
                <h4 class="text-white font-weight-bold">BuyAnyLight PRICE COMPARISON</h4>
                <div class="slide hi-slide">
                    <div class="hi-prev"></div>
                    <div class="hi-next"> </div>
                    <ul>
                        <li>
                            <div class="card bg-dark ">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light2.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $15
                                                </p>        
                                            </div>
                                            <div class="col-md-2">
                                                /
                                            </div>
                                            <div class="col-md-5">
                                                 <img class="card-img" src="{{ asset('images/retails/artemide.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $205
                                                </p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light1.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $6
                                                </p>        
                                            </div>
                                            <div class="col-md-2">
                                                /
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
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light3.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">           
                                                <p class="font-weight-bold text-center pt-4">
                                                    $25
                                                </p> 
                                            </div>
                                            <div class="col-md-2">
                                                /
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
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light4.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $13
                                                </p>        
                                            </div>
                                            <div class="col-md-2">
                                                /
                                            </div>
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/thorn.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $143
                                                </p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light5.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">           
                                                <p class="font-weight-bold text-center pt-4">
                                                    $33
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                /
                                            </div>
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/iguzzinii.png') }}" alt=""> 
                                                <p class="font-weight-bold text-center pt-4">
                                                    $251
                                                </p>    
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light6.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $67
                                                </p>           
                                            </div>
                                            <div class="col-md-2">
                                                /
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
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light7.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $12
                                                </p>           
                                            </div>
                                            <div class="col-md-2">
                                                /
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
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light8.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt=""> 
                                                <p class="font-weight-bold text-center pt-4">
                                                    $70
                                                </p>          
                                            </div>
                                            <div class="col-md-2">
                                                /
                                            </div>
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/osram.png') }}" alt=""> 
                                                <p class="font-weight-bold text-center pt-4">
                                                    $650
                                                </p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light9.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt=""> 
                                                <p class="font-weight-bold text-center pt-4">
                                                    $3
                                                </p>          
                                            </div>
                                            <div class="col-md-2">
                                                /
                                            </div>
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/philips.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $25
                                                </p> 
                                            </div>    
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset('images/products/light10.jpg') }}" alt="">
                                    <div class="card-text text-white p-2 pt-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/logo.png') }}" alt=""> 
                                                <p class="font-weight-bold text-center pt-4">
                                                    $25
                                                </p>          
                                            </div>
                                            <div class="col-md-2">
                                                /
                                            </div>
                                            <div class="col-md-5">
                                                <img class="card-img" src="{{ asset('images/retails/thorlux.png') }}" alt="">
                                                <p class="font-weight-bold text-center pt-4">
                                                    $444
                                                </p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pt-5 text-white text-center font-15">
                    <p class="pt-5">
                        Get your Free Quote
                    </p>
                    <p>
                        Click Here
                    </p>
                    <a href="#trial" class="text-white">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-6" id="ninety">
        <div class="section-6-container">
            <div class="container h-100">
                <div class="row section-6-part1">
                    <div class="col-md-6 text-white">
                        <h4 class="font-weight-bold">
                            WE ALWAYS FIND THE BEST LIGHT AT THE BEST PRICE
                        </h4>
                        <div>
                            <p>
                                BUY ANY LIGHT (BAL) has the world’s largest network of lighting manufacturers, and we continually add more, allowing BAL to provide the finest platform for finding any type of LED lighting item. Our artificial intelligence systems and high-speed servers match buyer enquiries with the most suitable suppliers in a matter of seconds and instantly send out Requests For Quotes (RFQs). When your quotes arrive, simply use the powerful BAL tools to select the most competitive: it’s fast – and beautifully simple!
                            </p>
                        </div>
                        <div>
                            <p>
                                BAL secures 100% of your funds until you receive your goods. The system also manages the logistics, so you receive your order on time, safely and securely.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                    </div>
                </div>
                <div class="row section-6-part2">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 text-dark pl-5">
                        <h4 class="font-weight-bold">
                            SAVING UP TO 90%... HOW DOES THAT WORK?
                        </h4>
                        <div>
                            <p>
                                Outsourcing the manufacture of LED lights has increased hugely in recent years. The digital age, globalisation, increased transparency and continued cost pressures all make outsourcing a viable and attractive option for major brands worldwide. 
                            </p>
                            <p>
                                The best outsourcing manufacturers adhere strictly to the brand specifications while also leveraging the low production costs and massive economies of scale. We are contracted to these factories which supply us with products similar to global brands such as Phillips, Osram, Ledvance, BEGA, iGuzzini and many more - at unbelievable prices and of course, fully within the law.
                            </p>
                            <p>
                                When you purchase top-brand lights from other suppliers, prices are far higher because these global brands have massive overheads costs (staff, warehouse, marketing expenses, multi-level supply chain, etc.). To make a profit, their prices have to remain high. 
                            </p>
                            <p>
                                As an online platform company, BAL operates differently. We create powerful applications that process large amounts of data and build relationships with manufacturers to provide the finest products, the best prices, and top-notch services anywhere in the world. Combining our low fees and super-low product prices means that every BAL user makes massive savings compared with any other supplier in the market. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-7 bg-white">
        <div class="section-7-container">
            <div class="container pt-5">
                <h4 class="font-weight-bold">
                    WHY CHOOSE US?
                </h4>
                <div class="pt-3">
                    <p>
                       BuyAnyLight (BAL) delivers exceptional advantages to both sellers and buyers, ensuring that every BAL platform user gets win-win results, every time!  
                    </p>
                    <p>
                        Take a look at just some of the big BAL benefits:
                    </p>
                </div>
                <div class="pb-5">
                    <h3 class="pt-5 pb-5 font-weight-bold text-center">
                        Buyers
                    </h3>
                    <div class="container buyer-cards">
                        <div class="card-deck w-100">
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-stopwatch"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Convenient</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        BAL is a one-stop shop that reduces the time spent on sourcing LED lights by over 90%.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Lowest prices</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Get the best quotes directly from BAL and manufacturers, without involving any costly middle-men.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-boxes"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Greater variety</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Find any type of LED light you need on BAL. Review different designs and technical specifications from world-class brands.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container buyer-cards pt-4">
                        <div class="card-deck w-100">
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-equals"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Easy price comparisons</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Use the advanced filter feature to select quotes and pick the best ones to review and compare.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Security</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Enjoy 100% payment protection guarantee. Your payment is secured with BAL until the goods reach their destination.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-filter"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Risk-free</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        No long-term financial commitment - and no upfront payment when using My Home and My Tower packages.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container buyer-cards pt-4">
                        <div class="card-deck w-100">
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-lightbulb"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Request samples</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Want to try before you buy? You can order a few samples first before buying in bulk.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">World-class logistics</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        BAL takes responsibility for ensuring that all your orders are securely handled with the greatest care. We promise on-time delivery and a live shipment tracker.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">First-class consultancy</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                       Private homeowners, consultants and contractors can take advantage of our consultancy services. Our LED lighting experts are here to ensure the success of every project, whatever its size.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <h3 class="pb-5 font-weight-bold text-center">
                        Sellers
                    </h3>
                    <div class="container buyer-cards">
                        <div class="card-deck w-100">
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-business-time"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Easy set-up</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        No need for tedious product listing processes: just complete your seller profile and verification.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-laptop"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Free registration</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        BAL is completely free for sellers. Simply register and start receiving Requests For Quotes (RFQs) from buyers across the globe!
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Cost-saving</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Get access to thousands of highly-targeted buyers across the globe without spending a cent on marketing! BAL is an excellent free channel for selling your stock.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container buyer-cards pt-4">
                        <div class="card-deck w-100">
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-wallet"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Flexible pricing</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Sellers can give a flexible price for each quote based on availability, the target market and any fluctuations in production costs, etc.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Secure platform</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        BAL guarantees the payments for every supply project and acts as trustee. Fulfil all your orders with absolute confidence!
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-smile"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Completely free</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Suppliers can use the service of BAL to provide quotes at no cost at all. However, every supplier must pass our screening process to use the BAL platform and start selling.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container buyer-cards pt-4">
                        <div class="card-deck w-100">
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-lightbulb"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Provide samples</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Buyers can order samples before a bulk order. This feature prevents disputes as the buyer knows what to expect.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-boxes"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Hassle-free supply</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        We save you all the hassle and headaches of managing logistics: we fulfil the order and make sure it’s sent to the buyer promptly and safely.
                                    </div>
                                </div>
                            </div>
                            <div class="card h-250">
                                <div class="card-body">
                                    <div class="text-center font-35 buyer-card">
                                        <div class="buyer-img">
                                            <i class="fas fa-pen-square"></i>
                                        </div>
                                        <div class="buyer-text">
                                            <h5 class="card-title text-center">Easy to use</h5>
                                        </div>
                                    </div>
                                    <div class="card-text text-center buyer-card-text">
                                        Forget about tiring learning curves! The BAL platform is intuitive and easy to use.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-8" id="trial">
        <div class="section-8-container bg-black h-100">
            <div class="container h-100">
                <h4 class="font-weight-bold pt-5 text-white">
                    OUR PACKAGES
                </h4>
                <p class="text-white">We welcome everyone to use our platform. Take a look at the groups below and see which one is right for you. If you have any queries, don’t hesitate to <a href="#contact">get in touch.</a></p>
                <div class="row pb-5 text-white">
                    <div class="col-md-6">
                        <img src="{{ asset('images/trial.png')}}" width="100%">
                    </div>
                    <div class="col-md-6">
                        <h4 class="font-weight-bold">
                            Free Trial
                            <hr class="section-8-hr"> 
                        </h4>
                        <p>
                            To start finding out about all the benefits you can enjoy with us, simply register for the free trial. This enables you to explore many of BAL’s tools and functions before choosing the right subscription package for you or your organisation. It’s also useful if you want to make an enquiry and receive quotes quickly and simply. You may subscribe to one of the LightFinder packages to request for samples or confirm an order.
                        </p>
                        <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-light">REGISTER NOW</a>
                        <a href="#package" class="btn btn-danger">CHECK RATE</a>
                        <a href="" class="btn btn-secondary">DOWNLOAD BROCHURE</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="section-11" id="finder">
        <div class="section-11-container h-100">
            <div class="container h-100">
                <div class="row align-items-center pt-5">

                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/OBm3CPqiXt8?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h4 class="font-weight-bold">
                                LightFinder  
                            </h4>
                            <hr class="section-11-hr">
                            <p>
                               LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers. As a LightFinder user you can access the innovative BAL platform, upload your requirements and get the best quotes direct from BAL’s various world-class manufacturer partners. All suppliers on the BAL platform are first-class manufacturers, vetted directly by our team of experts.
                            </p>
                        </div>
                        <div>
                            <p class="font-weight-bold">
                                Finest quality, lowest prices, no stress!
                            </p>
                            <p>
                                When you upload your requirements as a LightFinder user, BAL’s intelligent systems match you with manufacturers whose products match your request. BAL then sends out an instant Request for Quotation (RFQ). All you need to do is sit back and wait for your quotations to arrive. 
                                BAL saves you all the time and stress of manually sifting through lots of supplier quotes. Use the intelligent filter on BAL to sort the quotes automatically until you arrive at a handful you’d like to vet manually. After selecting your preferred supplier, you can confirm the order immediately or request a sample.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pt-5">
                    <div class="col-md-6">
                        <div>
                            <p class="font-weight-bold">
                                Choose the LightFinder level that works for you!
                            </p>
                            <p>
                                As a LightFinder user you have the choice of Mini, Standard, and Premium subscriptions, depending on the volumes you need. Like all BAL users, you can leverage the platform’s power to find the finest global suppliers and the best value for a fraction of the usual cost - all from the comfort of your own home or office. 
                            </p>
                            <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-dark">REGISTER NOW</a>
                            <a href="#package" class="btn btn-danger">CHECK RATE</a>
                        <a href="" class="btn btn-secondary">DOWNLOAD BROCHURE</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/lightfinder.png')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-9" id="home">
        <div class="section-9-container pb-5 bg-black text-white h-100">
            <div class="container h-100">
                <div class="row  align-items-center pt-5">
                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h4 class="font-weight-bold">
                                My Home
                            </h4>
                            <hr class="section-9-hr">

                            <p>
                              Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities. However, choosing and buying LED locally is often complex, stressful and disappointing. BAL is here to help you source LED lights with professional precision and world-class products and service. Very few private property owners are experts in LED, lumens, CCT or CRI, so we provide all the help you want and need.
                            </p>
                        </div>
                        <div>
                            <p class="font-weight-bold">
                                Perfect for homeowners
                            </p>
                            <p>
                                To start your project on the right track, choose the My Home package, upload your lighting requirements or share with us pictures of the lighting that’s currently in your home. Our team of experts will explore the ideal technology and design options for you and present you with a quote for your LED light project, quickly and efficiently. BAL offers you the lowest prices for excellent quality LED lights - plus you’ll also make huge savings on electricity bills. No more messing with local stores that exploit your inexperience and sell you their old stock at high prices! BAL raises the quality, lowers the costs and gives you a far more pleasing outcome all round. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row  align-items-center pt-5">
                    <div class="col-md-6">
                        <div>
                            <p>
                                Don’t forget, with LED lights you’ll be playing a role in reducing the carbon footprint, saving energy and making the world a better place.
                            </p>
                        </div>
                        <div>
                            <p class="font-weight-bold">
                                The next step
                            </p>
                            <p>
                                We go above and beyond just designing your lights and quoting for projects. We offer you the best possible prices for every product we quote, saving you up to 90% on your LED project. BAL buying power attracts significant discounts from manufacturers and we’re proud to pass on these great savings to you.
                            </p>
                            <p>
                                To take advantage of these huge savings and benefits, we charge only a one-time project subscription fee and 10% commission on the total product cost. That’s quite simply how we earn our revenue. Plus, you don’t pay anything until you’ve decided to commit to our quote, so there is ZERO RISK to you when trying us out!
                            </p>
                            <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-dark">REGISTER NOW</a>
                            <a href="#package" class="btn btn-danger">CHECK RATE</a>
                            <a href="" class="btn btn-secondary">DOWNLOAD BROCHURE</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/home.png')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-10" id="tower">
        <div class="section-10-container pb-5 h-100 bg-white">
            <div class="container h-100">
                <div class="row  align-items-center pt-5">
                    <div class="col-md-6">
                        <div>
                            <h4 class="font-weight-bold">
                                My Tower
                            </h4>
                            <hr class="section-10-hr">
                            <p>
                               My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package and either upload your requirements or drag and drop your Bill of Quantities (BOQ). With NO UPFRONT PAYMENT, you can receive a solution and quote from BAL, confident in the knowledge that our expertise, products, prices, and service are unrivalled in the LED marketplace.
                            </p>
                        </div>
                        <div>
                            <p class="font-weight-bold">
                                How does BAL save you so much money?
                            </p>
                            <p>
                               Corporate customers enjoy prices up to 90% lower than those of local suppliers. Our massive orders attract exclusive discounts from manufacturers, so we can offer you the best prices on the market. Besides, we have no large sales force, no executive car fleet or costly showrooms to run, so our low business overheads also help us to give our customers the best products at unbelievable prices.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                    
                </div>
                <div class="row align-items-center pt-5">
                    <div class="col-md-6">
                        <img src="{{ asset('images/tower.png')}}" width="100%">
                    </div>
                    
                    <div class="col-md-6">
                        <div>
                            <p class="font-weight-bold">
                                The next step
                            </p>
                            <p>
                                When (and only when) you decide to commit to a BAL quote, you’ll be asked to make a one-time project subscription fee to confirm your order or request samples. We charge a 10% commission on the total cost of the products: this is how BAL earns its revenue and maintains its service.
                            </p>
                            <p>
                                DID YOU KNOW? Our Markup Feature (exclusive to BAL corporate users) - is a fantastic BAL feature, allowing you to add markups to the quotes, quickly and easily. It means you can offer your customers lower prices than local suppliers while also boosting your profits - a win-win for everyone!
                            </p>
                            <a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-dark">REGISTER NOW</a>
                            <a href="#package" class="btn btn-danger">CHECK RATE</a>
                        <a href="" class="btn btn-secondary">DOWNLOAD BROCHURE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section-12" id="package">
        <div class="section-12-container h-100">
            <div class="container h-100">
                <h4 class="text-center pt-5 font-weight-bold">
                    ALL PACKAGES
                </h4>
                <div class="pt-5 h-100">
                    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                            <a class="nav-link text-dark font-weight-bold" id="pills-trial-tab" data-toggle="pill" href="#pills-trial" role="tab" aria-controls="pills-trial" aria-selected="true">Free Trial</a>
                        </li>
                        <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                            <a class="nav-link text-dark font-weight-bold" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">My Home</a>
                        </li>
                        <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                            <a class="nav-link text-dark font-weight-bold" id="pills-tower-tab" data-toggle="pill" href="#pills-tower" role="tab" aria-controls="pills-tower" aria-selected="false">My Tower</a>
                        </li>
                        <li class="nav-item" style="border: 1px solid black; border-radius: 5px;">
                            <a class="nav-link active text-dark font-weight-bold" id="pills-finder-tab" data-toggle="pill" href="#pills-finder" role="tab" aria-controls="pills-finder" aria-selected="false">LightFinder</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-5" id="pills-tabContent" style="height: 90%;">
                        <div class="tab-pane fade h-100" id="pills-trial" role="tabpanel" aria-labelledby="pills-trial-tab">
                            <div class="pills-all h-100">
                                <div class="card trial-height w-60">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        Free Trial
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
                                                            Explore BAL
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-times"></i>
                                                            Markup feature
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="trial-list">
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
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 pt-2">
                                                    <p class="text-center">
                                                        <strong>Note:</strong>
                                                        A LightFinder package is required to confirm the order.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade h-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="pills-all h-100">
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
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="trial-list">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade h-100" id="pills-tower" role="tabpanel" aria-labelledby="pills-tower-tab">
                            <div class="pills-all h-100">
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
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="trial-list">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active h-100" id="pills-finder" role="tabpanel" aria-labelledby="pills-finder-tab">
                            <div class="pills-all h-100">
                                <div class="card" style="width: 50%; height: 495px;">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        MINI
                                        <div class="text-muted">
                                            <small>
                                                SOURCING REINVENTED
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text">
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
                                    </div>
                                </div>
                                <div class="card" style="width: 50%; height: 495px; box-shadow: 0px 0px 15px #000000; border: black; z-index: 1;">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white; ">
                                        STANDARD
                                        <div class="text-muted">
                                            <small>
                                                SOURCING REINVENTED
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text">
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
                                    </div>
                                </div>
                                <div class="card" style="width: 50%; height: 495px;">
                                    <h5 class="card-header" style="background: #1B1B1B; color: white;">
                                        PREMIUM
                                        <div class="text-muted">
                                            <small>
                                                SOURCING REINVENTED
                                            </small>
                                        </div>
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-13 pb-5">
        <div class="section-13-container">
            <div class="container">
                <h4 class="pt-5 font-weight-bold">
                    ALWAYS ADDING VALUE: optional extras
                </h4>
                <p>
                  We’ve designed packages of options to delight various user categories. But every user is an individual, and for maximum flexibility the BuyAnyLight (BAL) platform enables you to add in extra services to suit you. These services are provided by our superb team of highly experienced LED lighting design experts, able to support every kind of LED project for private villas, industrial estates, hotels, public facilities and any other building or infrastructure.  
                </p>
                <p>
                    Our optional add-on services include:
                </p>
                <div class="row pt-4">
                    <div class="col-md-4">
                        <h5 class="font-weight-bold">
                            General lighting consultation 
                            <small class="text-muted"> - $199 USD</small>
                        </h5>
                        <img src="{{ asset('images/lightdesign.jpg')}}" class="section-13-img mt-3">
                        <div class="section-13-text">
                            <p class="mt-5">
                                Great lighting creates an aesthetic ambience that instantly elevates one’s mood and style. Our highly skilled LED lighting designers will help you to create a stunning atmosphere that brings your LED lighting design dreams to life. This add-on is available to all BAL users, irrespective of your package choice. We provide one-to-one access to our world-class consultants who will work with you and provide expert advice from project start-up to the final glorious switch-on! 
                            </p>
                        </div>
                        <a href="" class="btn btn-sm btn-dark">BOOK NOW</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="font-weight-bold">
                            Lux calculation
                            <small class="text-muted"> - $299 USD</small>
                        </h5>
                        <img src="{{ asset('images/luxcalculation.jpg')}}" class="section-13-img mt-3">
                        <div class="section-13-text">
                            <p class="mt-5">
                                This valuable add-on determines the exact brightness requirements (lumens) for a project area - data which is essential for selecting the right products and quantities to achieve the design objectives in any lighting project. Essentially, contractors and consultants can leverage our expertise to give their clients the most reasonable quote - and including this data in a proposal or quote elevates your professionalism and credibility. What’s more, an accurate lux calculation justifies the quote’s rationale and increases the chances of winning the project bid.
                            </p>
                        </div>
                        <a href="" class="btn btn-sm btn-dark">BOOK NOW</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="font-weight-bold">
                            3D lighting design
                            <small class="text-muted"> - $399 USD</small>
                        </h5>
                        <img src="{{ asset('images/3dlightingdesign.jpg')}}" class="section-13-img mt-3">
                        <div class="section-13-text">
                            <p class="mt-5">
                                This additional option (available to all BAL users) gives you the opportunity to envision the look and feel of your finished project area. Our professional lighting designers prepare your 3D designs with pinpoint accuracy. In some cases, a 3D lighting design is a contractual requirement when executing a lighting project, but every contractor and consultant can present these stunning 3D models to their clients to inform, reassure and impress. It’s also a chance to gain an edge over competitors, and can add an extra revenue stream to the project.
                            </p> 
                        </div>
                        <a href="" class="btn btn-sm btn-dark">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-14" id="contact">
        <div class="section-14-container">
            <div class="pt-5 pb-5 text-center contact-header">
               <!--  <div>
                    <h4 class="font-weight-bold"></h4>
                </div> -->
            </div>
            <div class="container contact-form-container bg-black"> 
                <div class="row">
                    <div class="col-md-8 bg-white">
                        <div class="formBox ">
                            <form method="post" action="/contact-us">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="font-weight-bold">CONTACT US</h1>
                                        <p>Feel free to get in touch with us and we'll get back to you</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="inputBox ">
                                            <div class="inputText">Full Name</div>
                                            <input type="text" name="name" class="input">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="inputBox">
                                            <div class="inputText">Email</div>
                                            <input type="text" name="email" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="inputBox">
                                            <div class="inputText">Subject</div>
                                            <input type="text" name="subject" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="inputBox">
                                            <div class="inputText">Message</div>
                                            <textarea class="input" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
                                        <input type="submit" class="btn btn-dark w-100" value="Send Message" disabled="disabled">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="col-md-10">
                                    <span><b>+971 4 887 3265</b></span><br>
                                    <span>Mon to Fri 9am to 6pm</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="location text-white">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="col-md-10">
                                    <span><b>info@buyanylight.com</b></span><br>
                                    <span>Send us your query anytime</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
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