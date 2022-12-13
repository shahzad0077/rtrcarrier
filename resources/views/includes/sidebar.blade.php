@php
    $currenturl = request()->path();
@endphp
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{url('/dashboard')}}">
            <img alt="Logo" src="{{asset('public/carrier/assets/media/custom/rtr-logo.png')}}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:{{asset('public/carrier/')}}assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#fff" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#fff" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item @if($currenturl == 'dashboard') menu-item-active @endif" aria-haspopup="true">
                    <a href="{{url('dashboard')}}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/dashboard.svg')}}">
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu  @if($currenturl == 'hiring-templates') menu-item-open @endif  @if($currenturl == 'jobs') menu-item-open @endif  @if($currenturl == 'job/add') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">

                    @if(Cmf::getcarrierrole(22) == 0)
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/manage-jobs.svg')}}">
                        </span>
                        <span class="menu-text">Jobs</span><i class="menu-arrow text-white"></i>
                    </a>
                    @elseif(Cmf::getcarrierrole(22) == 1)
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/manage-jobs.svg')}}">
                        </span>
                        <span class="menu-text">Jobs</span><i class="menu-arrow text-white"></i>
                    </a>
                    @endif

                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Jobs</span></span>
                            </li>
                            <!-- Child -->
                            @if(Cmf::getcarrierrole(1) == 0)
                            <li class="menu-item @if($currenturl == 'jobs') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('jobs/')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Jobs</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(1) == 1)
                            <li class="menu-item @if($currenturl == 'jobs') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('jobs/')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Jobs</span>
                                </a>
                            </li>
                            @endif


                            @if(Cmf::getcarrierrole(2) == 0)
                            <li class="menu-item @if($currenturl == 'job/add') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('job/add')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Job</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(2) == 1)
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{url('job/add')}}" class="menu-link @if($currenturl == 'job/add') menu-item-active @endif">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Job</span>
                                </a>
                            </li>
                            @endif


                            @if(Cmf::getcarrierrole(1) == 0)
                            <li class="menu-item @if($currenturl == 'hiring-templates') menu-item-active @endif" aria-haspopup="true">
                                <a class="menu-link" href="{{url('hiring-templates')}}">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Hiring Templates</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(1) == 1)
                            <li class="menu-item @if($currenturl == 'hiring-templates') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('hiring-templates')}}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Hiring Templates</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @if(Cmf::getcarrierrole(23) == 0)
                <li class="menu-item menu-item-submenu @if($currenturl == 'hirig-maps') menu-item-open @endif  @if($currenturl == 'map/add-new') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/hiring-maps.svg')}}">
                        </span>
                        <span class="menu-text">Maps</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Hiring Maps</span></span>
                            </li>
                            <!-- Child -->
                            @if(Cmf::getcarrierrole(3) == 0)
                            <li class="menu-item @if($currenturl == 'hirig-maps') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('hirig-maps')}}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Maps</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(3) == 1)
                            <li class="menu-item @if($currenturl == 'hirig-maps') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('hirig-maps')}}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Maps</span>
                                </a>
                            </li>
                            @endif

                            @if(Cmf::getcarrierrole(4) == 0)
                            <li class="menu-item @if($currenturl == 'map/add-new') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('map/add-new')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Map</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(4) == 1)
                            <li class="menu-item @if($currenturl == 'map/add-new') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('map/add-new')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Map</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @elseif(Cmf::getcarrierrole(23) == 1)
                <li class="menu-item menu-item-submenu @if($currenturl == 'hirig-maps') menu-item-open @endif  @if($currenturl == 'map/add-new') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/hiring-maps.svg')}}">
                        </span>
                        <span class="menu-text">Maps</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Manage Maps</span></span>
                            </li>
                            <!-- Child -->
                            @if(Cmf::getcarrierrole(3) == 0)
                            <li class="menu-item @if($currenturl == 'hirig-maps') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('hirig-maps/')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Maps</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(3) == 1)
                            <li class="menu-item @if($currenturl == 'hirig-maps') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('hirig-maps/')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Maps</span>
                                </a>
                            </li>
                            @endif

                            @if(Cmf::getcarrierrole(4) == 0)
                            <li class="menu-item @if($currenturl == 'map/add-new') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('map/add-new')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Map</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(4) == 1)
                            <li class="menu-item @if($currenturl == 'map/add-new') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('map/add-new')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Map</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif
                @if(Cmf::getcarrierrole(26) == 0)
                <li class="menu-item menu-item-submenu @if($currenturl == 'members') menu-item-open @endif  @if($currenturl == 'staff-permissions') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/team-members.svg')}}">
                        </span>
                        <span class="menu-text">Team</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Team Members</span></span>
                            </li>
                            <!-- Child -->
                            @if(Cmf::getcarrierrole(5) == 0)
                            <li class="menu-item @if($currenturl == 'members') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('members')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Team</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(5) == 1)
                            <li class="menu-item @if($currenturl == 'members') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('members')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Team</span>
                                </a>
                            </li>
                            @endif
                            @if(Cmf::getcarrierrole(6) == 0)
                            <li class="menu-item @if($currenturl == 'staff-permissions') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('staff-permissions')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Permissions</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(6) == 1)
                            <li class="menu-item @if($currenturl == 'staff-permissions') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('staff-permissions')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Permissions</span>
                                </a>
                            </li>
                            @endif
                            @if(Cmf::getcarrierrole(6) == 0)
                            <li class="menu-item @if($currenturl == 'members') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('members')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Invite New Member</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(6) == 1)
                            <li class="menu-item @if($currenturl == 'members') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('members')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Invite New Member</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @elseif(Cmf::getcarrierrole(26) == 1)
                <li class="menu-item menu-item-submenu @if($currenturl == 'members') menu-item-open @endif  @if($currenturl == 'staff-permissions') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/team-members.svg')}}">
                        </span>
                        <span class="menu-text">Team</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Team Members</span></span>
                            </li>
                            <!-- Child -->
                            @if(Cmf::getcarrierrole(5) == 0)
                            <li class="menu-item @if($currenturl == 'members') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('members')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Team</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(5) == 1)
                            <li class="menu-item @if($currenturl == 'members') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('members')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Team</span>
                                </a>
                            </li>
                            @endif
                            @if(Cmf::getcarrierrole(6) == 0)
                            <li class="menu-item @if($currenturl == 'staff-permissions') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('staff-permissions')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Permissions</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(6) == 1)
                            <li class="menu-item @if($currenturl == 'staff-permissions') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('staff-permissions')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Permissions</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>


                @endif
                @if(Cmf::getcarrierrole(15) == 0)
                <li class="menu-item menu-item-submenu @if($currenturl == 'create-new-page') menu-item-open @endif @if($currenturl == 'allcompanypage') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/company-info.svg')}}">
                        </span>
                        <span class="menu-text">Company Pages</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Company Pages</span></span>
                            </li>
                            <li class="menu-item @if($currenturl == 'allcompanypage') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('allcompanypage')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Pages</span>
                                </a>
                            </li>
                            <li class="menu-item @if($currenturl == 'create-new-page') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('create-new-page')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Create New Page</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @elseif(Cmf::getcarrierrole(25) == 1)
                <li class="menu-item menu-item-submenu @if($currenturl == 'allcompanypage') menu-item-open @endif @if($currenturl == 'create-new-page') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/company-info.svg')}}">
                        </span>
                        <span class="menu-text">Company Pages</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Company Pages</span></span>
                            </li>
                            <li class="menu-item @if($currenturl == 'allcompanypage') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('allcompanypage')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Pages</span>
                                </a>
                            </li>
                            <li class="menu-item @if($currenturl == 'create-new-page') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('create-new-page')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Create New Page</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(Cmf::getcarrierrole(18) == 0)

                <li class="menu-item menu-item-submenu @if($currenturl == 'advertise') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/advertise.svg')}}">
                        </span>
                        <span class="menu-text">Advertising</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Advertising</span></span>
                            </li>
                            <!-- Child -->
                            <li class="menu-item @if($currenturl == 'advertise') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('advertise')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Campaigns</span>
                                </a>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="javascript:void(0)" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">New Campaign</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                @elseif(Cmf::getcarrierrole(18) == 1)
                <li class="menu-item menu-item-submenu @if($currenturl == 'advertise') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/advertise.svg')}}">
                        </span>
                        <span class="menu-text">Advertising</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">z
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Advertising</span></span>
                            </li>
                            <!-- Child -->
                            <li class="menu-item @if($currenturl == 'advertise') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('advertise')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Manage Campaigns</span>
                                </a>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="javascript:void(0)" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">New Campaign</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                @endif

                <li class="menu-section">
                    <h4 class="menu-text">OTHER</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>


                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <img src="{{asset('public/carrier/assets/media/custom/carrier-profile.svg')}}">
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Settings</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Settings</span></span>
                            </li>
                            <li class="menu-item @if($currenturl == 'profile-settings') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('profile-settings/')}}" class="menu-link">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/team-members.svg')}}">
                                    </span> -->
                                    <span class="menu-text">My Profile</span>
                                </a>
                            </li>

                            <li class="menu-item menu-item-submenu @if($currenturl == 'carrier-profile') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                                @if(Cmf::getcarrierrole(23) == 0)
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/carrier-profile.svg')}}">
                                    </span> -->
                                    <span class="menu-text">Carrier Profile</span><i class="menu-arrow text-white"></i>
                                </a>
                                @elseif(Cmf::getcarrierrole(23) == 1)
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/carrier-profile.svg')}}">
                                    </span> -->
                                    <span class="menu-text">Carrier Profile</span><i class="menu-arrow text-white"></i>
                                </a>
                                @endif
                                <div class="menu-submenu">
                                    <i class="menu-arrow text-white"></i>
                                    <ul class="menu-subnav">
                                        @if(Cmf::getcarrierrole(23) == 0)
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                            <span class="menu-link"><span class="menu-text">Carrier Profile</span></span>
                                        </li>
                                        @elseif(Cmf::getcarrierrole(23) == 1)
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                            <span class="menu-link"><span class="menu-text">Carrier Profile</span></span>
                                        </li>
                                        @endif
                                        <!-- Child -->
                                        @if(Cmf::getcarrierrole(16) == 0)
                                        <li class="menu-item @if($currenturl == 'carrier-profile') menu-item-active @endif" aria-haspopup="true">
                                            <a href="{{url('carrier-profile/')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">My Carrier Profile</span>
                                            </a>
                                        </li>
                                        @elseif(Cmf::getcarrierrole(16) == 1)
                                        <li class="menu-item @if($currenturl == 'carrier-profile') menu-item-active @endif" aria-haspopup="true">
                                            <a href="{{url('carrier-profile/')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">My Carrier Profile</span>
                                            </a>
                                        </li>
                                        @endif

                                        @if(Cmf::getcarrierrole(17) == 0)
                                        <!-- <li class="menu-item" aria-haspopup="true">
                                            <a href="carrier-profile/reviews" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Profile Reviews</span>
                                            </a>
                                        </li> -->
                                        @elseif(Cmf::getcarrierrole(17) == 1)
                                       <!--  <li class="menu-item" aria-haspopup="true">
                                            <a href="carrier-profile/reviews" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Profile Reviews</span>
                                            </a>
                                        </li> -->
                                        @endif


                                    </ul>
                                </div>
                            </li>

                            @if(Cmf::getcarrierrole(19) == 0)
                            <li class="menu-item @if($currenturl == 'integrations') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('integrations/')}}" class="menu-link">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/integration.svg')}}">
                                    </span> -->
                                    <span class="menu-text">Integrations</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(19) == 1)
                            <li class="menu-item @if($currenturl == 'integrations') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('integrations/')}}" class="menu-link">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/integration.svg')}}">
                                    </span> -->
                                    <span class="menu-text">Integrations</span>
                                </a>
                            </li>
                            @endif

                            @if(Cmf::getcarrierrole(20) == 0)
                            <li class="menu-item @if($currenturl == 'billing') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('billing/')}}" class="menu-link">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/billing.svg')}}">
                                    </span> -->
                                    <span class="menu-text">Billing & Invoices</span>
                                </a>
                            </li>
                            @elseif(Cmf::getcarrierrole(20) == 1)
                            <li class="menu-item @if($currenturl == 'billing') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('billing/')}}" class="menu-link">
                                    <!-- <span class="svg-icon menu-icon">
                                        <img src="{{asset('public/carrier/assets/media/custom/billing.svg')}}">
                                    </span> -->
                                    <span class="menu-text">Billing & Invoices</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>

                @if(Cmf::getcarrierrole(15) == 0)
                <li class="menu-item menu-item-submenu @if($currenturl == 'education-center') menu-item-open @endif @if($currenturl == 'add-new-post') menu-item-open @endif @if($currenturl == 'all-posts') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/education-center.svg')}}">
                        </span>
                        <span class="menu-text">Education Center</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Posts From RTR</span></span>
                            </li>
                            <!-- Child -->
                            <li class="menu-item @if($currenturl == 'education-center') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('education-center')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Posts</span>
                                </a>
                            </li>
                            <li class="menu-item @if($currenturl == 'add-new-post') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('add-new-post')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Post</span>
                                </a>
                            </li>
                            <li class="menu-item @if($currenturl == 'all-posts') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('all-posts')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Carrier Posts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                @elseif(Cmf::getcarrierrole(15) == 1)
                <li class="menu-item menu-item-submenu @if($currenturl == 'education-center') menu-item-open @endif @if($currenturl == 'add-new-post') menu-item-open @endif @if($currenturl == 'all-posts') menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/education-center.svg')}}">
                        </span>
                        <span class="menu-text">Education Center</span><i class="menu-arrow text-white"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow text-white"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Posts From RTR</span></span>
                            </li>
                            <!-- Child -->
                            <li class="menu-item @if($currenturl == 'education-center') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('education-center')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Posts From RTR</span>
                                </a>
                            </li>
                            <li class="menu-item @if($currenturl == 'add-new-post') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('add-new-post')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Post</span>
                                </a>
                            </li>
                            <li class="menu-item @if($currenturl == 'all-posts') menu-item-active @endif" aria-haspopup="true">
                                <a href="{{url('all-posts')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Posts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(Cmf::getcarrierrole(21) == 0)
                <li class="menu-item @if($currenturl == 'help') menu-item-active @endif" aria-haspopup="true">
                    <a href="{{url('help/')}}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/help.svg')}}">
                        </span>
                        <span class="menu-text">Help</span>
                    </a>
                </li>
                @elseif(Cmf::getcarrierrole(21) == 1)
                <li class="menu-item @if($currenturl == 'help') menu-item-active @endif" aria-haspopup="true">
                    <a href="{{url('help/')}}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <img src="{{asset('public/carrier/assets/media/custom/help.svg')}}">
                        </span>
                        <span class="menu-text">Help</span>
                    </a>
                </li>
                @endif
                
                
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside