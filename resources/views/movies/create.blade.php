@extends('layout.master')

@section('content')
    <h2>Add a New Movie</h2>
    <form>
        Title: <br>
        <input type="text">
        <br>
        Genre: <br>
        <input type="text">
        <br>
        Number of Episodes: <br>
        <input type="text">
        <br>
        <button class="button" type="button">Add Movie</button>
        
    </form>
@endsection