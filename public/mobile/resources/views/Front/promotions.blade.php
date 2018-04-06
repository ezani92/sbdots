@extends('Front.master')

@section('content')        
        
        <div class="all-elements">

            @include ('Layout.sidebar')
        
            <div id="content" class="page-content">
        
            @include ('Layout.nav')	
                        
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