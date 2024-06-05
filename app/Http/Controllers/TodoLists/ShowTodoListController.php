<?php

namespace App\Http\Controllers\TodoLists;

use App\Http\Controllers\Controller;
use App\Models\TaskList;
use Illuminate\Http\Request;

class ShowTodoListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $task_list_id)
    {

        $tasks = TaskList::query()->find($task_list_id)->tasks;

        return view('todo-list', compact('tasks', 'task_list_id'));
    }
}
