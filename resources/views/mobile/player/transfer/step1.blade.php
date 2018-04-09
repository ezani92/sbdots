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
                        <h5>Step 1 : Transfer Request.</h5>
                        <div class="member-main">
                            <form method="post" action="{{ url('player/transfer/step2') }}">
                            @csrf
                            <div class="member-row">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member" style="background-color: #181845;">
                                    <tr>
                                        <td style="width: 50%;">Credit transfer From</td>
                                        <td>
                                            <select name="from_game" class="optiongroup field-txtbox form-control">
                                                <option selected="selected">- Select -</option>
                                                @foreach($games as $game)
                                                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-error">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Credit transfer To</td>
                                        <td>
                                            <select name="to_game"  class="optiongroup field-txtbox form-control">
                                                <option selected="selected">- Select -</option>
                                                @foreach($games as $game)
                                                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-error">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Transfer Amount (RM)</td>
                                        <td>
                                            <input name="amount" type="number" step="0.01" class="field-txtbox form-control" />
                                            <span class="text-error">
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                                Notes:
                                <ol>
                                    <li>Minimum Transfer amount is MYR 100.</li>
                                    <li>You may not transfer your bonus to other products.</li>
                                </ol>
                            </div>
                            <div class="clearfix">
                                <input type="submit" name="ctl00$MainContent$btnstep1next" value="SUBMIT" id="ctl00_MainContent_btnstep1next" class="btn btn-warning btn-block" />
                            </div>
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