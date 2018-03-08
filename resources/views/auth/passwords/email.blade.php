@include('front.header')
<div class="content">
    <div class="container">
        <div class="page-content">
        
            <div class="register">
                <div class="title-wrap">
                    <div class="outer-mask">
                        <div class="inner-mask">
                            <div class="title-p">
                                <h2>Reset Login</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="r-content">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p>Please enter your registered email to reset your password:</p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-register">
                            <tr>
                                <td>
                                    <input id="email" type="email" class="field-register" name="email" value="{{ old('email') }}" required>
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
                                <td>
                                    <span class="text-error">
                                        @if ($errors->has('email'))
                                            {{ $errors->first('email') }}
                                        @endif
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        </table>
                    
                </div>
                <div class="clearfix">
                    <input type="submit" name="btnsend" value="Send Reset Email" id="btnsend" class="btn btn-warning btn-more pull-right" />
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</div>    
@include('front.footer')
</body></html>