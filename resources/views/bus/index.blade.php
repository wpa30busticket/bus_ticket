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
			<div class="col-lg-8 col-md-8 col-sm-8"   id="one" >
				<form action="{{route('bus.index')}}" method="get">
					<div class="row" id="aa">
						<div class="col-md-6">
							<label class="text-my">Leaving From</label>
							<select id="from" name="route[]" class="form-control chosen select2">
								<option value="">Select a location</option>
								@foreach($townships as $township)
								<option class="text-my"  value="{{$township->id}}" {{ (request('from') == $township->id)? 'selected' : '' }}>
									{{$township->name}}
								</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<label class="text-my">Going To</label>
							<select id="to" name="route[]" class="form-control chosen select2">
								<option value="">Select a location</option>
								@foreach($townships as $township)
								<option class="text-my"  value="{{$township->id}}" {{ (request('to') == $township->id)? 'selected' : '' }}>
									{{$township->name}}
								</option>
								@endforeach
							</select>						
						</div>
					</div>
					<div class="row" id="aa">
						<div class="col-md-6">
							<label class="text-my">Departure Date</label>
							<p><input type="text" id="datepicker"  name="departureDate" class="form-control datepicker" placeholder="Pick a date"></p>
						</div>
						<div class="col-md-3">
							<label class="text-my">Seats</label>
							<select id="numberOfTravellers" name="numberOfTravellers" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
					<div class="row" id="search">

						<div class="col-md-12 text-center">
							<button type="submit">Search</button>
						</div>
					</div>
				</form>

			</div>
			<div class="col-md-4 text-center" id="one">
				<img src="img/telenor.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<div class="container" id="route">
	<div class="row justify-content-center">
		<div class="header">
			<h1> Popular Routes</h1>
		</div>
	</div>
	<div class="row" id="popular-route">

		<div class="col-lg-3 col-md-3 col-sm-6" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/mandalay.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - Mandalay
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/bagan.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - Bagan
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/naypyitaw.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - NayPyiTaw
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/mawlammyaing	.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - Mawlammyaing
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="popular-route">

		<div class="col-lg-3 col-md-3 col-sm-6" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/mandalay.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - Mandalay
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/bagan.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - Bagan
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/naypyitaw.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - NayPyiTaw
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
			<div class="panel panel-default">
				<img class="img-location img-responsive" src="img/mawlammyaing	.jpg" alt="...">
				<div class="panel-body">
					<div class="text-center">
						<a class="btn btn-link" href="#">
							Yangon - Mawlammyaing
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of Routes -->


<div class="container" id="pay">
	<div class="row justify-content-center">
		<div class="header">
			<h1>Our Partners</h1>
		</div>
	</div>
	<div class="row" id="partner">

		<div class="col-sm-3" id="gallery">
			<a href="#"><img src="img/cb-pay1.jpeg" class="img-fluid image" alt="Our Member"></a>
			<div class="overlay">
				<div class="text">Thanks for your payment</div>
			</div>
		</div>
		<div class="col-sm-3" id="gallery">
			<a href="#"><img src="img/kbz-pay.jpeg" class="img-fluid" alt="Our Member"></a>
			<div class="overlay">
				<div class="text">Thanks for your payment</div>
			</div>
		</div>
		<div class="col-sm-3" id="gallery">
			<a href="#"><img src="img/mpu1.jpeg" class="img-fluid" alt="Our Member"></a>
			<div class="overlay">
				<div class="text">Thanks for your payment</div>
			</div>
		</div>
		<div class="col-sm-3" id="gallery">
			<a href="#"><img src="img/wavemoney.jpeg" class="img-fluid" alt="Our Member"></a>
			<div class="overlay">
				<div class="text">Thanks for your payment</div>
			</div>
		</div>
	</div>
</div>
<!-- end of partner -->


<div class="container" id="team">
	<div class="row justify-content-center">
		<div class="header">
			<h1>Our Team</h1>
		</div>
	</div>
	<div class="member-list">
		<div class="row" id="member-box">
			<div class="col-md-3" id="member">
				<img src="img/Htoo.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-md-9" id="info">
				<a href="#">
					<h1>Htoo</h1>
				</a>
				<p id="date">03/10/1997</p>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolores similique cupiditate saepe pariatur, quaerat illum quae eaque </span>
			</div>
		</div>
		<div class="row" id="member-box">
			<div class="col-md-9" id="info">
				<a href="#">
					<h1>Min</h1>
				</a>
				<p id="date">03/10/1991</p>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolores similique cupiditate saepe pariatur, quaerat illum quae eaque </span>
			</div>
			<div class="col-md-3" id="member">
				<img src="img/Min.jpg" class="img-fluid" alt="">
			</div>
		</div>
		<div class="row" id="member-box">
			<div class="col-md-3" id="member">
				<img src="img/zar.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-md-9" id="info">
				<a href="#">
					<h1>Zar</h1>
				</a>
				<p id="date">30/05/1997</p>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolores similique cupiditate saepe pariatur, quaerat illum quae eaque </span>
			</div>
		</div>

	</div>
</div>
<!-- end of team -->
@endsection