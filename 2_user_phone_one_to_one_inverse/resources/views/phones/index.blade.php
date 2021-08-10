@extends('layout')

@section('content')
    <h2>Our phones.</h2>
    <hr>
    @foreach ($phones as $phone)
        <div class="mt-4">
            <h2 class="mr-0 pr-0">{{ $phone->phone }}</h2>
            <p>User: {{ $phone->user->name }}</p>
        </div>
    @endforeach
@endsection