@extends('layouts/admin_layout')
@section('title', 'Dashboard | Add route')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add a new route
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->

	<section class="content">

		<form method="POST" action="{{ route('route.store') }}">
			@csrf
			<div class="form-group">
				<label for="exampleInputEmail1">From</label>
				<select id="from" name="from" class="form-control chosen select2">
					<option value="">Select a location</option>
					@foreach($townships as $township)
					<option class="text-my"  value="{{$township->id}}" {{ (request('from') == $township->id)? 'selected' : '' }}>
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
					<option class="text-my"  value="{{$township->id}}" {{ (request('to') == $township->id)? 'selected' : '' }}>
						{{$township->name}}
					</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Bus id</label>
				<select id="from" name="bus_id" class="form-control chosen select2">
					<option value="">Select a bus</option>
					@foreach($buses as $bus)
					<option class="text-my"  value="{{$bus->id}}" {{ (request('from') == $township->id)? 'selected' : '' }}>
						{{$bus->name}}
					</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form
			>       
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.footer')

  @endsection