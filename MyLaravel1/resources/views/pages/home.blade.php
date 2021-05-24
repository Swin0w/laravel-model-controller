@extends('layouts.main-layout')
@section('content')
    <h1>Lista film</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h3>Titolo: </h3>
            <a href="">
                <p>{{ $movie -> title}}</p>
            </a>
        </li>
    @endforeach
    </ul>
@endsection