<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        return view('venue');
    }

    public function store(Request $request)
    {
        $venue = new Venue;
        $venue->name = $request->input('name');
        $venue->address = $request->input('address');
        $venue->price = $request->input('price');
        $venue->capacity = $request->input('capacity');
        if($request->hasfile('photo')){
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/venues/',$filename);
            $venue->photo = $filename;
        }
        $venue->save();
        return redirect()->back()->with('status','Venue has been added successfully.');
       
    }
}
