<!-- app/views/students/index.blade.php -->
@extends('layout.default_layout')

@section('content')

<h1>All the students</h1>

<!-- show message -->
@if (Session::has('message'))
<div class="alert alert-info">
	{{ Session::get('message') }}
</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>BirthDay</td>
			<td>Sex</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
		@foreach($students as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->birth_day }}</td>
			@if( $value->sex === 1 )
			<td>male</td>
			@else
			<td>female</td>
			@endif

			<!-- show, edit, and delete buttons -->
			<td><!-- delete button -->
			<form class="pull-right" method="POST" action="{{ URL::to('students/'. $value->id) }}">
				<input name="_method" type="hidden" value="DELETE" />
				<input class="btn btn-warning" type="submit" value="Delete this Student" />
			</form><!-- Show detail button --><a class="btn btn-small btn-success" href="{{ URL::to('students/' . $value->id) }}">Show this Nerd</a><!-- edit button --><a class="btn btn-small btn-info" href="{{ URL::to('students/' . $value->id . '/edit') }}">Edit this Nerd</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop