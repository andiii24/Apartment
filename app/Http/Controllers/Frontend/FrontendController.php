<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Property;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $bole = Property::where('location_id', '1')->count();
        $location = Location::all();
        return view('front', compact('properties', 'bole', 'location'));
    }
    public function properties()
    {
        $properties = Property::where('property_status', '0')->paginate(20);
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
        // dd($request->search);
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
        // dd($request->property_type);
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
    public function contact_us()
    {
        return view('front.contact');
    }
    public function contact_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'form_name' => 'required',
            'form_email' => 'required|email',
            'form_phone' => 'required|numeric',
            'form_subject' => 'required',
            'form_message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        // dd($request);
        if ($validator->fails()) {
            return redirect('/contact-us')
                ->withErrors($validator)
                ->withInput();
        }

        // Validate reCAPTCHA response
        $client = new Client();
        $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ],
        ]);
        dd($response);
        $body = json_decode($response->getBody());
        if (!$body->success) {
            return redirect('/contact-us')
                ->withErrors(['captcha' => 'Invalid reCAPTCHA response'])
                ->withInput();
        }
        // If validation passes, continue with storing the contact info to the database
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Redirect to a thank you page
        return redirect('/contact-us');

    }
}
