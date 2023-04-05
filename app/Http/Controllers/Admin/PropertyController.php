<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        $sold = Property::where('property_status', 1)->get();
        $available = Property::where('property_status', 0)->get();
        return view('admin.property.index', compact('properties', 'available', 'sold'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = Location::all();
        return view('admin.property.create', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required || max:255',
            'price' => 'required || numeric',
            'property_type' => 'required',
            'payment_type' => 'required',
            'service_type' => 'required',
            'property_description' => 'required',
            'size' => 'required||numeric',
            'location_id' => 'required',
            'bedroom' => 'integer',
            'bathroom' => 'integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // store the images
        $images = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $imageName = uniqid() . '.' . $file->getClientOriginalName();
                $file->move(public_path('upload/Property'), $imageName);
                $images[] = $imageName;
            }
        } else {
            $images = "default.jpg";
        }

        $property = new Property;
        $property->images = $images;
        $property->title = $request->input('title');
        $property->price = $request->input('price');
        $property->property_type = $request->input('property_type');
        $property->payment_type = $request->input('payment_type');
        $property->service_type = $request->input('service_type');
        $property->property_description = $request->input('property_description');
        $property->size = $request->input('size');
        $property->location_id = $request->input('location_id');
        $property->bedroom = $request->input('bedroom');
        $property->bathroom = $request->input('bathroom');
        $property->save();
        // Redirect to the property index page
        return redirect()->route('admin.properties')
            ->with('success', 'Property added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        return view('admin.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        return view('admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required || max:255',
            'price' => 'required || numeric',
            'property_type' => 'required',
            'payment_type' => 'required',
            'service_type' => 'required',
            'property_description' => 'required',
            'size' => 'required||numeric',
            'location_id' => 'required',
            'bedroom' => 'integer',
            'bathroom' => 'integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $property = Property::find($id);

        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }

        // delete old images
        foreach ($property->images as $image) {
            Storage::delete('upload/Property/' . $image);
        }

        // store the images
        $images = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $imageName = uniqid() . '.' . $file->getClientOriginalName();
                $file->move(public_path('upload/Property'), $imageName);
                $images[] = $imageName;
            }
        } else {
            $images = "default.jpg";
        }

        $property->images = $images;
        $property->title = $request->input('title');
        $property->price = $request->input('price');
        $property->property_type = $request->input('property_type');
        $property->payment_type = $request->input('payment_type');
        $property->service_type = $request->input('service_type');
        $property->property_description = $request->input('property_description');
        $property->size = $request->input('size');
        $property->location_id = $request->input('location_id');
        $property->bedroom = $request->input('bedroom');
        $property->bathroom = $request->input('bathroom');
        $property->save();

        // Redirect to the property index page
        return redirect()->route('admin.properties')
            ->with('success', 'Property updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->property_status = 1;
        $property->save();

        return redirect()->route('admin.properties')
            ->with('success', 'Property Deleted successfully.');
    }
}
