@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>STAMPA DEI DATI</h1>

    <ul>
        @foreach ($types as $type)
            <li>
                <b>
                    <span>Tipologia: </span>
                    {{$type -> name}}
                </b>
                <ul>
                @foreach ($type -> projects as $project)
                    <li>
                        {{$project -> title}}
                        <br>
                        {{$project -> author}}
                    </li>
                    <br>
                @endforeach
                </ul>   
            </li>
            <br><br><br>
        @endforeach
    </ul>
@endsection
