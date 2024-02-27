@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>CREATE</h1>

<form action="{{ route('type.store') }}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    {{-- <label for="name">Immagine</label>
    <input type="text" name="name" id="name">
    <br> --}}
    <input type="submit" value="CREATE">


</form>

@endsection