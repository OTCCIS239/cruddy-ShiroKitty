@extends('layout.master')

@section('content')
    <h2>Tv Shows</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th># Of Episodes</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($show as $shows)
        <tr>
            <td>{{ $shows->id }}</td>
            <td>{{ $shows->title }}</td>
            <td>{{ $shows->genre }}</td>
            <td>{{ $shows->episodes }}</td>
            <td><a href="/shows/{{ $shows->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/shows/{{ $shows->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/shows/create">Add a New Show</a>
@endsection