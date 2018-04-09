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
                        <li><a href="{{ url('player/withdrawal/step1') }}" class="deposit">Withdrawal</a></li>
                        <li><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                    <h5>Step 2 : Please Select Game To Deposit.</h5>
                        <div class="member-row">
                            @foreach($banks as $bank)
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member" style="background-color: #181845;">
                                <tr>
                                    <th rowspan="2">
                                        <div class="bank">{{ $bank->name }}</div>
                                    </th>
                                    <td>Account Number: {{ $bank->account_no }}</td>
                                </tr>
                                <tr>
                                    <td>Account Name: {{ $bank->account_name }}</td>
                                </tr>
                            </table>
                            @endforeach
                        </div>
                        <div class="member-row">
                            Notes:
                            <ol>
                                <li>Minimum Deposit MYR {{ \App\Setting::meta('MIN_DEPOSIT') }}.</li>
                                <li>We Accept Online Transfer / ATM Transfer / Cash Deposit.</li>
                                <li>Please keep the bank receipt or transaction reference number.</li>
                            </ol>
                        </div>
                        <div class="clearfix">
                            <form method="get" action="{{ url('player/deposit/step3') }}">
                                <a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning btn-block">BACK</button></a>
                                @csrf
                                <input type="hidden" name="games" value="{{ $game_id }}">
                                <button type="submit" class="btn btn-warning btn-block">NEXT</button>
                            </form>
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