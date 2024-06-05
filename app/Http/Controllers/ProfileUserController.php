<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if(!Auth::check()){
            return redirect(route('user.login'));
        }

        $user_lists = User::query()->find(Auth::user()->id)->task_lists->toArray();

        return view('dashboard', compact('user_lists'));
    }
}
