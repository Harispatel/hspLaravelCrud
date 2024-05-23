@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Add Post</a>
</div>
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
