<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

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
        $location = Location::all();

        return view('front.properties', compact('properties', 'location'));
    }
    public function property($id)
    {
        $properties = Property::find($id);
        $similar = Property::where('property_type', $properties->property_type)->get();
        return view('front.property', compact('properties', 'similar'));
    }
    public function search(Request $request)
    {
        $location_id = $request->input('location_id');
        $bedroom = $request->input('bedroom');
        $bathroom = $request->input('bathroom');
        $propertyType = $request->input('property_type');
        $serviceType = $request->input('service_type');
        $MinArea = $request->input('min_area');
        $MaxArea = $request->input('max_area');
        $MinPrice = $request->input('min_price');
        $MaxPrice = $request->input('max_price');
        $searchTerm = $request->input('search');

        $originalProperties = Property::query();
        $filteredProperties = $originalProperties;

        if ($searchTerm) {
            $filteredProperties->where('title', 'like', '%' . $searchTerm . '%');
        }

        if ($serviceType) {
            $filteredProperties->where('service_type', $serviceType);
        }

        if ($location_id) {
            $filteredProperties->where('location_id', $location_id);
        }

        if ($bedroom) {
            $filteredProperties->where('bedroom', $bedroom);
        }

        if ($bathroom) {
            $filteredProperties->where('bathroom', $bathroom);
        }

        if ($propertyType) {
            $filteredProperties->where('property_type', $propertyType);
        }

        if ($serviceType) {
            $filteredProperties->where('service_type', $serviceType);
        }
        if ($MinArea && $MaxArea) {
            $filteredProperties->whereBetween('size', [$MinArea, $MaxArea]);
        } elseif ($MinArea) {
            $filteredProperties->where('size', '<', $MinArea);
        } elseif ($MaxArea) {
            $filteredProperties->where('size', '>', $MaxArea);
        }
        if ($MinPrice && $MaxPrice) {
            $filteredProperties->whereBetween('size', [$MinPrice, $MaxPrice]);
        } elseif ($MinPrice) {
            $filteredProperties->where('size', '<', $MaxPrice);
        } elseif ($MaxPrice) {
            $filteredProperties->where('size', '>', $MaxPrice);
        }

        if ($searchTerm || $serviceType || $location_id || $bedroom || $bathroom || $propertyType || $MinArea || $MaxArea || $MinPrice || $MaxPrice) {
            $filteredProperties = $originalProperties;
        }

        $properties = $filteredProperties->paginate(20);
        $location = Location::all();

        return view('front.properties', compact('properties', 'location'));
    }
}
