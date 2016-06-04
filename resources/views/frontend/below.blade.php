
<div class="box-medicine cf">
    @foreach ($staticSub as $cate)
    <div class="data">
        <div class="item">
            <div class="title">
                <a href="{{url('chuyen-muc', $cate->slug)}}"><span>{{$cate->name}}</span></a>
            </div>
            @foreach($cate->latestThreePosts as $post)
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
    @endforeach
</div>
@include('frontend.banner', ['bannerPosition' => 5])
