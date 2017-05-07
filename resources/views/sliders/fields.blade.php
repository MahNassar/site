<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'maxlength'=>60]) !!}
</div>

<!-- Abstract Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abstract', 'Abstract:') !!}
    {!! Form::text('abstract', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image">
</div>

<!-- Isactive Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isActive', 'Isactive:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isActive', false) !!}
        {!! Form::checkbox('isActive', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sliders.index') !!}" class="btn btn-default">Cancel</a>
</div>
