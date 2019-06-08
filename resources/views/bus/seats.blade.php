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
						<div class="row">
							<div class="seatsChart col-lg-10">
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row1
										</div>
										<div class="col-md-3">
											<div id="1_1" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="seatNumber">1</div>
											<div id="1_2" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="seatNumber ">2</div>
										</div>
										<div class="col-md-3">
											<div id="1_3" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">3</div>
											<div id="1_4" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="seatNumber ">4</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row2
										</div>
										<div class="col-md-3">
											<div id="2_5" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">5</div>
											<div id="2_6" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="seatNumber ">6</div>
										</div>
										<div class="col-md-3">
											<div id="2_7" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">7</div>
											<div id="2_8" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="seatNumber ">8</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row3
										</div>
										<div class="col-md-3">
											<div id="3_9" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">9</div>
											<div id="3_10" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">10</div>
										</div>
										<div class="col-md-3">
											<div id="3_11" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">11</div>
											<div id="3_12" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">12</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row4
										</div>
										<div class="col-md-3">
											<div id="4_13" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">13</div>
											<div id="4_14" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">14</div>
										</div>
										<div class="col-md-3">
											<div id="4_15" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">15</div>
											<div id="4_16" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">16</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row5
										</div>
										<div class="col-md-3">
											<div id="5_17" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">17</div>
											<div id="5_18" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">18</div>
										</div>
										<div class="col-md-3">
											<div id="5_19" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">19</div>
											<div id="5_20" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable ">20</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row6
										</div>
										<div class="col-md-3">
											<div id="6_21" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">21</div>
											<div id="6_22" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">22</div>
										</div>
										<div class="col-md-3">
											<div id="6_23" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">23</div>
											<div id="6_24" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">24</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row7
										</div>
										<div class="col-md-3">
											<div id="7_25" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">25</div>
											<div id="7_26" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">26</div>
										</div>
										<div class="col-md-3">
											<div id="7_27" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">27</div>
											<div id="7_28" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">28</div>
										</div>
									</div>
								</div>
								<div class="seatRow">
									
									<div class="row">
										<div class="seatRowNumber col-md-2">
											Row8
										</div>
										<div class="col-md-3">
											<div id="8_29" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">29</div>
											<div id="8_30" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">30</div>
										</div>
										<div class="col-md-3">
											<div id="8_31" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber">31</div>
											<div id="8_32" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">32</div>
										</div>
									</div>
								</div>
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
													<input  class="amount" value="0" name="sub_totl" type="text">
													<input  class="seat" name="seat" type="text">

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