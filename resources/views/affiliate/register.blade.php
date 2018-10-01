@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
        
            <div class="register">
                <div class="title-wrap">
                    <h2>Affiliate registration</h2>
                </div>
                <div class="r-content">
                    <form method="POST" action="{{ url('aff') }}">
                        @csrf
                        <input type="hidden" name="ref" value="{{ $request->ref }}">
                        <p>Please introduce yourself:</p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-register">
                            <tr>
                                <td>
                                    <input name="name" type="text" id="name" placeholder="Full Name" autocomplete="name" class="field-register" onkeyup="nospaces(this)" value="{{old('name') }}" / required>
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="email" type="email" autocomplete="email" placeholder="Email Address" class="field-register" required/>
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="phone" type="text" placeholder="60123456789" class="field-register" autocomplete="tel-national" value="{{old('phone') }}" required/>
                                </td>
                                <td class="col-2">Please provide a valid Contact Number</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="password" type="password" autocomplete="new-password" placeholder="Password" class="field-register" required/>
                                </td>
                                <td class="col-2">Minimum 6 alphamumeric (A-Z, a-z, 0-9) character only.</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="password_confirmation" type="password" autocomplete="new-password" placeholder="Confirm Password" class="field-register" required/>
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            

                            <tr>
                                <td style="width: 375px;">
                                    <div class="g-recaptcha" data-sitekey="6LdrOUoUAAAAAO3ICDvvbpAnGFz55RoADJ1YP4Vt"></div>
                                </td>
                                <td class="col-2">
                                    <table>
                                    </table>
                                </td>
                                <td><span class="text-error">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>This email has been used, please use another email.</strong>
                                        </span>
                                    @endif
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ old('phone') }} has already used for registration. Please Contact Customer Services for more assistance.</strong>
                                        </span>
                                    @endif
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>Please make sure your password is more than 6(six) character</strong>
                                        </span>
                                    @endif
                                    </span>
                                </td>
                            </tr>
                        </table>
                    
                </div>
                <div class="clearfix">
                    <input type="submit" name="btnsend" value="Submit" id="btnsend" class="btn btn-warning btn-more pull-right" />
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</div>    
@include('front.footer')
</body></html>