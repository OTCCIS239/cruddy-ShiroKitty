@extends('layout.master')

@section('content')
    {{ $books->toJson() }}
    <form action="/books/{{ $books->id }}" meth="post">
        <input type="hidden" name="method" value="delete">
        {{ csrf_field() }}
        <button type="submit button" class="alert button">Delete</button>
    </form>
@endsection