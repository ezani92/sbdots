<div id="sidebar" class="page-sidebar">
    <div class="page-sidebar-scroll">
                     
        <div class="navigation-items">
            
            @guest
            <div class="nav-item">
                <a href="{{ url('registration') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_join_now.png);">Join Now</a>
            </div>
            @else

            @endguest
            <div class="nav-item">
                <a href="{{ url('/') }}" class="main-nav active" style="background-image: url(mobile/images/common/icon_home.png);">Home</a>
            </div>
            <div class="nav-item">
                    <a href="{{ url('about_us') }}" class="main-nav" style="background-image: url(mobile/images/common/icon_about_us.png);">About Us</a>
                </div>
            <div class="nav-item">
                <a href="{{ url('sportsbooks') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_sportsbook.png);">Sportsbook</a>
            </div>
            <div class="nav-item">
                <a href="{{ url('live_casinos') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_live_casino.png);">Live Casino</a>
            </div>
            <div class="nav-item">
                <a href="{{ url('slots') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_slots.png);">Slots</a>
            </div> 
            <div class="nav-item">
                <a href="{{ url('arcades') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_arcade.png);">Arcade</a>
            </div> 
            <div class="nav-item">
                <a href="{{ url('lottery') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_wheel.png);">Lottery</a>
            </div> 
            <div class="nav-item">
                <a href="{{ url('promotions') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_gift.png);">Promotions</a>
            </div> 
            <div class="nav-item">
                <a href="{{ url('contact_us') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_contact.png);">Contact Us</a>
            </div>
            <div class="nav-item">
                    <a href="{{ url('faq') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_faqs.png);">FAQs</a>
            </div>
            <div class="nav-item">
                <a href="{{ url('tnc') }}" class="main-nav " style="background-image: url(mobile/images/common/icon_list.png);">Terms & conditions</a>
            </div>
            <div class="nav-item">
                <a href="{{ url('api/switch-desktop') }}" class="main-nav " style="background-image: url(mobile/images/common/desktop.png);">Switch To Desktop Version</a>
            </div>
            
        </div>      
        <p class="sidebar-copyright center-text">SBDot.net © Copyrights 2018. </br> All rights reserved.</p>
        <!-- <div class="desktop"><a href="javascript:document.getElementById('ctl00_lnkbtn_viewdesktop').click();">Switch to Desktop View</a></div>
        <a id="ctl00_lnkbtn_viewdesktop" href="javascript:__doPostBack('ctl00$lnkbtn_viewdesktop','')" style="color: #2980b9; visibility: hidden; position: absolute;">Switch to Desktop View</a> -->
                
    </div>
</div>