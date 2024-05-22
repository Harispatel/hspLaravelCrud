<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h2>Create Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>