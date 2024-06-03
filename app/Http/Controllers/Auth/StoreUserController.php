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
        $data = $request->validated();
        $password = $data['password'];
        $data['password'] = Hash::make($password);

        $user = User::create($data);
        Auth::login($user);
        return redirect(route('profile'));
    }
}