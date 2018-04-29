@extends('layout.master')

@section('content')

    <pre><?php echo $show->toJson(JSON_PRETTY_PRINT) ?></pre>

    <form action="/shows/{{ $show->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <br>
        <button type="submit button" class="alert button">Delete</button>
    </form>

@endsection