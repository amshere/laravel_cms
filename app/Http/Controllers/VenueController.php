<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class VenueController extends Controller
{
    public function dashboardAddvenue()
    {
        $data=array();
        if(session('loginId')){
            $data = User::where('id','=',session::get('loginId'))->first();
        }
        return view('dashboardAddvenue',compact('data'));
    }



    public function list(){
        $data=array();
        if(session('loginId')){
            $data = User::where('id','=',session::get('loginId'))->first();
        }
        $venues = Venue::where('user_id','=',session::get('loginId'))->get();
        return view('dashboardViewvenue', compact('venues', 'data'));
    }


    public function edit($id){
        $data=array();
        if(session('loginId')){
            $data = User::where('id','=',session::get('loginId'))->first();
        }
        $venue = Venue::where('id',$id)->first();
        return view('dashboardEditvenue',compact('data','venue'));
    }

    public function update(Request $request, $id){
        $venue = Venue::where('id',$id)->first();
        $venue->name = $request->name;
        $venue->address = $request->address;
        $venue->price = $request->price;
        $venue->capacity = $request->capacity;
        $venue->photo = $request->photo;
        if($request->hasfile('photo')){
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/venues/',$filename);
            $venue->photo = $filename;
        }
        $venue->save();
        return redirect('dashboardViewvenue');

    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|unique:addvenues,name'
           
        ]);//add venue already exists of this name
        $venue = new Venue;
        $venue->name = $request->input('name');
        $venue->address = $request->input('address');
        $venue->price = $request->input('price');
        $venue->capacity = $request->input('capacity');
        $venue->user_id = Session::get('loginId');
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

    public function destroy($id){
        
        $venue = Venue::where('id',$id)->first();
        $venue->delete();
        return redirect('dashboardViewvenue');
    }
}
