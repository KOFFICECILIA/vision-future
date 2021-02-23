<div class="table-responsive">
    <table class="table" id="levels-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Parent Id</th>
        <th>Is Exam Level</th>
        <th>Is Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($levels as $level)
            <tr>
                <td>{{ $level->title }}</td>
            <td>{{ $level->slug }}</td>
            <td>{{ $level->description }}</td>
            <td>{{ $level->parent_id }}</td>
            <td>{{ $level->is_exam_level }}</td>
            <td>{{ $level->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['levels.destroy', $level->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('levels.show', [$level->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('levels.edit', [$level->id]) }}" class='btn btn-default btn-xs'>
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
