<!DOCTYPE html>
<html>
<head>
	@include('frontend.include.library-top')
	@yield('library-top')
</head>
	<body>
	<div class="body">
			@include('frontend.include.header')

				
			@include('frontend.include.slide')

		<section class="section section-default">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="mt-lg">Manajemen <strong>Informatika</strong></h2>
								<p class="lead">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
								</p>
								<p class="mt-lg">
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel.
								</p>
							</div>
							<div class="col-md-6 mt-lg">
								<img class="img-responsive" src="{{asset('assets/frontend/img/device.png')}}" data-appear-animation="fadeInRight" alt="">
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
											<img src="{{asset('assets/frontend/img/projects/project-8.jpg')}}" class="img-responsive" alt="">
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
											<img src="{{asset('assets/frontend/img/projects/project-9.jpg')}}" class="img-responsive" alt="">
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
											<img src="{{asset('assets/frontend/img/projects/project-10.jpg')}}" class="img-responsive" alt="">
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
											<img src="{{asset('assets/frontend/img/projects/project-11.jpg')}}" class="img-responsive" alt="">
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
											<img src="{{asset('assets/frontend/img/projects/project-12.jpg')}}" class="img-responsive" alt="">
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
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-2.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-3.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-4.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-5.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-6.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-4.png')}}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{asset('assets/frontend/img/logos/logo-2.png')}}" alt="">
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