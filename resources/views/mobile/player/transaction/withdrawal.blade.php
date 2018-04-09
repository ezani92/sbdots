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
                        <li ><a href="{{ url('player') }}">Main</a></li>
                        <li><a href="{{ url('player/deposit/step1') }}" >Deposit</a></li>
                        <li><a href="{{ url('player/withdrawal/step1') }}" class="deposit">Withdrawal</a></li>
                        <li><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li class="active"><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class=""><a href="{{ url('player/transaction?tab=deposit') }}">deposit</a></li>
                            <li role="presentation" class="active"><a href="{{ url('player/transaction?tab=withdrawal') }}">withdrawal</a></li>
                            <li role="presentation" class=""><a href="{{ url('player/transaction?tab=transfer') }}">Transfer</a></li>
                        </ul>
                        <div id="ctl00_MainContent_UpdatePanel1">
                            <div class="tab-content" style="overflow: auto;">
                                <div role="tabpanel" class="tab-pane active" id="deposit">
                                    <div>
                                        <div class="table-responsive no-bottom">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table promo-table">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Transaction No</th>
                                                    <th scope="col">Withdraw From</th>
                                                    <th scope="col">Amount (MYR)</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Remarks</th>
                                                </tr>
                                                @if($transactions->count() == 0)
                                                <tr >
                                                    <th scope="col" colspan="7" style="padding-top: 10px; text-align: center">No Transaction</th>
                                                </tr>
                                                @else
                                                @php
                                                $i = 1;
                                                @endphp
                                                @foreach($transactions as $transaction)
                                                <tr>
                                                    <td scope="col">{{ $i }}</td>
                                                    <td scope="col">#{{ sprintf('%06d', $transaction->id) }}</td>
                                                    @php
                                                    $data = json_decode($transaction->data, true);
                                                    $game = \App\Game::find($data['game_id']);
                                                    @endphp
                                                    <td scope="col">{{ $game->name }}</td>
                                                    <td scope="col">MYR {{ $transaction->amount }}</td>
                                                    <td scope="col">{{ $transaction->created_at->format('d M Y h:i A') }}</td>
                                                    <td scope="col">
                                                        @if($transaction->status == 1)
                                                        <span class="label label-info">Processing</span>
                                                        @elseif($transaction->status == 3)
                                                        <span class="label label-danger">Rejected</span>
                                                        @elseif($transaction->status == 2)
                                                        <span class="label label-success">Succesfull</span>
                                                        @endif
                                                    </td>
                                                    <td scope="col">{{ $transaction->remarks }}</td>
                                                </tr>
                                                @php
                                                $i++;
                                                @endphp
                                                @endforeach
                                                @endif
                                            </table>
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