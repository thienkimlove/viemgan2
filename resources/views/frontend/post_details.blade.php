@extends('frontend')

@section('content')

<div class="main-content">
    <div class="col-left">

        <ul class="breadCrumb cf">
            <li><a href="{{url('/')}}">HOME</a></li>
            <li><a href="{{url('chuyen-muc', $post->category->slug)}}"><span>{{$post->category->name}}</span></a></li>
            <li class="active">{{$post->title}}</li>
        </ul>

        <!-- <div class="title">
            <span>{{$post->category->name}}</span>
        </div> -->
        <article class="box-detail">
            <h1 class="head">{{$post->title}}</h1>
            <div class="utility">
                <div class="item">
                    <div class="fb-like"  data-href="{{url($post->slug.'.html')}}" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                <div class="item">
                    <div class="g-plusone" data-size="medium"></div>
                </div>
                <div class="info">
                    <time class="time" datetime="{{$post->updated_at}}">{{$post->updated_at}}</time>
                </div>
                <div class="clear"></div>
            </div>
            {!!$post->content!!}
        </article><!--//box-detail-->
		 <ul class="listButton cf">
          <li class="ilocal"><a href="#">Xem điểm bán</a></li>
          <li class="icall"><a href="#">1900 6482 - 0912 571 190</a></li>
        </ul>
        @include('frontend.banner', ['bannerPosition' => 4])

        <div class="box-share">
            <div class="item">
                <div class="fb-like" data-href="http://www.viemgan.com.vn" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
            <div class="item">
                <div class="g-plusone" data-size="medium"></div>
            </div>
            <div class="clear"></div>
        </div><!--//box-share-->
      @if ($post->tags->count() > 0)
      @include('frontend.post_tag', ['tags' => $post->tags])
      @endif
        @include('frontend.tin_lien_quan', ['related' => $related, 'additionPost' => $additionPost])
        <div class="box-form">
            <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5" data-colorscheme="light"></div>
            <div class="clear"></div>
        </div><!--//box-form-->
        <div class="box-medicine cf">
            <div class="data">
                <div class="item">
                    <div class="title">
                        <a href="{{url('chuyen-muc', 'y-kien-chuyen-gia')}}"><span>Ý kiến chuyên gia</span></a>
                    </div>
                    @foreach($relatedYkien as $post)
                        <div class="list-medicine">
                            <a href="{{url($post->slug . '.html')}}" class="thumb">
                                <img src="{{url('image-cached/size1/' .$post->image)}}" />
                            </a>
                            <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 40)}}</a></h3>
                            <p>
                                {{str_limit($post->desc, 70)}}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="data">
                <div class="item pr0">
                    <div class="title">
                        <a href="{{url('chuyen-muc', 'duoc-lieu-voi-benh-gan')}}"><span>Dược liệu với bệnh Gan</span></a>
                    </div>
                    @foreach($relatedDuocLieu as $post)
                        <div class="list-medicine">
                            <a href="{{url($post->slug . '.html')}}" class="thumb">
                                <img src="{{url('image-cached/size1/' .$post->image)}}" />
                            </a>
                            <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 40)}}</a></h3>
                            <p>
                                {{str_limit($post->desc, 70)}}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('frontend.banner', ['bannerPosition' => 5])

        <div class="clear"></div>
    </div><!--//col-left-->
    @include('frontend.right')
    <div class="clear"></div>
</div>
@endsection