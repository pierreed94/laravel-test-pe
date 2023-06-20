<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login() {
        if (Auth::user()) {
            return redirect()->intended(route('home_admin'));
        }
        return view('auth.login');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->forget('cart');
        return to_route('auth.login');
    }

    public function doLogin(LoginRequest $request) {

        $credentials = $request->validated();

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('home_admin'));
        }

        return to_route('auth.login')->withErrors([
            'email' => 'email invalide'
        ])
            ->onlyInput('email');
    }

    public function register() {

        if (Auth::user()) {
            return redirect()->intended(route('home_admin'));
        }

        return view('auth.register');
    }
    public function store(LoginRequest $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->validated();
        if (Auth::attempt($credentials) ){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

    }

}
