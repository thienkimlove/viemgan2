<div class="right-in" id="sidebar">
    <h2 class="title">
        <span class="red"><a href="{{url('chuyen-muc', 'kinh-nghiem')}}">Bài viết đọc nhiều nhất</a></span>
    </h2>

    <div class="box-medicine cf">
        <div class="data">
            <div class="item">
                @foreach ($mostReads as $post)
                    <div class="list-medicine">
                        <a href="{{url($post->slug . '.html')}}" class="thumb">
                            <img src="{{url('image-cached/size1/' .$post->image)}}"/>
                        </a>

                        <h3><a href="{{url($post->slug . '.html')}}">{{str_limit($post->title, 40)}}</a></h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>