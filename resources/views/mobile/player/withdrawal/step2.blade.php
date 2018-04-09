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
                        <li><a href="{{ url('player') }}">Main</a></li>
                        <li><a href="{{ url('player/deposit/step1') }}" >Deposit</a></li>
                        <li class="active"><a href="{{ url('player/withdrawal/step1') }}" class="deposit">Withdrawal</a></li>
                        <li><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h5>Step 2 : Please confirm your bank details.</h5>
                        <div class="member-main">
                            <div class="member-row">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                    <tr>
                                        <td style="width: 200px;">Bank Name</td>
                                        <td>{{ \Auth::user()->bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account Name</td>
                                        <td>{{ \Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account Number</td>
                                        <td>{{ \Auth::user()->bank_account_no }}</td>
                                    </tr>
                                </table>
                                <p>* Please contact our customer service if any inaccurate of your bank info.</p>
                            </div>
                            <div class="clearfix">
                                <form method="post" action="{{ url('player/withdrawal/step3') }}">
                                    <a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning btn-block">BACK</button></a>
                                    @csrf
                                    <input type="hidden" name="game_id" value="{{ $input['game_id'] }}">
                                    <input type="hidden" name="amount" value="{{ $input['amount'] }}">
                                    <button type="submit" class="btn btn-warning btn-block">NEXT</button>
                                </form>
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