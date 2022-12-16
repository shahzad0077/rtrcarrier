@extends('admin.layouts.main-layout')
@section('title','Carriers')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">User Details</a>
</li>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            @include('alerts.index')
            @if(session()->has('errorsecurity'))
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session()->get('errorsecurity') }}
                </div>
            @endif
            @if ($errors->any())
              <div  class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li >{{ $error }}</li>
                    @endforeach
                </ul>
              </div><br />
            @endif
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
                                <h3 class="card-label font-weight-bolder text-dark">Change Password</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change Password  Carrier Account of {{ $data->user_name }}</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form enctype="multipart/form-data" class="form" method="POST" action="{{ url('admin/carriers/changepassword') }}">
                            @csrf
                            <input type="hidden" value="{{ $data->user_id }}" name="id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="lable-control">New Password</label>
                                            <input required type="password" id="password" class="form-control form-control-lg form-control-solid" name="newpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="lable-control">Confirm Password</label>
                                            <input required type="password" class="form-control form-control-lg form-control-solid" name="password_confirmed">
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