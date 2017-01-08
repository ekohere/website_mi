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

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">About Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>About Me</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
								<div>
									<span class="img-thumbnail">
										<img alt="" height="300" class="img-responsive" src="{{asset('assets/frontend/img/team/team-3.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail">
										<img alt="" height="300" class="img-responsive" src="{{asset('assets/frontend/img/team/team-9.jpg')}}">
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">

							<<h2 class="mb-none">Manajemen<strong>Informatika</strong></h2>
							<h5 class="heading-primary">Politeknik Pertanian Negeri Samarinda</h5>

							<hr class="solid">

							<p>Menjadikan program studi Manajemen Informatika yang memiliki keahlian dalam Implementasi Aplikasi di bidang Multimedia dan Berbasis Website, Keahlian dan Keterampilan dengan berbasis kepada teknologi informasi dan kewirausahaan, serta berkomitmen tinggi kepada mutu dan berwawasan global.</p>

							<ul class="list list-icons">
								<li><i class="fa fa-check"></i> Full WI-FI.</li>
								<li><i class="fa fa-check"></i> Alat Praktek.</li>
								<li><i class="fa fa-check"></i> Lab. Komputer.</li>
							</ul>

						</div>
					</div>
					
					

				<section class="parallax section section-parallax section-center" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mt-lg mb-none" data-plugin-options='{"items": 1, "loop": false}'>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>isi Tanggapan.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Yulianto</strong><span>Kepala Prodi </span></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>He provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				</div>

				

			@include('frontend.include.footer')

			@yield('library-bottom')
			@include('frontend.include.library-bottom')
	</div>
	</body>
</html>