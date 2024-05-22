<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>