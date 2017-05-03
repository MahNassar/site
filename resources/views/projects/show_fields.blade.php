<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $project->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $project->description !!}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <?php
    $images = explode(PHP_EOL, $project->images);

    ?>
    @foreach($images as $image)
        @if($image !="")
            <img height="100" width="100" src="{{url('public/images/projects/'.$image)}}">
        @endif
    @endforeach

</div>


