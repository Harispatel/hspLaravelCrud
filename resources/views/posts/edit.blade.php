@extends('layouts.app')

@section('content')
<h2 class="h2 text-center">Edit Post</h2>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container col-md-4">
        <div>
            <label class="label">Title:</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
        </div>
        <div>
            <label class="label mt-4">Content:</label>
            <textarea name="content" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button type="submit" class="btn btn-success mt-2">Submit</button>
            <a href="{{ route('posts.index') }}" class="btn btn-default btn-light float-right mt-2">Back</a>
        </div>
    </div>
</form>
@endsection