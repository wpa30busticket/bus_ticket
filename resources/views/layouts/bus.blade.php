<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/cerulean/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto|Source+Serif+Pro|Srisakdi" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	{{-- <link rel="stylesheet" href="https://resources/demos/style.css"> --}}

</head>
<body>
	<div class="container" id="navigation">
		<div class="container d-flex justify-content-end"  id="navi">			
			<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" id="move-right" href="{{ route('bus.index')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#route">Routes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#pay">Partners</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#team">Team</a>
						</li>
						
						<span></span>
						<span></span>
						<form class="form-inline">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</ul>
				</div>
			</nav>
		</div>
	</div>	 <!--end of navigation bar -->

	@yield('content')


	<div class="container" id="contact"> <!--footer-->
		<div class="row" id="foot">

			<div class="col-lg-4 col-md-4 col-sm-4" id="about">
				<h3 class="text-uppercase">About Us</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aliquam, perferendis eligendi,</span>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aliquam, perferendis eligendi,</span>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aliquam, perferendis eligendi,</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4" id="about">
				<h3 class="text-uppercase">Contact Info</h3>
				<span><i class="fas fa-phone"></i></span>
				<span></span>
				<span>09-259710510</span>
				<br>
				<br>
				<i class="fab fa-facebook-f 2x"></i>
				<span>find us on Facebook</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4" id="about">
				<h3 class="text-uppercase ">Navigation</h3>
				<a href="#cover" id="foot-nav"><i class="fas fa-angle-right"></i> Home</a><br>
				<a href="#route" id="foot-nav"><i class="fas fa-angle-right"></i> Route</a><br>
				<a href="#pay" id="foot-nav"><i class="fas fa-angle-right"></i> Partners</a><br>
				<a href="#team" id="foot-nav"><i class="fas fa-angle-right"></i> Team</a><br>
				<a href="#contact" id="foot-nav"><i class="fas fa-angle-right"></i>Contact</a>
			</div>
		</div>
	</div> <!--end of footer-->	

		<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('css/app.js') }}"></script>
		<script src="{{ asset('bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('bower_components/select2/dist/js/select2.js') }}"></script>
		<script>
			$(function() {
				$('#datepicker').datepicker();
				$('.select2').select2();
			});
		</script>
	</body>
	</html>