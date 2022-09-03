  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
      <!-- Login -->
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,900&amp;display=swap" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/pages/login/classic/login-4.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/style.bundle.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/media/logos/favicon.ico') }}" rel="shortcut icon" />
      <!-- Signup -->
      <link href="{{ asset('public/carrier/assets/css/pages/login/login-4.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" />
      <link href="{{ asset('public/carrier/assets/css/my-custom-style.css') }}" rel="stylesheet" />
      <input type="hidden" value="{{ url('') }}" id="app_url">
      <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
      <div class="d-flex flex-column flex-root">
          @yield('content')
      </div>
  </body>
  
  <script src="{{ asset('public/carrier/assets/plugins/global/plugins.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/scripts.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/pages/custom/login/login-general.js?v=7.0.6') }}" type="text/javascript"></script>

  <script src="{{ asset('public/carrier/assets/js/pages/custom/login/login-4.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/pages/custom/wizard/wizard-4.js') }}" type="text/javascript"></script>

  <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
    </script>
    <script src="{{ asset('public/carrier/assets/js/custom.js') }}"></script>
    @yield('script')
  </html>
