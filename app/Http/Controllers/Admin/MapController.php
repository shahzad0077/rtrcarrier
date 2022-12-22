<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\jot_attributes;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\jobs;
use App\Models\assign_from_admin_jobs;
use Illuminate\Support\Facades\Hash;
use Mail;
use Validator;
use Redirect;
class MapController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function mapdetail($id,$page)
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status','users.phonenumber','users.profile_picture')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->where('companies.id' , $id)
            ->first();
        // print_r($data);exit;
        if($page == 'addmap')
        {
            return view('admin.carriers.maps.addnewmap')->with(array('data'=>$data,'page'=>$page));
        }
    }
}
