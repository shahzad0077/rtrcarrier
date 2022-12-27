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
use App\Models\hiring_templates;
use App\Models\advance_equipment_values;
use App\Models\advance_pay_options;
use App\Models\equipment_jobs;
use App\Models\job_equipments;
use Illuminate\Support\Facades\Hash;
use Mail;
use Validator;
use Redirect;
class HiringtemplateController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function deletejob($id)
    {
        advance_equipment_values::where('job_id' , $id)->delete();
        advance_pay_options::where('job_id' , $id)->delete();
        equipment_jobs::where('job_id' , $id)->delete();
        jobsubmissionsrequests::where('job_id' , $id)->delete();
        job_equipments::where('job_id' , $id)->delete();
        linktemplatewithjobs::where('job_id' , $id)->delete();
        jobs::where('id' , $id)->delete();
        $url = url('admin/dashboard');
        return Redirect::to($url);
    }
    public function addnewhiringtemplate($id,$page)
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status','users.phonenumber','users.profile_picture')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->where('companies.id' , $id)
            ->first();
        // print_r($data);exit;
        if($page == 'addtemplate')
        {
            return view('admin.carriers.hiringtemplate.addtemplate')->with(array('data'=>$data,'page'=>$page));
        }
        if($page == 'edittemplate')
        {
            $template = hiring_templates::where('id' , $_GET['templateid'])->first();
            return view('admin.carriers.hiringtemplate.edittemplate')->with(array('template'=>$template,'data'=>$data,'page'=>$page));
        }
        if($page == 'alltemplates')
        {
            $templates = hiring_templates::where('company_id' , $id)->get();
            return view('admin.carriers.hiringtemplate.alltemplate')->with(array('page'=>$page,'templates'=>$templates,'data'=>$data));   
        }
    }
    public function createnewhiringtemplate(Request $request)
    {
        $template = new hiring_templates();  
        $template->company_id = $request->company_id;
        $template->name = $request->template_name;
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
        $template->is_template = 1;
        if($request->requiredendorsements)
        {
            $template->requiredendorsements = implode(',', $request->requiredendorsements);
        }
        $template->save();
        $url = url('admin/carriers/hiringtemplate').'/'.$request->company_id.'/alltemplates';
        return Redirect::to($url);        
    }
    
}
