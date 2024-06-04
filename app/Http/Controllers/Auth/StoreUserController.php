<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StoreUserController extends Controller
{
    public function __invoke(StoreUserRequest $request)
    {
        $request->validated();

        $user = User::create($request->all());
        Auth::login($user);

        return view('auth.thanks-for-registration');
    }
}