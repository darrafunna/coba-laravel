@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            
            <p>by <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            
            @if ($post->image)
            <div style="max-height: 350; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else  
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
            <a href="/posts" class="d-block mt-2">Back to Posts</a>
        </div>
    </div>
</div>

    
@endsection