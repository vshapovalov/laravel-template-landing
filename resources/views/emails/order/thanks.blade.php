<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Спасибо за уделенное время</title>
</head>
<body>
    <h5>Приветствуем, {{ $order->name }}.</h5>
    <p>Спасибо за уделенное время, получена, ответ будет предоставлен в ближайшее время.</p>
    <br>
    <p>С уважениеи,<br>{{ data_content('title') }}.</p>
</body>
</html>