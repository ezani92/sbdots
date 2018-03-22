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
        <link href="{{ secure_asset('css/constant.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
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
                                <li><a id="ctl00_lnkbtnen" class="language-en" href="javascript:__doPostBack(&#39;ctl00$lnkbtnen&#39;,&#39;&#39;)">English</a></li>
                                <li><a id="ctl00_lnkbtncn" class="language-cn" href="javascript:__doPostBack(&#39;ctl00$lnkbtncn&#39;,&#39;&#39;)">中文</a></li>
                                <li><a id="ctl00_lnkbtnbm" class="language-my" href="javascript:__doPostBack(&#39;ctl00$lnkbtnbm&#39;,&#39;&#39;)">Bahasa Melayu</a></li>
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
	                    <div class="loginfield">
	                        <input name="ctl00$txtemail" type="text" class="txtbox" placeholder="User name"/>
	                    </div>
	                    <div class="loginfield">
	                        <input name="ctl00$txtpass" type="password" class="txtbox" placeholder="Password" />
	                    </div>
	                    <div class="loginfield">
	                        <input type="submit" name="ctl00$btnlogin" value="Login" id="ctl00_btnlogin" class="btn-login" />
	                    </div>
	                    <div class="loginfield">
	                        <input type="submit" class="btn-register" value="Register"/>
	                    </div>
	                    <div class="invalid"></div>
	                </div>
	                <div class="forgotpw"><a href="#">tac validation</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{ url('password/reset') }}">forgot password?</a></div>
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
                        <li><a href="#" class=""><i class="fa fa-home"></i></a></li>
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
                        <div class="announceIcon"><img src="{{ secure_asset('images/common/announce-left.png') }}" width="38" height="30" alt=""/></div>
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
                    <div class="banner-p">
                        <img src="{{ secure_asset('images/common/banner-contact.jpg') }}"/>
                    </div>
                </div>
            </div>