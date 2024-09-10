<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $group->title }}</h1>
    <p>id: {{ $group->id }}, название: {{ $group->title }}, дата начала обучения: {{ $group->start_from }}</p>
    <h3>Студенты группы: </h3>

    <table>
        <tr>
            <th>id студента</th>
            <th>id группы</th>
            <th>Имя</th>
            <th>Фамилия</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->group_id }}</td>
            <td><a href="/groups/{{ $group->id }}/students/{{ $student->id }}">{{ $student->name }}</a></td>
            <td><a href="/groups/{{ $group->id }}/students/{{ $student->id }}">{{ $student->surname }}</a></td>
        </tr>
        @endforeach
    </table>
    <br>
    <a class="btn btn-primary" href="{{ route('student.create', $group) }}">Добавить нового студента в группу</a>
    <br>
    <br>
    <div>
        <a class="btn btn-primary" href="{{ route('group.index') }}"> Вернуться к списку групп</a>
    </div>

</body>
</html>