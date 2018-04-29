@extends('layout.master')

@section('content')
    <h2>Add a New Book</h2>
    <form action="/books" method="post">
        @include('books.form') 
    </form>
@endsection