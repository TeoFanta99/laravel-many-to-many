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
        <br>
        <span>Tecnologie: </span>
        @foreach ($project -> technologies as $technology)
        <span> {{$technology -> name}}, </span>
        @endforeach
    </li>
    <br>
    @endforeach
</ul>

@endsection