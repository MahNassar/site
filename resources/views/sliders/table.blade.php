<table class="table table-responsive" id="sliders-table">
    <thead>
        <th>Title</th>
        <th>Abstract</th>
        <th>Image</th>
        <th>Isactive</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
            <td>{!! $slider->title !!}</td>
            <td>{!! $slider->abstract !!}</td>
            <td>{!! $slider->image !!}</td>
            <td>
                @if($slider->isActive == 1)
                    <span>
                        <i class="fa fa-circle text-success"></i>
                    </span>
                            @else
                                <span>
                        <i class="fa fa-circle text-danger"></i>
                    </span>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sliders.show', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>