@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="active">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="">profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">Withdrawal</h2>
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
                            <div class="clearfix">
                                <input type="submit" name="ctl00$MainContent$btnstep3next" value="Back to Main" id="ctl00_MainContent_btnstep3next" class="btn btn-warning btn-more pull-right" />
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