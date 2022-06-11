<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware(['signed'])->only('verify');
        $this->middleware(['throttle:6,1'])->only('resend');
    }
    /**
     * returns verification notice view
     *
     * @return void
     */
    public function notice()
    {
        return view('auth.verify-email');
    }

    /**
     * sends verification link
     *
     * @return void
     */
    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', '!آدرس تایید پست الکترونیک ارسال شد');
    }

    /**
     * verifies the email
     *
     * @return void
     */
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/');
    }
}
