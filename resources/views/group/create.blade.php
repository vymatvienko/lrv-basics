<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Создание новой группы</h1>

    <form action="{{ route('group.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Название группы</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="start_from">Дата начала обучения группы</label>
            <input type="date" class="form-control" name="start_from" id="start_from">
        </div>
        <div class="form-group">
            <label for="is_active">Группа начала обучение?</label>
            <input type="hidden" id="is_active" name="is_active" value="not active">
            <input type="checkbox" id="is_active" name="is_active" value="active">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Создать группу</button>
    </form>
    <br>

    <a class="btn btn-primary" href="/groups">Назад</a>
</body>
</html>