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

    <script>
        var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
                map = new L.Map('map', { center: new L.LatLng(51.505, -0.04), zoom: 13 }),
                drawnItems = L.featureGroup().addTo(map);
        L.control.layers({
            'osm': osm.addTo(map),
            "google": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: 'google'
            })
        }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
        map.addControl(new L.Control.Draw({
            edit: {
                featureGroup: drawnItems,
                poly: {
                    allowIntersection: false
                }
            },
            draw: {
                polygon: {
                    allowIntersection: false,
                    showArea: true
                }
            }
        }));

        map.on(L.Draw.Event.CREATED, function (event) {
            var layer = event.layer;

            drawnItems.addLayer(layer);
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
   
</html>
