
<div id="kt_header" class="header bg-white header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-2">
            <!--begin::Page Title-->
            <h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0">
                Dashboard
            </h3>
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                    <a href="{{ url('dashboard') }}" class="text-muted">
                        <i class="flaticon2-shelter icon-1x"></i>&nbsp;
                        Dashboard
                    </a>
                </li>
                @yield('pagename')
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

                <!-- <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <img src="{{asset('public/carrier/assets/media/custom/sun.svg')}}">
                    </div>
                </div> -->

                <div onclick="chatshow('open')" class="topbar-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat" data-placement="left">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                        <a class="btn btn-sm btn-icon btn-icon-primary" href="#" data-toggle="modal" data-target="#kt_chat_modal">
                            <i class="flaticon2-chat-1"></i>
                        </a>
                    </div>
                </div>


                <div onclick="shownotifications()" class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                    <div data-toggle="tooltip" title="User Notifications" data-placement="right" class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                            <img src="{{asset('public/carrier/assets/media/custom/notification-bell.svg')}}">
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg" style="width: 400px;">
                    <form>
                        <!--begin::Header-->
                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{asset('public/carrier/assets/media/misc/bg-1.jpg')}})">
                            <!--begin::Title-->
                            <h4 class="d-flex flex-center rounded-top">
                                <span class="text-white">User Notifications</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                <li class="nav-item">
                                    <a onclick="shownotifications()" class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Notifications</a>
                                </li>
                                <li class="nav-item">
                                    <a onclick="showalerts()" class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Alerts</a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="tab-content">
                            <!--begin::Tabpane-->
                            <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                <div id="shownotifications" class="scroll pr-7 mr-n7 ps ps--active-y" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                                    <div style="margin-top: 35%;" class="d-flex justify-content-center">
                                        <div><i style="font-size: 40px;" class="fa fa-spin fa-spinner"></i></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-center pt-7"><a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a></div>
                            </div>
                            <!--end::Tabpane-->
                            <!--begin::Tabpane-->
                            <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                <!--begin::Nav-->
                                <div id="showalerts" class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-line-chart text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New report has been received
                                                </div>
                                                <div class="text-muted">
                                                    23 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-paper-plane text-danger"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    Finance report has been generated
                                                </div>
                                                <div class="text-muted">
                                                    25 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-user flaticon2-line- text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New order has been received
                                                </div>
                                                <div class="text-muted">
                                                    2 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-pin text-primary"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New customer is registered
                                                </div>
                                                <div class="text-muted">
                                                    3 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-sms text-danger"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    Application has been approved
                                                </div>
                                                <div class="text-muted">
                                                    3 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-pie-chart-3 text-warning"></i>
                                            </div>
                                            <div class="navinavinavi-text">
                                                <div class="font-weight-bold">
                                                    New file has been uploaded
                                                </div>
                                                <div class="text-muted">
                                                    5 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-pie-chart-1 text-info"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New user feedback received
                                                </div>
                                                <div class="text-muted">
                                                    8 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-settings text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    System reboot has been successfully completed
                                                </div>
                                                <div class="text-muted">
                                                    12 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-safe-shield-protection text-primary"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New order has been placed
                                                </div>
                                                <div class="text-muted">
                                                    15 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-notification text-primary"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    Company meeting canceled
                                                </div>
                                                <div class="text-muted">
                                                    19 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-fax text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New report has been received
                                                </div>
                                                <div class="text-muted">
                                                    23 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-download-1 text-danger"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    Finance report has been generated
                                                </div>
                                                <div class="text-muted">
                                                    25 hrs ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-security text-warning"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New customer comment recieved
                                                </div>
                                                <div class="text-muted">
                                                    2 days ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-analytics-1 text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">
                                                    New customer is registered
                                                </div>
                                                <div class="text-muted">
                                                    3 days ago
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->
                            <!--begin::Tabpane-->
                            <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                <!--begin::Nav-->
                                <div class="d-flex flex-center text-center text-muted min-h-200px">
                                    All caught up!
                                    <br />
                                    No new notifications.
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->
                        </div>
                        <!--end::Content-->
                        <!-- <div class="p-6">
                            <div id="shownotifications" class="scroll pr-7 mr-n7 ps ps--active-y" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                                <div style="margin-top: 35%;" class="d-flex justify-content-center">
                                    <div><i style="font-size: 40px;" class="fa fa-spin fa-spinner"></i></div>
                                </div>
                            </div>
                        </div> -->
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
                            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline">{{ Auth::user()->name }}</span>
                            <span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline">
                                @if(Auth::user()->type == 'carrier_sub_account')

                                @elseif(Auth::user()->type == 'carrier')
                                    {{ DB::table('companies')->where('user_id' , Auth::user()->id)->get()->first()->company_name }} 
                                @endif
                            </span>
                        </div>
                        <!-- High Priority -->
                        <span class="symbol symbol-35 symbol-danger">
                            <span class="symbol-label font-size-h5 font-weight-bold">{{ substr(Auth::user()->name, 0, 1); }}</span>
                        </span>

                        <!-- Medium -->
                        <!-- <span class="symbol symbol-35 symbol-warning">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span> -->

                        <!-- Low -->
                        <!-- <span class="symbol symbol-35 symbol-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span> -->

                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-8 rounded-top">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                            @if(Auth::user()->profile_picture)
                            <img src="{{ asset('public/images') }}/{{ Auth::user()->profile_picture }}" alt="" />
                            @else
                            <img src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg" alt="" />
                            @endif
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">
                            @if(Auth::user()->type == 'carrier_sub_account')
                                    
                                @elseif(Auth::user()->type == 'carrier')
                                    {{ DB::table('companies')->where('user_id' , Auth::user()->id)->get()->first()->company_name }} 
                                @endif
                             <br>
                            <small>@if(Auth::user()->type == 'carrier_sub_account')

                        {{ Cmf::getuserrole(Auth::user()->id)->name }}

                        @elseif(Auth::user()->type == 'carrier')

                            Carrier Admin
                        @endif</small>
                        </div>
                        <!--end::Text-->
                    </div>
                    <div class="separator separator-solid"></div>
                    <!--end::Header-->
                    <!--begin::Nav-->
                   <!--  <div class="row pt-5 pl-5 pr-5 pb-0">
                        <div class="col-md-6">
                            <button class="btn btn-block">Light</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-secondary btn-block">Dark</button>
                        </div>
                    </div> -->
                    <div class="navi navi-spacer-x-0 pt-5">
                        <!--begin::Item-->
                        <a href="{{url('profile-settings/')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <img src="{{asset('public/carrier/assets/media/custom/account-drop.svg')}}">
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
                        <a href="{{url('billing/')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <img src="{{asset('public/carrier/assets/media/custom/billing-drop.svg')}}">
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
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" target="_blank" class="btn btn-light-primary font-weight-bold">Sign Out</a>
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
<div class="modal fade" id="deletejobmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Are you Sure You want to delete this. 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <a id="deletejoburl" href="{{ url('admin/education/deleteeducationarticle') }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
            </div>
        </div>
    </div>
</div>


<!--end::Header


