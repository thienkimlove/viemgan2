@extends('frontend')

@section('content')
    <div class="main-content">
        <div class="main-content">
            <div class="col-left">
                <ul class="breadCrumb cf">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li class="active">Chia sẻ</li>
                </ul>
                <div class="title">
                    <span>Chia sẻ</span>
                </div>
                <div class="box-faq">
                    <?php $i = 0; ?>
                    @foreach ($questions as $question)
                    <?php $i++; ?>
                    <article class="item">
                        <div class="number">{{$i}}</div>
                        <div class="content">
                            <a>
                                <img src="{{url('files/images/200_'. $question->image)}}" width="220" height="130" />
                            </a>
                            <h3 class="title-faq">{{$question->question}}</h3>
                            <time class="time" datetime="{{$question->updated_at}}">{{$question->updated_at}}</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void(0)" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>{{$question->answer}}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                <div class="box-paging">
                    {!! with(new \App\Pagination\AcmesPresenter($questions))->render() !!}
                    <div class="clear"></div>
                </div>
                @include('frontend.below')
                <div class="clear"></div>
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div>

    </div>
@endsection