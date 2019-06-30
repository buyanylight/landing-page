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
                    <button class="btn btn-outline-light">Get your Free Trial</button>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="container section-2-contents">
            <div class="row justify-content-center section-2-contents">
                <div class="col-md-3">
                    <div class="card section-2-card">
                        <div class="card-body">
                            <div class="card-title">
                                MyHome
                            </div>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card section-2-card">
                        <div class="card-body">
                            <div class="card-title">
                                MyHome
                            </div>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card section-2-card">
                        <div class="card-body">
                            <div class="card-title">
                                MyHome
                            </div>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection