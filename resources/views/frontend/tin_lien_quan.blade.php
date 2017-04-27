<div class="box-releated">
    <h3>Tin liên quan</h3>
    @foreach ($related as $post)
        <article class="item cf">
            <h3>
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 50)}}</a>
            </h3>
        </article>
    @endforeach

    @if (isset($additionPost) && $additionPost)
        @foreach ($additionPost as $post)
            <article class="item cf">
                <h3>
                    <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 55)}}</a>
                </h3>
            </article>
        @endforeach
    @endif
</div>