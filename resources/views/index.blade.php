<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <style>
        /* Add your styles here */
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; }
        .container { width: 80%; margin: 0 auto; }
        h1 { text-align: center; color: #333; }
        .post { background: #fff; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; }
        .post img { width: 100px; height: 100px; object-fit: cover; margin-right: 15px; }
        .btn { background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Posts</h1>

        <!-- Add Post Button -->
        <a href="{{ route('posts.create') }}" class="btn">+ Add Post</a>

        @if($posts->count())
            @foreach($posts as $post)
                <div class="post">
                    <div style="display: flex; align-items: center;">
                    @if($post->image)
        <img src="{{ asset('images/' . $post->image) }}" width="150"><br>
    @endif
                        <div>
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="background-color: #f44336;">Delete</button>
                    </form>
                </div>
            @endforeach
        @else
            <p>No posts found.</p>
        @endif
    </div>
</body>
</html>
