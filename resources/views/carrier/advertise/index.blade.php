@extends('layouts.main-layout')
@section('title','Advertising')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Advertising</a>
</li>
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <div class="row mt-5">                                
                @foreach($jobs as $index => $job)
                <div class="col-md-6">
                    <div class="card job-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4><a target="_blank" class="text-black" href="{{url('job-detail')}}/{{ $job->url }}">{{ $job->job_tittle }}</a></h4>
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
                                            <a onclick="deletejobbycarrier({{$job->job_id}})" class="dropdown-item" href="javascript:void(0)"> <img src="{{asset('public/carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                            
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection