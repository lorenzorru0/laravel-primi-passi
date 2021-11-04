<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Page3</title>
    </head>
    <body>
        <header>
            <h1>Page3</h1>

            <ul>
                @foreach ($pages as $page)
                    @if ($page == 'home')
                        <li><a href="http://127.0.0.1:8000">{{$page}}</a></li>
                    @else
                        <li><a href="http://127.0.0.1:8000/{{$page}}">{{$page}}</a></li>
                    @endif
                @endforeach
            </ul>
        </header>
    </body>
</html>