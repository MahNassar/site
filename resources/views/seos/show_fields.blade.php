<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $seo->id !!}</p>
</div>

<!-- Meta Description Field -->
<div class="form-group">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    <p>{!! $seo->meta_description !!}</p>
</div>

<!-- Meta Keywords Field -->
<div class="form-group">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    <p>{!! $seo->meta_keywords !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $seo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $seo->updated_at !!}</p>
</div>

