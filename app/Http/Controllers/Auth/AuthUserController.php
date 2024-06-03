<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\alert;
use function Laravel\Prompts\error;
use function Laravel\Prompts\password;

class AuthUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AuthUserRequest $request)
    {
        $data = $request->validated();
        $user = User::where('name', $data['name'])->first();
        if($user && Hash::check($data['password'], $user['password'])){
            Auth::login($user);
        }
        return redirect(route('profile'));
    }
}
