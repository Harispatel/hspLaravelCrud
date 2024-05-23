@extends('layouts.app')

@section('content')
    <h2 class="h2">{{ $post->title }}</h2>
    <p class="">{{ $post->content }}</p>
    <a class="btn btn-default btn-light" href="{{ route('posts.index') }}">Back</a>
@endsection