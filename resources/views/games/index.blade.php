@extends('layout.master')

@section('title', 'Game List')

@section('content')
    <h2>Games</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Release Date</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($games as $game)
        <tr>
            <td>{{ $game->id }}</td>
            <td>{{ $game->title }}</td>
            <td>{{ $game->genre }}</td>
            <td>{{ $game->release_date }}</td>
            <td><a href="/games/{{ $game->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/games/{{ $game->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/games/create">Add a New Game</a>
@endsection