@extends('layouts.main-layout')
@section('title','All Jobs')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">All Jobs</a>
</li>
@endsection



@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">

            <div class="card p-4 bg-white">
                        <form method="GET" action="{{ url('searchjobs') }}">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" style="background-color: #f3f6f9 !important;" placeholder="Search with title" name="keyword">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" style="background-color: #f3f6f9 !important;" placeholder="Search with Zipcode" name="">
                                </div>
                                <div class="col-md-2">
                                    <select name="freighttype" id="selectfreighttype" class="form-control" style="background-color: #f3f6f9 !important;">
                                        <option value="">All Type</option>
                                        @foreach(explode(',' ,DB::table('jot_attributes')->where('id' , 126)->first()->options) as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="drivertype" id="kt_select2_1" class="form-control select2" style="background-color: #f3f6f9 !important;">
                                        <option value="">Driver Type</option>
                                        @foreach(explode(',' , DB::table('jot_attributes')->where('id' , 124)->first()->options) as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " class="btn btn-light-primary btn-block">Search</button>
                                </div>
                                <div class="col-md-2 text-right">
                                <a style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " href="{{url('job/add')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> New Job Post</a>
                                </div> 
                            </div>
                        </form>
                    </div>
        
            <div class="row mt-5">                                
                @foreach($jobs as $index => $job)
                <div class="col-md-12">
                    <div class="card job-card">
                        <div class="card-body p-5">
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
                                    <div onclick="showdetails({{ $job->job_id }})" id="jobdetailbutton{{$job->job_id}}" class="btn btn-primary me-6">See Details</div>
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
                            <div class="row">
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
                            <div style="display: none;" class="detailsection{{ $job->job_id }} mt-10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="jobdetailsidebar">
                                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                                <div class="navi-item mb-2 active">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Overview
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Top Selling Points
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Job Description
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Job Description
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Pay Detail
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Equipment
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Requirements
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Maps
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Benifits
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Orientation
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="navi-item mb-2">
                                                    <a href="javascript:void(0)" class="navi-link py-4 ">
                                                        <span class="navi-text font-size-lg">
                                                            Lease Information
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="jobdetailsidebar">
                                            <div class="card-header align-items-center border-0 mt-4 p-4">
                                                <h3 class="align-items-start">
                                                    <span class="font-weight-bolder text-dark">Oveview</span>
                                                </h3>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Overview of the Job</span>
                                                <hr>
                                            </div>
                                            <div class="job-details p-4">
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <h4><a target="_blank" class="text-black" href="{{url('job-detail')}}/{{ $job->url }}">{{ $job->job_tittle }}</a></h4>
                                                    </div>
                                                    <div>
                                                        <span class="job-type ml-5">{{ $job->job_status }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-2">
                                                        <div class="job-detail">
                                                            <p class="mr-2">Freight type:</p>
                                                            <b>{{ $job->freight_type }}</b>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="job-detail">
                                                            <p class="mr-2">Home time:</p>
                                                            <b>{{ $job->home_time }}</b>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="job-detail">
                                                            <p class="mr-2">Experience:</p>
                                                            <b>{{ $job->hirring->minimum_expereince }}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-2">
                                                        <div class="d-flex job-detail flex-row">
                                                            <b class="mr-2">Salary:</b>
                                                            <b>$1200 - $1600</b>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="d-flex job-detail flex-row">
                                                            <b class="mr-2">Driver Type:</b>
                                                            <b>{{ $job->driver_type }}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-12">
                                                        <h4>Job Description</h4>
                                                        <br>
                                                        {{ $job->job_description }}
                                                    </div>
                                                </div>
                                            </div>
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