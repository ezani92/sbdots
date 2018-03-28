@extends ('front.master')

@section('banner')

<div class="banner-p">
    <img src="images/en/banner-promotions.jpg"/>
</div>
    
@endsection

@section('content')

<div class="content">
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
						<li><span class="filter" data-filter=".slots">slots</span></li>
						<li><span class="filter" data-filter=".sportsbook">sportsbook</span></li>
						<li><span class="filter" data-filter=".special">special</span></li>
					</ul>
					
					<!-- hash link -->
					<!-- betasia.net/promotions.html#welcome -->
					
					<div class="tab-content">
						<div class="tab-pane fade in active">
							<div id="portfoliolist">
                            
								<div id="cny-2018" class="portfolio latest">
									<div class="promo-item">
										<div><img src="images/en/promotion-cny-2018.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>CHINESE NEW YEAR SPECIAL – Daily 8% Extra First Daily Deposit Bonus!</h4>
                                                <br />
<p>Promotion Period from 12:00AM (GMT+8) 16th February 2018 to 11:59PM (GMT+8) 2th March 2018.</p>
												Rules of Game:
												<ol>
<li>This promotion can be claim 1 time per day</li>
<li>This bonus is valid for all products in BetAsia.net except SCR888 & Poker.</li>
<li>This promotion is valid to be claimed with extra 8% daily first deposit bonus.</li>
<li>Minimum deposit of MYR 30 </li>
<li>Maximum bonus is MYR 168.</li>
<li>20x times rollover required to withdraw winnings.<br /><br />
For example<br />
Deposit = MYR 100<br />
Bonus = 20%+8% x MYR 28<br />
Rollover required = (MYR 100 + MYR 28) x 20 times = MYR 2,560<br /><br /></li>
<li>This promotion is not valid for SCR888 & Poker.</li>
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
                            
								<div id="slot" class="portfolio slots deposit">
									<div class="promo-item">
										<div><img src="images/en/promotions-02.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>10% Unlimited Slot Bonus</h4>
												<p>BetAsia is offering 10% Slot Bonus with no limit & 1x Turnover at SCR888 & ClubSun city Now!</p>
												<p>Promotion Period from 12:01AM (GMT+8) 1st January 2018 to 11:59AM (GMT+8) 31st December 2018</p>
												Rules of Game:
												<ol>
													<li>This Bonus is valid for SCR888 &amp; ClubSunCity Products in Betasia.net only.</li>
													<li>Minimum deposit of MYR 30.</li>
													<li>1x time rollover required to withdraw winnings. <br>
														<br>
														For example <br>
														First Deposit = MYR 30 <br>
														Bonus = 10% x MYR 30 = MYR 3 <br>
														Rollover required = (MYR 30 + MYR 3) x 1 times = MYR 33<br>
														<br>
													</li>
													<li>Bonus cannot be transferred to other products in BetAsia.net</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="daily-bonus" class="portfolio deposit">
									<div class="promo-item">
										<div><img src="images/en/promotions-03.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>20% First Daily Deposit Bonus</h4>
												<p>20% FIRST DAILY DEPOSIT BONUS UP TO MYR 168</p>
												<p>We offer you 20% First Deposit Bonus up to MYR 168!</p>
												<p>Promotion Period from 12:00AM (GMT+8) 1st January 2018 to 11:59PM (GMT+8) 31st December 2018.</p>
												Rules of Game:
												<ol>
													<li>This bonus is valid for all products in BetAsia.net</li>
													<li>Minimum deposit of MYR 30.</li>
													<li>Maximum bonus is MYR 168.</li>
													<li>20x times rollover required to withdraw winnings.<br>
														For example<br>
														First Deposit = MYR 840<br>
														Bonus = 20% x MYR 840<br>
														Rollover required = (MYR 840 + MYR 168) x 20 times = MYR 20160 </li>
													<li>This promotion is not valid for SCR888 &amp; Poker.</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="deposit-bonus" class="portfolio deposit">
									<div class="promo-item">
										<div><img src="images/en/promotions-04.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>2% Unlimited Deposit Bonus</h4>
												<p>We offer you UNLIMITED 2% Deposit bonus with 1x Rollover Only!</p>
												<p>Promotion Period valid till 11:59AM (GMT+8) 31st December 2018.</p>
												Rules of Game:
												<ol>
													<li>This Bonus are valid for all Products in Betasia.net</li>
													<li>Minimum deposit of MYR 30.</li>
													<li>1x time rollover required to withdraw winnings. <br>
														For example<br>
														First Deposit = MYR 100 <br>
														Bonus = 2% x MYR 100 = MYR 2 <br>
														Rollover required = (MYR 100 + MYR 2) x 1 times = MYR 102
													</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="mobile" class="portfolio special">
									<div class="promo-item">
										<div><img src="images/en/promotions-05.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>MYR 8 Bonus For Mobile Betting</h4>
												<p>Bet in our mobile app at least once and get MYR8 Bonus. As simple as that!</p>
												Rules of Game:
												<ol>
													<li>This promotion is valid until 11:59PM 31 December 2018.</li>
													<li>This promotion is valid for all BetAsia players who deposited before.</li>
													<li>Each player is only allowed to claim ONCE for this promotion. </li>
													<li>2x times rollover required to withdraw winnings.</li>
													<li>Valid on Joker Mobile App, ClubSunCity Mobile App, SCR888 Mobile App, 12Win Android app, Calibet iOS app, WinningFT iOS/Android mobile app only.</li>
													<li>Contact our customer care representatives after you had bet at least one time in the mobile app.</li>
													<li>BetAsia reserves the right to alter or terminate this promotion at anytime without prior notice.</li>
													<li>General BetAsia Terms &amp; Conditions apply</li>												
												</ol>
											<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="welcome" class="portfolio new">
									<div class="promo-item">
										<div><img src="images/en/promotions-06.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>The Great 300% Welcome Bonus Package up to MYR2100</h4>
												<p>Calling all new players of Betasia.net – You are in for a massive treat! </p>
												<p>Betasia.net is giving every new player a generous welcome bonus amounting to MYR2100 as a token of appreciation for choosing us as your preferred online casino website.</p>
												<p>This is how it works:</p>
												
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>&nbsp;</th>
														<th>Welcome Bonus Entitlement</th>
														<th>Maximum Pay Out</th>
													</tr>
													<tr>
														<td>1st Deposit</td>
														<td>100%</td>
														<td>MYR 600</td>
													</tr>
													<tr>
														<td>2nd Deposit</td>
														<td>100%</td>
														<td>MYR 700</td>
													</tr>
													<tr>
														<td>3rd Deposit</td>
														<td>100%</td>
														<td>MYR 800</td>
													</tr>
												</table>
												
												<p>Example:</p>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>&nbsp;</th>
														<th>Deposited Amount</th>
														<th>Claimable Bonus</th>
														<th>Total Amount Received</th>
													</tr>
													<tr>
														<td>1st Deposit</td>
														<td>MYR 500</td>
														<td>MYR 500</td>
														<td>MYR 1000</td>
													</tr>
													<tr>
														<td>2nd Deposit</td>
														<td>MYR 600</td>
														<td>MYR 600</td>
														<td>MYR 1200</td>
													</tr>
													<tr>
														<td>3rd Deposit</td>
														<td>MYR 700</td>
														<td>MYR 700</td>
														<td>MYR 1400</td>
													</tr>
													<tr>
														<td>Total</td>
														<td>MYR 1800</td>
														<td>MYR 1800</td>
														<td>MYR 3600</td>
													</tr>
												</table>												
												Rules of Game:
												<ol>
													<li>This promotion opens for All New Players have to make a minimum deposit of MYR 30.</li>
													<li>Players will only be eligible to make withdrawal after achieving 28 times rollover of their  deposited amount and bonus.</li>
													<li>Only LIVE CASINOS and SPORTSBOOKS contribute to the total rollover.</li>
													<li>Contact our customer care representatives after you had made your deposit.</li>
													<li>BetAsia reserves the right to alter or terminate this promotion at anytime without prior notice.</li>
													<li>This promotion is not valid for SCR888 &amp; Poker.</li>
													<li>General BetAsia Terms &amp; Conditions apply.</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="starter" class="portfolio new">
									<div class="promo-item">
										<div><img src="images/en/promotions-07.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>No-Fuss Starter Pack</h4>
												<p>Good news to every new member of Betasia.net! We want to thank you for playing with us, and as a reward, we have come up with the No-Fuss Starter Pack promotion just for you! You are only required to make three initial deposits to be entitled to free bonuses with a low rollover requirement.</p>
												<p>Make a total deposit of MYR300 to get bonus worth MYR180. The breakdown is as follow:</p>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>&nbsp;</th>
														<th>Deposited Amount</th>
														<th>Claimable Bonus</th>
														<th>Rollover Requirement</th>
														<th>Total Amount Received</th>
													</tr>
													<tr>
														<td>1st Deposit</td>
														<td>MYR 100</td>
														<td>MYR 50</td>
														<td>5x</td>
														<td>MYR 150</td>
													</tr>
													<tr>
														<td>2nd Deposit</td>
														<td>MYR 100</td>
														<td>MYR 60</td>
														<td>8x</td>
														<td>MYR 160</td>
													</tr>
													<tr>
														<td>3rd Deposit</td>
														<td>MYR 100</td>
														<td>MYR 70</td>
														<td>10x</td>
														<td>MYR 170</td>
													</tr>
													<tr>
														<td>Total</td>
														<td>MYR 300</td>
														<td>MYR 180</td>
														<td>&nbsp;</td>
														<td>MYR 480</td>
													</tr>
												</table>
												
												Rules of Game:
												<ol>
													<li>This promotion opens for All New Players have to make a minimum deposit of MYR 100.</li>
													<li>Players will only be eligible to make withdrawal every rollover requirement of their rollover of their deposited amount and bonus is fulfilled.</li>
													<li>Only LIVE CASINOS and SPORTSBOOKS contribute to the total rollover.</li>
													<li>Contact our customer care representatives after you had made your deposit.</li>
													<li>BetAsia reserves the right to alter or terminate this promotion at anytime without prior notice.</li>
													<li>This promotion is not valid for SCR888 &amp; Poker.</li>
													<li>General BetAsia Terms &amp; Conditions apply.</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="luckydraw" class="portfolio special">
									<div class="promo-item">
										<div><img src="images/en/promotions-08.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>BetAsia Lucky Draw!</h4>
												<p>Betasia.net is back with more attractive promotions, just because we value our players! For each week starting from now, 10 players can stand a chance to get a free MYR50 bonus, simply by making a minimum deposit of MYR30 on Betasia.net.</p>
												Rules of Game:
												<ol>
													<li>This contest will be available from 1st January to 31st December 2018</li>
													<li>Players with a minimum weekly deposit of MYR30 will be eligible for this contest.</li>
													<li>Weekly winners will be announced on each week via Betasia.net website, Facebook page and blog. </li>
													<li>Bonus is subjected to a 2 times rollover wagering requirement before any withdrawal can be made.</li>
													<li>This contest is open to all Betasia.net registered member. </li>
													<li>Players will receive 1 entry for every successful deposit made on Betasia.net. The higher the number of entries, the higher chance to win the weekly RM50 bonus.</li>
													<li>Betasia.net reserves the right to cancel this contest at any time, either for all players or individual player.</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="redeposit" class="portfolio deposit">
									<div class="promo-item">
										<div><img src="images/en/promotions-09.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>unlimited joy! 10% re-deposit bonus for all products!</h4>
												<p>We offer you LIMITLESS 10% Re-deposit bonus!</p>
												<p>Promotion Period from 12:00PM (GMT+8) 1st January 2018 to 11:59AM (GMT+8) 31st December 2018</p>
												Rules of Game:
												<ol>
													<li>This Bonus are valid for all Products in Betasia.net</li>
													<li>Minimum deposit of MYR 30.</li>
													<li>10x times rollover required to withdraw winnings.</li>
													<li>For example <br>
														First Deposit = MYR 30 <br>
														Bonus = 10% x MYR 30 = MYR 3 <br>
														Rollover required = (MYR 30 + MYR 3) x 10 times = MYR 330</li>
													<li>Bonus cannot be transferred to casino before rollover requirement is reached.</li>
													<li>This Bonus are valid for all Products except SCR888 &amp; Poker in Betasia.net</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
								<div id="cashback" class="portfolio special sportsbook">
									<div class="promo-item">
										<div><img src="images/en/promotions-10.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-title-row">
												<div class="promo-button btn-more">MORE INFO</div>
											</div>
											<div class="promo-content">
												<h4>the more you bet, the more you’ll get!</h4>
												<p>Whenever you placed a successful bet, you will get rebates from us up to 0.5% without limits.</p>
												Rules of Game:
												<ol>
													<li>Promotion applies to all Betasia.net players.</li>
													<li>Up to 0.5% cash rebates will automatically credit into players balance in every successful bet. </li>
													<li>Minimum cash rebates amount is MYR 10, and no maximum limit.</li>
													<li>This promotion is not valid for SCR88 &amp; Poker.</li>												
												</ol>
												<p>For more information, please contact our Friendly Customer Care Support</p>
											</div>
										</div>
									</div>
								</div>
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
            $(this).parent().parent().parent().find(".promo-content").slideToggle();
        });
    });
    $('.promo-button').click(function () {
        if ($(this).text() === 'LESS INFO') {
            $(this).text('MORE INFO');
        }
        else {
            $(this).text('LESS INFO');
        }
    });
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
        else if (hash == 'luckydraw') {
            jQuery('#luckydraw .promo-content').show();
            $('#luckydraw .promo-button').text('LESS INFO');
        }
        else if (hash == 'redeposit') {
            jQuery('#redeposit .promo-content').show();
            $('#redeposit .promo-button').text('LESS INFO');
        }
        else if (hash == 'cashback') {
            jQuery('#cashback .promo-content').show();
            $('#cashback .promo-button').text('LESS INFO');
        }
        else {
            $(".promo-content").hide();
        }
    });
</script>

    
@endsection
