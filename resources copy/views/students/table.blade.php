<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>Matricule</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Photo</th>
        <th>Classe Id</th>
        <th>Birthday</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->matricule }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->photo }}</td>
            <td>{{ $student->classe_id }}</td>
            <td>{{ $student->birthday }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$student->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit', [$student->id]) }}" class='btn btn-default btn-xs'>
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
