@extends('frontend')

@section('content')
    <div class="main-content">

            <ul class="breadCrumb cf">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li class="active">{{$category->name}}</li>
            </ul>
        <div class="col-left">

            <div class="title">
                <!-- <div class="i-product fl"></div> -->
                <a href="{{url('chuyen-muc', $category->slug)}}" class="news-title">
                    <span class="">{{$category->name}}</span>
                </a>
            </div>
           @include('frontend.list', ['posts' => $posts])

           @include('frontend.tin_lien_quan', ['related' => $related])

           @include('frontend.below')

            <div class="clear"></div>
        </div><!--//col-left-->
        @include('frontend.right')
        <div class="clear"></div>
    </div>
@endsection
