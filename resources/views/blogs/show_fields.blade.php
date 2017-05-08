<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $blog->id !!}</p>
</div>

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
    <p>{!! $blog->image !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $blog->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $blog->updated_at !!}</p>
</div>

