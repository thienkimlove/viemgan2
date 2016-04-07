<!DOCTYPE html>
<html lang="vi" data-ng-app="Application">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
    <meta content='CSVN' name='generator'/>
	<meta property="fb:app_id" content="1569708656596422" />
    <title>{{!empty($meta_title)? $meta_title : 'Viemgan.com.vn'}}</title>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'Website về sản phẩm và bài viết liên quan tới bệnh gan'}}" />
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'viêm gan, virus, bài viết, hướng dẫn'}}" />
    <script>(function() {
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
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1607876032783308&amp;ev=PixelInitialized" /></noscript>


<!-- Facebook Conversion Code -->
<script>(function() {
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
window._fbq.push(['track', '6030780499151', {'value':'0.00','currency':'VND'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6030780499151&amp;cd[value]=0.00&amp;cd[currency]=VND&amp;noscript=1" /></noscript>	
</head>
<body class="home" data-ng-controller="MainController">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1569708656596422";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
<script type="text/javascript" src="{{url('/js/frontend-custom.js')}}"></script>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",13099]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
@yield('footer')
@include('frontend.outside')
</body>
</html>