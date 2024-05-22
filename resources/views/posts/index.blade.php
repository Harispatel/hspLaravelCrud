<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
</head>
<body>
    <h2>Posts</h2>
    <a href="{{ route('posts.create') }}">Create Post</a>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}">Show</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>