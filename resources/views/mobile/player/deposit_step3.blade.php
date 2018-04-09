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
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h5>Step 3 : Please fill in your deposit details.</h5>
                        <form method="post" action="{{ url('player/deposit') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="game_id" value="{{ $game_id }}">
                        <div class="member-row">
                            <table class="table" style="background-color: #181845;">
                                <tr>
                                    <td>Deposit Amount</td>
                                    <td>
                                        <input name="amount" type="number" min="{{ \App\Setting::meta('MIN_DEPOSIT') }}" step="0.01" class="form-control" value="{{ old('amount') }}" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deposit Method</td>
                                    <td class="col-2">
                                        <select name="payment_method" class="form-control" required>
                                            <option value="">Select Method</option>
                                            <option value="method_online">Online Banking</option>
                                            <option value="method_atm">ATM</option>
                                            <option value="method_cash">Cash</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deposit To Bank</td>
                                    <td>
                                        <select name="bank"  class="form-control" required>
                                            <option value="">Select Bank</option>
                                            @foreach($banks as $bank)
                                            <option value="{{ $bank->id }}">{{ $bank->name }} - {{ $bank->account_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date / Time</td>
                                    <td>
                                        <div style="float:left;">
                                            <input name="deposit_date" id="deposit_date" type="text" maxlength="10" class="form-control datepicker" style="width: 100px;" value="{{ old('deposit_date') }}" required/>
                                        </div>
                                        <div style="float:left;">
                                            <div id="ctl00_MainContent_uptxtdatetime">
                                                <div style="float:left; margin-right: 5px; margin-top: 5px;">
                                                    <select name="deposit_hour" id="deposit_hour" class="field-register" style="width:55px;" required>
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div style="float:left; margin-right: 5px; margin-top: 5px;">
                                                    <select name="deposit_minutes" id="deposit_minutes" class="field-register" style="width:55px;" required>
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                    </select>
                                                </div>
                                                <div style="float:left; ">
                                                    <select name="deposit_stamp" id="deposit_stamp" class="field-register" style="width:55px; margin-top: 5px;" required>
                                                        <option value="AM">AM</option>
                                                        <option value="PM">PM</option>
                                                    </select>
                                                    &nbsp;
                                                </div>
                                                <div style="float:left; margin-right: 5px; margin-top: 5px; ">
                                                    <button id="now" style="height: 30px; padding-top: 3px;" type="button" class="btn btn-default">Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reference No</td>
                                    <td>
                                        <input name="refference_no" type="text" maxlength="30" class="form-control" value="{{ old('refference_no') }}"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Scanned Receipt</td>
                                    <td>
                                        <div id="ctl00_MainContent_UpdatePanel5">
                                            <input type="file" class="form-control" name="receipt" id="receipt" value="{{ old('receipt') }}" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bonus Code</td>
                                    <td>
                                        <select name="bonus_code"  class="form-control">
                                            <option value="">No Bonus</option>
                                            @foreach($bonuses as $bonus)
                                            @php
                                            $exclude_games = explode(',', $bonus->exclude_games);
                                            @endphp
                                            @if(in_array($game_id,$exclude_games))
                                            @else
                                            <option value="{{ $bonus->bonus_code }}">{{ $bonus->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <p>- Please submit the deposit form only AFTER you have make deposit to us.</p>
                            <p>- Some bonus code does not allow you to use multiple time.</p>
                            <p>- If the bonus code minimum requirement is MYR100, You need deposit to us MYR100 to be able use the code. Saperate deposit are not ALLOWED you to use the code.</p>
                            <p>- Please enter correct amount of deposit. If we find that your amount insert above is different with the amount that you bank in to us, we will NOT PROCESS the transaction.</p>
                        </div>
                        <div class="clearfix">
                            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning btn-block">BACK</button></a>
                            <button type="submit" class="btn btn-warning btn-block">NEXT</button>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $(".datepicker").datepicker({
            dateFormat: "dd/mm/yy",
            duration: 'fast',
            minDate: "-5D",
            maxDate: "+0D",
            showOtherMonths: true
        });
</script>
<script type="text/javascript">
    
    $('#now').click(function(){
        
        $('#deposit_date').val('{{ \Carbon\Carbon::now()->format('d/m/Y') }}');
        $('#deposit_hour').val('{{ \Carbon\Carbon::now()->format('h') }}');
        $('#deposit_minutes').val('{{ \Carbon\Carbon::now()->format('i') }}');
        $('#deposit_stamp').val('{{ \Carbon\Carbon::now()->format('A') }}');

    });

</script>
@endsection