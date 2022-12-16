<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        //dd($userType);
        //venueowner == 1
        //user == 0
       // $user = User::where('email','=',$request->email)->first();
       $user = User::where('id','=',session::get('loginId'))->first();
       
       //dd($data);
        if(session('loginId'))
        {
            
            if($user->usertype == $userType)
            {
                return $next($request);
            }else{
                return redirect('/index')->with('message','Access Denied !');
            }
        }else{
            return redirect('/login')->with('message','You need to login first.');
        }
        
        return $next($request);
    }
}
