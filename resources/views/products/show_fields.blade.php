

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $product->title !!}</p>
</div>

<!-- Abstract Field -->
<div class="form-group">
    {!! Form::label('abstract', 'Abstract:') !!}
    <p>{!! $product->abstract !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $product->description !!}</p>
</div>

<!-- Size Field -->
<div class="form-group">
    {!! Form::label('size', 'Size:') !!}
    <p>{!! $product->size !!}</p>
</div>

<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', 'Area:') !!}
    <p>{!! $product->area !!}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <?php
    $images = explode(PHP_EOL, $product->images);

    ?>
    @foreach($images as $image)
        @if($image !="")
            <img height="100" width="100" src="{{url('public/images/'.$image)}}">
        @endif
    @endforeach
</div>
