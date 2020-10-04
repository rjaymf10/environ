<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}"/>
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('plugins/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}">
    @stack('styles')

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <img src="{{ asset('img/loader.gif') }}" height="80px" width="80px" class="align-self-center" />
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content" style="margin-top: 50px;">
            <div class="layout-px-spacing" style="min-height: calc(100vh - 100px) !important;">
                @yield('content')
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Coded with <i data-feather="heart"></i> | TMDC IT SOLUTIONS</p>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('plugins/font-icons/feather/feather.min.js') }}"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
    @stack('scripts')
</body>
</html>