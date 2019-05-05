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

			<div class="form-group">
				<label for="name">Bus ID</label>
				<input type="text" class="form-control" value="{{ $route->bus_id }}" id="name" placeholder="From" name="bus_id" autofocus="" required="">
			</div>
			
			<div class="form-group">
				<label for="type">From</label>
				<input type="text" class="form-control" value="{{ $route->from }}" id="type" placeholder="from" name="from" required="">
			</div>

			<div class="form-group">
				<label for="number">To</label>
				<input type="text" class="form-control" value="{{ $route->to }}" id="number" placeholder="to" name="to" required="">
			</div>

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