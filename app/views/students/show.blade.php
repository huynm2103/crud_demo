<!-- app/views/students/show.blade.php -->
@extends('layout.default_layout')

@section('content')

<h1>Showing {{ $student->name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $student->name }}</h2>
	<p>
		<strong>Email:</strong> {{ $student->email }}
		<br>
		<strong>Birth Day:</strong> {{ $student->birth_day }}
		<br>
		<strong>Sex:</strong> {{ $student->sex }}
	</p>
</div>
@stop