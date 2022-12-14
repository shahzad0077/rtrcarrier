<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\hiring_maps;
use App\Models\help_categories;
use App\Models\help_articles;
use App\Models\education_categories;
use App\Models\education_articles;
use App\Models\company_info_pages;
use App\Models\recuring_tips;
use App\Models\subscription_plans;
use App\Models\site_settings;
use App\Models\carrieralerts;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\role_users;
use App\Models\jot_attributes;
use App\Models\hiring_templates;
use App\Models\jobs;
use App\Models\staff_permissions;
use App\Models\chat_messages;


use Illuminate\Support\Facades\Hash;
use Mail;
use Session;
use Auth;
use DB;
class CarrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if(isset($_GET['status']))
        {

        }else{
            $this->middleware('checkjobstatus');
        }
    }
    public function allcarriers(){
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.activestatus','users.approved_status')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->get();
        return view('admin/carriers/index')->with(array('data'=>$data));
    }
    public function carriersearch(Request $request)
    {
        $input = $request->all();
        $q = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.activestatus','users.approved_status');
        if ($input['keyword'])
        {
            $q->where('users.name','like', '%' . $input['keyword'] . '%' );
        }
        if ($input['dotnumber'])
        {
            $q->where('users.dot_number','like', '%' . $input['dotnumber'] . '%' );
        }
        if ($input['userstatus'])
        {
            $q->where('users.activestatus',$input['userstatus']);
        }       
        $q->orderBy('id','desc');
        $q->where('users.approved_status' , 1);
        $data = $q->get();
        return view('admin/carriers/index')->with(array('data'=>$data));
    }
    public function carrierdetail($id,$page)
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status','users.phonenumber','users.profile_picture')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->where('companies.id' , $id)
            ->first();
        // print_r($data);exit;
        if($page == 'detail')
        {
            return view('admin.carriers.detail')->with(array('data'=>$data,'page'=>$page));
        }
        if($page == 'personal')
        {
            return view('admin.carriers.customerdetail')->with(array('data'=>$data,'page'=>$page));
        }
        if($page == 'changepassword')
        {
            return view('admin.carriers.changepassword')->with(array('data'=>$data,'page'=>$page));
        }
        if($page == 'addnewjob')
        {
            Session::put('companyid', $id);
            $check = jobs::where('company_id' , $id)->where('job_type_from_side' , 'adminside')->where('step' ,'!=' ,5)->where('status' , '!=' , 'draft');
            if($check->count() > 0)
            {
                $job = $check->get()->first();
            }else{
                $addjob = new jobs();
                $addjob->id = $_GET['jobid'];
                $addjob->company_id = $id;
                $addjob->step = 0;
                $addjob->status = 'continue';
                $addjob->job_type_from_side = 'adminside';
                $addjob->save();
                $job = $addjob;
            }
            $template = hiring_templates::where('company_id' , $id)->where('is_template' , 1)->get();
            $attribute = jot_attributes::all();
            return view('admin.carriers.jobs.addnewjob')->with(array('template'=>$template,'job'=>$job,'attribute'=>$attribute,'data'=>$data,'page'=>$page));
        }
        if($page == 'allmaps')
        {
            $allmaps = hiring_maps::where('company_id' , $id)->get();
            return view('admin.carriers.maps.allmaps')->with(array('allmaps'=>$allmaps,'data'=>$data,'page'=>$page));
        }
        if($page == 'addmap')
        {
            return view('admin.carriers.maps.addnewmap')->with(array('data'=>$data,'page'=>$page));
        }
        if($page == 'alljobs')
        {
            $jobs = jobsubmissionsrequests::select('jobs.status as joborignalstatus','jobs.hiring_area','jobs.operating_area','jobs.created_at','jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('company_id' , $id)->orderby('jobs.id' , 'desc')->paginate(10);
            foreach ($jobs as $index => $job) {
                $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
            }
            return view('admin.carriers.alljobs')->with(array('jobs'=>$jobs,'data'=>$data,'page'=>$page));
        }
        if($page == 'allteam')
        {
            $team = role_users::select('users.id as user_id','users.name as user_name','users.email as user_email','users.phonenumber as user_phonenumber','staff_permissions.name as role_name','staff_permissions.id as role_id','role_users.created_at as created_at')                      
                    ->leftJoin('users','users.id','=','role_users.user_id') 
                    ->leftJoin('staff_permissions','staff_permissions.id','=','role_users.role_id')
                    ->where('staff_permissions.company_id','=',$id)
                    ->orderBy('role_users.id','desc')
                    ->get();
            return view('admin.carriers.team.allteam')->with(array('team'=>$team,'data'=>$data,'page'=>$page));
        }

        if($page == 'addteammember')
        {
            return view('admin.carriers.team.addteammember')->with(array('data'=>$data,'page'=>$page));
        }
    }
    public function addnewteammember(Request $request)
    {
        $randompassword = rand(123456789,987654321);
        $newuser = new User();
        $newuser->name = $request->name;
        $newuser->email = $request->email;
        $newuser->phonenumber = $request->phone_number;
        $newuser->password = Hash::make($randompassword);
        $newuser->type = 'carrier_sub_account';
        $newuser->company_id = $request->company_id;
        $newuser->approved_status = 1;
        $newuser->save();
        $addrole = new role_users();
        $addrole->user_id = $newuser->id;
        $addrole->role_id = $request->role_id;
        $addrole->save();
        $company = staff_permissions::where('id' , $request->role_id)->get()->first();
        $companyname = companies::where('id' , $company->company_id)->first()->company_name;
        $subject = 'Welcome To '.env('APP_NAME').'';
        Mail::send('email.inviteuser', ['email' => $request->email,'password' => $randompassword,'name' => $request->name,'role' => $company->name,'companyname' => $companyname], function($message) use($request , $subject){
            $message->to($request->email);
            $message->subject($subject);
        });

        $chat = new chat_messages();
        $chat->message = 'Available for Chat';
        $chat->sendBy = Auth::user()->id;
        $chat->sendTo = $newuser->id;
        $chat->first_message = 1;
        $chat->save();
        return redirect()->back()->with('message', 'New User Added Successfully');
    }
    public function updateuserdetail(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->dot_number = $request->dot_number;
        if($request->profileimage)
        {
            $user->profile_picture = Cmf::sendimagetodirectory($request->profileimage);
        }
        $user->phonenumber = $request->phonenumber;
        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
    public function updatecarrierdetail(Request $request)
    {
        $company = companies::find($request->id);
        $company->company_name = $request->company_name;
        $company->email = $request->email;
        $company->contact_number = $request->contact_number;
        $company->address = $request->address;
        $company->website_link = $request->website_link;
        $company->aboutus = $request->aboutus;
        $company->google_link = $request->google_link;
        $company->facebook_link = $request->facebook_link;
        if($request->company_logo)
        {
            $company->logo = Cmf::sendimagetodirectory($request->company_logo);
        }
        $company->save();
        return redirect()->back()->with('message', 'Carrier Profile Updated Successfully');
    }
    public function changepassword(Request $request)
    {
        $this->validate($request, [
            'newpassword' => 'required',
        ]);
        if($request->newpassword == $request->password_confirmed){
              $users =User::find($request->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , $request->id)->update( array( 'password' =>  $users->password));
              session()->flash('message','password updated successfully');
              return redirect()->back();
        }else{
            session()->flash('errorsecurity','Repeat password doesn???t match');
            return redirect()->back();
        }
    }
}
