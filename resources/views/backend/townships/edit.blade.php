@extends('layouts/admin_layout')
@section('title', 'Dashboard | Edit bus')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit township name
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->

	<section class="content">
		<form method="POST" action="{{ route('townships.update', $township->id) }}">
			@csrf

			<div class="form-group">
				<label for="name">Township name</label>
				<input type="text" class="form-control" value="{{ $township->name }}" id="name" placeholder="Enter bus name" name="name" autofocus="" required="">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>       
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.footer')

	

  @endsection