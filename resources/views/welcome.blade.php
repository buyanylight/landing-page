@extends('layouts.main-layout')


@section('content')
<section class="section-1">
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
            </div>
        </div>
    </div>
</section>
<section class="section-2">  
    <div class="container h-100">
        <div class="w-100 card all-cards">
            <div class="card-body d-flex justify-content-center">
                <div class="card-deck">
                    <div class="card border-0 lightfinder">
                        <img src="{{ asset('images/world-icon.png') }}" class="card-top ml-3" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">LightFinder</h4>
                            <div class="card-subtitle mt-2 text-muted">B2B & B2C</div>
                            <hr>
                            <p class="card-text">LightFinder users are businesses such as lighting companies, consultants or homeowners who prefer to source LED lights personally and directly from <br> manufacturers...</p>
                            <a href="#finder" class="btn btn-sm pl-0 text-dark">
                                <div class="link-text">
                                    Cut LED cost, not quality 
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="h-100 border-right border-dark"></div>
                    <div class="card border-0">
                        <img src="{{ asset('images/home-icon.png') }}" class="card-top ml-3" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">MyHome</h4>
                            <div class="card-subtitle mt-2 text-muted">Private homes, villas, and palaces</div>
                            <hr>
                            <p class="card-text">Generic lights don’t belong in stylish, 21st century homes… Custom LED saves energy and costs, helps protect our planet and gives far greater aesthetic and design opportunities...</p>
                            <a href="#finder" class="btn btn-sm pl-0 text-dark">
                                <div class="link-text">
                                    Find dream home LED at dreamy prices  
                                </div>&nbsp;
                                <div class="link-icon">
                                    <i class="fas fa-arrow-right"></i> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="h-100 border-right border-dark"></div>
                    <div class="card border-0">
                        <img src="{{ asset('images/tower-icon.png') }}" class="card-top ml-3" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">MyTower</h4>
                            <div class="card-subtitle mb-2 text-muted"> Consultants, contractors and project owners</div>
                            <hr class="hr-card">
                            <p class="card-text"> My Tower users leverage our expertise to get the best products in the market, save a fortune, and improve their project delivery. When starting a project, you subscribe to our package...</p>
                            <a href="#finder" class="btn btn-sm pl-0 text-dark">
                                <div class="link-text">
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
        <div class="text-center mb-5 trial-btn-link">
            <a href="" class="btn btn-BAL btn-lg">Start your free trial</a>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="container pt-5 pb-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 text-white">
                <div class="embed-responsive embed-responsive-16by9 video">
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
</section>
<section class="section-4">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    <b>About BuyAnyLight</b>
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
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</section>

@endsection