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
                        <hr />
                        <h5>Step 1 : Please Select Game To Deposit.</h5>
                        <form method="get" action="{{ url('player/deposit/step2') }}">
                            @csrf
                            <div class="deposit-form clearfix">
                                <select class="game-select form-control" name="games">
                                    @foreach($game_cat as $cat)
                                        <optgroup label="{{ $cat }}">
                                            @foreach ($games as $game)
                                                @if ($game->category == $cat)
                                                    <option value="{{$game->id}}">{{$game->name}}</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="deposit-form clearfix">
                                <input type="submit" name="" value="NEXT" id="" class="btn btn-warning btn-block" />
                            </div>
                        </form>
                        <hr />
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