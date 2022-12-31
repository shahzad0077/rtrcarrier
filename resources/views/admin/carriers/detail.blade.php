@extends('admin.layouts.main-layout')
@section('title','Carriers')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Manage Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers') }}" class="text-muted">All Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Company Details</a>
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
                                <h3 class="card-label font-weight-bolder text-dark">Company Details</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Manage {{ $data->company_name }} Details</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form enctype="multipart/form-data" class="form" method="POST" action="{{ url('admin/carriers/updatecarrierdetail') }}">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input name="company_name" type="text" value="{{ $data->company_name }}" class="form-control form-control-lg form-control-solid">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="lable-control">Company Logo</label>
                                            <input type="file" class="form-control form-control-lg form-control-solid" name="company_logo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Company Email</label>
                                            <input value="{{ $data->email }}" type="text" class="form-control form-control-lg form-control-solid" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Contact number</label>
                                            <input value="{{ $data->contact_number }}" type="text" class="form-control form-control-lg form-control-solid" name="contact_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Company address</label>
                                            <input value="{{ $data->address }}" type="text" class="form-control form-control-lg form-control-solid" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Website link</label>
                                            <input value="{{ $data->website_link }}" type="link" class="form-control form-control-lg form-control-solid" name="website_link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Twitter Profile</label>
                                            <input value="{{ $data->google_link }}" type="text" class="form-control form-control-lg form-control-solid" name="google_link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Facebook Profile</label>
                                            <input value="{{ $data->facebook_link }}" type="link" class="form-control form-control-lg form-control-solid" name="facebook_link">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="lable-control">About us</label>
                                            <textarea rows="10" name="aboutus" class="form-control" rows="10">{{ $data->aboutus }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex">
                                            <div class="ml-auto">
                                                <button type="submit" class="btn btn-primary mr-2">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
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