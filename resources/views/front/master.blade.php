<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

@include ('front.header')

<body>
    <div id="topLanguage">
        <div class="container">
            <div class="social-menu">
                <span><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></span>
                <span><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></span>
            </div>
            <div class="help-bar">
                <div class="languageWrap">
                    <div class="dropdown">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-language"> English <span class="caret" style=""></span> </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a id="ctl00_lnkbtnen" class="language-en" href="javascript:__doPostBack(&#39;ctl00$lnkbtnen&#39;,&#39;&#39;)">English</a></li>{{-- 
                            <li><a id="ctl00_lnkbtncn" class="language-cn" href="javascript:__doPostBack(&#39;ctl00$lnkbtncn&#39;,&#39;&#39;)">中文</a></li>
                            <li><a id="ctl00_lnkbtnbm" class="language-my" href="javascript:__doPostBack(&#39;ctl00$lnkbtnbm&#39;,&#39;&#39;)">Bahasa Melayu</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="headWrap container">
            <div class="logo"><a href="{{ url('/') }}">
                <img src="../images/common/SB_Dot_logo_black-01.png" alt="" height="120px">
            </a></div>
            @if(Auth::guest())
            <div class="loginpart pull-right">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="loginfield">
                        <input name="email" type="email" class="txtbox" placeholder="Email"/ value="{{ old('email') }}" required>
                    </div>
                    <div class="loginfield">
                        <input name="password" type="password" class="txtbox" placeholder="Password" / required>
                    </div>
                    <div class="loginfield">
                        <button type="submit" class="btn-login">Login</button>
                    </div>
                    <div class="loginfield">
                        <a href="{{ url('/register') }}"><button type="button" class="btn-register">Register</button></a>
                    </div>
                </form>
                <div class="invalid">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="forgotpw"><a href="{{ url('password/reset') }}">forgot password?</a></div>
            @else
            <div class="loginpart pull-right">
                <div class="welcome">Welcome {{ Auth::user()->name }}! <i style="color:{{ Auth::user()->group->color }}" class="fas fa-{{ Auth::user()->group->icon }}"></i><span id="ctl00_lblusername" style="xmargin-right: 10px;"></span></div>
                <div class="loginfield">
                    <input type="button" class="btn-register" value="My Account" onclick="location.href='{{ url('player') }}'" />
                </div>
                <div class="loginfield">
                    <input type="button" class="btn-login" value="Logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"/>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endif
            <div id="menu">
                <ul>
                    <li><a href="{{ url('/') }}" class="">Home</a></li>
                    <li><a href="sportsbooks" class="">sportsbooks</a></li>
                    <li><a href="live_casinos" class="">live casinos</a></li>
                    <li><a href="slots" class="">slots</a></li>
                    <li><a href="arcades" class="">arcades</a></li>
                    <li><a href="lottery" class="">lottery</a></li>
                    <li><a href="promotions" class="">promotions</a></li>
                    <li><a href="contact_us" class="">contact us</a></li>
                    <li class="comment"><a href="#" onclick="parent.LC_API.open_chat_window({source:'minimized'}); return false"><i class="fas fa-fw fa-comment-dots"></i>live chat</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="ctl00_UpdatePanel1">
        <div class="bg-banner">
            <div class="container">
                <div id="announcement">
                    <div class="announceIcon"><i class="fas fa-fw fa-bullhorn"></i></div>
                    <div class="annContent">
                        <div class="annTitle">News:</div>
                        <div class="runText">
                            <marquee scrolldelay="150">
                                {{ \App\Setting::find(7)->value }}
                            </marquee>
                        </div>
                    </div>
                    <div class="annTime"><i class="far fa-clock fa-lg"></i><span id="nowTime"></span></div>
                </div>
                @if(Request::is('/'))
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider" style="height:350px;"> 
                        <!-- <a href="promotions"><img src="images/en/Main1.jpg" width="1040" height="350" alt=""/></a> 
                        <a href="promotions"><img src="images/en/Main2.jpg" width="1040" height="350" alt=""/></a> -->
                        <a href="promotions"><img src="images/en/main1_new.jpg" width="1040" height="350" alt=""/></a>
                        <a href="promotions"><img src="images/en/main2_new.jpg" width="1040" height="350" alt=""/></a>
                        <a href="promotions"><img src="images/en/bnr6.jpg" width="1040" height="350" alt=""/></a>
                        <!-- <a href="promotions"><img src="images/en/Promo-1rebate.jpg" width="1040" height="350" alt=""/></a>
                        <a href="promotions"><img src="images/en/Promo-1rebatesport.jpg" width="1040" height="350" alt=""/></a>
                        <a href="promotions"><img src="images/en/Promo-3deposit.jpg" width="1040" height="350" alt=""/></a>
                        <a href="promotions"><img src="images/en/Promo-10deposit.jpg" width="1040" height="350" alt=""/></a>
                        <a href="promotions"><img src="images/en/Promo-newmember.jpg" width="1040" height="350" alt=""/></a> -->
                    </div>
                </div>
                @else
                    {{-- @yield ('banner') --}}
                @endif
            </div>
        </div>

        @yield ('content')
    </div>

    @include('front.footer')
    @yield('script')
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9644895;
    (function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->
    </body>
</html>