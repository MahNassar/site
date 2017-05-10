
<!-- Company Name Field -->
<div class="form-group">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{!! $about->company_name !!}</p>
</div>

<!-- Company Slogan Field -->
<div class="form-group">
    {!! Form::label('company_slogan', 'Company Slogan:') !!}
    <p>{!! $about->company_slogan !!}</p>
</div>

<!-- Company Info Field -->
<div class="form-group">
    {!! Form::label('company_info', 'Company Info:') !!}
    <p>{!! $about->company_info !!}</p>
</div>

<!-- Company Mission Field -->
<div class="form-group">
    {!! Form::label('company_mission', 'Company Mission:') !!}
    <p>{!! $about->company_mission !!}</p>
</div>

<!-- Company Vission Field -->
<div class="form-group">
    {!! Form::label('company_vission', 'Company Vission:') !!}
    <p>{!! $about->company_vission !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    @if($about->image)
        <img height="100px" width="100px" src="{{url('public/images/'.$about->image)}}">
    @endif
</div>
