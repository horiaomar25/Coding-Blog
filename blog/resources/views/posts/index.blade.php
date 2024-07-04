@extends('layouts.layout')

@section('title', 'My Blog Posts')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <div class="form-group mt-4">
            <label for="image">Image</label>
            <input type="file" class="form-control-file mb-3" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection

@section('posts')
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    @if ($post->image)
                    <img src="{{ asset('storage/images/' . $post->image) }}" class="card-img-top" alt="Post Image" style="width: 300px; height: 200px;">


                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection





