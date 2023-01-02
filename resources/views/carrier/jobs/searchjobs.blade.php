@extends('layouts.main-layout')
@section('title','All Jobs')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <form method="GET" action="{{ url('searchjobs') }}">
                <div class="row mt-4">
                
                    <div class="col-md-2">
                        <input type="text"  value="{{ $_GET['keyword'] }}" class="form-control" placeholder="Search with title" name="keyword">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Search with Zipcode" name="">
                    </div>
                    <div class="col-md-2">
                        <select name="freighttype" class="form-control">
                            <option value="">All Type</option>
                            @foreach(explode(',' ,DB::table('jot_attributes')->where('id' , 126)->first()->options) as $r)
                            <option @if($_GET['freighttype'] == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="drivertype" class="form-control">
                            <option value="">Driver Type</option>
                            @foreach(explode(',' , DB::table('jot_attributes')->where('id' , 124)->first()->options) as $r)
                            <option @if(isset($_GET['drivertype'])) @if($_GET['drivertype'] == $r) selected @endif @endif  value="{{ $r }}">{{ $r }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 text-right">
                        <button style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " class="btn btn-primary"> <i class="fa fa-search"></i>Search Jobs</button>
                    </div>
                    <div class="col-md-2 text-right">
                    <a style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " href="{{url('job/add')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> New Job Post</a>
                </div> 
            </div>
            </form> 
            <div class="row mt-5">                                
                @foreach($jobs as $index => $job)
                <div class="col-md-12">
                    <div class="card job-card">
                        <div class="card-body p-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="d-flex flex-row">
                                        <div>
                                            <h4><a target="_blank" class="text-black" href="{{url('job-detail')}}/{{ $job->url }}">{{ $job->job_tittle }}</a></h4>
                                        </div>
                                        <div>
                                            <span class="job-type ml-5">{{ $job->job_status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                                            <a class="dropdown-item" href="{{ url('jobedit') }}/{{ $job->job_id }}/basic"> <img src="{{asset('public/carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                                            <a onclick="deletejobbycarrier({{$job->job_id}})" class="dropdown-item" href="javascript:void(0)"> <img src="{{asset('public/carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                            
                                            @if($job->job_status == 'approved')
                                            <a class="dropdown-item" href=""> <img src="{{asset('public/carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                                            <a class="dropdown-item" href="#"> <img src="{{asset('public/carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="d-flex flex-row mt-1">
                                <div class="head-down">
                                    <a href="javascript:void(0)" class="text-primary">
                                        <i class="fa fa-map-marker-alt"></i>
                                        View Map
                                    </a>
                                </div>
                                <div class="head-down">
                                    <i class="fas fa-dollar-sign"></i>
                                    
                                </div>
                            </div> -->
                            <div class="row mt-1">
                                <div class="col-md-12">
                                    <div class="d-flex flex-row mt-3">
                                        <div class="job-detail">
                                            <p>Average Weekly Pay</p>
                                            <b>{{ $job->avgerage_weekly_pay }} a week</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Freight type</p>
                                            <b>{{ $job->freight_type }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Driver type</p>
                                            <b>{{ $job->driver_type }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Compensation</p>
                                            <b>{{ $job->compensation }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Home time</p>
                                            <b>{{ $job->home_time }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Experience</p>
                                            <b>{{ $job->hirring->minimum_expereince }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Open Seats</p>
                                            <b>200</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Total Applications Recieved</p>
                                            <b>300</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Last App Received</p>
                                            <b>12 Jun 2022 , 12:00PM</b>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection