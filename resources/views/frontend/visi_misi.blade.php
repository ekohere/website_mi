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
								<h1>Visi & Misi</h1>
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
										<img alt="" height="300" class="img-responsive" src="{{asset('assets/frontend/img/MI-2.jpg')}}">
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">

							<<h2 class="mb-none"><strong>Visi & Misi</strong></h2>
							<h5 class="heading-primary">MANAJEMEN INFORMATIKA</h5>

							<hr class="solid">

							<h5 class="heading-primary">Visi :</h5>
							<p>“Menjadi Program Studi Berbasis Teknologi Informasi Terapan yang unggul dan berdaya saing di Indonesia”</p>

							<h5 class="heading-primary">Misi :</h5>
							<ol>
							<li>Menyelenggarakan pendidikan tinggi pada strata Diploma 4 pada bidang teknologi informasi.</li>
							<li>Melaksanakan program pendidikan yang bersifat terapan dan mencetak lulusan Sarjana Sains Terapan yang terampil dalam bidang teknologi informasi.</li>
							<li>Melaksanakan penelitian terapan untuk kebutuhan masyarakakat di bidang teknologi informasi.
							</li>
							</ol>


							

						</div>
					</div>
					
					

				
				</div>

				

			@include('frontend.include.footer')

			@yield('library-bottom')
			@include('frontend.include.library-bottom')
	</div>
	</body>
</html>