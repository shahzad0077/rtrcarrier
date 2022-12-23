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
    <a href="javascript:void(0)" class="text-muted">Customer Details</a>
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
                                <h3 class="card-label font-weight-bolder text-dark">User Details</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Manage {{ $data->user_name }} Details</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form enctype="multipart/form-data" class="form" method="POST" action="{{ url('admin/carriers/updateuserdetail') }}">
                            @csrf
                            <input type="hidden" value="{{ $data->user_id }}" name="id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Name</label>
                                            <input type="text" value="{{ $data->user_name }}" class="form-control form-control-lg form-control-solid" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div  class="form-group">
                                            <label class="lable-control">Email</label>
                                            <input style="cursor: no-drop;" type="text" readonly value="{{ $data->user_email }}" class="form-control form-control-lg form-control-solid" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div  class="form-group">
                                            <label class="lable-control">Profile Image</label>
                                            <input  type="file" class="form-control form-control-lg form-control-solid" name="profileimage">
                                        </div>
                                        @if($data->profile_picture)
                                        <img src="{{ url('public/images') }}/{{ $data->profile_picture }}" class="img-thumbnail" alt="{{ $data->user_name }}" width="200" height="100">
                                        @else
                                        <img src="{{ url('public/images/public/carrier/assets/profile.jpg') }}" class="img-thumbnail" alt="{{ $data->user_name }}" width="200" height="100">
                                        @endif 
                                    </div>
                                    <div class="col-md-6">
                                        <div  class="form-group">
                                            <label class="lable-control">Dot Number</label>
                                            <input type="text" value="{{ $data->dot_number }}" class="form-control form-control-lg form-control-solid" name="dot_number">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <div class="form-group">
                                            <label class="lable-control">Phonenumber</label>
                                            <input type="text" value="{{$data->phonenumber}}" class="form-control form-control-lg form-control-solid" name="phonenumber">
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