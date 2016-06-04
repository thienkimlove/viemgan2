<footer class="footer">
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
              <li><a href="#">Trang chủ</a></li>
              <li><a href="http://www.viemgan.com.vn/chuyen-muc/thong-tin-khoa-hoc">Thông tin khoa học</a></li>
              <li><a href="http://www.viemgan.com.vn/tpcn-vien-nen-giai-doc-gan-tue-linh.html">Sản phẩm</a></li>
              <li><a href="http://www.viemgan.com.vn/chuyen-muc/tin-tuc">TIN TỨC</a></li>
              <li><a href="http://www.viemgan.com.vn/video">Video</a></li>
              <li><a href="http://www.viemgan.com.vn/hoi-dap">Hỏi đáp </a></li>
              <li><a href="http://www.viemgan.com.vn/lien-he">LIÊN HỆ</a></li>
            </ul>
          </div>
         </div>
		 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570f69bb385fe2f2"></script>
      </div>
      <div class="copyRight">
        <div class="container">
          <p class="copy">MỌI THÔNG TIN ĐỀU BẢN QUYỀN ĐỀU THUỘC VỀ VIEMGAN.COM.VN </p>
          <p class="address">
            Điện thoại: 1900 6482 - 0912 571 190 </p>
        </div>
      </div>
    </footer>
<!-- <footer class="footer">
    <div class="fix">
        <div class="box-footer">
            <div class="item item-1">
                <div class="head">Mạng xã hội</div>
                <div class="area-social">
                    <ul class="social">
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
                    </ul>
                </div>
            </div>
            <div class="item item-2">
                <div class="head">Danh mục</div>
                <ul class="nav-footer">
                    @foreach ($categories as $cate)
                        @if ($cate->subCategories->count() == 0)
                            <li>
                                <a href="{{url('chuyen-muc', $cate->slug)}}" title="{{$cate->name}}"><span>{{$cate->name}}</span></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="item item-3">
                <div class="head">LIÊN HỆ</div>
                <ul class="nav-footer">
                    <li> Điện thoại:</li>
                </ul>
            </div>
            <div class="item item-4">
                <div class="head">Đăng ký nhận tin</div>
                {!! Form::open(['method' => 'POST', 'route' => ['registerEmail'], 'name' => 'registerEmail']) !!}
                    <input type="email" name="email" data-ng-model="email" class="txt txt-email" placeholder="Email">
                    <input type="submit" value="Gửi" data-ng-click="registerEmailSubmit($event)" class="btn btn-submit">
                {!! Form::close()  !!}
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>//footer -->