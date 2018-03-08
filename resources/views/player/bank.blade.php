@include('front.header')
<div class="content">
    <div class="container">
        <div class="page-content">
        
            <div class="register">
                <div class="title-wrap">
                    <div class="outer-mask">
                        <div class="inner-mask">
                            <div class="title-p">
                                <h2>bank details</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="r-content">
                    <form method="POST" action="{{ url('player/bank') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}">
                        <p>Please enter your bank details first before proceed with deposit</p>
                        <p>This bank details is used for withdraw. Please make sure the details is correct.</p>
                    
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                        <tr>
                                            <td>Bank Name</td>
                                            <td>
                                                <input name="bank_name" type="text" class="field-register" placeholder="Maybank / Cimb / RHB / Others" required />
                                            </td>
                                            <td style="width: 131px;"><span class="text-error">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bank Account Name</td>
                                            <td>
                                                <input name="bank_acc_name" type="text" class="field-register" placeholder="Your Full Name Registered With Bank" required />
                                            </td>
                                            <td style="width: 131px;"><span class="text-error">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bank Account Number</td>
                                            <td>
                                                <input name="bank_acc_no" type="text" class="field-register" placeholder="Your Bank Account Number" required />
                                            </td>
                                            <td>&nbsp;</td>
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