<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в аккаунт</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center h-screen bg-gray-300">
        <!-- Sign-in form -->
        <div class="w-3/12 p-8 mb-40 shadow-lg bg-white rounded-2xl">
            <h1 class="text-2xl block text-center font-semibold">Спасибо за регистрацию</h1>
            <div class="flex justify-center mt-3"><a href="{{route('user.profile')}}" class="text-indigo-800  font-semibold">Перейти в профиль</a></div>
        </div>
    </div>
</body>
</html>
