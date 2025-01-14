@extends('backend.app')

@section('Content')
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header p-3">
                <h3 class="d-inline">Add New Blog</h3>
                <!-- You can add a Back button here if needed -->
                <a href="{{ route('admin') }}" class="btn btn-secondary btn-sm float-end">Back to List</a>
            </div>
            <div class="card-body">
                <!-- Add Blog Form -->
                <form action="{{ route('blogStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Blog Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" >
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Blog Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" ></textarea>
                        @error('description')
                            <p class="text-danger" >{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Blog Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Add Blog</button>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
