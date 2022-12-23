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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 successfully-content">
                                    <img src="{{ asset('public/carrier/assets/media/custom/ticked.png') }}">
                                    <h2>Job has been added successfully.</h2>
                                    <div class="dashboad-btn-main">
                                        <div class="dashboad-btn">
                                            <a href="{{ url('admin/carriers/detail') }}/{{ $data->id }}/alljobs" type="reset" class="btn btn-primary mr-2 dashboard-inner-btn">All Jobs</a>
                                        </div>
                                        <div class="dashboad-btn">
                                            <a href="{{ url('admin/carriers/detail') }}/{{ $data->id }}/addnewjob?step=1&jobid={{ rand(123456789,987654321) }}" type="reset" class="btn btn-primary mr-2 post-inner-btn">Post another Job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Change Password-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection