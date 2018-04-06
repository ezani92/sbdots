<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>sbdot.net</title>
        <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://foxythemes.net/preview/products/beagle/assets/css/app.css" type="text/css"/>
    </head>
    <body class="be-splash-screen">
        <div class="be-wrapper be-login">
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="splash-container">
                        <div class="card card-border-color card-border-color-warning">
                            <div class="card-header"><img src="{{ secure_asset('images/common/SB_Dot_logo_black-01.png') }}" alt="logo" width="50%" height="50%" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" name="email" type="email" placeholder="Your Email" autocomplete="off" class="form-control" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group row login-tools">
                                        <div class="col-6 login-remember">
                                            <label class="custom-control custom-checkbox">
                                            <input name="remember" type="checkbox" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}><span class="custom-control-label">Remember Me</span>
                                            </label>
                                        </div>
                                        <div class="col-6 login-forgot-password"><a href="{{ url('password/reset') }}">Forgot Password?</a></div>
                                    </div>
                                    <div class="form-group login-submit">
                                        <button type="submit" class="btn btn-warning btn-xl">Sign me in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                //initialize the javascript
                App.init();
            });
            
        </script>
    </body>
</html>