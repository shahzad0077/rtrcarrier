<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <!-- Stylesheets -->
  <meta name="description" content="Updates and statistics" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!-- Dashboard -->
  <link href="{{ asset('public/carrier/assets/css/my-custom-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link href="{{ asset('public/carrier/assets/css/themes/layout/header/base/light.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/css/themes/layout/header/menu/light.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/css/themes/layout/brand/dark.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/css/themes/layout/aside/dark.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/carrier/assets/css/my-custom-style.css') }}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">  
  <link href="{{ asset('public/carrier/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  
  <input type="hidden" value="{{ url('') }}" id="app_url">
      <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('public/carrier/assets/media/logos/favicon.ico') }}" rel="shortcut icon" />

  
</head>
  <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">    
        @include('includes.admin-navbar')
        
        <!--end::Header Mobile-->
	    <div class="d-flex flex-column flex-root">
	        <!--begin::Page-->
	        <div class="d-flex flex-row flex-column-fluid page">
	        	@include('includes.sidebar')

	        	<!--begin::Wrapper-->
	            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
	                <!--begin::Header-->
	                @include('includes.header')
	                @yield('content')
	            </div>
	        </div>
	    </div>        
    </body>

    <!-- chat -->

    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Chat card is jga sy chat start ho rhi h, is sy next view py jab hm jaen gy to udr 
                    user k sath aik back ka button bi lga den gy tak wo back aa-->
                <div class="card card-custom rounded" id="all-users">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-8 py-4">
                        <div>
                            <div class="symbol symbol-circle symbol-40 mr-3">
                                @if(Auth::user()->profile_picture)
                                <img alt="Pic" src="{{ asset('public/') }}/images/{{ Auth::user()->profile_picture }}">
                                @else
                                <img alt="Pic" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">
                                @endif
                            </div>
                        </div>
                        <div class="text-left flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">{{ Auth::user()->name }}</div>
                            <div class="dropdown">
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Active <i class="fa fa-angle-down"></i></span>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-sm">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a onclick="statuschange('Available')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-success"></span>
                                                </span>
                                                <span class="navi-text">Available</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('In Meeting')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-info"></span>
                                                </span>
                                                <span class="navi-text">In Meeting</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('Do Not disturb')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-danger"></span>
                                                </span>
                                                <span class="navi-text">Do Not disturb</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('Away')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-warning"></span>
                                                </span>
                                                <span class="navi-text">Away</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <div>
                                    <ul class="nav nav-pills nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab-4" data-toggle="tab" href="#home-4">
                                                <span class="nav-icon"><i class="icon-xl la la-user"></i></span>
                                                <span class="nav-text">Users</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab-4" data-toggle="tab" href="#profile-4" aria-controls="profile">
                                                <span class="nav-icon"><i class="icon-xl la la-users"></i></span>
                                                <span class="nav-text">Groups</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent4">
                                        <div class="tab-pane fade show active" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                            <div class="input-group input-group-solid mb-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                                </div>
                                                <input type="text" class="form-control py-4 h-auto" placeholder="Search user">
                                            </div>
                                            <div id="user-indv" class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0)" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_11.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                                    <span class="label label-sm label-success">4</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                            <div class="input-group input-group-solid mb-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                                </div>
                                                <input type="text" class="form-control py-4 h-auto" placeholder="Search user">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_11.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                                    <span class="label label-sm label-success">4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>

  <script src="{{ asset('public/carrier/assets/plugins/global/plugins.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('public/carrier/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/scripts.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  @yield('scripts')
  <!-- Dashboard -->
  <script src="{{ asset('public/carrier/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/pages/widgets.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="{{ asset('public/carrier/assets/js/pages/crud/datatables/advanced/column-rendering.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6') }}" type="text/javascript"></script>

  <script src="{{ asset('public/carrier/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script type="text/javascript" src="{{ url('public/carrier/assets/js/pages/crud/file-upload/image-input.js') }}"></script>
 <script src="{{ asset('public/carrier/assets/js/custom.js') }}"></script>
  
  <script>
    $('.summernote').summernote({
        tabsize: 2,
        height: 100
      });
    </script>
<!-- Modal-->

  <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
        breakpoints: {
            sm: 576,
            md: 768,
            lg: 992,
            xl: 1200,
            xxl: 1400,
        },
        colors: {
            theme: {
                base: {
                    white: "#ffffff",
                    primary: "#3699FF",
                    secondary: "#E5EAEE",
                    success: "#1BC5BD",
                    info: "#8950FC",
                    warning: "#FFA800",
                    danger: "#F64E60",
                    light: "#E4E6EF",
                    dark: "#181C32",
                },
                light: {
                    white: "#ffffff",
                    primary: "#E1F0FF",
                    secondary: "#EBEDF3",
                    success: "#C9F7F5",
                    info: "#EEE5FF",
                    warning: "#FFF4DE",
                    danger: "#FFE2E5",
                    light: "#F3F6F9",
                    dark: "#D6D6E0",
                },
                inverse: {
                    white: "#ffffff",
                    primary: "#ffffff",
                    secondary: "#3F4254",
                    success: "#ffffff",
                    info: "#ffffff",
                    warning: "#ffffff",
                    danger: "#ffffff",
                    light: "#464E5F",
                    dark: "#ffffff",
                },
            },
            gray: {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32",
            },
        },
        "font-family": "Poppins",
    };
    </script>
    <!--end::Global Config-->

    

    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
   
</html>
