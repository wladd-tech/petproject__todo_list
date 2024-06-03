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
        <form action="{{route('auth.auth')}}" method="POST" class="w-3/12 p-8 mb-40 shadow-lg bg-white rounded-2xl">
            @csrf
        <div>
            <h1 class="text-2xl block text-center font-semibold">Вход в аккаунт</h1>
            <hr class="mt-3">
            <!-- Username input -->
            <div class="mt-3">
                <label for="name" class="block text-base mb-2">Имя пользователя</label>
                @error('name')
                <p class="text-red-500">{{$message}}</p>
                @enderror
                <input type="text" id="name" name="name"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="Имя">
            </div>
            <!-- Email input -->
            <div class="mt-3">
                <label for="email" class="block text-base mb-2">Email (не обязательно)</label>
                @error('email')
                <p class="text-red-500">{{$message}}</p>
                @enderror
                <input type="email" id="email" name="email"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="email">
            </div>
            <!-- Password input -->
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Пароль</label>
                @error('password')
                <p class="text-red-500">{{$message}}</p>
                @enderror
                <input type="password" id="password" name="password"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="Пароль">
            </div>
            <!-- Remember me and Forgot password (hidden) -->
            <div class="mt-4 mx-2 flex justify-between items-center">
                <div>
                    <input class="mr-1" type="checkbox">
                    <label>Запомнить меня</label>
                </div>
                <div>
                    <a href="#" class="text-indigo-800 font-semibold">Забыли пароль</a>
                </div>
            </div>
            <!-- Sign-in button -->
            <div class="mt-6">
                <button type="submit" class="border-2 py-1.5 w-full text-white font-semibold
                    border-indigo-800 bg-indigo-800 rounded-xl
                    hover:bg-indigo-900">Войти</button>
            </div>
            <!-- Sign-up link -->
            <div class="mt-3 block text-center">
                <div>
                    <span>Нет профиля? </span><a href='{{route('auth.register')}}' class="text-indigo-800 font-semibold">Зарегистрируйся</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>
