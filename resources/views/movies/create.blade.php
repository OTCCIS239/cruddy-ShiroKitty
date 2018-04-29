@extends('layout.master')

@section('content')
    <h2>Add a New Movie</h2>
    <form action="/movies" method="post">
        @include('movies.form') 
    </form>
@endsection