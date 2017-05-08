<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $team->name !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <img src="{{url('public/images/team/'.$team->photo)}}">
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


