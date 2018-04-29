@extends('layout.master')

@section('content')
    <h2>Anime List</h2>

    <!-- <pre>{{ json_encode(\App\Anime::all(), JSON_PRETTY_PRINT) }}</pre> -->

    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th># Of Episodes</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($anime as $animes)
        <tr>
            <td>{{ $animes->title }}</td>
            <td>{{ $animes->genre }}</td>
            <td>{{ $animes->episodes }}</td>
            <td><a href="/anime/{{ $animes->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/anime/{{ $animes->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>


    <a class="button" href="/anime/create">Add a New Series</a>
@endsection


