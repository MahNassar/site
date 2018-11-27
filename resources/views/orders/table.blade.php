<table class="table table-responsive" id="orders-table">
    <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Item Size</th>
        <th>Notes</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{!! $order->name !!}</td>
            <td>{!! $order->phone !!}</td>
            <td>{!! $order->mobile !!}</td>
            <td>{!! $order->email !!}</td>
            <td>{!! $order->item_name !!}</td>
            <td>{!! $order->quantity !!}</td>
            <td>{!! $order->item_size !!}</td>
            <td>{!! $order->notes !!}</td>
            <td>
                {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>