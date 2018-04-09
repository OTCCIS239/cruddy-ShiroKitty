


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('foundation/css/foundaton.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('foundation/css/app.css') }}">
    </head>
    <body>
        <div class="content">
            <div class="links">
                <a href="/">Home</a>
                <a href="anime">Anime</a>
                <a href="movies">Movies</a>
                <a href="books">Books</a>
                <a href="games">Games</a>
                <a href="shows">Tv Shows</a>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>