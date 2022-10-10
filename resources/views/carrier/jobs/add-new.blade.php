@extends('layouts.main-layout')
@section('title','Add Job')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <!-- Progress bar -->
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <!-- End Progress bar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header pt-2 pl-0 pr-0 pb-0">
                                        <ul class="nav nav-success nav-pills" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 0) active @endif" id="one-tab-2" data-toggle="tab" href="#one-2">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Basic Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 1) active @endif" id="two-tab-2" data-toggle="tab" href="#two-2" aria-controls="two">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Hiring Req.</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 2) active @endif" id="three-tab-2" data-toggle="tab" href="#three-2" aria-controls="three">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Routing & trans.</span>
                                                </a>
                                            </li>
                                            <li class="nav-item @if($job->step == 3) active @endif">
                                                <a class="nav-link" id="four-tab-2" data-toggle="tab" href="#four-2" aria-controls="four">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/subscription.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Subscriptions</span>
                                                </a>
                                            </li>
                                            <li class="nav-item @if($job->step == 4) active @endif">
                                                <a class="nav-link" id="five-tab-2" data-toggle="tab" href="#five-2" aria-controls="five">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/preview.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Preview</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(DB::table('hiring_maps')->where('type' , 'Hiring Map')->where('company_id' , Cmf::getusercompany()->id)->count()  == 0)
                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>You have not Added any hiring Area Map Please Add Mapp Before Starting Job
                          </div>
                        @endif
                        @if(DB::table('hiring_maps')->where('type' , 'Operating Map')->where('company_id' , Cmf::getusercompany()->id)->count()  == 0)
                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>You have not Added any hiring Area Map Please Add Mapp Before Starting Job
                          </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="myTabContent2">
                                    
                                    <div class="tab-pane fade @if($job->step == 0) active show @endif" id="one-2" role="tabpanel" aria-labelledby="one-tab-2">
                                        <form method="POST" action="{{ url('job/submitone') }}">
                                        @csrf
                                        <input type="hidden" value="{{ $job->id }}" name="job_id">
                                        @include('carrier.jobs.basic')                                     
                                        <div class="row mb-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-primary btn-lg">
                                                            Next <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                    <div class="tab-pane fade @if($job->step == 1) active show @endif" id="two-2" role="tabpanel" aria-labelledby="two-tab-2">
                                        
                                        <form method="POST" action="{{ url('job/hiringreq') }}">
                                        @csrf

                                        @include('carrier.jobs.hiringreq')
                                        <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade @if($job->step == 2) active show @endif" id="three-2" role="tabpanel" aria-labelledby="three-tab-2">
                                        <form method="POST" action="{{ url('job/routingandtrans') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.routingandtrans')
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade @if($job->step == 3) active show @endif" id="four-2" role="tabpanel" aria-labelledby="four-tab-2">
                                        <form method="POST" action="{{ url('job/subscription') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.subscriptions')
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade @if($job->step == 4) active show @endif" id="five-2" role="tabpanel" aria-labelledby="five-tab-2">
                                        <form method="POST" action="{{ url('job/jobsubmitlast') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.preview')
                                            <div class="row mb-7 mt-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-lg">
                                                                Submit Job <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    @include('carrier.jobs.modal')
@endsection