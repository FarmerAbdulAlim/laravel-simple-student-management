<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1 class="mb-4">Students</h1>
<ul class="list-group">
    @foreach ($students as $student)
    <li class="list-group-item">
        {{ $student->name }} ({{ $student->age }} years old)
        <a href="{{ route('students.show', $student) }}" class="btn btn-primary btn-sm float-end">View</a>
    </li>
    @endforeach
</ul>
<a href="{{ route('students.create') }}" class="btn btn-success mt-3">Add Student</a>
@endsection