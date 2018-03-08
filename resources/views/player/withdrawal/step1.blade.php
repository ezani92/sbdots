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
                        <h4>Step 1 :  Select product & amount you wish to withdrawal.</h4>
                        <div class="member-main">
                            <div class="member-row">
                                <form method="get" action="{{ url('player/withdrawal/step2') }}">
                                @csrf
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                    <tr>
                                        <td style="width: 200px;">Withdrawal From</td>
                                        <td>
                                            <div id="ctl00_MainContent_upddl">
                                                <select name="game_id" id="game_id" class="field-txtbox optiongroup" required>
                                                        <option selected="selected" value="">- Select Game -</option>
                                                    @foreach($games as $game)
                                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-error"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amount (RM)</td>
                                        <td>
                                            <input name="amount" type="text" maxlength="10" id="amount" class="field-txtbox" required/>
                                            <span class="text-error">
                                            </span>
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
                                <button type="submit" class="btn btn-warning btn-more pull-right">NEXT</button>

                                </form>
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