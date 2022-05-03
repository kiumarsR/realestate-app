<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realestate;
use App\Models\Province;

class WelcomeController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        $realestates = Realestate::orderBy('created_at', 'desc')->get();
        return view('index', compact('realestates', 'provinces'));
    }
}
