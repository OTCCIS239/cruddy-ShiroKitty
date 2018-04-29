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
        @foreach($movie as $movies)
        <tr>
            <td>{{ $movies->id }}</td>
            <td>{{ $movies->title }}</td>
            <td>{{ $movies->genre }}</td>
            <td>{{ $movies->runtime }}</td>
            <td><a href="/movies/{{ $movies->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/movies/{{ $movies->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/movies/create">Add a New Movie</a>
@endsection