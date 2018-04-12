@extends('layout.master')

@section('content')
    <h2>Add a New Book</h2>
    <form>
        Title: <br>
        <input type="text">
        <br>
        Genre: <br>
        <input type="text">
        <br>
        Publication Date: <br>
        <input type="text">
        <br>
        <button class="button" type="button">Add Book</button>
    </form>
@endsection