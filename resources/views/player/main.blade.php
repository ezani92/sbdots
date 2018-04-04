@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="active">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="">profile</a></li>
                </ul>
                <!-- <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">my account</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="member-main">
                            <div class="member-row clearfix">
                                Pending Design
                            </div>
                        </div>
                    </div>
                </div> -->
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
@include('player.footer')
</body></html>