<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($hello_array as $hello_word)
                <li>{{ $hello_word }}</li>
        @endforeach
    </li>
</body>
</html>
