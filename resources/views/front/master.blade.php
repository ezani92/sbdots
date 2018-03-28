<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

@include ('front.header')

<body>
    <div id="topLanguage">
        <div class="container">
            <div class="pull-right">
                <div class="helpCenter"><a href="#"><i class="fa fa-question-circle"></i> help</a></div>
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
            <div class="logo"><a href="{{ url('/') }}"></a></div>
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
                <div class="welcome">Welcome {{ Auth::user()->name }}!<span id="ctl00_lblusername" style="xmargin-right: 10px;"></span></div>
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
                    <li class="home-menu"><a href="{{ url('/') }}" class=""><i class="fa fa-home"></i></a></li>
                    <li><a href="mobile" class=""><i class="fa fa-mobile"></i></a></li>
                    <li><a href="sportsbooks" class="">sportsbooks</a></li>
                    <li><a href="live_casinos" class="">live casinos</a></li>
                    <li><a href="slots" class="">slots</a></li>
                    <li><a href="arcades" class="">arcades</a></li>
                    <li><a href="poker_" class="">poker</a></li>
                    <li><a href="promotions" class="">promotions</a></li>
                    <li><a href="contact_us" class="">contact us</a></li>
                    <li class="comment"><a href="#" onclick=""><i class="fa fa-fw fa-commenting"></i>live chat</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="ctl00_UpdatePanel1">
        <div class="bg-banner">
            <div class="container">
                <div id="announcement">
                    <div class="announceIcon"><i class="fa fa-fw fa-bullhorn"></i></div>
                    <div class="annContent">
                        <div class="annTitle">News:</div>
                        <div class="runText">
                            <marquee scrolldelay="150">
                                {{ \App\Setting::find(7)->value }}
                            </marquee>
                        </div>
                    </div>
                    <div class="annTime"><i class="fa fa-clock-o fa-lg"></i><span id="nowTime"></span></div>
                </div>
                @if(Request::is('/'))
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider"> 
                        <a href="promotions"><img src="images/en/banner-01.jpg" width="1040" height="373" alt=""/></a> 
                        <a href="promotions"><img src="images/en/banner-02.jpg" width="1040" height="373" alt=""/></a> 
                        <a href="promotions"><img src="images/en/banner-03.jpg" width="1040" height="373" alt=""/></a> 
                    </div>
                </div>
                @else
                    @yield ('banner')
                @endif
            </div>
        </div>

        @yield ('content')
    </div>

    @include('front.footer')
    @yield('script')
    </body>
</html>