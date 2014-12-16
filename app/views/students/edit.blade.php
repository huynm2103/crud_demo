<!-- app/views/students/edit.blade.php -->
@extends('layout.default_layout')

@section('content')
<h1>Edit {{ $student->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<form method="POST" action="{{ URL::to('students/'.$student->id ) }}">
	<input name="_method" type="hidden" value="PUT" />
	<div class="form-group">
		<label>Name</label>
		<input class="form-control" name="name" type="text" value="{{$student->name}}" />
	</div>

	<div class="form-group">
		<label>Email</label>
		<input class="form-control" name="email" type="email" value="{{$student->email}}" />
	</div>

	<div class="form-group">
		<label>Birth Day</label>
		<input class="form-control" name="birth_day" type="date" value="{{ $student->birth_day }}" />
	</div>

	<div class="form-group">
		<div class="form-group">
			<label>Sex</label>
			<select class="form-control" id="sex" name="sex">
				@if( $student->sex == 1)
				<option value="1" selected>Male</option>
				<option value="0">Female</option>
				@else
				<option value="1">Male</option>
				<option value="0" selected>Female</option>
				@endif
			</select>
		</div>
	</div>

	<input type="submit" class="btn btn-primary" value="Edit this Student!" />
</form>
@stop