<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
class RegisterController extends Controller
{
    public function checkemail(Request $request)
    {
        $checkemail = User::where('email' , $request->email)->count();
        return $checkemail;
    }
    public function checkcompanyname($id)
    {
        $checkemail = User::where('company_name' , $id)->count();
        return $checkemail;
    }
    public function checkdotnumber($id)
    {
        $checkemail = User::where('dot_number' , $id)->count();
        return $checkemail;
    }
    public function carrierregister(Request $request)
    {
        $carrier = new User();
        $carrier->name = $request->name;
        $carrier->company_name = $request->company_name;
        $carrier->email = $request->email;
        $carrier->password = Hash::make($request->password);
        $carrier->dot_number = $request->dot_number;
        $carrier->trucks_in_fleet = $request->trucks_in_fleet;
        $carrier->how_many_drivers_in_next = $request->how_many_drivers_in_next;
        $carrier->redirect = $request->redirect;
        $carrier->save();

        return redirect()->route('login');
    }
}
