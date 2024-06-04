<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function __invoke(AuthUserRequest $request)
    {
        $data = $request->validated();
        $remember = $request->boolean('remember');


        if (Auth::attempt($data, $remember)){
            $request->session()->regenerate();
            return redirect()->intended('profile');
        }

        return back();
    }
}
