<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $slider->title !!}</p>
</div>

<!-- Abstract Field -->
<div class="form-group">
    {!! Form::label('abstract', 'Abstract:') !!}
    <p>{!! $slider->abstract !!}</p>
</div>


<!-- Isactive Field -->
<div class="form-group">
    {!! Form::label('isActive', 'Isactive : ') !!}
    @if($slider->isActive == 1)
        <span>
            <i class="fa fa-circle text-success"></i>
        </span>
    @else
        <span>
            <i class="fa fa-circle text-danger"></i>
        </span>
    @endif
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    @if($slider->image !="")
        <img height="100" width="100" src="{{url('public/images/slider/'.$slider->image)}}">
    @endif

</div>

