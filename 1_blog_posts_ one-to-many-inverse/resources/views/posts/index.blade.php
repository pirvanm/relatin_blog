@extends('layout')

@section('content')
    <h2>Our recent posts.</h2>
    <hr>
    @foreach ($posts as $post)
            <div class="mt-4">
                <h2 class="mr-0 pr-0">{{ $post->title }}</h2>
                {{ $post->description }}
                <p>
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">Vew Post</a>
                </p>
            </div>
        @endforeach
@endsection