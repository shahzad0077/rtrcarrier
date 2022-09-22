@extends('layouts.main-layout')
@section('title','All Jobs')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <div class="row mt-4">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search with title" name="">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="By ID" name="">
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option selected disabled>By Types</option>
                        <option>By Types</option>
                        <option>By Types</option>
                        <option>By Types</option>
                        <option>By Types</option>
                    </select>
                </div>
                <div class="col-md-3 text-right">
                    <a href="{{url('job/add')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> New Job Post</a>
                </div>
            </div>
            <div class="row mt-5">                                
                @foreach($jobs as $index => $job)
                <div class="col-md-6">
                    <div class="card job-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4><a class="text-black" href="{{url('job-detail')}}/{{ $job->job_id }}">{{ $job->job_tittle }}</a></h4>
                                </div>
                                <div>
                                    <span class="job-type">{{ $job->job_status }}</span>
                                </div>
                                <div>
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                                            <a class="dropdown-item" href="{{ url('jobedit') }}/{{ $job->job_id }}"> <img src="{{asset('public/carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                                            <a class="dropdown-item" href="{{ url('deletejob') }}/{{ $job->job_id }}"> <img src="{{asset('public/carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                            
                                            @if($job->job_status == 'approved')
                                            <a class="dropdown-item" href=""> <img src="{{asset('public/carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                                            <a class="dropdown-item" href="#"> <img src="{{asset('public/carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-3">
                                <div class="head-down">
                                    <a href="javascript:void(0)" class="text-primary">
                                        <i class="fa fa-map-marker-alt"></i>
                                        View Map
                                    </a>
                                </div>
                                <div class="head-down">
                                    <i class="fas fa-dollar-sign"></i>
                                    {{ $job->avgerage_weekly_pay }} a week
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="d-flex flex-row mt-3">
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
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="d-flex flex-row">
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
           <!--  <div class="row mt-5 mb-5">
                <div class="col-md-12">
                    <div class="card card-custom">
                        <div class="card-body py-7">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex flex-wrap mr-3">
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <span class="text-muted">Displaying 10 of 230 records</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection