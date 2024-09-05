<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>{{ $id }}</h1>
    <h1>{{ $title }}</h1>
    <h1>{{ $group }}</h1> -->

    <h1>Группы:</h1>

    @foreach ($group as $oneGroup)
        <p>id: {{ $oneGroup->id }}, имя: {{ $oneGroup->title }}, дата начала обучения: {{ $oneGroup->start_from }}</p>
    @endforeach

    <a href='groups/create'>Создать новую группу</a>
</body>
</html>