<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\jobs;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
class SiteController extends Controller
{
    public function index()
    {
        return redirect()->route('login');
    }
    public function carrierprofile($id)
    {
        $data = companies::where('company_link' , $id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.id as job_id','jobs.job_tittle','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('frontend.carrier.index')->with(array('data'=>$data,'jobs'=>$jobs));
    }
}
