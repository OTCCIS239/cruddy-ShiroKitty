@extends('layout.master')

@section('content')
    <h2>Add New Anime</h2>
    <form action="/anime" method="post">
        @include('anime.form') 
    </form>
@endsection