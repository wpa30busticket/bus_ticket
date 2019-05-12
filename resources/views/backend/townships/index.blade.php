@extends('layouts/admin_layout')
@section('title', 'Dashboard | Townships list')
@section('content')


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Townships list</h1>
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
							<th scope="col">Created_at</th>					
							<th scope="col">Delete</th>					
							<th scope="col">Edit</th>					
						</tr>
					</thead>
					<tbody>
						@foreach($townships as $township)
						<tr> 
							<th scope="row">{{ $township->id }}</th>
							<td>{{ $township->name }}</td>
							<td>{{ $township->created_at->toDateString() }}</td>
							<td>
								<form action="{{ route('townships.destroy', $township->id) }}" method="POST">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger">delete</button>
								</form>
							</td>
							<td>
								<a href="{{ route('townships.edit', $township->id) }}" class="btn btn-info">edit</a>
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