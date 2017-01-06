<!DOCTYPE html>
<html>
<head>
	@include('frontend.include.library-top')
	@yield('library-top')
</head>
	<body>
	<div class="body">
			@include('frontend.include.header')

			@include('frontend.include.main')

			@include('frontend.include.footer')

			@yield('library-bottom')
			@include('frontend.include.library-bottom')
	</div>
	</body>
</html>