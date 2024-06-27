@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Details</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $student->phone }}</p>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
