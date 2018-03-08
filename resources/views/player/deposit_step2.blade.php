@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="active">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="">withdrawal</a></li>
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
                                        <h2 class="smaller">Deposit</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h4>Step 2 : Please Select Game To Deposit.</h4>
                        
                        <div class="member-main">
                            <div class="member-row">
                                @foreach($banks as $bank)
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                        <tr>
                                            <th rowspan="2"><div class="bank">{{ $bank->name }}</div></th>
                                            <td>Account Number: {{ $bank->account_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Account Name: {{ $bank->account_name }}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </div>
                            <div class="member-row">
                                Notes:
                                <ol>
                                    <li>Minimum Deposit MYR {{ \App\Setting::meta('MIN_DEPOSIT') }}.</li>
                                    <li>We Accept Online Transfer / ATM Transfer / Cash Deposit.</li>
                                    <li>Please keep the bank receipt or transaction reference number.</li>
                                </ol>
                            </div>
                            <div class="clearfix">
                                <form method="get" action="{{ url('player/deposit/step3') }}">
                                    <a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning btn-more pull-left">BACK</button></a>
                                    @csrf
                                    <input type="hidden" name="games" value="{{ $game_id }}">
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