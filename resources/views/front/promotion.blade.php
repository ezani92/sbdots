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
						<li><span class="filter" data-filter=".worldcup">World Cup</span></li>
						<li><span class="filter" data-filter=".new">new member</span></li>
						<li><span class="filter" data-filter=".deposit">deposit bonus</span></li>
						<li><span class="filter" data-filter=".rebate">rebate</span></li>
						<li><span class="filter" data-filter=".special">special</span></li>
						<li><span class="filter" data-filter=".slot">Slots</span></li>
					</ul>
					
					<!-- hash link -->
					<!-- betasia.net/promotions.html#welcome -->
					
					<div class="tab-content">
						<div class="tab-pane fade in active">
							<div id="portfoliolist">
                            
								<div class="portfolio latest new slot">
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
								<div class="portfolio latest new slot">
									<div class="promo-item">
										<!-- Change Banner -->
										<div class="promo-button"><img src="images/en/new_member_30_get_90_slot_bonus.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>New Member for SLOTS: Deposit MYR30 get MYR90</h4>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>First Deposit Amount (RM)</th>
														<th>Total Bonus & Deposit Amount (RM)</th>
														<th>Winning Requirement</th>
														<th>Max Withdrawal (RM)</th>
													</tr>
													<tr>
														<td>30</td>
														<td>90</td>
														<td>5x</td>
														<td>500</td>
													</tr>
												</table>
												
												Terms & Conditions:
												<ol>
													<li>Sbdot will be giving away total RM90 for their new registered member that have deposited RM30 for slots only.</li>
													<li>
														Member only can withdraw their deposit bonus after achieving the required winning amount of deposit & bonus: 
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
																<tr>
																	<th rowspan="3">Example</th>
																	<td>Deposit</td>
																	<td>RM30</td>
																</tr>
																<tr>
																	<td>Deposit & Bonus</td>
																	<td>RM90</td>
																</tr>
																<tr>
																	<td>Winning Requirement</td>
																	<td>(30 + 60) x 5 = RM450</td>
																</tr>
															</table>
													</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
													<li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
													<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>																									
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div id="deposit-bonus" class="portfolio latest deposit">
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
															<td>x5</td>
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
																		<td>(100 + 5) x 5 = RM525</td>
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

								<div id="deposit-bonus" class="portfolio latest deposit slot">
									<div class="promo-item">
										<!-- Change Banner -->
										<div class="promo-button"><img src="images/en/5_slots_deposit_bonus.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member: 5% Deposit Bonus for Slots</h4>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>MIN. DEPOSIT AMOUNT (RM) </th>
														<th>BONUS</th>
														<th>MAXIMUM BONUS (RM)</th>
														<th>WINNING REQUIREMENT</th>
													</tr>
													<tr>
														<td>30</td>
														<td>5%</td>
														<td>N/A</td>
														<td>x2</td>
													</tr>
												</table>
												
												Terms & Conditions:
												<ol>
													<li>Sbdot will be giving away extra 5% deposit bonus to their existing member deposit for slot games only.</li>
													<li>
														Member only can withdraw their deposit bonus after achieving the required winning of deposit amount and bonus:
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
																<td>Winning Requirement </td>
																<td>(100 + 5) x 2 = RM210</td>
															</tr>
														</table>
													</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
													<li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
													<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>																							
												</ol>
											</div>
										</div>
									</div>
								</div>

								<div id="deposit-bonus" class="portfolio latest deposit slot">
									<div class="promo-item">
										<!-- Change Banner -->
										<div class="promo-button"><img src="images/en/existing_member_10_slot.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member: 10% Deposit Bonus for Slots</h4>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>MIN. DEPOSIT AMOUNT (RM) </th>
														<th>BONUS</th>
														<th>MAXIMUM BONUS (RM)</th>
														<th>WINNING REQUIREMENT</th>
													</tr>
													<tr>
														<td>30</td>
														<td>10%</td>
														<td>N/A</td>
														<td>x3</td>
													</tr>
												</table>
												
												Terms & Conditions:
												<ol>
													<li>Sbdot will be giving away extra 10% deposit bonus to their existing member deposit for slot games only.</li>
													<li>
														Member only can withdraw their deposit bonus after achieving the required winning of deposit amount and bonus:
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
																<td>Winning Requirement </td>
																<td>(100 + 10) x 3 = RM330</td>
															</tr>
														</table>
													</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
													<li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
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
													<li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this rebate.</li>
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

								<div id="starter" class="portfolio latest worldcup">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/wc-1.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member (World Cup Edition): World Cup Champion Guessing Bonus up to 1,288!</h4>
												
												Terms & Conditions:
												<ol>
													<li>Promotion Periods: 16/05/2018 – 13/06/2018</li>
													<li>During the promotion periods (15/05 – 12/06), Members are entitled to submit one (1) guessing on the champion team they predict, but with a min. deposit of at least 15 times & min. of RM3,000 during the promotion periods and prizes amount as below table:
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
															<tr>
																<th>Min. Accumulated Deposit Amount during the periods</th>
																<th>Prizes Rewards if successful predict the Champion Team</th>
																<th>Turnover Requirement of the bonus </th>
															</tr>
															<tr>
																<td>RM 3,000</td>
																<td>188</td>
																<td>1x</td>
															</tr>
															<tr>
																<td>RM 15,000</td>
																<td>388</td>
																<td>1x</td>
															</tr>
															<tr>
																<td>RM 50,000</td>
																<td>1288</td>
																<td>1x</td>
															</tr>
														</table>
													</li>
													<li>Example Scenario (A):
														<ul style="list-style-type: lower-alpha;">
															<li>Player (A) has guess the champion team (England) to be the champion of the this World Cup Fifa 2018 and also successfully deposit 15 times during the periods 16/05 – 12/06, and the total accumulated deposit amount is RM15,000</li>
															<li>On the July 15, 2018 when the Champion team is England, player (A) will be rewarded with a RM688 free bonus on his preferred product account and subjected to only 1 times turnover requirement.</li>																
														</ul>
													</li> 
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li> 
													<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  														
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div id="starter" class="portfolio latest worldcup">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/wc-2.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member(World Cup Edition): 25% Sportsbook Deposit Bonus (WORLD CUP MATCHES ONLY)</h4>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>MIN. DEPOSIT AMOUNT (RM) </th>
														<th>BONUS</th>
														<th>MAXIMUM BONUS (RM)</th>
														<th>ROLLOVER REQUIREMENT</th>
													</tr>
													<tr>
														<td>100</td>
														<td>25%</td>
														<td>500</td>
														<td>x12</td>
													</tr>
												</table>
												
												Terms & Conditions:
												<ol>
													<li>SBdots will be giving away extra 25% deposit bonus to all existing member deposit.</li>
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
																	<td>RM25</td>
																</tr>
																<tr>
																	<td>Rollover Requirement </td>
																	<td>(100 + 25) x 12 = RM1500</td>
																</tr>
															</table>
													</li>
													<li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
													<li>This promotion is applicable for Sportsbook betting (World Cup Matches Only)</li>
													<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div id="starter" class="portfolio latest worldcup">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/wc-3.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member(World Cup Edition): Deposit, Choose & Win up to RM288 Daily!</h4>
												
												Terms & Conditions:
												<ol>
													<li>Promotion Periods: 14/06/2018 – 15/07/2018</li>
													<li>During the promotion periods, Members who’ve successfully deposit are able to pick a winning team on the matches for the following (1) day.
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
															<tr>
																<th>Deposit Amount (per transactions)</th>
																<th>Prizes Rewards if won</th>
																<th>Turnover Requirement of the bonus</th>
															</tr>
															<tr>
																<td>RM 100 - RM 999</td>
																<td>18</td>
																<td>1x</td>
															</tr>
															<tr>
																<td>RM 1,000 - RM 4,999</td>
																<td>38</td>
																<td>1x</td>
															</tr>
															<tr>
																<td>RM 5,000 and above</td>
																<td>288</td>
																<td>1x</td>
															</tr>
														</table>
													</li>
													<li>Example Scenario (A):
														<ul style="list-style-type: lower-alpha;">
															<li>Player (A) has deposited an amount of RM 500 on 15/06/2018, player (A) will be entitled to guess for a matches he predict within the day or next day itself (matches must be min. 5 hours from the deposit time)</li>
															<li>Player (A) team guessing are correct, player (A) will received extra RM18 on the deposited product account subjected to only 1 times turnover requirement.</li>																															
														</ul>
													</li> 
													<li>Members are only entitled to 1 guess of team per day only.</li> 
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li>  	
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
														<li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this special bonus.</li>
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

								<div id="starter" class="portfolio special latest">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/monthly-free-bonus.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member: MONTHLY FREE BONUS</h4>
												
												Terms & Conditions:
												<ol>
													<li>Each existing members of sbdot can claim FREE BONUS during the 1st of every each month. Total deposit on the previous month will be take into the calculation of the bonus given.
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
															<tr>
																<th>Total Deposit Month (RM)</th>
																<th>Bonus</th>
																<th>Rollover</th>
															</tr>
															<tr>
																<td>RM 20,000 - RM 39,999</td>
																<td>188</td>
																<td>5x</td>
															</tr>
															<tr>
																<td>RM 40,000 - RM 59,999</td>
																<td>388</td>
																<td>6x</td>
															</tr>
															<tr>
																<td>RM 60,000 - RM 79,999</td>
																<td>588</td>
																<td>8x</td>
															</tr>
															<tr>
																<td>RM 80,000 or Above</td>
																<td>888</td>
																<td>10x</td>
															</tr>
														</table>
													</li>
													<li>Amount of free bonus is according to your total deposit amount during the previous month, as shown in table above.</li>
													<li>Rollover must be met before withdrawals can be processed.
														<ul style="list-style-type: lower-alpha;">
															<li>Example: FREE BONUS RM88</li>
															<li>Rollover: RM88 x 5 = 440</li>																															
														</ul>
													</li> 
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li> 
													<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>												
												</ol>
											</div>
										</div>
									</div>
								</div>

								<div id="starter" class="portfolio special latest">
									<div class="promo-item">
										<!-- Change Banner -->
										<div class="promo-button"><img src="images/en/7_days_attendances_bonus.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member: Perfect Attendance Bonus up to 7 days</h4>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
													<tr>
														<th>Attendances Day (RM)</th>
														<th>Total Accu. Deposit (RM)</th>
														<th>Bonus (RM)</th>
														<th>Turnover Requirement</th>
													</tr>
													<tr>
														<td>3</td>
														<td>300</td>
														<td>10</td>
														<td>x1</td>
													</tr>
													<tr>
														<td>4</td>
														<td>500</td>
														<td>28</td>
														<td>x1</td>
													</tr>
													<tr>
														<td>5</td>
														<td>800</td>
														<td>58</td>
														<td>x3</td>
													</tr>
													<tr>
														<td>6</td>
														<td>1200</td>
														<td>88</td>
														<td>x5</td>
													</tr>
													<tr>
														<td>7</td>
														<td>1600</td>
														<td>118</td>
														<td>x7</td>
													</tr>
												</table>

												Terms & Conditions:
												<ol>
													<li>To claim the perfect attendance bonus, member must make deposits to their player accounts for a minimum of 3 consecutive days (up to 7 consecutive days) as refer to table above.</li>
													<li>This promotion will be able to claim once per week.</li>
													<li>This promotion will be automatically credit into members account. If member did not receive the bonus, simply just notified the customer services via the livechat, whatsapp or wechat to redeem the bonus.</li>
													<li>Accumulated Deposit will be reset on every Monday and start from 0 again.</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
													<li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
													<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>														
												</ol>
											</div>
										</div>
									</div>
								</div>

								<div id="starter" class="portfolio special latest">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/baccarat-winning-streak.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Baccarat Winning Streak Bonus</h4>
												
												Terms & Conditions:
												<ol>
													<li>Each existing members of Sbdot are allowed to claim an additional special bonus if they make a streak win during the gameplay of our baccarat game.
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
															<tr>
																<th>Total Win Streak /Day</th>
																<th>Bonus Percentage</th>
																<th>Max Bonus (RM)</th>
															</tr>
															<tr>
																<td>4 – 7 games</td>
																<td>10%</td>
																<td>188</td>
															</tr>
															<tr>
																<td>8 – 9 games</td>
																<td>20%</td>
																<td>288</td>
															</tr>
															<tr>
																<td>10 – 11 games</td>
																<td>40%</td>
																<td>488</td>
															</tr>
															<tr>
																<td>12 games & above</td>
																<td>60%</td>
																<td>888</td>
															</tr>
														</table>
													</li>
													<li>The bonus percentage will be calculated based on the min. bet of the winning streak.</li>
													<li>For example:
														<ul style="list-style-type: lower-alpha;">
															<li>1<sup>st</sup> game bet rm100, <sup>2nd</sup> game bet rm150, <sup>3rd</sup> game bet rm100, <sup>4th</sup> game bet rm400</li>
															<li>Then, the baccarat player are able to claim a bonus of (RM100 * 4 games) * 10% = RM40</li>																															
														</ul>
													</li> 
													<li>Player must be in the same table and same platform during the winning streak, tie is not included.</li> 
													<li>Member are only able to claim once (1) per day.</li>
													<li>Min. bet to be entitled is RM20 per stake.</li>
													<li>This promotion is not able to claim along with other bonus.</li>
													<li>Member can redeem the bonus via our livechat, wechat, whatsapp within 24 hours.</li>
													<li>Sbdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li>
													<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>										
												</ol>
											</div>
										</div>
									</div>
								</div>

								<div id="starter" class="portfolio special latest">
									<div class="promo-item">
										<!-- Change Banner -->
										<div class="promo-button"><img src="images/en/refer_friend_bonus_rm20.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>Existing Member: Refer Friend Bonus RM20</h4>
												
												Terms & Conditions:
												<ol>
													<li>To claim the refer friend bonus, your introduced friend must deposit an amount of MYR200, excluding the 1st deposit amount and turnover is subjected to x8. Your friend must notify our customer service support by email or livechat with your game username or email. The bonus credit will be credited into your account once the requirement above is met.</li>
													<li>Example, once your friend has deposited an amount of RM200, RM20 will be credited into your account and subjected to x8 turnover.</li>
													<li>Bonus amount is valid for 10 days.</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
													<li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
													<li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
												</ol>
											</div>
										</div>
									</div>
								</div>

								<div id="starter" class="portfolio special latest">
									<div class="promo-item">
										<div class="promo-button"><img src="images/en/daily-rescue-bonus.jpg" alt=""/></div>
										<div class="promo-btm-wrap">
											<div class="promo-content">
												<h4>5% Daily Rescue Bonus</h4>
												
												Terms & Conditions:
												<ol>
													<li>Each existing members of Sbdot are allowed to claim 1 time rescue bonus on each day. (Based on total deposit & lost of the day)</li>
													<li>The promotion cannot be combine with other promotion.</li>
													<li>Before you claim the Rescue Bonus should not have any withdraw on the same day. (Wallet Credit Balance must below RM10 to qualify this promotion.</li> 
													<li>Daily rescue bonus will start every day from 00:00:01 until 23:59:59(GMT+8).(Member need to apply on next day within 24 hours via live chat) Only Live Dealer & Sportsbook Game Turnover will be counted, Other games played will be disqualified from this promotion.</li> 
													<li>Example: Rescue Bonus RM10
														<ul style="list-style-type: lower-alpha;">
															<li>Rollover: RM10 x 5 Rollover = 50
														</ul>
													</li>
													<li>Sbdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
													<li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li> 
													<li>Our company has the right to modify, change or terminate the promotion without prior notice.</li> 
											
												</ol>
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
