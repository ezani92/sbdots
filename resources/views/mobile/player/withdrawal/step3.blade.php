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
                        <h5>Done : Ticket submitted successfully</h5>
                        <div class="member-main">
                            <div class="member-row">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                    <tr>
                                        <td style="width: 200px;">Withdrawal From</td>
                                        <td>
                                            @php

                                            $data = json_decode($transaction->data, true);
                                            $game = \App\Game::find($data['game_id']);

                                            @endphp

                                            {{ $game->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amount (RM)</td>
                                        <td>{{ $transaction->amount }}</td>
                                    </tr>
                                    <tr>
                                        <td>Withdrawal To</td>
                                        <td>{{ \Auth::user()->bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account Name</td>
                                        <td>{{ \Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account No</td>
                                        <td>{{ \Auth::user()->bank_account_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Transaction No</td>
                                        <td>{{ $transaction->transaction_id }}</td>
                                    </tr>
                                </table>
                                <p>* Please check your withdraw status at Transaction Status page. Amount > 30,000 may require more than 1 day to process.</p>
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