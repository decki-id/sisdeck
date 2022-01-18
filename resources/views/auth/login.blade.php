<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>SisDeck | Login Page</title>

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
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/sisdeck') }}">SisDeck<br>Students Information System</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="post" action="{{ url('/sisdeck-login') }}">
                @csrf
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <input type="email" class="form-control dhs_input-bar" id="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
                        <span class="input-group-text dhs_input-icon" id="email-icon"><i class="fas fa-fw fa-envelope"></i></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
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
                <div class="form-group">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <input type="checkbox" name="remember"> Remember Me
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <hr>
            <div class="text-center">
                <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                <a href="{{ url('/sisdeck/register') }}">Register a new membership</a>
            </div>
        </div>
        <!-- /.login-box-body -->

    </div>
    <!-- /.login-box -->

    <script type="text/javascript" src="{{ url('js/adminlte.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/bootstrap-441/js/bootstrap.js') }}"></script>
</body>
</html>