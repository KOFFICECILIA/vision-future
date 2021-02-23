<div class="table-responsive">
    <table class="table" id="notes-table">
        <thead>
            <tr>
                <th>Note</th>
        <th>Student Id</th>
        <th>Matiere Level Id</th>
        <th>Coefficient Note</th>
        <th>Is Active</th>
        <th>Trimester Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
            <tr>
                <td>{{ $note->note }}</td>
            <td>{{ $note->student_id }}</td>
            <td>{{ $note->matiere_level_id }}</td>
            <td>{{ $note->coefficient_note }}</td>
            <td>{{ $note->is_active }}</td>
            <td>{{ $note->trimester_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['notes.destroy', $note->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('notes.show', [$note->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('notes.edit', [$note->id]) }}" class='btn btn-default btn-xs'>
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
