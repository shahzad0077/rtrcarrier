@extends('admin.layouts.main-layout')
@section('title','Add New Job')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Manage Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers') }}" class="text-muted">All Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers/detail') }}/{{ $data->id }}/alljobs" class="text-muted">All jobs</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add New job</a>
</li>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            @include('alerts.index')
            <!--begin::Profile Change Password-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                @include('admin.carriers.sidebar')
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8 mt-6">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Add New Job</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">@if($_GET['step'] == 3) Routing & Transfer @endif @if($_GET['step'] == 1) Basic Details @endif @if($_GET['step'] == 2) Hiring Requirements @endif</span>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    @if($_GET['step'] == 1)
                    <form method="POST" action="{{ url('job/submitone') }}">
                        @csrf
                        <input type="hidden"  name="job_id" value="{{ $_GET['jobid'] }}">
                        <input type="hidden" value="adminside" name="job_type_from_side">
                        @include('admin.carriers.jobs.portion.basic')
                    </form>
                    @endif
                    @if($_GET['step'] == 2)

                    <form id="hiringreqform" method="POST" action="{{ url('job/hiringreq') }}">
                    @csrf
                    @include('admin.carriers.jobs.portion.hiringreq')
                    <input type="hidden"  name="job_id" value="{{ $_GET['jobid'] }}">
                    <input type="hidden" value="adminside" name="job_type_from_side">
                         <div id="submitbuttonforhiringreq" class="row mb-7">
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
                    @include('carrier.jobs.hiringtemplatepreview')
                    @include('carrier.jobs.hiringtemplateshow')
                    @endif
                    @if($_GET['step'] == 3)
                    <form method="POST" action="{{ url('job/routingandtrans') }}">
                        @csrf
                        <input type="hidden"  name="job_id" value="{{ $_GET['jobid'] }}">
                        <input type="hidden" value="adminside" name="job_type_from_side">
                        @include('admin.carriers.jobs.portion.routingandtrans')
                        <div class="row mb-7 mt-3">
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
                    @endif
                    @if($_GET['step'] == 4)
                    <form method="POST" action="{{ url('job/jobsubmitlast') }}">
                        @csrf
                        <input type="hidden"  name="job_id" value="{{ $_GET['jobid'] }}">
                        <input type="hidden" value="adminside" name="job_type_from_side">
                        @include('carrier.jobs.preview')
                        <div class="row mb-7 mt-7">
                            <div class="col-md-12 ml-auto">
                                <div class="d-flex">
                                    <div class="ml-auto">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            Submit Job <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Change Password-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@include('admin.carriers.jobs.modal')
@endsection