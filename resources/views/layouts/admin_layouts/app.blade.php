<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo7/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 06:19:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{url('assets/assets/img/favicon.ico')}}"/>
    <link href="{{url('assets/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{url('assets/assets/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{url('assets/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.admin_layouts.admin_header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        @include('layouts.admin_layouts.topbar')
        <!--  END TOPBAR  -->
        
        <!--  BEGIN CONTENT PART  -->
        @yield('content')
        <!--  END CONTENT PART  -->

        @include('layouts.admin_layouts.admin_footer')
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{url('assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{url('assets/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{url('assets/plugins/table/datatable/datatables.js')}}"></script>
    <script src="{{url('assets/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/assets/js/dashboard/dash_1.js')}}"></script>
    <script src="{{url('assets/assets/js/dashboard/dash_2.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @yield('scripts')
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo7/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 06:20:10 GMT -->
</html>