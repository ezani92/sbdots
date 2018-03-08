@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="active">profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">Profile</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        
                        <div class="member-main">
                            <div class="member-row">
                                <h4>Profile Details</h4>
                                <div class="member-main">
                                    <div id="ctl00_MainContent_UpdatePanel1">
                                        <form method="post" action="{{ url('player/profile/update') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                                        <div class="member-row">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                                <tr>
                                                    <td>Email Address</td>
                                                    <td>{{ \Auth::user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Full Name</td>
                                                    <td>
                                                        <input name="fullname" type="text" class="field-register" value="{{ \Auth::user()->name }}" required/>
                                                        <span class="text-error"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contact Number</td>
                                                    <td>
                                                        <input name="phone" type="text" class="field-register" value="{{ \Auth::user()->phone }}" required/>
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>
                                                        {{ Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], \Auth::user()->gender , ['class' => 'field-register']) }}
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Date Of Birth</td>
                                                    <td>
                                                        <input name="dob" type="text" maxlength="10" class="field-register datepicker" style="width: 100px;" value="{{ \Auth::user()->dob }}" required/>
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>
                                                        <textarea name="address" rows="2" cols="20" class="field-register" style="height:70px;">{{ \Auth::user()->address }}</textarea>
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
                                                                ['class' => 'field-register'
                                                            ])
                                                        }}
                                                        <span class="text-error">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SMS Service</td>
                                                    <td>
                                                        {{ Form::select('sms_service', ['1' => 'Yes', '0' => 'No'], \Auth::user()->sms_service , ['class' => 'field-register']) }}
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
                                <h4>Bank Info</h4>
                                <div class="member-main">
                                    <div class="member-row">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                            
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
                                <h4>Change Password</h4>
                                <div class="member-main">
                                    <div id="ctl00_MainContent_upchangepass">
                                        <form method="post" action="{{ url('player/profile/password') }}">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                                        <div class="member-row">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                                <tr>
                                                    <td style="width: 170px;">Current Password</td>
                                                    <td>
                                                        <input name="current_pass" type="password" minlength="6" class="field-txtbox" />
                                                        <span class="text-error"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>New Password</td>
                                                    <td>
                                                        <input name="new_pass" type="password" minlength="6" class="field-txtbox" />
                                                        <span class="text-error"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Confirm Password</td>
                                                    <td><input name="confirm_pass" type="password" minlength="6" class="field-txtbox" />
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
            showOtherMonths: true,
            changeMonth: true,
            changeYear: true
        });
</script>
</body></html>