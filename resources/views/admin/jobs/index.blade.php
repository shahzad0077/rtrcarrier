@extends('admin.layouts.main-layout')
@section('title','All Jobs')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            All Jobs
                            <div class="text-muted pt-2 font-size-sm">Manage all jobs</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    
                    <!--begin: Search Form-->
                    <form method="GET" action="{{ url('admin/jobs/searchjobs') }}">
                    <div class="mb-7">
                        <div class="row">
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="input-icon">
                                    <input name="keyword" type="text" class="form-control" placeholder="Search with title...">
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <select class="form-control" name="carrier">
                                        <option value="">Select Carrier</option>
                                        @foreach(DB::table('companies')->get() as $r)
                                        <option value="{{ $r->id }}">{{ $r->company_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <select name="freight_type" class="form-control">
                                        <option value="">Freight Type</option>
                                        @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <select name="driver_type" class="form-control">
                                        <option value="">Driver Type</option>
                                        @foreach(explode(',' , $attribute->where('id' , 124)->first()->options) as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2 mt-5 mt-lg-0">
                                <button type="submit" class="btn btn-light-primary px-6 font-weight-bold">
                                    Search
                                </button>
                            </div>

                        </div>
                    </div>
                    </form>
                    <!--end: Search Form-->

                    <table class="table table-bordered table-head-custom" style="width:100%">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Carrier</th>
                                <th>Freight type</th>
                                <th>Driver Type</th>
                                <th>Hiring Map</th>
                                <th>Operating Area</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td>
                                    <a class="max-lines" href="{{ url('') }}" style="width:100px;">
                                        {{ $r->job_tittle }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        {{ $r->company_name }}
                                    </a>
                                </td>
                                <td>{{ $r->freight_type }}</td>
                                <td>{{ $r->driver_type }}</td>
                                
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
                                    <a href="{{ url('admin/carriers/editjob') }}/{{$r->company_id}}/{{ $r->job_id }}/basic" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                    <div class="row">
                        {!! $data->links('admin.pagination.index') !!}
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<!-- Modal-->
@endsection