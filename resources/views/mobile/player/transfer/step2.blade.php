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
                        <li><a href="{{ url('player/withdrawal/step1') }}" class="deposit">Withdrawal</a></li>
                        <li class="active"><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h4>Done : Ticket submitted successfully</h4>
                        <div class="member-main">
                            <div class="member-row">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                    <tr>
                                        <td style="width: 200px;">Transfer From</td>
                                        <td>
                                            @php

                                            $data = json_decode($transaction->data, true);
                                            $from_game = \App\Game::find($data['from_game']);
                                            $to_game = \App\Game::find($data['to_game']);

                                            @endphp
                                            {{ $from_game->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Transfer To</td>
                                        <td>
                                            {{ $to_game->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Transfer amount (RM)</td>
                                        <td>{{ $transaction->amount }}</td>
                                    </tr>
                                    <tr>
                                        <td>Transaction No</td>
                                        <td>{{ $transaction->transaction_id }}</td>
                                    </tr>
                                </table>
                                Notes:
                                <ol>
                                    <li>Please check your mail in 15 minutes for product login details.</li>
                                    <li>You may view your transaction status at Transaction Status page.</li>
                                </ol>
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