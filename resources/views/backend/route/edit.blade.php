@extends('layouts/admin_layout')
@section('title', 'Dashboard | Edit route')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit a route
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->

	<section class="content">
		<form method="POST" action="{{ route('route.update', $route->id) }}">
			@csrf
			@method("PATCH")


			<div class="form-group">
				<label for="exampleInputEmail1">From</label>
				<select id="from" name="from" class="form-control chosen select2">
					<option value="">Select a location</option>
					@foreach($townships as $township)
					<option class="text-my"  value="{{$township->id}}" {{ ($route->from == $township->id)? 'selected' : '' }}>
						{{$township->name}}
					</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">To</label>
				<select id="from" name="to" class="form-control chosen select2">
					<option value="">Select a bus</option>
					@foreach($townships as $township)
					<option class="text-my"  value="{{$township->id}}" {{ ($route->to == $township->id)? 'selected' : '' }}>
						{{$township->name}}
					</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="name">Price</label>
				<input type="number" class="form-control" id="name" name="price" required="" value="{{ $route->price }}">
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Bus id</label>
				<select id="from" name="bus_id" class="form-control chosen select2">
					<option value="">Select a bus</option>
					@foreach($buses as $bus)
					<option class="text-my"  value="{{$bus->id}}" {{ ($route->bus_id == $bus->id)? 'selected' : '' }}>
						{{$bus->name}}
					</option>
					@endforeach
				</select>
			</div>

			<!-- <div class="form-group">
				<label for="name">Bus ID</label>
				<input type="text" class="form-control" value="{{ $route->bus_id }}" id="name" placeholder="From" name="bus_id" autofocus="">
			</div>
			
			<div class="form-group">
				<label for="type">From</label>
				<input type="text" class="form-control" value="{{ $route->from }}" id="type" placeholder="from" name="from" required="">
			</div>

			<div class="form-group">
				<label for="number">To</label>
				<input type="text" class="form-control" value="{{ $route->to }}" id="number" placeholder="to" name="to" required="">
			</div> -->

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>       
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.footer')

	
  <!-- Add the sidebar's background. This div must be placed
  	immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  @endsection