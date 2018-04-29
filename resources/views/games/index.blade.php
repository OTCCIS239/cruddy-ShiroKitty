@extends('layout.master')

@section('title', 'Game List')

@section('content')
    <h2>Games</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Release Date</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($game as $games)
        <tr>
            <td>{{ $games->title }}</td>
            <td>{{ $games->genre }}</td>
            <td>{{ $games->release_date }}</td>
            <td><a href="/games/{{ $games->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/games/{{ $games->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/games/create">Add a New Game</a>
@endsection