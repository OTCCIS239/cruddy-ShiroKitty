@extends('layout.master')

@section('content')

    <!-- <pre>{{ json_encode(\App\Game::all(), JSON_PRETTY_PRINT) }}</pre> -->
    <pre><?php echo $game->toJson(JSON_PRETTY_PRINT) ?></pre>

    <form action="/games/{{ $game->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <button type="submit button" class="alert button">Delete</button>
    </form>
@endsection