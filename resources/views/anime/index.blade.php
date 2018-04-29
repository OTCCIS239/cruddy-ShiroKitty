@extends('layout.master')

@section('content')
    <h2>Anime List</h2>

    <!-- <pre>{{ json_encode(\App\Anime::all(), JSON_PRETTY_PRINT) }}</pre> -->

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th># Of Episodes</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($animeTable as $anime)
        <tr>
            <td>{{ $anime->id }}</td>
            <td>{{ $anime->title }}</td>
            <td>{{ $anime->genre }}</td>
            <td>{{ $anime->episodes }}</td>
            <td><a href="/anime/{{ $anime->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/anime/{{ $anime->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>


    <a class="button" href="/anime/create">Add a New Series</a>
@endsection


