<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Jack</title>
</head>
<body>
    <header>
        <a href="/">
            TOP
        </a>
    </header>
    <h1>おすすめYoutuber</h1>
    <ul>
        @foreach ($channel_list as $channel)
            <li>
                <a href='/channel/{{$channel["channel_id"]}}'>
                    {{ $channel["channel_nm"] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>