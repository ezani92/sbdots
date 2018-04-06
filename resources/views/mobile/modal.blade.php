<form method="post" action="loginRegistration" id="">
        
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">         
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><i class="fa fa-lock fa-fw"></i>Login</h4>
                </div>
                <div class="modal-body" style="padding:30px 50px 10px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for=""><i class="fa fa-user"></i> Username</label>
                            <input name="ctl00$txtemail" type="text" maxlength="100" id="ctl00_txtemail" class="form-control" placeholder="Enter Username" />
                        </div>
                        <div class="form-group">
                            <label for=""><i class="fa fa-unlock"></i> Password</label>
                            <input name="ctl00$txtpass" type="password" maxlength="20" id="ctl00_txtpass" class="form-control" placeholder="Enter password" />
                        </div>
                        <a href="javascript:document.getElementById('ctl00_btnmodallogin').click();"><button type="button" class="btn btn-warning btn-block"><i class="fa fa-fw fa-sign-in"></i>Login</button></a>
                        <input type="submit" name="ctl00$btnmodallogin" value="Login" id="ctl00_btnmodallogin" style="visibility: hidden; position: absolute;" />
                        <p class="errmsg">
                        
                        </p>
                    </form>
                </div>
                <div class="modal-footer center-text">
                    <p>Not a member? <a href="registration">Sign Up</a></p>
                    <p>Forgot <a href="#" data-toggle="modal" data-target="#forgot">Password?</a></p>
                    <p>TAC <a href="tacvalidation">Validation</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="forgot" role="dialog">
        <div class="modal-dialog">         
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><i class="fa fa-lock fa-fw"></i>Reset Password</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <div role="form">
                        <div class="form-group">
                            <label for=""><i class="fa fa-envelope"></i> Email Address</label>
                            <input name="ctl00$txtemail_forgot" type="text" maxlength="100" id="ctl00_txtemail_forgot" class="form-control" placeholder="Enter email" />
                            <p class="help-block">
    
    
    </p>
                        </div>
                        <a href="javascript:document.getElementById('ctl00_btnsend').click();"><button type="button" class="btn btn-warning btn-block"><i class="fa fa-fw fa-paper-plane"></i>Submit</button></a>
                        <input type="submit" name="ctl00$btnsend" value="Submit" id="ctl00_btnsend" class="btn btn-default btnColor1" style="visibility: hidden; position: absolute;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="language" role="dialog">
        <div class="modal-dialog">         
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Select Your Language</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <ul class="ul-language">
                        <li><a href="#"><div class="col-xs-6"><img src="mobile/images/common/language_en.png" alt=""/></div><div class="col-xs-6"><span>English</span></div></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="pnlsecurity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none;"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Security</h4>
          </div>
          <div class="modal-body">
        <div id="ctl00_UpdatePanel4">
        
        <div style="padding-top: 5px; padding-bottom: 5px; font-weight: bold; font-size: 12px">
        Enter your bank account details for any winnings withdrawal transaction.
        </div>
          <div>
          <div class="form-group">
            <label>Bank Name
            
            </label>
            <input name="ctl00$txtbankname" type="text" maxlength="50" id="ctl00_txtbankname" class="form-control" placeholder="Bank Name" />
          </div>
          <div class="form-group">
            <label>Branch Name
            
            </label>
            <input name="ctl00$txtbranchname" type="text" maxlength="50" id="ctl00_txtbranchname" class="form-control" placeholder="Branch Name" />
          </div>
          <div class="form-group">
            <label>Bank Account Name
            
            </label>
            <input name="ctl00$txtaccountname" type="text" maxlength="50" id="ctl00_txtaccountname" class="form-control" placeholder="Bank Account Name" />
          </div>
          <div class="form-group">
            <label>Bank Account Number
                
                
            </label>
            <input name="ctl00$txtaccountno" type="text" maxlength="14" id="ctl00_txtaccountno" class="form-control" placeholder="Bank Account Number" />
          </div>
                <div style="margin-bottom: 10px;">
                Note : Please enter your details carefully as it is not changeable in future.
                </div>
          <div class="form-group">
            <label>Secret Question 1
            
            </label>
             <select name="ctl00$ddlq1" id="ctl00_ddlq1" class="form-control">
    
        </select>
          </div>
          <div class="form-group">
            <label>Your Answer</label>
             <input name="ctl00$txtans1" type="text" maxlength="50" id="ctl00_txtans1" class="form-control" />
          </div>
          <div class="form-group">
            <label>Secret Question 2
            
            </label>
             <select name="ctl00$ddlq2" id="ctl00_ddlq2" class="form-control">
    
        </select>
          </div>
          <div class="form-group">
            <label>Your Answer</label>
             <input name="ctl00$txtans2" type="text" maxlength="50" id="ctl00_txtans2" class="form-control" />
          </div>
          <div class="form-group">
            <label>Secret Question 3
            
            </label>
             <select name="ctl00$ddlq3" id="ctl00_ddlq3" class="form-control">
    
        </select>
          </div>
          <div class="form-group">
            <label>Your Answer</label>
             <input name="ctl00$txtans3" type="text" maxlength="50" id="ctl00_txtans3" class="form-control" />
          </div>
      <div class="clearfix"></div>
          <input type="submit" name="ctl00$btn_submitsecurity" value="Continue" id="ctl00_btn_submitsecurity" class="btn btn-default register-btn" />
            </div>
            
    </div>
          
        </div>
      </div>
      </div>
    </div>

    <script>
            $(function () {
                $('a[href*="#"]:not([href="#"])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    
</form>