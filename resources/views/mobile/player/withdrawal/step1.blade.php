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
                        <h5>Step 1 :  Select product & amount you wish to withdrawal.</h5>
                        <div class="member-main">
                            <div class="member-row">
                                <form method="get" action="{{ url('player/withdrawal/step2') }}">
                                    @csrf
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member" style="background-color: #181845;">
                                        <tr>
                                            <td style="width: 40%;">Withdrawal From</td>
                                            <td>
                                                <div id="ctl00_MainContent_upddl">
                                                    <select name="game_id" id="game_id" class="form-control field-txtbox optiongroup" required>
                                                        <option selected="selected" value="">Select Game</option>
                                                        @foreach($games as $game)
                                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Amount (RM)</td>
                                            <td>
                                                <input name="amount" type="text" maxlength="10" id="amount" class="field-txtbox form-control" required/>
                                            </td>
                                        </tr>
                                    </table>
                                    Notes:
                                    <ol>
                                        <li>Minimum withdrawal amount is MYR 50.</li>
                                        <li>You are required to have a turnover of 100% of the deposit amount before withdrawal is allowed.</li>
                                        <li>You may not be able to withdraw until you meet the terms (if any) of the bonus.</li>
                                        <li>Withdrawals will only be approved and paid to the individual bank account with the same name registered with Betasia.</li>
                                    </ol>
                            </div>
                            <div class="clearfix">
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