<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\User;
use App\Models\Realestate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealestateController extends Controller
{
    public function properties()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::latest(5)->paginate()->withQueryString();
        return view('properties.properties', compact('realestates', 'provinces'));
    }

    public function single()
    {
        return view('properties.single-gallery');
    }

    public function create()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        return view('properties.add-property', compact(['provinces']));
    }

    public function store(Request $request)
    {
        // $user = Auth::user(); // Retrieve the currently authenticated user...
        // $id = Auth::id(); // Retrieve the currently authenticated user's ID...
        $realestate = Realestate::create([
            "province_id" => $request->input('province'),
            "city_id" => $request->input('city'),
            "district_id" => $request->input('district'),
            "user_id" => Auth::id(),
            "title" => $request->input('property-title'),
            "ad_type" => $request->input('ad_type'),
            "sale_price" => $request->input('sale_rent_price'),
            "area" => $request->input('area'),
            "full_address" => $request->input('address'),
            "description" => $request->input('property-description'),
            "total_floors" => $request->input('total_floors'),
            "apartment_floor" => $request->input('apartment_floor'),
            "noaf" => $request->input('noaf'),
            "total_bedrooms" => $request->input('bedrooms'),
            "wc_type" => $request->input('bathrooms_type'),
            "building_age" => $request->input('building_age'),
            "tobu" => $request->input('tobu'),
            "building_direction" => $request->input('building_direction'),
            "frontage_type" => $request->input('frontage_type'),
            "fct" => $request->input('fct'),
            // "" => $request->input(''),
            "kitchen_cabinets" => $request->input('kitchen_cabinets'),
            "heating_system" => $request->input('heating_system'),
            "cooling_system" => $request->input('cooling_system'),
            "housing" => $request->input('housing'),
            "dst" => $request->input('dst'),
        ]);
        return redirect()->route('welcome');
    }
}
