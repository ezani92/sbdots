@extends ('front.master')

@section('banner')

<div class="banner-p">
    <img src="{{ asset('images/common/banner-sportsbook.jpg') }}"/>
</div>
    
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="page-content">
			<div class="title-wrap">
				<div class="outer-mask">
					<div class="inner-mask">
						<div class="title-p"><h2>sportsbooks</h2></div>
					</div>
				</div>
			</div>
			<div class="single-wrap">
				<div class="single-p clearfix">
					<div class="left">
						<img src="images/common/sportsbook-wft.png"/>
						<div class="poweredby">powered by</div>
					</div>
					<div class="right">
						<ul>
							<li>Sportsbook (Soccer, Basketball, Tennis, eSports...)</li>
							<li>Games (Slots & Arcade)</li>
							<li>Live Casino (Baccarat, Sic Bo, 3 Pictures, Blackjack...)</li>
						</ul>
						<input type="button" class="btn btn-warning btn-more" value="MORE INFO" onclick="location.href='sportsbook-winningft.aspx'">
						<div class="single-download">download now</div>
						<div class="download-icon">
							<!-- <a href="#"><div class="d-img"><img src="images/common/download-pc.png"/></div></a> -->
							<a href="#"><div class="d-img">PLAY NOW!</div></a>
						</div>
					</div>
				</div>
			</div>
			<div class="single-wrap">
				<div class="single-p clearfix">
					<div class="left">
						<img src="images/common/sportsbook-ibc.png"/>
						<div class="poweredby">powered by</div>
					</div>
					<div class="right">
						<ul>
							<li>Sportsbook (Soccer, E-Sports, Mix Parlay, Horse Racing...)</li>
							<li>Live Casino (Baccarat & Roulette)</li>
						</ul>
						<input type="button" class="btn btn-warning btn-more" value="MORE INFO" onclick="location.href='sportsbook-ibcbet.aspx'">
						<!--
						<div class="single-download">download now</div>
						<div class="download-icon">
							<a href="#"><div class="d-img"><img src="images/common/download-pc.png"/></div></a>
							<a href="#"><div class="d-img"><img src="images/common/download-ios.png"/></div></a>
							<a href="#"><div class="d-img"><img src="images/common/download-android.png"/></div></a>
						</div>
						-->
					</div>
				</div>
			</div>
			<div class="single-wrap">
				<div class="single-p clearfix">
					<div class="left">
						<img src="images/common/sportsbook-sbo.png"/>
						<div class="poweredby">powered by</div>
					</div>
					<div class="right">
						<ul>
							<li>Sportsbook (Football, Ice Hockey, Darts, Badminton...)</li>
							<li>Live Casino (Baccarat, Roulette)</li>
							<li>Games (Slots, Hi Lo, Scratchcards, Bingo/Keno, Dice)</li>
						</ul>
						<input type="button" class="btn btn-warning btn-more" value="MORE INFO" onclick="location.href='sportsbook-sbobet.aspx'">
						<!--
						<div class="single-download">download now</div>
						<div class="download-icon">
							<a href="#"><div class="d-img"><img src="images/common/download-pc.png"/></div></a>
							<a href="#"><div class="d-img"><img src="images/common/download-ios.png"/></div></a>
							<a href="#"><div class="d-img"><img src="images/common/download-android.png"/></div></a>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="divdetection" style="display: none;" class="modal_mobile">
    <div style="padding: 20px; background-color: #fff; color: #000;">
        <div style="margin-bottom: 20px; text-decoration: underline;" class="modal_font_size">Detection</div>
        <span id="ctl00_MainContent_Label1" class="modal_font_size">Switch to Mobile / Tablet versions?</span>
        <div style="margin-top: 30px; text-align: center;">
            <input type="submit" name="ctl00$MainContent$btnyesswtich" value="Yes" id="ctl00_MainContent_btnyesswtich" class="modal_font_size modal_btn_width" />
            &nbsp;<input type="submit" name="ctl00$MainContent$btnnoswitch" value="No" id="ctl00_MainContent_btnnoswitch" class="modal_font_size modal_btn_width" />
        </div>
    </div>
</div>
<a id="ctl00_MainContent_lnkdetection" href="javascript:__doPostBack(&#39;ctl00$MainContent$lnkdetection&#39;,&#39;&#39;)" style="display: none;"></a>
<div id="boxes">
    <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
        <img src="images/common/betasia-popup-xmas-2017.jpg" />
    </div>
    <!-- Mask to cover the whole screen -->
    <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
    </div>
</div>
    
@endsection
