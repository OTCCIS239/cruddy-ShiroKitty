


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('foundation/css/foundation.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('foundation/css/app.css') }}">
    </head>
    <body>
        <div class="top-bar">
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/anime">Anime</a></li>
                    <li><a href="/movies">Movies</a></li>
                    <li><a href="/books">Books</a></li>
                    <li><a href="/games">Games</a></li>
                    <li><a href="/shows">Tv Shows</a></li>
                </ul>
            </div>
        <div class="grid-container">
            
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>