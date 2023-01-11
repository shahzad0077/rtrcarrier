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
use Redirect;
use Validator;
use Auth;
use DB;
use Stripe;
use PDF;
class MapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Checkuserstatus');
    }
    public function savestate($state,$map_id)
    {
        $maploc = new maplocations();
        $maploc->map_id = $map_id;
        $maploc->state = $state;
        $maploc->save();
    }
    public function deletestate($state , $map_id)
    {
         maplocations::where('map_id' , $map_id)->where('state' , $state)->delete();
    }
    public function savecity($city,$state,$map_id ,  $radius)
    {
        $maploc = new maplocations();
        $maploc->map_id = $map_id;
        $maploc->state = $state;
        $maploc->city = $city;
        $maploc->radius = $radius;
        $maploc->save();
        $string = $new_str = str_replace(' ', '-', $city); 
        $cityforclass = $string;
        $string = "'".$string."'";
        echo '<button type="button" class="city'.$cityforclass.' btn btn-secondary map-delete-btn">'.$city.', '.$state.' ('.$radius.')<i onclick="deletecity('.$string.' , '.$maploc->id.')" class="icon-2x text-dark-50 flaticon-delete-1" ></i></button>';
    }
    public function deletecity()
    {
         
    }
    public function savezipcode()
    {
         
    }
    public function deletezipcode()
    {
         
    }
}
