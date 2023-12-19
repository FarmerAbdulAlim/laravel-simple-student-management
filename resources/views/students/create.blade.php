<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Student</h1>
<form method="post" action="{{ route('students.store') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age:</label>
        <input type="number" name="age" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<a href="{{ route('students.index') }}" class="btn btn-secondary mt-2">Back to Students</a>
@endsection