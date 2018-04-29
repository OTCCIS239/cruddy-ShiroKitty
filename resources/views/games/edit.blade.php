@extends('layout.master')

@section('content')
    <h2>Edit Game</h2>
    <form action="/games/{{ $game->id }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @include('games.form')
    </form>
@endsection