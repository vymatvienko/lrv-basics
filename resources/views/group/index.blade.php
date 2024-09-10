<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Группы:</h1>

    @foreach ($group as $oneGroup)
        <a href="groups/{{ $oneGroup->id }}">
            <p>id: {{ $oneGroup->id }}, название: {{ $oneGroup->title }}, дата начала обучения: {{ $oneGroup->start_from }}</p>
        </a>
    @endforeach

    <a href='groups/create'>Создать новую группу</a>
</body>
</html>