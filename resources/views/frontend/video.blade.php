@extends('frontend')

@section('content')

    <ul class="breadCrumb cf">
        <li><a href="{{url('/')}}">HOME</a></li>
        <li class="active">Video</li>
    </ul>

    @include('frontend.top_news', ['latestPost' => $latestPost])
    <div class="main-content">
        <div class="col-left">
            @if ($mainVideo)
            <div class="video-show">
                <h1 class="title">
                    <span>{{$mainVideo->title}}</span>
                </h1>


               <div class="full-video">
                     {!! $mainVideo->code !!}
                </div>

            </div>
            @endif
            <div class="box-medicine cf">
                <h1 class="title">
                    <span>Video</span>
                </h1>
                @foreach ($videos as $video)
                    <div class="data">
                        <div class="item">
                            <div class="block-m">
                               {!! $video->code !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="box-paging">
                {!! with(new \App\Pagination\AcmesPresenter($videos))->render() !!}
                <div class="clear"></div>
            </div>
            @include('frontend.banner', ['bannerPosition' => 4])
            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
        <div class="clear"></div>
    </div><!--//main-content-->
@endsection
