<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            "phone_number" => $request->input('phone_number'),
            "password" => $request->input('password')
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('user');
        }
 
        return back()->withErrors([
        ]);
    }

    public function register()
    {
        return view('pages.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create([
            "phone_number" => $request->input('phone_number'),
            "email" => $request->input('email'),
            "first_name" => $request->input('first_name'),
            "last_name" => $request->input('last_name'),
            "password" => Hash::make($request->input('password')),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
        return redirect()->route('profile');
    }
}
