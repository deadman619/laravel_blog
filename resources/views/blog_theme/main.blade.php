<!DOCTYPE html>
<html lang="en">
<!-- Create controller and database using php artisan make:model -mcr posts -->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  </head>

  <body>

	<div>
		@include('blog_theme.partials.navbar')
	</div>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
      	@yield('content')
		@include('blog_theme.partials.sidebar')
		<div>
	</div>

	<div>
		@include('blog_theme.partials.footer')
	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  </body>
</html>
