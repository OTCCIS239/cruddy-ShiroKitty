@extends('layout.master')

@section('title', 'Movie List')

@section('content')

    <pre><?php echo $movie->toJson(JSON_PRETTY_PRINT) ?></pre>

    <form action="/movies/{{ $movie->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <br>
        <button type="submit button" class="alert button">Delete</button>
    </form>

@endsection