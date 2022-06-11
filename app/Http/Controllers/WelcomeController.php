<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Realestate;
use App\Models\Province;

class WelcomeController extends Controller
{
    public function index()
    {
        $provinces = Province::with('cities')->get();
        $realestates = Realestate::inRandomOrder()->take(9)->get();
        return view('index', compact('realestates', 'provinces'));
    }
}
