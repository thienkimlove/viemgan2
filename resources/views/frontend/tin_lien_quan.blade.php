<div class="box-releated">
    <h3>Tin liên quan</h3>
    @foreach ($related as $post)
        <article class="item">
            <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">
                <img src="{{url('image-cached/size4/' .$post->image)}}" />
            </a>
            <h3>
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 50)}}</a>
            </h3>
        </article>
    @endforeach

    @if ($additionPost)
        @foreach ($additionPost as $post)
            <article class="item">
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">
                    <img src="{{url('image-cached/size4/' .$post->image)}}" />
                </a>
                <h3>
                    <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 50)}}</a>
                </h3>
            </article>
        @endforeach
    @endif
</div>