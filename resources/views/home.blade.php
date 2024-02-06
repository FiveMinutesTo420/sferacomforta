<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сфера Комфорта</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="text-red-500 p-6">
        Здравствуйте, {{auth()->user()->surname }} {{mb_substr(auth()->user()->name,0,1) }}.{{mb_substr(auth()->user()->patronymic,0,1) }}
    </div>
</body>
</html>