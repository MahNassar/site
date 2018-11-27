<table class="table table-responsive" id="seos-table">
    <thead>
        <th>Meta Description</th>
        <th>Meta Keywords</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($seos as $seo)
        <tr>
            <td>{!! $seo->meta_description !!}</td>
            <td>{!! $seo->meta_keywords !!}</td>
            <td>
                {!! Form::open(['route' => ['seos.destroy', $seo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('seos.show', [$seo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('seos.edit', [$seo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>