<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Cmf;
use App\Models\companies;
use App\Models\jot_attributes;
use App\Models\jobs;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Validator;
class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function allcarrierjobs()
    {
        return view('carrier/jobs/index');
    }
    public function addnewjob()
    {
        $attribute = jot_attributes::all();
        return view('carrier/jobs/add-new')->with(array('attribute'=>$attribute));
    }
    public function publishedjobstatus()
    {
        return view('carrier/jobs/published');
    }
    public function submitone(Request $request)
    {
        $this->validate($request, [
            'how_often_will_driver_get_home' => 'required',
            'custom_home_time' => 'required',
            'job_tittle' => 'required',
            'driver_type' => 'required',
            'home_time' => 'required',
            'freight_type' => 'required',
            'dedicated_account' => 'required',
            'avg_weekly_mile' => 'required',
            'compensation' => 'required',
            'duty_time' => 'required',
            'compensation_ammount' => 'required',
            'top_10_of_earners_are_makking' => 'required',
            'avgerage_weekly_pay' => 'required',
            'avgerage_yearly_pay' => 'required',
            'sign_on_bonus' => 'required',
            'sign_on_bonus_amount' => 'required',

            'freight_type_equipment' => 'required',
            'drop_and_hook' => 'required',
            'live_load' => 'required',
            'driver_load' => 'required',
            'truck_make' => 'required',
            'truck_modal' => 'required',
            'truck_year' => 'required',
        ]);

    }


    public function adddadvancedetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'primary_running_lanes' => 'required',
            'avg_length_of_haul' => 'required',
            'type_of_fuel_card' => 'required',
            'tolls' => 'required',
            'hour_dispatch' => 'required',
            'pre_pass' => 'required',
            'non_forced_dispatch' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        } 
    }
}
