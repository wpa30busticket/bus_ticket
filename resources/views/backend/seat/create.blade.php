@extends('layouts/admin_layout')
@section('title', 'Dashboard | Add seat')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add a new seat
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->

	<section class="content">
		<form method="POST" action="{{ route('seats.store') }}">
			@csrf
			<div class="form-group">
				<label for="name">Route id</label>
				<input type="text" class="form-control" id="name" placeholder="Enter bus name" name="route_id" required="">
			</div>
			
			<div class="form-group">
				<label for="type">Seat number</label>
				<input type="text" class="form-control" id="type" placeholder="Enter Type" name="seat_no" required="">
			</div>

			<div class="form-group">
				<label for="number">price</label>
				<input type="number" class="form-control" id="number" placeholder="Enter bus number" name="price" value="10000" required="">
			</div>

			<div class="form-group">
				<label for="number">status</label>
				<input type="number" class="form-control" id="number" placeholder="Enter bus number" name="status" required="">
			</div>


			<button type="submit" class="btn btn-primary">Submit</button>
		</form>       
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.footer')
  @endsection