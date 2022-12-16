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
use Redirect;
class JobController extends Controller
{   
    public function alljobs()
    {
        $jobs = jobsubmissionsrequests::select('jobsubmissionsrequests.status','jobs.url','jobs.payement_status','jobs.id as job_id','jobs.job_tittle','jobs.hiring_area','jobs.operating_area','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.driver_type','companies.company_name')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->leftJoin('companies','jobs.company_id','=','companies.id')->orderby('jobs.id' , 'desc')->paginate(10);
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
}
