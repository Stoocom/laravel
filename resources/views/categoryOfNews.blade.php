<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категории</title>
</head>
<body>
    {{$html}}
@foreach ($category_news as $id => $item)
    <div>
        <h3>{{$item['title']}}</h3>
        <div>{{$item['description']}}</div>
    </div>
    <hr>
@endforeach
</body>
</html>