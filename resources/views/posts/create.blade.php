@extends('layouts.app')

@section('content')
    <div class="blog-card">
        <h2 class="mb-4 text-center" style="color:#f7971e;">Create New Post</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control form-control-lg" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary px-4 py-2">Create</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary px-4 py-2">Back</a>
            </div>
        </form>
    </div>
@endsection
