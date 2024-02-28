@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>EDIT</h1>

<form action="{{ route('type.update', $type -> id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    {{-- <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image"> --}}
    <br><br>
    <input type="submit" value="CREATE">

</form>

@endsection