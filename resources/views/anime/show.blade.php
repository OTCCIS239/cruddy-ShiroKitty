@extends('layout.master')

@section('title', 'Anime List')

@section('content')
    <pre><?php echo $anime->toJson(JSON_PRETTY_PRINT) ?></pre>

    <form action="/anime/{{ $anime->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <br>
        <button type="submit button" class="alert button">Delete</button>
    </form>

@endsection

