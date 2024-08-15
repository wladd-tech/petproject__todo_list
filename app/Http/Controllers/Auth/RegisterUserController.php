<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterUserController extends Controller
{
    public function __invoke(Request $request): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('user.profile');
        }

        return view('auth.register');
    }
}
