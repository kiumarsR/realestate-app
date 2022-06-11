<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Province;
use App\Models\Realestate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(User $id, Request $request)
    {
        $users = User::findOrFail($id);
        return view('user.user-profile', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(UserEditRequest $request, $id)
    {
        // $user = User::findOrFail($id);
        // $user->phone_number = $request->phone_number;
        // $user->email = $request->email;
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->password = $request->password;
        // $user->save();
        
        User::where('id', $id)
            ->update([
                "phone_number" => $request->input('phone_number'),
                "email" => $request->input('email'),
                "first_name" => $request->input('first_name'),
                "last_name" => $request->input('last_name'),
                "password" => Hash::make($request->input('password')),
        ]);

        return redirect()->route('profile')->with('success', 'ویرایش با موفقیت انجام شد!');

        // return redirect()->route('profile');
        // ->with('success', 'ویرایش با موفقیت انجام شد!');
    }

    public function myProperties()
    {
        $my_properties = Realestate::where('user_id', '=', Auth::user()->id)
        ->Paginate(7);
        return view('user.my-properties', compact('my_properties'));
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
