<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\jobs;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\maplocations;
use App\Models\hiring_map;
use App\Models\jot_attributes;
use DB;
class SiteController extends Controller
{
    public function index()
    {
        return redirect()->route('login');
    }
    public function carrierprofile($id)
    {
        $data = companies::where('company_link' , $id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('jobs.company_id' , $data->id)->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        $attribute = jot_attributes::all();
        return view('frontend.carrier.index')->with(array('data'=>$data,'jobs'=>$jobs,'attribute'=>$attribute));
    }
    public function jobdetail($id)
    {   
        $job = jobs::where('url',$id)->first();
        $linked = linktemplatewithjobs::where('job_id' , $job->id)->first();
        $hirring = DB::table('hiring_templates')->where('id' , $linked->template_id)->first();
        $company = companies::where('id' , $job->company_id)->get()->first();
        $relatedjobs = jobsubmissionsrequests::select('jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('jobs.company_id' , $job->company_id)->whereNotIn('jobs.id', [$job->id])->get();
        foreach ($relatedjobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->id)->first();
        }
        return view('frontend.jobs.index')->with(array('data'=>$job,'company'=>$company,'template'=>$hirring,'relatedjobs'=>$relatedjobs));
    }
}
