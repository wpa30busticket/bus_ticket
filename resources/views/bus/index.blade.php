@extends('layouts/bus')
@section('title', 'Bus Online Booking')
@section('content')
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
			<select name="route[]" class="form-control select2">
				<option value="">Select a location</option>
								@foreach($townships as $township)
								<option class="text-my"  value="{{$township->id}}" {{ (request('from') == $township->id)? 'selected' : '' }}>
									{{$township->name}}
								</option>
								@endforeach
			</select>
			<label for="Going to:">Going to:</label>
			<select name="route[]" class="form-control select2">
				<option value="">Select a location</option>
								@foreach($townships as $township)
								<option class="text-my"  value="{{$township->id}}" {{ (request('to') == $township->id)? 'selected' : '' }}>
									{{$township->name}}
								</option>
								@endforeach
			</select><br><br>
			<button class="btn btn-success">Submit</button>
		</div>
	</form>

			</div>
			<div class="col-md-4 text-center" id="one">
				<img src="img/telenor.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<div class="container">
			<section id="portfolio">
				<h2 class="section-title text-center text-uppercase">Our Partners</h2>
				<div class="row" id="portfolio-wrapper">
					<div class="col-lg-2 col-md-6 portfolio-item filter-app">
						<a href="">
							<img src="img/kbz.jpeg" alt="">
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
									<span>Thank</span>
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
							</div>>
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
					
				</section>
			</div>
			<!-- end of partners -->



<div class="container">
				<section id="team">
					<h2 class="section-title text-center text-uppercase"> Our Team</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="member">
								<img class="img-fluid" alt="Responsive image" src="img/Htoo.jpg" alt="" width="100%">
								<p class="text-center">Thaw Zin Htoo <br>03/10/1997</p>
								<div class="social text-center">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-google-plus"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="member">
								<img class="img-fluid" alt="Responsive image" src="img/Min.jpg" alt="" width="80%">
								<p class="text-center">Min Thu <br>25/05/1990</p>
								<div class="social text-center">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-google-plus"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="member">
								<img class="img-fluid" alt="Responsive image" src="img/zar.jpg" alt="" width="80%">
								<p class="text-center">Zar Zar Aung <br>30/5/1997</p>
								<div class="social text-center" >
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-google-plus"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- end of team -->
@endsection