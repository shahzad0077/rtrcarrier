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
    <a href="javascript:void(0)" class="text-muted">All Team Members</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add Team Member</a>
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
                                <h3 class="card-label font-weight-bolder text-dark">Invite Team Member</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Add New Team Member of {{ $data->company_name }}</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <div class="card-body">
                            <form method="POST" action="{{ url('admin/carriers/addnewteammember') }}">
                                @csrf
                                <input type="hidden" value="{{ $data->id }}" name="company_id">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="lable-control">Select Role</label>
                                        <select required name="role_id" class="form-control selectpicker">
                                            <option value="">Select Role</option>
                                            @foreach(DB::table('staff_permissions')->where('company_id' , $data->id)->get() as $r)
                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="lable-control">Name</label>
                                        <input required type="text" class="form-control input-lg" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="lable-control">Email</label>
                                        <input required onkeyup="checkemailfromadmin()" type="text" class="form-control input-lg" id="work_email" name="email">
                                        <span style="color:red;" id="email-error"  role="alert"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="lable-control">Phone number</label>
                                        <input required type="text" class="form-control input-lg" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="lable-control">Note</label>
                                        <input type="text" class="form-control input-lg" name="note">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button id="submitbutton" type="submit" class="btn btn-primary btn-block">
                                        Send Invitation
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
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