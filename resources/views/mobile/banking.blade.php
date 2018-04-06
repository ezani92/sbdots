@extends('mobile.master')

@section('content')        

        <div class="all-elements">

            @include ('mobile.sidebar')
        
            <div id="content" class="page-content">
        
            @include ('mobile.nav')	
                        
            <div>
                <div id="ctl00_UpdatePanel1">
            
               
                <div class="container bg-dark">
                    <h2>Banking</h2>
                    <div class="form-register">
                        <div class="table-responsive no-bottom">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table promo-table">
                                <tbody>
                                    <tr>
                                        <td rowspan="2">Banking Options</td>
                                        <td colspan="2">Transaction Limit (MYR)</td>
                                        <td rowspan="2">Transaction Timeline</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum</td>
                                        <td>Maximum</td>
                                    </tr>
                                    <tr>
                                        <th colspan="4"><strong>Deposit</strong></th>
                                    </tr>
                                    <tr>
                                        <td>ATM</td>
                                        <td rowspan="2" style="vertical-align:middle;">30.00</td>
                                        <td rowspan="2" style="vertical-align:middle;">50,000.00</td>
                                        <td rowspan="2" style="vertical-align:middle;">15 Minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Internet Banking</td>
                                    </tr>
                                    <tr>
                                        <th colspan="4"><strong>Withdrawal</strong></th>
                                    </tr>
                                    <tr>
                                        <td>Local Bank Transfer</td>
                                        <td style="vertical-align:middle;">50.00</td>
                                        <td style="vertical-align:middle;">30,000.00</td>
                                        <td style="vertical-align:middle;">Quick(<5,000) = 15 Minutes<br>Normal = 1 Day</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <ol class="padding-style9">
                            <li>The minimum amount is based on per transaction.</li>
                            <li>The maximum amount is based on per transaction per day.</li>
                            <li>Large withdrawal amount might take longer to be processed.</li>
                            <li>Processing times only come into effect once we have received and verified your transaction request.</li>
                            <li>Please note that if you have any outstanding bonuses on your account you may not be able to withdraw until you meet the terms of that bonus.</li>
                            <li>In the condition of the stakes that below 50% of the total deposited amount, any withdrawal requests would be subjected to 10% service &amp; administration charges based on total deposited amount.</li>
                            <li>An SMS notification will be sent to you every time funds are deposited to or withdrawn from your player account.</li>			
                        </ol>				
                    </div>
                </div>
                
        
                
        </div>
        <div id="ctl00_UpdateProgress1" style="display:none;">
            
        <div class="overlay" />
                    <div class="overlayContent">
                        <img src="{{ asset('images/ajax-loader.gif') }}" alt="Loading" border="1" />
                    </div>
            
        </div>
            </div>
        
            @include ('mobile.footer')
                            
            </div>  
            
        </div>
    
@endsection