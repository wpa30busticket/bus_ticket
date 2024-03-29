@extends('layouts/admin_layout')
@section('title', 'Dashboard | Seat list')
@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Seat list</h1>
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
							<th scope="col">Route</th>
							<th scope="col">Seat number</th>
							<th scope="col">Price</th>
							<th scope="col">Status</th>
							<th scope="col">Edit</th>
						</tr>
					</thead>
					<tbody>
							@foreach($seats as $seat)
							
						<tr>
							<td>{{ $route->fromTownship->name ?? '-'}} - {{ $route->toTownship->name ?? '-'}}</td>
							<td>{{ $seat->seat_no ?? '-'}}</td>
							<td>{{ $seat->price ?? '-'}}</td>
							<td>
								@if($seat->status == 0)
								<label class="label label-success" for="">Available</label>
								@else
								<label class="label label-danger" for="">Unavailable</label>
								@endif
							</td>
							<td>
								<a href="{{ route('seats.edit',$seat->id) }}" class="btn btn-info">Edit</a>
							</td>
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