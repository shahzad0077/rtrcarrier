<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Cmf;
use App\Models\User;
use App\Models\companies;
use App\Models\help_categories;
use App\Models\help_articles;
use App\Models\company_info_pages;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\jobs;
use App\Models\education_categories;
use App\Models\education_articles;
use App\Models\maplocations;
use App\Models\hiring_maps;
use App\Models\recuring_tips;
use App\Models\advance_equipment_values;
use App\Models\advance_pay_options;
use App\Models\equipment_jobs;
use App\Models\job_equipments;
use App\Models\payements;
use App\Models\usernotifications;
use App\Models\allcarrierpages;
use App\Models\carrieralerts;
use App\Models\orrientationtemplates;
use Redirect;
use Validator;
use Auth;
use DB;
use Stripe;
use PDF;
class OrientationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Checkuserstatus');
    }

    public function alltemplates()
    {
        $data = orrientationtemplates::where('company_id' , Cmf::getusercompany()->id)->get();
        return view('carrier/orientation/all')->with(array('data'=>$data));
    }
    public function addorientationtemplates()
    {
        return view('carrier.orientation.add');
    }
    public function addneworientationtemplate(Request $request)
    {
        $template  = new orrientationtemplates();
        $template->company_id = Cmf::getusercompany()->id;
        $template->name = $request->name;
        $template->location = $request->location;
        $template->orrienntationdays = $request->days;
        $template->orrientationtime = $request->time;
        $template->save();
        $url = url('orientation-templates');
        return Redirect::to($url); 
    }
    public function editorientationtemplate($id)
    {
        $data = orrientationtemplates::find($id);
        return view('carrier.orientation.edit')->with(array('data'=>$data));
    }
    public function updateorientationtemplate(Request $request)
    {
        $template  = orrientationtemplates::find($request->template_id);
        $template->company_id = Cmf::getusercompany()->id;
        $template->name = $request->name;
        $template->location = $request->location;
        $template->orrienntationdays = $request->days;
        $template->orrientationtime = $request->time;
        $template->save();
        $url = url('orientation-templates');
        return Redirect::to($url);
    }
}
