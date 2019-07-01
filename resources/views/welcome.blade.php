@extends('layouts.main-layout')
@section('content')
<div class="body-content">
    <div class="section-1">
        <div class="video-banner">
            <div class="video-image-container">
                <img src="{{asset('images/preview.png')}}" class="video-image">
            </div>
            <div class="d-flex justify-content-center align-items-center video-container">
                <div class="video-overlay"></div>
                <video autoplay muted loop class="embed-responsive-item video-banner-vid" id="autovid">
                    <source src="{{asset('images/banner-video.mp4')}}" type="video/mp4">
                </video>
                <div class="container bannercontainer">
                    <h1 class=" display-4 text-left headline">
                        Sourcing Reinvented
                    </h1>
                    <p>
                        <span class="sub-title">The global marketplace for LED Lighting<span>
                        <br>
                        <small class="text-white sub-caption">Find the World's leading lighting companies</small>
                    </p>
                    <button class="btn btn-outline-light">Read More</button>
                    <!-- <button class="btn btn-light">Get your Free Trial</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="container section-2-container">
            <div class="row justify-content-center section-2-contents">
                <div class="col-sm-4">
                    <div class="card section-2-card">
                        <img src="{{ asset('images/home-icon.png') }}" class="card-img-top" alt="...">
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
                                Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs and helps protect our planet and gives far greater aestehetics and design opportunities...
                            </p>
                            <a href="" class="btn btn-sm btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card section-2-card">
                        <img src="{{ asset('images/tower-icon.png') }}" class="card-img-top" alt="...">
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
                                My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery...
                            </p>
                            <a href="" class="btn btn-sm btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card section-2-card">
                        <img src="{{ asset('images/world-icon.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="font-weight-bold">
                                    LightFinder
                                </h3> 
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">
                                B2B or B2C
                            </h6>
                            <hr class="hr-card">
                            <p class="card-text">
                                LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers...
                            </p>
                            <a href="" class="btn btn-sm btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-6">
                <a href="#" class="btn btn-lg btn-dark">GET YOUR FREE ACCESS NOW!</a>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="bg-dark section-3-contents">
            <div class="container pt-5 pb-5 h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5 col-sm-5 text-white pt-4 h-100">
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
    <div class="section-4">
        <div class="section-4-contents h-100">
            <div class="container h-100">
                <div class="row section-4-part1">
                    <div class="col-md-6">
                        <h4 class="font-weight-bold">
                            About Buy Any Light
                        </h4>
                        <div>
                            <p style="width: 95%;">
                                BUY ANY LIGHT (BAL) has transformed the way we source LED lighting. The BAL platform gives users: 
                            </p>
                            <ul>
                                <li>the best possible prices for any light unit</li>
                                <li>greater efficiency of lighting procurement</li>
                                <li>access to global brands from a single platform</li>
                                <li>higher profit margins</li>
                                <li>superb online automation and functionality.</li>
                            </ul>
                            <p style="width: 95%;">
                                Whether you have lots of experience with LED lights or none at all, we have a package to help you achieve all your objectives.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <img src="{{ asset('images/demo1.jpg')}}" width="500">
                    </div>
                </div>
                <div class="row section-4-part2">
                    <div class="col-md-6">
                        <img src="{{ asset('images/demo1.jpg')}}" width="500">
                    </div>
                    <div class="col-md-6 text-white">
                        <div>
                            <p>
                               A private homeowner? Use BAL to make your home a greener, more stylish and cost-efficient zone by switching to LED lights. The energy bill savings are huge!
                            </p>
                            <p>
                                A consultant, contractor or a project owner? We've got you covered! We save you time, money and add even more value with the finest technical expertise to specify the ideal LED lights for your project. Your own BAL expert will help you through your project, every step of the way, ensuring that you get the best prices, designs and products anywhere in the world. BAL allows contractors and consultants to provide outstanding services for their clients, achieve project objectives and maximise profits. With BAL, it's always a win-win situation!
                            </p>
                            <p>
                                Reasearching LED prices and products? Becaused it’s focused purely on LED lights, BuyAnyLight allows you to do this in record time. BAL provides the best value in product quality, costs, and service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-5">
        <div class="section-5-container bg-dark h-100">
            <div class="container pt-5">
                <h4 class="text-white font-weight-bold">BAL VS RETAIL</h4>
            </div>
        </div>
    </div>
    <div class="section-6">
        <div class="section-6-container">
            <div class="container h-100">
                <div class="row section-6-part1">
                    <div class="col-md-6 text-white">
                        <h4 class="font-weight-bold">
                            WE ALWAYS FIND THE BEST LIGHT AT THE BEST PRICE FOR YOU
                        </h4>
                        <div>
                            <p>
                                BUY ANY LIGHT (BAL) has the world’s largest network of lighting manufacturers, and we are continually add more, allowing BAL to provide the finest platform for finding any type of LED lighting item. Our artificial intelligence systems and high-speed servers match buyer enquiries with the most suitable suppliers in a matter of seconds and instantly send out Requests For Quotes (RFQs). When your quotes arrive, simply use the powerful BAL tools to select the most competitive: it’s fast – and beautifuly simple!
                            </p>
                        </div>
                         <h4 class="font-weight-bold">
                            With BAL, you only pay when your goods arrive
                        </h4>
                        <div>
                            <p>
                                BAL secures 100% of your funds until you receive your goods. The system also manages the logistics, so you receive your order on time, safely and securely.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <img src="{{ asset('images/demo1.jpg')}}" width="500">
                    </div>
                </div>
                <div class="row section-6-part2">
                    <div class="col-md-6">
                        <img src="{{ asset('images/demo1.jpg')}}" width="500">
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
                                The best outsource manufacturers adhere strictly to the brand specifications while also leveraging the low production costs and massive economies of scale. We are contracted to these factories which supply us with global brands such as Phillips, Osram, Ledvance, Acuity, Cree, Eaton, GE Lighting, and many more - at unbelievable prices and of course, fully within the law. Very occasionally, when these brands are temporarily unavailable, we have many other excellent alternatives which also delight our customers. 
                            </p>
                            <p>
                                When you purchase top-brand lights from other suppliers, prices are far higher because these global brands have massive overheads costs (staff, warehouse, marketing expenses, multi-level supply chain, etc.). To make a profit, their prices have to remain high. 
                            </p>
                            <p>
                                As an online platform company, BAL operates differently. We create powerful applications that process large amounts of data and build relationships with manufacturers to provide the finest products, the best prices, and top-notch services anywhere in the world. With low operating costs, we take only a project subscription fee and 10% commission to cover costs and earn revenue. Combining our low fees and super-low product prices means that every BAL user makes massive savings compared with any other supplier in the market. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-7">
        <div class="section-7-container">
            <div class="container pt-5">
                <h4 class="font-weight-bold">
                    Why Choose Us
                </h4>
            </div>
        </div>
    </div>
    <div class="section-8">
        <div class="section-8-container bg-black h-100">
            <div class="container h-100">
                <h4 class="font-weight-bold pt-5 text-white">
                    Our Packages
                </h4>
                <div class="row pt-5 text-white">
                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">
                            ENTRY LEVEL
                            <hr class="section-8-hr"> 
                        </h5>
                        <p>
                            To start finding out about all the benefits you can enjoy with us, simply register for free with an Entry Level account. This enables you to explore many of BAL’s tools and functions before choosing the right subscription package for you or your organisation. It’s also useful if you want to make an enquiry and receive quotes quickly and simply. You may subscribe to our package to request for samples or confirm an order.
                        </p>
                        <a href="" class="btn btn-light">REGISTER NOW</a>
                        <a href="" class="btn btn-danger">CHECK RATE</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="section-9">
        <div class="section-9-container h-100">
            <div class="container h-100">
                <div class="row pt-5">
                    <div class="col-md-6">
                        <img src="{{ asset('images/screen.png')}}" width="100%">
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h5 class="font-weight-bold">
                                My Home
                            </h5>
                            <hr class="section-9-hr">

                            <p>
                               Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs and helps protect our planet and gives far greater aestehetics and design opportunities. However, choosing and buying LED locally is often complex, stressful and disappointing. BAL is here to help you source LED lights with professional precision and world-class products and service. Very few private property owners are experts in LED, lumens, CCT or CRI, so we provide all the help you want and need.
                            </p>
                        </div>
                        <div>
                            <p class="font-weight-bold">
                                Perfect for homeowners
                            </p>
                            <p>
                                To start your project on the right track, choose the package that best suits you, upload your lighting requirements and share with us pictures of the lighting that’s currently in your home. Our team of experts will explore the ideal technology and design options for you and present you with a quote for your LED light project, quickly and efficiently. BAL offers you the lowest prices for top-brand LED lights - plus you’ll also make huge savings on electricity bills. No more messing with local stores that exploit your inexperience and sell you their old stock at high prices! BAL raises the quality, lowers the costs and gives you a far more pleasing outcome all round. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
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
                            <a href="" class="btn btn-dark">REGISTER NOW</a>
                            <a href="" class="btn btn-danger">CHECK RATE</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-10">
        <div class="section-10-container h-100 bg-black text-white">
            <div class="container h-100">
                <div class="row pt-5">
                    <div class="col-md-6">
                        <div>
                            <h5 class="font-weight-bold">
                                My Tower
                            </h5>
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
                        <img src="{{ asset('images/screen.png')}}" width="100%">
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="font-weight-bold">
                                The next step
                            </p>
                            <p>
                                When (and only when) you decide to commit to a BAL quote, you’ll be asked to they need to make a one-time project subscription fee to confirm your order or request samples. We charge a 10% commission on the total cost of the products: this is how BAL earns its revenue and maintains its service.
                            </p>
                            <p>
                                DID YOU KNOW? Quote customization (exclusive to BAL corporate users) - is a fantastic BAL feature, allowing you to add markups to the quotes, quickly and easily. It means you can offer your customers lower prices than local suppliers while also boosting your profits - a win-win for everyone!
                            </p>
                            <a href="" class="btn btn-dark">REGISTER NOW</a>
                            <a href="" class="btn btn-danger">CHECK RATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-11">
        <div class="section-11-container h-100">
            <div class="container h-100">
                <div class="row pt-5">
                    <div class="col-md-6">
                        <img src="{{ asset('images/screen.png')}}" width="100%">
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h5 class="font-weight-bold">
                                LightFinder  
                            </h5>
                            <hr class="section-11-hr">
                            <p>
                               LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from manufacturers. As a Sourcing Solutions user you can access the innovative BAL platform, upload your requirements and get the best quotes direct from BAL’s various world-class manufacturer partners. All suppliers on the BAL platform are first-class manufacturers, vetted directly by our team of experts.
                            </p>
                        </div>
                        <div>
                            <p class="font-weight-bold">
                                Finest quality, lowest prices, no stress!
                            </p>
                            <p>
                                When you upload your requirements as a Sourcing Solutions user, BAL’s intelligent systems match you with manufacturers whose products match your request. BAL then sends out an instant Request for Quotation (RFQ). All you need to do is sit back and wait for your quotations to arrive. 
                                BAL saves you all the time and stress of manually sifting through lots of supplier quotes. Use the intelligent filter on BAL to sort the quotes automatically until you arrive at a handful you’d like to vet manually. After selecting your preferred supplier, you can confirm the order immediately or request a sample.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-6">
                        <div>
                            <p class="font-weight-bold">
                                Choose the Sourcing Solutions level that works for you!
                            </p>
                            <p>
                                As a Sourcing Solutions user you have the choice of Mini, Standard, and Premium subscriptions, depending on the volumes you need. Like all BAL users, you can leverage the platform’s power to find the finest global suppliers and the best value for a fraction of the usual cost - all from the comfort of your own home or office.
                            </p>
                            <a href="" class="btn btn-dark">REGISTER NOW</a>
                            <a href="" class="btn btn-danger">CHECK RATE</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-12">
        <div class="section-12-container">
            <h4 class="text-center pt-5 font-weight-bold">
                All Packages
            </h4>
        </div>
    </div>
    <div class="section-13 pb-5">
        <div class="section-13-container">
            <div class="container">
                <h4 class="pt-5 font-weight-bold">
                    ALWAYS ADDING VALUE: optional extras
                </h4>
                <p>
                    We’ve designed packages of options to delight various types of user. But every user is an individual, and for maximum flexibility the BUY ANY LIGHT platform enables you to add in extra services to suit you. These eservices are provided by our superb team of highly experienced LED lighting design experts, able to support every kind of LED project for private villas, industrial estates, hotels, public facilities and any other building or infrastructure.
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
                        <img src="{{ asset('images/generallightingdesign.jpg')}}" class="section-13-img mt-3">
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
                            3D lighiting design
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
</div>
@endsection