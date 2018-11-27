<table class="table table-responsive" id="careers-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($careers as $careers)
        <tr>
            <td>{!! $careers->title !!}</td>
            <td>{!! $careers->description !!}</td>
            <td>{!! $careers->image !!}</td>
            <td>
                {!! Form::open(['route' => ['careers.destroy', $careers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('careers.show', [$careers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('careers.edit', [$careers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>