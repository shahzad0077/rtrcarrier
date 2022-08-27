@extends('layouts.main-layout')
@section('title','Education Center')
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
                                Education Center
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
                                        Education Center
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
                            <!--begin::Card-->
                            <div class="card card-custom mt-5">
                                <div class="card-header flex-wrap py-5">
                                    <div class="card-title">
                                        <h3 class="card-label">
                                            Education Center
                                            <div class="text-muted pt-2 font-size-sm">Subtitle goes here</div>
                                        </h3>
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>

                                    <h3>Privacy Policy</h3>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>

                                    <h3>Privacy Policy</h3>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
@endsection