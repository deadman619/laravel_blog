<!DOCTYPE html>
<html lang="en">
<!-- Create controller and database using php artisan make:model -mcr posts -->
<!-- Update the database with php artisan migrate -->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Your blog &copy;</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navbar -->
		@include('blog_theme.partials.navbar')
    @include('blog_theme.partials.information')
    <!-- Page Content -->
    <div class="container" style='min-height: 750px;'>
      <div class="row mt-5">
        
      	@yield('content')
		    @include('blog_theme.partials.sidebar')
		  </div>
   </div>

   <!-- Footer -->
		@include('blog_theme.partials.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

  </body>
</html>
