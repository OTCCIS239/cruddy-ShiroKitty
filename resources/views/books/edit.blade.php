@extends('layout.master')

@section('content')
    <h2>Edit Series</h2>
    <form action="/books/{{ $book->id }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @include('books.form')
    </form>
@endsection