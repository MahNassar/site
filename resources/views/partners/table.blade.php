<table class="table table-responsive" id="partners-table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Logo</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($partners as $partners)
        <tr>
            <td>{!! $partners->name !!}</td>
            <td>
                <img height="50" width="50" src="{{url('public/images/partners/'.$partners->logo)}}">
            </td>
            <td>
                {!! Form::open(['route' => ['partners.destroy', $partners->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('partners.show', [$partners->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('partners.edit', [$partners->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>