@extends('layouts/bus')
@section('title', 'Seats' )
@section('content')

<div class="section section-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default" data-time-period="AM" data-operator-id="10">
					@if ( $message = Session::get('error'))
					<div class="alert alert-danger alert-block">
						<strong>{{ $message }}</strong>
					</div>
					@endif
					<div class="panel-heading text-my">
						Please select seats here.
					</div>
						<div class="panel-body">
							<div class="row" >
								<div class="seatsChart col-lg-10">
										<div class="seatRow">
									@foreach($seats->slice(0,4) as  $seat)
												<div id="1_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>		
										<div class="seatRow">									
									@foreach($seats->slice(4,4) as  $seat)
												<div id="2_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>
										<div class="seatRow">									
									@foreach($seats->slice(8,4) as  $seat)
												<div id="3_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>
										<div class="seatRow">									
									@foreach($seats->slice(12,4) as  $seat)
												<div id="4_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>
										<div class="seatRow">									
									@foreach($seats->slice(16,4) as  $seat)
												<div id="5_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>
										<div class="seatRow">									
									@foreach($seats->slice(20,4) as  $seat)
												<div id="6_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>
										<div class="seatRow">									
									@foreach($seats->slice(24,4) as  $seat)
												<div id="7_{{$seat->seat_no}}" title="" role="checkbox" value="10000" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											
										</div>

	
										<!-- <div class="seatRow">
											<div class="seatRowNumber">
												Row 2
											</div>
											<div id="2_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
											<div id="2_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
											<div id="2_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
											<div id="2_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
											<div id="2_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
											<div id="2_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
											<div id="2_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
											<div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div> -->

								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->

				<div class="col-md-4">
					<form action="{{ route('guest.login') }}" method="POST">
						@csrf

						<div class="panel panel-default">
							<div class="panel-heading text-my">
								Trip Information 

							</div>
							<div class="panel-body">

								<table class="table table-striped">
									<tbody>
										<tr>
											<td class="col-md-4 text-my">
												Route
											</td>
											<td class="col-md-8 text-my">
												{{ $route->fromTownship['name'] }}
												-
												{{ $route->toTownship['name'] }}
											</td>
										</tr>

										<tr>
											<td class="text-my">
												Departure Time
											</td>
											<td>
												{{  date('d-m-Y') }}
											</td>
										</tr>

										<tr>
											<td class="text-my">
												Selected Seats
											</td>
											<td>
												<div> 
													<ul id="seatsList" class="nav nav-stacked badge badge-success"></ul>
												</div>
											</td>
										</tr>

										<tr>
											<td class="col-md-4 text-my">
												Number of Seats 
											</td>
											<td class="col-md-8 text-my">
												<div class="seatsAmount">0</div>
												<div>Seat(s)</div>
											</td>
										</tr>

										<tr>
											<td class="text-my">
												Subtotal
											</td>
											<td>
												<div class="txtSubTotal" name="amount">0.00</div>
												<div>MMK</div>
											</td>
										</tr>

									</tbody>
								</table>

								<hr>

								<h3 class="text-my text-muted text-center ">Please select (<span class="seatsAmount"></span> ) Seats.</h3>
								<div class="row" id="search">
									<input  class="amount" value="0" name="sub_totl" type="hidden">
									<input  class="seat" name="seat" type="hidden">

									<p></p>

									<div class="col-md-12 text-center">
										<button class="btn btn-success" type="submit">Continue info</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	@endsection