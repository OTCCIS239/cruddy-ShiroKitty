@extends('layout.master')

@section('content')
    <h2>Books</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Publication Date</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($book as $books)
        <tr>
            <td>{{ $books->title }}</td>
            <td>{{ $books->genre }}</td>
            <td>{{ $books->publication_date }}</td>
            <td><a href="/books/{{ $books->id }}/edit" type="button" class="button">Edit</a></td>
            <td><a href="/books/{{ $books->id }}" type="button" class="button">Show</a></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/books/create">Add A Book</a>
@endsection