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
use App\Models\hiring_templates;
use App\Models\assign_from_admin_jobs;
use Illuminate\Support\Facades\Hash;
use Mail;
use Validator;
use Redirect;
class JobController extends Controller
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
    public function updateroutingandtransfer(Request $request)
    {
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->referral_code = $request->referral_code;
        $addnewjob->lead_destination = $request->lead_destination;
        if($request->emails)
        {
            $addnewjob->emails_send = implode(',', $request->emails);
        }
        $addnewjob->save();
        return redirect()->back()->with('message', 'Routing & Transfer Updated Successfully');
      
    }
    public function updatebasicdetailsofjob(Request $request)
    {
        $url = Cmf::shorten_url($request->job_tittle);
        $checkurl = jobs::where('url' , $url)->count();
        if($checkurl > 0)
        {
            $url = $url.'-'.$request->job_id;
        }else{
            $url = $url;
        }
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->how_often_will_driver_get_home = $request->how_often_will_driver_get_home;
        $addnewjob->custom_home_time = $request->custom_home_time;
        $addnewjob->job_tittle = $request->job_tittle;
        $addnewjob->hiring_area = $request->hiring_area;
        $addnewjob->operating_area = $request->operating_area;
        $addnewjob->url = $url;
        $addnewjob->driver_type = $request->driver_type;
        $addnewjob->home_time = $request->home_time;
        $addnewjob->freight_type = $request->freight_type;
        $addnewjob->dedicated_account = $request->dedicated_account;
        $addnewjob->avg_weekly_mile = $request->avg_weekly_mile;
        $addnewjob->compensation = $request->compensation;
        $addnewjob->duty_time = $request->duty_time;
        if($request->benifits)
        {
            $addnewjob->benifits = implode(',', $request->benifits);
        }
        if($request->custombenifits)
        {
            $addnewjob->custombenifits = implode(',', $request->custombenifits);
        }
        $addnewjob->compensation_ammount = $request->compensation_ammount;
        $addnewjob->top_10_of_earners_are_makking = $request->top_10_of_earners_are_makking;
        $addnewjob->avgerage_weekly_pay = $request->avgerage_weekly_pay;
        $addnewjob->avgerage_yearly_pay = $request->avgerage_yearly_pay;
        $addnewjob->sign_on_bonus = $request->sign_on_bonus;
        $addnewjob->sign_on_bonus_amount = $request->sign_on_bonus_amount;
        $addnewjob->freight_type_equipment = $request->freight_type_equipment;
        $addnewjob->drop_and_hook = $request->drop_and_hook;
        $addnewjob->live_load = $request->live_load;
        $addnewjob->driver_load = $request->driver_load;
        $addnewjob->job_type_from_side = $request->job_type_from_side;
        $addnewjob->save();
        return redirect()->back()->with('message', 'Basic Details Updated Successfully');
    }
    public function editjob($id , $jobid , $edittype)
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status','users.phonenumber','users.profile_picture')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->where('companies.id' , $id)
            ->first();
        $job = jobs::find($jobid);
        $template = hiring_templates::where('company_id' , $id)->where('is_template' , 1)->get();  
        $attribute = jot_attributes::all();

        if($edittype == 'basic')
        {
            return view('admin.carriers.jobs.editjob.basic')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
        if($edittype == 'hiring')
        {
            return view('admin.carriers.jobs.editjob.hiring')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
        if($edittype == 'routing')
        {
            return view('admin.carriers.jobs.editjob.routing')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
        if($edittype == 'preview')
        {
            return view('admin.carriers.jobs.editjob.preview')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }

    }
    public function alljobs()
    {
        $jobs = jobsubmissionsrequests::select('jobsubmissionsrequests.status','jobs.url','jobs.company_id','jobs.payement_status','jobs.id as job_id','jobs.job_tittle','jobs.hiring_area','jobs.operating_area','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.driver_type','companies.company_name')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->leftJoin('companies','jobs.company_id','=','companies.id')->orderby('jobs.id' , 'desc')->paginate(10);
        $attribute = jot_attributes::all();
        return view('admin/jobs/index')->with(array('data'=>$jobs,'attribute'=>$attribute));
    }
    public function searchjobs(Request $request)
    {
        $input = $request->all();
        $q = jobsubmissionsrequests::select('jobsubmissionsrequests.status','jobs.url','jobs.payement_status','jobs.id as job_id','jobs.job_tittle','jobs.hiring_area','jobs.operating_area','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.driver_type','companies.company_name');
        if ($input['keyword'])
        {
            $q->where('jobs.job_tittle','like', '%' . $input['keyword'] . '%' );
        }
        if ($input['freight_type'])
        {
            $q->where('jobs.freight_type','like', '%' . $input['freight_type'] . '%' );
        }
        if ($input['driver_type'])
        {
            $q->where('jobs.driver_type','like', '%' . $input['driver_type'] . '%' );
        }
        $q->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id');
        $q->leftJoin('companies','jobs.company_id','=','companies.id');
        $jobs = $q->orderby('jobs.id' , 'desc')->get();
        $attribute = jot_attributes::all();
        return view('admin/jobs/searchjobs')->with(array('data'=>$jobs,'attribute'=>$attribute));
    }
    public function addnewjob()
    {
        return view('admin/jobs/add-new');
    }
    public function basicattributes()
    {
        $data = jot_attributes::all();
        return view('admin/job-attributes/basic-details')->with(array('data'=>$data));
    }
    public function editattribute($id)
    {
        $data = jot_attributes::find($id);
        foreach (explode(',', $data->options) as $r) {
            echo "<option selected value='".$r."'>".$r."<option>";
        }
    }
    public function getattributenameandid($id)
    {
        $data = jot_attributes::find($id);
        echo '<div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">Field title</label>
                    <input type="hidden" value="'.$data->id.'" name="id" >
                    <input value="'.$data->name.'" type="text" class="form-control font-size-lg " value="Dedicated Account" name="name">
                </div>
            </div>';
    }
    public function updateattributes(Request $request)
    {
        $data = jot_attributes::find($request->id);
        $data->name = $request->name;
        $data->options = implode(',', $request->param);
        $data->save();
        return redirect()->back()->with('message', 'Attribute Updated Successfully');
    }
    public function pendingjobs()
    {
        $jobs = jobsubmissionsrequests::select('jobsubmissionsrequests.status','jobs.url','jobs.payement_status','jobs.id as job_id','jobs.job_tittle','jobs.hiring_area','jobs.operating_area','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.driver_type','companies.company_name')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->leftJoin('companies','jobs.company_id','=','companies.id')->where('jobsubmissionsrequests.status' , 'pending')->orderby('jobs.id' , 'desc')->paginate(10);
        $attribute = jot_attributes::all();
        return view('admin/jobs/pending')->with(array('data'=>$jobs,'attribute'=>$attribute));
    }
    public function assigncarrier(Request $request)
    {
        $companyid = $request->company_id;
        $jobid = rand(123456789,987654321);
        $url = url('admin/carriers/detail/').'/'.$companyid.'/addnewjob?step=1&jobid='.$jobid.'';
        return Redirect::to($url);
    }
    public function addmap()
    {
        return view('admin.jobs.addmap');
    }
    public function jobpostbasic(Request $request)
    {
        
    }
    public function adddadvancedetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'primary_running_lanes' => 'required',
            'avg_length_of_haul' => 'required',
            'type_of_fuel_card' => 'required',
            'tolls' => 'required',
            'hour_dispatch' => 'required',
            'ez_Pass' => 'required',
            'pre_pass' => 'required',
            'non_forced_dispatch' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->primary_running_lanes = $request->primary_running_lanes;
        $addnewjob->avg_length_of_haul = $request->avg_length_of_haul;
        $addnewjob->type_of_fuel_card = $request->type_of_fuel_card;
        $addnewjob->tolls = $request->tolls;
        $addnewjob->hour_dispatch = $request->hour_dispatch;
        $addnewjob->ez_Pass = $request->ez_Pass;
        $addnewjob->pre_pass = $request->pre_pass;
        $addnewjob->non_forced_dispatch = $request->non_forced_dispatch;
        $addnewjob->save();
    }
    
}
