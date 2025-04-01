<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use App\Models\OrderPhoto;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
