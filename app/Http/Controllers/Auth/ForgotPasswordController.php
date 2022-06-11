<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
        return view('auth.forgot-password');
    }

    public function submission(Request $request)
    {
        // dd($request->all());
        $request->validate(['email' => 'required|email|exists:users,email']);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
 
        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }

    public function reset($token)
    {
        // dd($token);
        return view('auth.reset-password', ['token' => $token]);
    }

    public function update(Request $request)
    {
        $request->validate([
        'token' => 'required',
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:8|max:32|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
    }
}
