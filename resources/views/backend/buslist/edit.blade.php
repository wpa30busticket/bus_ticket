@extends('layouts/admin_layout')
@section('title', 'Dashboard | Edit bus')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit a buslist
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->

	<section class="content">
		<form method="POST" action="{{ route('buslist.update', $bus->id) }}">
			@csrf
			<div class="form-group">
				<label for="name">Bus name</label>
				<input type="text" class="form-control" value="{{ $bus->name }}" id="name" placeholder="Enter bus name" name="name" autofocus="" required="">
			</div>
			
			<div class="form-group">
				<label for="type">Type</label>
				<input type="text" class="form-control" value="{{ $bus->type }}" id="type" placeholder="Enter Type" name="type" required="">
			</div>

			<div class="form-group">
				<label for="number">Bus number</label>
				<input type="text" class="form-control" value="{{ $bus->bus_no }}" id="number" placeholder="Enter bus number" name="bus_no" required="">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>       
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.footer')
  @endsection