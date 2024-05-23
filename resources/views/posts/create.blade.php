@extends('layouts.app')

@section('content')
<h2 class="h3 text-center">Create Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="container col-md-4">
        <div>
            <label class="label">Title:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
            <a href="{{ route('posts.index') }}" class="btn btn-light btn-sm mt-2">Back</a>
        </div>
    </div>
</form>
@endsection