<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Cmf;
use App\Models\User;
use App\Models\companies;
use Auth;
class CarrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('carrier/dashboard');
    }
    public function carrierprofile()
    {
        $data = companies::where('user_id' , Auth::user()->id)->get()->first();
        return view('carrier/carrier-profile/index')->with(array('data'=>$data));
    }
    public function updatecarrierlogo(Request $request)
    {
        $company = companies::find($request->id);
        $company->logo = Cmf::sendimagetodirectory($request->company_logo);
        $company->save();
        return redirect()->back()->with('message', 'Logo Updated Successfully');
    }
    public function changecoverphoto(Request $request)
    {
        $company = companies::find($request->id);
        $company->banner = Cmf::sendimagetodirectory($request->coverphoto);
        $company->save();
        return redirect()->back()->with('message', 'Banner Updated Successfully');
    }
    public function updatecarrierprofile(Request $request)
    {
        $company = companies::find($request->id);
        $company->email = $request->email;
        $company->contact_number = $request->contact_number;
        $company->address = $request->address;
        $company->website_link = $request->website_link;
        $company->aboutus = $request->aboutus;
        $company->save();
        return redirect()->back()->with('message', 'Carrier Profile Updated Successfully');
    }
}
