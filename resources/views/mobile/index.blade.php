@extends('mobile.master')
@section('content')
<div class="all-elements">
@include ('mobile.sidebar')
<div id="content" class="page-content">
    @include ('mobile.nav')
    <div>
        <div id="ctl00_UpdatePanel1">
            <div class="container padding-style2">   
                <a href="promotions"><img src="{{ asset('mobile/images/en/wc-1.jpg') }}" class="img-responsive width-full"/></a>
            </div>
            <div class="container">
                <div class="row why-logo"><span>why</span><img src="{{ asset('mobile/images/common/sb_logo.png') }}" class="img-responsive"/><span>?</span></div>
                <div class="row why-wrap">
                    <div class="col-md-6 col-xs-12">
                        <div class="why-title">Great Promotion</div>
                        <div class="why-text">Available for NEW Members & Existing Members all time!</div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="why-title">Trusted 24/7 Customer Services</div>
                        <div class="why-text">Provide best gaming experiences to all of our Dear Members</div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="why-title">Powered by</div>
                        <div class="why-text">SUperb Group, a Brand with more than 5 years experiences that you can Trust</div>
                    </div>
                </div>
            </div>
            <!-- Registration Form Here currently loading from iframe -->
            @guest
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="container bg-dark">
                            <div class="form-horizontal">
                                <fieldset>
                
                                    <h2>Registration</h2>
                
                                    <div class="form-register">

                                        @if ($errors->has('email'))
                                            <div class="alert alert-warning">
                                                <strong>You are already a registered member of us! Please Contact Customer Services for more assistance.</strong>
                                            </div>
                                        @endif
                                        @if ($errors->has('phone'))
                                            <div class="alert alert-warning">
                                                <strong>{{ old('phone') }} has already used for registration. Please Contact Customer Services for more assistance.</strong>
                                            </div>
                                        @endif
                
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Fullname</label>
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="name" type="text" class="form-control" placeholder="Fullname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block">

                                                </p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Mobile Number</label>
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                                    <input name="phone" type="text" class="form-control" placeholder="60123456789" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block">
                
                                                </p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Password</label>
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Confirm Password</label>
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block">

                                                </p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">E-Mail</label>
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block">

                                                </p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="g-recaptcha" data-sitekey="6LdrOUoUAAAAAO3ICDvvbpAnGFz55RoADJ1YP4Vt"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block">
                
                                                </p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" name="btnsend" value="Register" id="btnsend" class="btn btn-warning btn-block" />
                                            </div>
                                        </div>
                
                                    </div>
                
                                </fieldset>
                            </div>
                        </div>
                
                    </form>
            @else

            @endguest
        </div>
        <div id="ctl00_UpdateProgress1" style="display:none;">
            <div class="overlay" />
                <div class="overlayContent">
                    <img src="{{ asset('mobile/images/ajax-loader.gif') }}" alt="Loading" border="1" />
                </div>
            </div>
        </div>
        @include ('mobile.footer')
    </div>
</div>
@endsection