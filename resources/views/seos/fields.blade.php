<!-- Meta Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('android_app_link', 'Android App Link:') !!}
    {!! Form::text('android_app_link', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('apple_app_link', 'IOS App Link:') !!}
    {!! Form::text('ios_app_link', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    <input type="file" name="logo">
</div>

<div class="form-group col-sm-6">
    {!! Form::label('count_services', 'Service Count:') !!}
    {!! Form::text('count_services', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('count_client', 'Client Count:') !!}
    {!! Form::text('count_client', null, ['class' => 'form-control']) !!}
</div>


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
