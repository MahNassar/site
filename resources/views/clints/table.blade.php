<table class="table table-responsive" id="clints-table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Logo</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clints as $clints)
        <tr>
            <td>{!! $clints->name !!}</td>
            <td>
                <img height="50" width="50" src="{{url('public/images/partners/'.$clints->logo)}}">
            </td>

            <td>
                {!! Form::open(['route' => ['clints.destroy', $clints->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clints.show', [$clints->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clints.edit', [$clints->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>