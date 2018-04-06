@extends('Front.master')

@section('content')        
            
        <div class="all-elements">

                @include ('Layout.sidebar')
        
            <div id="content" class="page-content">
        
                @include ('Layout.nav')
                        
            <div>
                <div id="ctl00_UpdatePanel1">
                
                    <form name="form1" method="post" action="inc_registration" id="form1">
                
                        <div class="container bg-dark">
                            <div class="form-horizontal">
                                <fieldset>
                
                                    <h2>Registration</h2>
                
                                    <div class="form-register">
                
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Username</label>
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="txtusername" type="text" maxlength="100" id="txtusername" class="form-control" placeholder="Username" />
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
                                                    <input name="txtcontactno" type="text" maxlength="12" id="txtcontactno" class="form-control" placeholder="60123456789" />
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
                                                    <input name="txtpass" type="password" maxlength="10" id="txtpass" class="form-control" placeholder="Password" />
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
                                                    <input name="txtrepass" type="password" maxlength="10" id="txtrepass" class="form-control" placeholder="Confirm Password"
                                                    />
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
                                                    <input name="txtemail" type="text" maxlength="100" id="txtemail" class="form-control" placeholder="Email Address" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="help-block">

                                                </p>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="g-recaptcha" data-sitekey="6LdCfigUAAAAAIOmp6n8mVz3s7nerCT9qXn77X2j"></div>
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
                </div>
        <div id="ctl00_UpdateProgress1" style="display:none;">
            
        <div class="overlay" />
                    <div class="overlayContent">
                        <img src="images/ajax-loader.gif" alt="Loading" border="1" />
                    </div>
            
        </div>
            </div>
        
            @include ('Front.footer')
                            
            </div>  
            
        </div>

@endsection