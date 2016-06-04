<header class="header" data-ng-controller="HeaderController">
    <div class="header-mid">
        <div class="fix">
            
                <a href="" title="" class="logo"><img src="{{url('images/logo.png')}}" alt="Giải độc gan"></a>
            
            <div class="slogan" align="center">
                <img src="{{url('images/slogan.png')}}" alt="Slogan">
            </div>
            <div class="area-social cf">
                <div class="social">
                  <img src="{{url('images/contact.jpg')}}" alt="">
                </div>
                <!-- <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/viemgan.com.vn" class="i-facebook thumb-img"></a>
                    </li>
                    <li>
                        <a href="#" class="i-tw thumb-img"></a>
                    </li>
                    <li>
                        <a href="#" class="i-youtube thumb-img"></a>
                    </li>
                    <li>
                        <a href="#" class="i-google thumb-img"></a>
                    </li>
                </ul> -->
                <script type="text/javascript" src="//admicro1.vcmedia.vn/cpa/admicro.js"></script><script type="text/javascript">window.admicro_cpa_q = window.admicro_cpa_q || [];window.admicro_cpa_q.push({event: "retargeting", id: 1633});</script>
                <div class="box-find" id="box-find">
                
                <script type="text/javascript">
            (function () {
                        var _eclickq = window._eclickq || (window._eclickq = []);
                        if (!_eclickq.loaded) {
                        var eclickTracking = document.createElement('script');
                             eclickTracking.async = true;
                             eclickTracking.src = ('https:'==document.location.protocol?'https:':'http:')+'//s.eclick.vn/delivery/retargeting.js';
                             var s = document.getElementsByTagName('script')[0];
                             s.parentNode.insertBefore(eclickTracking, s);
                             _eclickq.loaded = true;                                                           
                        }
                        _eclickq.push(['addPixelId', 11651]);
            })();
            window._eclickq = window._eclickq || [];
            window._eclickq.push(['track', 'PixelInitialized', {}]);
</script>
                    <form novalidate>
                        <input type="text" data-ng-model="keyword" placeholder="Từ khóa tìm kiếm" name="keyword" class="txt"/>
                        <input type="submit" value="" name="submit" class="btn-find" data-ng-click="search()" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
