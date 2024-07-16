<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $post->title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-light  p-4">
        <span class="navbar-brand mb-0 h1 p-2">#100DaysOfCode</span>
        <button type="button" class="btn btn-primary btn-create-post" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Create a Post +
        </button>
    </nav>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">{{ $post->title }}</h1>
            
            <div class="d-flex justify-content-center">
            @if ($post->image)
              <img src="{{ asset('storage/images/' . $post->image) }}" class="img-fluid mb-3" style="max-width: 500px;" alt="Post Image">
            @endif
            </div>
            <div class="card-text">
              {!! nl2br(e($post->content)) !!}
            </div>
            <div class="mt-3">
              <a href="{{ route('posts.index') }}" class="btn btn-primary me-2">Back to Posts</a>
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success me-2">Edit</a>

              <!-- Delete Form -->
              <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

