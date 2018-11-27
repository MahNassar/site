<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $service->type !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $service->title !!}</p>
</div>

<!-- Abstract Field -->
<div class="form-group">
    {!! Form::label('abstract', 'Abstract:') !!}
    <p>{!! $service->abstract !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $service->description !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    @if($service->image !="")
        <img height="100" width="100" src="{{url('public/images/services/'.$service->image)}}">
    @endif

</div>
