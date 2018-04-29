@extends('layout.master')

@section('content')
    <pre><?php echo $book->toJson(JSON_PRETTY_PRINT) ?></pre>
    <form action="/books/{{ $book->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <br>
        <button type="submit button" class="alert button">Delete</button>
    </form>
@endsection