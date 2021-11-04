<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>
    <body>
        <header>
            <h1>Home</h1>

            <ul>
                @foreach ($pages as $page)
                    <li><a href="http://127.0.0.1:8000/{{$page}}">{{$page}}</a></li>
                @endforeach
            </ul>
        </header>
    </body>
</html>