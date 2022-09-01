<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use Illuminate\Support\Facades\Hash;
use Mail;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard/index');
    }
    public function allcarriers(){
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status')
            ->orderBy('id','desc')
            ->get();
        return view('admin/carriers/index')->with(array('data'=>$data));
    }

    public function addnewcarrier(Request $request)
    {
        $carrier = new User();
        $carrier->name = $request->name;
        $carrier->email = $request->email;
        $carrier->type = 'carrier';
        $carrier->password = Hash::make($request->password);
        $carrier->dot_number = $request->dot_number;
        $carrier->trucks_in_fleet = $request->trucks_in_fleet;
        $carrier->how_many_drivers_in_next = $request->how_many_drivers_in_next;
        $carrier->save();

        $company = new companies();
        $company->user_id = $carrier->id;
        $company->email = $request->company_email;
        $company->company_name = $request->company_name;
        $company->company_link = Cmf::shorten_url($request->company_name);
        $company->save();

        $subject = 'Welcome To '.env('APP_NAME').'';
        Mail::send('email.addnewcarrier', ['name' => $request->name,'email' => $request->name,'password' => $request->password], function($message) use($request , $subject){
            $message->to($request->email);
            $message->subject($subject);
        });
        return redirect()->back()->with('message', 'Carrier Added Successfully');
    }
    public function carrierrequests()
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 0)
            ->get();
        return view('admin/carriers/requests')->with(array('data'=>$data));
    }
    public function approvecarrier($id)
    {
        $user = User::find($id);
        $user->approved_status = 1;
        $user->save();
        Mail::send('email.appreq', ['email' => $user->email , 'name' => $user->name, 'email' => $user->email], function($message) use($user){
              $message->to($user->email);
              $message->subject('Your Request is Approved');
          });
        return redirect()->route('admin.allcarriers');
    }
    public function declinerequest(Request $request)
    {
        $user = User::find($request->id);
        $user->approved_status = 2;
        $user->save();
        Mail::send('email.rejectedrequest', ['email' => $user->email , 'name' => $user->name, 'reason' => $request->reason], function($message) use($user){
           $message->to($user->email);
           $message->subject('Your User Request is Rejected');
        });
        return redirect()->back()->with('message', 'User Request Rejected Successfully');
    }
}