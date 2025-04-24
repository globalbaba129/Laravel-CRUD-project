<h1>Create Post</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br>
    <textarea name="content" placeholder="Content" required></textarea><br>
    <input type="file" name="image"><br>
    <button type="submit">Create</button>
</form>

@if(session('uploadedImage'))
    <h3>Uploaded Image:</h3>
    <img src="{{ asset('images/' . session('uploadedImage')) }}" width="300" alt="Uploaded Image">
@endif
