@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>STAMPA DEI DATI</h1>

<ol>
    @foreach ($types as $type)
    <li>
        <a href="{{ route('type.show', $type -> id) }}">
            <span>
                Tipologia:
                {{$type -> name}}
            </span>
        </a>
    </li>
    <br><br>
    @endforeach
</ol>
@endsection