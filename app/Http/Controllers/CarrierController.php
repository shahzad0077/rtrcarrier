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
class CarrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = companies::where('company_link' , Cmf::getusercompany()->id)->get()->first();
        $recuringtips = recuring_tips::orderby('id' , 'desc')->limit(5)->get();
        $jobs = jobsubmissionsrequests::select('jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('company_id' , Cmf::getusercompany()->id)->orderby('jobs.id' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier/dashboard')->with(array('data'=>$data,'jobs'=>$jobs,'recuringtips'=>$recuringtips));
    }
    public function searchzipcodefordashboard($id)
    {
        echo '<div class="text-center mt-5">No Result Found</div>';
    }
    public function createnewpage()
    {
        return view('carrier.companyinfo.createnewpage');
    }
    public function allcompanypage()
    {
        $data = allcarrierpages::where('company_id' , Cmf::getusercompany()->id)->get();
        return view('carrier.companyinfo.allpages')->with(array('data'=>$data));
    }
    public function deletecompanypage($id)
    {
        allcarrierpages::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Page Deleted Successfully');
    }
    public function addcompanypage(Request $request)
    {
        $add = new allcarrierpages();
        $add->company_id = Cmf::getusercompany()->id;
        $add->name = $request->name;
        $add->content = $request->additional_notes_about_expereince;
        $add->status = 'Published';
        $add->url = Cmf::shorten_url($request->name);
        $add->save();
        return redirect()->back()->with('message', 'Page Added Successfully');
    }
    public function updatecompanypage(Request $request)
    {
        $add =  allcarrierpages::find($request->id);
        $add->name = $request->name;
        $add->content = $request->additional_notes_about_expereince;
        $add->status = $request->status;
        $add->url = Cmf::shorten_url($request->name);
        $add->save();
        return redirect()->back()->with('message', 'Page Updated Successfully');
    }
    public function showalerts()
    {
        $data = carrieralerts::where('read' , 0)->where('company_id' , Cmf::getusercompany()->id)->orderby('created_at' , 'DESC')->get();
        if($data->count() > 0)
        {
            foreach ($data as $r) {
                echo '<div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40 symbol-light-secondary mr-5">
                            <span class="symbol-label">
                                <i class="fa '.$r->icon.'"></i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column font-weight-bold">
                            <a href="javascript:void(0)" class="text-dark text-hover-primary mb-1 font-size-lg">'.$r->subject.'</a>
                            <span class="text-muted">'.$r->alert.'</span>
                        </div>
                        <!--end::Text-->
                    </div>';
            }
        }else{
            echo '<div style="margin-top:35%;" class="d-flex justify-content-center">
                        <span style="font-size:22px;" class="text-muted">No Alerts</span>
                </div>';
        }
    }
    public function allnotifications()
    {
        $notification = usernotifications::where('user_id' , Auth::user()->id)->orderby('created_at' , 'DESC')->get();
        $alerts = carrieralerts::where('company_id' , Cmf::getusercompany()->id)->orderby('created_at' , 'DESC')->get();
        return view('carrier.notifications.index')->with(array('notification'=>$notification,'alerts'=>$alerts));
    }
    public function shonotifications()
    {
        $data = usernotifications::where('read' , 0)->where('user_id' , Auth::user()->id)->orderby('created_at' , 'DESC')->get();
        if($data->count() > 0)
        {
            foreach ($data as $r) {
            echo '<a href="'.url('').'/'.$r->url.'" class="navi-item">
                    <div class="navi-link">
                        <div class="navi-icon mr-2">
                            <i class="'.$r->icon.' text-success"></i>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                '.$r->notification.'
                            </div>
                            <div class="text-muted">
                                '.Cmf::create_time_ago($r->created_at).'
                            </div>
                        </div>
                    </div>
                </a>';
            }
        }else{
            echo '<div style="margin-top:35%;" class="d-flex justify-content-center">
                        <span style="font-size:22px;" class="text-muted">No Notification</span>
                </div>';
        }
    }
    public function searchzipcode($id)
    {
        $data = DB::table('zipcode')->where('zipcode','like', '%' . $id . '%' )->get();
        foreach ($data as $r) {
            echo '<li onclick="selectzipcode('.$r->zipcode.')">'.$r->zipcode.' , '.$r->city.', '.$r->state.'</li>';
        }
    }
    public function advertise()
    {
        $data = companies::where('company_link' , Cmf::getusercompany()->id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('company_id' , Cmf::getusercompany()->id)->orderby('jobs.id' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier.advertise.index')->with(array('jobs'=>$jobs));
    }
    public function billing()
    {
        $data = payements::orderby('created_at' , 'DESC')->get();
        return view('carrier.billing.index')->with(array('data'=>$data));
    }
    public function downloadinvoice($id)
    {
        $data = payements::find($id);
        $job = jobs::find($data->job_id);
        $company = companies::find($job->company_id);
        $user = user::find($company->user_id);
        $pdf = PDF::loadView('carrier.billing.invoicetwo', ['data'=>$data,'user'=>$user]);
        return $pdf->download('articles.pdf');
    }
    public function carrierprofile()
    {
        $data = companies::where('user_id' , Auth::user()->id)->get()->first();
        return view('carrier/carrier-profile/index')->with(array('data'=>$data));
    }
    public function updatecarrierlogo(Request $request)
    {
        $company = companies::find($request->id);
        $company->logo = Cmf::sendimagetodirectory($request->company_logo);
        $company->save();
        return redirect()->back()->with('message', 'Logo Updated Successfully');
    }
    public function changecoverphoto(Request $request)
    {
        $company = companies::find($request->id);
        $company->banner = Cmf::sendimagetodirectory($request->coverphoto);
        $company->save();
        return redirect()->back()->with('message', 'Banner Updated Successfully');
    }
    public function updatecarrierprofile(Request $request)
    {
        $company = companies::find($request->id);
        $company->email = $request->email;
        $company->contact_number = $request->contact_number;
        $company->address = $request->address;
        $company->website_link = $request->website_link;
        $company->aboutus = $request->aboutus;
        $company->google_link = $request->google_link;
        $company->facebook_link = $request->facebook_link;
        $company->save();
        return redirect()->back()->with('message', 'Carrier Profile Updated Successfully');
    }
    public function profilesettings()
    {
        return view('carrier/profile-settings/index');
    }
    public function updateprofilepicture(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->profile_picture = Cmf::sendimagetodirectory($request->profile_avatar);
        $user->save();
        return redirect()->back()->with('message', 'Profile Image Updated Successfully');
    }

    public function updateuserprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
    public function securetycredentials(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required',
        ]);


        if($request->newpassword == $request->password_confirmed){
        $hashedPassword = Auth::user()->password;
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
            else{
                  session()->flash('errorsecurity','New password can not be the old password!');
                  return redirect()->back();
                }
           }
          else{
               session()->flash('errorsecurity','Old password Doesnt matched ');
               return redirect()->back();
             }
        }else{
            session()->flash('errorsecurity','Repeat password doesn’t match');
            return redirect()->back();
        }
    }
    public function addnewmap()
    {
        return view('carrier/hiring-maps/add-new');
    }
    public function printmap($id , $tittle)
    {
        $data = maplocations::where('map_id' , $id)->get();
        return view('carrier.hiring-maps.printmap')->with(array('data'=>$data,'tittle'=>$tittle));
    }
    public function addnewhiringmap(Request $request)
    {
        $map = new hiring_maps();
        $map->id = $request->map_id;
        if($request->type == 'admin')
        {
            $map->company_id = $request->carrier_id;
        }else{
            $map->company_id = Cmf::getusercompany()->id;
        }
        $map->tittle = $request->map_tittle;
        $map->type = $request->map_type;
        $map->status = 1;
        if($request->logo)
        {
            $map->logo = Cmf::sendimagetodirectory($request->logo);
        }
        if($request->state)
        {
            $map->state = implode(',', $request->state);
        }
        if($request->city)
        {
            $map->city = implode(',', $request->city);
        }
        if($request->zipcode)
        {
            $map->zipcode = implode(',', $request->zipcode);
        }
        $map->save();
        $check = jobs::where('company_id' , Cmf::getusercompany()->id)->where('step' ,'!=' ,5);
        if($check->count() > 0)
        {
            if(hiring_maps::where('type' , 'Hiring Map')->where('company_id' , Cmf::getusercompany()->id)->count() > 0)
            {
                if(hiring_maps::where('type' , 'Operating Map')->where('company_id' , Cmf::getusercompany()->id)->count() > 0)
                {
                    return redirect()->route('addnewjob')->with('success','Map Added Successfully');
                }else{
                    return redirect()->route('addnewjob')->with('success','Map Added Successfully');
                }
            }else{
                return redirect()->back()->with('warning', 'Please Add Hiring Map');
            }
            
        }else{
            $url = url('hirig-maps');
            return Redirect::to($url);
        }
    }
    public function updatehiringmap(Request $request)
    {
        $map = hiring_maps::find($request->map_id);
        $map->id = $request->map_id;
        $map->company_id = Cmf::getusercompany()->id;
        $map->tittle = $request->map_tittle;
        $map->type = $request->map_type;
        $map->status = 1;
        if($request->logo)
        {
            $map->logo = Cmf::sendimagetodirectory($request->logo);
        }
        if($request->state)
        {
            $map->state = implode(',', $request->state);
        }
        if($request->city)
        {
            $map->city = implode(',', $request->city);
        }
        if($request->zipcode)
        {
            $map->zipcode = implode(',', $request->zipcode);
        }
        $map->save();
        return redirect()->back()->with('message', 'Map Added Successfully');
    }
    public function hiringmaps()
    {
        $data = hiring_maps::where('company_id' , Cmf::getusercompany()->id)->get();
        return view('carrier/hiring-maps/index')->with(array('data'=>$data));
    }
    public function deletemap($id)
    {
        $map = hiring_maps::find($id);
        $map_type = $map->type;
        if($map_type == 'Hiring Map')
        {
            $jobs = jobs::where('hiring_area' , $id)->first();
            if($jobs)
            {
                linktemplatewithjobs::where('job_id' , $jobs->id)->delete();
                advance_equipment_values::where('job_id' , $jobs->id)->delete();
                advance_pay_options::where('job_id' , $jobs->id)->delete();
                equipment_jobs::where('job_id' , $jobs->id)->delete();
                jobsubmissionsrequests::where('job_id' , $jobs->id)->delete();
                job_equipments::where('job_id' , $jobs->id)->delete();
                jobs::where('id' , $jobs->id)->delete();
            }
            
        }
        if($map_type == 'Operating Map')
        {
            $jobs = jobs::where('operating_area' , $id)->first();
            if($jobs)
            {
                linktemplatewithjobs::where('job_id' , $jobs->id)->delete();
                advance_equipment_values::where('job_id' , $jobs->id)->delete();
                advance_pay_options::where('job_id' , $jobs->id)->delete();
                equipment_jobs::where('job_id' , $jobs->id)->delete();
                jobsubmissionsrequests::where('job_id' , $jobs->id)->delete();
                job_equipments::where('job_id' , $jobs->id)->delete();
                jobs::where('id' , $jobs->id)->delete();
            }
            
        }

        maplocations::where('map_id' , $id)->delete();
        hiring_maps::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Map Deleted Successfully');
    }
    function editmap($id)
    {
        $locations = maplocations::where('map_id' , $id)->get();
        $map = hiring_maps::where('id' , $id)->get()->first();
        return view('carrier/hiring-maps/editmap')->with(array('locations'=>$locations,'map'=>$map));
    }


    public function changestatusofmap($id)
    {
        $map = hiring_maps::find($id);
        if($map->status == 1){
            $map->status = 2;
        }else{
            $map->status = 1;
        }
        $map->save();
        return redirect()->back()->with('message', 'Map status Updated Successfully');
    }
    public function savestatemap($state,$map_id,$colum)
    {
        $check  = maplocations::where($colum , $state)->where('map_id',$map_id);
        if($check->count() > 0)
        {
            maplocations::where($colum , $state)->where('map_id',$map_id)->delete();
        }
        else
        {
            $maploc = new maplocations();
            $maploc->map_id = $map_id;
            $maploc->$colum = $state;
            $maploc->save();
        }
    }
    public function savezipcodeagainstmap($zipcode , $radius , $mapid)
    {
        $maploc = new maplocations();
        $maploc->zipcode = $zipcode;
        $maploc->radius = $radius;
        $maploc->map_id = $mapid;
        $maploc->save();
    }
    public function deletemaplocation($zipcode , $radius , $mapid)
    {
        maplocations::where('zipcode' , $zipcode)->where('radius' , $radius)->where('map_id' , $mapid)->delete();
    }
    public function savecitymaplocation($city,$state,$map_id)
    {
        $check  = maplocations::where('state' , $state)->where('city' , $city)->where('map_id',$map_id);
        if($check->count() > 0)
        {
            maplocations::where('state' , $state)->where('city' , $city)->where('map_id',$map_id)->delete();
        }
        else
        {
            $maploc = new maplocations();
            $maploc->map_id = $map_id;
            $maploc->state = $state;
            $maploc->city = $city;
            $maploc->save();
        }
        $string = $new_str = str_replace(' ', '-', $city); 
        $cityforclass = $string;
        $string = "'".$string."'";

        echo '<button type="button" class="city'.$cityforclass.' btn btn-secondary map-delete-btn">'.$city.' '.$state.' <i onclick="deletecity('.$string.')" class="icon-2x text-dark-50 flaticon-delete-1" ></i></button>';
    }
    public function updatepetpolicy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'petpolicy' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        } 
        if($request->type == 'admin')
        {
            $updatecompany = companies::find($request->carrier_id);
        }else{
            $updatecompany = companies::find(Cmf::getusercompany()->id);
        }
        
        $updatecompany->petpolicy = $request->petpolicy;
        $updatecompany->save();
        return response()->json(['policytext'=>$request->petpolicy]);
    }
    public function updateriderpolicy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rider_policy' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }
        if($request->type == 'admin')
        {
            $updatecompany = companies::find($request->carrier_id);
        }else{
            $updatecompany = companies::find(Cmf::getusercompany()->id);
        }
        $updatecompany->riderpolicy = $request->rider_policy;
        $updatecompany->save();
        return response()->json(['policytext'=>$request->rider_policy]);
    }
    public function companyinfo($id)
    {
        $data = company_info_pages::where('url' , $id)->first();
        return view('carrier/company-info/index')->with(array('data'=>$data));
    }
    public function updatecompanyinfo(Request $request)
    {
        $data = companies::where('user_id' , Auth::user()->id)->get()->first();

        $sql = "UPDATE `companies` SET $request->columnname = '$request->additional_notes_about_expereince' WHERE `id` = $data->id;";

        DB::statement($sql);

        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
    public function carrierhelp()
    {
        $data = help_categories::where('status' , 'published')->orderby('order' , 'ASC')->get();
        return view('carrier/help/index')->with(array('data'=>$data));
    }
    public function helpsearch(Request $request)
    {
        $input = $request->all();
        $q = help_articles::select('help_articles.id','help_articles.tittle','help_articles.answer');
        if ($input['keyword'])
        {
            $q->where('help_articles.tittle','like', '%' . $input['keyword'] . '%' );
        }
        $data = $q->orderby('order' , 'ASC')->get();
        return view('carrier/help/helpsearch')->with(array('data'=>$data));
    }
    public function addnewpost()
    {
        $categories = education_categories::where('status' , 'Published')->get();
        return view('carrier.education-center.addpost')->with(array('categories'=>$categories));
    }

    public function addneweducationarticle(Request $request)
    {
        $add = new education_articles();
        $add->category_id = $request->category_id;
        $add->tittle = $request->tittle;
        $add->url = Cmf::shorten_url($request->tittle);
        if($request->image)
        {
            $add->image = Cmf::sendimagetodirectory($request->image);
        }
        $add->youtube = $request->youtube;
        $add->content = $request->answer;
        $add->type = 'carrier';
        $add->carrier_id = Cmf::getusercompany()->id;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Post Added Successfully');
    }
    public function educationcenter()
    {
        $categories = education_articles::select('education_categories.name','education_categories.id','education_categories.url')->leftJoin('education_categories','education_articles.category_id','=','education_categories.id')->groupby('education_categories.name')->get();
        $rtrposts = education_articles::where('status' , 'Published')->where('type' , 'rtr');
        $carrierposts = education_articles::where('status' , 'Published')->where('carrier_id' , Cmf::getusercompany()->id)->where('type' , 'carrier');
        return view('carrier/education-center/index')->with(array('categories'=>$categories,'carrierposts'=>$carrierposts,'rtrposts'=>$rtrposts));
    }
    public function educationcenterbycategory($id)
    {
        $category = education_categories::where('url' , $id)->first();
        $posts = education_articles::where('status' , 'Published')->where('type' , 'rtr')->where('category_id' , $category->id)->get();
        return view('carrier/education-center/bycategory')->with(array('category'=>$category,'data'=>$posts));
    }

    public function allposts()
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::where('status' , 'Published')->where('carrier_id' , Cmf::getusercompany()->id)->where('type' , 'carrier')->get();
        return view('carrier/education-center/allposts')->with(array('categories'=>$categories,'data'=>$data));
    }
    public function editpost($id)
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::where('status' , 'Published')->where('carrier_id' , Cmf::getusercompany()->id)->where('type' , 'carrier')->where('id' , $id)->get()->first();
        return view('carrier/education-center/edit')->with(array('categories'=>$categories,'data'=>$data));
    }

    public function updateeducationarticle(Request $request)
    {
        $add = education_articles::find($request->id);
        $add->category_id = $request->category_id;
        $add->tittle = $request->tittle;
        $add->url = Cmf::shorten_url($request->tittle);
        if($request->image)
        {
            $add->image = Cmf::sendimagetodirectory($request->image);
        }
        $add->youtube = $request->youtube;
        $add->content = $request->answer;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Article Updated Successfully');
    }
    public function detailpost($id)
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::where('status' , 'Published')->where('url' , $id)->get()->first();
        return view('carrier/education-center/detail')->with(array('categories'=>$categories,'data'=>$data));
    }
    
}
