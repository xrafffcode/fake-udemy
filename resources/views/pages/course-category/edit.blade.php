@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Course Category</h1>

            <a href="{{ route('course-category.index') }}" class="btn btn-danger mb-3">Back</a>
        </div>

        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="col-12">
            <form action="{{ route('course-category.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
