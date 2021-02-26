<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>School Id</th>
        <th>Title</th>
        <th>Level Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $classe)
            <tr>
                <td>{{ $classe->school_id }}</td>
            <td>{{ $classe->title }}</td>
            <td>{{ $classe->level_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['classes.destroy', $classe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classes.show', [$classe->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classes.edit', [$classe->id]) }}" class='btn btn-default btn-xs'>
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
