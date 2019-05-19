@extends('layouts/bus')
@section('title', 'Bus Online Booking')
@section('content')
<<<<<<< HEAD
<div class="container" id="cover">
	<div class="row">				
	</div>
	<div id="heading">
		<a href="{{ route('bus.index') }}"><h1 class="text-center text-uppercase animated shake 4s"> Myanmar Bus Online Booking</h1></a>
	</div>		
</div>
<div class="page1"> 
	<div class="container" id="route-plan">
		<div class="row">
			<div class="col-lg-7 col-md-8 col-sm-8"   id="one" >
				<form action="{{route('bus.index')}}" method="get">
		<div class="form-group">
			<label for="Leaving from:">Leaving from:</label>
			<select name="route[]" class="form-control select2" required="">
				<option value="">Select a location</option>
								@foreach($townships as $township)
								<option class="text-my"  value="{{$township->id}}" {{ (request('from') == $township->id)? 'selected' : '' }}>
									{{$township->name}}
								</option>
								@endforeach
			</select>
			<label for="Going to:">Going to:</label>
			<select name="route[]" class="form-control select2" required="">
				<option value="">Select a location</option>
								@foreach($townships as $township)
								<option class="text-my"  value="{{$township->id}}" {{ (request('to') == $township->id)? 'selected' : '' }}>
									{{$township->name}}
								</option>
								@endforeach
			</select><br><br>
			<button class="btn btn-success">Submit</button>
=======
<div class="container">
		<div id="home">
			<a href="#"><h1 class="text-center text-uppercase"> Myanmar Bus Online Booking</h1></a>
>>>>>>> a0aa237d837f2d7c01e923235d13f0cbe731bdf7
		</div>
</div>
	<!-- end of cover -->

	<div class="container">
		<div class="row" id="route">
			<div class="col-lg-8 col-md-8 col-sm-8">
				<form action="#" method="get">
					<label class="text-my" id="from-to">Leaving From</label>
					<select id="from" name="route[]" class="form-control chosen select2">
						<option value="">Select a location</option>
						@foreach($townships as $township)
						<option class="text-my" value="{{$township->id}}" {{ (request('from') == $township->id)? 'selected' : '' }}>
							{{$township->name}}
						</option>
						@endforeach
					</select>
					<label class="text-my" id="from-to">Going To</label>
					<select id="to" name="route[]" class="form-control chosen select2">
						<option value="">Select a location</option>
						@foreach($townships as $township)
						<option class="text-my"  value="{{$township->id}}" {{ (request('to') == $township->id)? 'selected' : '' }}>
							{{$township->name}}
						</option>
						@endforeach
					</select>
					<div class="row" id="search">

						<div class="col-md-12 text-center">
							<button class="btn btn-success">Search</button>
						</div>
					</div>
				</form>

			</div>
			<div class="col-md-4 text-center" id="one">
				<img src="img/telenor.jpg" alt="">
			</div>
		</div>
		<!-- end of route -->
<div class="container"> 
			<section id="portfolio">
				<h2 class="section-title text-center text-uppercase">Our Partners</h2>
				<div class="row" id="portfolio-wrapper">
					<div class="col-lg-2 col-md-6 portfolio-item filter-app">
						<a href="">
							<img src="img/partner.jpg" alt="">
							<div class="details">
								<span>Thank for your payment</span>
							</div>
						</a>
					</div>

					<div class="col-lg-2 col-md-6 portfolio-item filter-app">
							<a href="">
								<img src="img/telenor.jpg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-6 portfolio-item filter-app">
							<a href="">
								<img src="img/telenor.jpg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

					<div class="col-lg-2 col-md-6 portfolio-item filter-web">
						<a href="">
							<img src="img/cb.jpeg" alt="">
							<div class="details">
								<span>Thank for your payment</span>
							</div>
						</a>
					</div>

					<div class="col-lg-2 col-md-6 portfolio-item filter-app">
						<a href="">
							<img src="img/telenor.jpg" alt="">
							<div class="details">
								<span>Thank for your payment</span>
							</div> 
						</a>
					</div>

					<div class="col-lg-2 col-md-6 portfolio-item filter-card">
						<a href="">
							<img src="img/wavemoney.jpeg" alt="">
							<div class="details">
								<span>Thank for your payment</span>
							</div>
						</a>
					</div>
					<div class="row" id="portfolio-wrapper">
						<div class="col-lg-2 col-md-6 portfolio-item filter-app">
							<a href="">
								<img src="img/kbz.jpeg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-6 portfolio-item filter-web">
							<a href="">
								<img src="img/cb.jpeg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-6 portfolio-item filter-app">
							<a href="">
								<img src="img/telenor.jpg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-6 portfolio-item filter-app">
							<a href="">
								<img src="img/telenor.jpg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-6 portfolio-item filter-app">
							<a href="">
								<img src="img/telenor.jpg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-6 portfolio-item filter-card">
							<a href="">
								<img src="img/wavemoney.jpeg" alt="">
								<div class="details">
									<span>Thank for your payment</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</section>
		</div>     
			<!-- end of partners -->



<div class="container">
				<section id="team">
					<h2 class="section-title text-center text-uppercase"> Our Team</h2>
					<div class="row">
						<div class="col-md-4 our-team">
							<div class="pic">
								<img class="img-fluid" alt="Responsive image" src="img/Htoo.jpg" alt="" width="100%">
								<ul class="social">
			                        <li><a href="#" class="fab fa-facebook"></a></li>
			                        <li><a href="#" class="fab fa-twitter"></a></li>
			                        <li><a href="#" class="fab fa-google-plus"></a></li>
			                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    			</ul>
							</div>
							<h5 class="text-center">Thaw Zin Htoo</h5>
						</div>
						<div class="col-md-4 our-team">
							<div class="pic">
								<img class="img-fluid" alt="Responsive image" src="img/Min.jpg" alt="" width="80%">
								<ul class="social">
			                        <li><a href="#" class="fab fa-facebook"></a></li>
			                        <li><a href="#" class="fab fa-twitter"></a></li>
			                        <li><a href="#" class="fab fa-google-plus"></a></li>
			                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    			</ul>
							</div>
							<h5 class="text-center">Min Thu</h5>
						</div>
						<div class="col-md-4 our-team">
							<div class="pic">
								<img class="img-fluid" alt="Responsive image" src="img/zar.jpg" alt="" width="80%">
								<ul class="social">
			                        <li><a href="#" class="fab fa-facebook"></a></li>
			                        <li><a href="#" class="fab fa-twitter"></a></li>
			                        <li><a href="#" class="fab fa-google-plus"></a></li>
			                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    			</ul>
							</div>
							<h5 class="text-center"> Zar Zar Aung</h5>

						</div>
					</div>
				</section>
			</div>
			<!-- end of team -->
@endsection