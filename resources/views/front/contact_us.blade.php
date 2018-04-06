@extends ('front.master')

@section('banner')

<div class="banner-p">
    <img src="images/common/banner-contact.jpg"/>
</div>
    
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="page-content">
			<div class="title-wrap">
				<div class="outer-mask">
					<div class="inner-mask">
						<div class="title-p"><h2>contact us</h2></div>
					</div>
				</div>
			</div>
			<div class="contact-text">
				<p>Your opinions, comments, ideas and suggestions are very valuable to us. And we hope that it will help us to progress in future. For any further information required, you’re welcome to contact us at</p>
			</div>
			<div class="contact-box">
				<div class="horizontal clearfix">
					<div class="box p-r"><img src="images/common/contact_my.jpg"/>+6016 959 3762</div>
					<div class="box p-r"><img src="images/common/whatsapp.png"/><a href="https://api.whatsapp.com/send?phone=60169593762" class="btn btn-warning btn-more btn-chat">Whatsapp<a></div>
				</div>
				<div class="horizontal clearfix">
					<div class="box p-r"><img src="images/common/contact_wechat.png"/>sbdot_my</div>
					<div class="box p-r"><img src="images/common/contact_live.png"/><input type="button" class="btn btn-warning btn-more btn-chat" value="LIVE CHAT 24/7" onclick="parent.LC_API.open_chat_window({source:'minimized'}); return false"></div>
				</div>
			</div>
			<!-- <div class="register">
				<div class="title-wrap">
					<div class="outer-mask">
						<div class="inner-mask">
							<div class="title-p"><h2>enquiry form</h2></div>
						</div>
					</div>
                            <span style="position: relative; left: 400px;"></span>
				</div>
				<div class="r-content">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-register">
						<tr>
							<td>
                            <input name="ctl00$MainContent$txtname" type="text" maxlength="100" id="ctl00_MainContent_txtname" class="field-register enquiry" placeholder="Name" AutoComplete="off" />
                            </td>
							<td class="col-3">&nbsp;</td>
							<td><span class="text-error"></span></td>
						</tr>
						<tr>
							<td>Please tick which method of communication you would prefer.</td>
							<td class="col-3">&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>
								<div class="sms"><span class="checkbox"><input id="ctl00_MainContent_chkphone" type="checkbox" name="ctl00$MainContent$chkphone" /><label for="ctl00_MainContent_chkphone">Phone</label></span></div>
                                <input name="ctl00$MainContent$txtcontactno" type="text" maxlength="12" id="ctl00_MainContent_txtcontactno" class="field-register method" AutoComplete="off" />
							</td>
							<td class="col-3">&nbsp;</td>
							<td><span class="text-error">
                
                </span></td>
						</tr>
						<tr>
							<td>
								<div class="sms"><span class="checkbox"><input id="ctl00_MainContent_chkemail" type="checkbox" name="ctl00$MainContent$chkemail" /><label for="ctl00_MainContent_chkemail">Email</label></span></div>
                                <input name="ctl00$MainContent$txtemail" type="text" maxlength="100" id="ctl00_MainContent_txtemail" class="field-register method" AutoComplete="off" />
							</td>
							<td class="col-3">&nbsp;</td>
							<td><span class="text-error">
                
                
                                </span></td>
						</tr>
						<tr>
							<td>
                            <textarea name="ctl00$MainContent$txtmesssage" rows="2" cols="20" id="ctl00_MainContent_txtmesssage" AutoComplete="off" placeholder="Message" class="field-register enquiry textarea" style="resize: none; min-height:100px;"></textarea>
                            </td>
							<td class="col-3">&nbsp;</td>
							<td><span class="text-error"></span></td>
						</tr>
						<tr>
							<td>
                            <input name="ctl00$MainContent$txtCaptcha" type="text" maxlength="4" id="ctl00_MainContent_txtCaptcha" autocomplete="off" placeholder="Vallidation Code" class="field-register enquiry" />
                            </td>
							<td class="col-3" style="position: relative;">
                    <div id="ctl00_MainContent_upCaptcha">
		
                    <img src="Captcha.aspx" id="ctl00_MainContent_imgcaptcha" alt="Verification Code" width="59" height="20" /> 
								<a href="javascript:document.getElementById('ctl00_MainContent_lnkbtnrefresh').click();"><img src="images/common/refresh.png" class="code"/></a>
                      
	</div>
                    <a id="ctl00_MainContent_lnkbtnrefresh" href="javascript:__doPostBack(&#39;ctl00$MainContent$lnkbtnrefresh&#39;,&#39;&#39;)" style="display: none;"><font color="White"></font></a>
							</td>
							<td><span class="text-error"></span></td>
						</tr>
					</table>
				</div>
				<div class="clearfix">
                    <input type="submit" name="ctl00$MainContent$btnsend" value="SUBMIT" id="ctl00_MainContent_btnsend" class="btn btn-warning btn-more pull-right" />
				</div>
			</div> -->
		</div>
	</div>
</div>
        
<div id="ctl00_UpdateProgress1" style="display:none;">
	
        <div style="background-color: #808080; filter:alpha(opacity=60); opacity:0.60; width: 100%; top: 0px; left: 0px; position: fixed; height: 100%; z-index: 100002 !important;">
        </div>
          <div style="xpadding: 5px; margin: auto; filter: alpha(opacity=100); opacity: 1;
              vertical-align: middle; top: 45%; position: fixed; right: 50%; z-index: 100003 !important;
              text-align: center; xheight: 31px; xwidth: 31px; background-color: #000000; border-radius: 8px;">
              <img src="images/ajax-loader.gif" alt="Loading" style="width: 60px; height: 60px; padding: 10px;"/>
        </div>
    
</div>
    
@endsection
