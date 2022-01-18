<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" type="image/jpg" href="{{ url('assets/images/DeckiRevota.jpg') }}">

    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap-441/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-toggle.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/fontawesome-513/css/all.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-datetimepicker.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ url('css/all-skins.css') }}">

    <link rel="stylesheet" href="{{ url('css/select2.css') }}">
    <link rel="stylesheet" href="{{ url('css/sisdeck.css') }}">

    @yield('css')
</head>
<body class="skin-blue sidebar-mini">
    {{-- <!-- @if (!Auth::guest()) --> --}}
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo"><b class="logo-lg">SisDeck</b></a>
            <!-- Header Navbar -->
            <nav class="navbar" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" title="Sidebar Toggle" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <i class="fas fa-fw fa-bars dhs_bars"></i>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle dhs_dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                @if(!empty(Auth::user()->profile->image))
                                <img src="/storage/{{ Auth::user()->profile->image }}" class="user-image dhs_user-image" alt="User Image"/>
                                @else
                                <img src="{{ url('assets/images/default_user.png') }}" class="user-image dhs_user-image" alt="User Image"/>
                                @endif
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs dhs_username-toggle">{{ Auth::user()->username }}</span>
                            </a>
                            <ul class="dropdown-menu dhs_dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    @if(!empty(Auth::user()->profile->image))
                                    <img src="/storage/{{ Auth::user()->profile->image }}" class="rounded-circle" alt="User Image"/>
                                    @else
                                    <img src="{{ url('assets/images/default_user.png') }}" class="rounded-circle" alt="User Image"/>
                                    @endif
                                    <p>
                                        {{ Auth::user()->username }}
                                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-default btn-flat w-100">Profile</a>
                                    </div>
                                    <div>
                                        <a href="{{ url('/sisdeck-logout') }}" class="btn btn-default btn-flat w-100"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/sisdeck-logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('/sisdeck/layouts/sidebar')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    @include('/sisdeck/academics/create')
    @include('/sisdeck/academics/update')

    @include('/sisdeck/batches/create')
    @include('/sisdeck/batches/update')

    @include('/sisdeck/class_schedules/create')
    @include('/sisdeck/class_schedules/read')
    @include('/sisdeck/class_schedules/update')

    @include('/sisdeck/classes/create')
    @include('/sisdeck/classes/update')

    @include('/sisdeck/classrooms/create')
    @include('/sisdeck/classrooms/update')

    @include('/sisdeck/courses/create')
    @include('/sisdeck/courses/update')

    @include('/sisdeck/days/create')
    @include('/sisdeck/days/update')

    @include('/sisdeck/roles/create')
    @include('/sisdeck/roles/update')

    @include('/sisdeck/semesters/create')
    @include('/sisdeck/semesters/update')

    @include('/sisdeck/teachers/create')
    @include('/sisdeck/teachers/update')

    @include('/sisdeck/users/create')
    @include('/sisdeck/users/read')
    @include('/sisdeck/users/update')

    {{-- <!-- @else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                Collapsed Hamburger
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                Branding Image
                <a class="navbar-brand" href="{{ url('/') }}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                Left Side Of Navbar
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/sisdeck') }}">Home</a></li>
                </ul>

                Right Side Of Navbar
                <ul class="nav navbar-nav navbar-right">
                    Authentication Links
                    <li><a href="{{ url('/sisdeck/login') }}">Login</a></li>
                    <li><a href="{{ url('/sisdeck/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif --> --}}

    <script type="text/javascript" src="{{ url('assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/bootstrap-441/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap-toggle.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/adminlte.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/sisdeck.js') }}"></script>

    @stack('scripts')
</body>
</html>