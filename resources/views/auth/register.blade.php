<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>SisDeck | Registration Page</title>

    <link rel="icon" type="image/png" href="{{ url('assets/images/decki-revota.jpg') }}">

    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap-441/css/bootstrap.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/fontawesome-513/css/all.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('css/ionicons.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ url('css/all-skins.css') }}">

    <link rel="stylesheet" href="{{ url('css/sisdeck.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/sisdeck') }}">SisDeck<br>Students Information System</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>
            <form method="post" action="{{ url('/sisdeck-register') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="text" class="form-control dhs_input-bar" id="username" name="username" value="{{ old('username') }}" placeholder="First Name" autofocus>
                                <span class="input-group-text dhs_input-icon" id="username-icon"><i class="fas fa-fw fa-user"></i></span>
                            </div>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group has-feedback{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="text" class="form-control dhs_input-bar" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="Middle and/or Last Name">
                                <span class="input-group-text dhs_input-icon" id="fullname-icon"><i class="fas fa-fw fa-user"></i></span>
                            </div>
                            @if ($errors->has('fullname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <input type="email" class="form-control dhs_input-bar" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        <span class="input-group-text dhs_input-icon" id="email-icon"><i class="fas fa-fw fa-envelope"></i></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="password" class="form-control dhs_input-bar" id="password" name="password" placeholder="Password">
                                <span class="input-group-text dhs_input-icon" id="password-icon"><i class="fas fa-fw fa-lock"></i></span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control dhs_input-bar" placeholder="Confirm password">
                                <span class="input-group-text dhs_input-icon" id="password_confirmation-icon"><i class="fas fa-fw fa-lock"></i></span>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <hr>
            <div class="text-center">
                <a href="{{ url('/sisdeck/login') }}">I already have a membership</a>
            </div>
        </div>
        <!-- /.form-box -->

    </div>
    <!-- /.register-box -->

    <script type="text/javascript" src="{{ url('js/adminlte.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/bootstrap-441/js/bootstrap.js') }}"></script>
</body>
</html>