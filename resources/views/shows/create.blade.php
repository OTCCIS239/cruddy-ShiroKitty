@extends('layout.master')

@section('content')
    <h2>Add a New Show</h2>
    <form action="/shows" method="post">
        @include('shows.form') 
    </form>
@endsection