<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="{{ asset('images/common/favicon.png') }}" rel="icon" type="image/x-icon" />
        <title>
            Super B
        </title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/banner/nivo-slider.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
        <link href="{{ asset('css/constant.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    </head>
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
                        <li><a href="{{ url('/') }}" class="">Home</a></li>
                        <li><a href="sportsbooks" class="">sportsbooks</a></li>
                        <li><a href="live_casinos" class="">live casinos</a></li>
                        <li><a href="slots" class="">slots</a></li>
                        <li><a href="arcades" class="">arcades</a></li>
                        <li><a href="poker_" class="">lottery</a></li>
                        <li><a href="promotions" class="">promotions</a></li>
                        <li><a href="contact_us" class="">contact us</a></li>
                        <li class="comment"><a href="#" onclick="parent.LC_API.open_chat_window({source:'minimized'}); return false"><i class="fa fa-fw fa-commenting"></i>live chat</a></li>
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
                            <div class="annTitle">Annoucement:</div>
                            <div class="runText">
                                <marquee scrolldelay="150">
                                    {{ \App\Setting::find(7)->value }}
                                </marquee>
                            </div>
                        </div>
                        <div class="annTime"><i class="fa fa-clock fa-lg"></i><span id="nowTime"></span></div>
                    </div>
                </div>
            </div>