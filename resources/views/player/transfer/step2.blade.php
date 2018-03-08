@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="active">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="">profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">Transfer</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="clearfix">
                                <input type="submit" name="ctl00$MainContent$btnstep2next" value="Back to Main" id="ctl00_MainContent_btnstep2next" class="btn btn-warning btn-more pull-right" />
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