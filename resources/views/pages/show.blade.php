@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>SHOW</h1>

<h2>
    Nome del Tipo:
    {{ $type -> name }}
</h2>
<br>
<button>
    <a href="{{ route('type.index') }}">BACK HOME</a>
</button>
@endsection