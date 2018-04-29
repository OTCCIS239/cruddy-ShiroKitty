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
        @foreach($shows as $show)
        <tr>
            <td>{{ $show->id }}</td>
            <td>{{ $show->title }}</td>
            <td>{{ $show->genre }}</td>
            <td>{{ $show->episodes }}</td>
            <td><a href="/shows/{{ $show->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/shows/{{ $show->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/shows/create">Add a New Show</a>
@endsection