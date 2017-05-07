<table class="table table-responsive" id="services-table">
    <thead>
        <th>Type</th>
        <th>Title</th>
        <th>Abstract</th>
        <th>Description</th>
        <th>Image</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{!! $service->type !!}</td>
            <td>{!! $service->title !!}</td>
            <td>{!! $service->abstract !!}</td>
            <td>{!! $service->description !!}</td>
            <td>
                {!! Form::label('image', 'Image:') !!}
                @if($service->image !="")
                    <img height="50" width="50" src="{{url('public/images/services/'.$service->image)}}">
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>