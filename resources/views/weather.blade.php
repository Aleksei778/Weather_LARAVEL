<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>weather</title>
</head>
<style>
    body {
        background-color: black;
    }
</style>
<body>
    <h1 class="text-light">Текущий запрос</h1>
    <ul class="list-group">
        @foreach ($weather as $el)
        @if ($el->id != count($weather)) 
            @continue
        @endif
            <li class="list-group-item list-group-item-light d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <ul type = "circle" class="list-group">
                        <li>В городе {{$el->city}} температура составляет {{$el->temperature}}</li>
                        <li>Небо: {{$el->sky}}</li>
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
    <h1 class="text-light">Вывод всех данных из базы данных</h1>
    <ul class="list-group">
        @foreach ($weather as $el)
            <li class="list-group-item list-group-item-light d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <ul type = "circle" class="list-group">
                        <li>В городе {{$el->city}} температура составляет {{$el->temperature}}</li>
                        <li>Небо: {{$el->sky}}</li>
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>