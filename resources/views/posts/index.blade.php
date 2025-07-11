@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success">+ New Post</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card">
        <ul class="list-group list-group-flush">
            @forelse($posts as $post)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('posts.show', $post->id) }}" class="fw-bold">{{ $post->title }}</a>
                        <div class="text-muted small">{{ $post->created_at->format('M d, Y') }}</div>
                    </div>
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary me-2">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="list-group-item text-center text-muted">No posts found.</li>
            @endforelse
        </ul>
    </div>
@endsection
