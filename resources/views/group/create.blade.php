<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Создание новой группы</h2>
    <form>
        <label>
            <p>Название группы</p>
            <input name="title"></input>
        </label>
        <label>
            <p>Дата начала обучения</p>
            <input name="start_from"></input>
        </label>
        <label>
            <p>Группа начала обучение?</p>
            <input type="radio" name="is_active_yes">да</input>
            <input type="radio" name="is_active_no">нет</input>
        </label>
        <br>
        <br>
        <br>
        <button type="submit">Создать группу</button>
    </form>
</body>
</html>