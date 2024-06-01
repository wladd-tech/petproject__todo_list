<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Tailwind CSS</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center h-screen bg-gray-300">
        <!-- Sign-in form -->
        <form action="{{route('store')}}" method="POST" class="w-3/12 p-8 mb-40 shadow-lg bg-white rounded-2xl">
            @csrf
        <div>
            <h1 class="text-2xl block text-center font-semibold">Регистрация аккаунта</h1>
            <hr class="mt-3">
            <!-- Username input -->
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Имя пользователя</label>
                <input type="text" id="username" name="username"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="Имя">
            </div>
            <!-- Email input -->
            <div class="mt-3">
                <label for="email" class="block text-base mb-2">Email (не обязательно)</label>
                <input type="email" id="email" name="email"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="email">
            </div>
            <!-- Password input -->
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Пароль</label>
                <input type="password" id="password" name="password"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="Пароль">
            </div>
            <!-- Password-repeat input -->
            <div class="mt-3">
                <label for="password-repeat" class="block text-base mb-2">Повторите пароль</label>
                <input type="password" id="password-repeat" name="password-repeat"
                    class="border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 focus:border-gray-400"
                    placeholder="Пароль еще раз">
            </div>
            <!-- Sign-up button -->
            <div class="mt-8">
                <button type="submit" class="border-2 py-1.5 w-full text-white font-semibold
                    border-indigo-800 bg-indigo-800 rounded-xl
                    hover:bg-indigo-900">Зарегистрироваться</button>
            </div>
            <!-- Sign-in link -->
            <div class="mt-3 flex justify-center gap-2 items-center mr-5">
                <div><span>Уже есть аккаунт? </span></div>
                <div><a href="#" class="text-indigo-800 font-semibold">Войдите</a></div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>
