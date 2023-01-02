@extends('admin.layouts.main-layout')
@section('title','Edit Job')
@section('pagename')
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers') }}" class="text-muted">Manage Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers') }}" class="text-muted">All Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers/detail') }}/{{ $data->id }}/alljobs" class="text-muted">All jobs</a>
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
                                <h3 class="card-label font-weight-bolder text-dark">Edit Basic Details of Job : {{ $job->job_tittle }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">
                                    <a style="background-color: #159892;" class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/basic">Basic Details</a>
                                    <a class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/hiring">Hiring Templates</a>
                                    <a class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/routing">Routing & Transfer</a>
                                    <a class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/preview">Preview</a>
                                </span>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    
                    
                    <form method="POST" action="{{ url('admin/carriers/updatebasicdetailsofjob') }}">
                        @csrf
                        <input type="hidden"  name="job_id" value="{{ $job->id }}">
                        @include('admin.carriers.jobs.portion.basic')
                        
                    </form>
                    
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