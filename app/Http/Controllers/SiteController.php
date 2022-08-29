<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.homepage.index');
    }
    public function carrierprofile($id)
    {
        $data = companies::where('company_link' , $id)->get()->first();
        return view('frontend.carrier.index')->with(array('data'=>$data));
    }
}
