<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $student->surname }} {{ $student->name }}</h1>

    <p>id: {{ $student->id }}</p>
    <p>id группы обучения: {{ $student->group_id }}</p>
    <p>Название группы: {{ $group_title }}</p>
    <p>Имя: {{ $student->name }}</p>
    <p>Фамилия: {{ $student->surname }}</p>

    <br>
    <a class="btn btn-primary" href="{{ route('group.index') }}"> Вернуться к списку групп</a>
    <br> 
    <a class="btn btn-primary" href="{{ route('group.show', $group->id) }}"> Вернуться к списку студентов группы</a>
</body>
</html>