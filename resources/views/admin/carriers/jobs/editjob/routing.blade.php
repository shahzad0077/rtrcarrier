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
                                <h3 class="card-label font-weight-bolder text-dark">Edit Routing & Transfer of Job : {{ $job->job_tittle }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">
                                    <a class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/basic">Basic Details</a>
                                    <a   class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/hiring">Hiring Templates</a>
                                    <a style="background-color: #159892;" class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/routing">Routing & Transfer</a>
                                    <a class="badge badge-success" href="{{ url('admin/carriers/editjob') }}/{{ $data->id }}/{{ $job->id }}/preview">Preview</a>
                                </span>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    
                    <form method="POST" action="{{ url('admin/carriers/updateroutingandtransfer') }}">
                        @csrf
                        <input type="hidden"  name="job_id" value="{{ $job->id }}">
                        @include('admin.carriers.jobs.portion.routingandtrans')
                        <div class="card card-custom mt-3">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label font-weight-bolder text-dark">@if($page == 'editjob') Update Routing & Transfer @else  Save and Continue @endif</h3>
                                </div>
                                <div class="card-toolbar">
                                <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary font-weight-bolder">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> @if($page == 'editjob') Update Routing & Transfer @else  Save and Continue @endif
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </div>
                        </div>
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