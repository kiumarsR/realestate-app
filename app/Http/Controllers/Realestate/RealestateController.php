<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class RealestateController extends Controller
{
    public function create()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        // $cities = City::all();
        // $districts = District::all();
        return view('properties.add-property', compact(['provinces']));
    }

    public function properties()
    {
        return view('properties.properties');
    }

    public function single()
    {
        return view('properties.single-gallery');
    }
}
