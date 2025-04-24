<h1>Edit Post</h1>
<form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" required><br>
    <textarea name="content" required>{{ $post->content }}</textarea><br>
    @if($post->image)
        <img src="{{ asset('images/' . $post->image) }}" width="150"><br>
    @endif
    <input type="file" name="image"><br>
    <button type="submit">Update</button>
</form>
