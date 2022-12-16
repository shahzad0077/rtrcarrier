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
                                <h3 class="card-label font-weight-bolder text-dark">All Team Members</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Manage All Team Members of {{ $data->company_name }}</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <div class="card-body">
                            <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                                <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Phone Number</th>
                                            <th>User role</th>
                                            <th>Last Activity</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($team as $r)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">{{ substr($r->user_name, 0, 1); }}</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{ $r->user_name }}</span>
                                                        <a href="#" class="text-muted text-hover-primary">{{ $r->user_email }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td>{{ $r->user_phonenumber }}</td>
                                            <td>{{ $r->role_name }}</td>
                                            <td>{{ Cmf::date_format($r->created_at) }}</td>
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Disable</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Activate</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>   
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