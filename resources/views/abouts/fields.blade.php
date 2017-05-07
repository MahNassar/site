<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Slogan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_slogan', 'Company Slogan:') !!}
    {!! Form::text('company_slogan', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('company_info', 'Company Info:') !!}
    {!! Form::textarea('company_info', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Mission Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('company_mission', 'Company Mission:') !!}
    {!! Form::textarea('company_mission', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Vission Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('company_vission', 'Company Vission:') !!}
    {!! Form::textarea('company_vission', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('abouts.index') !!}" class="btn btn-default">Cancel</a>
</div>
