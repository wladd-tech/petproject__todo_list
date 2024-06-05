<?php

namespace App\Http\Controllers\TodoLists;

use App\Http\Controllers\Controller;
use App\Models\TaskList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreTodoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        TaskList::query()->create([
            'title' => $request->toArray()['todo-text'],
            'user_id' => Auth::user()->id,
            ]);

        return redirect()->route('user.profile');
    }
}
