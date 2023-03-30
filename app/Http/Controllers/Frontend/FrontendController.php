<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;

class FrontendController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $bole = Property::where('location_id', '1')->count();
        return view('front.index', compact('properties', 'bole'));
    }
    public function properties()
    {
        $properties = Property::all();
        return view('front.properties', compact('properties'));
    }
    public function property()
    {
        $properties = Property::all();
        return view('front.property', compact('properties'));
    }
}
