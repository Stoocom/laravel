<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News1</title>
</head>
<body>
@if (count($newsOne) > 0)
<div>
    <h1>{{$newsOne['title']}}</h1>
    <div>{{$newsOne['description']}}</div>
</div>
@else
    Нет записей!
@endif
</body>
</html>