<table class="table table-responsive" id="quotes-table">
    <thead>
        <th>Username</th>
        <th>Position</th>
        <th>Quote</th>
        <th>Ip</th>
        <th>Isactive</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($quotes as $quote)
        <tr>
            <td>{!! $quote->username !!}</td>
            <td>{!! $quote->position !!}</td>
            <td>{!! $quote->quote !!}</td>
            <td>{!! $quote->ip !!}</td>
            <td>
                @if($quote->isActive == 1)
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
                {!! Form::open(['route' => ['quotes.destroy', $quote->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('quotes.show', [$quote->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('quotes.edit', [$quote->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>