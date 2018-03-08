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
                        <h4>Step 1 : Transfer Request.</h4>
                        <div class="member-main">
                            <form method="post" action="{{ url('player/transfer/step2') }}">
                            @csrf
                            <div class="member-row">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                    <tr>
                                        <td style="width: 200px;">Credit transfer From</td>
                                        <td>
                                            <select name="from_game" class="optiongroup field-txtbox">
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
                                            <select name="to_game"  class="optiongroup field-txtbox">
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
                                            <input name="amount" type="number" step="0.01" class="field-txtbox" />
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
                                <input type="submit" name="ctl00$MainContent$btnstep1next" value="SUBMIT" id="ctl00_MainContent_btnstep1next" class="btn btn-warning btn-more pull-right" />
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('player.footer')
</body></html>