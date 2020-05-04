@extends('layouts.mobile-layout')

@section('content')
<div class="all-contents">
	<div class="section1">
		<div class="h-100 d-flex align-items-start justify-content-center container text-white" style="padding-top: 5rem;">
			<div class="w-100 text-center">
				<h1 class="header-phrase"><b>{{ trans('msg.section1_header1')}}</b></h1>
				<p class="header-sentence">{{ trans('msg.section1_header2')}}</p>
				<div class="container text-center pb-2 mt-3 mb-3">
				
					<a href="https://icobench.com/ico/buyanylight-bal" 
					target="_blank" rel="nofollow" title="BuyAnyLight (BAL) on ICObench">					
						<img border="0" src="{{Util::assetUrl('images/ieo/partners/icobench.png')}}" 						
						style="height: 60px; margin-bottom: -15px; margin-right: 5px;" 
						alt="BuyAnyLight (BAL) ICO rating"/>
					</a>
					
					<a href="https://icomarks.com/ico/buyanylight" 
					target="_blank" rel="nofollow" title="BuyAnyLight ICO">
						<img border="0" src="{{Util::assetUrl('images/ieo/partners/icomarks.svg')}}"
						style="height: 60px; margin-bottom: -15px; margin-left: 5px;" 
						alt="BuyAnyLight ICO Rating"/>
					</a>
				</div>
				<div class="row pt-2">
					<div class="col-12">
						<div class="text-center">
							<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL w-100">
								<small>
									{{ trans('msg.section3_heading') }}
								</small>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a data-fancybox  href="https://www.youtube-nocookie.com/embed/aaJQLTaSgLk?rel=0" class="btn btn-BAL w-100 fancybox">
								<small>
									{{ trans('msg.section1_video2') }}
								</small>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a href="{{ route('ieo') }}" class="btn btn-BAL w-100">
								<small>
								{{ trans('msg.section1_button3') }}
								</small>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight.pdf') }}" 
							target="_blank" 		            
							class="btn btn-BAL w-100">
								<small>
									<i class="far fa-file-pdf mr-2"></i>
									{{ trans('msg.section1_button1') }}
								</small> 
							</a>                    
						</div>
					</div>
					<div class="col-6">
						<div class="text-center pt-2">
							<a href="{{ Util::assetUrl('one-pagers/BuyAnyLight-IEO.pdf') }}" 
							target="_blank" 		            
							class="btn btn-BAL w-100">
								<small>
									<i class="far fa-file-pdf mr-2"></i>
									{{ trans('msg.section1_button2') }}
								</small>
							</a>                    
						</div>
					</div>
				</div>
				<div>
					<img src="{{ Util::assetUrl('images/main-image.png') }}" alt="" width="100%">
				</div>
			</div>
		</div>
	</div>
	<div class="section2 pt-5 pb-5" id="all-packages">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card card-body text-center">
						<div class="text-center">
							<img src="{{ Util::assetUrl('images/finder-icon.png') }}" alt="" width="40%">
						</div>
						<div class="card-contents pt-3">
							<h5>
								<b>{{ trans('msg.section2_lightfinder') }}</b>
							</h5>
							<p>{{ trans('msg.section2_lightfinder_desc') }}</p>
							<p> {{ trans('msg.section2_lightfinder_desc1') }}
							</p>
							<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
								<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section2_video') }}</b>	
							</a><br>
							<a href="#finder" class="btn btn-BAL" style="font-size: 13px;">
								<b>{{ trans('msg.section2_lightfinder_btn') }}</b>	
							</a>
							</div>
						</div>
					</div>
					<div class="col-12 pt-3">
						<div class="card card-body text-center">
							<div class="text-center">
								<img src="{{ Util::assetUrl('images/home-icon.png') }}" alt="" width="40%">
							</div>
							<div class="card-contents pt-3">
								<h5>
									<b>{{ trans('msg.section2_myhome') }}</b>
								</h5>
								<p>{{ trans('msg.section2_myhome_desc') }}</p>
								<p>{{ trans('msg.section2_myhome_desc1') }}</p>
								<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
									<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section2_video') }}</b>	
								</a>
								<a href="#home" class="btn btn-BAL" style="font-size: 13px;">
									<b>{{ trans('msg.section2_myhome_btn') }}</b>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 pt-3">
						<div class="card card-body text-center">
						<div class="text-center">
							<img src="{{ Util::assetUrl('images/tower-icon.png') }}" alt="" width="40%">
						</div>
						<div class="card-contents pt-3">
							<h5>
								<b>{{ trans('msg.section2_mytower') }}</b>
							</h5>
							<p>{{ trans('msg.section2_mytower_desc') }}</p>
							<p>{{ trans('msg.section2_mytower_desc1') }}</p>
							<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
								<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section2_video') }}</b>	
							</a><br>
							<a href="#tower" class="btn btn-BAL" style="font-size: 13px;">
								<b>{{ trans('msg.section2_mytower_btn') }}</b>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section3 pt-3 pb-5" id="about">
		<div class="container">
			<h4 class="text-center">
				<b>{{ trans('msg.section4_heading') }}</b>
			</h4>
			<div class="row pt-4">
				<div class="col-12">
					<img src="{{ Util::assetUrl('images/about-img.png') }}" alt="" width="100%">
				</div>
				<div class="col-12 pt-4">
					<p>
					{{ trans('msg.section4_desc') }}
					</p>
					<ul>
						<li>{{ trans('msg.section4_point1') }}</li>
						<li>{{ trans('msg.section4_point2') }}</li>
						<li>{{ trans('msg.section4_point3') }}</li>
						<li>{{ trans('msg.section4_point4') }}</li>
						<li>{{ trans('msg.section4_point5') }}</li>
					</ul>
					<p>
					{{ trans('msg.section4_desc2') }}
					</p>
					<a data-fancybox href="https://www.youtube.com/embed/aaJQLTaSgLk?rel=0&enablejsapi=1" class="btn btn-video w-100 text-center pl-0" style="font-size: 13px;">
						<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section4_video') }}</b>	
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section5 pt-5 pb-5" id="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/about(1).png') }}" alt="" width="60%">
					</div>
					<div class="pt-3 text-center">
						<b>{{ trans('msg.section5_heading1') }}</b> <br>
						<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
							<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section5_video1') }}</b>	
						</a>
					
						<p class="pt-2 text-justify">
						{{ trans('msg.section5_desc1') }}
						</p>
					</div>
				</div>
				<div class="col-12 pt-4">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/about(2).png') }}" alt="" width="60%">
					</div>
					<div class="pt-3 text-center">
						<b>{{ trans('msg.section5_heading2') }}</b>
						<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
							<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section5_video2') }}</b>	
						</a>
						<p class="pt-2 text-justify">
						{{ trans('msg.section5_desc2') }}
						</p>
					</div>
				</div>
				<div class="col-12 pt-4">
					<div class="text-center">
						<img src="{{ Util::assetUrl('images/about(3).png') }}" alt="" width="60%">
					</div>
					<div class="pt-3 text-center">
						<b>{{ trans('msg.section5_heading3') }}</b>
						<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class="btn btn-video" style="font-size: 13px;">
							<i class="fas fa-play"></i>&nbsp;<b>{{ trans('msg.section5_video3') }}</b>	
						</a>
						<p class="pt-2 text-justify">
						{{ trans('msg.section5_desc3') }}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section6 pt-5 pb-5" id="why-bal">
		<div class="container">
			<h4 class="text-center">
				<b>{!! trans('msg.section6_heading') !!}</b>
			</h4>
			<div class="row pt-4">
				<div class="col-12 text-center">
					<img src="{{ Util::assetUrl('images/about(4).png') }}" alt="" width="50%">
				</div>
				<div class="col-12 text-justify pt-4">
					<p>
						{{ trans('msg.section6_para1') }}
					</p>
					<p>
						{{ trans('msg.section6_para2') }}
					</p>
					<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class="btn btn-video w-100 text-center pl-0" style="font-size: 13px;">
						<i class="fas fa-play"></i>&nbsp;<b>LightFinder</b>	
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section7 pt-5 pb-5" id="works">
		<div class="container">
			<h4 class="text-center text-white">
				<b>{!! trans('msg.section7_heading1') !!}</b>
			</h4>
			<div class="row text-white pt-4">
				<div class="col-12">
					<img src="{{ Util::assetUrl('images/about(5).png') }}" alt="" width="90%">
				</div>
				<div class="col-12 pt-4 text-justify">
					<p>
						{{ trans('msg.section7_para1') }}
					</p>
					<p>
						{{ trans('msg.section7_para2') }}
					</p>
					<p>
					{{ trans('msg.section7_para3') }}
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section8 pt-5 pb-5" id="why-bal">
		<div class="container">
			<h3 class="text-center">
				<b>{{ trans('msg.section8_heading') }}</b>
			</h3>
			<p class="text-center">
				{{ trans('msg.section8_desc') }}
			</p>
			<p class="text-center">
				{{ trans('msg.section8_desc2') }}
			</p>
			<div class="card text-left">
				<div class="card-header why-header">
					<ul class="nav nav-pills card-header-pills nav-justified">
						<li class="nav-item  border border-white rounded-0">
							<a class="nav-link text-white active rounded-0" id="buyer-tab" data-toggle="tab" href="#buyer" role="tab" aria-controls="buyer" aria-selected="true">{{ trans('msg.section_buyer') }}</a>
						</li>
						<li class="nav-item border border-white rounded-0">
							<a class="nav-link text-white rounded-0" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="true">{{ trans('msg.section_seller') }}</a>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">     
						<ul class="list-group list-group-flush" style="padding: 0px; list-style-type: none;">
							<li class="list-group-item">{{ trans('msg.section_buyer1_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer2_header_mobile') }}</li>
							<li class="list-group-item">F{{ trans('msg.section_buyer3_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer4_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer5_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer6_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer7_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer8_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_buyer9_header_mobile') }}</li>
						</ul>       
					</div>
					<div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
						<ul class="list-group list-group-flush" style="padding: 0px; list-style-type: none;">
							<li class="list-group-item">{{ trans('msg.section_seller1_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller2_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller3_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller4_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller5_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller6_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller7_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller8_header_mobile') }}</li>
							<li class="list-group-item">{{ trans('msg.section_seller9_header_mobile') }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<img src="{{ Util::assetUrl('images/ieo/ieo-bg(2).png') }}" alt="" width="100%">
	</div>
	<div class="section9" id="packages">
		<div class="container" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
			<h3 class="text-center">
				<b>
				{{ trans('msg.section9_heading') }}
				</b>
			</h3>
			<p class="pt-3 text-center">{{ trans('msg.section9_heading_desc') }} <br><br>{!! trans('msg.section9_heading_desc2') !!}</p>
		</div>
		<div class="container pt-3 pb-5" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="50" data-aos-anchor-placement="top-bottom">
			<div class="card mb-3">
				<div class="card-body">
					<h4 class="card-title text-center">
						<b>
							{{ trans('msg.section9_trial_heading') }}
						</b>
					</h4>
					<p class="text-center">
						{{ trans('msg.section9_trial_desc') }}
					</p>
					<div class="text-center">
						<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
							{{ trans('msg.section9_trial_btn') }}
	
						</a>
					</div>
				</div>
			</div>
			<hr class="border-white">
			<div class=" card-deck pt-0 pb-0">
				<div class="card mr-2 lightfinder-div">
					<div class="card-body">
						<h4 class="card-title pt-1 pb-3">
							<b>	{{ trans('msg.section9_lightfinder_heading') }}
	</b>
						</h4>
						<a data-fancybox href="https://www.youtube.com/embed/k-zrKcgJf0Q?rel=0&enablejsapi=1" class=" text-white package-link">
						<div class="package-one">
							<div class="d-flex align-items-end pb-2 pl-2 h-100">
								<div>
									<i class="fab fa-youtube"></i> 
									<span>
										{{ trans('msg.section_play_video') }}
									</span>
								</div>
							</div>
						</div>
						</a>
						<div class="row pt-3">
							<div class="col-md-12">
								<!-- <hr class="border-black"> -->
								<button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
									<b>{{ trans('msg.section9_introduction') }}
	</b>
									<div class="introduction-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="introduction-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="introduction">
									<div class="card card-body ml-0 pl-0 border-0">
										{{ trans('msg.section9_introduction_desc1') }}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 finder2" type="button" data-toggle="collapse" data-target="#finder2" aria-expanded="false" aria-controls="finder2">
									<b>{{ trans('msg.section9_finest') }}</b>
									<div class="finder2-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="finder2-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="finder2">
									<div class="card card-body ml-0 pl-0 border-0">
										{{ trans('msg.section9_finest_desc') }}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 finder3" type="button" data-toggle="collapse" data-target="#finder3" aria-expanded="false" aria-controls="finder3">
									<b>{{ trans('msg.section9_level') }}</b>
									<div class="finder3-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="finder3-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="finder3">
									<div class="card card-body ml-0 pl-0 border-0">
										{{ trans('msg.section9_level_desc') }}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
									<b>{{ trans('msg.section9_pricing') }}</b>
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
											<div class="card-header pricing-header">
												<ul class="nav nav-pills card-header-pills nav-justified">
													<li class="nav-item  border border-white rounded-0">
														<a class="nav-link active rounded-0" id="mini-tab" data-toggle="tab" href="#mini" role="tab" aria-controls="mini" aria-selected="true" style=" {{ ($agent->is('IE')) ? 'height: 100%; font-size: 12px' : '' }}">{{ trans('msg.section_lightfinder1') }}</a>
													</li>
													<li class="nav-item border border-white rounded-0">
														<a class="nav-link rounded-0" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="true" style=" {{ ($agent->is('IE')) ? 'height: 100%; font-size: 12px' : '' }}">{{ trans('msg.section_lightfinder2') }}</a>
													</li>
													<li class="nav-item border border-white rounded-0">
														<a class="nav-link rounded-0" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true" style=" {{ ($agent->is('IE')) ? 'height: 100%; font-size: 12px' : '' }}">{{ trans('msg.section_lightfinder3') }}</a>
													</li>
												</ul>
											</div>
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="mini" role="tabpanel" aria-labelledby="mini-tab">     
													<div class="card-body pt-5 pb-3 text-center text-dark">
														<p class="card-text">
															<small>
															{{ trans('msg.section_minipackage_desc') }}
															</small>
														</p>
														<div class="pt-2 pb-2 text-left">
															<ul class="trial-list">
																<li>
																	<i class="fas fa-check"></i>
																	{{ trans('msg.section_lighfinder_point1') }}
	
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	{{ trans('msg.section_lighfinder_point4') }}
																	
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	{{ trans('msg.section_package_point9') }}
	
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	{{ trans('msg.section_package_point8') }}
	
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	{{ trans('msg.section_package_point3') }}
	
																</li>
																<li>
																	<i class="fas fa-check"></i>
																	{{ trans('msg.section_lighfinder_point6') }}
	
																</li>
																<li>
																	<i class="fas fa-times"></i>
																	{{ trans('msg.section_lighfinder_point9') }}
	
																	<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_lighfinder_point9_desc') }}" style="font-size: 12px; ">
																		<i class="fas fa-info-circle"></i>
																	</span>
																</li>
																<li>
																	<i class="fas fa-times"></i>
																	{{ trans('msg.section_package_point11') }}
	
																	<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point11_desc') }}" style="font-size: 12px; ">
																		<i class="fas fa-info-circle"></i>
																	</span>
																</li>
																<li>
																	<i class="fas fa-times"></i>
																	{{ trans('msg.section_package_point6') }}
																	<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point6_desc') }}" style="font-size: 12px; ">
																		<i class="fas fa-info-circle"></i>
																	</span>
																</li>
															</ul>
														</div>
														<p class="text-center">
															{{ trans('msg.section_lighfinder1_confirm') }}
														</p>
														<hr>
														<div class="text-center pt-2">
															<h5>{{ trans('msg.section_lighfinder1_monthly') }}</h5>
															<small>{{ trans('msg.section_lighfinder1_yearly') }}</small>   
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
													<div class="card-body pt-5 pb-3 text-center text-dark d-flex align-items-center">
														<div class="card-premium-contents">
															<p class="card-text">
																<small>
																	{{ trans('msg.section_premiumpackage_desc') }}
																</small>
															</p>
															<div class="pt-2 pb-2 text-left">
																<ul class="trial-list">
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point2') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point5') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point9') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point8') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point3') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point7') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point9') }}
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="
																		{{ trans('msg.section_lighfinder_point9_desc') }}" style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point11') }}
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point11_desc') }}" style="font-size: 12px; ">
																				<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point6') }}
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point6_desc') }}" style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																</ul>
															</div>
															<p class="text-center">{{ trans('msg.section_lighfinder2_confirm') }}</p>
															<hr>
															<div class="text-center pb-2">
																<h5>{{ trans('msg.section_lighfinder2_monthly') }}</h5>
																<small>{{ trans('msg.section_lighfinder2_yearly') }}</small>   
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
													<div class="card-body pt-5 pb-3 text-center text-dark d-flex align-items-center">
														<div class="card-standard-contents">
															<p class="card-text">
																<small>
																{{ trans('msg.section_standardpackage_desc') }}
																</small>
															</p>
															<div class="pt-2 pb-2 text-left">
																<ul class="trial-list">
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point3') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point5') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point9') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point8') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_package_point3') }}
																	</li>
																	<li>
																		<i class="fas fa-check"></i>
																		{{ trans('msg.section_lighfinder_point8') }}
																	</li>
																	<li>
																		<i class="fas fa-times"></i>
																		{{ trans('msg.section_lighfinder_point9') }}
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_lighfinder_point9_desc') }}" style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-times"></i>
																		{{ trans('msg.section_package_point11') }}
																		<span class=" " data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point11_desc') }}" style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																	<li>
																		<i class="fas fa-times"></i>
																		{{ trans('msg.section_package_point6') }}
																		<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point6_desc') }}" style="font-size: 12px; ">
																			<i class="fas fa-info-circle"></i>
																		</span>
																	</li>
																</ul>
															</div>
															<p class="text-center">{{ trans('msg.section_lighfinder3_confirm') }}</p>
															<hr>
															<div class="text-center pb-2">
																<h5>{{ trans('msg.section_lighfinder3_monthly') }}</h5>
																<small>{{ trans('msg.section_lighfinder3_yearly') }}</small>   
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pt-3">
									<div class="row">
										<div class="col-6">
											<a href="https://lightfinder.buyanylight.com/buyer/register" class=" w-100 btn btn-BAL">
												{{ trans('msg.section9_btn1') }}
											</a>
										</div>
										<div class="col-6">
											<a href="{{ Util::assetUrl('brochures/LightFinder_BAL.pdf') }}" class=" w-100 btn btn-BAL" target="_blank">
												{{ trans('msg.section9_btn2') }}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mr-2 ml-2 home-div">
					<div class="card-body">
						<h4 class="card-title pt-1 pb-3">
							<b>{{ trans('msg.section9_myhome_heading') }}</b>
						</h4>
						<a data-fancybox href="https://www.youtube.com/embed/rWX1qeigBMk?rel=0&enablejsapi=1" class="text-white package-link">
						<div class="package-two">
							<div class="d-flex align-items-end pb-2 pl-2 h-100">
								<div>
									<i class="fab fa-youtube"></i> 
									<span>
										{{ trans('msg.section_play_video') }}
									</span>
								</div>
							</div>
						</div>
						</a>
						<div class="row">
							<div class="col-md-12 pt-3">
								<!-- <hr class="border-black"> -->
								<button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
									<b>{{ trans('msg.section9_introduction') }}</b>
									<div class="introduction-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="introduction-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="introduction">
									<div class="card card-body ml-0 pl-0 border-0">
									{{ trans('msg.section9_introduction_desc2') }}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 home2" type="button" data-toggle="collapse" data-target="#home2" aria-expanded="false" aria-controls="home2">
									<b>{{ trans('msg.section9_perfect') }}</b>
									<div class="home2-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="home2-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="home2">
									<div class="card card-body ml-0 pl-0 border-0">
									{!! trans('msg.section9_perfect_desc') !!}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 home3" type="button" data-toggle="collapse" data-target="#home3" aria-expanded="false" aria-controls="home3">
									<b>{{ trans('msg.section9_next') }}</b>
									<div class="home3-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="home3-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="home3">
									<div class="card card-body ml-0 pl-0 border-0">
										{!! trans('msg.section9_next_desc1') !!}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
									<b>{{ trans('msg.section9_pricing') }}</b>
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
										   <div class="card-header pricing-header text-center text-white">
											   <h5 class=" mb-0 pb-0">
											   {{ trans('msg.section9_myhome_heading') }}
											   </h5>
											   <small>{{ trans('msg.section_package_desc') }}</small>
										   </div>
											<div class="card-body pt-5 pb-3">
												<p class="card-text text-center">
													<small>
													{{ trans('msg.section_myhomepackage_desc') }}
													</small>
												</p>
												<div class="pb-2 pt-2">
													<ul class="trial-list">
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point1') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point7') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point3') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point8') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point9') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point10') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point11') }}
															<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point11_desc') }}" style="font-size: 12px; ">
																<i class="fas fa-info-circle"></i>
															</span>
														</li>
														<li>
															<i class="fas fa-times"></i>
															{{ trans('msg.section_package_point6') }}
															<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point6_desc') }}" style="font-size: 12px; ">
																<i class="fas fa-info-circle"></i>
															</span>
														</li>
													</ul>
												</div>
												<p class="text-center">
													{{ trans('msg.section_confirm') }} <br>
													{{ trans('msg.section_home_confirm') }}
												</p>
												<hr>
												<div class="text-center pb-2">
													<h5>{!! trans('msg.section_subcribe_desc') !!}</h5> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pt-3">
									<div class="row">
										<div class="col-6">
											<a href="https://lightfinder.buyanylight.com/buyer/register" class=" w-100 btn btn-BAL">
												{{ trans('msg.section9_btn1') }}
											</a>
										</div>
										<div class="col-6">
											<a href="{{ Util::assetUrl('brochures/MyHome_BAL.pdf') }}" class=" w-100 btn btn-BAL" target="_blank">
												{{ trans('msg.section9_btn2') }}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card ml-2 tower-div">
					<div class="card-body">
						<h4 class="card-title pt-1 pb-3">
							<b>{{ trans('msg.section9_mytower_heading') }}</b>
						</h4>
						<a data-fancybox href="https://www.youtube.com/embed/IdrrtNgvDKo?rel=0&enablejsapi=1" class="text-white package-link">
						<div class="package-three">
							<div class="d-flex align-items-end pb-2 pl-2 h-100">
								<div>
									<i class="fab fa-youtube"></i> 
									<span>
										{{ trans('msg.section_play_video') }}
									</span>
								</div>
							</div>
						</div>
						</a>
						<div class="row pt-3">
							<div class="col-md-12">
								<!-- <hr class="border-black"> -->
								<button class="btn w-100 text-left pl-0 introduction" type="button" data-toggle="collapse" data-target="#introduction" aria-expanded="false" aria-controls="introduction">
									<b>{{ trans('msg.section9_introduction') }}</b>
									<div class="introduction-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="introduction-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="introduction">
									<div class="card card-body ml-0 pl-0 border-0">
										{{ trans('msg.section9_introduction_desc3') }}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 tower2" type="button" data-toggle="collapse" data-target="#tower2" aria-expanded="false" aria-controls="tower2">
									<b>{{ trans('msg.section9_save') }}</b>
									<div class="tower2-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="tower2-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="tower2">
									<div class="card card-body ml-0 pl-0 border-0">
									{{ trans('msg.section9_save_desc') }}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 tower3" type="button" data-toggle="collapse" data-target="#tower3" aria-expanded="false" aria-controls="tower3">
									<b>{{ trans('msg.section9_next') }}</b>
									<div class="tower3-down float-right">
										<i class="fas fa-angle-down"></i>
									</div>
									<div class="tower3-up float-right" style="display: none;">
										<i class="fas fa-angle-up"></i>
									</div>
								</button>
								<div class="collapse" id="tower3">
									<div class="card card-body ml-0 pl-0 border-0">
										{!! trans('msg.section9_next_desc2') !!}
									</div>
								</div>
								<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
									<b>{{ trans('msg.section9_pricing') }}</b>
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
											<div class="card-header text-center pricing-header text-white">
												<h5 class=" mb-0 pb-0">
												{{ trans('msg.section9_mytower_heading') }}
												</h5>
												<small>{{ trans('msg.section_package_desc') }}</small>
											</div>
											<div class="card-body pt-5 pb-3">
												<p class="card-text text-center">
													<small>
													{{ trans('msg.section_mytowerpackage_desc') }}
													</small>
												</p>
												<div class="pb-2 pt-2">
													<ul class="trial-list">
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point1') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point7') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point3') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point8') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point9') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point10_1') }}
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point11') }}
															<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point11_desc') }}" style="font-size: 12px; ">
																	<i class="fas fa-info-circle"></i>
															</span>
														</li>
														<li>
															<i class="fas fa-check"></i>
															{{ trans('msg.section_package_point6') }}
															<span class="" data-toggle="tooltip" data-placement="bottom" title="{{ trans('msg.section_package_point6_desc') }}" style="font-size: 12px; ">
																<i class="fas fa-info-circle"></i>
															</span>
														</li>
													</ul>
												</div>
												<p class="text-center">
													{{ trans('msg.section_confirm') }} <br>
													{{ trans('msg.section_tower_confirm') }}
												</p>
												<hr>
												<div class="text-center pb-2">
													<h5>{!! trans('msg.section_subcribe_desc') !!}</h5> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pt-3">
									<div class="row">
										<div class="col-6">
											<a href="https://lightfinder.buyanylight.com/buyer/register" class=" w-100 btn btn-BAL">
											{{ trans('msg.section9_btn1') }}
											</a>
										</div>
										<div class="col-6">
											<a href="{{ Util::assetUrl('brochures/MyTower_BAL.pdf') }}" class=" w-100 btn btn-BAL" target="_blank">
											{{ trans('msg.section9_btn2') }}
											</a>
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
	<div class="section10-main pb-5" id="add-ons">
		<div class="container">
			<h3 class="pt-5">
				<b>
					{{ trans('msg.section11_heading') }}
				</b>
			</h3>
			<p class="pt-3">
				{{ trans('msg.section11_desc') }}
			</p>
			<p>
				{{ trans('msg.section11_desc2') }}
			</p>
			<div class="row">
				<div class="col-md-4">
					<img src="{{ Util::assetUrl('images/lightdesign.jpg')}}" class="mt-3 w-100 section-10-img">
					<!-- <div class="w-100 general-lighting">
						<div class="container d-flex align-items-end h-100 pb-3">
							<a href="" class="btn btn-BAL">Book now</a>
						</div>
					</div> -->
					<h5 class="pt-3">
						<b>
							{{ trans('msg.section11_option1') }}
						</b>
					</h5>
					<div class="collapse" id="read-more">
						<div class="card card-body ml-0 pl-0 border-0">
							{{ trans('msg.section11_readmore1') }}
						</div>
					</div>
					<button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
						<b class="1-read-more">{{ trans('msg.section11_readmore') }}</b>
						<b  class="1-read-less" style="display: none;">{{ trans('msg.section11_readless') }}</b>
						<div class="read-more-down float-right">
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="read-more-up float-right" style="display: none;">
							<i class="fas fa-angle-up"></i>
						</div>
					</button>
					<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
						<b>{{ trans('msg.section11_pricing') }}</b>
						<div class="pricing-down float-right">
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="pricing-up float-right" style="display: none;">
							<i class="fas fa-angle-up"></i>
						</div>
					</button>
					<div class="collapse" id="pricing">
						<div class="card card-body ml-0 pl-0 border-0">
							{{ trans('msg.section11_pricing1') }}
						</div>
					</div>
					<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
						{{ trans('msg.section11_booknow') }}
					</a>
				</div>
				<div class="col-md-4">
					<img src="{{ Util::assetUrl('images/luxcalculation.jpg')}}" class="mt-3 w-100 section-10-img">
					<!-- <div class="w-100 general-lighting">
						<div class="container d-flex align-items-end h-100 pb-3">
							<a href="" class="btn btn-BAL">Book now</a>
						</div>
					</div> -->
					<h5 class="pt-3">
						<b>{{ trans('msg.section11_option2') }}</b>
					</h5>
					<div class="collapse" id="read-more">
						<div class="card card-body ml-0 pl-0 border-0">
							{{ trans('msg.section11_readmore2') }}
						</div>
					</div>
					<button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
						<b class="2-read-more">{{ trans('msg.section11_readmore') }}</b>
						<b  class="2-read-less" style="display: none;">{{ trans('msg.section11_readless') }}</b>
						<div class="read-more-down float-right">
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="read-more-up float-right" style="display: none;">
							<i class="fas fa-angle-up"></i>
						</div>
					</button>
					<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
						<b>{{ trans('msg.section11_pricing') }}</b>
						<div class="pricing-down float-right">
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="pricing-up float-right" style="display: none;">
							<i class="fas fa-angle-up"></i>
						</div>
					</button>
					<div class="collapse" id="pricing">
						<div class="card card-body ml-0 pl-0 border-0">
							{{ trans('msg.section11_pricing2') }}
						</div>
					</div>
					<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
						{{ trans('msg.section11_booknow') }}
					</a>
				</div>
				<div class="col-md-4">
					<img src="{{ Util::assetUrl('images/3dlightingdesign.jpg')}}" class="mt-3 w-100 section-10-img">
					<!-- <div class="w-100 general-lighting">
						<div class="container d-flex align-items-end h-100 pb-3">
							<a href="" class="btn btn-BAL">Book now</a>
						</div>
					</div> -->
					<h5 class="pt-3">
						<b>{{ trans('msg.section11_option3') }}</b>
					</h5>
					<div class="collapse" id="read-more">
						<div class="card card-body ml-0 pl-0 border-0">
							{{ trans('msg.section11_readmore3') }}
						</div>
					</div>
					<button class="btn w-100 text-left pl-0 read-more" type="button" data-toggle="collapse" data-target="#read-more" aria-expanded="false" aria-controls="read-more">
						<b class="3-read-more">{{ trans('msg.section11_readmore') }}</b>
						<b  class="3-read-less" style="display: none;">{{ trans('msg.section11_readless') }}</b>
						<div class="read-more-down float-right">
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="read-more-up float-right" style="display: none;">
							<i class="fas fa-angle-up"></i>
						</div>
					</button>
					<button class="btn w-100 text-left pl-0 pricing" type="button" data-toggle="collapse" data-target="#pricing" aria-expanded="false" aria-controls="pricing">
						<b>{{ trans('msg.section11_pricing') }}</b>
						<div class="pricing-down float-right">
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="pricing-up float-right" style="display: none;">
							<i class="fas fa-angle-up"></i>
						</div>
					</button>
					<div class="collapse" id="pricing">
						<div class="card card-body ml-0 pl-0 border-0">
							{{ trans('msg.section11_pricing3') }}
						</div>
					</div>
					<a href="https://lightfinder.buyanylight.com/buyer/register" class="btn btn-BAL">
						{{ trans('msg.section11_booknow') }}
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

