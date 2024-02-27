@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>STAMPA DEI DATI</h1>
<br>
<button>
    <a href="{{ route('type.create') }}">
        + CREATE NEW
    </a>
</button>
<br><br>
<ol>
    @foreach ($types as $type)
    <li>
        <a href="{{ route('type.show', $type -> id) }}">
            <span>
                Tipologia:
                {{$type -> name}}
            </span>
        </a>
        <button>
            <a href="{{ route('type.edit', $type -> id) }}">EDIT</a>
        </button>
    </li>
    <br>
    @endforeach
</ol>
@endsection