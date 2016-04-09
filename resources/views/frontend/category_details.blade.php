@extends('frontend')

@section('content')
    <div class="main-content">
        <div class="col-left">

            <ul class="breadCrumb clearFix">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li class="active">{{$category->name}}</li>
            </ul>

            <div class="title">
                <div class="i-product fl"></div>
                <a href="{{url('chuyen-muc', $category->slug)}}"><span class="product">{{$category->name}}</span></a>
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
