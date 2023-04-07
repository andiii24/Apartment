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
        return view('front', compact('properties', 'bole'));
    }
    public function properties()
    {
        $properties = Property::paginate(20);

        return view('front.properties', compact('properties'));
    }
    public function property($id)
    {
        $properties = Property::find($id);
        $similar = Property::where('property_type', $properties->property_type)->get();
        return view('front.property', compact('properties', 'similar'));
    }
}
