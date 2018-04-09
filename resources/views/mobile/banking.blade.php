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
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table promo-table" data-snap-ignore="true">
                                    <tbody>
                                        <tr>
                                            <th>Bank Name</th>
                                            <th>Transaction</th>
                                            <th>Min. Transaction</th>
                                            <th>Min. Processing Time</th>
                                            <th>Max. Processing Time</th>
                                        </tr>
                                        <tr>
                                            <td>Maybank</td>
                                            <td>Deposit</td>
                                            <td>30.00</td>
                                            <td>20 seconds</td>
                                            <td>10 minutes</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Withdrawal</td>
                                            <td>100.00</td>
                                            <td>1 minutes</td>
                                            <td>12 hours</td>
                                        </tr>
                                        <tr>
                                                <td>CIMB Bank</td>
                                                <td>Deposit</td>
                                                <td>30.00</td>
                                                <td>20 seconds</td>
                                                <td>10 minutes</td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                                <td>Withdrawal</td>
                                                <td>30.00</td>
                                                <td>20 seconds</td>
                                                <td>10 minutes</td>
                                        </tr>
                                        <tr>
                                                <td>HLB Bank</td>
                                                <td>Deposit</td>
                                                <td>30.00</td>
                                                <td>20 seconds</td>
                                                <td>10 minutes</td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                                <td>Withdrawal</td>
                                                <td>30.00</td>
                                                <td>20 seconds</td>
                                                <td>10 minutes</td>
                                        </tr>
                                        <tr>
                                                <td>Public Bank</td>
                                                <td>Deposit</td>
                                                <td>30.00</td>
                                                <td>20 seconds</td>
                                                <td>10 minutes</td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                                <td>Withdrawal</td>
                                                <td>30.00</td>
                                                <td>20 seconds</td>
                                                <td>10 minutes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h5>Friendly Reminder</h5>
                            <ol class="padding-style9">
                                <li>All Deposit and Withdrawal Processing time are subject to Online Banking availability.</li>
                                <li>Withdrawal are only to be paid to individual bank account with the same REGISTERED name</li> 
                                <li>Please be inform that large withdrawal amount might be take longer processing time.</li> 
                                <li>Please note that if you have any outstanding bonuses on your account, you may not be able to withdraw until you meet the terms of that bonus.</li> 
                                <li>All Deposit are required to meet at least (1) one time rollover amount of the deposit before any withdrawal are to be made.</li>                                         
                            </ol>				
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