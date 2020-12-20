<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категории</title>
</head>
<body>
    {{$html}}
@forelse ($categoriesOfNews as $id => $item)
    <div>
        <a href="/categories/{{$id}}">{{$item['title']}}</a>
    </div>
@empty
    <p>Категорий нет</p>
@endforelse      
</body>
</html>