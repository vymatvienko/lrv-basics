<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Список студентов</h1> 

<table class="table table-bordered">
  <tr>
      <th>id</th>
      <th>id группы</th>
      <th>Имя</th>
      <th>Фамилия</th>
  </tr>
  @foreach ($students as $student)
  <tr>
      <td>{{ $student->id }}</td>
      <td>{{ $student->group_id }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->surname }}</td>
  </tr>
  @endforeach
</table>
<a href="{{ route('group.index') }}">Вернуться к группам</a> 

</body>
</html>