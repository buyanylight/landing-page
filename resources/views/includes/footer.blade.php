<footer class="bg-black pb-3">
    <div class="container">
        <div class="pt-5">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div>
                            <img src="{{ Util::assetUrl('images/logo-white.png')}}" alt="" width="50%">
                        </div>
                        <p class="mt-4" style="font-size: 13px; color: white;">
                            {{ trans('msg.footer1') }}
                        </p>
                        <!-- <h5 class="text-white font-weight-bold">Connect with our newsletter</h5>

                        <form  action="https://buyanylight.us3.list-manage.com/subscribe/post?u=22d8456f8db4bacaef7a16d53&amp;id=7b85cd9f3f" method="post" class="input-group mt-3" name="mc-embedded-subscribe-form" novalidate target="_blank">
                            <input type="email" name="EMAIL" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-dark">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form> -->
                        <div class="row social-links mt-4">
                            <div class="col-sm-1 one-link">
                                <a href="http://www.youtube.com/c/BuyAnyLight" class="text-grey" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://twitter.com/BuyAnyLight" class="text-grey" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://www.instagram.com/buyanylight/" class="text-grey" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://www.facebook.com/BuyAnyLight/" class="text-grey" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://github.com/buyanylight" class="text-grey" target="_blank"><i class="fab fa-github"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://www.reddit.com/r/BuyAnyLight/" class="text-grey" target="_blank"><i class="fab fa-reddit-alien"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://bitcointalk.org/index.php?topic=5193049.0;topicseen" class="text-grey" target="_blank"><i class="fab fa-bitcoin"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://t.me/buyanylight" class="text-grey" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://medium.com/buyanylight" class="text-grey" target="_blank"><i class="fab fa-medium-m"></i></a>
                            </div>
                            <div class="col-sm-1 one-link">
                                <a href="https://www.linkedin.com/company/buyanylight/" class="text-grey" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="payments mt-4">
                        <div class="row">
                            <div class="col">
                                <img src=" {{ Util::assetUrl('images/payment.png') }}" width="59.5%">
                            </div>
                        </div>
                    </div>
                    <div class="text-left mt-4">
                       <span class="text-white">{{ trans('msg.footer19') }}:&nbsp;</span>  
                        <a href="https://dotcomv.com" target="_blank">
                            <img src="{{ Util::assetUrl('images/dv_white.png') }}" width="14%">
                        </a>
                    </div>
                    <!-- <div class="payments ">
                        <h5 class="text-white">Visit Us</h5>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="https://light-middleeast.german-pavilion.com/en/home/">
                                    <img src=" {{ Util::assetUrl('images/werbebanner.jpg') }}" width="69%">
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a href="https://www.gitexfuturestars.com/exhibitors/buy-any-light">
                                    <img src=" {{ Util::assetUrl('images/GFS.png') }}" width="40%">
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-2">
                    <h5 class="text-white font-weight-bold">{{ trans('msg.footer2') }}</h5>
                    <ul class="list-group footer-list">
                        <li class="mt-3">
                            <a href="{{ route('home') }}#ninety" class="text-white">{{ trans('msg.footer3') }}</a>
                        </li>
                         <li class="mt-3">
                            <a href="{{ route('home') }}#package" class="text-white">{{ trans('msg.footer4') }}</a>
                         </li>
                        <li class="mt-3">
                            <a href="{{ route('home') }}#about" class="text-white">{{ trans('msg.footer5') }}</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('home') }}#why-bal" class="text-white">{{ trans('msg.footer6') }}</a>
                        </li>
                        <li class="mt-3">
                            <a href="https://lightfinder.buyanylight.com/buyer/register" class="text-white">{{ trans('msg.footer7') }}</a>
                        </li>
                         <li class="mt-3">
                            <a href="https://lightfinder.buyanylight.com" class="text-white">{{ trans('msg.footer8') }}</a>
                         </li>
                        <li class="mt-3">
                            <a href="{{ route('downloads') }}" class="text-white">{{ trans('msg.footer9') }}</a>
                        </li>
                         <li class="mt-3">
                            <a href="{{ route('buyer-faq') }}" class="text-white">{{ trans('msg.footer10') }}</a>
                         </li>
                     </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="text-white font-weight-bold">{{ trans('msg.footer11') }}</h5>
                    <ul class="list-group footer-list">
                         <li class="mt-3">
                            <a href="{{ route('seller') }}" class="text-white">{{ trans('msg.footer12') }}</a>
                         </li>
                        <li class="mt-3">
                            <a href="https://lightfinder.buyanylight.com/supplier/register" class="text-white">{{ trans('msg.footer7') }}</a>
                        </li>
                        <li class="mt-3">
                            <a href="https://lightfinder.buyanylight.com" class="text-white">{{ trans('msg.footer8') }}</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('seller-faq') }}" class="text-white">{{ trans('msg.footer10') }}</a>
                         </li>
                     </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="text-white font-weight-bold">{{ trans('msg.footer15') }}</h5>
                    <ul class="list-group footer-list">
                        <li class="mt-3">
                            <a href="{{ route('investor') }}" class="text-white">{{ trans('msg.footer16') }}</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('ieo') }}" class="text-white">{{ trans('msg.footer17') }}</a>
                        </li>
                     </ul>
                </div>
                <div class="col-md-12 mt-5">
                    <p style="font-size: 10px; color: white;">
                    {{ trans('msg.footer18') }}
                    </p>
                </div>
               <!--  <div class="col-md-2">
                    <h5 class="text-white font-weight-bold">Media</h5>
                    <ul class="list-group footer-list">
                        <li class="mt-3">
                            <a href="{{ route('downloads') }}" class="text-white">Downloads</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('videos') }}" class="text-white">Videos</a>
                        </li>
                     </ul>
                </div> -->
            </div>
            <hr class="bg-white">
            <div class="row">
                <div class="col-md-12 text-right text-white mt-2">
                    <div class="mr-2" style="font-size: 12px;">
                        <div>
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('terms') }}" class="text-white">{{ trans('msg.footer21') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('privacy') }}" class="text-white">{{ trans('msg.footer22') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© BuyAnyLight 2019
                                </div>
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>