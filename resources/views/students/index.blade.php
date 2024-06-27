@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Students</h1>
            <a href="{{ route('students.create') }}" class="btn btn-success mb-2">Add New Student</a>

            @if ($students->isEmpty())
                <p>No students found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
