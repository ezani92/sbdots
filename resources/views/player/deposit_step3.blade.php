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
                        <h4>Step 3 : Please fill in your deposit details.</h4>
                        
                        <div class="member-main">

                            <form method="post" action="{{ url('player/deposit') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="game_id" value="{{ $game_id }}">
                                <div class="member-row">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                        <tr>
                                            <td>Deposit Amount</td>
                                            <td>
                                                <input name="amount" type="number" min="{{ \App\Setting::meta('MIN_DEPOSIT') }}" step="0.01" class="field-register" value="{{ old('amount') }}" required />
                                            </td>
                                            <td style="width: 131px;"><span class="text-error">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Deposit Method</td>
                                            <td class="col-2">
                                                <div class="sms"><input value="method_online" name="payment_method" type="radio" style="outline: none;" / required><span>Online</span></div>
                                                <div class="sms"><input value="method_atm" name="payment_method" type="radio" style="outline: none;" /><span>Atm</span></div>
                                                <div class="sms"><input value="method_cash" name="payment_method" type="radio" style="outline: none;" /><span>Cash</span></div>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Date / Time</td>
                                            <td>
                                                <div style="float:left;">
                                                    <input name="deposit_date" type="text" maxlength="10" class="field-register datepicker" style="width: 100px;" value="{{ old('deposit_date') }}" required/>
                                                </div>
                                                <div style="float:left;">
                                                    <div id="ctl00_MainContent_uptxtdatetime">
                                                        <div style="float:left; margin-right: 5px; ">
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
                                                        <div style="float:left; margin-right: 5px; ">
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
                                                            <select name="deposit_stamp" id="deposit_stamp" class="field-register" style="width:55px;" required>
                                                                <option value="AM">AM</option>
                                                                <option value="PM">PM</option>
                                                            </select>
                                                            &nbsp;
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-error">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Reference No</td>
                                            <td>
                                                <input name="refference_no" type="text" maxlength="30" class="field-register" value="{{ old('refference_no') }}" required/>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Scanned Receipt</td>
                                            <td>
                                                <div id="ctl00_MainContent_UpdatePanel5">
                                                    <input type="file" name="receipt" id="receipt" value="{{ old('receipt') }}" required/>
                                                </div>
                                            </td>
                                            <td><span class="text-error"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Bonus Code</td>
                                            <td>
                                                <select name="bonus_code"  class="field-register">
                                                    <option value="">No Bonus</option>
                                                    @foreach($bonuses as $bonus)
                                                        <option value="{{ $bonus->bonus_code }}">{{ $bonus->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><span class="text-error"></span></td>
                                        </tr>
                                    </table>
                                <p>- Please submit the deposit form only AFTER you have make deposit to us.</p>
                                <p>- Some bonus code does not allow you to use multiple time.</p>
                                <p>- If the bonus code minimum requirement is MYR100, You need deposit to us MYR100 to be able use the code. Saperate deposit are not ALLOWED you to use the code.</p>
                                <p>- Please enter correct amount of deposit. If we find that your amount insert above is different with the amount that you bank in to us, we will NOT PROCESS the transaction.</p>
                                </div>
                                <div class="clearfix">
                                    <a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning btn-more pull-left">BACK</button></a>
                                    <button type="submit" class="btn btn-warning btn-more pull-right">NEXT</button>
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

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $(".datepicker").datepicker({
            dateFormat: "dd/mm/yy",
            showOn: 'both',
            buttonImage: "{{ secure_asset('images/date.png') }}",
            buttonText: "Open datepicker",
            buttonImageOnly: true,
            showAnim: 'slideDown',
            duration: 'fast',
            minDate: "-5D",
            maxDate: "+0D",
            showOtherMonths: true
        });
</script>

</body></html>