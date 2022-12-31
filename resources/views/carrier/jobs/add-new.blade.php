@extends('layouts.main-layout')
@section('title','Add Job')
@section('pagename')
<li class="breadcrumb-item">
    <a href="{{ url('jobs') }}" class="text-muted">Manage Jobs</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add New Job</a>
</li>
@endsection
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
                                        <ul class="nav nav-success nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 0) active @endif">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Basic Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 1) active @endif">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Hiring Requirements</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 2) active @endif">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Routing & Transfer</span>
                                                </a>
                                            </li>
                                            <li class="nav-item @if($job->step == 4) active @endif">
                                                <a class="nav-link">
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
                                        
                                        <form id="hiringreqform" method="POST" action="{{ url('job/hiringreq') }}">
                                        @csrf

                                        @include('carrier.jobs.hiringreq')
                                        <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            <div id="submitbuttonforhiringreq" class="row mb-7">
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
                                        @include('carrier.jobs.hiringtemplatepreview')
                                        @include('carrier.jobs.hiringtemplateshow')
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
@section('scripts')
<style type="text/css">
    .hide{
        display: none;
    }
</style>
<script type="text/javascript">
    function submitpaypalform()
    {
        $('#paypalform').submit();
    }
    function stripeformsubmit()
    {
        $('#payment-form').submit();
    }

</script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ asset('public/carrier/assets/js/payement.js') }}"></script>
@endsection