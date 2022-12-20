<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\jobs;
use Auth;
use Session;
use Redirect;
class Checkjobstatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $companyid = Session::get('companyid');
        $checkjobs = jobs::where('company_id' , $companyid)->where('step' , '!=' , 5)->where('status' , 'continue');
        if($checkjobs->count() > 0)
        {
            $checkstep = $checkjobs->first()->step;
            if($checkstep == 0)
            {
                $step = 1;
            }elseif($checkstep == 1){
                $step = 2;
            }elseif($checkstep == 2){
                $step = 3;
            }else{
                $step = $checkstep;
            }
            $url = url('admin/carriers/detail').'/'.$companyid.'/addnewjob?step='.$step.'&jobid='.$checkjobs->first()->id.'&status=continue';
            return Redirect::to($url);
        }else{
            return $next($request);
        }
    }
}
