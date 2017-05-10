<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Keywords Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    {!! Form::textarea('meta_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('seos.index') !!}" class="btn btn-default">Cancel</a>
</div>
