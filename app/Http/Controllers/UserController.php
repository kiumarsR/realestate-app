<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Province;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['addProperty']);
    }
    public function index(User $id,Request $request)
    {
        $users = User::findOrFail($id);
        return view('user.user-profile', compact('users'));
    }

    public function edit(User $id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(User $user, RegisterRequest $request)
    {
        dd($request->all());
        // $update = [
        //     "phone_number" => $request->input('phone_number'),
        //     "first_name" => $request->input('first_name'),
        //     "last_name" => $request->input('last_name'),
        //     "password" => $request->input('password'),
        // ];
        // $user->update($update);
        // return redirect()->route('profile')
        //     ->with('success', 'ویرایش با موفقیت انجام شد!');
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
        $province = Province::with('cities')->with('districts')->get();
        return redirect()->route('add-property', compact('province'));
    }
}
