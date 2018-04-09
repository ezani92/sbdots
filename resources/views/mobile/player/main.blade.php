@extends('mobile.master')
@section('content')        
<div class="all-elements">
    @include ('mobile.sidebar')
    <div id="content" class="page-content">
        @include ('mobile.nav') 
        <div>
            <div id="ctl00_UpdatePanel1">
                <div class="container bg-dark">
                    <ul id="tabmenu">
                        <li class="active"><a href="{{ url('player') }}">Main</a></li>
                        <li><a href="{{ url('player/deposit/step1') }}" >Deposit</a></li>
                        <li><a href="{{ url('player/withdrawal/step1') }}" class="deposit">Withdrawal</a></li>
                        <li><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                        <div class="tab-content short">
                            <div class="tab-pane fade in active">
                                <div class="title-wrap">
                                    <div class="outer-mask">
                                        <div class="inner-mask">
                                            <div class="title-p">
                                                <h2 class="smaller">how to start gaming?</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-main start-game">
                                    <div class="member-row clearfix">
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 1</div>
                                                    <div class="step-content">Select the Game of Your Choice & Make DEPOSIT.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="start-arrow"><i class="fa fa-chevron-right"></i></div>
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 2</div>
                                                    <div class="step-content">Get Game Login ID From Your Email.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="start-arrow"><i class="fa fa-chevron-right"></i></div>
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 3</div>
                                                    <div class="step-content">Login & Enjoy the Game!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content short">
                            <div class="tab-pane fade in active">
                                <div class="title-wrap">
                                    <div class="outer-mask">
                                        <div class="inner-mask">
                                            <div class="title-p">
                                                <h2 class="smaller">Cash Out Your Winning!</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-main start-game">
                                    <div class="member-row clearfix">
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 1</div>
                                                    <div class="step-content">Click WITHDRAWAL & Follow the Steps.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="start-arrow"><i class="fa fa-chevron-right"></i></div>
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 2</div>
                                                    <div class="step-content">Fill Up Withdrawal Details.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="start-arrow"><i class="fa fa-chevron-right"></i></div>
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 3</div>
                                                    <div class="step-content">Winnings Will Be Credited Into Your Bank Account.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content short">
                            <div class="tab-pane fade in active">
                                <div class="title-wrap">
                                    <div class="outer-mask">
                                        <div class="inner-mask">
                                            <div class="title-p">
                                                <h2 class="smaller" style="font-size:22px;">Try Other Gaming Products!</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-main start-game">
                                    <div class="member-row clearfix">
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 1</div>
                                                    <div class="step-content">Click & Choose to TRANSFER Your Credits from & to Any Games Sites.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="start-arrow"><i class="fa fa-chevron-right"></i></div>
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 2</div>
                                                    <div class="step-content">Get New Game Login ID From Your Email.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="start-arrow"><i class="fa fa-chevron-right"></i></div>
                                        <div class="member-col-wrap">
                                            <div class="member-col">
                                                <div class="member-start">
                                                    <div class="step">step 3</div>
                                                    <div class="step-content">Login & Enjoy the Game!</div>
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
            <div class="overlay" />
                <div class="overlayContent">
                    <img src="{{ asset('mobile/images/ajax-loader.gif') }}" alt="Loading" border="1" />
                </div>
            </div>
        </div>
        @include ('mobile.footer')
    </div>
</div>
@endsection
@section('scripts')
@endsection