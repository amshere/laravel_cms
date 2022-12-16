<?php

namespace App\Http\Controllers;

use Hash;

use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class RegistrationController extends Controller
{
    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }
    public function registerUser(Request $request)
    {   
        $request->validate([
           
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'usertype'=>'required'
        ]);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($request->usertype == "User"){
            $user->usertype=0;
        }else{
            $user->usertype=1;
        }
        
        $res = $user->save();
        if($res){
            return redirect('login')->with('success','You have successfully registered !!!');
        }else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user)
        { 
            if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginId', $user->id );

            if($user->usertype == 0){
                return redirect('dashboard');
            }else if( $user->usertype == 1){
                return redirect('dashboardadmin');
            }
            }
             else {
            return back()->with('fail','Password not matched.');
            }

        }else{
            return back()->with('fail','This email is not registered.');
        }
    }
    public function dashboard()
    {
        $data=array();
        if(session('loginId')){
            $data = User::where('id','=',session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }

    public function dashboardadmin()
    {
        $data=array();
        if(session('loginId')){
            $data = User::where('id','=',session::get('loginId'))->first();
        }
        return view('dashboardadmin',compact('data'));
    }
   
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
