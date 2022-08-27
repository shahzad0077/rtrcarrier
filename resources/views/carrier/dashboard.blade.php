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
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="card-title font-weight-bolder text-dark">Recent Activity</h3>
                                </div>
                                <div class="col-md-12">
                                    <p>Here you can see all company updates & announcement</p>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-5">
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
                                <div class="dropdown-inline ml-2">
                                    <button class="btn btn-light-primary font-weight-bolder">
                                        Mark as read
                                    </button>
                                </div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-5">
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
                                <div class="dropdown-inline ml-2">
                                    <button class="btn btn-light-primary font-weight-bolder">
                                        Mark as read
                                    </button>
                                </div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-5">
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
                                <div class="dropdown-inline ml-2">
                                    <button class="btn btn-light-primary font-weight-bolder">
                                        Mark as read
                                    </button>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <div class="card card-custom gutter-b">
                        <div class="card-body p-10">
                            <div class="card bg-light-gray">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <div class="input-icon" style="width: 100%;">
                                                <input type="text" class="form-control border-none" placeholder="Job Search" />
                                                <span><i class="flaticon2-search-1 icon-md"></i></span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="input-icon" style="width: 100%;">
                                                <select class="form-control border-none">
                                                    <option>Dry Van</option>
                                                    <option>Reefer</option>
                                                    <option>Flatbed</option>
                                                    <option>Sand/Tanker</option>
                                                    <option>Heavy-Haul</option>
                                                </select>
                                                <span><i class="fas fa-briefcase icon-md"></i></span>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-lg btn-white shadow-cs btn-icon btn-filter mr-3" data-toggle="modal" data-target="#exampleModalCenter">
                                                <img src="{{asset('carrier/assets/media/custom/filter.svg')}}" />
                                            </button>
                                            <button class="btn btn-primary btn-lg shadow-cs">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p>Results Showing 41-60 of 112 jobs</p>
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
                        <div class="col-md-12">
                            <div class="card job-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4><a class="text-black" href="{{url('job-detail/')}}">Fuel Transport Driver – Local, Home Daily...</a></h4>
                                        </div>
                                        <div>
                                            <span class="job-type">Full-time</span>
                                        </div>
                                        <div>
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="head-down">
                                            <a href="javascript:void(0)" class="text-primary">
                                                <i class="fa fa-map-marker-alt"></i>
                                                View Map
                                            </a>
                                        </div>
                                        <div class="head-down">
                                            <i class="fas fa-dollar-sign"></i>
                                            $1,200 - $1,500 a week
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="d-flex flex-row mt-3">
                                                <div class="job-detail">
                                                    <p>Freight type</p>
                                                    <b>Sea Freight</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Home time</p>
                                                    <b>12 hours</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Experience</p>
                                                    <b>3 Years</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Total Apps</p>
                                                    <b>300</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Last App Received</p>
                                                    <b>12 Jun 2022 , 12:00PM</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="d-flex flex-row">
                                                <div class="job-detail">
                                                    <p>Open Seats</p>
                                                    <b>200</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card job-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4><a class="text-black" href="{{url('job-detail/')}}">Fuel Transport Driver – Local, Home Daily...</a></h4>
                                        </div>
                                        <div>
                                            <span class="job-type">Full-time</span>
                                        </div>
                                        <div>
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="head-down">
                                            <a href="javascript:void(0)" class="text-primary">
                                                <i class="fa fa-map-marker-alt"></i>
                                                View Map
                                            </a>
                                        </div>
                                        <div class="head-down">
                                            <i class="fas fa-dollar-sign"></i>
                                            $1,200 - $1,500 a week
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="d-flex flex-row mt-3">
                                                <div class="job-detail">
                                                    <p>Freight type</p>
                                                    <b>Sea Freight</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Home time</p>
                                                    <b>12 hours</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Experience</p>
                                                    <b>3 Years</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Total Apps</p>
                                                    <b>300</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Last App Received</p>
                                                    <b>12 Jun 2022 , 12:00PM</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="d-flex flex-row">
                                                <div class="job-detail">
                                                    <p>Open Seats</p>
                                                    <b>200</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card job-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4><a class="text-black" href="{{url('job-detail/')}}">Fuel Transport Driver – Local, Home Daily...</a></h4>
                                        </div>
                                        <div>
                                            <span class="job-type">Full-time</span>
                                        </div>
                                        <div>
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                                                    <a class="dropdown-item" href="#"> <img src="{{asset('carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="head-down">
                                            <a href="javascript:void(0)" class="text-primary">
                                                <i class="fa fa-map-marker-alt"></i>
                                                View Map
                                            </a>
                                        </div>
                                        <div class="head-down">
                                            <i class="fas fa-dollar-sign"></i>
                                            $1,200 - $1,500 a week
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="d-flex flex-row mt-3">
                                                <div class="job-detail">
                                                    <p>Freight type</p>
                                                    <b>Sea Freight</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Home time</p>
                                                    <b>12 hours</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Experience</p>
                                                    <b>3 Years</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Total Apps</p>
                                                    <b>300</b>
                                                </div>
                                                <div class="job-detail">
                                                    <p>Last App Received</p>
                                                    <b>12 Jun 2022 , 12:00PM</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="d-flex flex-row">
                                                <div class="job-detail">
                                                    <p>Open Seats</p>
                                                    <b>200</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>

                                            <li class="navi-separator my-3"></li>

                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image: url('{{asset('carrier/assets/media/users/300_13.jpg')}}');"></div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                                        Good Morning
                                    </a>
                                    <div class="">
                                        <b>James Jones</b>
                                    </div>
                                    <div class="text-muted">
                                        <span class="badge badge-info">Recruiter</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::User-->

                            <!--begin::Contact-->
                            <div class="pt-8 pb-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Total Goals</span>
                                    <a href="#" class="text-muted text-hover-primary">100</a>
                                </div>
                            </div>
                            <!--end::Contact-->

                            <!--begin::Contact-->
                            <div class="pt-0 pb-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Achieved Goals</span>
                                    <a href="#" class="text-muted text-hover-primary">32</a>
                                </div>
                            </div>
                            <!--end::Contact-->

                            <!--begin::Contact-->
                            <div class="pt-0 pb-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Percentage</span>
                                    <a href="#" class="text-muted text-hover-primary">60%</a>
                                </div>
                            </div>
                            <!--end::Contact-->

                        

                            <a href="#" class="btn btn-light-success font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                                Profile Overview
                            </a>
                        </div>
                        <!--end::Body-->
                    </div>
                    <div class="card card-custom gutter-b mt-5">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bold font-size-h4 text-dark-75">Recently Viewed</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0" id="style-2" style="max-height: 400px; overflow-y: auto;">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
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
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
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
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
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
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center pb-9">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{asset('carrier/assets/media/stock-600x400/img-25.jpg')}}')"></div>
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
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
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
                                <div class="single-staff-item">
                                    <img src="http://placehold.it/500x500" alt="" />
                                    <div class="staff-meta">
                                        <img src="{{asset('carrier/assets/media/custom/company-logo.svg')}}" />
                                    </div>
                                    <p class="staff-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum omnis doloremque ducimus ipsum eaque.</p>
                                    <span class="text-black">02/08/2022 &nbsp;&nbsp;&nbsp; 12:00 pm</span>
                                </div>
                                <!-- end Tips -->
                                <!-- Tips -->
                                <div class="single-staff-item">
                                    <img src="http://placehold.it/500x500" alt="" />
                                    <div class="staff-meta">
                                        <img src="{{asset('carrier/assets/media/custom/company-logo.svg')}}" />
                                    </div>
                                    <p class="staff-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum omnis doloremque ducimus ipsum eaque.</p>
                                    <span class="text-black">02/08/2022 &nbsp;&nbsp;&nbsp; 12:00 pm</span>
                                </div>
                                <!-- end Tips -->
                                <!-- Tips -->
                                <div class="single-staff-item">
                                    <img src="http://placehold.it/500x500" alt="" />
                                    <div class="staff-meta">
                                        <img src="{{asset('carrier/assets/media/custom/company-logo.svg')}}" />
                                    </div>
                                    <p class="staff-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum omnis doloremque ducimus ipsum eaque.</p>
                                    <span class="text-black">02/08/2022 &nbsp;&nbsp;&nbsp; 12:00 pm</span>
                                </div>
                                <!-- end Tips -->
                                <!-- Tips -->
                                <div class="single-staff-item">
                                    <img src="http://placehold.it/500x500" alt="" />
                                    <div class="staff-meta">
                                        <img src="{{asset('carrier/assets/media/custom/company-logo.svg')}}" />
                                    </div>
                                    <p class="staff-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum omnis doloremque ducimus ipsum eaque.</p>
                                    <span class="text-black">02/08/2022 &nbsp;&nbsp;&nbsp; 12:00 pm</span>
                                </div>
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
<!--end::Content-->

<!-- Modal -->
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
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mb-5">Pay detail</h5>
                        <div class="form-group">
                            <div class="checkbox-inline">
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <label class="checkbox checkbox-lg">
                                            <input type="checkbox" checked="checked" name="Checkboxes3_1" />
                                            <span></span>
                                            $1,000 - 2,000
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label class="checkbox checkbox-lg">
                                            <input type="checkbox" name="Checkboxes3_1" />
                                            <span></span>
                                            $1,100 - 2,200
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label class="checkbox checkbox-lg">
                                            <input type="checkbox" name="Checkboxes3_1" />
                                            <span></span>
                                            $1,300 - 2,300
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label class="checkbox checkbox-lg">
                                            <input type="checkbox" name="Checkboxes3_1" />
                                            <span></span>
                                            $1,400 - 2,400
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label class="checkbox checkbox-lg">
                                            <input type="checkbox" name="Checkboxes3_1" />
                                            <span></span>
                                            $1,500 - 2,500
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mb-5">Equipments</h5>
                    </div>
                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            Truck make
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            Model
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            Year
                        </label>
                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-md-12">
                        <h5 class="mb-5">Zip code</h5>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Enter zip code" name="" />
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Enter zip code" name="" />
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block">
                            Add new
                        </button>
                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-md-12">
                        <h5 class="mb-5">Solo or team</h5>
                    </div>
                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            Solo
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            Team
                        </label>
                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-md-12">
                        <h5 class="mb-5">Home time</h5>
                    </div>
                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            daily
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            bi-weekly
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            21+ days out
                        </label>
                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-md-12">
                        <h5 class="mb-5">Endorsements</h5>
                    </div>
                    <div class="col-md-6">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" name="Checkboxes1" />
                            <span class="mr-3"></span>
                            no additional endorsements
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Apply Filters</button>
            </div>
        </div>
    </div>
</div>

@endsection