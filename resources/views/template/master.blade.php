<?php

//$template_path

date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ env('FAVICON_URL', '') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />

    <!-- Plugins -->
    <link href="{{ asset('/assets/plugins/jquery-datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.css') }}" />

    {{-- toastify --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Base -->
    <link href="{{ asset('/assets/css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/variables.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" />

    {{-- Semantic ui --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/accordion.min.css"
        integrity="sha512-EW5NoIdxRt4Kx9yB4sh9TKVYOveAOFf8WwjRwQs4ylh1hDueujFGLJtPNjm4zQKwlPk8Q2mYDLte7aK6NS+uoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/transition.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/button.min.css"
        integrity="sha512-+1Zl+cDrkWiaN4aCOs9XZ12Jm4Lg3OztufLITILSxr3mo5QM3+WgLH6+s+ytIWoWWQcdNlMGn1JHf75TzHvPHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* LOADER */
        .loader {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background-color: #fff;
            border-radius: 0 !important;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            animation: spotlight 2s linear infinite alternate;
            z-index: 99999;
        }

        .loader:before {
            content: "";
            background-image: url("{{ env('LOGO_URL') }}");
            width: 100%;
            height: 100%;
            object-fit: cover;
            background-size: 20% auto;
            background-repeat: no-repeat;
            background-position: center;
            animation: heartbeat 3.5s linear infinite alternate;
        }
    </style>
    <style>
        /* LOADER */
        .loader {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background-color: #fff;
            border-radius: 0 !important;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            animation: spotlight 2s linear infinite alternate;
            z-index: 99999;
        }

        .loader:before {
            content: "";
            background-image: url("{{ env('LOGO_URL') }}");
            width: 100%;
            height: 100%;
            object-fit: cover;
            background-size: 20% auto;
            background-repeat: no-repeat;
            background-position: center;
            animation: heartbeat 3.5s linear infinite alternate;
        }
    </style>
    @yield('header-style')
</head>

<body>
    <div class="wrapper">
        <!-- Pre-Loader Page -->
        <span id="loader" class="loader"></span>
        <!-- End Pre-Loader Page -->

        <header id="header" class="header fixed-top" data-scrollto-offset="0">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="header_logo" id="header_logo-wrapper">
                    <a href="/" class="navbar-brand d-inline-flex align-items-center scrollto me-auto me-lg-0">
                        <img class="header_logo" src="https://play-lh.googleusercontent.com/CoHZBnuWQRT15pi23JlZwi0WswnJEZXzPRGP3CYwn_Fid-SRkw8v2suUi31YvwC7zQ" />
                    </a>
                </div>
                <div class="header_menu-wrapper d-flex justify-content-between">
                    <div class="action_wrapper d-flex justify-content-start">
                            <div class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    aria-label="Quay lại" data-bs-original-title="Quay lại">
                                        <button class="btn btn-danger d-block" id="turnBack">Đăng xuất</button>
                                </div>
                            </div>
                    <!-- HEADER_MENU -->
                    <!-- END HEADER_MENU -->
                </div>
            </div>
        </header>

        <div class="pageWithSidebar" style="height: 100vh">
            @yield('content')
        </div>

    </div><!-- End Wrapper -->


    {{-- momemtjs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"
        integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/style.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/style-mobile.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/components/autoCompleteAll.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#turnBack').click(function () {
                window.location.href = '/dang-xuat';
            });
        });
    </script>

</body>

</html>
