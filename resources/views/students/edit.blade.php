<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edit {{ $student->name }}</h1>
<form method="post" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age:</label>
        <input type="number" name="age" class="form-control" value="{{ $student->age }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<a href="{{ route('students.show', $student) }}" class="btn btn-secondary mt-2">Cancel</a>
<a href="{{ route('students.index') }}" class="btn btn-secondary mt-2">Back to Students</a>
@endsection