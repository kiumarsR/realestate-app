<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user-profile');
    }
    public function myProperties()
    {
        return view('user.my-properties');
    }

    public function favourite()
    {
        return view('user.favourite-properties');
    }

    public function addProperty()
    {
        return redirect()->route('add-property');
    }
    
}
