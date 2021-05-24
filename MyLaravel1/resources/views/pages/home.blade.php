@extends('layouts.main-layout')
@section('content')
    <h1>Lista film</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h3>{{ $movie -> id}} Titolo: </h3>
            <a href="{{ route('films', $movie -> id) }}">
                <p> {{ $movie -> title}}</p>
            </a>
        </li>
    @endforeach
    </ul>
@endsection