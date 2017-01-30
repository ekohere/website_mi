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
									<li class="active">Gallery</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Image Gallery</h1>
							</div>
						</div>
					</div>
			</section>	
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<h2 class="mb-none">Image Gallery</h2>
							<p>Uploaded Images are Shown Here</p>

							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">

						<h4>Default</h4>

							<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
								<li data-option-value="*" class="active"><a href="#">Show All</a></li>
								<li data-option-value=".websites"><a href="#">Websites</a></li>
								<li data-option-value=".logos"><a href="#">Logos</a></li>
								<li data-option-value=".brands"><a href="#">Brands</a></li>
							</ul>

							<hr>
						</div>
					</div>
				</div>

				<ul class="image-gallery sort-destination full-width">
					<li class="isotope-item">
						<div class="image-gallery-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										 @foreach ($images as $image)
										<img src="uploads/{{ $image->photo}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">{{ $image->title }}</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
										@endforeach
									</span>
								</span>
							</a>
						</div>
					</li>
					
				</ul>

				
		</div>
			@include('frontend.include.footer')

			@yield('library-bottom')
			@include('frontend.include.library-bottom')
	</div>
	</body>
</html>