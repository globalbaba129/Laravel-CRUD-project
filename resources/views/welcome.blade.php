<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- Optional: Add a custom style if you want to override DataTables styles -->
    <style>
        table.dataTable {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>All Posts</h1>

    <!-- Add Post Button -->
    <a href="{{ route('posts.create') }}" style="display: inline-block; margin-bottom: 20px; background: #4CAF50; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">+ Add Post</a>

    @if($posts->count())
        <!-- Table for DataTable -->
        <table id="postsTable" class="display">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('posts.edit', $post->id) }}" style="margin-right: 10px;">Edit</a>
                            <!-- Delete Button -->
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: red;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No posts found.</p>
    @endif

    <!-- DataTables JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        // Initialize DataTable
        $(document).ready(function() {
            $('#postsTable').DataTable();
        });
    </script>
</body>
</html>
