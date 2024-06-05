<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300 w-10/12 m-auto">
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-16">
    <div class="px-4 py-2">
        <h1 class="text-gray-800 font-bold text-2xl uppercase">Мои задачи</h1>
    </div>
    <form class="w-full  mx-auto px-4 py-2" method="POST" action="{{route('todo.task.store', $task_list_id)}}">
        @csrf
        <div class="flex items-center border-b-2 border-gray-500 py-2">
            <input
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-10 py-1 px-2 leading-tight focus:outline-none"
                    type="text" placeholder="Добавить задачу" name="task-text" id="task-text">
            <button
                    class="flex-shrink-0 bg-gray-500 hover:bg-gray-700 border-gray-500 hover:border-gray-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="submit">
                Добавить
            </button>
        </div>
    </form>
    <ul class="divide-y divide-gray-200 px-4">
        @foreach($tasks as $task)
            <li class="py-4">
                <div class="flex items-center justify-normal">
                    <input id="todo3" name="todo3" type="checkbox"
                           class="h-5 w-5 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <label for="todo3" class="ml-5 block w-96 text-gray-900">
                        <span class="text-lg text-left font-medium">{{$task->title}}</span>
                    </label>
                    <button class="flex items-center justify-center bg-red-500 hover:bg-red-800
                    border-red-500 hover:border-red-800 text-sm font-semibold
                    border-4 text-white w-6 h-6 rounded-sm">
                        X
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
</body>