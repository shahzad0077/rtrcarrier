@extends('layouts.main-layout')
@section('title','Integrations')
@section('content')
    <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header bg-white header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Left-->
                        <div class="d-flex align-items-stretch mr-2">
                            <!--begin::Page Title-->
                            <h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0">
                                Integrations
                            </h3>
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="dashboard.html" class="text-muted">
                                        <i class="flaticon2-shelter icon-1x"></i>&nbsp;
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="all-jobs" class="text-muted">
                                        Integrations
                                    </a>
                                </li>
                            </ul>
                            <!--end::Page Title-->
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Header Menu-->
                                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default"></div>
                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::Notifications-->
                            <div class="dropdown">
                                <!--begin::Toggle-->

                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                        <img src="assets/media/custom/sun.svg">
                                    </div>
                                </div>

                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <img src="assets/media/custom/notification-bell.svg">
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Dropdown-->
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg" style="width: 400px;">
                                    <form>
                                        <!--begin::Header-->
                                        <div class="d-flex flex-column pt-8 pl-9 pb-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg);">
                                            <!--begin::Title-->
                                            <h4 class="d-flex rounded-top">
                                                <span class="text-white">User Notifications</span>
                                            </h4>
                                            <span class="text-white">
                                                See your all notifications here
                                            </span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                                        <div class="p-6">
                                            <!--begin::Scroll-->
                                            <div class="scroll pr-7 mr-n7 ps ps--active-y" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-secondary mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/custom/account-drop.svg">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Profile update</a>
                                                        <span class="text-muted">Your profile is updated now</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-secondary mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/custom/billing-drop.svg">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Billing Detail</a>
                                                        <span class="text-muted">your invoice is ready...</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-secondary mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/custom/integration-drop.svg">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">New Request</a>
                                                        <span class="text-muted">You have new applicant</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-secondary mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/custom/message-drop.svg">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">New Message</a>
                                                        <span class="text-muted">Pase 1 Development</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-secondary mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/custom/project-drop.svg">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Alice</a>
                                                        <span class="text-muted">Pase 1 Development</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: 0px; height: 300px;">
                                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 203px;"></div>
                                                </div>
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                    </form>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="input-icon input-icon-right">
                                    <input type="text" class="form-control input-sm-top" placeholder="Zipcode Search" />
                                    <span><i class="flaticon2-search-1 icon-md text-primary"></i></span>
                                </div>
                            </div>
                            <!--begin::User-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">
                                            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline">Sean</span>
                                            <span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline">Director of Rec..</span>
                                        </div>
                                        <span class="symbol symbol-35 symbol-light-primary">
                                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Dropdown-->
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                                    <!--begin::Header-->
                                    <div class="d-flex align-items-center p-8 rounded-top">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                                            <img src="assets/media/users/300_21.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">
                                            Western Flyer Express <br>
                                            <small>Verified Carrier</small>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <!--end::Header-->
                                    <!--begin::Nav-->
                                    <div class="row pt-5 pl-5 pr-5 pb-0">
                                        <div class="col-md-6">
                                            <button class="btn btn-block">Light</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-secondary btn-block">Dark</button>
                                        </div>
                                    </div>
                                    <div class="navi navi-spacer-x-0 pt-5">
                                        <!--begin::Item-->
                                        <a href="profile-settings.html" class="navi-item px-8">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <img src="assets/media/custom/account-drop.svg">
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">
                                                        My Account
                                                    </div>
                                                    <div class="text-muted">
                                                        Account Settings
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="carrier-profile.html" class="navi-item px-8">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <img src="assets/media/custom/admin-drop.svg">
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">
                                                        Admin
                                                    </div>
                                                    <div class="text-muted">
                                                        Admin Panel Setting
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="billings.html" class="navi-item px-8">
                                            <div class="navi-link">
                                                <div class="navi-icon mr-2">
                                                    <img src="assets/media/custom/billing-drop.svg">
                                                </div>
                                                <div class="navi-text">
                                                    <div class="font-weight-bold">
                                                        Billing
                                                    </div>
                                                    <div class="text-muted">
                                                        Payment Details
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Footer-->
                                        <div class="navi-separator mt-3"></div>
                                        <div class="navi-footer  px-8 py-5">
                                            <a href="custom/user/login-v2.html" target="_blank" class="btn btn-light-primary font-weight-bold">Sign Out</a>
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 py-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Integrations</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage your all Integrations</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="javascript:void(0)" class="btn btn-info font-weight-bolder font-size-sm inetragtion-btn"  data-toggle="modal" data-target="#addIntegration">Add New</a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-0">
                                            <div class="row mb-5">
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Search..">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Company name">
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control border-0 form-control-solid text-muted font-size-lg font-weight-bolder pl-5 min-h-50px" id="exampleSelects">
                                                        <option>By Status</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#" class="btn btn-info font-weight-bolder font-size-sm hiring-map-search">Seach</a>
                                                </div>
                                            </div>
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                                                    <thead>
                                                        <tr class="text-left">
                                                            <th class="pl-0" style="width: 30px">
                                                                <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                                                    <input type="checkbox" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th class="pl-0" style="min-width: 120px">Integration ID</th>
                                                            <th style="min-width: 110px">Company Name</th>
                                                            <th style="min-width: 110px">
                                                                <span class="text-info">Date Published</span>
                                                                <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Down-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                            <rect fill="#000000" opacity="0.3" x="11" y="4" width="2" height="10" rx="1"></rect>
                                                                            <path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999) "></path>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon--></span> </th>
                                                            <th style="min-width: 120px">Posted Job</th>
                                                            <th style="min-width: 120px">Status</th>
                                                            <th class="pr-0 text-right" style="min-width: 160px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-6">
                                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                                    <input type="checkbox" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Brasil
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-info font-weight-bolder d-block font-size-lg">
                                                                    05/28/2020
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    Monday
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Intertico
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
                                                                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-6">
                                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                                    <input type="checkbox" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Brasil
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-info font-weight-bolder d-block font-size-lg">
                                                                    05/28/2020
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    Monday
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Intertico
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
                                                                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-6">
                                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                                    <input type="checkbox" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Brasil
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-info font-weight-bolder d-block font-size-lg">
                                                                    05/28/2020
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    Monday
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Intertico
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-success label-inline">Success</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
                                                                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-6">
                                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                                    <input type="checkbox" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Brasil
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-info font-weight-bolder d-block font-size-lg">
                                                                    05/28/2020
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    Monday
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    Intertico
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
                                                                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                            <div class="row">
                                                <div class=" col-md-10 text-right">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="kt_datatable_previous"><a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="ki ki-arrow-back"></i></a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item next disabled" id="kt_datatable_next"><a href="#" aria-controls="kt_datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="ki ki-arrow-next"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="row">
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
@endsection