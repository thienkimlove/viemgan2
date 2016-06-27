<footer class="footer" id="footer">
    <div class="fix">
        <div class="boxFooter clearFix">
            <div class="areaSocial">
                <ul class="listSocial clearFix">
                    <li><a href="https://www.facebook.com/viemgan.com.vn" target="_blank" class="se">Search</a></li>
                    <li><a href="https://www.youtube.com/user/tuelinhgroup" target="_blank" class="yu">Youtube</a></li>
                    <li><a href="https://www.facebook.com/viemgan.com.vn" target="_blank" class="sk">Skype</a></li>
                    <li><a href="https://www.facebook.com/viemgan.com.vn" target="_blank" class="go">Googleplus</a></li>
                </ul>
            </div>
            <div class="areaLink">
                <ul class="listCategory clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    @foreach ($categories as $cate)
                        @if ($cate->subCategories->count() == 0)
                            <li>
                                <a href="{{url('chuyen-muc', $cate->slug)}}" title="{{$cate->name}}"><span>{{$cate->name}}</span></a>
                            </li>
                        @endif
                    @endforeach
                    <li><a href="{{url('video')}}">Video</a></li>
                    <li><a href="{{url('hoi-dap')}}">Hỏi đáp</a></li>
                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570f69bb385fe2f2"></script>

    <div class="copyRight">
        <div class="container">
            <p class="copy">MỌI THÔNG TIN ĐỀU BẢN QUYỀN ĐỀU THUỘC VỀ VIEMGAN.COM.VN</p>
            <p class="address">
                Điện thoại: 1900 6482 - 0912 571 190 </p>
        </div>
    </div>
</footer>