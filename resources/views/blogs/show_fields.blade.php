<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $blog->title !!}</p>
</div>

<!-- Abstract Field -->
<div class="form-group">
    {!! Form::label('abstract', 'Abstract:') !!}
    <p>{!! $blog->abstract !!}</p>
</div>

<!-- Topic Field -->
<div class="form-group">
    {!! Form::label('topic', 'Topic:') !!}
    <p>{!! $blog->topic !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    @if($blog->image)
        <img height="100" width="100" src="{{url('public/images/blog/'.$blog->image)}}">
    @endif
</div>


