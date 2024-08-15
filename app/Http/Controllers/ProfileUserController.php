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
        else{
            $user = User::find(Auth::user())->first();
            $user_name = $user['name'];
        }


        return view('user-profile', compact('user_name'));
    }
}
