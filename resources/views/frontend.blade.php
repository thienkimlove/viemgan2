<!DOCTYPE html>
<html lang="vi" data-ng-app="Application">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="{{url('favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
    <meta content='CSVN' name='generator'/>
    <meta property="fb:app_id" content="1569708656596422"/>
    <title>{{!empty($meta_title)? $meta_title : 'Viemgan.com.vn'}}</title>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'Điều trị hiệu quả bệnh viem gan, viem gan virus, xơ gan, ung thư gan, giải độc gan, men gan cao'}}"/>
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'viem gan, viem gan virus, xơ gan, ung thư gan, giải độc gan, men gan cao'}}"/>
	<meta property="fb:app_id" content="1569708656596422"/>
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1607876032783308']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript>
        <img height="1" width="1" alt="" style="display:none"
             src="https://www.facebook.com/tr?id=1607876032783308&amp;ev=PixelInitialized"/>
    </noscript>


    <!-- Facebook Conversion Code -->
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6030780499151', {'value': '0.00', 'currency': 'VND'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none"
                   src="https://www.facebook.com/tr?ev=6030780499151&amp;cd[value]=0.00&amp;cd[currency]=VND&amp;noscript=1"/>
    </noscript>

<!-- Begin Ad360, important page views tracking -->
<script type="text/javascript">
(function(d){
var s = d.createElement('script');s.async = true;s.type = 'text/javascript';s.src = 'http://' + 's.ad360.vn/showAds.htm?bapid=231&uid=6040';var node = d.getElementsByTagName('script')[0];node.parentNode.insertBefore(s, node);
})(document);
</script>
<noscript>
<img border="0" hspace="0" vspace="0" width="1" height="1" src="http://tracking.ad360.vn/retargeting.html?bapid=231&uid=6040" /> 
</noscript>
<!-- End Ad360, important page views tracking -->

</head>
<body class="home" data-ng-controller="MainController">
<div class="wrapper" id="wrapper">
    @include('frontend.header')
    @include('frontend.nav')
    <section class="section fix">
        @yield('content')
    </section><!--//section-->
    @include('frontend.footer')
    <div class="overlay" id="overlay"></div>
    @include('frontend.left_menu')
</div>

<script>
    var Config = {};
    Config.url = '{{ url('/') }}';

</script>
<script type="text/javascript" src="{{url('/js/frontend.js')}}"></script>
<script type="text/javascript" src="{{url('/js/fixedsidebar.js')}}"></script>
<script type="text/javascript" src="{{url('/js/frontend-custom.js')}}"></script>
<script type='text/javascript'>window._sbzq || function (e) {
        e._sbzq = [];
        var t = e._sbzq;
        t.push(["_setAccount", 13099]);
        var n = e.location.protocol == "https:" ? "https:" : "http:";
        var r = document.createElement("script");
        r.type = "text/javascript";
        r.async = true;
        r.src = n + "//static.subiz.com/public/js/loader.js";
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(r, i)
    }(window);</script>
<script type="text/javascript" src="//admicro1.vcmedia.vn/cpa/admicro.js"></script>
<script type="text/javascript">window.admicro_cpa_q = window.admicro_cpa_q || [];
    window.admicro_cpa_q.push({event: "retargeting", id: 1633});
</script>

<!-- Facebook Code Comment-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1569708656596422',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1569708656596422";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Code Comment-->

<script type="text/javascript">
    (function () {
        var _eclickq = window._eclickq || (window._eclickq = []);
        if (!_eclickq.loaded) {
            var eclickTracking = document.createElement('script');
            eclickTracking.async = true;
            eclickTracking.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//s.eclick.vn/delivery/retargeting.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(eclickTracking, s);
            _eclickq.loaded = true;
        }
        _eclickq.push(['addPixelId', 11651]);
    })();
    window._eclickq = window._eclickq || [];
    window._eclickq.push(['track', 'PixelInitialized', {}]);
</script>


<!--- Script ANTS - remarketing -->
<script type="text/javascript" async src="//e-vcdn.anthill.vn/delivery-ants/conversion.js"></script>
<!--- end ANTS - remarketing --> 
<script type="text/javascript">
  var ants_analytic = ants_analytic || [];
  ants_analytic.push({conversionId : "cd56d85f"});
</script>

<a id="callNowButton" href="tel:0912571190" class="ft-btn">&nbsp;</a>
<style>@media (max-width: 640px) {
#callNowButton{
display: block;
height: 80px;
position: fixed;
left: 0;
border-bottom-right-radius: 40px;
border-top-right-radius: 40px;
width: 100px;
bottom: -20px;
border-top: 2px solid rgba(51,187,51,1);
background: url("http://www.nuocsucmieng.vn/files/hotline3.png") center 10px no-repeat #fafdfa;
text-decoration: none;
box-shadow: 0 0 5px #888;
-webkit-box-shadow: 0 0 5px #888;
-moz-box-shadow: 0 0 5px #888;
z-index: 9999;
}
}
</style>

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 954780037;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954780037/?guid=ON&amp;script=0"/>
</div>
</noscript>

@yield('footer')
@include('frontend.outside')
</body>
</html>