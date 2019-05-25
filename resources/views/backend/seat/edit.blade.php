@extends('layouts/admin_layout')
@section('title', 'Dashboard | Edit seat')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit a seat
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->

	<section class="content">
		<form method="POST" action="{{ route('seats.update', $seat->id) }}">
			@csrf
			<div class="form-group">
				<label for="name">Route id</label>
				<input type="text" class="form-control" value="{{ $seat->route_id }}" id="name" placeholder="Enter bus name" name="route_id">
			</div>
			
			<div class="form-group">
				<label for="type">Seat number</label>
				<input type="text" class="form-control" value="{{ $seat->seat_no }}" id="type" placeholder="Enter Type" name="seat_no">
			</div>

			<div class="form-group">
				<label for="number">price</label>
				<input type="number" class="form-control" value="{{ $seat->price }}" id="number" placeholder="Enter bus number" name="price">
			</div>

			<div class="form-group">
				<label for="number">status</label>
				<input type="number" class="form-control" value="{{ $seat->status }}"  id="number" placeholder="Enter bus number" name="status">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>       
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.footer')
  @endsection