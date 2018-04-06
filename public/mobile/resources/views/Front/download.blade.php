@extends('Front.master')

@section('content')        
        
<form name="aspnetForm" method="post" action="download" id="aspnetForm">

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
                            <a href="contactus" class="main-nav " style="background-image: url(images/common/icon-contact.png);">Contact Us</a>
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
            
               
                <div class="container bg-dark cbp-panel">
                    <h2>Mobile Download</h2>
                                
                    <div id="filters-container" class="cbp-l-filters-work">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".sportsbook" class="cbp-filter-item">Sportsbook<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".casino" class="cbp-filter-item">Live Casino<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".slots" class="cbp-filter-item">Slots<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".games" class="cbp-filter-item">Games<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".poker" class="cbp-filter-item">Lottery<div class="cbp-filter-counter"></div></div>
                    </div>
                    
                    <div id="grid-container" class="cbp-l-grid-work">
                                        
                        <div class="cbp-item slots">
                            <div class="row product-wrap margin-none-side">
                                <a href="slot-1scasino">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-1s-slot.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>			
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item slots">
                            <div class="row product-wrap margin-none-side">
                                <a href="slot-12win-new">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-slot-gs.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-android"></i> Download</button>				
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item slots">
                            <div class="row product-wrap margin-none-side">
                                <a href="slot-scr888">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-scr888.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>				
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item slots">
                            <div class="row product-wrap margin-none-side">
                                <a href="slot-suncity">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-suncity.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item sportsbook">
                            <div class="row product-wrap margin-none-side">
                                <a href="sportsbook-winningft">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-wft.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item casino">
                            <div class="row product-wrap margin-none-side">
                                <a href="casino-live22">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-casino-live22.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item casino">
                            <div class="row product-wrap margin-none-side">
                                <a href="casino-1scasino">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-casino-1s.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item casino">
                            <div class="row product-wrap margin-none-side">
                                <a href="casino-12win-new">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-casino-gs.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item casino">
                            <div class="row product-wrap margin-none-side">
                                <a href="casino-calibet">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-casino-calibet.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item casino">
                            <div class="row product-wrap margin-none-side">
                                <a href="casino-joker123">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-casino-joker.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item games">
                            <div class="row product-wrap margin-none-side">
                                <a href="game-live22">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-live22.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item games">
                            <div class="row product-wrap margin-none-side">
                                <a href="game-joker123">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-joker.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item poker">
                            <div class="row product-wrap margin-none-side">
                                <a href="poker-texas">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-holdem.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item poker">
                            <div class="row product-wrap margin-none-side">
                                <a href="poker-sixcard">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-6c.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item poker">
                            <div class="row product-wrap margin-none-side">
                                <a href="poker-eightcard">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-8c.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item poker">
                            <div class="row product-wrap margin-none-side">
                                <a href="poker-bull">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-bull.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item poker">
                            <div class="row product-wrap margin-none-side">
                                <a href="poker-allin">
                                    <div class="col-md-12 padding-style6">
                                        <img src="images/common/product/products-allin.jpg" class="img-responsive width-full"/>
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
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
    
@endsection