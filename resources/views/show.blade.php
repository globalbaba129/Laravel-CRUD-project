<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
@if($post->image)
    <img src="{{ asset('images/' . $post->image) }}" width="300">
@endif
<br><a href="{{ route('posts.edit', $post->id) }}">Edit</a>
