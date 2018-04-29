@extends('layout.master')

@section('content')
    <h2>Edit Series</h2>
    <form action="/anime/{{ $anime->id }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @include('anime.form')
    </form>
@endsection