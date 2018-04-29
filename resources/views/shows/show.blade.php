@extends('layout.master')

@section('title', 'Anime List')

@section('content')

    {{ $shows->toJson() }}

    <form action="/shows/{{ $shows->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <button type="button" class="alert button">Delete</button>
    </form>

@endsection