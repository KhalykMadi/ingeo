<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Client</title>
</head>
<body>
<div id="app">
    <client-app></client-app> <!-- Здесь рендерится Vue компонент -->
</div>

<script src="{{ mix('js/app.js') }}"></script> <!-- Подключаем скомпилированный Vue код -->
</body>
</html>
