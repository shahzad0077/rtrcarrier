@extends('layouts.main-layout')
@section('title','All Jobs')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <form method="GET" action="{{ url('searchjobs') }}">
                <div class="row mt-4">
                
                    <div class="col-md-2">
                        <input type="text"  value="{{ $_GET['keyword'] }}" class="form-control" placeholder="Search with title" name="keyword">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Search with Zipcode" name="">
                    </div>
                    <div class="col-md-2">
                        <select name="freighttype" class="form-control">
                            <option value="">All Type</option>
                            @foreach(explode(',' ,DB::table('jot_attributes')->where('id' , 126)->first()->options) as $r)
                            <option @if($_GET['freighttype'] == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="drivertype" class="form-control">
                            <option value="">Driver Type</option>
                            @foreach(explode(',' , DB::table('jot_attributes')->where('id' , 124)->first()->options) as $r)
                            <option @if(isset($_GET['drivertype'])) @if($_GET['drivertype'] == $r) selected @endif @endif  value="{{ $r }}">{{ $r }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 text-right">
                        <button style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " class="btn btn-primary"> <i class="fa fa-search"></i>Search Jobs</button>
                    </div>
                    <div class="col-md-2 text-right">
                    <a style=" height: calc(2.1em + 1.3rem + 2px); padding-top: 12px; " href="{{url('job/add')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> New Job Post</a>
                </div> 
            </div>
            </form> 
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
</div>
@endsection