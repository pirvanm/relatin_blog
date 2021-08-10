@extends('layout')

@section('content')
    <h2>Our users.</h2>
    <hr>
    @foreach ($users as $user)
        <div class="mt-4">
            <h2 class="mr-0 pr-0">{{ $user->name }}</h2>
            <p>Phone Number: {{ $user->phone->phone }}</p>
        </div>
    @endforeach
@endsection