

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

@include ('Front.header')

<body>

    @yield ('content')

    @yield ('scripts')

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9644895;
    (function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->

</body>
</html>

<!-- Localized -->