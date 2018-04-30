@extends ('front.master')

@section('banner')

<div class="banner-p">
    <img src="images/en/banner-promotions.jpg"/>
</div>
    
@endsection

@section('content')

<div class="content" style="background-attachment:fixed;">
	<div class="container">
		<div class="page-content">
			<div class="title-wrap">
				<div class="outer-mask">
					<div class="inner-mask">
						<div class="title-p"><h2>promotions</h2></div>
					</div>
				</div>
			</div>
			<div class="mid-content clearfix">
				<div class="tabs-promo clearfix">
					<ul id="filters" class="nav-tabs">
						<li><span class="filter" data-filter="*">all</span></li>
                        
						<li><span class="filter" data-filter=".latest">latest</span></li>
                        
						<li><span class="filter" data-filter=".new">new member</span></li>
						<li><span class="filter" data-filter=".deposit">deposit bonus</span></li>
						<li><span class="filter" data-filter=".rebate">rebate</span></li>
						<li><span class="filter" data-filter=".special">special</span></li>
						<li><span class="filter" data-filter=".918kiss">918Kiss</span></li>
					</ul>
					
					<!-- hash link -->
					<!-- betasia.net/promotions.html#welcome -->
					
					<div class="tab-content">
						<div class="tab-pane fade in active">
							<div id="portfoliolist">
                            
								<div class="portfolio latest new">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/bnr1.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
													<h4>New Member: Welcome 1<sup>st</sup> Deposit Bonus 30% up to MYR 3,000</h4>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
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
														<li>This promotion is applicable for all GAMES including slots like SCR888, Mega888, Club Suncity, 918Kiss and Other Platform Slots games.</li>
														<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
													</ol>
												</div>
										</div>
									</div>
								</div>
                            
								<div id="slot" class="portfolio latest new">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/bnr2.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
													<h4>New Member 2 : Deposit MYR100 get MYR200</h4>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
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
														<li>This promotion is only applicable for Sportsbook & Live Casino Games.</li>
														<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
													</ol>
												</div>
										</div>
									</div>
								</div>
								<div id="daily-bonus" class="portfolio latest deposit">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/bnr4.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
													<h4>Existing Member: 10% Deposit Bonus</h4>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
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
														<li>This promotion is only applicable for Sportsbook & Live Casino Games.</li>
														<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
													</ol>
												</div>
										</div>
									</div>
								</div>
								<div id="deposit-bonus" class="portfolio latest deposit 918kiss">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/bnr3.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
													<h4>Existing Member: 5% Deposit Bonus</h4>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
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
														<li>This promotion is applicable for all GAMES including slots like SCR888, Mega888, Club Suncity, 918Kiss and Other Platform Slots games.</li>
														<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
													</ol>
												</div>
										</div>
									</div>
								</div>
								<div id="mobile" class="portfolio latest rebate">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/bnr5.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Rebate: 1% Cash Rebates for Sports & Live Casino </h4>
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
													<li>All active members are entitled to 1% cash rebate on their total amount wagered in Sbdot Sportsbook & Live Casino product only.</li>
													<li>Every Monday after 12PM (GMT+8) onwards. Member will receive the bonus into their product account within 24 hours.</li> 
													<li>Member only can withdraw their bonus after 1x turnover of Bonus.</li> 
													<li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this rebate bonus.</li>
													<li>Any bet place on two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li> 
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li> 
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirements are no longer applicable to subsequent deposits (Credits lower than RM10 that mean member has losses the full bonus amount).</li>
													<li>This promotion is only applicable for Sportsbook & Live Casino Games.</li>
													<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  	
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div id="welcome" class="portfolio latest special">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/bnr6.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
													<h4>Special: 10% Extra Winning Bonus</h4>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
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
														<li>This promotion is only applicable for Sportsbook & Live Casino Games.</li> 
														<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  															
													</ol>
												</div>
										</div>
									</div>
								</div>
								<!-- <div id="starter" class="portfolio latest special">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/Main3.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Special: WeChat MYR8 Bonus</h4>
												
												Terms & Conditions:
												<ol>
													<li>All active members that has deposited once will entitled to claim a extra MYR8 bonus only by adding WeChat of SBDots.com</li>
														WeChat ID 1 [SbDot88]<br>
														WeChat ID 2 [SbDots88] 
													<li>Member only can withdraw their bonus after 1x turnover of Bonus.</li>
													<li>This promotion is not allowed for multiple accounts and claimable only once, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li> 
													<li>This promotion is applicable for all products of SBDots.</li> 
													<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  														
												</ol>
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        
<div id="ctl00_UpdateProgress1" style="display:none;">
	
        <div style="background-color: #808080; filter:alpha(opacity=60); opacity:0.60; width: 100%; top: 0px; left: 0px; position: fixed; height: 100%; z-index: 100002 !important;">
        </div>
          <div style="xpadding: 5px; margin: auto; filter: alpha(opacity=100); opacity: 1;
              vertical-align: middle; top: 45%; position: fixed; right: 50%; z-index: 100003 !important;
              text-align: center; xheight: 31px; xwidth: 31px; background-color: #000000; border-radius: 8px;">
              <img src="images/ajax-loader.gif" alt="Loading" style="width: 60px; height: 60px; padding: 10px;"/>
        </div>
    
</div>

@endsection

@section('script')

<script type="text/javascript">
    /*
    $(function () {
    var offset = $("#sidebar").offset();
    var topPadding = 15;
    $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
    $("#sidebar").stop().animate({
    marginTop: $(window).scrollTop() - offset.top + topPadding
    });
    } else {
    $("#sidebar").stop().animate({
    marginTop: 0
    });
    };
    });
    });
    */
    $(function () {
        var offset = $("#sidebar-2").offset();
        var topPadding = 15;
        $(window).scroll(function () {
            if ($(window).scrollTop() > offset.top) {
                $("#sidebar-2").stop().animate({
                    marginTop: $(window).scrollTop() - offset.top + topPadding
                });
            } else {
                $("#sidebar-2").stop().animate({
                    marginTop: 0
                });
            };
        });
    });
</script>

<script type="text/javascript" src="js/promotions/jquery.mixitup.min.js"></script>
<script type="text/javascript">
    $(function () {
        var filterList = {
            init: function () {
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '*'
                    }
                });
            }
        };
        filterList.init();
    });	
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".promo-content").hide();
        $(".promo-button").show();
        $('.promo-button').click(function () {
            // $(".promo-content").slideToggle();
            $(this).parent().parent().find(".promo-content").slideToggle();
        });
    });
    /* $('.promo-button').click(function () {
        if ($(this).text() === 'LESS INFO') {
            $(this).text('MORE INFO');
        }
        else {
            $(this).text('LESS INFO');
        }
    }); */
</script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        var url = jQuery(location).attr('href');
        var hash = url.substring(url.indexOf('#') + 1);
        if (hash == 'deposit') {
            jQuery('#deposit .promo-content').show();
            $('#deposit .promo-button').text('LESS INFO');
        }
        else if (hash == 'slot') {
            jQuery('#slot .promo-content').show();
            $('#slot .promo-button').text('LESS INFO');
        }
        else if (hash == 'daily-bonus') {
            jQuery('#daily-bonus .promo-content').show();
            $('#daily-bonus .promo-button').text('LESS INFO');
        }
        else if (hash == 'deposit-bonus') {
            jQuery('#deposit-bonus .promo-content').show();
            $('#deposit-bonus .promo-button').text('LESS INFO');
        }
        else if (hash == 'mobile') {
            jQuery('#mobile .promo-content').show();
            $('#mobile .promo-button').text('LESS INFO');
        }
        else if (hash == 'welcome') {
            jQuery('#welcome .promo-content').show();
            $('#welcome .promo-button').text('LESS INFO');
        }
        else if (hash == 'starter') {
            jQuery('#starter .promo-content').show();
            $('#starter .promo-button').text('LESS INFO');
        }
        else {
            $(".promo-content").hide();
        }
    });
</script>

    
@endsection
