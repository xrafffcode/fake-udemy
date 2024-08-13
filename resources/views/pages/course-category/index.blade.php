@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Courses Category</h1>

            <a href="{{ route('course-category.create') }}" class="btn btn-primary mb-3">Create Course Category</a>
        </div>

        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>

                            <td>
                                <a href="{{ route('course-category.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                                <form action="{{ route('course-category.destroy', $category->id) }}" method="POST"
                                    class="d-inline">
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
