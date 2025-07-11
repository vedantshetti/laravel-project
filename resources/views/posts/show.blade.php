@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h2>{{ $post->title }}</h2>
        <div class="mb-3 text-muted">{{ $post->created_at->format('M d, Y') }}</div>
        <div class="mb-4">{{ $post->content }}</div>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
