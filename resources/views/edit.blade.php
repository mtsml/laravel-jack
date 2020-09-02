<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="/edit" method='POST'>
        @csrf
        <label for="test">入力フォーム</label>
        <input id="test">
        <button type='submit'>
    </form>
</body>
</html>