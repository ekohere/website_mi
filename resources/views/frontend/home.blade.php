<!DOCTYPE html>
<html>
<head>
	@include('frontend.include.library-top')
	@yield('library-top')
</head>
	<body>
	<div class="body">
			@include('frontend.include.header')

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
						<ul>
							<li data-transition="fade">

								<img src="img/slides/slide-corporate-6.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="177"
									data-y="180"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border-light.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="227"
									data-y="180"
									data-start="500"
									data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption"
									data-x="480"
									data-y="180"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border-light.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="135"
									data-y="210"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>

								<div class="tp-caption bottom-label"
									data-x="185"
									data-y="280"
									data-start="2000"
									data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>
								
							</li>
							<li data-transition="fade">

								<img src="img/slides/slide-corporate-5.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption featured-label"
									data-x="center"
									data-y="210"
									data-start="500"
									style="z-index: 5"
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;">WELCOME TO PORTO</div>

								<div class="tp-caption bottom-label"
									data-x="center"
									data-y="270"
									data-start="1000"
									data-transform_idle="o:1;"
									data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									style="font-size: 23px; line-height: 30px;"
									data-elementdelay="0.05">The #1 Selling HTML Site Template on ThemeForest</div>

							</li>
						</ul>
					</div>
				</div>
				
				<section class="section section-default">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="mt-lg">Premium <strong>Features</strong></h2>
								<p class="lead">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
								</p>
								<p class="mt-lg">
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel.
								</p>
							</div>
							<div class="col-md-6 mt-lg">
								<img class="img-responsive" src="img/device.png" data-appear-animation="fadeInRight" alt="">
							</div>
						</div>
					</div>
				</section>
				
								<section class="section mt-xl pb-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h2 class="mb-xl"><strong>Projects</strong> &amp; <strong>Clients</strong></h2>
							</div>
						</div>
					</div>
					<ul class="image-gallery sort-destination full-width mb-none">
						<li class="isotope-item">
							<div class="image-gallery-item mb-none">
								<a href="portfolio-single-project.html">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper">
											<img src="img/projects/project-8.jpg" class="img-responsive" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Project Title</span>
												<span class="thumb-info-type">Project Type</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</li>
						<li class="isotope-item">
							<div class="image-gallery-item mb-none">
								<a href="portfolio-single-project.html">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper">
											<img src="img/projects/project-9.jpg" class="img-responsive" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Project Title</span>
												<span class="thumb-info-type">Project Type</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</li>
						<li class="isotope-item">
							<div class="image-gallery-item mb-none">
								<a href="portfolio-single-project.html">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper">
											<img src="img/projects/project-10.jpg" class="img-responsive" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Project Title</span>
												<span class="thumb-info-type">Project Type</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</li>
						<li class="isotope-item">
							<div class="image-gallery-item mb-none">
								<a href="portfolio-single-project.html">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper">
											<img src="img/projects/project-11.jpg" class="img-responsive" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Project Title</span>
												<span class="thumb-info-type">Project Type</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</li>
						<li class="isotope-item">
							<div class="image-gallery-item mb-none">
								<a href="portfolio-single-project.html">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper">
											<img src="img/projects/project-12.jpg" class="img-responsive" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Project Title</span>
												<span class="thumb-info-type">Project Type</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</li>
					</ul>
				</section>

				<div class="container">
					<div class="row mt-xl">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-xl">Latest <strong>Posts</strong></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="recent-posts mt-xl">
								<article class="post">
									<div class="date">
										<span class="day">15</span>
										<span class="month">Jan</span>
									</div>
									<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.</p>
									<a class="btn btn-borders btn-default mt-md mb-xl">Read More</a>
								</article>
							</div>
						</div>
						<div class="col-md-4">
							<div class="recent-posts mt-xl">
								<article class="post">
									<div class="date">
										<span class="day">15</span>
										<span class="month">Jan</span>
									</div>
									<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.</p>
									<a class="btn btn-borders btn-default mt-md mb-xl">Read More</a>
								</article>
							</div>
						</div>
						<div class="col-md-4">
							<div class="recent-posts mt-xl">
								<article class="post">
									<div class="date">
										<span class="day">15</span>
										<span class="month">Jan</span>
									</div>
									<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.</p>
									<a class="btn btn-borders btn-default mt-md mb-xl">Read More</a>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="owl-carousel owl-theme mt-xl" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
								<div>
									<img class="img-responsive" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/logos/logo-2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@include('frontend.include.footer')

			@yield('library-bottom')
			@include('frontend.include.library-bottom')
	</div>
	</body>
</html>