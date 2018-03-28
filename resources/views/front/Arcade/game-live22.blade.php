@extends ('front.master')

@section('banner')

<div class="banner-p">
    <div class="p-logo"><img src="images/common/logo/live22.png"/></div>
    <div class="p-try">
        <h3>live22</h3>
        <div class="text-small"></div>
        <div class="btn-try">
        
            <input type="button" class="btn btn-warning btn-more pull-left" value="TRY NOW" onclick="location.href='#divreg'">
        
            <div class="download-icon pull-left">
                <!-- <a href="#"><div class="d-img"><img src="images/common/download-pc.png"/></div></a> -->
                    <a href="mobile.aspx#live22"><div class="d-img"><img src="images/common/download-pc.png"/></div></a>
                    <a href="mobile.aspx#live22"><div class="d-img"><img src="images/common/download-osx.png"/></div></a>
                <a href="mobile.aspx#live22"><div class="d-img"><img src="images/common/download-ios.png"/></div></a>
                <a href="mobile.aspx#live22"><div class="d-img"><img src="images/common/download-android.png"/></div></a>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="page-content">
			<div class="p-example clearfix">
				<h2>Example of Game Play Screens</h2>
				<div class="p-screen">
					<img src="images/common/screenshot/game-live22-ss-01.jpg"/>
					<img src="images/common/screenshot/game-live22-ss-02.jpg"/>
					<img src="images/common/screenshot/game-live22-ss-03.jpg"/>
				</div>
			</div>
			<div class="p-description">
				<p>EXTRA BOOST OF FUN ON BETASIA WITH LIVE22 </p>
				<p>A more intense and mesmerizing slot gaming experience awaits you with the induction of a hot new slot games provider here on BetAsia! Joining the ranks of other reputable online games providers on BetAsia is Live22, but don’t be fooled by its ‘new kid on the block’ status – behind the helm of Live22 is a highly experienced team of online betting veterans who have gone all out to bring you the best in revolutionary online slot games entertainment. Be prepared to enjoy an irresistible selection of all-new slot games by Live22, one of the rising stars in both the local and regional online betting industries.</p>
				<p>Bringing some of the world’s best loved characters, tales and themes to life through online slots, each and every Live22 slot game engages players with its own distinctive style and design. Travel through time or explore otherworldly mythological realms through Live22’s online slots – no theme is beyond the reach of the imagination and no character is too farfetched to bring to life on Live22! Plus, the design team behind Live22’s exhilarating online slots has exhaustively paid attention to all the small details of visual compositions in every slot game. When you play any of Live22’s online slots, what you will experience is the state of being in a stunning digital environment that never fails to convey just the right ambience to completely draw you in. From slot games that draw its inspiration from Chinese lore to slot games that aim to recreate the feel of a bygone 1920s Shanghainese era, Live22 is constantly pushing the envelope when it comes to delivering the best and most versatile online slots that will players hooked and wanting more.</p>
			</div>
			<div class="bg-step clearfix" id="divreg">
				<div class="step-each">
					<div class="step-title">step 1</div>
					<div class="step-details">register for a free account</div>
				</div>
				<div class="step-each">
					<div class="step-title">step 2</div>
					<div class="step-details">deposit & claim your bonus</div>
				</div>
				<div class="step-each">
					<div class="step-title">step 3</div>
					<div class="step-details">play your favourite game</div>
				</div>
				<div class="step-each">
					<div class="step-title">step 4</div>
					<div class="step-details">win amazing jackpot</div>
				</div>
			</div>
        
<iframe src="inc_registration.aspx" width="1000" height="508" scrolling="no" frameborder="0" allowtransparency="yes"></iframe>

		</div>
	</div>
</div>
    <div id="boxes">
        <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
        <a href="http://blog.betasiaclub.com/betasia-live22-livestream-watch-win-2017-september/" target="_blank">
        <img src="images/Sep%20Banner-%20Apps-9842.jpg" /></a>
        </div>
        <!-- Mask to cover the whole screen -->
        <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
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
