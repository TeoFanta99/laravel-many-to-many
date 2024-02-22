@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>PROGETTI</h1>

    <ul>
        @foreach ($projects as $project)
            <li>
                <b> Nome del progetto: 
                    {{$project -> title}}
                </b>
                <br>
                <span>Autore: 
                    {{$project -> author}}
                </span>
            </li>
            <br>
        @endforeach
    </ul>

@endsection
