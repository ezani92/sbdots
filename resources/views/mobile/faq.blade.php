@extends('mobile.master')

@section('content')        

        <div class="all-elements">

            @include ('mobile.sidebar')
        
            <div id="content" class="page-content">
        
            @include ('mobile.nav')	
                        
            <div>
                <div id="ctl00_UpdatePanel1">
            
               
                <div class="container bg-dark">
                    <h2>FAQs</h2>
                    
                    <ol>
                            <li class="main-faq"><h4>How to make deposit?</h4>
                                <ol type="a">
                                    <li>You need to register at homepage under &ldquo;registration&rdquo; button as our member first</li>
                                </ol>
                            </li>
                            <li class="main-faq"><h4>How to reset password if I forget my password?</h4>
                                <ol type="a">
                                    <li>You can kindly submit the button of reset password and claims your new password via registered email</li>
                                </ol>
                            </li>
                            <li class="main-faq"><h4>What banking does Sbdot support?</h4>
                                <ol type="a">
                                    <li>Sbdot support varieties of Malaysian Banking including Maybank, CIMB Bank, HLB Bank, Public Bank</li>
                                </ol>
                            </li>
                            <li class="main-faq"><h4>Can I cancel my bet?</h4>
                                <ol type="a">
                                    <li>We are sorry to say that once we have accepted your bet, we will not allow any cancellation on that bet according
                                        to our rules &amp; regulation.</li>
                                </ol>
                            </li>
                            <li class="main-faq"><h4>What is the max bet for each stakes?</h4>
                                <ol type="a">
                                    <li>Every games will have different max stakes according to member level. Please contact our Customer Supports if
                                        you wish to increase your bet limits per stake and see if you are eligible to increase.</li>
                                </ol>
                            </li>
                            <li class="main-faq"><h4>How do I become VIP in Sbdot?</h4>
                                <ol type="a">
                                    <li style="margin-bottom:12px;">To become different level of VIP in Sbdot, you will need to achieve a min. of deposit and active as below table</li>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                        <tbody>
                                            <tr>
                                                <th>VIP Level</th>
                                                <th>Deposit Amount Required in (1) One Year </th>
                                            </tr>
                                            <tr>
                                                <td>Silver</td>
                                                <td>Upon Registration</td>
                                            </tr>
                                            <tr>
                                                <td>Gold</td>
                                                <td>RM30,000</td>
                                            </tr>
                                            <tr>
                                                <td>Platinum</td>
                                                <td>RM100,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </ol>
                            </li>
                        </ol>

                </div>
                
        
                
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