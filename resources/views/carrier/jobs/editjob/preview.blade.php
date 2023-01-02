@extends('layouts.main-layout')
@section('title','Add Job')
@section('pagename')
<li class="breadcrumb-item">
    <a href="{{ url('dashboard') }}" class="text-muted">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('jobs') }}" class="text-muted">All jobs</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Edit Job : {{ $job->job_tittle }}</a>
</li>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            
            <!--begin::Profile Change Password-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8 mt-6">
                    @include('alerts.index')
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Preview of Job : {{ $job->job_tittle }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">
                                    <a  class="badge badge-success" href="{{ url('jobedit') }}/{{ $job->id }}/basic">Basic Details</a>
                                    <a class="badge badge-success" href="{{ url('jobedit') }}/{{ $job->id }}/hiring">Hiring Templates</a>
                                    <a  class="badge badge-success" href="{{ url('jobedit') }}/{{ $job->id }}/routing">Routing & Transfer</a>
                                    <a style="background-color: #159892;" class="badge badge-success" href="{{ url('jobedit') }}/{{ $job->id }}/preview">Preview</a>
                                </span>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    @include('carrier.jobs.preview')
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Change Password-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@include('carrier.jobs.modal')
@endsection