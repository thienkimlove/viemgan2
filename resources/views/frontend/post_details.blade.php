@extends('frontend')

@section('content')

<div class="main-content">
    <div class="col-left">

        <ul class="breadCrumb cf">
            <li><a href="{{url('/')}}">HOME</a></li>
            <li><a href="{{url('chuyen-muc', $post->category->slug)}}"><span>{{$post->category->name}}</span></a></li>
            <li class="active">{{$post->title}}</li>
        </ul>

        <div class="title">
            <span>{{$post->category->name}}</span>
        </div>
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
        @include('frontend.banner', ['bannerPosition' => 4])
		<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1569708656596422',
      xfbml      : true,
      version    : 'v2.5'
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
        @include('frontend.below')
        <div class="clear"></div>
    </div><!--//col-left-->
    @include('frontend.right')
    <div class="clear"></div>
</div>
@endsection