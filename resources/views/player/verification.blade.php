@include('front.header')
<div class="content">
    <div class="container">
        <div class="page-content">
        
            <div class="register">
                <div class="title-wrap">
                    <div class="outer-mask">
                        <div class="inner-mask">
                            <div class="title-p">
                                <h2>verification</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="r-content">
                    <form method="POST" action="{{ url('player/verification') }}">
                        @csrf
                        <p>We already send TAC to number {{ Auth::user()->phone }}. We are doing this to verify that you are not BOT. You only do this once.</p>
                        {{-- <p id="timer_text">You need to wait <span id="time">120</span> second before you can request TAC again.</p> --}}
                        <p id="reqeust_tac"><a href="{{ Request::url() }}">(Resend TAC Number)</a></p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-register">
                            <tr>
                                <td>
                                    <input type="hidden" name="_userid" value="{{ Auth::user()->id }}">
                                    <input name="tac_no" type="text" id="tac_no" placeholder="TAC Number" autocomplete="name" class="field-register"/>
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td>
                                    <span class="text-error">
                                    @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
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
<script type="text/javascript">
    
    var i = 119;
    var time = $("#time")
    var timer = setInterval(function() {
      time.html(i);
      if (i == 0) {
        $("#reqeust_tac").show();
        $("#timer_text").hide();
        clearInterval(timer);

      }
      i--;
    }, 1000)


</script>
</body></html>