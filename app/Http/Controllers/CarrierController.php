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
        $company->google_link = $request->google_link;
        $company->facebook_link = $request->facebook_link;
        $company->save();
        return redirect()->back()->with('message', 'Carrier Profile Updated Successfully');
    }
    public function profilesettings()
    {
        return view('carrier/profile-settings/index');
    }
    public function updateprofilepicture(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->profile_picture = Cmf::sendimagetodirectory($request->profile_avatar);
        $user->save();
        return redirect()->back()->with('message', 'Profile Image Updated Successfully');
    }

    public function updateuserprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
    public function securetycredentials(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required',
        ]);


        if($request->newpassword == $request->password_confirmed){
        $hashedPassword = Auth::user()->password;
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
            else{
                  session()->flash('errorsecurity','New password can not be the old password!');
                  return redirect()->back();
                }
           }
          else{
               session()->flash('errorsecurity','Old password Doesnt matched ');
               return redirect()->back();
             }
        }else{
            session()->flash('errorsecurity','Repeat password doesn’t match');
            return redirect()->back();
        }
    }
}
