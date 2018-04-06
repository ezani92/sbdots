@extends('Front.master')

@section('content')        
        
<form name="aspnetForm" method="post" action="promotions" id="aspnetForm">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE5OTMzNzY1OTFkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYBBRJjdGwwMCRpbWdidG5sb2dvdXS/IaX/eOho1o/5XX/nJ/30QR1OoA==" />
        
        
        <script src="ScriptResource-53847.axd" type="text/javascript"></script>
        <script type="text/javascript">
        //<![CDATA[
        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
        //]]>
        </script>
        
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="91B677B1" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWEAK1r5dZAuy/qKcBApmyvZkPAp2PyPQPAtf9kdIGAtm4wvABAp3749kJAurI+ZkGApaLqoQEApne3akIAsLSldcBAu6cyNEHAqbKyaQLAqXKyaQLAqTKyaQLApHCj4QIyDGx8ueeRQ0uoIsA+BfCGSkSTIo=" />
            <input type="image" name="ctl00$imgbtnlogout" id="ctl00_imgbtnlogout" src="" border="0" style="position: absolute; visibility: hidden;" />
            
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
                            <a href="promotions" class="main-nav active" style="background-image: url(images/common/icon-promotion.png);">Promotions</a>
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
            
               
                <div class="container bg-dark">
                    <h2>Promotions</h2>
                    
                    <ul id="filterOptions">
                        <li class="active"><a href="#" class="all">All</a></li>
                        <li><a href="#" class="latest">Latest</a></li>
                        <li><a href="#" class="new">New Member</a></li>
                        <li><a href="#" class="deposit">Deposit Bonus</a></li>
                        <li><a href="#" class="rebate">Rebate</a></li>
                        <li><a href="#" class="special">Special</a></li>
                    </ul>
        
                    <div id="ourHolder" class="promo-box">
                    
                    
                        <div class="promo new">
                            <h3><img src="images/en/bnr1.jpg" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member: Welcome 1st Deposit Bonus 30% up to MYR 3,000</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                    <tr>
                                        <th>MINIMUM DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS (%)</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>30%</td>
                                        <td>3000</td>
                                        <td>x15</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away Welcome Bonus 30% for first time deposit of new registered member on our site with minimum deposit MYR100.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieve the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM30</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 30) x 15 = RM1950</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is not applicable for SCR888 and 918kiss.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo new latest">
                            <h3><img src="images/en/bnr2.jpg" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member 2 : Deposit MYR100 get MYR200</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                    <tr>
                                        <th>FIRST DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>x10</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away first deposit bonus of total RM100 when member deposit RM100 to SBDots for the first time.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 100) x 10 = RM2000</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is not applicable for SCR888 and 918kiss.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo deposit">
                            <h3><img src="images/en/bnr4.jpg" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 10% Deposit Bonus</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                    <tr>
                                        <th>DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>10%</td>
                                        <td>RM1000</td>
                                        <td>x5</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away extra 10% deposit bonus to all existing member deposit.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM10</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 10) x 5 = RM550</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is not applicable for SCR888 and 918kiss.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo deposit latest">
                            <h3><img src="images/en/bnr3.jpg" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 3% Deposit Bonus (No Turnover)</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                    <tr>
                                        <th>DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>3%</td>
                                        <td>RM1000</td>
                                        <td>x1</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away extra 3% deposit bonus to all existing member deposit.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM3</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 3) x 1 = RM103</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is not applicable for SCR888 and 918kiss.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo rebate">
                            <h3><img src="images/en/bnr5.jpg" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Rebate: 1% Casino Rebate</h4>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                        <tr>
                                            <th>ROLLOVER</th>
                                            <th>REBATE BONUS (%)</th>
                                            <th>ROLLOVER REQUIREMENT</th>
                                        </tr>
                                        <tr>
                                            <td>10k></td>
                                            <td>1%</td>
                                            <td>x1</td>
                                        </tr>
                                    </table>
                                    
                                    Terms & Conditions:
                                    <ol>
                                        <li>All active members are entitled to 0.5% cash rebate on their total amount wagered in SBdot casino product only.</li>
                                        <li>Every Monday after 12PM (GMT+8) onwards. Member will receive the bonus into their product account within 24 hours.</li> 
                                        <li>Member only can withdraw their bonus after 1x turnover of Bonus.</li> 
                                        <li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this rebate bonus.</li>
                                        <li>Any bet place on two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li> 
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirements are no longer applicable to subsequent deposits (Credits lower than RM10 that mean member has losses the full bonus amount).</li>
                                        <li>This promotion is not applicable for SCR888, 918kiss.</li>
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  	
                                    </ol>
                                </div>						
                            </div>

                            <div class="promo special">
                                <h3><img src="images/en/bnr6.jpg" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Rebate: 1% Sports Rebate</h4>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                        <tr>
                                            <th>ROLLOVER</th>
                                            <th>REBATE BONUS (%)</th>
                                            <th>ROLLOVER REQUIREMENT</th>
                                        </tr>
                                        <tr>
                                            <td>10k></td>
                                            <td>1%</td>
                                            <td>x1</td>
                                        </tr>
                                    </table>
                                    
                                    Terms & Conditions:
                                    <ol>
                                        <li>All active members are entitled to 0.25% cash rebate on their total amount wagered in SBdot sport product only.</li>
                                        <li>Every Monday after 12PM (GMT+8) onwards. Member will receive the bonus into their product account within 24 hours.</li> 
                                        <li>Member only can withdraw their bonus after 1x turnover of Bonus.</li> 
                                        <li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this rebate bonus.</li>
                                        <li>Any bet place on two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li> 
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirements are no longer applicable to subsequent deposits (Credits lower than RM10 that mean member has losses the full bonus amount).</li>
                                        <li>This promotion is not applicable for SCR888, 918kiss.</li>
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  	
                                    </ol>
                                </div>
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
            
        
        <script type="text/javascript">
        //<![CDATA[
        Sys.Application.initialize();
        //]]>
        </script>
        </form>
    
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        $(".promo div").hide();

        $(".promo h3").click(function () {
            $(this).next("div").slideToggle("fast")
		.siblings("p:visible").slideUp("fast");
            $(this).toggleClass("active");
            $(this).siblings("h3").removeClass("active");
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#filterOptions li a').click(function () {
            // fetch the class of the clicked item
            var ourClass = $(this).attr('class');

            // reset the active class on all the buttons
            $('#filterOptions li').removeClass('active');
            // update the active state on our clicked button
            $(this).parent().addClass('active');

            if (ourClass == 'all') {
                // show all our items
                $('#ourHolder').children('div.promo').show();
            }
            else {
                // hide all elements that don't share ourClass
                $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
                // show all elements that do share ourClass
                $('#ourHolder').children('div.' + ourClass).show();
            }
            return false;
        });
    });
</script>
    
@endsection