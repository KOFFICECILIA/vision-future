<div class="table-responsive">
    <table class="table" id="trimesters-table">
        <thead>
            <tr>
                <th>Start Date</th>
        <th>End Date</th>
        <th>Is Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trimesters as $trimester)
            <tr>
                <td>{{ $trimester->start_date }}</td>
            <td>{{ $trimester->end_date }}</td>
            <td>{{ $trimester->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['trimesters.destroy', $trimester->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trimesters.show', [$trimester->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('trimesters.edit', [$trimester->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
