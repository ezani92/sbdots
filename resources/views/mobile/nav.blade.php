<div class="content-controls">
    <a href="#" class="deploy-sidebar"><i class="fa fa-fw fa-bars"></i></a>
    <em class="content-title"><a href="{{ url('/') }}"><img src="{{ asset('images/common/SB_Dot_logo_black-01.png') }}" class="logo"></a></em>
    @guest
        <a href="#" id="ctl00_btnloginfront" class="deploy-contact" data-toggle="modal" data-target="#login">login</a>
    @else
        <a href="{{ route('logout') }}" class="deploy-contact" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    @endguest
</div>

<nav role="navigation" class="navbar navbar-inverse no-bottom">
    <div class="container">
        <div class="row">
            <ul class="nav" id="tab_change">
                <li class="active">
                    <div class="col-md-20 footer-xs"> 
                        <a href="{{ url('/') }}">
                            <button href="" class="navbar-toggle collapsed btn-top" type="button"> 
                            <img src="{{ asset('mobile/images/common/icon_home.png') }}"/>home</button>
                        </a> 
                    </div>
                </li>
                @guest
                    <li>
                        <div class="col-md-20 footer-xs"> 
                            <a href="{{ url('registration') }}">
                                <button href="#" class="navbar-toggle collapsed btn-top" type="button"> 
                                <img src="{{ asset('mobile/images/common/icon_register.png') }}"/>register</button>
                            </a> 
                        </div>
                    </li>
                @else
                     <li>
                        <div class="col-md-20 footer-xs"> 
                            <a href="{{ url('player') }}">
                                <button href="#" class="navbar-toggle collapsed btn-top" type="button"> 
                                <img src="{{ asset('mobile/images/common/my_account.png') }}"/>My Account</button>
                            </a> 
                        </div>
                    </li>
                @endguest
                <li>
                    <div class="col-md-20 footer-xs"> 
                        <a href="{{ url('promotions') }}">
                            <button href="#" class="navbar-toggle collapsed btn-top" type="button"> 
                            <img src="{{ asset('mobile/images/common/icon_gift.png') }}"/>promotions</button>
                        </a> 
                    </div>
                </li>
                <li>
                    <div class="col-md-20 footer-xs"> 
                        <a href="{{ url('downloads') }}">
                            <button class="navbar-toggle collapsed btn-top" type="button"> 
                            <img src="{{ asset('mobile/images/common/icon_download.png') }}"/>download</button>
                        </a> 
                    </div>
                </li>
                <li>
                    <div class="col-md-20 footer-xs"> 
                        <a href="#" onclick="parent.LC_API.open_chat_window({source:'minimized'})">
                            <button class="navbar-toggle collapsed btn-top" type="button"> 
                            <img src="{{ asset('mobile/images/common/icon_live_chat.png') }}"/>live chat</button>
                        </a> 
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>	