<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
</head>
<body>
    <h1>Home page</h1>
    <header>
        <ul>
            <li> <a href="{{ url('/') }}">Home</a> </li>
            <li><a href="{{ route('caracters') }}">Caracters</a></li>
            <li><a href="{{ route('comics') }}">Comics</a></li>
            <li><a href="{{ route('movies') }}">Movies</a></li>
            <li><a href="{{ route('tv') }}">Tv</a></li>
            <li><a href="{{ route('games') }}">Games</a></li>
            <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
            <li><a href="{{ route('vedeos') }}">Vedeos</a></li>
            <li><a href="{{ route('fans') }}">Fans</a></li>
            <li><a href="{{ route('news') }}">News</a></li>
        </ul>
    </header>
</body>
</html>