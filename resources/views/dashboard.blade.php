<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300 w-10/12 m-auto">
<form class="mt-10 rounded-md w-2/5 shadow-md  bg-white mx-auto px-4 py-2" method="POST" action="{{route('todo.list.store')}}">
    @csrf
    <div class="flex items-center py-2">
        <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-10 py-1 px-2 leading-tight focus:outline-none"
                type="text" placeholder="Добавить список" name="todo-text" id="todo-text">
        <button
                class="flex-shrink-0 bg-gray-500 hover:bg-gray-700 border-gray-500 hover:border-gray-700 text-sm border-4 text-white py-1 px-2 rounded-sm"
                type="submit">
            Создать
        </button>
    </div>
</form>


<div class="mt-16 grid grid-cols-3 gap-4 p-4 ">
    @foreach($user_lists as $user_list)
        <a href="{{route('todo.todo-list',$user_list['id'])}}">
            <div class="h-16 font-bold bg-white shadow-md rounded-md p-4 hover:bg-blue-100 hover:border-2 hover:border-blue-400 flex place-content-between">
                <span>{{$user_list['title']}}</span>
            </div>
        </a>
    @endforeach
</div>
</body>