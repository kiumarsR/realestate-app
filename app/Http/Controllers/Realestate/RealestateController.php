<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Province;
use App\Models\Realestate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealestateController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified')->only('add-property');
    }
    // public function properties(Request $request)
    // {
    //     $select_province = $request->input('select_province');
    //     $ad_type = $request->input('ad_type');
    //     $tobu = $request->input('tobu');
    //     $wc_type = $request->input('wc_type');
    //     $select_city = $request->input('select_city');

    //     $realestates = Realestate::when($request->has('select_province') && $request->filled('select_province'), function ($query) use ($select_province) {
    //         $query->where('province_id', 'like', '%' . $select_province . '%');
    //     })
    //     ->when($request->has('ad_type') && $request->filled('ad_type'), function ($query) use ($ad_type) {
    //         $query->where('ad_type', 'like', '%' . $ad_type . '%');
    //     })

    //     ->orderBy('id', 'desc')->paginate(12)->withQueryString();

    //     $provinces = Province::with('cities')->with('districts')->get();
    //     return view('properties.properties', compact(['realestates', 'provinces']));
    // }
    public function properties(Request $request)
    {
        $select_province = $request->input('select_province');
        $ad_type = $request->input('ad_type');
        $tobu = $request->input('tobu');
        $total_bedrooms = $request->input('total_bedrooms');
        $select_city = $request->input('select_city');
        $realestates = Realestate::when($select_province or $ad_type or $tobu or $total_bedrooms or $select_city, function ($query) use ($select_province, $ad_type, $tobu, $total_bedrooms, $select_city) {
            $query->where('province_id', 'like', '%' . $select_province . '%');
            $query->where('ad_type', 'like', '%' . $ad_type . '%');
            $query->where('tobu', 'like', '%' . $tobu . '%');
            $query->where('total_bedrooms', 'like', '%' . $total_bedrooms . '%');
            $query->where('city_id', 'like', '%' . $select_city . '%');
        })->orderBy('id', 'desc')->paginate(12)->withQueryString();
        $provinces = Province::with('cities')->with('districts')->orderBy('id')->get();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }



    public function single($id)
    {
        $realestate = Realestate::with('facilities')->findOrFail($id);
        $realestates =Realestate::orderByDesc('id')->take(3)->get();
        $similars = Realestate::with('province')->where('province_id', '=', $realestate->province_id)->Where('ad_type', '=', $realestate->ad_type)->inRandomOrder()->take(6)->get();
        // $similars = Realestate::when($realestate, function ($query, $realestate) {
        //     return $query->where('ad_type', $realestate->province_id);
        // })->inRandomOrder()->take(6)->get();
        return view('properties.single-gallery', compact('realestate', 'realestates', 'similars'));
    }

    public function create()
    {
        $this->middleware(['auth', 'verified']);
        $facilities = Facility::all();
        $provinces = Province::with('cities')->with('districts')->get();
        return view('properties.add-property', compact(['provinces', 'facilities']));
    }

    public function store(Request $request)
    {
        // $user = Auth::user(); // Retrieve the currently authenticated user...
        // $id = Auth::id(); // Retrieve the currently authenticated user's ID...
        // dd($request->all());
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
            "kitchen_cabinets" => $request->input('kitchen_cabinets'),
            "heating_system" => $request->input('heating_system'),
            "cooling_system" => $request->input('cooling_system'),
            "housing" => $request->input('housing'),
            "dst" => $request->input('dst'),
        ]);
        $realestate->facilities()->attach($request->input('facilities'));
        return redirect()->route('welcome');
    }

    /**
     * return properties for each province by id
     */

    public function tehran()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('province_id', '=', '8')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
    public function isfahan()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('province_id', '=', '4')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
    public function shiraz()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('province_id', '=', '17')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
    public function tabriz()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('province_id', '=', '1')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
    public function mashhad()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('province_id', '=', '11')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }

    /**
     * return properties by ad_type
     */

    public function sale()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('ad_type', '=', 'sale')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
    public function mortage()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('ad_type', '=', 'mortage')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
    public function rent()
    {
        $provinces = Province::with('cities')->with('districts')->get();
        $realestates = Realestate::where('ad_type', '=', 'rent')->orderBy('id', 'desc')->paginate();
        return view('properties.properties', compact(['realestates', 'provinces']));
    }
}
