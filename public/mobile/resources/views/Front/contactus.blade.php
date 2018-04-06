@extends('Front.master')

@section('content')        
<form name="aspnetForm" method="post" action="contactus" id="aspnetForm">

        <div class="all-elements">
            <div id="sidebar" class="page-sidebar">
                <div class="page-sidebar-scroll">
                                 
                    <div class="navigation-items">
                    
                        <div class="nav-item">
                            <a href="registration" class="main-nav " style="background-image: url(images/common/icon-join.png);">Join Now</a>
                        </div>
                    
                        <div class="nav-item">
                            <a href="home" class="main-nav " style="background-image: url(images/common/icon-home.png);">Home</a>
                        </div>
                        <div class="nav-item">
                            <a href="sportsbook" class="main-nav " style="background-image: url(images/common/icon-sportsbook.png);">Sportsbook</a>
                        </div>
                        <div class="nav-item">
                            <a href="live_casino" class="main-nav " style="background-image: url(images/common/icon-livecasino.png);">Live Casino</a>
                        </div>
                        <div class="nav-item">
                            <a href="slot" class="main-nav " style="background-image: url(images/common/icon-slots.png);">Slots</a>
                        </div> 
                        <div class="nav-item">
                            <a href="game" class="main-nav " style="background-image: url(images/common/icon-games.png);">Games</a>
                        </div> 
                        <div class="nav-item">
                            <a href="poker" class="main-nav " style="background-image: url(images/common/icon-poker.png);">Poker</a>
                        </div> 
                        <div class="nav-item">
                            <a href="promotions" class="main-nav " style="background-image: url(images/common/icon-promotion.png);">Promotions</a>
                        </div> 
                        <div class="nav-item">
                            <a href="contactus" class="main-nav active" style="background-image: url(images/common/icon-contact.png);">Contact Us</a>
                        </div>
                        
                    </div>      
                    <p class="sidebar-copyright center-text">© Copyrights 2012 - 2018.<br>All rights reserved.<br>Betasia.net © is a registered trademark.</p>
                    <div class="desktop"><a href="javascript:document.getElementById('ctl00_lnkbtn_viewdesktop').click();">Switch to Desktop View</a></div>
                    <a id="ctl00_lnkbtn_viewdesktop" href="javascript:__doPostBack('ctl00$lnkbtn_viewdesktop','')" style="color: #2980b9; visibility: hidden; position: absolute;">Switch to Desktop View</a>
                            
                </div>
            </div>
        
        
            <div id="content" class="page-content">
                <div class="content-controls">
                    <a href="#" class="deploy-sidebar"><i class="fa fa-fw fa-bars"></i></a>
                    <em class="content-title"><a href="home"><img src="images/common/logo.png" class="logo"></a></em>
                    <a href="#" id="ctl00_btnloginfront" class="deploy-contact" data-toggle="modal" data-target="#login">login</a>
                    
                </div>
        
                <nav role="navigation" class="navbar navbar-inverse no-bottom">
                    <div class="container">
                        <div class="row">
                            <ul class="nav" id="tab_change">
                                <li class="active">
                                    <div class="col-md-20 footer-xs"> 
                                        <a href="home">
                                            <button href="" class="navbar-toggle collapsed btn-top" type="button"> 
                                            <img src="images/common/icon-home.png"/>home</button>
                                        </a> 
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-20 footer-xs"> 
                                        <a href="promotions">
                                            <button href="#" class="navbar-toggle collapsed btn-top" type="button"> 
                                            <img src="images/common/icon-promotion.png"/>promotions</button>
                                        </a> 
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="col-md-20 footer-xs"> 
                                        <a href="registration">
                                            <button href="#" class="navbar-toggle collapsed btn-top" type="button"> 
                                            <img src="images/common/icon-register.png"/>register</button>
                                        </a> 
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="col-md-20 footer-xs"> 
                                        <a href="download">
                                            <button class="navbar-toggle collapsed btn-top" type="button"> 
                                            <img src="images/common/icon-download.png"/>download</button>
                                        </a> 
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-20 footer-xs"> 
                                        <a href="#" onclick="parent.LC_API.open_chat_window({source:'minimized'})">
                                            <button class="navbar-toggle collapsed btn-top" type="button"> 
                                            <img src="images/common/icon-livechat.png"/>live chat</button>
                                        </a> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>		
                        
            <div>
                <div id="ctl00_UpdatePanel1">
            
               
                <div class="container bg-dark">
                    <h2>Contact Us</h2>
                    <div class="reg-form">
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-phone fa-stack-1x"></i>
                                </span>
                                <h3>Telephone:</h3>
                            </div>
                            <p>Malaysia: +603 9212 8135</p>
                            <p>Thailand : +66 600 035 106</p>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-envelope fa-stack-1x"></i>
                                </span>
                                <h3>EMAIL:</h3>
                            </div>
                            <p><a href="cdn-cgi/l/email-protection/index.html#56252326263924221634332237253f3778383322" class="ui-link"><span class="__cf_email__" data-cfemail="285b5d5858475a5c684a4d5c495b414906464d5c">[email&#160;protected]</span></a></p>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-comments fa-stack-1x"></i>
                                </span>					
                                <h3>Live Chat:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Chat with our 24x7 Live Support through the bottom right corner of our site.</p>
                            </div>
                        </div>
                        <!--
                        <div class="contact-box">
                            <div class="contact-title">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-skype fa-stack-1x"></i>
                                </span>					
                                <h3>Skype:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Skype ID: casinoskype</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-wechat fa-stack-1x"></i>
                                </span>					
                                <h3>We Chat:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>WeChat ID: casinowechat</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-twitter fa-stack-1x"></i>
                                </span>					
                                <h3>Twitter:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Twitter ID: casinotwitter</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-whatsapp fa-stack-1x"></i>
                                </span>					
                                <h3>WhatsApp:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>WhatsApp ID: +6018 888 8888</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-google-plus fa-stack-1x"></i>
                                </span>					
                                <h3>Google+:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Google+ ID: casinogoogleplus</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <svg width="33px" height="33px" viewBox="0 0 300 300">
                                  <g>
                                    <path class="fill_1" d="M245.741,0L54.679,0C24.677-0.042,0.043,24.249,0,54.257v191.057 c-0.042,30.01,24.255,54.645,54.258,54.686H245.32c30.01,0.042,54.637-24.249,54.68-54.265l-0.001-191.06 C300.041,24.671,275.749,0.041,245.741,0z"/>
                                    <path class="fill_2" d="M259.877,136.778c0-48.99-49.115-88.846-109.482-88.846 c-60.365,0-109.482,39.856-109.482,88.846c0,43.917,38.949,80.702,91.563,87.659c3.563,0.769,8.416,2.354,9.644,5.4 c1.104,2.766,0.724,7.1,0.354,9.896c0,0-1.279,7.727-1.562,9.375c-0.476,2.767-2.201,10.823,9.483,5.901 c11.686-4.922,63.047-37.127,86.016-63.568h-0.005C252.273,174.045,259.877,156.385,259.877,136.778z M107.537,165.925H85.785 c-3.164,0-5.74-2.575-5.74-5.744v-43.505c0-3.166,2.576-5.741,5.74-5.741c3.166,0,5.739,2.576,5.739,5.741v37.764h16.013 c3.169,0,5.741,2.576,5.741,5.742C113.277,163.35,110.706,165.925,107.537,165.925z M130.037,160.182 c0,3.168-2.575,5.744-5.737,5.744c-3.164,0-5.739-2.575-5.739-5.744v-43.505c0-3.166,2.575-5.741,5.739-5.741 c3.162,0,5.737,2.576,5.737,5.741V160.182z M182.402,160.182c0,2.479-1.573,4.667-3.924,5.446 c-0.591,0.198-1.207,0.298-1.824,0.298c-1.791,0-3.505-0.858-4.587-2.298l-22.293-30.359v26.914 c0,3.168-2.573,5.744-5.741,5.744c-3.166,0-5.742-2.575-5.742-5.744v-43.505c0-2.474,1.579-4.662,3.924-5.445 c0.591-0.199,1.206-0.296,1.823-0.296c1.791,0,3.509,0.856,4.584,2.295l22.3,30.362v-26.917c0-3.166,2.578-5.741,5.74-5.741 c3.167,0,5.739,2.576,5.739,5.741V160.182z M217.602,132.688c3.169,0,5.742,2.576,5.742,5.743c0,3.163-2.573,5.739-5.742,5.739 h-16.008v10.27h16.008c3.164,0,5.742,2.576,5.742,5.742c0,3.168-2.578,5.744-5.742,5.744h-21.754c-3.16,0-5.74-2.575-5.74-5.744 v-21.738c0-0.007,0-0.007,0-0.013v-21.755c0-3.166,2.575-5.741,5.74-5.741h21.754c3.169,0,5.742,2.576,5.742,5.741 c0,3.166-2.573,5.741-5.742,5.741h-16.008v10.271H217.602z"/>
                                  </g>
                                </svg>
                                <h3>Line:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Line ID: casinoline</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <svg width="38.875896" height="26.986015">
                                <g transform="translate(-4.1840024,-9.0407543)">
                                    <path class="fill_1" d="m 16.451,11.896 c 0,-1.264 -0.774,-2.864 -4.027,-2.864 -1.335,0 -5.009,0 -5.009,0 L 5.991,15.62 c 0,0 2.707,0 5.222,0 4.077,0 5.238,-1.93 5.238,-3.724 z"/>
                                    <path class="fill_1" d="m 29.944,11.896 c 0,-1.264 -0.772,-2.864 -4.024,-2.864 -1.336,0 -5.01,0 -5.01,0 l -1.423,6.587 c 0,0 2.706,0 5.219,0 4.079,10e-4 5.238,-1.929 5.238,-3.723 z"/>
                                    <path class="fill_1" d="m 14.644,21.811 c 0,-1.264 -0.774,-2.868 -4.027,-2.868 -1.335,0 -5.009,0 -5.009,0 l -1.424,6.592 c 0,0 2.707,0 5.22,0 4.078,0 5.24,-1.935 5.24,-3.724 z"/>
                                    <path class="fill_1" d="m 28.137,21.811 c 0,-1.264 -0.775,-2.868 -4.025,-2.868 -1.337,0 -5.009,0 -5.009,0 l -1.426,6.592 c 0,0 2.707,0 5.222,0 4.079,0 5.238,-1.935 5.238,-3.724 z"/>
                                    <path class="fill_1" d="m 42.254,17.79 c 0,-1.265 -0.775,-2.868 -4.025,-2.868 -1.337,0 -5.009,0 -5.009,0 l -1.426,6.591 c 0,0 2.709,0 5.22,0 4.079,0 5.24,-1.93 5.24,-3.723 z""/>
                                    <path class="fill_1" d="m 40.308,28.113 c 0,-1.265 -0.773,-2.864 -4.025,-2.864 -1.335,0 -5.009,0 -5.009,0 l -1.424,6.588 c 0,0 2.705,0 5.22,0 4.078,0 5.238,-1.935 5.238,-3.724 z"/>
                                    <path class="fill_1" d="m 26.198,32.135 c 0,-1.27 -0.772,-2.873 -4.022,-2.873 -1.338,0 -5.012,0 -5.012,0 l -1.424,6.591 c 0,0 2.707,0 5.22,0 4.079,10e-4 5.238,-1.929 5.238,-3.718 z"/>
                                </g>
                                </svg>
        
                                <h3>BBM:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>BBM ID: casinobbm</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-yahoo fa-stack-1x"></i>
                                </span>					
                                <h3>Yahoo Messenger:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Yahoo Messenger ID: casinoyahoo</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-facebook fa-stack-1x"></i>
                                </span>					
                                <h3>Facebook:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Facebook ID: casinofacebook</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-weibo fa-stack-1x"></i>
                                </span>					
                                <h3>Weibo:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>Weibo ID: casinoweibo</p>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-title"> 
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x icon-background1"></i>
                                    <i class="fa fa-qq fa-stack-1x"></i>
                                </span>					
                                <h3>QQ:</h3>
                            </div>
                            <div class="contact-detail">
                                <p>QQ ID: casinoqq</p>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
                
        
                
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
                            <li><a href="#"><div class="col-xs-6"><img src="images/common/language_en.png" alt=""/></div><div class="col-xs-6"><span>English</span></div></a></li>
                            
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
        
        <script data-cfasync="false" src="cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script>
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
    
@endsection