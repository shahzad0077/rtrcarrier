@extends('layouts.main-layout')
@section('title','All Jobs')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">All Jobs</a>
</li>
@endsection



@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">

            <div class="card p-4 bg-white">
                <form method="GET" action="{{ url('searchjobs') }}">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" style="background-color: #f3f6f9 !important;" placeholder="Search with title" name="keyword">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" style="background-color: #f3f6f9 !important;" placeholder="Search with Zipcode" name="">
                        </div>
                        <div class="col-md-2">
                            <select name="freighttype" id="selectfreighttype" class="form-control" style="background-color: #f3f6f9 !important;">
                                <option value="">All Type</option>
                                @foreach(explode(',' ,DB::table('jot_attributes')->where('id' , 126)->first()->options) as $r)
                                <option value="{{ $r }}">{{ $r }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="drivertype" id="kt_select2_1" class="form-control select2" style="background-color: #f3f6f9 !important;">
                                <option value="">Driver Type</option>
                                @foreach(explode(',' , DB::table('jot_attributes')->where('id' , 124)->first()->options) as $r)
                                <option value="{{ $r }}">{{ $r }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " class="btn btn-light-primary btn-block">Search</button>
                        </div> 
                        <div class="col-md-2 text-right">
                        <a style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " href="{{ url('job/add') }}?step=1&jobid={{ rand(123456789,987654321) }}" class="btn btn-primary"> <i class="fa fa-plus"></i> New Job Post</a>
                        </div> 
                    </div>
                </form>
            </div>
            <div class="row mt-5">                                
                @foreach($jobs as $index => $job)
                    @include('carrier.jobs.show.jobcard')
                @endforeach
            </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection