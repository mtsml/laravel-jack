<!DOCTYPE html>
<html lang="en">
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
    <h1>
        <a href='https://www.youtube.com/channel/{{$channel["channel_id"]}}' target="_blank">
            {{$channel["channel_nm"]}}
        </a>        
    </h1>
    <ul>
        @foreach ($video_list as $video)
            <li>
                <a href='/video/{{$video["video_id"]}}'>
                    {{ $video["video_nm"] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
