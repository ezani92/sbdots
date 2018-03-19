<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="{{ secure_asset('images/common/favicon.ico') }}" rel="icon" type="image/x-icon" />
        <title>
            Super B
        </title>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/banner/nivo-slider.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/main.css') }}" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
        <link href="{{ secure_asset('css/constant.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="topLanguage">
            <div class="container">
                <div class="pull-right">
                    <div class="helpCenter"><a href="#"><i class="fa fa-question-circle"></i> help</a></div>
                    <div class="languageWrap">
                        <div class="dropdown">
                            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-language" style="background:rgba(3,43,55,0.85) url({{ secure_asset('images/common/flag-en.png') }}) no-repeat;"> English <span class="caret" style=""></span> </button>
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
                        <li><a href="{{ url('/') }}" class=""><i class="fa fa-home"></i></a></li>
                        <li><a href="#" class=""><i class="fa fa-mobile"></i></a></li>
                        <li><a href="#" class="">sportsbooks</a></li>
                        <li><a href="#" class="">live casinos</a></li>
                        <li><a href="#" class="">slots</a></li>
                        <li><a href="#" class="">arcades</a></li>
                        <li><a href="#" class="">poker</a></li>
                        <li><a href="#" class="">promotions</a></li>
                        <li><a href="#" class="">contact us</a></li>
                        <li><a href="#" onclick=""><i class="fa fa-fw fa-commenting"></i>live chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="ctl00_UpdatePanel1">
            <div class="bg-banner">
                <div class="container">
                    <div id="announcement">
                        <div class="announceIcon"><img src="images/common/announce-left.png" width="38" height="30" alt=""/></div>
                        <div class="annContent">
                            <div class="annTitle">News:</div>
                            <div class="runText">
                                <marquee scrolldelay="150">
                                    Dear Players, we are pleased to announce that the minimum deposit and withdrawal amount has been reduced.
                                </marquee>
                            </div>
                        </div>
                        <div class="annTime"><i class="fa fa-clock-o fa-lg"></i><span id="nowTime"></span></div>
                    </div>
                    @if(Request::is('/'))
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider"> 
                            <a href="promotion.aspx"><img src="images/en/banner-01.jpg" width="1040" height="373" alt=""/></a> 
                            <a href="promotion.aspx"><img src="images/en/banner-02.jpg" width="1040" height="373" alt=""/></a> 
                            <a href="promotion.aspx"><img src="images/en/banner-03.jpg" width="1040" height="373" alt=""/></a> 
                        </div>
                    </div>
                    @else
                    <div class="banner-p">
                        <img src="{{ secure_asset('images/common/banner-contact.jpg') }}"/>
                    </div>
                    @endif
                </div>
            </div>