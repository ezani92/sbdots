@extends('mobile.master')

@section('content')        
        
        <div class="all-elements">

            @include ('mobile.sidebar')
        
            <div id="content" class="page-content">
        
            @include ('mobile.nav')	
                        
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
                        <li><a href="#" class="918kiss">918Kiss</a></li>
                    </ul>
        
                    <div id="ourHolder" class="promo-box">
                    
                    
                        <div class="promo new">
                            <h3><img src="{{ asset('mobile/images/en/bnr1.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member: Welcome 1<sup>st</sup> Deposit Bonus 30% up to MYR 3,000</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. FIRST DEPOSIT AMOUNT (RM) </th>
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
                                    <li>This promotion is not applicable for SCR888 and 918kiss and Mega888.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo new latest">
                            <h3><img src="{{ asset('mobile/images/en/bnr2.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member 2 : Deposit MYR100 get MYR200</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. FIRST DEPOSIT AMOUNT (RM) </th>
                                        <th>MAX BONUS (RM)</th>
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
                                    <li>This promotion is not applicable for SCR888 and 918kiss and Mega888.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo deposit">
                            <h3><img src="{{ asset('mobile/images/en/bnr4.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 10% Deposit Bonus</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
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
                                    <li>This promotion is not applicable for SCR888 and 918kiss and Mega888.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo deposit latest">
                            <h3><img src="{{ asset('mobile/images/en/bnr3.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 5% Deposit Bonus</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>5%</td>
                                        <td>RM1000</td>
                                        <td>x2</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away extra 5% deposit bonus to all existing member deposit.</li>
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
                                                    <td>RM5</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 5) x 2 = RM210</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is not applicable for SCR888, 918kiss and Mega888.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo rebate">
                            <h3><img src="{{ asset('mobile/images/en/bnr5.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Rebate: 1% Cash Rebates for Sports & Live Casino </h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
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
                                    <li>All active members are entitled to 1% cash rebate on their total amount wagered in Sbdot Sportsbook & Live Casino product only.</li>
                                    <li>Every Monday after 12PM (GMT+8) onwards. Member will receive the bonus into their product account within 24 hours.</li> 
                                    <li>Member only can withdraw their bonus after 1x turnover of Bonus.</li> 
                                    <li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this rebate bonus.</li>
                                    <li>Any bet place on two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li> 
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li> 
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirements are no longer applicable to subsequent deposits (Credits lower than RM10 that mean member has losses the full bonus amount).</li>
                                    <li>This promotion is not applicable for SCR888, 918kiss and Mega888.</li>
                                    <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  	
                                </ol>
                                </div>						
                            </div>

                            <div class="promo special 918kiss">
                                <h3><img src="{{ asset('mobile/images/en/bnr6.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Special: 10% Extra Winning Bonus</h4>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                        <tr>
                                            <th>REQUIREMENT</th>
                                            <th>BONUS AMOUNT (%)</th>
                                        </tr>
                                        <tr>
                                            <td>5 times of Deposit amount + Bonus Amount</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>10 times of Deposit amount + Bonus Amount</td>
                                            <td>10%</td>
                                        </tr>
                                    </table>
                                    
                                    Terms & Conditions:
                                    <ol>
                                        <li>All members are that taken 5% deposit bonus are entitled for this special bonus. If members are able to win up to 5 times of the deposit amount, they will be eligible to receive extra 5% winning bonus during their withdrawal. If members are able to win up to 10 times of their deposit amount, they will eligible to receive extra 10% winning bonus during withdrawal.</li>
                                        <li>Example: 
                                            <ol type="a">
                                                <li>Deposit = RM500</li> 
                                                <li>Bonus taken = 5% daily deposit</li> 
                                                <li>Total Winning Withdrawal = (RM500 + RM25) x 10 times = RM5,250</li> 
                                                <li>Extra Bonus = RM525</li> 
                                            </ol>
                                        </li>
                                        <li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus (except for 5% deposit bonus) within the transactions, they will not be entitled to claim this special bonus.</li>
                                        <li>Any bet place on two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirements are no longer applicable to subsequent deposits (Credits lower than RM10 that mean member has losses the full bonus amount).</li>
                                        <li>This promotion is not applicable for SCR888, 918kiss and Mega888.</li> 
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
                        <img src="{{ asset('mobile/images/ajax-loader.gif') }}" alt="Loading" border="1" />
                    </div>
            
        </div>
            </div>
        
            @include ('mobile.footer')
                            
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