<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
</head>
<body>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}">Back</a>
</body>
</html>