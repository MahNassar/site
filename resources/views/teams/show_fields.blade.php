<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $team->name !!}</p>
</div>

<!-- Biography Field -->
<div class="form-group">
    {!! Form::label('biography', 'Biography:') !!}
    <p>{!! $team->biography !!}</p>
</div>

<!-- Position Field -->
<div class="form-group">
    {!! Form::label('position', 'Position:') !!}
    <p>{!! $team->position !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    @if($team->photo)
        <img src="{{url('public/images/team/'.$team->photo)}}" height="100px" width="100px">
    @endif
</div>


