@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">

                <h1 class="mb-3">{{ $post->title }}</h1>
                <div class="d-flex gap-2">
                    <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger " onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img class="img-fluid mt-5" src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="img-fluid mt-5" src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <br>
            </div>
        </div>
    </div>
@endsection
