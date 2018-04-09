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
                        <li><a href="{{ url('player/deposit/step1') }}" >Deposit</a></li>
                        <li><a href="{{ url('player/withdrawal/step1') }}" class="deposit">Withdrawal</a></li>
                        <li><a href="{{ url('player/transfer/step1') }}" class="rebate">Transfer</a></li>
                        <li><a href="{{ url('player/transaction') }}" class="special">Transaction</a></li>
                        <li class="active"><a href="{{ url('player/profile') }}" class="scr888">Profile</a></li>
                    </ul>
                    <div id="ourHolder" class="promo-box">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        
                        <div class="member-main">
                            <div class="member-row">
                                <h5>Profile Details</h5>
                                <div class="member-main">
                                    <div id="ctl00_MainContent_UpdatePanel1">
                                        <form method="post" action="{{ url('player/profile/update') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                                        <div class="member-row">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member" style="background-color: #181845;">
                                                <tr>
                                                    <td>Email Address</td>
                                                    <td>{{ \Auth::user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Full Name</td>
                                                    <td>{{ \Auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Contact Number</td>
                                                    <td>{{ \Auth::user()->phone }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>
                                                        {{ Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], \Auth::user()->gender , ['class' => 'form-control field-register']) }}
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Date Of Birth</td>
                                                    <td>
                                                        <input name="dob" type="text" maxlength="10" class="form-control field-register datepicker" style="width: 100px;" value="{{ \Auth::user()->dob }}" required/>
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>
                                                        <textarea name="address" rows="2" cols="20" class="form-control field-register" style="height:70px;">{{ \Auth::user()->address }}</textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>State</td>
                                                    <td>
                                                        {{ Form::select('state', [
                                                                    '' => 'select',
                                                                    'Selangor' => 'Selangor',
                                                                    'Perak' => 'Perak',
                                                                    'Kuala Lumpur' => 'Kuala Lumpur',
                                                                    'Johor' => 'Johor',
                                                                    'Kedah' => 'Kedah',
                                                                    'Kelantan' => 'Kelantan',
                                                                    'Melaka' => 'Melaka',
                                                                    'Negeri Sembilan' => 'Negeri Sembilan',
                                                                    'Pahang' => 'Pahang',
                                                                    'Perlis' => 'Perlis',
                                                                    'Pulau Pinang' => 'Pulau Pinang',
                                                                    'Sabah' => 'Sabah',
                                                                    'Sarawak' => 'Sarawak',
                                                                    'Terengganu' => 'Terengganu',
                                                                ],
                                                                \Auth::user()->state,
                                                                ['class' => 'form-control field-register'
                                                            ])
                                                        }}
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SMS Service</td>
                                                    <td>
                                                        {{ Form::select('sms_service', ['1' => 'Yes', '0' => 'No'], \Auth::user()->sms_service , ['class' => 'form-control field-register']) }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="clearfix">
                                            <button type="submit" class="btn btn-warning btn-more pull-right">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <h5>Bank Info</h5>
                                <div class="member-main">
                                    <div class="member-row">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member" style="background-color: #181845;">
                                            
                                            <tr>
                                                <td>Bank Account Name</td>
                                                <td>{{ \Auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 170px;">Bank Name</td>
                                                <td>{{ \Auth::user()->bank_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bank Account Number</td>
                                                <td>{{ \Auth::user()->bank_account_no }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <h5>Change Password</h5>
                                <div class="member-main">
                                    <div id="ctl00_MainContent_upchangepass">
                                        <form method="post" action="{{ url('player/profile/password') }}">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                                        <div class="member-row">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member" style="background-color: #181845;">
                                                <tr>
                                                    <td style="width: 170px;">Current Password</td>
                                                    <td>
                                                        <input name="current_pass" type="password" minlength="6" class="form-control field-txtbox" />
                                                        <span class="text-error"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>New Password</td>
                                                    <td>
                                                        <input name="new_pass" type="password" minlength="6" class="form-control field-txtbox" />
                                                        <span class="text-error"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Confirm Password</td>
                                                    <td><input name="confirm_pass" type="password" minlength="6" class="form-control field-txtbox" />
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="clearfix">
                                            <button type="submit" class="btn btn-warning btn-more pull-right">UPDATE</button>
                                        </div>
                                        </form>
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
<script type="text/javascript">
    $(".datepicker").datepicker({
            dateFormat: "dd/mm/yy",
            showOtherMonths: true,
            changeMonth: true,
            changeYear: true
        });
</script>
@endsection