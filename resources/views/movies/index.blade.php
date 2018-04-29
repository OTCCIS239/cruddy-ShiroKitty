@extends('layout.master')

@section('content')
    <h2>Movies</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Runtime</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->genre }}</td>
            <td>{{ $movie->episodes }}</td>
            <td><a href="/movies/{{ $movie->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/movies/{{ $movie->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/movies/create">Add a New Movie</a>
@endsection