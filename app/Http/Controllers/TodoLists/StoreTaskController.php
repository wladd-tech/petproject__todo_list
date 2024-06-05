<?php

namespace App\Http\Controllers\TodoLists;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StoreTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $todo_list_id)
    {
        Task::query()->create([
            'title' => $request->toArray()['task-text'],
            'status' => 0,
            'lists_id' => $todo_list_id,
        ]);

        return Redirect::back();

    }
}
