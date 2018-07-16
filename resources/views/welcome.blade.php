<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laracast laravel videos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Learning Some laravel</h1>

    <ul>
    <!-- the @ symbol is blade's special helpers, which blade is laravels template engine -->
        @foreach ($task as $todo)

            <li>{{$todo->body}}</li>

        @endforeach
    </ul>
</body>
</html>