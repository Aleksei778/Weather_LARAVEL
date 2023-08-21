<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>form</title>
</head>
<style>
    body {
        background-color: black;
    }
</style>
<body>
    <form method="post" action="/form/submit">
        @csrf
        <div class="mb-3">
            <label class="form-label text-light"><h1>Введите город для получения погоды     //вводить надо на английском</h1></label>
            <input type="text" name="city" id="city" placeholder="Ввод города" class="form-control">
        </div>
        <button type="submit" class="btn btn-light"><h3 class=".text-dark">Узнать погоду</h3></button>
    </form>
</body>
</html>