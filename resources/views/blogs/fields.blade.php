<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Abstract Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abstract', 'Abstract:') !!}
    {!! Form::text('abstract', null, ['class' => 'form-control']) !!}
</div>

<!-- Topic Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('topic', 'Topic:') !!}
    {!! Form::textarea('topic', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('blogs.index') !!}" class="btn btn-default">Cancel</a>
</div>
