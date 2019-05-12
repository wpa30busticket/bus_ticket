@extends('layouts/admin_layout')
@section('title', 'Dashboard | Route list')
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
							<th scope="col">Bus Name</th>
							<th scope="col">Bus Number</th>
							<th scope="col">From</th>
							<th scope="col">To</th>
							<th scope="col">Created_at</th>
							<th scope="col">Delete</th>
							<th scope="col">Edit</th>
						</tr>
					</thead>
					<tbody>
						@foreach($routes as $route)
						<tr>
							<th scope="row">{{ $route->id }}</th>
							<td>{{ $route->bus['name'] ?? '-'}}</td>
							<td>{{ $route->bus['bus_no'] ?? '-'}}</td>
							<td>{{ $route->fromTownship['name'] ?? '-' }}</td>
							<td>{{ $route->toTownship['name'] ?? '-' }} </td>
							<td>{{ $route->created_at->toDateString() }}</td>
							<td>
								<form action="{{ route('route.destroy', $route->id) }}" method="POST">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger">delete</button>
								</form>
							</td>
							<td>
								<a href="{{route('route.edit',$route->id)}}" class="btn btn-info">Edit</a>
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