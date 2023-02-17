<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create');
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
            'title'=>'required || max:255',
            'price'=>'required || numeric',
            'property_type'=>'required',
            'payment_type'=>'required',
            'service_type'=>'required',
            'property_description'=>'required',
            'size'=>'required||numeric',
            'location_id'=>'required',
            'bedroom'=>'integer',
            'bathroom'=>'integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
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
        return redirect()->route('add-properties')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
