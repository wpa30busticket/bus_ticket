@extends('layouts/bus')
@section('title', 'Bus Ticket')
@section('content')
	<div class="search-box">
		<div class="container" id="header">
			<form>
			  <div class="form-group row">
			    <label for="from" class="col-sm-2 col-form-label" id="from-to">Leaving From</label>
			    <div class="col-sm-4">
			      <select class="form-control text-my" name="sourceId" id="sourceId" tabindex="-1">
						<option class="text-my" value="">--- Select ---</option>

						<option class="text-my" value="39 Phayagyi">

							39 Phayagyi

						</option>					

						<option class="text-my" value="Tike Chaung">

							Tike Chaung

						</option>

						<option class="text-my" value="Tilin">

							Tilin

						</option>

						<option class="text-my" value="Toungup">

							Toungup

						</option>

						<option class="text-my" value="Wathtikan">

							Wathtikan

						</option>

						<option class="text-my" value="Waw">

							Waw

						</option>

						
					</select>
			</div>
			    <label for="to" class="col-sm-2 col-form-label" id="from-to">Going To</label>
			    <div class="col-sm-4">
			      <select class="form-control text-my" name="sourceId" id="sourceId" tabindex="-1">
						<option class="text-my" value="">--- Select ---</option>

						<option class="text-my" value="39 Phayagyi">

							39 Phayagyi

						</option>					

						<option class="text-my" value="Tike Chaung">

							Tike Chaung

						</option>

						<option class="text-my" value="Tilin">

							Tilin

						</option>

						<option class="text-my" value="Toungup">

							Toungup

						</option>

						<option class="text-my" value="Wathtikan">

							Wathtikan

						</option>

						<option class="text-my" value="Waw">

							Waw

						</option>

						
					</select>
			    </div>
			  </div>
			</form>
		</div>
	<!-- end of search box -->

	<div class="time-box">
		<div class="container">
			<div class="row" id="schdule">
				<div class="col-lg-3 col-md-3 col-sm-3" id="box1">
					<div class="side-box">
						<div class="Time">
							<h3>Ads are here</h3>
							<img src="{{ asset('img/ads.png') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9" id="box2">
					<div class="trip-result">
						<div class="card">
							<div class="msg">Morning Bus</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="box">
										<h2>
											08:00 AM

											Standard

										</h2>
										<p>

											Yangon-Monywa

										</p>
										<p>
											<span>Departs:</span> Mar 11, 08:00 AM
											<br>
											<span>Arrives:</span> Mar 11, 08:00 PM
											&nbsp;
											<span class="text-my">Duration:</span> 12 Hours
										</p>
									</div>
								</div>
								<div class="col-md-3 col-xs-5">
									<div class="box margin-top-sm">
										<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
									</div>

								</div>
								<div class="col-md-3 col-xs-7 text-right">
									<div class="box box-border">
										<p class="rate">13,500 <span>MMK/Seat</span></p>
										<p>Total: 40,500 MMK</p>
										<a href="{{ route('bus.seats')}}" class="btn btn-danger" id="seat"> select seat</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- first -->

					<div class="trip-result">
						<div class="card">
							<div class="msg">Morning Bus</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="box">
										<h2>
											08:00 PM 
											<span> - </span>

											Standard

										</h2>
										<p>

											Yangon-Monywa

										</p>
										<p>
											<span>Departs:</span> Mar 11, 08:00 AM
											<br>
											<span>ArrivMar 12, 07:00 AMMar 11, 08:00 PM
												&nbsp;
												<span class="text-my">Duration:</span> 12 Hours
											</p>
										</div>
									</div>
									<div class="col-md-3 col-xs-5">
										<div class="box margin-top-sm">
											<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
										</div>

									</div>
									<div class="col-md-3 col-xs-7 text-right">
										<div class="box box-border">
											<p class="rate">13,500 <span>MMK/Seat</span></p>
											<p>Total: 40,500 MMK</p>
											<a href="{{ route('bus.seats')}}" class="btn btn-danger" id="seat"> select seat</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- second -->
						<div class="trip-result">
							<div class="card">
								<div class="msg">Evening Bus</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<div class="box">
											<h2>
												06:00 PM
												<span> - </span>

												Standard

											</h2>
											<p>

												Yangon-Monywa

											</p>
											<p>
												<span>Departs:</span> Mar 11, 06:00 PM
												<br>
												<span>Arrives:</span>Mar 12, 05:00 AM
												&nbsp;
												<span class="text-my">Duration:</span>11 Hours
											</div>
										</div>
										<div class="col-md-3 col-xs-5">
											<div class="box margin-top-sm">
												<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
											</div>

										</div>
										<div class="col-md-3 col-xs-7 text-right">
											<div class="box box-border">
												<p class="rate">13,500 <span>MMK/Seat</span></p>
												<p>Total: 40,500 MMK</p>
												<a href="{{route('bus.seats')}}" class="btn btn-danger" id="seat"> select seat</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- third -->
							<div class="trip-result">
								<div class="card">
									<div class="msg">Evening Bus</div>
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="box">
												<h2>
													06:00 PM
													<span> - </span>

													Standard

												</h2>
												<p>

													Yangon-Monywa

												</p>
												<p>
													<span>Departs:</span> Mar 11, 06:00 PM
													<br>
													<span>Arrives:</span>Mar 12, 05:00 AM
													&nbsp;
													<span class="text-my">Duration:</span>11 Hours
												</div>
											</div>
											<div class="col-md-3 col-xs-5">
												<div class="box margin-top-sm">
													<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
												</div>

											</div>
											<div class="col-md-3 col-xs-7 text-right">
												<div class="box box-border">
													<p class="rate">13,500 <span>MMK/Seat</span></p>
													<p>Total: 40,500 MMK</p>
													<a href="select.html" class="btn btn-danger" id="seat"> select seat</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- fourth -->
							</div>

						</div>

						
					</div>
				</div>
		@endsection