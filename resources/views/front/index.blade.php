@extends ('front.master')

@section('content')

<div class="content">
    <div class="container">
        <div class="home-content">
            <div class="row-p clearfix">
                <a href="sportsbooks">
                    <div class="home-wrap">
                        <img src="images/common/1-maxbet.jpg" width="502" height="238"/>
                        <div class="home-text">
                            <div class="home-name">maxbet</div>
                        </div>
                </div>
                </a>
                <a href="live_casinos">
                    <div class="home-wrap">
                        <img src="images/common/1-rollex.jpg" width="502" height="238"/>
                        <div class="home-text">
                            <div class="home-name">rollex</div>
                <!-- <a href="mobile#gamingsoft">
                <div class="pull-right download-icon">
                    <div class="d-img">PLAY NOW!</div>
                </div>
                </a> -->
                </div>
                </div>
                </a>			
            </div>
            <div class="row-p clearfix">
                <a href="arcades">
                    <div class="home-wrap">
                        <img src="images/common/joker.jpg" width="499" height="214"/>
                        <div class="home-text">
                            <div class="home-name">joker</div>
                        </div>
                </div>
                </a>
                <a href="sportsbooks">
                    <div class="home-wrap">
                        <img src="images/common/winningft.jpg" width="244" height="214"/>
                        <div class="home-text">
                            <div class="home-name">winningft</div>
                        </div>
                </div>
                </a>
                <a href="live_casinos">
                    <div class="home-wrap">
                        <img src="images/common/mega888.jpg" width="244" height="214"/>
                        <div class="home-text">
                            <div class="home-name">mega888</div>
                        </div>
                </div>
                </a>
            </div>
            <div class="row-p clearfix">
                <div style="width: 500px; float: left; margin-right: 13px;">
                    <a href="sportsbooks">
                        <div class="home-wrap long">
                            <img src="images/common/sbobet.jpg" width="499" height="111"/>
                            <div class="home-text">
                                <div class="home-name">sbobet</div>
                            </div>
                    </div>
                    </a>
                    <a href="live_casinos">
                        <div class="home-wrap">
                            <img src="images/common/1-luckypalace.jpg" width="499" height="111"/>
                            <div class="home-text">
                                <div class="home-name">lucky palace</div>
                            </div>
                    </div>
                    </a>
                </div>
                <a href="live_casinos">
                    <div class="home-wrap">
                        <img src="images/common/live22.jpg" width="244" height="237"/>
                        <div class="home-text">
                            <div class="home-name">live22</div>
                        </div>
                </div>
                </a>
                <a href="slots">
                    <div class="home-wrap">
                        <img src="images/common/suncity.jpg" width="244" height="237"/>
                        <div class="home-text">
                            <div class="home-name">suncity</div>
                        </div>
                </div>
                </a>
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

