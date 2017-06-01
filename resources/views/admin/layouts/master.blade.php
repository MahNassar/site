<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('public/css/corecss.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    @yield('css')
    @stack('css')
</head>

<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav" id="collapse">
            <li>
                <a class="sidebar-control sidebar-main-toggle hidden-xs">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">

                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ (auth()->user()->photo)? url(auth()->user()->photo) : url('assets/images/noavatar.png') }}" alt="">
                    <span>{{ auth()->user()->name }}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-cog5"></i> {{ trans('header.settings') }}</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> {{ trans('header.logout') }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                <!-- User menu -->
                <!-- /user menu -->
                <!-- Organization Logo -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media logo-container">
                            <img src="#" alt="Organization on Hand Logo">
                        </div>
                    </div>
                </div>
                <!-- /Organization Logo -->
                <!-- Main navigation -->
            @include('partials.menu')
            <!-- /main navigation -->
            </div>
        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        @yield('head')
                    </div>
                </div>
                @stack('head')
                @yield('breadcrumb')
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content">
                @include('adminlte-templates::common.errors')
                <div class="clearfix"></div>
                @include('flash::message')

                @yield('content')


            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

@foreach ($coreJs as $js)
    <script type="text/javascript" src="{{ asset($js) }}"></script>

    @endforeach



<script>
    $(document).ready(function() {
        $('#desc_long').val('');
    });
</script>
<!------------Messages ------------------>

@if(Session::has('success'))
    <script>
        $(function () {
            swal({title: "Done!", text: "{{session('success')}}", timer: 10000, html: true, type: "success"})
        })
    </script>
    {!! session()->forget('success') !!}
@elseif(Session::has('error'))
    <script>
        $(function () {
            swal({title: "Error!", text: "{{session('error')}}", timer: 10000, html: true, type: "warning"})
        })
        {!! session()->forget('error') !!}
    </script>
@endif
<script>
    $(document).ready(function () {
        $("div[data-event='backColor']").parent('.btn-group').hide();
        $("a[data-value='pre']").hide();
        $("a[data-value='blockquote']").hide();
        $("button[data-original-title='Recent Color']").removeAttr('data-backcolor');
    })

</script>
<!-------------End Messages--------------------->
@yield('scripts')
@stack('scripts')
</body>
</html>
