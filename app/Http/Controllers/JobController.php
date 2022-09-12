<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Cmf;
use App\Models\companies;
use App\Models\jot_attributes;
use App\Models\jobs;
use App\Models\payout_schedules;
use App\Models\advance_pay_options;
use App\Models\hiring_templates;
use App\Models\linktemplatewithjobs;
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
        $check = jobs::where('company_id' , Cmf::getusercompany()->id)->where('step' ,'!=' ,5);
        if($check->count() > 0)
        {
            $job = $check->get()->first();
        }else{
            $addjob = new jobs();
            $addjob->company_id = Cmf::getusercompany()->id;
            $addjob->step = 0;
            $addjob->save();
            $job = $addjob;
        }
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->get();  
        $attribute = jot_attributes::all();
        return view('carrier/jobs/add-new')->with(array('attribute'=>$attribute,'job'=>$job,'template'=>$template));
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
        ]);
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->how_often_will_driver_get_home = $request->how_often_will_driver_get_home;
        $addnewjob->custom_home_time = $request->custom_home_time;
        $addnewjob->job_tittle = $request->job_tittle;
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
        $addnewjob->step = 1;
        $addnewjob->save();
        return redirect()->back()->with('message', 'Added Successfully');
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
    public function addpayoutschedule(Request $request)
    {
        extract($_POST);
        foreach($whenpayout as $k => $v){
            $data = "";
            foreach($_POST as $key => $val){
                if($key != '_token')
                {
                    if(!in_array($key, array('whenpayout','ammountpayout')) && !is_numeric($key)){
                        if(empty($data)){
                            $data .= " $key='$val' ";
                        }else{
                            $data .= ", $key='$val' ";
                        }
                    }
                }
                
            }
            $data .= ",'{$whenpayout[$k]}' ";
            $data .= ",'{$ammountpayout[$k]}' ";
            DB::statement("INSERT INTO `payout_schedules` (`job_id`, `when`, `ammount`)VALUES (2 $data)");
        }
    }

    public function addadvancepayoutdetails(Request $request)
    {
        $adv_pay_out = new advance_pay_options();
        $adv_pay_out->job_id = $request->job_id;
        $adv_pay_out->breakdown_pay = $request->breakdown_pay;
        $adv_pay_out->cash_advance = $request->cash_advance;
        $adv_pay_out->detention_pay = $request->detention_pay;
        $adv_pay_out->pays_amount = $request->pays_amount;
        $adv_pay_out->are_drivers_paid_the_same_for_loaded_and_empty = $request->are_drivers_paid_the_same_for_loaded_and_empty;
        $adv_pay_out->miles_cpn_chat = $request->miles_cpn_chat;
        $adv_pay_out->end_of_pay_week = $request->end_of_pay_week;
        $adv_pay_out->hazmat_pay = $request->hazmat_pay;
        $adv_pay_out->hazmat_pay_options_field = $request->hazmat_pay_options_field;
        $adv_pay_out->holida_pay = $request->holida_pay;
        $adv_pay_out->how_are_drivers_paid = $request->how_are_drivers_paid;
        $adv_pay_out->how_are_drivers_paid_other_field = $request->how_are_drivers_paid_other_field;
        $adv_pay_out->layover_pay = $request->layover_pay;
        $adv_pay_out->layover_pay_amount = $request->layover_pay_amount;
        $adv_pay_out->minimum_pay_guarantee = $request->minimum_pay_guarantee;
        $adv_pay_out->minimum_pay_guarantee_amount = $request->minimum_pay_guarantee_amount;
        $adv_pay_out->multi_stop_pay = $request->multi_stop_pay;
        $adv_pay_out->multi_stop_pay_amount = $request->multi_stop_pay_amount;
        $adv_pay_out->paid_on = $request->paid_on;
        $adv_pay_out->paid_on_field = $request->paid_on_field;
        $adv_pay_out->new_york_city_pay = $request->new_york_city_pay;
        $adv_pay_out->new_york_city_pay_amount = $request->new_york_city_pay_amount;
        $adv_pay_out->northeast_pay = $request->northeast_pay;
        $adv_pay_out->northeast_pay_amount = $request->northeast_pay_amount;
        $adv_pay_out->prientation_pay = $request->prientation_pay;
        $adv_pay_out->prientation_pay_amount = $request->prientation_pay_amount;
        $adv_pay_out->pay_increase = $request->pay_increase;
        $adv_pay_out->per_diem = $request->per_diem;
        $adv_pay_out->per_diem_amount = $request->per_diem_amount;
        $adv_pay_out->referral_bonus = $request->referral_bonus;
        $adv_pay_out->safety_bonus = $request->safety_bonus;
        $adv_pay_out->start_of_pay_week = $request->start_of_pay_week;
        $adv_pay_out->type_of_driver_pay = $request->type_of_driver_pay;
        $adv_pay_out->unloading_pay = $request->unloading_pay;
        $adv_pay_out->vacation_pay = $request->vacation_pay;
        $adv_pay_out->when_are_drivers_paid =  $request->when_are_drivers_paid;
        $adv_pay_out->save();
    }
    public function hiringreq(Request $request)
    {
        $template = new hiring_templates();
        $template->company_id = Cmf::getusercompany()->id;
        $template->minimum_age = $request->minimum_age;
        $template->minimum_age_field =$request->minimum_age_field;
        $template->minimum_expereince =$request->minimum_expereince;
        $template->additional_notes_about_expereince =$request->additional_notes_about_expereince;
        $template->no_more_than =$request->no_more_than;
        $template->moving_violations =$request->moving_violations;
        $template->additionl_notes_about_moving_voliations =$request->additionl_notes_about_moving_voliations;
        $template->no_more_than_major_voilations =$request->no_more_than_major_voilations;
        $template->major_moving_voilations =$request->major_moving_voilations;
        $template->additionl_notes_about_moving_major_voliations =$request->additionl_notes_about_moving_major_voliations;
        $template->license_suspensions =$request->license_suspensions;
        $template->license_suspensions_field =$request->license_suspensions_field;
        $template->dot_no_more_than =$request->dot_no_more_than;
        $template->dot_moving_voilations =$request->dot_moving_voilations;
        $template->preventable_accidents_withn_the_last =$request->preventable_accidents_withn_the_last;
        $template->reason_of_suspensions =$request->reason_of_suspensions;
        $template->no_more_than_incidents =$request->no_more_than_incidents;
        $template->moving_voilations_incidents =$request->moving_voilations_incidents;
        $template->ticket_incedent =$request->ticket_incedent;
        $template->specify_in_a_free_form_fill =$request->specify_in_a_free_form_fill;
        $template->maximum_jobs_no_more_than =$request->maximum_jobs_no_more_than;
        $template->maximum_jobs_moving_voilations =$request->maximum_jobs_moving_voilations;
        $template->unemployment =$request->unemployment;
        $template->maximum_jobs_additional_infomation =$request->maximum_jobs_additional_infomation;
        $template->felony_convictions =$request->felony_convictions;
        $template->misdemeanors =$request->misdemeanors;
        $template->drug_duis =$request->drug_duis;
        $template->type_of_drug_test =$request->type_of_drug_test;
        $template->accepting_sap_drivers =$request->accepting_sap_drivers;
        $template->additional_information =$request->additional_information;
        $template->physical =$request->physical;
        $template->accomodate_an_automatic_restriction =$request->accomodate_an_automatic_restriction;
        $template->camera_installed =$request->camera_installed;
        $template->camera_type =$request->camera_type;
        $template->camera_are =$request->camera_are;
        $template->camera_facing =$request->camera_facing;
        $template->camera_recording =$request->camera_recording;
        $template->requiredendorsements =$request->requiredendorsements;
        $template->is_template = 0;
        $template->save();
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->step = 2;
        $addnewjob->save();
        $linktemplate = new linktemplatewithjobs();
        $linktemplate->job_id = $request->job_id;
        $linktemplate->template_id = $template->id;
        $linktemplate->save();
        return redirect()->back()->with('message', 'Added Successfully');
    }
}
