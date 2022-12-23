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
  <link href="{{ asset('public/admin/assets/css/my-custom-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link href="{{ asset('public/admin/assets/css/themes/layout/header/base/light.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/css/themes/layout/header/menu/light.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/css/themes/layout/brand/dark.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/css/themes/layout/aside/dark.css?v=7.0.6') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/assets/css/my-custom-style.css') }}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.6') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">  
  <input type="hidden" value="{{ url('') }}" id="app_url">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('public/admin/assets/media/logos/favicon.ico') }}" rel="shortcut icon" />
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBQAdBoWGWwdne8WSvfQRlQv58Hyz-BVQw"></script>
    <script src="{{asset('public/admin/assets/plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
<script>
var searchInput = 'pac-input';

$(document).ready(function () {
    var options = {
     types: ['(cities)'],
     componentRestrictions: {country: "us"}
    };
   var input = document.getElementById('pac-input');
   var autocomplete = new google.maps.places.Autocomplete(input, options);

   google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var place = autocomplete.getPlace();
        console.log(place.name);
        document.getElementById('cityLat').value = place.geometry.location.lat();
        document.getElementById('cityLng').value = place.geometry.location.lng();
    });
});
</script>
  
</head>
  <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">    
        @include('admin.includes.navbar')
        
        <!--end::Header Mobile-->
	    <div class="d-flex flex-column flex-root">
	        <!--begin::Page-->
	        <div class="d-flex flex-row flex-column-fluid page">
	        	@include('admin.includes.sidebar')

	        	<!--begin::Wrapper-->
	            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
	                <!--begin::Header-->
	                @include('admin.includes.header')
	                @yield('content')
	            </div>
	        </div>
	    </div>        
    </body>

<!-- Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Do you want to delete that record ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold">Yes, Delete it</button>
            </div>
        </div>
    </div>
</div>

@if(isset($_GET['status']))
<div class="modal fade" id="jobsaveasdraft" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Job is Still Continue Step # {{ $_GET['step'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Your Job is Still in Continue to Upload. Please Save to Draft or Delete it
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger font-weight-bold">Delete Job</button>
                <a href="{{ url('admin/carriers/draftjob') }}/{{ $_GET['jobid'] }}" class="btn btn-light-primary font-weight-bold">Save as Draft</a>
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Keep Editing</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#jobsaveasdraft').modal('show');
    });
</script>
@endif
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

        <!--begin::Global Theme Bundle(used by all pages)-->
        
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{asset('public/admin/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6')}}"></script>
        <script src="{{asset('public/admin/assets/js/scripts.bundle.js?v=7.0.6')}}"></script>
        <!--end::Global Theme Bundle-->
        @yield('scripts')
        <!--begin::Page Vendors(used by this page)-->
        <script src="{{asset('public/admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6')}}"></script>
        <!--end::Page Vendors-->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <!--begin::Page Scripts(used by this page)-->
        <script src="{{asset('public/admin/assets/js/pages/widgets.js?v=7.0.6')}}"></script>
        <script src="{{ asset('public/carrier/assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6') }}" type="text/javascript"></script>
        <script src="{{asset('public/admin/assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6')}}"></script>
        <script src="{{ asset('public/admin/assets/js/custom.js') }}"></script>
        <!--end::Page Scripts-->
        <!-- <script src="{{ asset('public/carrier/assets/js/custom.js') }}"></script>  -->
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <script>
    $('.summernote').summernote({
        tabsize: 4,
        height: 400
      });
    </script>
   
</html>
