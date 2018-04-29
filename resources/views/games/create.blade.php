@extends('layout.master')

@section('content')
    <h2>Add a New Game</h2>
    <form action="/games" method="post">
        @include('games.form') 
    </form>
@endsection