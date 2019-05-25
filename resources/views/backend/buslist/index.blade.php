@extends('layouts/admin_layout')
@section('title', 'Dashboard | Bus list')
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
							<th scope="col">Name</th>
							<th scope="col">Type</th>
							<th scope="col">Bus number</th>
							<th scope="col">Delete</th>						
							<th scope="col">Edit</th>						
						</tr>
					</thead>
					<tbody>
						@foreach($buses as $bus)
						<tr> 
							<th scope="row">{{ $bus->id }}</th>
							<td>{{ $bus->name }}</td>
							<td>{{ $bus->type }}</td>
							<td>{{ $bus->bus_no }}</td>
							<td>
								<form action="{{ route('buslist.destroy', $bus->id) }}" method="POST">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger">delete</button> 
								</form>
							</td>
							<td>
							<form action="{{ route('buslist.edit', $bus->id) }}" method="POST">
									@csrf
									@method('PATCH')
									<button type="submit" class="btn btn-success">edit</button> 
								</form>
							</td>
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