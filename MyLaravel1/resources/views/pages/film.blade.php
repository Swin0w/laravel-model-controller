@extends('layouts.main-layout')
@section('content')
    <ul>
        <li>
            <h3>Titolo Orginale: </h3>
            <p> {{ $film -> original_title}}</p>
            <br>
            <h3>Lingua originale: </h3>
            <p> {{ $film -> nationality}}</p>
            <br>
            <h3>Data di uscita: </h3>
            <p> {{ $film -> date}}</p>
            <br>
            <h3>Voto: </h3>
            <p> {{ $film -> vote}}</p>
        </li>
    </ul>
@endsection