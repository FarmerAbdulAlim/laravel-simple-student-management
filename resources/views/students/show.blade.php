<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1 class="mb-4">{{ $student->name }}</h1>
<p class="lead">Age: {{ $student->age }} years old</p>
<a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
<form method="post" action="{{ route('students.destroy', $student) }}" onsubmit="return confirm('Are you sure?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
<a href="{{ route('students.index') }}" class="btn btn-secondary mt-2">Back to Students</a>
@endsection