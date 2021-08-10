@extends('layout')

@section('content')
    <div class="mt-4">
        <h1 class="mr-0 pr-0">{{ $post->title }}</h1>
        {{ $post->description }}
        <p>
        </p>
    </div>
    <hr>
    <div>
        <h3>Add a comment</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                <p class="mb-0">{{ session('success') }}</p>
            </div>
        @endif
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="post" value="{{ $post->id }}">
            <div class="form-group">
                <label for="name" class="form-label">Your name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" name="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
    @if (count($comments))
        <div class="mt-4">
            <h2>Comments</h2>
            <hr>
            @foreach ($comments as $comment)
                <div class="card">
                    <div class="card-body">
                        <h4> {{ $comment->name }}</h4> 
                        <p> {{ $comment->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection