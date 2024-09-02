@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <h1 class="mb-3">{{ $post->title }}</h1>

                <h5>By.
                    <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </h5>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img class="" src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="" src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <br>
                <a href="/posts" class="text-decoration-none">Back to posts</a>

            </div>
        </div>
    </div>
@endsection
