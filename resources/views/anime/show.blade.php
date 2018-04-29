@extends('layout.master')

@section('title', 'Anime List')

@section('content')

    {{ $animeTable->toJson() }}

    <form action="/anime/{{ $animeTable->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <button type="button" class="alert button">Delete</button>
    </form>

@endsection

