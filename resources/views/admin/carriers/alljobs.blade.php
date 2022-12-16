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
    <a href="javascript:void(0)" class="text-muted">All Jobs</a>
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
                                <h3 class="card-label font-weight-bolder text-dark">All Jobs</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Manage All Jobs of {{ $data->company_name }}</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <div class="card-body">
                            <table class="table table-bordered table-head-custom" style="width:100%">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                
                                <th>Hiring Map</th>
                                <th>Operating Area</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $r)
                            <tr>
                                <td>
                                    <a class="max-lines" href="{{ url('') }}" style="width:200px;">
                                        {{ $r->job_tittle }}
                                    </a>
                                </td>                            
                                <td>
                                    {{ $r->hiring_area }}
                                </td>
                                <td>
                                   {{ $r->operating_area }}
                                </td>
                                <td>
                                    @if($r->status == 'pending')
                                    <span class="badge badge-warning">Pending</span> 
                                    @elseif($r->status == 'active')
                                    <span class="badge badge-success">Active</span> 
                                    @elseif($r->status == 'notactive')
                                    <span class="badge badge-danger">Not Active</span> 
                                    @endif
                                    
                                    @if($r->payement_id)
                                    <span class="m-2 label label-lg font-weight-bold label-light-primary label-inline">Featured</span>
                                    @endif
                                </td>
                                <td>{{ Cmf::create_time_ago($r->created_at) }}</td>
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                    <div class="row">
                        {!! $jobs->links('admin.pagination.index') !!}
                    </div>
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