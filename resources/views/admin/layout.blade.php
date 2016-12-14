<!DOCTYPE html>
<html>
<head>
	@include('admin.include.library-top')
	@yield('library-top')
</head>
	<body>
	<section class="body">
			@include('admin.include.header')

			<div class="inner-wrapper">
				@include('admin.include.left_sidebar')
				<section role="main" class="content-body">

					<header class="page-header">
						<h2>{{isset($title)?$title:''}}</h2>
					</header>

					@yield('content')
					{{--Dibawah ini sample isi content--}}
					{{--<!-- start: page -->
					<div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<section class="panel">
								<div class="panel-body">
									<div class="row">

									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->--}}

					@include('admin.include.footer')

				</section>
			</div>
			@yield('library-bottom')
			@include('admin.include.library-bottom')
	</section>	
	</body>
</html>