@extends('layout')

@section('content')
    <h1>Welcome to my {{ $heading }} Website!</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
