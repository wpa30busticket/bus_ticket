<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon-16x16.png') }}"/>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anton|Baloo+Bhai|Courgette|Macondo+Swash+Caps|Maiden+Orange|Old+Standard+TT|Orbitron|Roboto|Roboto+Slab" rel="stylesheet">


</head>
<body>
	<div class="container">
		<div id="navigation">
			<nav class="navbar navbar-expand-lg d-flex justify-content-end">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="{{ url('/') }}">
					<img class="logo" src="{{ asset('img/apple-icon-57x57.png') }}" sizes="48x48">
				</a>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#route">Routes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#pay">Partners</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#team">Team</a>
						</li>
						<form class="form-inline">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
					</ul>
				</div>
			</nav>

		</div>
	</div>
	<!-- end of navigation -->



	@yield('content')


	<div class="container">
		<div class="row" id="foot">
			<div class="col-lg-4 col-md-4 col-sm-4" id="about">
				<h5 class="text-uppercase">Contact Info</h5>
				<span><i class="fas fa-phone"></i></span>
				<span>09-259710510</span>
				<br>
				<i class="fab fa-facebook-f 2x"></i>
				<span>find us on Facebook</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4" id="about">
				<h5 class="text-uppercase ">Navigation</h5>
				<a href="#pay" id="foot-nav"><i class="fas fa-angle-right"></i>Route</a><br>
				<a href="#pay" id="foot-nav"><i class="fas fa-angle-right"></i> Partners</a><br>
				<a href="#team" id="foot-nav"><i class="fas fa-angle-right"></i> Team</a><br>
				<a href="#contact" id="foot-nav"><i class="fas fa-angle-right"></i>Contact</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4" id="about">
				<h5 class="text-uppercase">Newsletter</h5>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Email address" aria-label="Email address" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button">Sent</button>
					</div>
				</div>

			</div>
		</div>

	</div>
	<!-- end of footer -->

	<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}"></script>

	<script>
		$('select').change(function() {
			$(this)
			.siblings('select')
			.children('option[value=' + this.value + ']')
			.attr('disabled', true)
			.siblings().removeAttr('disabled');
		});
	</script>
</body>
</html>