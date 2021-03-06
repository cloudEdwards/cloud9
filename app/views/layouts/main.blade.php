<html>
<head>
	<title>Cloud9 Computing</title>

	{{-- Bootstrap Mobile first metatag --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{{-- Favicon --}}
	<link rel="icon" href="favicon.ico" type="image/x-icon" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Google Fonts -->

	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!-- SASS user stylesheets using gulp-autoprefixer and gulp-minify-css CSS -->

	<link rel="stylesheet" type="text/css" href="css/jumbotron.css">

	<link rel="stylesheet" type="text/css" href="css/contact.css">

	{{-- Main --}}

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	
	<link rel="stylesheet" type="text/css" href="css/pricing.css">

	<link rel="stylesheet" type="text/css" href="css/override.css">



</head>
<body>

	@yield('top-banner')

	@include('layouts.partials.nav')

	@include('layouts.partials.messages')

	@yield('content')


	<footer class="footer">
      <div class="container">
   
		<ul class="list-inline">
		  <a href="/"><li class="btn btn-default">Home</li></a>
		  <a href="/pricing"><li class="btn btn-default">Pricing</li></a>
		  <a href="/contact"><li class="btn btn-default">Contact</li></a>
		  <a href="/portfolio"><li class="btn btn-default">Portfolio</li></a>
		 
		</ul>
		<div>Copyright&copy; Cloud Edwards <?php echo date('Y'); ?></div>
	  </div>
    </footer>




	<!-- JQuery -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!-- ScrollTo -->
	{{ HTML::script('js/scrollTo/scrollTo.js'); }}
	
	<!--  jquery script-->
	<script src="js/main.js"></script>


	


</body>
</html>