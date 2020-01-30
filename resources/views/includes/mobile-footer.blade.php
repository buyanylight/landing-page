<footer class="bg-dark" id="footer">
	<div class="container">
		<div class="social icons pt-4 pb-4">
			<div class="row pb-3 text-center">
				<div class="col one-link">
       	        	<a href="http://www.youtube.com/c/BuyAnyLight" class="text-white" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://twitter.com/BuyAnyLight" class="text-white" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://www.instagram.com/buyanylight/" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://www.facebook.com/BuyAnyLight/" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://github.com/buyanylight" class="text-white" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col one-link">
                    <a href="https://www.reddit.com/r/BuyAnyLight/" class="text-white" target="_blank"><i class="fab fa-reddit-alien"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://bitcointalk.org/index.php?topic=5193049.0;topicseen" class="text-white" target="_blank"><i class="fab fa-bitcoin"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://t.me/buyanylight" class="text-white" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://medium.com/buyanylight" class="text-white" target="_blank"><i class="fab fa-medium-m"></i></a>
                </div>
                <div class="col one-link">
                    <a href="https://www.linkedin.com/company/buyanylight/" class="text-white" target="_blank"><i class="fab fa-linkedin-in"></i></a>
               </div>
			</div>
		</div>
	   	<hr class="m-0 border-light" style="border: 1px solid;">
			<div class="accordion-group">
                <div class="accordion-heading newsletter-btn">
                	<a class="accordion-toggle pt-4 pb-4 pl-3 text-white w-100 d-block" data-toggle="collapse" href="#newsletter">
                    	Newsletter
                    	<div class="newsletter-down float-right pr-4">
                  			<i class="fas fa-angle-down"></i>
                  		</div>
                  		<div class="newsletter-up float-right pr-4" style="display: none;">
                  			<i class="fas fa-angle-up"></i>
                  		</div>
                    </a>
               	</div>
	   			<hr class="m-0 border-light">
                <div id="newsletter" class="accordion-body collapse in">
                	<div class="accordion-inner">
                    	<div class="p-3 pb-4">
                        	<form  action="https://buyanylight.us3.list-manage.com/subscribe/post?u=22d8456f8db4bacaef7a16d53&amp;id=7b85cd9f3f" method="post" class="input-group mt-3" name="mc-embedded-subscribe-form" novalidate target="_blank">
                				<input type="email" name="EMAIL" class="form-control" placeholder="Your Email Address">
                				<div class="input-group-append">
                    				<button type="submit" class="btn btn-dark">
                    					<i class="fas fa-paper-plane"></i>
                    				</button>
                				</div>
            				</form>
                    	</div>
                 	</div>
                </div>
            </div>
		<hr class="m-0 border-light">
		<div class="accordion" id="accordion2">
			<div class="accordion-group">
                <div class="accordion-heading contact-btn">
                	<a class="accordion-toggle pt-4 pb-4 pl-3 text-white w-100 d-block" data-toggle="collapse" href="#contact">
                    	Contact
                    	<div class="contact-down float-right pr-4">
                  			<i class="fas fa-angle-down"></i>
                  		</div>
                  		<div class="contact-up float-right pr-4" style="display: none;">
                  			<i class="fas fa-angle-up"></i>
                  		</div>
                    </a>
               	</div>
	   			<hr class="m-0 border-light">
                <div id="contact" class="accordion-body collapse in">
                	<div class="accordion-inner">
                    	<div class=" p-3">
                        <p>Feel free to get in touch with us.</p>
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
                            	<button type="submit"  class="btn btn-dark w-100    send-message" disabled="disabled">Send Message</button>
                            </div>
                        </form>
                    </div>
                 	</div>
                </div>
            </div>
            <hr class="m-0 border-light">
            <div class="accordion-group">
                <div class="accordion-heading about-btn">
                    <a class="accordion-toggle pt-4 pb-4 pl-3 text-white w-100 d-block" data-toggle="collapse" href="#about">
                        About
                        <div class="about-down float-right pr-4">
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="about-up float-right pr-4" style="display: none;">
                            <i class="fas fa-angle-up"></i>
                        </div>
                    </a>
                </div>
                <hr class="m-0 border-light">
                <div id="about" class="accordion-body collapse in">
                    <div class="accordion-inner">
                        <ul class="footer-list m-0 text-white">
                            <li class="mt-3">
                                <a href="{{ route('home') }}#works" class="text-white">
                                    How it works                                    
                                </a>
                            </li>
                            <!-- <li class="mt-3">
                                <a href="">BAL vs. retail</a>
                            </li> -->
                            <li class="mt-3">
                                <a href="{{ route('m-package') }}" class="text-white" >Packages</a>
                            
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('m-about') }}" class="text-white">About us</a>
                            </li>
                            <li class="mt-3 mb-3">
                                <a href="{{ route('m-why-us') }}" class="text-white">
                                    Why BAL
                                </a>
                            </li>
                            <li class="mt-3 mb-3">
                                <a href="{{ route('downloads') }}" class="text-white">
                                    Media
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

	   		<hr class="m-0 border-light">
            <div class="accordion-group">
                <div class="accordion-heading buyer-btn">
                	<a class="accordion-toggle pt-4 pb-4 pl-3 text-white w-100 d-block" data-toggle="collapse" href="#buyer">
                    	Buyers
                    	<div class="buyer-down float-right pr-4">
                  			<i class="fas fa-angle-down"></i>
                  		</div>
                  		<div class="buyer-up float-right pr-4" style="display: none;">
                  			<i class="fas fa-angle-up"></i>
                  		</div>
                    </a>
               	</div>
	   			<hr class="m-0 border-light">
                <div id="buyer" class="accordion-body collapse in">
                	<div class="accordion-inner">
                    	<ul class="footer-list m-0 text-white">
                  			<li class="mt-3">
                  				<a href="https://lightfinder.buyanylight.com/buyer/register" class="text-white">
                  					Register
                  				</a>
                  			</li>
                  			<li class="mt-3">
                  				<a href="https://lightfinder.buyanylight.com/" class="text-white">
                  					Sign in
                  				</a>
                  			</li>
                  			<li class="mt-3 mb-3">
                  				<a href="{{ route('buyer-faq') }}" class="text-white">
                  					FAQ
                  				</a>
                  			</li>
                		</ul>
                 	</div>
                </div>
            </div>

	   		<hr class="m-0 border-light">
            <div class="accordion-group ">
            	<div class="accordion-heading seller-btn">
                	<a class="accordion-toggle pt-4 pb-4 pl-3 text-white w-100 d-block" data-toggle="collapse" href="#seller">
                  		Sellers
                  		<div class="seller-down float-right pr-4">
                  			<i class="fas fa-angle-down"></i>
                  		</div>
                  		<div class="seller-up float-right pr-4" style="display: none;">
                  			<i class="fas fa-angle-up"></i>
                  		</div>
                	</a>
              	</div>
	   			<hr class="m-0 border-light">
                <div id="seller" class="accordion-body collapse">
                	<div class="accordion-inner">
                    	<ul class="footer-list m-0 text-white">
                  			<li class="mt-3" >
                  				<a href="{{ route('seller') }}" class="text-white">
                  					Start today
                  				</a>
                  			</li>
                  			<li class="mt-3">
                  				<a href="https://lightfinder.buyanylight.com/supplier/register" class="text-white">
                  					Register
                  				</a>
                  			</li>
                  			<li class="mt-3" >
                  				<a href="https://lightfinder.buyanylight.com/" class="text-white">
                  					Sign in
                  				</a>
                  			</li>
                  			<li class="mt-3 mb-3">
                  				<a href="{{ route('seller-faq') }}" class="text-white">
                  					FAQ
                  				</a>
                  			</li>
                		</ul>
                    </div>
                </div>
            </div>

	   		<hr class="m-0 border-light">
            <div class="accordion-group">
                <div class="accordion-heading investor-btn ">
                	<a class="accordion-toggle text-white w-100 d-block pl-3 pt-4 pb-4" data-toggle="collapse" href="#investor">
                    	Investors
                    	<div class="investor-down float-right pr-4">
                  			<i class="fas fa-angle-down"></i>
                  		</div>
                  		<div class="investor-up float-right pr-4" style="display: none;">
                  			<i class="fas fa-angle-up"></i>
                  		</div>
                    </a>
                </div>
	   			<hr class="m-0 border-light" style=" border: 1px solid;">
                <div id="investor" class="accordion-body collapse">
                	<div class="accordion-inner">
                    	<ul class="footer-list m-0 text-white">
                        	<li class="mt-3">
                        		<a href="{{ route('investor') }}" class="text-white">
                        			Lets Talk
                        		</a>
                        	</li>
                        	<li class="mt-3 mb-3">
                        		<a href="{{ route('ieo') }}" class="text-white">
                        			IEO
                        		</a>
                        	</li>
                    	</ul>
                  	</div>
                </div>
            </div>

	   		{{-- <hr class="m-0 border-light"> --}}
       <!--      <div class="accordion-group">
                <div class="accordion-heading media-btn ">
                	<a class="accordion-toggle text-white w-100 d-block pl-3 pt-4 pb-4" data-toggle="collapse" href="#media">
                    	Media
                    	<div class="media-down float-right pr-4">
                  			<i class="fas fa-angle-down"></i>
                  		</div>
                  		<div class="media-up float-right pr-4" style="display: none;">
                  			<i class="fas fa-angle-up"></i>
                  		</div>
                    </a>
                </div>
	   			<hr class="m-0 border-light" style=" border: 1px solid;">
                <div id="media" class="accordion-body collapse">
                	<div class="accordion-inner">
                    	<ul class="footer-list m-0 text-white">
                        	<li class="mt-3">
                        		<a href="{{ route('downloads') }}" class="text-white">
                        			Downloads
                        		</a>
                        	</li>
                        	<li class="mt-3 mb-3">
                        		<a href="{{ route('videos') }}" class="text-white">
                        			Videos
                        		</a>
                        	</li>
                    	</ul>
                  	</div>
                </div>
            </div> -->

            <div class="terms-and-policy text-white pt-4 pb-4 text-right">
            	<div class="row">
            		<div class="col-2 help-icon" >
            			<a href="#footer" data-toggle="collapse" data-target="#contact" class="text-white">
            				<i class="fas fa-question-circle"></i>
            			</a>
            		</div>
            		<div class="col-2">
            			<a href="{{ route('terms') }}" class="text-white">
            				Terms
            			</a>
            		</div>
            		<div class="col-2">
            			<a href="{{ route('privacy') }}" class="text-white">
            				Policy
            			</a>
            		</div>
				</div>
				<div class="row">
					<p style="font-size: 10px;">
						RISK WARNING: Trading and investing in cryptocurrencies involves substantial risk of loss and is not suitable for all types of investors. Please make sure you are investing mindfully after understanding the nature, complexity and risks inherent in the trading of cryptocurrency. You should not purchase cryptocurrency unless you understand the extent of your exposure to potential loss. Cryptocurrencies price can be affected by many factors, including, but not limited to, national and international economic, financial, regulatory, political, terrorist, military, and other events. Extreme changes in price may occur at any time, resulting in a potential loss of value of your entire investment in cryptocurrencies, complete or partial loss of purchasing power, and difficulty or a complete inability to sell or exchange your currency. Please make sure you are not risking funds you can not afford to lose. In no event shall Billboard.ly will be liable to any loss or damage of any kind incurred as a result of the use of this site or the services found at this site. Licence number 5539. DOTCOM VENTURES FZE, UAQ Free Trade Zone, United Arab Emirates. Copyright © 2020 Buyanylight.com. All rights Reserved.
					</p>
				</div>
            </div>
       	</div>
	</div>
</footer>