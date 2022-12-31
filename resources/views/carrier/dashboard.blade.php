@extends('layouts.main-layout')
@section('title','Dashboard')
@section('content')
    
    <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-custom gutter-b">
                        <div class="card-body p-3">
                            <div class="card bg-light-gray">
                                <form method="GET" action="{{ url('searchjobs') }}">
                                    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5 class="modal-title" id="exampleModalLabel">Advance Filters</h5>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mt-7">
                                                        <div class="col-md-12">
                                                            <h5 class="mb-5">Home time</h5> 
                                                        </div>
                                                        @foreach(explode(',' , DB::table('jot_attributes')->where('id' , 125)->first()->options) as $r)
                                                        <div class="col-md-3 mb-3">
                                                            <label class="checkbox checkbox-lg">
                                                                <input value="{{$r}}" type="checkbox" name="hometimeadvance[]" />
                                                                <span class="mr-3"></span>
                                                                {{$r}}
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-7">

                                                        <div class="col-md-12">
                                                            <h5 class="mb-5">Driver Type</h5>
                                                        </div>
                                                        @foreach(explode(',' , DB::table('jot_attributes')->where('id' , 124)->first()->options) as $r)
                                                        <div class="col-md-3 mb-3">
                                                            <label class="checkbox checkbox-lg">
                                                                <input value="{{$r}}" type="checkbox" name="drivertypeadvance[]" />
                                                                <span class="mr-3"></span>
                                                                {{$r}}
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary font-weight-bold">Apply Filters</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="input-icon" style="width: 100%;">
                                                    <input onkeyup="searchzipcodefordashboard(this.value)" name="keyword" type="text" class="form-control border-none" placeholder="Enter Zip Code..." />
                                                    <span><i class="flaticon2-search-1 icon-md"></i></span>
                                                </div>
                                            </div>
                                            <div>
                                            <select class="form-control " id="selectfreighttype" name="freighttype">
                                                <option value="">Driver Type</option>
                                                @foreach(explode(',' ,DB::table('jot_attributes')->where('id' , 126)->first()->options) as $r)
                                                <option value="{{ $r }}">{{ $r }}</option> 
                                                @endforeach
                                            </select>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-lg btn-white shadow-cs btn-icon btn-filter mr-3" data-toggle="modal" data-target="#exampleModalCenter">
                                                    <img src="{{asset('public/carrier/assets/media/custom/filter.svg')}}" />
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-lg shadow-cs">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                        <style>
                                            /* Dropdown Button */

/* The search field when it gets focus/clicked on */
#myInput:focus {outline: 3px solid #ddd;}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    width: 99%;
    border: 1px solid #ddd;
    z-index: 1;
    height: 300px;
    top: 60px;
    overflow: auto;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
                                        </style>
                                        <div id="myDropdown" class="dropdown-content">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p>Results Showing {{ 1 }} of {{ $jobs->count() }} jobs</p>
                                </div>
                                <div>
                                    <select class="form-control">
                                        <option>Show 10</option>
                                        <option>Show 20</option>
                                        <option>Show 30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">                                
                @foreach($jobs as $index => $job)
                <div class="col-md-12">
                    <div class="card job-card">
                        <div class="card-body p-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="d-flex flex-row">
                                        <div>
                                            <h4><a target="_blank" class="text-black" href="{{url('job-detail')}}/{{ $job->url }}">{{ $job->job_tittle }}</a></h4>
                                        </div>
                                        <div>
                                            <span class="job-type ml-5">{{ $job->job_status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                                            <a class="dropdown-item" href="{{ url('jobedit') }}/{{ $job->job_id }}"> <img src="{{asset('public/carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                                            <a onclick="deletejobbycarrier({{$job->job_id}})" class="dropdown-item" href="javascript:void(0)"> <img src="{{asset('public/carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                            
                                            @if($job->job_status == 'approved')
                                            <a class="dropdown-item" href=""> <img src="{{asset('public/carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                                            <a class="dropdown-item" href="#"> <img src="{{asset('public/carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="d-flex flex-row mt-1">
                                <div class="head-down">
                                    <a href="javascript:void(0)" class="text-primary">
                                        <i class="fa fa-map-marker-alt"></i>
                                        View Map
                                    </a>
                                </div>
                                <div class="head-down">
                                    <i class="fas fa-dollar-sign"></i>
                                    
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex flex-row mt-1">
                                        <div class="job-detail">
                                            <p>Average Weekly Pay</p>
                                            <b>{{ $job->avgerage_weekly_pay }} a week</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Freight type</p>
                                            <b>{{ $job->freight_type }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Driver type</p>
                                            <b>{{ $job->driver_type }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Compensation</p>
                                            <b>{{ $job->compensation }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Home time</p>
                                            <b>{{ $job->home_time }}</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Experience</p>
                                            <b>{{ $job->hirring->minimum_expereince }}</b>
                                        </div>
                                        <!-- <div class="job-detail">
                                            <p>Open Seats</p>
                                            <b>200</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Total Applications Recieved</p>
                                            <b>300</b>
                                        </div>
                                        <div class="job-detail">
                                            <p>Last App Received</p>
                                            <b>12 Jun 2022 , 12:00PM</b>
                                        </div> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                </div>
                <div class="col-md-4"> 
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <a href="{{ url('job/add') }}" class="btn btn-white btn-block text-primary">
                                Post New Job
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('members') }}" class="btn btn-white btn-block text-primary">
                                Invite Team
                            </a>
                        </div>
                    </div>
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body pt-4">

                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    @if(Auth::user()->profile_picture)
                                    <div class="symbol-label" style="background-image: url('{{ asset('public/') }}/images/{{ Auth::user()->profile_picture }}');"></div>
                                    @else
                                     <div class="symbol-label" style="background-image: url('https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg');"></div>
                                    @endif
                                    
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                                        Good Morning
                                    </a>
                                    <div class="">
                                        <b>{{Auth::user()->name}}</b>
                                    </div>
                                    <div class="text-muted mt-2">
                                        <span class="badge badge-info">Carrier</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::User-->

                            <!--begin::Contact-->
                           <!--  <div class="pt-8 pb-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Total Goals</span>
                                    <a href="#" class="text-muted text-hover-primary">100</a>
                                </div>
                            </div> -->
                            <!--end::Contact-->

                            <!--begin::Contact-->
                           <!--  <div class="pt-0 pb-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Achieved Goals</span>
                                    <a href="#" class="text-muted text-hover-primary">32</a>
                                </div>
                            </div> -->
                            <!--end::Contact-->

                            <!--begin::Contact-->
                   <!--          <div class="pt-0 pb-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Percentage</span>
                                    <a href="#" class="text-muted text-hover-primary">60%</a>
                                </div>
                            </div> -->
                        

                           <!--  <a href="#" class="btn btn-light-success font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                                Profile Overview
                            </a> -->
                        </div>
                        <!--end::Body-->
                    </div>

                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="card-title font-weight-bolder text-dark">Recent Activity</h3>
                                </div>
                                <div class="col-md-12">
                                    <p>See all company updates & announcement</p>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-3">
                                    <span class="symbol-label">
                                        <i class="la la-envelope-open icon-xl text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">New message from admin <small>(20m ago)</small></a>
                                    <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting</span>
                                </div>
                                <!--end::Text-->
                                <!-- <div class="dropdown-inline ml-2">
                                    <button class="btn btn-light-primary font-weight-bolder">
                                        Mark as read
                                    </button>
                                </div> -->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-3">
                                    <span class="symbol-label">
                                        <i class="la la-bell icon-xl text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">your job post approved<small>(20m ago)</small></a>
                                    <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting</span>
                                </div>
                                <!--end::Text-->
                                <!-- <div class="dropdown-inline ml-2">
                                    <button class="btn btn-light-primary font-weight-bolder">
                                        Mark as read
                                    </button>
                                </div> -->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-3">
                                    <span class="symbol-label">
                                        <i class="la la-bell icon-xl text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">A new edit in your job post<small>(20m ago)</small></a>
                                    <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting</span>
                                </div>
                                <!--end::Text-->
                                <!-- <div class="dropdown-inline ml-2">
                                    <button class="btn btn-light-primary font-weight-bolder">
                                        Mark as read
                                    </button>
                                </div> -->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>

                    <!-- <div class="card card-custom gutter-b mt-5">
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bold font-size-h4 text-dark-75">Recently Viewed</span>
                            </h3>
                        </div>
                        <div class="card-body pt-0" id="style-2" style="max-height: 400px; overflow-y: auto;">
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('public/carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">
                                        TUkraine crisis pushes oil prices over $100 as trucking braces
                                    </a>
                                    <span class="text-dark-50 font-weight-normal font-size-sm">
                                        12 Jun 2022
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('public/carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">
                                        TUkraine crisis pushes oil prices over $100 as trucking braces
                                    </a>
                                    <span class="text-dark-50 font-weight-normal font-size-sm">
                                        12 Jun 2022
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('public/carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">
                                        TUkraine crisis pushes oil prices over $100 as trucking braces
                                    </a>
                                    <span class="text-dark-50 font-weight-normal font-size-sm">
                                        12 Jun 2022
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('public/carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">
                                        TUkraine crisis pushes oil prices over $100 as trucking braces
                                    </a>
                                    <span class="text-dark-50 font-weight-normal font-size-sm">
                                        12 Jun 2022
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="card card-custom gutter-b mt-5">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bold font-size-h4 text-dark-75">Recruiting Tips</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0" id="style-2">
                            <div class="owl-carousel staff-list">
                                <!-- Tips -->
                                @foreach($recuringtips as $r)
                                <div class="single-staff-item">
                                    <div class="staff-meta">
                                        <img src="{{ url('public/images') }}/{{ $r->logo }}">
                                    </div>
                                    <p class="staff-desc">{{ $r->content }}</p>
                                    <span class="text-black">{{ Cmf::date_format($r->created_at) }} &nbsp;&nbsp;&nbsp; {{ date('H:s:a', strtotime($r->created_at)) }}</span>
                                </div>
                                @endforeach
                                <!-- end Tips -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!-- Modal -->
@endsection

@section('scripts')
<script type="text/javascript">
    const select = document.querySelectorAll('.selectBtn');
const option = document.querySelectorAll('.option');
let index = 1;

select.forEach(a => {
    a.addEventListener('click', b => {
        const next = b.target.nextElementSibling;
        next.classList.toggle('toggle');
        next.style.zIndex = index++;
    })
})
option.forEach(a => {
    a.addEventListener('click', b => {
        b.target.parentElement.classList.remove('toggle');
        
        const parent = b.target.closest('.select').children[0];
        parent.setAttribute('data-type', b.target.getAttribute('data-type'));
        parent.innerText = b.target.innerText;
    })
})
</script>
@endsection