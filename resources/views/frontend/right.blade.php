<div class="col-right">
    @if ($firstVideo = $videos->shift())
        <div class="right-in">
            <h3 class="title">
              <span class="gray">
               Góc Video
              </span>
            </h3>

            <div class="box-video">
                <div class="videoBoxIn">
                    <div class="videoBoxInObject">
                        {!! $firstVideo->code !!}
                    </div>

                    <h3 class="titleVideo"><a href="{{url('video', $firstVideo->slug)}}">{{ $firstVideo->title }}</a></h3>

                    <p class="countVideo">{{$firstVideo->views}} lượt xem</p>
                </div>
                @if (!empty($page) && ($page == 'index' || $page == 'post_details'))
                    <div class="data">
                        @foreach ($videos as $video)
                            <div class="item cf">
                                <div class="block-videos cf">
                                    <a href="{{url('video', $video->slug)}}" class="thumb-img">
                                        <img src="{{url('image-cached/size1', $video->image)}}" alt="">
                                    </a>
                                    <h3 class="titleVideo"><a href="{{url('video', $video->slug)}}">{{$video->title}}</a></h3>
                                    <p class="countVideo">{{$video->views}} lượt xem</p>
                                </div>

                                
                            </div>
                        @endforeach
                    </div>
               
                @endif
            </div>
        </div>
    @endif

    @if (!empty($page) && ($page == 'index' || $page == 'post_details'))
        @include('frontend.most_question')
    @endif

    <div class="right-in">
        <div class="fb-page" data-href="https://www.facebook.com/viemgan.com.vn" data-width="300" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/viemgan.com.vn"><a href="https://www.facebook.com/viemgan.com.vn">PHÒNG BỆNH GAN</a></blockquote></div></div>
    </div>

    @include('frontend.banner', ['bannerPosition' => 3])
    
    @if (!empty($category) && $category->template == 1)
        @include('frontend.most_read_special')
    @else
        @include('frontend.most_read_normal')
    @endif


    

    
    
    

</div><!--//col-right-->