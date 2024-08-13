@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Courses</h1>

            <a href="{{ route('course.create') }}" class="btn btn-primary mb-3">Create Course</a>
        </div>

        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->price }}</td>

                            <td>
                                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary">Edit</a>

                                <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
