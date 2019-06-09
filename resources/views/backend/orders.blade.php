@extends('layouts/admin_layout')
@section('title', 'Dashboard | Order list')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Route list</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section> <!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">User name</th>
							<th scope="col">Bus name</th>
							<th scope="col">From</th>
							<th scope="col">to</th>
							<th scope="col">Seat</th>
							<th scope="col">Going date</th>
							<th scope="col">Purchase date</th>
							<th scope="col">Price</th>	
							<th scope="col">Status</th>	
						</tr>
					</thead>
					<tbody>
					@foreach($orders as $order)
						<tr>
							<td>{{ $order->id }}</td>
							<td>{{ $order->guestName['name'] ?? $order->userName['name']}}</td>
							<td>{{ $order->busName['name']}}</td>
							<td>{{ $order->route->fromTownship->name }}</td>
							<td>{{ $order->route->toTownship->name }}</td>
							<td>{{ $order->seat ? $order->seat : "-" }}</td>
							<td>{{ $order->going_date}}</td>
							<td>{{ $order->purchase_date}}</td>
							<td>{{ $order->price}} kyats</td>
							<td>{{ $order->status}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layouts.footer')
@endsection