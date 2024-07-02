<!-- resources/views/employees/show.blade.php -->

@extends('employees.layout')

@section('content')
    <div class="container">
        <h1>{{ $employee->name }}</h1>
        <p><strong>Email:</strong> {{ $employee->email }}</p>
        <p><strong>Date of Birth:</strong> {{ $employee->date_of_birth }}</p>
        <p><strong>Salary:</strong> {{ $employee->salary }}</p>
        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
        </form>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
