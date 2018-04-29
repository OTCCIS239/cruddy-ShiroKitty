@extends('layout.master')

@section('content')
    <h2>Edit Series</h2>
    <form action="/shows/{{ $show->id }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @include('movies.form')
    </form>
@endsection