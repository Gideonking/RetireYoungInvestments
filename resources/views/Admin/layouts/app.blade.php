<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retire Young - @yield('title') </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />
    <link href="{{ asset('css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body class="md-skin">

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('Admin.layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('Admin.layouts.topnavbar')

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>@yield('title') </h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('admin/home') }}">Dashboard</a></li>
                        @yield('breadcrumb')
                    </ol>
                </div>
                <div class="col-lg-4">
                  <div class="title-action">
                    @yield('actions')
                  </div>
                </div>
            </div>
            <!-- Admin view  -->
            @yield('content')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{{ asset('js/jasny/jasny-bootstrap.min.js')}}"></script>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!};
</script>
@yield('scripts')

</body>
</html>
