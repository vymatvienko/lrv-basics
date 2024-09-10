<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Добавление студента в группу</h1>
    <form action="{{ route('student.store', $group) }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">id группы</label>
        <input type="text" class="form-control" id="group_id" name="group_id" value="{{ $group }}" readonly>
      </div>
      <div class="form-group">
        <label for="title">Фамилия</label>
        <input type="text" class="form-control" id="surname" name="surname">
      </div>
      <div class="form-group">
        <label for="title">Имя</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      
      <br>
      <button type="submit" class="btn btn-primary">Добавить студента</button>
    </form>
    <br>

    <div>
        <a class="btn btn-primary" href="{{ route('group.index') }}">Вернуться к списку групп</a>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('group.show', $group) }}"> Вернуться к списку студентов группы {{ $group }}</a>
    </div>
</body>
</html>