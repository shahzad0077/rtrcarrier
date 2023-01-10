<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Redirect;
class Checkuserstatus
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            $checkstatus = Auth::user()->activestatus;
            if($checkstatus == 1)
            {
            	return $next($request);
            }elseif($checkstatus == 2){
            	Auth::logout();
            	return redirect()->route('login')->with('warning', 'Your Account Status Is In Active.');
            }elseif($checkstatus == 3){
            	Auth::logout();
            	return redirect()->route('login')->with('warning', 'Your Account Is Temproary Banned.');
            }
            elseif($checkstatus == 4){
            	Auth::logout();
            	return redirect()->route('login')->with('warning', 'Your Account Is Permanent Banned.');
            }
            else{
            	Auth::logout();
            	return redirect()->route('login')->with('warning', 'System Not Found Your Account Status.');
            }
        }
    }
}
