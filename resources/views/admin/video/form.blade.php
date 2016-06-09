<div class="form-group">
    {!! Form::label('title', 'Tiêu đề') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::label('code', 'Code Video') !!}
     {!! Form::textarea('code', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    @if ($video->image)
        <img src="{{url('image-cached/size1/' .$video->image)}}" />
        <hr>
    @endif
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('desc', 'Description') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit($submitText, ['class' => 'btn btn-primary form-control']) !!}
  </div>