@extends('layout.master')

@section('content')
    <h2>Books</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Publication Date</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->publication_date }}</td>
            <td><a href="/books/{{ $book->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/books/{{ $book->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/books/create">Add A Book</a>
    <a class="button" href="/books/show">View Books</a>
@endsection