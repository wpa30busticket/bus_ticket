@extends('layouts/bus')
@section('title', 'Seats' )
@section('content')

<div class="section section-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default" data-time-period="AM" data-operator-id="10">
					<div class="panel-heading text-my">
						Please select seats here.
					</div>
						<div class="panel-body">
							<div class="row" >
								<div class="seatsChart col-lg-10">
										<div class="seatRow">
											<div class="seatRowNumber">
									@foreach($seats->slice(0,5) as  $seat)

												<div id="1_{{$seat->seat_no}}" title="" role="checkbox" value="{{$seat->seat_no}}" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach

											</div>
											
										</div>		
										<div class="seatRow">									
										<div class="seatRowNumber">
									@foreach($seats->slice(5,10) as  $seat)

												<div id="1_1" title="" role="checkbox" value="{{$seat->id}}" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber {{$seat->status == 1 ? 'seatUnavailable' : ''}}">{{ $seat->seat_no }} </div>
									@endforeach
											</div>
											
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
											<div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>
										</div>

										<div class="seatRow">
											<div class="seatRowNumber">
												Row 3
											</div>
											<div id="3_1" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">1</div>
											<div id="3_2" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
											<div id="3_3" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">3</div>
											<div id="3_4" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
											<div id="3_5" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">5</div>
											<div id="3_6" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
											<div id="3_7" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
											<div id="3_8" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>
										</div>   

										<div class="seatRow">
											<div class="seatRowNumber">
												Row 4
											</div>
											<div id="4_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
											<div id="4_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
											<div id="4_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
											<div id="4_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
											<div id="4_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
											<div id="4_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
											<div id="4_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
											<div id="4_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>
										</div>

										<div class="seatRow">
											<div class="seatRowNumber">
												Row 5
											</div>
											<div id="5_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
											<div id="5_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
											<div id="5_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
											<div id="5_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
											<div id="5_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
											<div id="5_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
											<div id="5_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
											<div id="5_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>
										</div> 

										<!-- <div class="seatsReceipt col-lg-2">
											<p><strong>Selected Seats: <span class="seatsAmount" />0 </span></strong> <button id="btnClear" class="btn">Clear</button></p>
											<ul id="seatsList" class="nav nav-stacked"></ul>
										</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
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
												Mar 18, 08:00 AM
											</td>
										</tr>

										<tr>
											<td class="text-my">
												Selected Seats
											</td>
											<td>
												<div class="badge badge-pill badge-success"><ul id="seatsList" class="nav nav-stacked"></ul></div>
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