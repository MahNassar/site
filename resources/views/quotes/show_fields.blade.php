<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{!! $quote->username !!}</p>
</div>

<!-- Position Field -->
<div class="form-group">
    {!! Form::label('position', 'Position:') !!}
    <p>{!! $quote->position !!}</p>
</div>

<!-- Quote Field -->
<div class="form-group">
    {!! Form::label('quote', 'Quote:') !!}
    <p>{!! $quote->quote !!}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{!! $quote->ip !!}</p>
</div>

<!-- Isactive Field -->
<div class="form-group">
    {!! Form::label('isActive', 'Isactive : ') !!}
    @if($quote->isActive == 1)
        <span>
            <i class="fa fa-circle text-success"></i>
        </span>
    @else
        <span>
            <i class="fa fa-circle text-danger"></i>
        </span>
    @endif
</div>
