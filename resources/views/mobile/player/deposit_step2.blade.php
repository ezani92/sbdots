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
                        <li class="active"><a href="{{ url('player/deposit/step1') }}" >Deposit</a></li>
                        <li><a href="{{ url('player/withdraw/step1') }}" class="deposit">Withdrawal</a></li>
                        <li><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                    












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