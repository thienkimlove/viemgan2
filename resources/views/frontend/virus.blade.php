@extends('frontend')

@section('content')
    <ul class="breadCrumb cf">
        <li><a href="{{url('/')}}">HOME</a></li>
        <li class="active">{{$category->name}}</li>
    </ul>
    @include('frontend.top_news', ['latestPost' => $latestPost])
    <div class="main-content">
        <div class="col-left">

            <div class="box-medicine cf">
                <h1 class="title">
                    <a href="{{url('chuyen-muc', $category->slug)}}"><span>{{$category->name}}</span></a>
                </h1>
                @foreach ($posts as $post)
                <div class="data">
                    <div class="item">
                        <div class="block-m">
                            <a href="{{url($post->slug.'.html')}}" class="thumb-img">
                                <img src="{{url('image-cached/size2/' .$post->image)}}" />
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" class="thumb">{{str_limit($post->title, 50)}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="box-paging">
                {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                <div class="clear"></div>
            </div>
            @include('frontend.tin_lien_quan', ['related' => $related])
            @include('frontend.banner', ['bannerPosition' => 4])
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
        <div class="clear"></div>
    </div><!--//main-content-->
@endsection
