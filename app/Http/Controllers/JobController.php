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
use App\Models\company_emails;
use App\Models\equipment_jobs;
use App\Models\job_equipments;
use App\Models\jobsubmissionsrequests;
use App\Models\advance_equipment_values;
use App\Models\subscription_plans;
use App\Models\payements;
use App\Models\usernotifications;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Validator;
use Session;
use Stripe;
use URL;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Illuminate\Support\Facades\Redirect;
class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }
    public function showpreviewoftemplate($id)
    {
        $template = hiring_templates::where('id' , $id)->first();
        echo '<div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label">'.$template->name.'</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="javascript:void(0)" onclick="edittemplate('.$template->id.')" class="btn btn-primary font-weight-bolder" >
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> Edit Template
                    </a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body p-10">
                <div class="row">';
                    if($template->minimum_age != 'Other'){
                        echo '<div class="col-md-6 mb-3">
                            <b>Minimum Age</b>
                            <p class="mt-2">'.$template->minimum_age.'</p>
                        </div>';
                    }
                    if($template->minimum_age == 'Other'){
                        echo '<div class="col-md-6 mb-3">
                            <b>Minimum Age</b>
                            <p class="mt-2">'.$template->minimum_age_field.'</p>
                        </div>';
                    }
                    echo '<div class="col-md-6 mb-3">
                        <b>Minimum Expereince</b>
                        <p class="mt-2">'.$template->minimum_expereince.'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Additional Notes About Expereince</b>
                        <p class="mt-2">'.strip_tags($template->additional_notes_about_expereince).'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>No More Than About Expereince</b>
                        <p class="mt-2">'.$template->no_more_than.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Moving voilations</b>
                        <p class="mt-2">'.$template->moving_violations.' Voilations</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Additional Notes About Moving Voilations</b>
                        <p class="mt-2">'.strip_tags($template->additionl_notes_about_moving_voliations).'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>No More Than Major Voilations</b>
                        <p class="mt-2">'.$template->no_more_than_major_voilations.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Major Moving Voilation</b>
                        <p class="mt-2">'.$template->major_moving_voilations.'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Additional Notes About Moving Major Voilation</b>
                        <p class="mt-2">'.strip_tags($template->additionl_notes_about_moving_major_voliations).'</p>
                    </div>';
                    if($template->license_suspensions == 'No'){
                    echo '<div class="col-md-6 mb-3">
                        <b>License Suspensions</b>
                        <p class="mt-2">'.$template->license_suspensions.'</p>
                    </div>';
                    }else{
                    echo '<div class="col-md-12 mb-3">
                        <b>License Suspensions</b>
                        <p class="mt-2">'.strip_tags($template->license_suspensions_field).'</p>
                    </div>';
                    }
                    echo '<div class="col-md-6 mb-3">
                        <b>Dot More Than</b>
                        <p class="mt-2">'.$template->dot_no_more_than.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Dot Moving Voilations</b>
                        <p class="mt-2">'.$template->dot_moving_voilations.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Preventable Accedents</b>
                        <p class="mt-2">'.$template->preventable_accidents_withn_the_last.'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Reasons of Suspensions</b>
                        <p class="mt-2">'.strip_tags($template->reason_of_suspensions).'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>No More Than Incidents</b>
                        <p class="mt-2">'.$template->no_more_than_incidents.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Moving Voilations Incidents</b>
                        <p class="mt-2">'.$template->moving_voilations_incidents.'</p>
                    </div><div class="col-md-6 mb-3">
                        <b>Ticket Incedent</b>
                        <p class="mt-2">'.$template->ticket_incedent.'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>specify in a free form fill</b>
                        <p class="mt-2">'.strip_tags($template->specify_in_a_free_form_fill).'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>maximum jobs no more than</b>
                        <p class="mt-2">'.$template->maximum_jobs_no_more_than.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Maximum jobs moving voilations</b>
                        <p class="mt-2">'.$template->maximum_jobs_moving_voilations.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Unemployment</b>
                        <p class="mt-2">'.$template->unemployment.'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Maximum jobs additional infomation</b>
                        <p class="mt-2">'.strip_tags($template->maximum_jobs_additional_infomation).'</p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <b>Felony Convictions</b>
                        <p class="mt-2">'.strip_tags($template->felony_convictions).'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Misdemeanors</b>
                        <p class="mt-2">'.strip_tags($template->misdemeanors).'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Drug Duis</b>
                        <p class="mt-2">'.strip_tags($template->drug_duis).'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Type of Drug Test</b>
                        <p class="mt-2">'.$template->type_of_drug_test.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Accepting Sap Drivers</b>
                        <p class="mt-2">'.$template->accepting_sap_drivers.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Additional Information</b>
                        <p class="mt-2">'.strip_tags($template->additional_information).'</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Physical</b>
                        <p class="mt-2">'.strip_tags($template->physical).'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Accomodate adn automatic Restriction</b>
                        <p class="mt-2">'.$template->accomodate_an_automatic_restriction.'</p>
                    </div>';
                    if($template->camera_installed == 'No'){
                    echo '<div class="col-md-6 mb-3">
                        <b>Camera Installed</b>
                        <p class="mt-2">'.$template->camera_installed.'</p>
                    </div>';
                    }else{
                    echo '<div class="col-md-6 mb-3">
                        <b>Camera Installed</b>
                        <p class="mt-2">'.$template->camera_installed.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Type</b>
                        <p class="mt-2">'.$template->camera_type.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Are</b>
                        <p class="mt-2">'.$template->camera_are.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Facing</b>
                        <p class="mt-2">'.$template->camera_facing.'</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Recording</b>
                        <p class="mt-2">'.$template->camera_recording.'</p>
                    </div>';
                    }   
                echo '</div>
            </div>';
    }
    public function hiringtemplates()
    {
        $data = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->get();
        return view('carrier/jobs/hiringtemplates')->with(array('data'=>$data));
    } 
    public function addnewhiringtemplate()
    {
        return view('carrier/jobs/addnewhiringtemplat');
    }
    public function edithiringtemplate($id)
    {
        $data = hiring_templates::where('id' , $id)->first();
        return view('carrier/jobs/edithiringtemplate')->with(array('data'=>$data));   
    }
    public function updatehiringtemplate(Request $request)
    {
        $template = hiring_templates::find($request->id);  
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

        return redirect()->back()->with('message', 'Template Updated Successfully');
        
    }
    public function createnewhiringtemplate(Request $request)
    {
        $template = new hiring_templates();  
        $template->company_id = Cmf::getusercompany()->id;
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
        $check = jobs::where('company_id' , Cmf::getusercompany()->id)->where('step' ,'!=' ,5);
        if($check->count() > 0)
        {
            return redirect()->route('addnewjob')->with('success','You are Login as Admin!');
        }else{
            return redirect()->back()->with('message', 'Template Added Successfully');
        }        
    }
    public function deletehiringtemplate($id)
    {
        $checkjob = linktemplatewithjobs::where('template_id' , $id);
        linktemplatewithjobs::where('template_id' , $id)->delete();
        hiring_templates::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Template Deleted Successfully');
    }
    public function allcarrierjobs()
    {
        $data = companies::where('company_link' , Cmf::getusercompany()->id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.status as job_status_main','jobs.freight_type_equipment','jobs.drop_and_hook','jobs.live_load','jobs.driver_load','jobs.url','jobs.job_description','jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('company_id' , Cmf::getusercompany()->id)->orderby('jobs.created_at' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier/jobs/index')->with(array('jobs'=>$jobs));
    }
    public function searchjobs(Request $request)
    {
        $input = $request->all();
        $q = jobsubmissionsrequests::select('jobs.status as job_status_main','jobs.freight_type_equipment','jobs.drop_and_hook','jobs.live_load','jobs.driver_load','jobs.url','jobs.job_description','jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status');
        if ($input['keyword'])
        {
            $q->where('jobs.job_tittle','like', '%' . $input['keyword'] . '%' );
        }
        if(isset($input['hometimeadvance']))
        {
            $q->whereIn('jobs.home_time', $input['hometimeadvance']);
        }
        if(isset($input['drivertypeadvance']))
        {
            $q->whereIn('jobs.driver_type', $input['drivertypeadvance']);
        }


        if ($input['freighttype'])
        {
            $q->where('jobs.freight_type','like', '%' . $input['freighttype'] . '%' );
        }
        if(isset($input['drivertype']))
        {
            if ($input['drivertype'])
            {
                $q->where('jobs.driver_type','like', '%' . $input['drivertype'] . '%' );
            }
        }
        
        $q->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id');
        $q->where('company_id' , Cmf::getusercompany()->id);
        $jobs = $q->orderby('jobs.id' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier/jobs/searchjobs')->with(array('jobs'=>$jobs));
    }
    public function addnewjob()
    {
        $check = jobs::where('id' , $_GET['jobid'])->where('company_id' , Cmf::getusercompany()->id)->where('job_type_from_side' , 'carrierside')->where('step' ,'!=' ,5)->where('status' , '!=' , 'draft');
        if($check->count() > 0)
        {
            $job = $check->get()->first();
        }else{
            $addjob = new jobs();
            $addjob->id = $_GET['jobid'];
            $addjob->company_id = Cmf::getusercompany()->id;
            $addjob->step = 0;
            $addjob->status = 'continue';
            $addjob->job_type_from_side = 'carrierside';
            $addjob->save();
            $job = $addjob;
        }
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->where('is_template' , 1)->get();
        $attribute = jot_attributes::all();
        return view('carrier/jobs/add-new')->with(array('attribute'=>$attribute,'job'=>$job,'template'=>$template));        
    }
    public function jobedit($id , $edittype)
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status','users.phonenumber','users.profile_picture')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->where('companies.id' , Cmf::getusercompany()->id)
            ->first();
        $job = jobs::find($id);
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->where('is_template' , 1)->get();  
        $attribute = jot_attributes::all();

        if($edittype == 'basic')
        {
            return view('carrier.jobs.editjob.basic')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
        if($edittype == 'hiring')
        {
            return view('carrier.jobs.editjob.hiring')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
        if($edittype == 'routing')
        {
            return view('carrier.jobs.editjob.routing')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
        if($edittype == 'preview')
        {
            return view('carrier.jobs.editjob.preview')->with(array('page'=>'editjob','data'=>$data,'attribute'=>$attribute,'job'=>$job,'template'=>$template));
        }
    }
    public function updatehiringtemplateofjob(Request $request)
    {
        
    }
    public function updateroutingofjob(Request $request)
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
        if($request->benifitsdocument)
        {
            $addnewjob->benifitsdocument = Cmf::sendimagetodirectory($request->benifitsdocument);
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
        $addnewjob->when_do_benifit_start = $request->when_do_benifit_start;
        $addnewjob->job_type_from_side = $request->job_type_from_side;
        $addnewjob->save();

        if($request->truck_make)
        {
            job_equipments::where('job_id' , $addnewjob->id)->delete();
            $arraycount =  count($request->truck_make);
            $input = $request->all();
            for ($i=0; $i < $arraycount; $i++) { 
               $newequipment = new job_equipments();
               $newequipment->job_id = $addnewjob->id;
               $newequipment->truck_make = $input['truck_make'][$i];
               $newequipment->truck_model = $input['truck_model'][$i];
               $newequipment->truck_year = $input['truck_year'][$i];
               $newequipment->save();
            }
        }
        return redirect()->back()->with('message', 'Basic Details Updated Successfully');
    }
    public function deleteequipment($id , $jobid)
    {
        job_equipments::where('id' , $id)->delete();
        $data = job_equipments::where('job_id' , $jobid)->wherenotnull('truck_make')->wherenotnull('truck_year')->wherenotnull('truck_model')->get();

        foreach ($data as $r) {
            echo '<div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="lable-control">Truck Make</label>
                            <input value="'.$r->truck_make.'" name="truck_make[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="lable-control">Truck Model</label>
                            <input value="'.$r->truck_model.'" name="truck_model[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="lable-control">Truck Year</label>
                            <input value="'.$r->truck_year.'" name="truck_year[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="lable-control"></label>
                        <button id="deleteequipmentbutton'.$r->id.'" onclick="deleteequipment('.$r->id.','.$jobid.')" style="height:52px;margin-top: 8px;" class="form-control btn btn-danger" type="button" value="Delete">Delete</button>
                    </div>
                  <td></td>
                </div>';
        }
    }
    public function carrierjobdetail($id)
    {
        $job = jobs::find($id);
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->where('is_template' , 1)->get();  
        $attribute = jot_attributes::all();
        return view('carrier/jobs/jobdetail')->with(array('attribute'=>$attribute,'job'=>$job,'template'=>$template));
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
        return redirect()->back()->with('message', 'Job Deleted Successfully');
    }
    public function publishedjobstatus()
    {
        return view('carrier/jobs/published');
    }
    public function submitone(Request $request)
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
        $addnewjob->job_tittle = $request->job_tittle;
        $addnewjob->job_description = $request->job_description;
        $addnewjob->how_often_will_driver_get_home = $request->how_often_will_driver_get_home;
        $addnewjob->custom_home_time = $request->custom_home_time;
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
        if($request->benifitsdocument)
        {
            $addnewjob->benifitsdocument = Cmf::sendimagetodirectory($request->benifitsdocument);
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
        $addnewjob->when_do_benifit_start = $request->when_do_benifit_start;
        $addnewjob->live_load = $request->live_load;
        $addnewjob->driver_load = $request->driver_load;
        $addnewjob->step = 1;
        $addnewjob->save();
        if($request->truck_make)
        {
            job_equipments::where('job_id' , $addnewjob->id)->delete();
            $arraycount =  count($request->truck_make);
            $input = $request->all();
            for ($i=0; $i < $arraycount; $i++) { 
               $newequipment = new job_equipments();
               $newequipment->job_id = $addnewjob->id;
               $newequipment->truck_make = $input['truck_make'][$i];
               $newequipment->truck_model = $input['truck_model'][$i];
               $newequipment->truck_year = $input['truck_year'][$i];
               $newequipment->save();
            }
        }
        $url = url('job/add').'?step=2&jobid='.$addnewjob->id.'';
        return Redirect::to($url);
    }

    public function addnewcompanyemal(Request $request)
    {
        $new = new company_emails();
        $new->company_id  = Cmf::getusercompany()->id;
        $new->email  = $request->email;
        $new->save();
        return redirect()->back()->with('message', 'Email Added Successfully');
    }
    public function routingandtrans(Request $request)
    {
        $addnewjob = jobs::find($request->job_id);
        if($request->emails)
        {
            $addnewjob->emails_send = implode(',', $request->emails);
        }
        $addnewjob->step = 4;
        $addnewjob->payement_status = 'done';
        $addnewjob->save();
        if($request->job_type_from_side == 'adminside')
        {
            $url = url('admin/carriers/detail').'/'.$addnewjob->company_id.'/addnewjob?step=4&jobid='.$addnewjob->id.'';
            return Redirect::to($url);
        }else{
            $url = url('job/add').'?step=4&jobid='.$addnewjob->id.'';
            return Redirect::to($url);
        }
    }

    public function subscription(Request $request)
    {
        $check = subscription_plans::where('id' , $request->plan_id)->first();
        if($check->price > 0)
        {
            $addnewjob = jobs::find($request->job_id);
            $addnewjob->step = 3;
            $addnewjob->plan_id = $request->plan_id;
            $addnewjob->payement_status = 'pending';
            $addnewjob->save();
            return redirect()->back()->with('message', 'Email Added Successfully');
        }
        else
        {
            $addnewjob = jobs::find($request->job_id);
            $addnewjob->step = 4;
            $addnewjob->plan_id = $request->plan_id;
            $addnewjob->payement_status = 'done';
            $addnewjob->save();
            return redirect()->back()->with('message', 'Email Added Successfully');
        }
    }
    
    public function jobsubmitlast(Request $request)
    {
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->step = 5;
        $addnewjob->save();
        $check = jobsubmissionsrequests::where('job_id' , $request->job_id);
        $company = DB::table('companies')->where('id' , $addnewjob->company_id)->first();
        $userid = $company->user_id;

        $new = new usernotifications();
        $new->user_id = $userid;
        $new->icon = '';
        $new->heading = 'Job Notification';
        $new->notification = 'Job IS Complete and Publish on your Dashboard';
        $new->url = '';
        $new->read = 0;
        $new->save();


        if($check->count() == 0)
        {
            $submit = new jobsubmissionsrequests();
            $submit->job_id = $request->job_id;
            if($addnewjob->payement_id)
            {
                $submit->status = 'pending';
            }else
             {
                $submit->status = 'active';
             }
            $submit->counter = 1;
            $submit->save();
        }
        if($request->job_type_from_side == 'adminside')
        {
            $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status','users.phonenumber','users.profile_picture')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->where('companies.id' , $addnewjob->company_id)
            ->first();
            $page = 'alljobs';
            return view('admin.carriers.jobs.jobsubmit')->with(array('data'=>$data,'page'=>$page));
        }
        else
        {
            return view('carrier/jobs/jobsubmit');
        }
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
        payout_schedules::where('job_id' , $request->job_id)->delete();
        extract($_POST);
        foreach($whenpayout as $k => $v){
            $data = "";
            foreach($_POST as $key => $val){
                if($key != '_token' && $key != 'job_id')
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
            DB::statement("INSERT INTO `payout_schedules` (`job_id`, `when`, `ammount`)VALUES ($request->job_id $data)");
        }
    }

    public function addadvancepayoutdetails(Request $request)
    {
        $check = advance_pay_options::where('job_id' , $request->job_id);

        if($check->count() > 0)
        {
            $adv_pay_out = advance_pay_options::find($check->first()->id);
        }else{
            $adv_pay_out = new advance_pay_options();
        }    
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

    public function advanceequipment(Request $request)
    {
        $check = advance_equipment_values::where('job_id' , $request->job_id);

        if($check->count() > 0)
        {
            $adv_pay_out = advance_equipment_values::find($check->first()->id);
        }else{
            $adv_pay_out = new advance_equipment_values();
        }    
        $adv_pay_out->job_id = $request->job_id;
        $adv_pay_out->engine = $request->engine;
        $adv_pay_out->transmission_type = $request->transmission_type;
        $adv_pay_out->truck_speed = $request->truck_speed;
        $adv_pay_out->apu_epu = $request->apu_epu;
        $adv_pay_out->bunks = $request->bunks;
        $adv_pay_out->camera_orientation = $request->camera_orientation;
        $adv_pay_out->camera_recording = $request->camera_recording;
        $adv_pay_out->can_truck_taken_home = $request->can_truck_taken_home;
        $adv_pay_out->truck_permanently_assigned = $request->truck_permanently_assigned;
        $adv_pay_out->onboard_navigation = $request->onboard_navigation;
        $adv_pay_out->onboard_communication = $request->onboard_communication;
        $adv_pay_out->directtv = $request->directtv;
        $adv_pay_out->siriusxm = $request->siriusxm;
        $adv_pay_out->inverter = $request->inverter;
        $adv_pay_out->refrigerator = $request->refrigerator;
        $adv_pay_out->microwave = $request->microwave;
        $adv_pay_out->collision_mitigation = $request->collision_mitigation;
        $adv_pay_out->save();
    }

    public function hiringreq(Request $request)
    {
        $link  = new linktemplatewithjobs();
        $link->template_id = $request->hiring_template;
        $link->job_id = $request->job_id;
        $link->save();


        $addnewjob = jobs::find($request->job_id);
        $addnewjob->step = 2;
        $addnewjob->save();


        $addnewjob = jobs::find($request->job_id);
        if($request->job_type_from_side == 'adminside')
        {
            $url = url('admin/carriers/detail').'/'.$addnewjob->company_id.'/addnewjob?step=3&jobid='.$addnewjob->id.'';
            return Redirect::to($url);
        }else{
            $url = url('job/add').'?step=3&jobid='.$addnewjob->id.'';
            return Redirect::to($url);
        }
    }


    public function postPaymentWithpaypal(Request $request)
    {
        $job = jobs::find($request->job_id);

        $plan = subscription_plans::find($job->plan_id);

        Session::put('plainid',$request->id);

        $totalprice = round($plan->price);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName('Product 1')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($totalprice);
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($totalprice);
        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($item_list)
        ->setDescription('Enter Your transaction description');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status'))
            ->setCancelUrl(URL::route('status'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));            
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('warning','Connection timeout');
                return Redirect::route('paywithpaypal'); 

                $url = url('stepthree');
                return Redirect::to($url);

            } else {
                \Session::put('warning','Some error occur, sorry for inconvenient');
                $url = url('stepthree');
                return Redirect::to($url);             
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {            
            return Redirect::away($redirect_url);
        }

        \Session::put('warning','Unknown error occurred');
        $url = url('payement').'/'.$request->orderid;
        return Redirect::to($url);
    }


    public function getPaymentStatus(Request $request)
    {        
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('warning','Payment failed due to panga');
            $url = url('stepthree');
            return Redirect::to($url);
        }
        $payment = Payment::get($payment_id, $this->_api_context);        
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));        
        $result = $payment->execute($execution, $this->_api_context);
        
        if ($result->getState() == 'approved') {         



            $plainid = Session::get('plainid');

            $plan = DB::table('subscriptionplans')->where('id' , $plainid)->get()->first();

            \Session::put('message',"Your Payment $".$plan->price." Successfully Processed");

            $user = user::find(session()->get('user_id_temp'));
            $user->selectplan = $plainid;
            $user->steps = 3;
            $user->save();

            $payments = new payments();
            $payments->currency = 'usd';
            $payments->charge_id = $payment_id;
            $payments->payment_channel = 'paypal';
            $payments->description = 'Paypal Ammount';
            $payments->amount = $plan->price;
            $payments->order_id = $plan->id;
            $payments->status = $result->getState();
            $payments->customer_id = session()->get('user_id_temp');
            $payments->save();

            $plandata = DB::table('subscriptionplans')->where('id' , $plainid)->get()->first();
            $subject = 'Welcome To '.Cmf::get_store_value('site_name').'| Invoice for Purchasing Plan';
            Mail::send('frontend.email.invoice', ['name' => $user->name,'planname' => $plandata->name,'price' => $plandata->price,'places_allowed' => $plandata->places_allowed], function($message) use($user , $subject){
                  $message->to($user->email);
                  $message->subject($subject);
            });

            $plan = new subscribedplans();
            $plan->user_id = session()->get('user_id_temp');
            $plan->plan_id = $plainid;
            $plan->save();
            return redirect()->route('user.stepfour');



        }else{
            \Session::put('warning','Payment failed due to very very panga !!');
            $orderid = Session::get('orderid');
            $url = url('stepthree');
            return Redirect::to($url);
        }
    }



    public function stripePost(Request $request)
    {
        $job = jobs::find($request->job_id);
        $plan = subscription_plans::find($job->plan_id);
        $totalprice = round($plan->price);
        $totalprice = $totalprice+100;
        Stripe\Stripe::setApiKey(Cmf::getsettings('stripe_secret'));
        $payement = Stripe\Charge::create ([
                "amount" => $totalprice,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $plan->name
        ]);
        if(!empty($payement->id))
        {
            $addnewjob = jobs::find($request->job_id);
            $addnewjob->step = 4;
            $addnewjob->plan_id = $plan->id;
            $addnewjob->payement_id = $payement->id;
            $addnewjob->payement_status = 'done';
            $addnewjob->save();
            $payments = new payements();
            $payments->currency = 'usd';
            $payments->charge_id = $payement->id;
            $payments->payment_channel = 'stripe';
            $payments->description = $payement->description;
            $payments->amount = $payement->amount;
            $payments->plan_id = $plan->id;
            $payments->status = $payement->status;
            $payments->job_id = $request->job_id;
            $payments->save();
            return redirect()->route('addnewjob')->with('success','Payement Successfully Done');
        }
        else
        {
            return redirect()->route('addnewjob')->with('warning','Payement Not Done');
        }   
    }
}
