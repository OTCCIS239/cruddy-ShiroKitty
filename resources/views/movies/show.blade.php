@extends('layout.master')

@section('title', 'Movie List')

@section('content')

    {{ $movies->toJson() }}

    <form action="/movies/{{ $movies->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <button type="button" class="alert button">Delete</button>
    </form>

@endsection